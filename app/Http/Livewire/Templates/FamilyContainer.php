<?php

namespace App\Http\Livewire\Templates;

use App\Models\Family;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class FamilyContainer extends Component
{
    public string $name;
    public Collection $tasks;
    public Family|null $family;

    public function mount(string $name = null, Collection $tasks = null, Family $family = null)
    {
        if ($family->id == null) {
            $this->name = $name;
            $this->tasks = $tasks;
            $this->family = null;
        } else {
            $this->name = $family->name;
            $this->tasks = $family->tasks;
            $this->family = $family;
        }
    }

    public function render()
    {
        return view('livewire.templates.family-container');
    }
}
