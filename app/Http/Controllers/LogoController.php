<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function index()
    {
        $show = Logo::all();
        return view('config.logo.index', compact('show'));
    }

    public function create()
    {
        return view('config.logo.create');
    }

    public function store(Request $request)
    {
        $create = new Logo;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $create->image = $name;
        }
        $create->save();
        return redirect('logo');
    }

    public function edit($id)
    {
        $edit=Logo::find($id);
        return view('config.logo.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = Logo::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $edit->image = $name;
        }
        $edit->save();
        return redirect('logo');
    }
}
