<?php

namespace App\Http\Livewire\Templates;

use App\Models\Task;
use Livewire\Component;

class TaskContainer extends Component
{
    public Task $task;
    public string $class;
    public bool $flexRowReverse;

    public function mount(Task $task, string $class, $flexRowReverse = false) {
        $this->task = $task;
        $this->class = $class;
        $this->flexRowReverse = $flexRowReverse;
    }

    public function render()
    {
        return view('livewire.templates.task-container');
    }
}
