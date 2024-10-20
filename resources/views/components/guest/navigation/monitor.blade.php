<div class="items-stretch justify-center hidden xl:gap-x-6 lg:gap-x-2.5 sm:-my-px lg:flex">
    <x-guest.nav-link :href="route('guest.about')" :active="request()->routeIs('guest.about')">{{ __('Quem somos') }}</x-guest.nav-link>
    <x-guest.dropdown-wide :active="(request()->routeIs('guest.segments.*'))" trigger='Segmentos'>
        <x-slot name='content'>
            <x-guest.container class="grid grid-cols-4 gap-4 px-4 lg:px-4">

                <a href="{{ route('guest.segments.garderie') }}" class="p-2.5 bg-azul/10 hover:bg-azul transition-all duration-200 group">
                    <div class="px-2 py-1 text-lg font-medium tracking-wide text-center bg-white rounded-t-md font-smoothy truncate">Garderie/ Educação Infantil</div>
                    <div class="flex justify-center w-full h-60 relative overflow-hidden bg-top bg-cover rounded-b-md" style="background-image: url({{ asset('img/segmento-child-education.webp') }})">
                        <div class="bg-top bg-cover bg-no-repeat w-4/5 absolute inset-y-0 group-hover:scale-110 transition-all duration-300" style="background-image: url({{ asset('img/segmento-child-education.webp') }})"></div>
                    </div>
                </a>
                <a href="{{ route('guest.segments.fundamentalI') }}" class="p-2.5 bg-azul/10 hover:bg-azul transition-all duration-200 group">
                    <div class="px-2 py-1 text-lg font-medium tracking-wide text-center bg-white rounded-t-md font-smoothy">Ensino Fundamental 1</div>
                    <div class="flex justify-center w-full h-60 relative overflow-hidden bg-center bg-cover rounded-b-md" style="background-image: url({{ asset('img/segmento-fundamental-i.webp') }})">
                        <div class="bg-center bg-cover bg-no-repeat w-4/5 absolute inset-y-0 group-hover:scale-110 transition-all duration-300" style="background-image: url({{ asset('img/segmento-fundamental-i.webp') }})"></div>
                    </div>
                </a>
                <a href="{{ route('guest.segments.fundamentalII') }}" class="p-2.5 bg-azul/10 hover:bg-azul transition-all duration-200 group">
                    <div class="px-2 py-1 text-lg font-medium tracking-wide text-center bg-white rounded-t-md font-smoothy">Ensino Fundamental 2</div>
                    <div class="flex justify-center w-full h-60 relative overflow-hidden bg-center bg-cover rounded-b-md" style="background-image: url({{ asset('img/segmento-fundamental-ii.webp') }})">
                        <div class="bg-center bg-cover bg-no-repeat w-4/5 absolute inset-y-0 group-hover:scale-110 transition-all duration-300" style="background-image: url({{ asset('img/segmento-fundamental-ii.webp') }})"></div>
                    </div>
                </a>
                <a href="{{ route('guest.segments.high-school') }}" target="_blank" class="p-2.5 bg-azul/10 hover:bg-azul transition-all duration-200 group">
                    <div class="px-2 py-1 text-lg font-medium tracking-wide text-center bg-white rounded-t-md font-smoothy">Ensino Médio</div>
                    <div class="flex justify-center w-full h-60 relative overflow-hidden bg-top bg-cover rounded-b-md" style="background-image: url({{ asset('img/segmento-high-school.webp') }})">
                        <div class="bg-top bg-cover bg-no-repeat w-4/5 absolute inset-y-0 group-hover:scale-110 transition-all duration-300" style="background-image: url({{ asset('img/segmento-high-school.webp') }})"></div>
                    </div>
                </a>

            </x-guest.container>
        </x-slot>
    </x-dropdown-wide>
    <x-guest.nav-link :href="'https://galeriagenebra.myportfolio.com/work'" target="_blank">{{ __('Galeria') }}</x-guest.nav-link>
    <x-guest.nav-link :href="route('guest.enrollment')" :active="request()->routeIs('guest.enrollment')">{{ __('Matrícula') }}</x-guest.nav-link>
</div>
