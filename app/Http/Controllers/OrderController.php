<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Refund;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        return view('orders.index', compact('orders'));
    }

    public function approve($id)
    {
        $order = Order::whereId($id)->first();
        $courses = $order->courses()->get()->toArray();
        $courses_id = array_column($courses, 'id');                 
        $user = $order->user()->first();
        $user_course = $user->courses()->get()->toArray();
        $user_course_id = array_column($user_course, 'id');
        $coursefinal_id = array_diff($courses_id,$user_course_id);
        $coursefinalrefund_id = array_intersect($courses_id,$user_course_id);
        if (!empty($coursefinalrefund_id)){
            $refund = new Refund;
            $refund->user_id = $order->user_id;
            $refund->courses()->attach($coursefinalrefund_id);
            $refundamount = DB::table('courses')->join('course_refund', 'courses.id', '=', 'course_refund.course_id')
                                                ->selectRaw('SUM(price) as totalamount')->first();
            $refund->amount = $refundamount->totalamount;
        }
        else{
            $user->courses()->attach($coursefinal_id);
            $order->status = 0;
            $order->save();
        }   
    }

    public function deny($id)
    {
        $order = Order::whereId($id)->first();
        $order->status = 2;
        $order->save();
    }
}
