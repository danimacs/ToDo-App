<?php

namespace App\Http\Livewire\Templates;

use App\Models\Family;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatContainer extends Component
{
    public string $name;
    public Collection $tasks;
    public Family|null $family;

    protected $listeners = ['changeFamily', 'changeState'];

    public function mount()
    {
        $family = Auth::user()->families()->first();
        $this->changeFamily(null, null, $family);
    }

    public function changeFamily(string $name = null, array $tasks = null, Family $family = null)
    {
        if ($family->id == null) {
            $this->name = $name;
            $this->tasks = Task::hydrate($tasks);
            $this->family = null;
        } else {
            $this->name = $family->name;
            $this->tasks = $family->tasks;
            $this->family = $family;
        }
    }

    public function changeState(Task $task)
    {
        foreach ($this->tasks as $item) {
            if ($task->id == $item->id) {
                $item->finished = !$task->finished;
                $item->save();
                break;
            }
        }
    }

    public function render()
    {
        return view('livewire.templates.chat-container');
    }
}
