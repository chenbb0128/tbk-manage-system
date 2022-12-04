<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as FoundationResponse;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class AuthorizationsController extends BaseController
{
    public function login(Request $request)
    {
        $presentGuard = Auth::getDefaultDriver();
        $token = Auth::guard('admin')->claims(['guard' => $presentGuard])
            ->attempt(['username' => $request->username, 'password' => $request->password]);

        if ($token) {
            $user = Auth::user();
            if ($user->last_token) {
                try {
                    Auth::guard('admin')->setToken($user->last_token)->invalidate();
                } catch (TokenExpiredException $e) {
                    // 因为让一个过期的token再失效，会抛出异常，所以我们捕捉异常，不需要做任何处理
                }
            }
            $user->last_token = $token;
            $user->save();
            return $this->setStatusCode(FoundationResponse::HTTP_CREATED)->success(['token' => 'bearer ' . $token]);
        }

        return $this->failed('账号或密码错误', FoundationResponse::HTTP_BAD_REQUEST);
    }

    public function logout()
    {
        Auth::logout();
        return $this->success('退出成功');
    }
}
