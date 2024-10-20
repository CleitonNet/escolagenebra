@props(['cols'=>'4','trigger','active'])

@php
$classes = ($active ?? false)
            ? 'border-azul        text-black    focus:outline-none focus:border-azul/80'
            : 'border-transparent text-black/70 focus:outline-none focus:border-azul/50 focus:text-back focus:text-azul/90 focus:border-azul/70 hover:text-azul/90 hover:border-azul/70';
@endphp

<div class="inline-flex items-center {{ $classes }} px-1 mt-4 border-b-[7px] font-semibold leading-5 transition duration-150 ease-in-out"
    x-data="{ open: false }"
    @click.outside="open = false"
    @close.stop="open = false"
    >
    <button type="button" class="flex items-center justify-center h-full " x-on:click="open = ! open" >{{ $trigger }}
        <span x-show="!open" class="material-symbols-outlined">keyboard_arrow_down</span>
        <span x-show="open" class="material-symbols-outlined" style="display: none;">keyboard_arrow_up</span>
    </button>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 left-0 top-[74px] w-full shadow-lg"
            style="display: none;"
            @click="open = false">
        <div class="py-1 ring-1 ring-black ring-opacity-5 bg-azul/[98%]" style="box-shadow: 0 0 5px 2px rgba(0,0,0,0.1), inset 0 0 10px 2px rgba(0,0,0,.5); border-bottom: solid 4px var(--azul)">

            <x-guest.container style="grid-template-columns: repeat({{ $cols }}, minmax(0, 1fr));"> {{ $content }} </x-guest.container>

        </div>
    </div>
</div>

