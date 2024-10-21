@push('aside-left')
    <x-admin.layout.menu-responsive-item route='admin.web.slide.create' icon='add_circle' label='Novo Slide' />
@endpush
<div class="content">

    <div class="grid gap-2">
        @foreach ($slides as $slide)

        <div class="flex cursor-pointer hover:bg-gray-200 odd:bg-gray-200/70 even:bg-gray-100 rounded-lg overflow-hidden border border-gray-300 hover:border-s-4 hover:border-azul transition-all duration-200">
            <div onclick="window.location.href='{{ route('admin.web.slide.edit', $slide->id) }}'" class="w-24 bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('storage/'.$slide->thumbnail) }})"></div>
            <div onclick="window.location.href='{{ route('admin.web.slide.edit', $slide->id) }}'" class="flex-auto flex items-center text-sm font-medium px-2 sm:px-3 md:px-4">@if($slide->title1 === null && $slide->title2 === null) <span class="font-bold text-amber-700">- - -</span> @else {{ $slide->title1 }} {{ $slide->title2 }} @endif</div>
            <div class="w-16 h-16">
                <button class="text-red-700 text-center flex justify-center items-center w-full h-full border-0 bg-transparent transition-all duration-200 hover:bg-red-600 hover:text-white" x-data @click=" if (confirm('Tem certeza que deseja excluir este slide?')) { $wire.deleteSlide({{ $slide->id }}) }">
                    <span class="material-symbols-outlined">delete</span>
                </button>
            </div>
        </div>

        @endforeach
    </div>

    <x-action-message class="absolute bottom-0 left-0 w-full px-6" on="message">
        @if (session()->has('message'))
            <div class="p-3 mx-auto text-white bg-yellow-700 rounded max-w-7xl">
                {{ session('message') }}
            </div>
        @endif
    </x-action-message>

</div>
