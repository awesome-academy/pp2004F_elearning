<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $question = new Question;
        $question->content = $request->get('content');
        $question->lesson_id = $request->get('lesson_id');
        $question->save();
        return redirect('questions');
    }

    public function edit($id)
    {
        $question = Question::whereId($id)->firstOrFail();
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->content = $request->get('content');
        $question->lesson_id = $request->get('lesson_id');
        $question->save();
        return redirect('questions');
    }

    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect('questions');
    }

    public function answer($id)
    {
        $question = Question::find($id);
        $answers = $question->answers()->get();
        return view('questions.answer', compact('answers', 'question'));
    }

    public function answercreate($id)
    {
        $question = Question::find($id);
        return view('questions.answercreate', compact('question'));
    }

    public function answerstore(Request $request)
    {
        $answer = new Answer;
        $answer->content = $request->get('content');
        $answer->question_id = $request->get('question_id');
        $answer->status = $request->get('status');
        $answer->save();
        return redirect()->route('question.answer', [$answer->question_id]);
    }
    
    public function answeredit($id, $answer_id)
    {
        $answer = Answer::whereId($answer_id)->firstOrFail();
        return view('questions.answeredit', compact('answer'));
    }

    public function answerupdate(Request $request, $id, $answer_id)
    {
        $answer = Answer::find($answer_id);
        $answer->content = $request->get('content');
        $answer->question_id = $request->get('question_id');
        $answer->status = $request->get('status');
        $answer->save();
        return redirect()->route('question.answer', [$answer->question_id]);
    }

    public function answerdelete($id, $answer_id)
    {
        $answer = Answer::find($answer_id);
        $abc = $answer->id;
        $answer->delete();
        return redirect()->route('question.answer', $abc);
    }
}
