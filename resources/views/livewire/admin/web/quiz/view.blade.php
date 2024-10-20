@push('aside-left')
    <x-admin.layout.menu-responsive-item route='admin.web.quiz.index' icon='segment' label='Lista de Quizzes' />
    <x-admin.layout.menu-responsive-item route='admin.web.quiz.edit'  :params="['id'=>$quiz->id]" icon='live_help' label='Editar Quiz' />
    <x-admin.layout.menu-responsive-item route='admin.web.quiz.question_create'  :params="['id'=>$quiz->id]" icon='live_help' label='Nova Pergunta' />

    <audio controls loop class="w-full bg-slate-100">
        <source src="{{ asset('storage/'.$quiz->song) }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
@endpush

<div class="grid gap-6">

    <div class="relative flex items-center justify-center h-40 overflow-hidden bg-center bg-no-repeat bg-cover rounded md:rounded-md lg:rounded-lg xl:rounded-3xl md:h-60 lg:h-72 xl:h-80"
            style="background-image: url({{ asset('storage/'.$quiz->cover ?? 'img/cover.webp') }});"></div>

    <div class="grid gap-4">
        @foreach($questions as $question)
        <x-admin.ask class="hover:border-gray-800 hover:border-x-4 transition-all"
            :img="file_exists('storage/'.$question->image) ? asset('storage/'.$question->image) : 'img/upload.svg'"
            :statement="$question->question" :id="$question->id" :order="$loop->iteration"
            :options="[$question->option1,$question->option2,$question->option3,$question->option4]">
        </x-admin.ask>
        @endforeach
    </div>

    <x-action-message class="w-full fixed bottom-8 inset-x-0" on="form-updated">
        <div class="px-4 py-6 text-white text-center bg-green-500/80 backdrop-blur-sm">{{ __('Saved.') }}</div>
    </x-action-message>
    <x-action-message class="w-full fixed bottom-8 inset-x-0" on="message">
        <div class="px-4 py-6 text-white text-center bg-yellow-600/80 backdrop-blur-sm">{{ __('Pergunta excluída com sucesso') }}</div>
    </x-action-message>


    @isset($questionSelected)
    <!-- Modal Padrão do Livewire -->
    <x-modal name="modal-edit" :show="!is_null($questionSelected)">

        <form wire:submit="updateQuestion" class="overflow-hidden border rounded-lg bg-sky-800/10 border-black/20" style="box-shadow: 0 0 10px rgba(0,0,0,0.25)">

            <div class="flex flex-col items-center justify-center w-full md:pt-0 md:flex-row">
                <label for="questionImage" class="relative flex items-center justify-center aspect-square min-w-96 overflow-hidden shadow cursor-pointer group h-80 bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
                    @if ($getImage)
                        <img src="{{ $getImage->temporaryUrl() }}" alt="image" class="object-cover min-h-full min-w-full" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
                    @elseif ($img !== null && Storage::disk('public')->exists($img))
                        <img src="{{ asset('storage/' . $img) }}" alt="image" class="object-cover  min-h-full min-w-full" style="box-shadow: 0 0 10px 2px #000" />
                    @else
                        <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
                    @endif
                    <input wire:model='getImage' type="file" name="questionImage" id="questionImage" class="absolute opacity-0 -z-10" />
                </label>

                <div class="relative flex flex-col items-start justify-center w-full gap-2 px-4 pb-4">
                    <input wire:model="statement" type="text" class="mt-8 py-2 text-xl text-left font-semibold bg-transparent w-full">

                    <div class="grid w-full gap-1 list-outside xs:grid-cols-2">

                        <input wire:model="option1" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">
                        <input wire:model="option2" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">
                        <input wire:model="option3" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">
                        <input wire:model="option4" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">

                    </div>
                </div>
            </div>
            <div class="flex gap-2 justify-end absolute h-fit bottom-2 right-4">
                <button type="submit" class="py-2 px-4 rounded-md bg-green-950 hover:bg-green-800 text-white font-medium">Salvar</button>
                <button type="button" wire:click="closeEdit" class="py-2 px-4 rounded-md bg-gray-950 hover:bg-gray-800 text-white font-medium">Fechar</button>
            </div>
        </form>

    </x-modal>
    @endisset

</div>
