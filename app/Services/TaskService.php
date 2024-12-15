<?php


namespace App\Services;

use App\Repositories\TaskRepository;


class TaskService
{
    /**
     * @var TaskRepository
     */
    protected $taskRepository;

    /**
     * TaskService constructor.
     *
     * @param TaskRepository $taskRepository
     */
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }
    public function getAllTasks()
    {
        return $this->taskRepository->getAllTasks();
    }

}
