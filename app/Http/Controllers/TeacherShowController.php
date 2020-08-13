<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherShowController extends Controller
{
    public function show()
    {
        $show = Teacher::all();
        return view('teacher', compact('show'));
    }

    public function showDetail($id)
    {
        $details = Teacher::find($id);
        return view('teacher-detail', compact('details'));
    }
}
