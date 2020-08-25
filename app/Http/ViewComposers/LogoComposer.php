<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Logo;

class LogoComposer
{
    public $logo = [];

    public function __construct()
    {
        $this->logo = Logo::all();
    }

    public function compose(View $view)
    {
        $view->with('logo', $this->logo);
    }
}
