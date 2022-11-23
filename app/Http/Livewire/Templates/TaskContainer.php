<?php

namespace App\Http\Livewire\Templates;

use App\Models\Family;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskContainer extends Component
{

    public $family;

    protected $listeners = ['changeFamily', 'changeState'];

    public function mount()
    {
        $this->family = Auth::user()->families()->first();
    }

    public function changeFamily(Family $family)
    {
        $this->family = $family;
    }

    public function changeState(Task $task)
    {
        $task->update(['finished' => !$task->finished]);
        $this->family = $this->family->fresh();
    }

    public function render()
    {
        return view('livewire.templates.task-container');
    }
}
