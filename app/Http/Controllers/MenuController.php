<?php

namespace App\Http\Controllers;

use App\Repositories\Config\Menu\MenuRepository;
use App\Repositories\Config\Menu\MenuRepositoryInterface;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuRepo;

    public function __construct(MenuRepositoryInterface $menuRepo)
    {
        $this->menuRepo = $menuRepo;
    }

    public function index()
    {
        $items = $this->menuRepo->index();
        return view('config.menu.index', compact('items'));
    }

    public function create()
    {
        return view('config.menu.create');
    }

    public function store(Request $request)
    {
        $create = $this->menuRepo->takeModel();
        $create->name = $request->name;
        $create->link = $request->link;
        $create->save();
        return redirect()->route('menuIndex');
    }

    public function edit($id)
    {
        $edit = $this->menuRepo->find($id);
        return view('config.menu.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = $this->menuRepo->find($id);
        $edit->name = $request->name;
        $edit->link = $request->link;
        $edit->save();
        return redirect()->route('menuIndex');
    }

    public function delete($id)
    {
        $delete = $this->menuRepo->find($id)->delete();
        return redirect()->route('menuIndex');
    }
}
