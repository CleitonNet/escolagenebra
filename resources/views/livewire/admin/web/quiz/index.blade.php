@push('aside-left')
<x-admin.layout.menu-responsive-item route='admin.web.quiz.create' icon='add_circle' label='Novo quiz' />
@endpush

<div class="relative">
    <div class="overflow-x-auto">
        <div class="min-w-full gap-2 grid grid-cols-2 md:grid-cols-4">
            @foreach ($quizzes as $quiz)
            <div class="cursor-pointer hover:bg-gray-50 bg-gray-100 rounded-lg overflow-hidden border border-gray-300 hover:border-b-4 hover:border-azul transition-all duration-200 relative">
                <div class="absolute right-0 top-0 p-2 bg-red-50/70 hover:bg-red-600 rounded-bl-md text-red-700 hover:text-red-50" x-data @click=" if (confirm('Tem certeza que deseja excluir este quiz?')) { $wire.deleteQuiz({{ $quiz->id }}) }">
                    <span class="material-symbols-outlined">delete</span>
                </div>
                <div onclick="window.location.href='{{ route('admin.web.quiz.view', $quiz->id) }}'" class="h-40 bg-slate-400 bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('storage/'.$quiz->thumbnail) }})"></div>
                <div onclick="window.location.href='{{ route('admin.web.quiz.view', $quiz->id) }}'" class="text-center text-sm font-medium py-4 px-2 sm:px-3 md:px-4 truncate">{{ $quiz->name }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <x-action-message class="w-full fixed bottom-8 inset-x-0" on="message">
        <div class="px-4 py-6 text-white text-center bg-yellow-600/80 backdrop-blur-sm">{{ __('Quiz excluído com sucesso') }}</div>
    </x-action-message>
</div>
