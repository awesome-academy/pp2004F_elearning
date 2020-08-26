<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Config\Logo\LogoRepository;

class LogoController extends Controller
{
    protected $logoRepo;

    public function __construct(LogoRepository $logoRepoVar)
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
        return $this->logoRepo->create($request->all());
    }
}
