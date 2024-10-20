<x-app-layout><x-slot name="title">{{ $title = 'Editar Slide' }}</x-slot>

    @livewire('admin.web.slide.edit', ['slide'=>$id] )

</x-app-layout>
