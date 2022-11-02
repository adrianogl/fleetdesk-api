<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{
    public function findById(int $modelId, array $columns = ['*']): ?Model
    {
        return $this->model->newQuery()
            ->select($columns)
            ->where('id', $modelId)
            ->first();
    }

    public function create(array $data): Model
    {
        return $this->model->newQuery()
            ->create($data);
    }

    public function update(int $modelId, array $data): Model
    {
        $model = $this->findById($modelId);
        $model->update($data);
        return $model;
    }

    public function delete(int $modelId): bool
    {
        $model = $this->findById($modelId);
        return $model->delete();
    }
}
