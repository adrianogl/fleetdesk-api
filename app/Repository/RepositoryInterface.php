<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function all(array $columns): ?Collection;
    public function findById(int $id): ?Model;
    public function create(array $data): Model;
}
