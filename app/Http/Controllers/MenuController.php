<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        //$items = DB::table('menus')->where('parentId', '1')->get();
        $items = Menu::all();
        return View('layout.header', compact('items'));
    }
}
