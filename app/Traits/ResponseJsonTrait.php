<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

trait ResponseJsonTrait
{
    public function responseSuccess(array $data = [], int $statusCode = 200): JsonResponse
    {
        return Response::json(
            array_merge(['success' => true], $data), $statusCode);
    }

    public function responseError(array $data = [], int $statusCode = 400): JsonResponse
    {
        return Response::json(
            array_merge(['success' => false], $data), $statusCode);
    }
}
