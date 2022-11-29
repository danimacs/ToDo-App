<?php

namespace App\Http\Livewire\Templates;

use Livewire\Component;

class FamilyContainer extends Component
{
    public $family;

    public function mount($family)
    {
        $this->family = $family;
    }

    public function render()
    {
        return view('livewire.templates.family-container');
    }
}
