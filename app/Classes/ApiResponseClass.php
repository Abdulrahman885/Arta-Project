<?php

namespace App\Classes;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiResponseClass
{

    public static function sendResponse($result, $message, $code = 200)
    {
        $response = [
            'success' => true,
            'data'    => $result,
        ];

        if (!empty($message)) {
            $response['message'] = $message;
        }

        return response()->json($response, $code);
    }

    public static function sendError($message, $error = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($error)) {
            $response['error'] = $error;
        }

        return response()->json($response, $code);
    }

    public static function sendValidationError($errors, $code = 422)
    {
        return response()->json([
            'success' => false,
            'message' => 'Validation Error',
            'errors' => $errors,
        ], $code);
    }
}