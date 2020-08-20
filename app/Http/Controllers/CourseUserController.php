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
use App\Models\Order;

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
        //$categories = Category::all();
        $categories=Category::find($id);
        return view('courseuser.show', compact('course', 'categories'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        if ($user_id === null){
            return back()->with('status', "You must log in to add course to cart!!");
        }
        else{
            $course = $request->get('course_id');
            if(DB::table('course_user')->where(function($query) use($course,$user_id){$query->where('course_id', $course)
                ->where('user_id', $user_id);})->exists()){
                    return back()->with('status', 'You already got this course!!');
            }
            else{
                if (DB::table('carts')->where('user_id', $user_id)->exists()){
                    $cart = Cart::where('user_id', $user_id)->first();
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
                    $cart->courses()->attach($course);
                    return back()->with('status', 'This course has been added to your cart!');
                }
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
                $totalamount = DB::table('cart_course')->where('cart_id', $cart->id)
                                                 ->join('courses', 'cart_course.course_id', '=', 'courses.id')
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

    public function delete($id)
    {
        $cart = Cart::whereId($id);
        $cart->delete();
        return redirect()->route('courseuser.index');
    }

    public function storeorder(Request $request)
    {
        $order = new Order;
        $order->user_id = $request->user_id;
        $order->amount = $request->amount;
        $order->status = 1;
        $order->save();
        $order->courses()->attach($request->course_id);
        $cart = Cart::whereId($request->cart_id);
        $cart->delete();
        return redirect()->route('courseuser.index')->with('status', 'Your order has been save! Plz pay money!!');
    }

}
