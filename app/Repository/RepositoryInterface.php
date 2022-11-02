<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function findById(int $id): ?Model;

    public function create(array $data): Model;
}
