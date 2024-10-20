<?php

namespace App\Livewire\Admin\Web\School;

use App\Models\School;
use App\Models\Segment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
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

    public function save() {
        $school = School::create([
            'title' => $this->title,
            'phone' => $this->phone,
            'address' => $this->address,
            'urlScheduleVisite' => $this->urlScheduleVisite,
            'urlHowToGetThere' => $this->urlHowToGetThere,
            'enrollment' => $this->enrollment
        ]);

        if ($this->getImage) {
            makeImgWEBP($this->getImage,'schools/image_'.$school->id.'.webp' );
            makeImgWEBP($this->getImage,'schools/thumbnail_'.$school->id.'.webp', [200,150] );

            $school->update([
                'image'     => 'schools/image_'.$school->id.'.webp',
                'thumbnail' => 'schools/thumbnail_'.$school->id.'.webp'
            ]);
        }

        $school->segments()->sync($this->selectedSegments);

        $this->redirectRoute('admin.web.school.edit', $school->id);
    }

    public function render()
    {
        return view('livewire.admin.web.school.create', [
            'segments' => Segment::all()
        ]);
    }
}
