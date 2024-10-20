<x-guest-layout>
    <x-slot name="page">Filosofia Coram Deo</x-slot>

    <x-page-header background='img/foto11.webp'>
        <h1>Filosofia <br> Coram Deo</h1>
    </x-page-header>

    <x-guest.container>
        <div class="flex flex-col items-center justify-center max-w-xl px-10 py-10 mx-auto text-2xl text-center">
            <img src="{{ asset('img/cross.svg') }}" alt="cross" class="w-20 h-20 my-10">
            <div>Somos uma escola protestante interdenominacional e temos uma visão reformada que nos aproxima  dos <strong>princípios</strong> e <strong>valores bíblicos</strong>;</div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-xl px-10 py-10 mx-auto text-2xl text-center">
            <img src="{{ asset('img/user.svg') }}" alt="cross" class="w-16 h-16 my-10">
            <div>Nossa escola é formada por cristãos que entendem que devemos viver <strong>CORAM DEO</strong> (diante de Deus) e que nosso culto não se restringe  a uma liturgia aos domingos, mas sim a todos os dias, por isso fazemos do nosso trabalho uma forma de cultuar a Deus;</div>
        </div>

        <div class="flex flex-col items-center justify-center max-w-xl px-10 py-10 mx-auto text-2xl text-center">
            <img src="{{ asset('img/calendar.svg') }}" alt="cross" class="w-20 h-20 my-10">
            <div>Todo nosso calendário festivo e proposta pedagógica têm <strong>Cristo</strong> e sua Palavra como o centro.</div>
        </div>

        <h2 class="my-20 text-5xl font-bold tracking-wide text-center">Nosso Diferenciais</h2>

        <div class="grid max-w-6xl grid-cols-2 gap-6 mx-auto mb-20 md:grid-cols-3 lg:grid-cols-4">
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('educational_model') }}" class="relative flex items-center justify-center p-2 mt-16 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto7.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Modelo Educacional <br> Suíço</div>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('trilingual_program') }}" class="relative flex items-center justify-center p-2 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto9.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Programa Trilingue</div>
                </a>
            </div>
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('teaching_staff') }}" class="relative flex items-center justify-center p-2 mt-16 overflow-hidden transition rounded-lg md:-mt-16 lg:mt-16 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto6.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Corpo Docente <br> Cristão</div>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('education_system') }}" class="relative flex items-center justify-center p-2 -mt-10 overflow-hidden transition rounded-lg md:mt-0 lg:-mt-16 xl:mt-0 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto8.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Sistema de <br> Ensino Mackenzie</div>
                </a>
            </div>
        </div>

    </x-guest.container>
</x-guest-layout>
