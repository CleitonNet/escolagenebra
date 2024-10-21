<?php

namespace App\Livewire\Guest\Welcome;

use App\Models\School;
use Livewire\Component;

class SchoolSlider extends Component
{
    public function render()
    {
        return view('livewire.guest.welcome.school-slider', [
            'schools' => School::with('segments')->get() // Pré-carrega os segmentos
        ]);
    }
}
