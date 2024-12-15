<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepository
{
    protected $task;


    /**
     * TaskRepository constructor.
     *
     * @param Task $task
     */

    public function __construct(Task $task)
    {
        $this->task = $task;
    }
    public function getAllTasks()
    {
        return $this->task->paginate();
    }
}
