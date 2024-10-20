<x-app-layout><x-slot name="title">{{ $title = 'Quiz' }}</x-slot>

    @livewire('admin.web.quiz.view', ['quiz'=>$id] )

</x-app-layout>
