<?php

namespace App\Repository\Eloquent;

use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{

    protected $model;


    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }


    public function find($id)
    {
        return $this->model->find($id);
    }

    public function delete()
    {
        return $this->model->delete();
    }

    public function save()
    {
        return $this->model->save();
    }
}
