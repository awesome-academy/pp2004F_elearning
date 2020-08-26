<?php

namespace App\Http\Controllers;

use App\Repositories\Config\Menu\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuRepo;

    public function __construct(MenuRepository $menuRepo)
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
        $create = $this->menuRepo->create($request->all());
        return redirect('menu');
    }

    public function delete($id){
        $delete=$this->menuRepo->find($id)->delete();
        return redirect('menu');
    }
}
