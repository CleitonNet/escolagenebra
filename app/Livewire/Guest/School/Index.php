<?php

namespace App\Livewire\Guest\School;

use App\Models\School;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.guest.school.index', [
            'schools' => School::with('segments')->get() // Pré-carrega os segmentos
        ]);
    }
}
