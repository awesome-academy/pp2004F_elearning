<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::paginate(5);
        return view('lessons.index', compact('lessons'));
    }

    public function create()
    {
        return view('lessons.create');
    }

    public function store(Request $request)
    {
        $lesson = new Lesson;
        $lesson->name = $request->get('name');
        $lesson->course_id = $request->get('course_id');
        $lesson->content = $request->get('content');
        $lesson->save();
        return redirect('lessons');
    }

    public function edit($id)
    {
        $lesson = Lesson::whereId($id)->firstOrFail();
        return view('lessons.edit', compact('lesson'));
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        $lesson->name = $request->get('name');
        $lesson->course_id = $request->get('course_id');
        $lesson->content = $request->get('content');
        $lesson->save();
        return redirect('lessons');
    }

    public function delete($id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect('lessons');
    }

}
