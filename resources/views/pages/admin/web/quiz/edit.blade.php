<x-app-layout><x-slot name="title">{{ $title = 'Editar Quiz' }}</x-slot>

    @livewire('admin.web.quiz.edit', ['quiz'=>$id] )

</x-app-layout>
