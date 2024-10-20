<?php

namespace App\Livewire\Guest\Welcome;

use App\Models\Slide;
use Livewire\Component;

class Slides extends Component
{
    public function render()
    {
        return view('livewire.guest.welcome.slides', [
            'slides' => Slide::all()
        ]);
    }
}
