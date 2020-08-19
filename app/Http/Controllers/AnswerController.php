<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::all();
        return view('answers.index', compact('answers'));
    }

    public function create()
    {
        return view('answers.create');
    }

    public function store(Request $request)
    {
        $answer = new Answer;
        $answer->content = $request->get('content');
        $answer->question_id = $request->get('question_id');
        $answer->status = $request->get('status');
        $answer->save();
        return redirect('answers');
    }

    public function edit($id)
    {
        $answer = Answer::whereId($id)->firstOrFail();
        return view('answers.edit', compact('answer'));
    }

    public function update(Request $request, $id)
    {
        $answer = Answer::find($id);
        $answer->content = $request->get('content');
        $answer->question_id = $request->get('question_id');
        $answer->status = $request->get('status');
        $answer->save();
        return redirect('answers');
    }

    public function delete($id)
    {
        $answer = Answer::find($id);
        $answer->delete();
        return redirect('answers');
    }
    
}
