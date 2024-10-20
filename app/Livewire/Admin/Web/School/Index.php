<?php

namespace App\Livewire\Admin\Web\School;

use App\Models\School;
use Livewire\Component;

class Index extends Component
{
    public function deleteSchool($schoolId)
    {
        $school = School::findOrFail($schoolId);

        deleteImgEmptyDir($school->image);
        deleteImgEmptyDir($school->thumbnail);

        $school->delete();

        $this->dispatch('message', ['message' => 'Escola excluído com sucesso!']);
    }

    public function render()
    {
        return view('livewire.admin.web.school.index', [
            'schools' => School::paginate(8)
        ]);
    }
}
