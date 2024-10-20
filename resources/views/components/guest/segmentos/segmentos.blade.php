@push('head')
    <style>
        .segmento .segment_more { transform: translateY(0); box-shadow: 0 0 5px 2px rgba(0,0,0,0.5) }
        .segmento:hover .segment_more { animation: ease-in-out slideUp 500ms forwards; box-shadow: 0 0 10px 2px rgba(0,0,0,0.5) }
        .segments::-webkit-scrollbar { height: 1px; }
        @keyframes slideUp { from { transform: translateY(200px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    </style>
@endpush
<div class="mb-28">

    <h2 class="text-3xl font-bold tracking-wide text-center md:text-4xl lg:text-5xl mb-14 lg:hidden">Segmentos</h2>

    {{ $slot }}

</div>
