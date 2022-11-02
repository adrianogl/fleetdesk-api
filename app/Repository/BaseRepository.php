<?php

namespace App\Repository;

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
}
