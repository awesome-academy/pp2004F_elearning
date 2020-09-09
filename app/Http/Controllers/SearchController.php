<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class SearchController extends Controller
{
    public function searchCourse(Request $request)
    {
        $courses = Course::where('name', 'like', '%' . $request->value . '%')->get();
        return response()->json($courses);
    }
}
