@props(['stitle','description','gotoURL','image','duration'])

<a href="{{ $gotoURL }}" data-aos="fade-left" data-aos-duration="{{ $duration }}" {{ $attributes->merge(['class'=>'segmento swiper-slide']) }}>

    <div class="overflow-hidden relative bg-cover border-2 border-azul h-[500px] bg-center rounded-xl" style="background-image: url({{ asset($image) }}); font-size: 400%">
        <div class="absolute bottom-0 left-0 right-0 top-44 bg-gradient-to-t from-azul via-azul/90 to-transparent"></div>
        <div class="absolute bottom-0 z-10 w-full px-2 bg-white opacity-0 md:px-4 h-72 pb-28 segment_more">
            <div class="pt-4 mb-2 text-4xl font-extrabold leading-10 text-azul" style="line-height: 44px;">{!! $stitle !!}</div>
            <div class="text-[12pt] font-bold">{{ $description }}<span class="font-normal text-azul/70">... ler mais.</span></div>
        </div>
        <div class="absolute w-full px-3 mb-2 text-4xl font-extrabold text-center text-white md:px-5 bottom-10" style="line-height: 44px;">{!! $stitle !!}</div>

    </div>
    <div class="absolute top-[10%] -right-3 font-semibold gap-1 text-xs flex items-center z-50 flex-col backdrop-blur-sm bg-vermelho/80 text-white rounded-xl p-2">
        <svg class="w-5 h-5" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="m0 0h32v32h-32z" class="fill-[#f00]"/>
            <path d="m13 6h6v7h7v6h-7v7h-6v-7h-7v-6h7z" class="fill-white"/>
        </svg>

        Saiba<br>mais
    </div>
</a>
