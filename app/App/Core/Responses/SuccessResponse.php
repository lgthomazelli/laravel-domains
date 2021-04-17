<?php

namespace App\Core\Responses;

use Illuminate\Http\Response;

class SuccessResponse
{
    public function __invoke(string $message, array $attributes = [])
    {
        return [
            "status" => Response::HTTP_OK,
            "message" => $message,
            "attributes" => $attributes,
        ];
    }
}