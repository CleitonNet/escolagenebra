@props(['background'=>null,'bg_position'=>'bg-center'])
<h1 class="relative w-full pt-10 h-[450px] flex justify-center items-center text-5xl font-smoothy md:text-[4rem] leading-none text-center text-white bg-azul/70">
    <div class="absolute top-0 left-0 w-full h-full {{ $bg_position }} bg-cover -z-10" style="background-image: url({{ asset($background) }})"></div>
    {{ $slot }}
</h1>
