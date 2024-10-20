@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-azul text-black focus:outline-none focus:border-azul/80'
            : 'border-transparent text-black/70 transition-all duration-300 hover:text-azul hover:border-azul/70 focus:outline-none focus:text-back focus:border-azul/50';
@endphp

<a {{ $attributes->merge(['class' => $classes.' inline-flex items-center text-center px-1 mt-4 border-b-[7px] font-semibold leading-5 transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</a>
