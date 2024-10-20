@push('aside-left')
<x-admin.layout.menu-responsive-item route='admin.web.quiz.index' icon='segment' label='Lista de Quizzes' />
@endpush

<form wire:submit="save" enctype="multipart/form-data">

    <div class="flex justify-center gap-2">

        <label for="quizImage" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[528px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImageCover)
                <img src="{{ $getImageCover->temporaryUrl() }}" alt="image" class="object-cover w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($cover !== null && Storage::disk('public')->exists($quiz->cover))
                <img src="{{ asset('storage/' . $cover) }}" alt="image" class="object-cover w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImageCover' type="file" name="quizImage" id="quizImage" class="absolute opacity-0 -z-10" accept="image/*" />
            <div wire:loading wire:target="getImageCover" class="absolute inset-x-0 bottom-0 h-5">
                <div class="font-bold text-amber-50 h-5 w-full bg-amber-700/80 absolute flex justify-center items-center text-center">Carregando imagem</div>
            </div>
        </label>
    </div>

    <label class="p-2 bg-white cursor-pointer rounded-lg mb-4 w-full block">
        <input wire:model.live="getSong" type="file" name="audio" id="audio" accept=".mp3">
        <div wire:loading wire:target="getSong" class="absolute inset-x-0 bottom-0 h-5">
            <div class="font-bold text-amber-50 h-5 w-full bg-yellow-500/80 absolute flex justify-center items-center text-center">Carregando audio</div>
        </div>

        @error('getSong')
        <div wire:loading wire:target="getSong" class="absolute inset-x-0 bottom-0 h-5">
            <div class="font-bold text-amber-50 h-5 w-full bg-amber-700/80 absolute flex justify-center items-center text-center">{{ $message }}</div>
        </div>
        @enderror

    </label>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">

        <input wire:model='name' class="col-span-full px-4 py-3 border rounded-lg shadow bg-white/90" type="text"
            placeholder="name" name="name" id="name" />

        <textarea wire:model='description' class="col-span-full px-4 py-3 border rounded-lg shadow bg-white/90 mb-4" rows="5" name="description" id="description" placeholder="Description"></textarea>

        <label for="quizResult1" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[300px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImageResult1)
                <img src="{{ $getImageResult1->temporaryUrl() }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($result1 !== null && Storage::disk('public')->exists($quiz->result1))
                <img src="{{ asset('storage/' . $result1) }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImageResult1' type="file" name="quizResult1" id="quizResult1" class="absolute opacity-0 -z-10" accept="image/*" />
            <div wire:loading wire:target="getImageResult1" class="absolute inset-x-0 bottom-0 h-5">
                <div class="font-bold text-amber-50 h-5 w-full bg-amber-700/80 absolute flex justify-center items-center text-center">Carregando imagem</div>
            </div>
        </label>

        <label for="quizResult2" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[300px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImageResult2)
                <img src="{{ $getImageResult2->temporaryUrl() }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($result2 !== null && Storage::disk('public')->exists($quiz->result2))
                <img src="{{ asset('storage/' . $result2) }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImageResult2' type="file" name="quizResult2" id="quizResult2" class="absolute opacity-0 -z-10" accept="image/*" />
            <div wire:loading wire:target="getImageResult2" class="absolute inset-x-0 bottom-0 h-5">
                <div class="font-bold text-amber-50 h-5 w-full bg-amber-700/80 absolute flex justify-center items-center text-center">Carregando imagem</div>
            </div>
        </label>

        <label for="quizResult3" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[300px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImageResult3)
                <img src="{{ $getImageResult3->temporaryUrl() }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($result3 !== null && Storage::disk('public')->exists($quiz->result3))
                <img src="{{ asset('storage/' . $result3) }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImageResult3' type="file" name="quizResult3" id="quizResult3" class="absolute opacity-0 -z-10" accept="image/*" />
            <div wire:loading wire:target="getImageResult3" class="absolute inset-x-0 bottom-0 h-5">
                <div class="font-bold text-amber-50 h-5 w-full bg-amber-700/80 absolute flex justify-center items-center text-center">Carregando imagem</div>
            </div>
        </label>

        <label for="quizResult4" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[300px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImageResult4)
                <img src="{{ $getImageResult4->temporaryUrl() }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($result4 !== null && Storage::disk('public')->exists($quiz->result4))
                <img src="{{ asset('storage/' . $result4) }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImageResult4' type="file" name="quizResult4" id="quizResult4" class="absolute opacity-0 -z-10" accept="image/*" />
            <div wire:loading wire:target="getImageResult4" class="absolute inset-x-0 bottom-0 h-5">
                <div class="font-bold text-amber-50 h-5 w-full bg-amber-700/80 absolute flex justify-center items-center text-center">Carregando imagem</div>
            </div>
        </label>
    </div>

    <button type="submit" class="px-10 py-3 font-bold text-white rounded-xl bg-green-700 hover:bg-green-800 transition-all duration-200 fixed bottom-10 right-4" id="enviar">Salvar</button>

    <div wire:loading wire:target="save" class="w-full fixed bottom-8 inset-x-0">
        <div class="px-4 py-6 text-white text-center bg-amber-500/80 backdrop-blur-sm">{{ __('Carregando.') }}</div>
    </div>

    <x-action-message class="w-full fixed bottom-8 inset-x-0" on="form-updated">
        <div class="px-4 py-6 text-white text-center bg-green-500/80 backdrop-blur-sm">{{ __('Saved.') }}</div>
    </x-action-message>

</form>
