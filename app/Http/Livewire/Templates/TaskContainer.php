<?php

namespace App\Http\Livewire\Templates;

use App\Models\Task;
use Livewire\Component;

class TaskContainer extends Component
{
    public Task $task;

    public function mount(Task $task, $finished = false) {
        $this->task = $task;
        $this->finished = $finished;
    }

    public function render()
    {
        return view('livewire.templates.task-container');
    }
}
