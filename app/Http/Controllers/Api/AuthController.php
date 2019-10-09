<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use JWTAuth;
use Lang;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $this->validateLogin($request);
        $credentials = $this->credentials($request);
        $token = JWTAuth::attempt($credentials);

        return $token ?
            ['token' => $token] :
            response()->json([
                'error' => Lang::get('auth.failed')
            ], 400);
    }

    public function logout()
    {
        Auth::guard('api')->logout();
        return response()->json([], 204);
    }

    public function me()
    {
        $user = Auth::guard('api')->user();
        return new UserResource($user);
    }

    public function refresh()
    {
        $token = Auth::guard('api')->refresh();
        return ['token' => $token];
    }
}
