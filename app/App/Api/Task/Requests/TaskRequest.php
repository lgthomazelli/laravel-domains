<?php

namespace App\Api\Task\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "task" => ["required", "string"],
            "category" => ["required", "string"],
        ];
    }
}