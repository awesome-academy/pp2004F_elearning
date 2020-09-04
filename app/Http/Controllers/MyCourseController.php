<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;

class MyCourseController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        if ($user_id === null) {
            return back()->with('status', 'Plz log in!');
        }
        else {
            if (request()->category) {
                $user = User::whereId($user_id)->first();
                $usercourses = $user->courses()->get()->toArray();
                $usercourses_id = array_column($usercourses, 'id');
                $categorycourses = Course::with('categories')->whereHas('categories', function($query) {
                    $query->where('name', request()->category);})->get()->toArray();
                $categorycourses_id = array_column($categorycourses, 'id');
                $coursefinal_id = array_intersect($categorycourses_id, $usercourses_id);
                $mycourses = DB::table('courses')->whereIn('id', $coursefinal_id)->get();
                $categoryName = request()->category;
                $categories = Category::all();
                return view('mycourse.index', compact('mycourses', 'categories', 'categoryName'));        
            }
            else {
                $user = User::whereId($user_id)->first();
                $mycourses = $user->courses()->get();
                $categories = Category::all();
                $categoryName = 'All course';
                return view('mycourse.index', compact('mycourses', 'categories', 'categoryName'));
            }
        }
    }

    public function course($id)
    {
        $user_id = Auth::id();
        $user = User::whereId($user_id)->first();
        $usercourses = $user->courses()->get()->toArray();
        $usercourses_id = array_column($usercourses, 'id');
        $course = Course::whereId($id)->first();
        if ($user_id === null) {
            return redirect('/home');
        }
        else {
            if (!in_array($course->id, $usercourses_id)) {
                return redirect('/home');
            }
            else {
                $lessons = $course->lessons()->paginate(6);
                return view('mycourse.lesson', compact('course', 'lessons'));
            }
        }
    }

    public function lesson($id, $lesson_id)
    {
        $user_id = Auth::id();
        if ($user_id === null) {
            return redirect('/home');
        }
        else {
            $user = User::whereId($user_id)->first();
            $usercourses = $user->courses()->get()->toArray();
            $usercourses_id = array_column($usercourses, 'id');
            $course = Course::whereId($id)->first();
            if (!in_array($course->id, $usercourses_id)) {
                return redirect('/home');
            }
            else {
                $lesson = Lesson::whereId($lesson_id)->first();
                return view('mycourse.content', compact('course', 'lesson'));
            }
        } 
    }

    public function exam($id, $lesson_id)
    {
        $user_id = Auth::id();
        if ($user_id === null) {
            return redirect('/home');
        }
        else {
            $user = User::whereId($user_id)->first();
            $usercourses = $user->courses()->get()->toArray();
            $usercourses_id = array_column($usercourses, 'id');
            $course = Course::whereId($id)->first();
            if (!in_array($course->id, $usercourses_id)) {
                return redirect('/home');
            }
            else {
                $lesson = Lesson::whereId($lesson_id)->first();
                $questions = Question::with(['lesson', 'answers'=> function ($query) {$query->inRandomOrder();}])
                        ->whereHas('lesson', function($query) use($lesson) {$query->where('id', $lesson->id);})->inRandomOrder()->get();
                return view('mycourse.exam', compact('questions'));
            }
        } 
    }

    public function storeexam(Request $request)
    {
        $answers = Answer::find(array_values($request->get('questions')));
        $answers_array_id = array_column(Answer::find(array_values($request->get('questions')))->toArray(), 'id');
        //dd($answers_array_id);
        $result = $answers->sum('status');
        $def = count($answers);
        $questionanswers = $answers->mapWithKeys(function($answer) {
            return [$answer->question_id => [
                'answer_id' => $answer->id,
                'status' => $answer->status,
            ]];
        })->toArray();
        $questions = Question::find(array_keys($request->get('questions')));
        $questions_array = Question::find(array_keys($request->get('questions')))->toArray();
        $questions_array_id = array_column($questions_array, 'id');
        //dd($questions_array_id[0]);
        $question = Question::whereId($questions_array_id[0])->first();
        //dd($question);
        $lesson = $question->lesson()->first();
        //dd($lesson);
        $score = "$result/$def";
        $userresult = new Result;
        $userresult->user_id = Auth::id();
        $userresult->lesson_id =  $lesson->id;
        $userresult->result = "$result/$def";
        $userresult->save();
        $userresult->answers()->attach($answers_array_id);
        return view('mycourse.result', compact('questions', 'questionanswers', 'score'))->with('status', "Your score is $result/$def");  
    }

    public function myresult()
    {
        $user_id = Auth::id();
        if ($user_id === null) {
            return redirect('/home');
        }
        else {
            $user = User::whereId($user_id)->first();
            $results = $user->results()->get();
            return view('mycourse.myresult', compact('results'));
        }
    }

    public function myresultdetail($id)
    {
        $user_id = Auth::id();
        if ($user_id === null) {
            return redirect('/home');
        }
        else {
            $user = User::whereId($user_id)->first();
            $result = Result::whereId($id)->first();
            if (!$user->id === $result->user_id) {
                return redirect('/home');
            }
            else {
                $answers = $result->answers()->get();
                return view('mycourse.myresultdetail', compact('answers', 'result'));
            }
        }
    }

}
