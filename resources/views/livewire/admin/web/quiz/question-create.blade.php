@push('aside-left')
    <x-admin.layout.menu-responsive-item route='admin.web.quiz.index' icon='segment' label='Lista de Quizzes' />
    <x-admin.layout.menu-responsive-item route='admin.web.quiz.view'  :params="['id'=>$quiz->id]" icon='live_help' label='Vizualizar Quiz' />
@endpush

<form wire:submit="save" class="overflow-hidden border rounded-lg bg-sky-800/10 border-black/20" style="box-shadow: 0 0 10px rgba(0,0,0,0.25)">

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
            <input wire:model="statement" type="text" class="mt-8 py-2 text-xl border text-left font-semibold bg-transparent w-full" autofocus>

            <div class="grid w-full gap-1 list-outside xs:grid-cols-2">

                <input wire:model="option1" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">
                <input wire:model="option2" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">
                <input wire:model="option3" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">
                <input wire:model="option4" type="text" class="p-4 font-semibold text-gray-700 uppercase bg-white border border-gray-200 text-sm rounded-lg">

            </div>
        </div>
    </div>
    <button type="submit" class="px-10 py-3 font-bold text-white rounded-xl bg-green-700 hover:bg-green-800 transition-all duration-200 fixed bottom-10 right-4" id="enviar">Salvar</button>
</form>
