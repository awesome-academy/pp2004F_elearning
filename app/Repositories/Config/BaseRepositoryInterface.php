<?php

namespace App\Repositories\Config;


interface BaseRepositoryInterface
{
    public function all($columns = ['*']);

    public function find($id, $columns = ['*']);

    public function store(array $input);

    public function update(array $input, $id);

    public function delete($id);
}
