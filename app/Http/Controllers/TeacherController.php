<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers/index', compact('teachers')) ;
    }

    public function create()
    {
        return view('teachers/create');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher;
        $teacher->name = $request->get('name');
        $teacher->email = $request->get('email');
        $teacher->phone = $request->get('phone');
        $teacher->about = $request->get('about');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $teacher->image = $name;
        }
        $teacher->save();
        return redirect()->route('teachers-index');
    }

    public function edit($id)
    {
        $teacher = Teacher::whereId($id)->firstOrFail();
        return view('teachers/edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name = $request->get('name');
        $teacher->email = $request->get('email');
        $teacher->phone = $request->get('phone');
        $teacher->about = $request->get('about');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $teacher->image = $name;
        }
        $teacher->save();
        return redirect('teachers');
    }

    public function delete($id)
    {
        $teacher = Teacher::whereId($id);
        $teacher->delete();
        return redirect('teachers');
    }

}
