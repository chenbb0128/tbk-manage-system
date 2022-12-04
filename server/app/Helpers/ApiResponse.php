<?php

namespace App\Helpers;

use Symfony\Component\HttpFoundation\Response as FoundationResponse;
use Response;

trait ApiResponse
{
    /**
     * @var int
     */
    protected $statusCode = FoundationResponse::HTTP_OK;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * 设置http状态码
     * @param $statusCode
     * @param $httpCode
     * @return $this
     */
    public function setStatusCode($statusCode, $httpCode = null)
    {
        $httpCode = $httpCode ?? $statusCode;
        $this->statusCode = $httpCode;
        return $this;
    }

    /**
     * @param $data
     * @param $header
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond($data, $header = [])
    {
        return Response::json($data, $this->getStatusCode(), $header);
    }

    /**
     * @param $status
     * @param array $data
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function status($status, array $data, $code = null)
    {
        if ($code) {
            $this->setStatusCode($code);
        }

        $status = [
            'status' => $status,
            'code' => $this->statusCode
        ];

        $data = array_merge($status, $data);
        return $this->respond($data);
    }

    /**
     * 返回错误休息
     * @param $message
     * @param $code
     * @param $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function failed($message, $code = FoundationResponse::HTTP_BAD_REQUEST, $status = 'error')
    {
        return $this->setStatusCode($code)->message($message, $status);
    }

    /**
     * @param $message
     * @param $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function message($message, $status = 'success')
    {
        return $this->status($status, [
            'message' => $message
        ]);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function internalError($message = 'Internal Error!')
    {
        return $this->failed($message, FoundationResponse::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function created($message = 'created')
    {
        return $this->setStatusCode(FoundationResponse::HTTP_CREATED)->message($message);
    }

    /**
     * 返回正确
     * @param $data
     * @param $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($data, $status = 'success')
    {
        return $this->status($status, compact('data'));
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function noFond($message = 'Not Fond!')
    {
        return $this->failed($message, FoundationResponse::HTTP_NOT_FOUND);
    }
}
