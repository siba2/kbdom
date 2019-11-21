<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements Repository {

    /** @var Model */
    private $model;

    /**
     * AbstractRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model) {
        $this->model = $model;
    }

    /**
     * @return array
     */
    public function getFillable(): array {
        return $this->model->getFillable();
    }

    /**
     * @return mixed
     */
    public function select() {
        return $this->model->select();
    }

    /**
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection|Model[]
     */
    public function all(array $columns = ['*']) {
        return $this->model->all($columns);
    }

    /**
     * @param array $columns
     * @return mixed
     */
    public function first(array $columns = ['*']) {
        return $this->model->first($columns);
    }

    /**
     * @param int $id
     * @param array $columns
     * @return mixed
     */
    public function find(int $id, array $columns = ['*']) {
        return $this->model->findOrFail($id, $columns);
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes) {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @param $id
     * @return bool
     */
    public function update(array $attributes, $id) {
        $model = $this->find($id, ['*']);

        return $model->update($attributes);
    }

    /**
     * @param $id
     * @return bool|null
     * @throws \Exception
     */
    public function delete($id): ?bool {
        $model = $this->find($id);

        return $model->delete();
    }
}
