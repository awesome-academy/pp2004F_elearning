<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $show=Course::all();
        return view('admin.home.users', compact('show'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->name = $request->name;
        $course->quantity = $request->quantity;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->place = $request->place;
        $course->timeStart = $request->timeStart;
        $course->timeEnd = $request->timeEnd;
        $course->teacher = $request->teacher;
        $course->status = $request->status;

        if($request->hasFile('image')){
            $image=$request->file('image');
            $path=$image->getClientOriginalExtension();
            $name=time().".".$path;
            $image->move('images', $name);
            $course->image=$name;
        }

        $course->save();
        return redirect()->route('courses.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit = Course::find($id);
        return view('admin.home.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit=Course::find($id);
        $edit->name=$request->name;
        $edit->quantity = $request->quantity;
        $edit->price = $request->price;
        $edit->description = $request->description;
        $edit->place = $request->place;
        $edit->timeStart = $request->timeStart;
        $edit->timeEnd = $request->timeEnd;
        $edit->teacher = $request->teacher;
        $edit->status = $request->status;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $path=$image->getClientOriginalExtension();
            $name=time().".".$path;
            $image->move('images', $name);
            $edit->image=$name;
        }
        $edit->save();
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Course::find($id);
        $del->delete();
        return redirect()->route('courses.index');
    }
}
