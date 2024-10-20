<?php

namespace App\Livewire\Admin\Web\Quiz;

use App\Models\Question;
use App\Models\Quiz;
use Livewire\Component;
use Livewire\WithFileUploads;

class View extends Component
{
    use WithFileUploads;

    public $quiz;
    public $questionSelected;
    public $img;
    public $song;
    public $statement;
    public $option1;
    public $option2;
    public $option3;
    public $option4;
    public $getImage;

    public function mount(Quiz $quiz){
        $this->quiz = $quiz;
        $this->questionSelected =
         $this->statement =
         $this->option1 =
         $this->option2 =
         $this->option3 =
         $this->option4 = null;
    }

    public function editQuestion($question)
    {
        $this->questionSelected = Question::findOrFail($question);
        $this->getImage = null;
        $this->img = $this->questionSelected->image;
        $this->statement = $this->questionSelected->question;
        $this->option1 = $this->questionSelected->option1;
        $this->option2 = $this->questionSelected->option2;
        $this->option3 = $this->questionSelected->option3;
        $this->option4 =  $this->questionSelected->option4;

        $this->dispatch('open-modal', 'modal-edit');
    }

    public function updateQuestion () {
        $questionActual = Question::findOrFail($this->questionSelected['id']);
        $questionActual->update([
            'question'=>$this->statement,
            'option1'=>$this->option1,
            'option2'=>$this->option2,
            'option3'=>$this->option3,
            'option4'=>$this->option4,
        ]);

        if ($this->getImage) {
            makeImgWEBP($this->getImage,'quizzes/'.$this->quiz->id.'/questions/'.$this->questionSelected['id'].'.webp', [400,300] );
            $questionActual->update([ 'image' => 'quizzes/'.$this->quiz->id.'/questions/'.$this->questionSelected['id'].'.webp' ]);
        }

        $this->questionSelected =
        $this->statement =
        $this->option1 =
        $this->option2 =
        $this->option3 =
        $this->option4 = null;
        $this->dispatch('close-modal', ['modalName' => 'modal-edit']); // Fecha a modal

        $this->dispatch('form-updated');
    }

    public function closeEdit() {
        $this->questionSelected =
        $this->statement =
        $this->option1 =
        $this->option2 =
        $this->option3 =
        $this->option4 = null;
        $this->dispatch('close-modal', ['modalName' => 'modal-edit']); // Fecha a modal
    }

    public function deleteQuestion ($questionId) {
        $questionActual = Question::findOrFail($questionId);

        deleteImgEmptyDir($questionActual->image);

        $questionActual->delete();

        $this->dispatch('message');
        $this->dispatch('close-modal', ['modalName' => 'modal-edit']); // Fecha a modal
    }

    public function render()
    {
        return view('livewire.admin.web.quiz.view',[
            'questions' => $this->quiz->questions
        ]);
    }
}
