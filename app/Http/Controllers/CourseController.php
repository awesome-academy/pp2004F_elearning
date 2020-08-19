<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class CourseController extends Controller
{
    public function index()
    {
        if (request()->category){
            $courses = Course::with('categories')->whereHas('categories', function($query){
                $query->where('name', request()->category);
            })->get();
            $categories = Category::all();
            $categoryName = $categories->where('name', request()->category)->first()->name;
    } else{
            $courses = Course::all();
            //var_dump($courses);
            //dd($courses);
            $categories = Category::all();
            $categoryName = 'All course';
        }
        return view('courses.index', compact('courses', 'categories', 'categoryName'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->name = $request->get('name');
        $course->description = $request->get('description');
        $course->teacher_id = $request->get('teacher_id');
        $course->price = $request->get('price');
        $course->save();
        $category = $request->get('category_id');
        $course->categories()->attach($category);
        return redirect('courses');
    }

    public function edit($id)
    {
        $course = Course::whereId($id)->firstOrFail();
        $categories = Category::all();
        return view('courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->get('name');
        $course->description = $request->get('description');
        $course->teacher_id = $request->get('teacher_id');
        $course->price = $request->get('price');
        $course->save();
        $course->categories()->detach();
        $category = $request->get('category_id');
        $course->categories()->attach($category);
        return redirect('courses');
    }

    public function delete($id)
    {
        $course = Course::whereId($id);
        $course->delete();
        return redirect('courses');
    }
}
