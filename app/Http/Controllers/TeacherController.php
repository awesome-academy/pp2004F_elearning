<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers/index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers/create');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher(array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'about' => $request->get('about'),
        ));
        $teacher->save();
        return redirect('teachers/index');
    }

    public function edit($id)
    {
        $teacher = Teacher::whereId($id)->firstOrFail();
        return view('teachers/edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::whereId($id)->firstOrFail();
        $teacher->name = $request->get('name');
        $teacher->email = $request->get('email');
        $teacher->phone = $request->get('phone');
        $teacher->about = $request->get('about');
        $teacher->save();
        return redirect('teachers/index');
    }

    public function delete($id)
    {
        $teacher = Teacher::whereId($id)->firstOrFail();
        $teacher->delete();
        return redirect('teachers/index');
    }

}
