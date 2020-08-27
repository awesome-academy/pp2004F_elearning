<?php

namespace App\Repositories\Config;


abstract class BaseRepositoty implements BaseRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function all($columns = ['*'])
    {
        // TODO: Implement all() method.
        return $this->model->get();
    }

    public function find($id, $columns = ['*'])
    {
        // TODO: Implement find() method.
        $result = $this->model->find($id);
        return $result;
    }

    public function update(array $attr, $id)
    {
        // TODO: Implement update() method.
        $result = $this->model->find($id);
        if ($result) {
            $result->update($attr);
        }
        return false;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $result = $this->model->find($id);
        if ($result) {
            $result->delete();
        }
        return false;
    }

    public function save()
    {
        // TODO: Implement save() method.
        return $this->model->save();
    }

    public function takeModel()
    {
        // TODO: Implement takeModel() method.
        return $this->model;
    }
}
