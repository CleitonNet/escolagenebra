<x-app-layout><x-slot name="title">{{ $title = 'Quiz' }}</x-slot>

    @livewire('admin.web.quiz.question-create', ['quiz'=>$id] )

</x-app-layout>
