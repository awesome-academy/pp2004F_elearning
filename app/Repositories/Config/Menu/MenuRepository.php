<?php

namespace App\Repositories\Config\Menu;

use App\Models\Menu;
use App\Repositories\Config\BaseRepositoty;

class MenuRepository extends BaseRepositoty implements MenuRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return Menu::class;
    }

    public function index()
    {
        return Menu::all();
    }

    public function store(array $attr)
    {
        return $this->model->create($attr);
    }
}
