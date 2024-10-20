<x-guest.container class="mb-28">
    <style>
        .carousel-container-unity { display: flex; overflow: hidden; }
        .carousel-slide-unity { width: 100%; transition: all 2s; flex: 0 0 auto; }
        .thumbnails-unity { display: flex; justify-content: center; margin-top: 20px; }
        .thumbnail-unity { width: 100%; margin: 0 5px; opacity: 0.3; cursor: pointer; transition: opacity 0.3s; }
        .thumbnail-unity.active { opacity: 1;border: 2px solid #122f64; }

    </style>

    <h2 class="pb-20 text-3xl font-bold text-center md:text-4xl lg:text-5xl xl:text-6xl">Nossas unidades</h2>

    <div class="carousel-container-unity">
        <div class="relative carousel-slide-unity">
            <div class="grid lg:grid-cols-2 relative overflow-hidden border-y-4 border-x-8 border-azul rounded-[3rem] w-full min-h-[450px] group">
                <x-campus.banner banner="'img/genebra1.webp'" goToSlide="1" />
                <x-campus.info place="São Francisco I" segment="Educação Infantil" phone="21 3254-6293" address="Endereço Completo" gotoURL="http://google.com" gotoVisit="https://goo.gl/maps/UyLWjtm1A8cHiYwo7" />
            </div>
        </div>

        <div class="relative carousel-slide-unity">
            <div class="grid lg:grid-cols-2 relative overflow-hidden border-y-4 border-x-8 border-azul rounded-[3rem] w-full min-h-[450px] group">
                <x-campus.banner banner="'img/genebra2.webp'" goToSlide="1" />
                <x-campus.info place="Icaraí" segment="Berçário e Educação Infantil" phone="21 3254-6293" address="Endereço Completo" gotoURL="http://google.com" gotoVisit="https://goo.gl/maps/UyLWjtm1A8cHiYwo7" />
            </div>
        </div>

        <div class="relative carousel-slide-unity">
            <div class="grid lg:grid-cols-2 relative overflow-hidden border-y-4 border-x-8 border-azul rounded-[3rem] w-full min-h-[450px] group">
                <x-campus.banner banner="'img/genebra3.webp'" goToSlide="1" />
                <x-campus.info place="São Francisco II" segment="Ensino Fundamental e Médio" phone="21 3254-6293" address="Endereço Completo" gotoURL="http://google.com" gotoVisit="https://goo.gl/maps/UyLWjtm1A8cHiYwo7" />
            </div>
        </div>

        <div class="relative carousel-slide-unity">
            <div class="grid lg:grid-cols-2 relative overflow-hidden border-y-4 border-x-8 border-azul rounded-[3rem] w-full min-h-[450px] group">
                <x-campus.banner banner="'img/genebra5.webp'" goToSlide="1" />
                <x-campus.info place="São Francisco II" segment="Fundamental I e II" phone="21 3254-6293" address="Endereço Completo" gotoURL="http://google.com" gotoVisit="https://goo.gl/maps/UyLWjtm1A8cHiYwo7" />
            </div>
        </div>
    </div>

    <div class="grid w-full grid-cols-3 gap-2 px-2 mx-auto my-10 overflow-hidden rounded-lg sm:grid-cols-4 md:grid-cols-5 max-w-[300px] sm:max-w-lg">
        <div class="bg-center bg-no-repeat bg-cover border-2 cursor-pointer border-azul thumbnail-unity h-14" style="background-image: url({{ asset('img/genebra1.webp') }})" data-slide="0"></div>
        <div class="bg-center bg-no-repeat bg-cover border-2 cursor-pointer border-azul thumbnail-unity h-14" style="background-image: url({{ asset('img/genebra2.webp') }})" data-slide="1"></div>
        <div class="bg-center bg-no-repeat bg-cover border-2 cursor-pointer border-azul thumbnail-unity h-14" style="background-image: url({{ asset('img/genebra3.webp') }})" data-slide="2"></div>
        <div class="bg-center bg-no-repeat bg-cover border-2 cursor-pointer border-azul thumbnail-unity h-14" style="background-image: url({{ asset('img/genebra5.webp') }})" data-slide="3"></div>
    </div>

</x-guest.container>
