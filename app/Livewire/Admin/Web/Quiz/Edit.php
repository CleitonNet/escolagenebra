<?php

namespace App\Livewire\Admin\Web\Quiz;

use App\Models\Quiz;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    use WithFileUploads;

    public $quiz;
    public $name;
    public $song;
    public $getSong;
    public $cover;
    public $getImageCover;
    public $description;
    public $result1;
    public $result2;
    public $result3;
    public $result4;
    public $getImageResult1;
    public $getImageResult2;
    public $getImageResult3;
    public $getImageResult4;

    public function mount(Quiz $quiz){
        $this->quiz         = $quiz;
        $this->name         = $quiz->name;
        $this->song         = $quiz->song;
        $this->cover        = $quiz->cover;
        $this->description  = $quiz->description;
        $this->result1      = $quiz->result1;
        $this->result2      = $quiz->result2;
        $this->result3      = $quiz->result3;
        $this->result4      = $quiz->result4;
    }

    public function save(){

        $this->quiz->update([
            'name'        => $this->name,
            'description' => $this->description,
            'result1'     => $this->result1,
            'result2'     => $this->result2,
            'result3'     => $this->result3,
            'result4'     => $this->result4,
        ]);

        if($this->getSong) {
            $songPath = $this->getSong->store( 'quizzes/'.$this->quiz->id, 'public');
            $this->quiz->update([ 'song' => $songPath ]);
        }

        if ($this->getImageCover) {
            makeImgWEBP($this->getImageCover,'quizzes/'.$this->quiz->id.'/cover.webp' );
            makeImgWEBP($this->getImageCover,'quizzes/'.$this->quiz->id.'/thumbnail.webp', [300,200] );

            $this->quiz->update([
                'cover'     => 'quizzes/'.$this->quiz->id.'/cover.webp',
                'thumbnail' => 'quizzes/'.$this->quiz->id.'/thumbnail.webp'
            ]);
        }

        if ($this->getImageResult1) {
            makeImgWEBP($this->getImageResult1,'quizzes/'.$this->quiz->id.'/results/1.webp' );
            $this->quiz->update([ 'result1' => 'quizzes/'.$this->quiz->id.'/results/1.webp' ]);
        }

        if ($this->getImageResult2) {
            makeImgWEBP($this->getImageResult2,'quizzes/'.$this->quiz->id.'/results/2.webp' );
            $this->quiz->update([ 'result2' => 'quizzes/'.$this->quiz->id.'/results/2.webp' ]);
        }

        if ($this->getImageResult3) {
            makeImgWEBP($this->getImageResult3,'quizzes/'.$this->quiz->id.'/results/3.webp' );
            $this->quiz->update([ 'result3' => 'quizzes/'.$this->quiz->id.'/results/3.webp' ]);
        }

        if ($this->getImageResult4) {
            makeImgWEBP($this->getImageResult4,'quizzes/'.$this->quiz->id.'/results/4.webp' );
            $this->quiz->update([ 'result4' => 'quizzes/'.$this->quiz->id.'/results/4.webp' ]);
        }

        $this->dispatch('form-updated');
    }

    public function render()
    {
        return view('livewire.admin.web.quiz.edit');
    }
}
