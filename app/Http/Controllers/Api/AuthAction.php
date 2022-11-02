<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AuthRequest;
use Illuminate\Contracts\Auth\Guard;

class AuthAction extends Controller
{
    /**
     * @unauthenticated
     */
    public function __invoke(Guard $auth, AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($auth->attempt($credentials)) {
            return $this->responseSuccess([
                'token' => $auth->issue(),
            ]);
        }

        return $this->responseError([
            'message' => 'Invalid credentials',
        ], 401);
    }
}
