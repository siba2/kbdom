<?php

namespace App\Repositories;

interface Repository {
    public function select();
    public function all(array $columns = ['*']);
    public function first(array $columns = ['*']);
    public function find(int $id, array $columns = ['*']);

    public function create(array $attributes);
    public function update(array $attributes, $id);
    public function delete($id);
}
