<?php

namespace Domain\Task\DataTransferObjects;

use App\Api\Task\Requests\TaskRequest;
use Spatie\DataTransferObject\DataTransferObject;

class TaskData extends DataTransferObject
{
    /** @var string */
    public $task;

    /** @var string|null */
    public $category;

    public static function fromRequest(TaskRequest $taskRequest): TaskData
    {
        return new Self([
            'task' => $taskRequest['task'],
            'category' => $taskRequest['category'],
        ]);
    }
}