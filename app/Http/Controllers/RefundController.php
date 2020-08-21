<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function index()
    {
        $refunds = Refund::all();
        return view('refunds.index', compact('refunds'));
    }

    public function delete($id)
    {
        $refund = Refund::whereId($id)->first();
        $refund->delete();
        return back();
    }

}
