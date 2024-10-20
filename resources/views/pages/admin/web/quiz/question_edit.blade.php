<x-app-layout><x-slot name="title">{{ $title = 'Quiz' }}</x-slot>

    @livewire('admin.web.quiz.question-edit', ['id'=>$id] )

</x-app-layout>
