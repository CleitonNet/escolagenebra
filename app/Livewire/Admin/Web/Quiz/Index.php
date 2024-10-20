<?php

namespace App\Livewire\Admin\Web\Quiz;

use App\Models\Quiz;
use Livewire\Component;

class Index extends Component
{
    public function deleteQuiz($quizId)
    {
        $quiz = Quiz::findOrFail($quizId);

        delTree('quizzes/'.$quizId);

        $quiz->delete();

        $this->dispatch('message');
    }

    public function render()
    {
        return view('livewire.admin.web.quiz.index', [
            'quizzes' => Quiz::all()
        ]);
    }
}
