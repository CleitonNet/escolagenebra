<x-guest-layout>
    <x-slot name="page">Sistema de Ensino Mackenzie</x-slot>

    <x-guest.page-header background='img/foto8.webp'>
        <h1>Sistema de <br>Ensino Mackenzie</h1>
    </x-guest.page-header>

    <x-guest.container>

        <h2 class="max-w-3xl mx-auto my-20 text-4xl font-bold tracking-wide text-center md:text-5xl">Excelência Pedagógica na Escola Cristã Genebra</h2>

        <ul class="px-2">
            <li class="mt-2 mb-4 text-justify">&#x27A4; <strong>Tradição e Confiabilidade:</strong> Com mais de 150 anos de tradição, o material do Mackenzie tem servido gerações com conteúdos ricos e de alta qualidade, proporcionando uma base sólida de aprendizado aos alunos.</li>
            <li class="mt-2 mb-4 text-justify">&#x27A4; <strong>KnowHow e Corpo Técnico:</strong> Nosso time de especialistas, com vasta experiência e competência, eleva continuamente o nível dos conteúdos ministrados, garantindo uma formação acadêmica ímpar.</li>
            <li class="mt-2 mb-4 text-justify">&#x27A4; <strong>Abordagem Clássica:</strong> Utilizamos uma abordagem clássica de ensino que, além de aprofundar os conhecimentos, garante uma sinergia profunda entre aprendizado e a fé cristã, formando cidadãos íntegros e conscientes.</li>
            <li class="mt-2 mb-4 text-justify">&#x27A4; <strong>Resultados Acadêmicos Comprovados:</strong> Não nos contentamos apenas em ensinar; buscamos a excelência. Para isso, contratamos empresas terceirizadas que aferem nosso desempenho acadêmico. Adicionalmente, estimulamos nossos alunos a ultrapassar seus limites por meio de olimpíadas e competições acadêmicas.</li>
            <li class="mt-2 mb-4 text-justify">&#x27A4; <strong>Inteligência Artificial e Literacia:</strong> Adotamos uma inovadora plataforma de IA que mensura o nível de literacia do aluno desde o primeiro ano. Esta ferramenta sugere leituras adaptadas ao nível do estudante, incentivando e desenvolvendo consistentemente o hábito leitor.</li>
            <li class="mt-2 mb-4 text-justify">&#x27A4; <strong>Fé e Ciência:</strong> Cultivamos a visão de que fé e ciência não são antagonistas. Ensinamos que uma verdadeira fé nos impulsiona ao conhecimento profundo e que a genuína ciência nos conduz a um questionamento contínuo na busca da verdade.</li>
            <li class="mt-2 mb-4 text-justify">&#x27A4; <strong>Materiais Próprios - PBL Genebra:</strong> O PBL Genebra é nosso diferencial. Desenvolvemos materiais didáticos próprios que proporcionam um aprendizado baseado em experiências e vivências significativas, alinhando teoria e prática de forma harmônica.</li>
        </ul>

        <div class="grid w-full max-w-6xl grid-cols-2 gap-6 mx-auto mt-20 mb-20 md:grid-cols-3 lg:grid-cols-4">
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('philosofia') }}" class="relative flex items-center justify-center p-2 mt-0 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto2.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Filosofia <br> Coram Deo</div>
                </a>
            </div>
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('educational_model') }}" class="relative flex items-center justify-center p-2 mt-16 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto7.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Modelo Educacional <br> Suíço</div>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('trilingual_program') }}" class="relative flex items-center justify-center p-2 mt-0 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto9.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Programa Trilingue</div>
                </a>
            </div>
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('teaching_staff') }}" class="relative flex items-center justify-center p-2 mt-16 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto6.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Corpo Docente <br> Cristão</div>
                </a>
            </div>
            {{-- <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('education_system') }}" class="relative flex items-center justify-center p-2 mt-6 overflow-hidden transition rounded-lg md:-mt-16 lg:mt-16 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto8.webp') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Sistema de <br> Ensino Mackenzie</div>
                </a>
            </div> --}}
        </div>

    </x-guest.container>

</x-guest-layout>
