<?php

namespace App\Http\Controllers;

use App\Repositories\Config\Logo\LogoRepositoryInterface;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    protected $logoRepo;

    public function __construct(LogoRepositoryInterface $logoRepoVar)
    {
        $this->logoRepo = $logoRepoVar;
    }

    public function index()
    {
        $show = $this->logoRepo->index();
        return view('config.logo.index', compact('show'));
    }

    public function create()
    {
        return view('config.logo.create');
    }

    public function store(Request $request)
    {
        $create = $this->logoRepo->takeModel();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $create->image = $name;
        }
        $create->save();
        return redirect()->route('logo');
    }

    public function edit($id)
    {
        $edit = $this->logoRepo->find($id);
        return view('config.logo.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = $this->logoRepo->find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $edit->image = $name;
        }
        $edit->save();
        return redirect()->route('logo');
    }
}
