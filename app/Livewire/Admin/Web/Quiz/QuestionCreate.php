<?php

namespace App\Livewire\Admin\Web\Quiz;

use App\Models\Question;
use App\Models\Quiz;
use Livewire\Component;
use Livewire\WithFileUploads;

class QuestionCreate extends Component
{
    use WithFileUploads;

    public $quiz;
    public $question;
    public $img;
    public $statement;
    public $option1;
    public $option2;
    public $option3;
    public $option4;
    public $getImage;

    public function mount(Quiz $quiz){
        $this->quiz = $quiz;
    }

    public function save () {
        $questionActual = Question::create([
            'quiz_id'=>$this->quiz->id,
            'question'=>$this->statement,
            'option1'=>$this->option1,
            'option2'=>$this->option2,
            'option3'=>$this->option3,
            'option4'=>$this->option4,
        ]);

        if ($this->getImage) {
            // dd($this->getImage);
            makeImgWEBP($this->getImage,'quizzes/'.$this->quiz->id.'/questions/'.$questionActual->id.'.webp', [400,300] );
            $questionActual->update([ 'image' => 'quizzes/'.$this->quiz->id.'/questions/'.$questionActual->id.'.webp' ]);
        }

        $this->redirectRoute('admin.web.quiz.view',$this->quiz->id);
    }

    public function render()
    {
        return view('livewire.admin.web.quiz.question-create');
    }
}
