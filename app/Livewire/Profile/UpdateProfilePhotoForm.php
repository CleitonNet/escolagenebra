<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfilePhotoForm extends Component
{
    use WithFileUploads;

    public $user;
    public $photo;
    public $getImage;

    public function mount() {
        $this->user = Auth::user();
        $this->photo = $this->user->photo;
    }

    public function update() {

        if ($this->getImage) {
            makeImgWEBP($this->getImage,'profiles/'.$this->user->id.'/photo.webp', [400,400] );
            makeImgWEBP($this->getImage,'profiles/'.$this->user->id.'/thumbnail.webp', [150,150] );

            $this->user->update([
                'photo'     => 'profiles/'.$this->user->id.'/photo.webp',
                'thumbnail' => 'profiles/'.$this->user->id.'/thumbnail.webp'
            ]);
        }

        $this->dispatch('profile-updated');

    }

    public function render()
    {
        return view('livewire.profile.update-profile-photo-form');
    }
}
