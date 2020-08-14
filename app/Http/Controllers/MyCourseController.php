<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Models\Course;
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
}
