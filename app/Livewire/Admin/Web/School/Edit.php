<?php

namespace App\Livewire\Admin\Web\School;

use App\Models\School;
use App\Models\Segment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $school;
    public $image;
    public $title;
    public $phone;
    public $address;
    public $urlScheduleVisite;
    public $urlHowToGetThere;
    public $enrollment;
    public $getImage;
    public $selectedSegments = [];

    public function mount (School $school) {
        $this->school            = $school;
        $this->image             = $school->image;
        $this->title             = $school->title;
        $this->phone             = $school->phone;
        $this->address           = $school->address;
        $this->urlScheduleVisite = $school->urlScheduleVisite;
        $this->urlHowToGetThere  = $school->urlHowToGetThere;
        $this->enrollment        = $school->enrollment;
        $this->getImage          = $school->getImage;

        // Preenche o array $selectedSegments com os IDs dos segmentos já associados à escola
        $this->selectedSegments = $this->school->segments->pluck('id')->toArray();

    }

    public function updateSchool() {
        $this->school->update([
            'title' => $this->title,
            'phone' => $this->phone,
            'address' => $this->address,
            'urlScheduleVisite' => $this->urlScheduleVisite,
            'urlHowToGetThere' => $this->urlHowToGetThere,
            'enrollment' => $this->enrollment
        ]);

        if ($this->getImage) {
            makeImgWEBP($this->getImage,'schools/image_'.$this->school->id.'.webp' );
            makeImgWEBP($this->getImage,'schools/thumbnail_'.$this->school->id.'.webp', [200,150] );

            $this->school->update([
                'image'     => 'schools/image_'.$this->school->id.'.webp',
                'thumbnail' => 'schools/thumbnail_'.$this->school->id.'.webp'
            ]);
        }

        $this->school->segments()->sync($this->selectedSegments);

        $this->dispatch('form-updated');

    }

    public function render()
    {
        return view('livewire.admin.web.school.edit', [
            'segments' => Segment::all()
        ]);
    }
}
