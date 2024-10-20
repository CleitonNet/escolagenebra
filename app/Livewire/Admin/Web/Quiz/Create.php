<?php

namespace App\Livewire\Admin\Web\Quiz;

use App\Models\Quiz;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

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

    public function save(){
        $quiz = Quiz::create([
            'name'        => $this->name,
            'description' => $this->description,
            'result1'     => $this->result1,
            'result2'     => $this->result2,
            'result3'     => $this->result3,
            'result4'     => $this->result4,
        ]);

        if ($this->getImageCover) {
            makeImgWEBP($this->getImageCover,'quizzes/'.$quiz->id.'/cover.webp' );
            makeImgWEBP($this->getImageCover,'quizzes/'.$quiz->id.'/thumbnail.webp', [300,200] );

            $quiz->update([
                'cover'     => 'quizzes/'.$quiz->id.'/cover.webp',
                'thumbnail' => 'quizzes/'.$quiz->id.'/thumbnail.webp'
            ]);
        }

        if($this->getSong) {
            $this->validate([
                'getSong' => 'mimes:mp3|max:10240', // Valida o formato e o tamanho do arquivo
            ]);

            // Armazena o arquivo no diretório 'music' dentro de 'storage/app/public'
            $songPath = $this->getSong->store( 'quizzes/'.$quiz->id, 'public');
            // dd($songPath);
            $quiz->update([ 'song' => $songPath ]);
        }

        if ($this->getImageResult1) {
            makeImgWEBP($this->getImageResult1,'quizzes/'.$quiz->id.'/results/1.webp', [400,300] );
            $quiz->update([ 'result1' => 'quizzes/'.$quiz->id.'/results/1.webp' ]);
        }

        if ($this->getImageResult2) {
            makeImgWEBP($this->getImageResult2,'quizzes/'.$quiz->id.'/results/2.webp', [400,300] );
            $quiz->update([ 'result2' => 'quizzes/'.$quiz->id.'/results/2.webp' ]);
        }

        if ($this->getImageResult3) {
            makeImgWEBP($this->getImageResult3,'quizzes/'.$quiz->id.'/results/3.webp', [400,300] );
            $quiz->update([ 'result3' => 'quizzes/'.$quiz->id.'/results/3.webp' ]);
        }

        if ($this->getImageResult4) {
            makeImgWEBP($this->getImageResult4,'quizzes/'.$quiz->id.'/results/4.webp', [400,300] );
            $quiz->update([ 'result4' => 'quizzes/'.$quiz->id.'/results/4.webp' ]);
        }

        $this->redirectRoute('admin.web.quiz.view', $quiz->id);
    }

    public function render()
    {
        return view('livewire.admin.web.quiz.create');
    }
}
