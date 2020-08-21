<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menu;

class MenuController extends Controller
{
    public function getMenu()
    {
        //$items = DB::table('menus')->where('parentId', '1')->get();
        $items=Menu::all();
        return view('welcome', compact('items'));
    }

}

