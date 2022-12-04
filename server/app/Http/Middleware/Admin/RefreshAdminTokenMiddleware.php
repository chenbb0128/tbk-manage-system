<?php

namespace App\Http\Middleware\Admin;

use Auth;
use Closure;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


class RefreshAdminTokenMiddleware extends BaseMiddleware
{
    public function handle($request, Closure $next)
    {
        // 验证刺齿请求中是否带有token，没有则抛出异常
        $this->checkForToken($request);
        // 获取当前守护的名称
        $presentGuard = Auth::getDefaultDriver();
        $token = Auth::getToken();
        // 即使过期了，也可以获取token中的载荷信息
        $payload = Auth::manager()->getJWTProvider()->decode($token->get());
        // 如果不包含guard字段或者guard所对应的值与当前的guard守护值不相同
        // 证明是不属于当前guard守护的token
        if(empty($payload['guard']) || $payload['guard'] != $presentGuard) {
            throw new TokenInvalidException();
        }

        try {
            // 检测用户的登陆状态，正常则通过
            if ($this->auth->parseToken()->authenticate()) {
                return $next($request);
            }
            throw new UnauthorizedHttpException('jwt-auth', '未登陆');
        } catch (TokenExpiredException $exception) {
            // 此处捕获到了 token 过期所抛出的 TokenExpiredException 异常，刷新该用户的 token 并将它添加到响应头中
            try {
                // 刷新用户token
                $token = $this->auth->refresh();
                // 使用一次性登录保证此次请求成功
                Auth::onceUsingId(
                    $this->auth->manager()->getPayloadFactory()->buildClaimsCollection()->toPlainArray()['sub']
                );
                $user = Auth::user();
                $user->last_token = $token;
                $user->save();
            } catch (JWTException $exception) {
                // 如果捕捉到异常，则代表refresh页过期了，用户无法刷新令牌，需要重新登录
                throw new UnauthorizedHttpException('jwt-auth', $exception->getMessage());
            }
        }

        // 在相应头返回新的token
        return $this->setAuthenticationHeader($next($request), $token);
    }
}
