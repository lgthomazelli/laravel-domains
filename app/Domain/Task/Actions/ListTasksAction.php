<?php

namespace Domain\Task\Actions;

use Domain\Task\Models\Task;

final class ListTasksAction
{
    public function __invoke(): Object
    {
        return Task::all();
    }
}