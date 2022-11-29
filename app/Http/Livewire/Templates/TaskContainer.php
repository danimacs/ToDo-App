<?php

namespace App\Http\Livewire\Templates;

use Livewire\Component;

class TaskContainer extends Component
{

    public $task;
    public $class;
    public $flexRowReverse;

    public function mount($task, $class, $flexRowReverse = false) {
        $this->task = $task;
        $this->class = $class;
        $this->flexRowReverse = $flexRowReverse;
    }

    public function render()
    {
        return view('livewire.templates.task-container');
    }
}
