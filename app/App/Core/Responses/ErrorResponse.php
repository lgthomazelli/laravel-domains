<?php

namespace App\Core\Responses;

class ErrorResponse
{
    public function __invoke(string $message, int $status)
    {
        return [
            "status" => $status,
            "message" => $message,
        ];
    }
}