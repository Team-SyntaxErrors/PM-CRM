<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponse
{
    /**
     * Success response send function
     *
     * @param mixed $data
     * @param string|null $message
     * @param int $status
     * @return JsonResponse
     */
    protected function successResponse(mixed  $data,
                                       string $message = null,
                                       int    $status    = Response::HTTP_OK): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
            'status' => $status,
        ], $status);
    }

    /**
     * Error response send function
     *
     * @param string $message
     * @param string $line
     * @param int $status
     * @return JsonResponse
     */
    protected function errorResponse(string $message,
                                     string $line,
                                     int    $status = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'line' => $line,
            'status' => $status,
        ], $status);
    }
}
