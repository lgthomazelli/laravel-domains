<?php

namespace App\Api\Task\Controllers;

use App\Api\Task\Requests\TaskRequest;
use Illuminate\Http\JsonResponse;
use App\Core\Responses\ErrorResponse;
use Domain\Task\Actions\ListTasksAction;
use App\Core\Http\Controllers\Controller;
use App\Core\Responses\SuccessResponse;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\DataTransferObjects\TaskData;

class TaskController extends Controller
{
    public function index(ListTasksAction $action): JsonResponse
    {
        try {
            return response()->json($action());
        } catch (\Exception $exception) {
            $response = new ErrorResponse();
            return response()->json($response($exception->getMessage(), $exception->getCode()));
        }
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $data = TaskData::fromRequest($request);

        try {
            $created = $action($data);
            $response = new SuccessResponse();
            return response()->json($response("Task was created", $created->toArray()));
        } catch (\Exception $exception) {
            $response = new ErrorResponse();
            return response()->json($response($exception->getMessage(), $exception->getCode()));
        }
    }
}