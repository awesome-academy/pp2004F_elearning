<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $items = Menu::all();
        return view('config.menu.index', compact('items'));
    }

    public function create()
    {
        return view('config.menu.create');
    }

    public function store(Request $request)
    {
        $new = new Menu;
        $new->name = $request->name;
        $new->link = $request->link;
        $new->save();
        return redirect('menu/create');
    }

    public function delete($id)
    {
        $del = Menu::find($id);
        $del->delete();
        return redirect('menu');
    }

}
