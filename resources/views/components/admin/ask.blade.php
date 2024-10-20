@props(['id','statement'=>'','img'=>'img/upload.svg', 'order'=>null, 'options'=>null])

<div type="button" {{ $attributes->merge(['class'=> 'flex flex-col relative items-center justify-center w-full gap-1 px-2 pt-4 overflow-hidden border rounded-lg md:pt-0 md:flex-row bg-sky-800/10 border-black/20']) }} style="box-shadow: 0 0 10px rgba(0,0,0,0.25)">

    <div x-data class="absolute right-0 top-0 flex gap-1">
        <div class="bg-amber-50/70 hover:bg-amber-600 rounded-bl-md text-amber-700 hover:text-amber-50" wire:click="editQuestion({{ $id }})">
            <span class="p-2 material-symbols-outlined cursor-pointer">edit</span>
        </div>
        <div class="bg-red-50/70 hover:bg-red-600 rounded-bl-md text-red-700 hover:text-red-50" @click=" if (confirm('Tem certeza que deseja excluir este quiz?')) { $wire.deleteQuestion({{ $id }}) }">
            <span class="p-2 material-symbols-outlined cursor-pointer">delete</span>
        </div>

    </div>
    <img src="{{ asset($img) }}" alt="..." class="object-cover rounded-md w-96 max-h-80 aspect-5/4 md:rounded-none">
    <div class="relative flex flex-col items-start justify-center w-full gap-4 px-4 pb-4">
        <div class="pt-10 text-xl font-semibold text-left">{{ $order ? sprintf("%02d", $order).'. ' : '' }} {{ $statement }}</div>
        <ul class="grid w-full gap-1 list-outside xs:grid-cols-2">

            <li class="h-full ">
                <div class="flex items-center w-full h-full p-4 text-sm font-bold text-left text-gray-700 uppercase bg-white border border-gray-200 rounded-lg hover:text-gray-600">
                    {{ $options[0] }}
                </div>
            </li>

            <li class="h-full">
                <div class="flex items-center w-full h-full p-4 text-sm font-bold text-left text-gray-700 uppercase bg-white border border-gray-200 rounded-lg hover:text-gray-600">
                    {{ $options[1] }}
                </div>
            </li>

            <li class="h-full">
                <div class="flex items-center w-full h-full p-4 text-sm font-bold text-left text-gray-700 uppercase bg-white border border-gray-200 rounded-lg hover:text-gray-600">
                    {{ $options[2] }}
                </div>
            </li>

            <li class="h-full">
                <div class="flex items-center w-full h-full p-4 text-sm font-bold text-left text-gray-700 uppercase bg-white border border-gray-200 rounded-lg hover:text-gray-600">
                    {{ $options[3] }}
                </div>
            </li>
        </ul>
    </div>
</div>
