<?php

namespace App\Http\Livewire\Templates;

use App\Models\Family;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskContainer extends Component
{

    public $family;

    protected $listeners = ['changeFamily'];

    public function mount()
    {
        $this->family = Auth::user()->families()->first();
    }

    public function changeFamily(Family $family)
    {
        $this->family = $family;
    }

    public function render()
    {
        return view('livewire.templates.task-container');
    }
}
