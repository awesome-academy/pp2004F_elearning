<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Menu;

class HeaderComposer
{
    public $menus = [];

    public function __construct()
    {
        $this->menus = Menu::all();
    }

    public function compose(View $view)
    {
        $view->with('menus', $this->menus);
    }
}