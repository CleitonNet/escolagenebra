@props(['image'=>false,'alignment'=>'center'])
<h1 class="relative w-full my-10 pt-10 flex items-center {{ $image ? 'bg-azul/70':'bg-azul' }}">
    <div class="absolute top-0 left-0 w-full h-full bg-cover bg-left -z-10" style="background-position: {{ $alignment }}; background-image: url({{ $image }})"></div>
    <x-guest.container class="w-full">
        <div data-aos="zoom-out-right" class="leading-[50px] py-10 lg:py-32 text-white md:leading-[65px] lg:leading-[75px] xl:leading-[95px] title-header font-smoothy">
            {{ $slot }}
        </div>
    </x-guest.container>
</h1>
