<div>
    @push('head')
    <style>
        .segmento .segment_more { transform: translateY(0); box-shadow: 0 0 5px 2px rgba(0,0,0,0.5) }
        .segmento:hover .segment_more { animation: ease-in-out slideUp 500ms forwards; box-shadow: 0 0 10px 2px rgba(0,0,0,0.5) }

        @keyframes slideUp {
            from { transform: translateY(350px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
    @endpush

    <x-guest.header :image="asset('img/foto7-horizontal.webp')" alignment="center">
        <div data-aos="zoom-out-right" class="flex flex-col justify-center">
            <div class="text-8xl ">Unidades</div>
            <div class="text-5xl font-normal leading-[50px] md:leading-[65px] lg:leading-[75px] xl:leading-[95px]">Clique sobre a unidade desejada para realizar a pré-matrícula</div>
        </div>
    </x-guest.header>

    <div class="mb-28">
        <div class="segments"><div>{{ $slot }}</div></div>
    </div>
</div>
