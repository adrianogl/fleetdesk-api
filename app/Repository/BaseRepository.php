<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{
    public function all(array $columns = ['*']): Collection
    {
        return $this->model->newQuery()
            ->select($columns)
            ->get();
    }

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
