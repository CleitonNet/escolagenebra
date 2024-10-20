<x-app-layout><x-slot name="title">{{ $title = 'Editar Escola' }}</x-slot>

    @livewire('admin.web.school.edit', ['school'=>$id])

</x-app-layout>
