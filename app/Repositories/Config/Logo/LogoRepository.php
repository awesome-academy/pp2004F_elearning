<?php

namespace App\Repositories\Config\Logo;

use App\Models\Logo;
use App\Repositories\Config\BaseRepositoty;

class LogoRepository extends BaseRepositoty implements LogoRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return Logo::class;
    }

    public function index()
    {
        return Logo::all();
    }

    public function store(array $attr)
    {
        return $this->model->create($attr);
    }
}
