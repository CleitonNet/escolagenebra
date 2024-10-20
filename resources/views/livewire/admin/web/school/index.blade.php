@push('aside-left')
    <x-admin.layout.menu-responsive-item route='admin.web.school.create' icon='add_circle' label='Nova Escola' />
@endpush
<div class="relative">
    <div class="overflow-x-auto">
        <div class="min-w-full gap-2 grid grid-cols-2 md:grid-cols-4">
            @foreach ($schools as $school)
            <div class="cursor-pointer hover:bg-gray-50 bg-gray-100 rounded-lg overflow-hidden border border-gray-300 hover:border-b-4 hover:border-azul transition-all duration-200 relative">
                <div class="absolute right-0 top-0 p-2 bg-red-50/70 hover:bg-red-600 rounded-bl-md text-red-700 hover:text-red-50" x-data @click=" if (confirm('Tem certeza que deseja excluir esta escola?')) { $wire.deleteSchool({{ $school->id }}) }">
                    <span class="material-symbols-outlined">delete</span>
                </div>
                <div onclick="window.location.href='{{ route('admin.web.school.edit', $school->id) }}'" class="h-40 bg-slate-400 bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('storage/'.$school->thumbnail) }})"></div>
                <div onclick="window.location.href='{{ route('admin.web.school.edit', $school->id) }}'" class="text-center text-sm font-medium py-4 px-2 sm:px-3 md:px-4">{{ $school->title }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <x-action-message class="absolute bottom-0 left-0 w-full px-6" on="message">
        @if (session()->has('message'))
            <div class="p-3 mx-auto text-white bg-yellow-700 rounded max-w-7xl">
                {{ session('message') }}
            </div>
        @endif
    </x-action-message>

    <!-- Paginação -->
    <div class="mt-4">
        {{ $schools->links() }}
    </div>
</div>
