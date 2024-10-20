<x-guest-layout>
    <x-slot name="page">Nossas Unidades</x-slot>

    <div class="w-full transition bg-center bg-no-repeat bg-cover carousel slide" style="background-image: url({{ asset('img/methodology.webp') }});">
        <div class="text-white bg-azul/85 backdrop-blur-sm">
            <x-guest.container>


                <div data-aos="zoom-out-right" class="flex text-6xl lg:text-[5vw] flex-col justify-center gap-3 mt-[80px] carouse-image">
                    <div class="leading-[50px] md:leading-[65px] lg:leading-[75px] xl:leading-[95px] flex items-center">
                        <div class="py-20 font-bold">Nossas Unidades</div>
                    </div>
                </div>

            </x-guest.container>

        </div>
    </div>

    <x-guest.container class="grid gap-8 pt-10 pb-40 mx-auto md:grid-cols-2 lg:grid-cols-3 max-w-7xl">
        <div class="overflow-hidden rounded-xl bg-azul/5" style="box-shadow: 0 0 12px 1px rgba(0,0,0,0.2)">
            <div class="h-64 bg-center bg-no-repeat bg-cover" style="background-image: url({{ asset('img/genebra1.webp') }})"></div>
            <div class="p-5">
                <div class="text-sm font-semibold text-azul">Niterói - RJ</div>
                <div class="text-4xl font-bold opacity-75">São Francisco I</div>
                <a href="https://maps.app.goo.gl/yF9fuCaM5shts2PRA" target="_blank" class="text-sm font-light">Av. Rui Barbosa, 391, São Francisco, Niteroi - RJ </a>
                <div class="flex flex-col items-center justify-center gap-2 mt-4">
                    <a href="https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20S%C3%A3o%20Francisco%20I.%20" target="_blank" class="max-w-xs px-4 py-1 text-xs leading-6 text-center text-white rounded bg-azul">Agende uma visita</a>
                </div>
            </div>
        </div>
        <div class="overflow-hidden rounded-xl bg-azul/5" style="box-shadow: 0 0 12px 1px rgba(0,0,0,0.2)">
            <div class="h-64 bg-center bg-no-repeat bg-cover" style="background-image: url({{ asset('img/genebra3.webp') }})"></div>
            <div class="p-5">
                <div class="text-sm font-semibold text-azul">Niterói - RJ</div>
                <div class="text-4xl font-bold opacity-75">São Francisco II</div>
                <a href="https://maps.app.goo.gl/1PL8ttYcNEJHN9P29" target="_blank" class="text-sm font-light">Rua Tamoios, 32, São Francisco, Niteroi - RJ </a>
                <div class="flex flex-col items-center justify-center gap-2 mt-4">
                    <a href="https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20S%C3%A3o%20Francisco%20II.%20" target="_blank" class="max-w-xs px-4 py-1 text-xs leading-6 text-center text-white rounded bg-azul">Agende uma visita</a>
                </div>
            </div>
        </div>
        <div class="overflow-hidden rounded-xl bg-azul/5" style="box-shadow: 0 0 12px 1px rgba(0,0,0,0.2)">
            <div class="h-64 bg-center bg-no-repeat bg-cover" style="background-image: url({{ asset('img/genebra2.webp') }})"></div>
            <div class="p-5">
                <div class="text-sm font-semibold text-azul">Niterói - RJ</div>
                <div class="text-4xl font-bold opacity-75">Icaraí</div>
                <a href="https://maps.app.goo.gl/Uk3wHPcxfPr1WRNq6" target="_blank" class="text-sm font-light">Av. Sete de Setembro, 157, Icaraí, Niterói - RJ</a>
                <div class="flex flex-col items-center justify-center gap-2 mt-4">
                    <a href="https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20Icara%C3%AD%20I" target="_blank" class="max-w-xs px-4 py-1 text-xs leading-6 text-center text-white rounded bg-azul">Agende uma visita</a>
                </div>
            </div>
        </div>
        <div class="overflow-hidden rounded-xl bg-azul/5" style="box-shadow: 0 0 12px 1px rgba(0,0,0,0.2)">
            <div class="h-64 bg-center bg-no-repeat bg-cover" style="background-image: url({{ asset('img/genebra5.webp') }})"></div>
            <div class="p-5">
                <div class="text-sm font-semibold text-azul">Niterói - RJ</div>
                <div class="text-4xl font-bold opacity-75">Icaraí II</div>
                <a href="https://maps.app.goo.gl/Uk3wHPcxfPr1WRNq6" target="_blank" class="text-sm font-light">Av. Sete de Setembro, 296, Icaraí, Niterói – RJ</a>
                <div class="flex flex-col items-center justify-center gap-2 mt-4">
                    <a href="https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20Icara%C3%AD%20I" target="_blank" class="max-w-xs px-4 py-1 text-xs leading-6 text-center text-white rounded bg-azul">Agende uma visita</a>
                </div>
            </div>
        </div>

    </x-guest.container>
</x-guest-layout>
