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

class MyCourseController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        if ($user_id === null){
            return back()->with('status', 'Plz log in!');
        }
        else{
            if(request()->category){
                $user = User::whereId($user_id)->first();
                $usercourses = $user->courses()->get()->toArray();
                $usercourses_id = array_column($usercourses, 'id');
                $categorycourses = Course::with('categories')->whereHas('categories', function($query){
                    $query->where('name', request()->category);})->get()->toArray();
                $categorycourses_id = array_column($categorycourses, 'id');
                $coursefinal_id = array_intersect($categorycourses_id, $usercourses_id);
                $mycourses = DB::table('courses')->whereIn('id', $coursefinal_id)->get();
                $categoryName = request()->category;
                $categories = Category::all();
                return view('mycourse.index', compact('mycourses', 'categories', 'categoryName'));        
            }
            else{
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
        if ($user_id === null){
            return redirect('/home');
        }
        else{
            if(!in_array($course->id, $usercourses_id)){
                return redirect('/home');
            }
            else{
                $lessons = $course->lessons()->get();
                return view('mycourse.lesson', compact('course', 'lessons'));
            }
        }
    }

    public function lesson($id, $lesson_id)
    {
        $user_id = Auth::id();
        $user = User::whereId($user_id)->first();
        $usercourses = $user->courses()->get()->toArray();
        $usercourses_id = array_column($usercourses, 'id');
        $course = Course::whereId($id)->first();
        if ($user_id === null){
            return redirect('/home');
        }
        else{
            if(!in_array($course->id, $usercourses_id)){
                return redirect('/home');
            }
            else{
                $lesson = Lesson::whereId($lesson_id)->first();
                return view('mycourse.content', compact('course', 'lesson'));
            }
        } 
    }
}
