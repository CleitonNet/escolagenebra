@props(['name','label','status'=>false])
<div x-data="{ checked: '{{ $status }}' }" class="flex items-center space-x-4">
    <label for="{{ $name }}" class="flex items-center gap-2 font-medium">
        {{-- <div x-text="checked ? 'Nova página' : 'Mesma página'"></div> --}}
        <div>{{ $label }}</div>
        <div class="relative inline-flex items-center cursor-pointer">
            <input {{ $attributes }}
                id="{{ $name }}"
                type="checkbox"
                x-model="checked"
                class="sr-only peer"
                wire:model='{{ $name }}'
            />
            <div
                :class="checked ? 'bg-azul' : 'bg-gray-300'"
                class="h-8 transition duration-300 ease-in-out rounded-full w-14 peer-focus:ring-4 peer-focus:ring-transparent"
            ></div>
            <div
                :class="checked ? 'translate-x-6' : 'translate-x-1'"
                class="absolute w-6 h-6 text-center transition-all duration-300 ease-in-out transform bg-white border border-gray-300 rounded-full peer-checked:bg-white"
            >
            <div class="text-center" x-text="checked ? 'S' : 'N'"></div></div>
        </div>
    </label>
</div>
