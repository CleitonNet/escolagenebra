<div>
    {{-- TABLET & PC --}}
    <div class="relative hidden md:block">

        <div class="absolute top-0 bottom-0 w-2/3 bg-white -z-10"></div>
        <div class="absolute top-0 bottom-0 w-2/3 bg-azul -z-10 right-0">
            <div class="bg-azul text-white">
                <div class="h-36"></div>
                <div class="flex gap-8 bg-white h-16 items-center"></div>
            </div>
        </div>

        <div class="flex mx-auto max-w-7xl">
            <img src="{{ asset($image) }}" alt="" class="object-contain max-w-80">
            <div class="bg-azul text-white rounded-s-[20px] -ml-4">
                <div class="h-36"></div>
                <div class="flex gap-8 lg:h-16 items-center lg:items-end flex-col lg:flex-row pl-8 lg:pl-12 lg:px-0">
                    <h2 class="text-5xl font-smoothy text-nowrap">{{ $title }}</h2>
                    <div class="flex items-center w-full lg:justify-start justify-center lg:flex-auto gap-6 px-4 py-2 bg-white rounded-s-3xl">
                        {{ $slot }}
                    </div>
                </div>
                <p class="text-lg text-justify bg-azul px-8 lg:px-12 py-4">{{ $texto }}</p>
            </div>
        </div>
    </div>

    {{-- SMARTPHONES --}}
    <div class="relative md:hidden">
        <div class="p-4 bg-azul"><img src="{{ asset($image) }}" alt="image" class="object-contain w-full rounded-t-3xl rounded-b-md"></div>
        <div class="bg-azul text-white pb-20 px-2">
            <div class="flex gap-8 lg:h-16 items-center flex-col lg:flex-row px-3 lg:px-0">
                <h2 class="text-5xl font-smoothy pl-7 text-nowrap pt-10">{{ $title }}</h2>
                <div class="flex items-center justify-center w-full gap-6 p-2 bg-white rounded-xl">
                    {{ $slot }}
                </div>
            </div>
            <p class="text-lg text-justify bg-azul px-3 py-4">{{ $texto }}</p>
        </div>
    </div>

</div>
