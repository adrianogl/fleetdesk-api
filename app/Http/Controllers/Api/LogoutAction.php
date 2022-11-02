<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LogoutAction extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * @group Auth
     */
    public function __invoke(): JsonResponse
    {
        Auth::logout();
        return $this->responseSuccess();
    }
}
