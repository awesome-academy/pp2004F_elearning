<?php

namespace App\Repositories\Config;


interface BaseRepositoryInterface
{
    public function all($columns = ['*']);

    public function find($id, $columns = ['*']);

    public function update(array $input, $id);

    public function delete($id);

    public function save();

    public function takeModel();
}
