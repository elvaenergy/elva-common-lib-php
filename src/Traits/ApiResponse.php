<?php

namespace Elva\Common\Lib\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * @param string $message
     * @return JsonResponse
     */
    protected function ok(string $message): JsonResponse
    {
        return $this->success($message, 200);
    }


    /**
     * @param string $message
     * @param int $statusCode
     * @return JsonResponse
     */
    protected function success(string $message, int $statusCode = 200): JsonResponse
    {
        return new JsonResponse([
            'message' => $message,
            'status'  => $statusCode,
        ], $statusCode);
    }
}