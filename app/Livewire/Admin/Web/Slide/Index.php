<?php

namespace App\Livewire\Admin\Web\Slide;

use App\Models\Slide;
use Livewire\Component;

class Index extends Component
{
    public function deleteSlide($slideId)
    {
        $slide = Slide::findOrFail($slideId);

        delTree('carousel/'.$slideId);
        $slide->delete();

        $this->dispatch('message', ['message' => 'Slide excluído com sucesso!']);
    }

    public function render()
    {
        return view('livewire.admin.web.slide.index', [
            'slides' => Slide::all()
        ]);
    }
}
