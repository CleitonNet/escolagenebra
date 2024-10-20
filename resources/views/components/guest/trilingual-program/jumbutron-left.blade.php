<div>
    {{-- TABLET & PC --}}
    <div class="relative hidden md:block">
        <div class="relative before:absolute before:top-0 before:bottom-0 before:w-2/3 before:bg-[#365498] before:-z-10 after:absolute after:top-0 after:right-0 after:bottom-0 after:w-2/3 after:bg-white after:-z-10">
            <div class="flex mx-auto max-w-[1320px]">
                <div class=" rounded-e-[20px] py-10 px-8 lg:px-12 bg-[#365498] text-white flex flex-col justify-center z-10">
                    <div class="flex gap-4 lg:h-16 items-center flex-col lg:flex-row pl-4 lg:px-0">
                        <h2 class="text-5xl font-smoothy text-nowrap">{{ $title }}</h2>
                        <div class="flex items-center flex-auto gap-6 px-4 py-2 pl-6 bg-white rounded-3xl">
                            {{ $slot }}
                        </div>
                    </div>
                    <p class="text-lg text-justify bg-[#365498] py-4">{{ $texto }}</p>
                </div>
                <img src="{{ asset($image) }}" alt="" class="-ml-9 max-w-80">
            </div>
        </div>
    </div>

    {{-- SMARTPHONES --}}
    <div class="relative md:hidden">
        <div class="p-4 bg-[#365498]"><img src="{{ asset($image) }}" alt="image" class="object-contain w-full rounded-t-3xl rounded-b-md"></div>
        <div class="bg-[#365498] text-white pb-20 px-2">
            <div class="flex gap-8 lg:h-16 items-center flex-col lg:flex-row px-3 lg:px-0">
                <h2 class="text-5xl font-smoothy pl-7 sm:pl-14 text-nowrap pt-10">{{ $title }}</h2>
                <div class="flex items-center justify-center w-full gap-6 p-2 bg-white rounded-xl">
                    {{ $slot }}
                </div>
            </div>
            <p class="text-lg text-justify bg-[#365498] px-3 py-4">{{ $texto }}</p>
        </div>
    </div>

</div>
