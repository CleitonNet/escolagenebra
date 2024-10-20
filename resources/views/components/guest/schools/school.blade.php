@props(['image', 'unity', 'enrollment', 'segments', 'address'])

<a href="{{ $enrollment }}" target="_blank" data-aos="fade-up" data-aos-duration="1000" class="segmento">

    <div class="overflow-hidden relative bg-cover border-2 border-azul h-[400px] bg-center rounded-xl" style="background-image: url({{ 'storage/'.$image }}); font-size: 400%">
        <div class="absolute bottom-0 left-0 right-0 top-44 bg-gradient-to-t from-azul via-azul/90 to-transparent"></div>
        <div class="absolute bottom-0 z-10 flex flex-col justify-center w-full h-full px-2 opacity-0 bg-white/85 md:px-4 pb-28 segment_more">
            <div class="pt-4 mb-2 text-4xl font-extrabold leading-10 text-center text-azul px-2">{{ $unity }}</div>
            <div class="text-[.9rem] font-bold text-azul">
                <div class="px-6 text-xs sm:text-sm font-semibold text-center">{{ $address }}</div>
                {{ $slot }}
            </div>
        </div>
        <div class="absolute w-full flex flex-col justify-end mb-2 px-4 text-white bottom-10 lg:h-32">
            <div class="pb-2 text-4xl px-3 md:px-5 font-extrabold text-center" style="line-height: 44px;">{{ $unity }}</div>
            <div class="pb-4 mx-auto text-sm font-semibold text-center max-w-64">{{ $address }}</div>
            <div class="block md:hidden">
                <ul>
                    @foreach ($segments as $segment) <!-- Use segments como propriedade -->
                        <li class="flex justify-between gap-1 text-sm font-semibold">
                            <div>{{ $segment->name }}</div>
                            <div class="flex-auto mb-2 border-b-2 border-dotted border-white/50 md:border-azul/50"></div>
                            <div class="font-semibold">{{ $segment->description }}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</a>
