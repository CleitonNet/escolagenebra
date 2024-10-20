@push('aside-left')
<x-admin.layout.menu-responsive-item route='admin.web.school.index' icon='segment' label='Lista de Escolas' />
@endpush

<form wire:submit="updateSchool" class="grid" enctype="multipart/form-data">

    <div class="flex justify-center gap-2">

        <label for="schoolImage" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[528px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImage)
                <img src="{{ $getImage->temporaryUrl() }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($image !== null && Storage::disk('public')->exists($school->image))
                <img src="{{ asset('storage/' . $image) }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImage' type="file" name="schoolImage" id="schoolImage" class="absolute opacity-0 -z-10" />
        </label>

    </div>

    <div class="flex justify-around gap-4 py-6">
        @foreach ($segments as $segment)
            <div class="flex items-center gap-2">
                <input type="checkbox" wire:model="selectedSegments" value="{{ $segment->id }}"
                    id="segment_{{ $segment->id }}" @if (in_array($segment->id, $selectedSegments)) checked @endif
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                <label for="segment_{{ $segment->id }}" class="ml-2 text-sm text-gray-900">{{ $segment->name }}</label>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-2 gap-2">
        <input wire:model='title' class="col-span-1 px-4 py-3 border rounded-lg shadow bg-white/90" type="text"
            placeholder="title" name="title" id="title" />
        <input wire:model='phone' class="col-span-1 px-4 py-3 border rounded-lg shadow bg-white/90" type="text"
            placeholder="phone" name="phone" id="phone" />
        <input wire:model='address' class="col-span-2 px-4 py-3 border rounded-lg shadow bg-white/90" type="text"
            placeholder="address" name="address" id="address" />
        <input wire:model='enrollment' class="col-span-2 px-4 py-3 border rounded-lg shadow bg-white/90" type="text"
            placeholder="enrollment" name="enrollment" id="enrollment" />
        <input wire:model='urlScheduleVisite' class="col-span-2 px-4 py-3 border rounded-lg shadow bg-white/90"
            type="text" placeholder="urlScheduleVisite" name="urlScheduleVisite" id="urlScheduleVisite" />
        <input wire:model='urlHowToGetThere' class="col-span-2 px-4 py-3 border rounded-lg shadow bg-white/90"
            type="text" placeholder="urlHowToGetThere" name="urlHowToGetThere" id="urlHowToGetThere" />
    </div>

    <button type="submit" class="px-10 py-3 font-bold text-white rounded-xl bg-green-700 hover:bg-green-800 transition-all duration-200 fixed bottom-10 right-4" id="enviar">Salvar</button>

    <div id="resposta" class="text-center text-white"></div>
    <x-action-message class="w-full fixed bottom-8 inset-x-0" on="form-updated">
        <div class="px-4 py-6 text-white text-center bg-green-500/80 backdrop-blur-sm">{{ __('Saved.') }}</div>
    </x-action-message>
</form>
