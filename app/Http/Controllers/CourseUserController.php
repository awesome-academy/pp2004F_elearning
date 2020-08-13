<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Cart;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseUserController extends Controller
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
            $categories = Category::all();
            $categoryName = 'All course';
        }
        return view('courseuser.index', compact('courses', 'categories', 'categoryName'));
    }

    public function show($id)
    {
        $course = Course::whereId($id)->firstOrFail();
        $categories = Category::all();
        return view('courseuser.show', compact('course', 'categories'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        if ($user_id === null){
            return back()->with('status', "You must log in to add course to cart!!");
        }
        else{
            if (DB::table('carts')->where('user_id', $user_id)->exists()){
                $cart = Cart::where('user_id', $user_id)->first();
                $course = $request->get('course_id');
                if(DB::table('cart_course')->where(function($query) use($cart, $course) {$query->where('cart_id', $cart->id)
                                                                                               ->where('course_id', $course);})->exists()){
                    return back()->with('status', 'This course has been already added to your cart!!');
                }
                else{
                    $cart->courses()->attach($course);
                    return back()->with('status', 'This course has been added to your cart!');
                }    
            }
            else{
                $cart = new Cart;
                $cart->user_id = Auth::id();
                $cart->save();
                $course = $request->get('course_id');
                $cart->courses()->attach($course);
                return back()->with('status', 'This course has been added to your cart!');
            }
        }    
        
    }

    public function showcart(){
        $user_id = Auth::id();
        if ($user_id === null){
            return redirect(route('courseuser.index'))->with('status', 'Plz log in!!');
        }
        else{
            $cart = Cart::where('user_id', $user_id)->first();
            if( $cart === null){
                return redirect(route('courseuser.index'))->with('status', 'There is no item in cart!!');
            }
            else{
                $courses = $cart->courses()->get();
                $totalamount = DB::table('courses')->join('cart_course', 'courses.id', '=', 'cart_course.course_id')
                                                 ->selectRaw('SUM(price) as totalamount')->first();
                //var_dump($totalamount);                           
                return view('courseuser.cart', compact('cart', 'courses', 'totalamount'));
            }
        }
    }

    public function dropcourse($id)
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)->first();
        $cart->courses()->detach($id);
        return back();
    }

    public function delete()
    {
        $abc = request()->id;
        dd($abc);
        $cart = Cart::whereId($abc);
        $cart->delete();
        return redirect()->route('courseuser.index');
    }

}
