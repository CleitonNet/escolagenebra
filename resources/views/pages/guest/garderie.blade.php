<x-guest-layout>
    <x-slot name="page">Berçário e Educação Infantil</x-slot>

    <div class="relative flex justify-center min-h-[550px] h-[65vw] max-h-[800px] overflow-hidden bg-top bg-cover" style="background-image: url({{ asset('img/primary.webp') }})">
        <div class="z-20 px-6 pt-24 text-center text-white sm:pt-32 text-9xl font-smoothy" style="font-size: clamp(3.7rem, 8vw, 8rem); text-shadow: 0 0 5px #000;">Berçário e <br> Educação Infantil</div>
        <img src="{{ asset('img/nurcery/2.webp') }}" alt="nurcery" class="absolute z-20 object-contain w-fit -bottom-px h-fit max-h-[41.9%]">
        <img src="{{ asset('img/nurcery/1.webp') }}" alt="nurcery" class="absolute z-20 object-contain w-fit bottom-0 h-fit max-h-[55%] ml-4" style="filter: drop-shadow(0 -5px 10px rgba(0 0 0 /.5));">
        <img src="{{ asset('img/wave.svg') }}" alt="wave" class="absolute bottom-0 left-0 z-0 w-full h-fit" style="filter: drop-shadow(0 -5px 10px rgba(0 0 0 /.5));">
    </div>

    <div class="py-10 text-center text-azul font-smoothy  leading-[2.3rem] sm:leading-[3rem] md:leading-[3.9rem] lg:leading-[4.8rem] xl:leading-[5.5rem]" style="font-size: clamp(2rem, 5vw, 5rem);">Primeiros Passos Inspirados <br> pela Excelência Suíça</div>

    <x-guest.container class="font-poppins">
        <p class="pb-4 text-lg text-justify">Na Escola Cristã Genebra, compreendemos que os primeiros anos de vida são essenciais para o desenvolvimento integral de cada criança. Nossa abordagem é inspirada pela excelência educacional suíça, combinando tradição com inovação para criar um ambiente acolhedor e estimulante, onde cada criança pode crescer com segurança e confiança.</p>
        <p class="pb-4 text-lg text-justify">Nosso berçário e Educação Infantil são muito mais do que simples espaços de cuidado: aqui, transformamos cada momento em uma oportunidade de aprendizado e crescimento. As atividades diárias são cuidadosamente planejadas para desenvolver habilidades cognitivas, emocionais e sociais, respeitando o ritmo individual de cada criança. Através de brincadeiras, canções e interações, proporcionamos experiências que estimulam a curiosidade e o amor pelo aprendizado desde cedo!</p>

        <div class="grid items-center gap-10 md:grid-cols-5">
            <div class="md:col-span-2"><img src="{{ asset('img/taggesmutter.webp') }}" alt="" class="object-cover w-full"></div>
            <div class="flex flex-col justify-end md:col-span-3">
                <h2 class="pt-4 pb-2 text-6xl text-center md:pt-16 font-smoothy text-azul md:text-left" style="font-size: clamp(3rem, 5vw, 5rem);">Tagesmütter</h2>
                <div class="text-justify">Acreditamos no poder do vínculo entre a escola e a família. Nossas "Tagesmütter", profissionais exclusivas da nossa instituição, estão sempre disponíveis para oferecer suporte personalizado às famílias, facilitando a adaptação e assegurando que cada criança receba o cuidado necessário para se sentir segura e acolhida. Elas desempenham um papel fundamental no acompanhamento do bem-estar das crianças e na comunicação direta com os pais.</div>
            </div>
        </div>

        <div class="grid sm:grid-cols-5 my-10 md2:mt-40 md2:mb-20 text-white md2:grid-cols-4 bg-azul rounded-[40px] md2:rounded-3xl" id="fonico">
            <div class="relative md:flex col-span-2 bg-left bg-no-repeat bg-contain hidden md2:col-span-1 rounded-l-[40px] md2:rounded-l-3xl" style="background-image: url({{ asset('img/menino1.webp') }})">
                <img src="{{ asset('img/menino2.webp') }}" alt="img" class="absolute object-cover h-[120%] bottom-0 left-1 z-20">
            </div>
            <div class="flex-col justify-end px-4 md:px-6 lg:px-12 py-12 md2:flex md2:pr-12 col-span-full md:col-span-3">
                <h2 class="text-center md:text-left pb-4 text-6xl font-smoothy">Método Fônico</h2>
                <div class="text-center md:text-justify leading-8">Na Educação Infantil, damos especial atenção ao desenvolvimento da linguagem. Através do Método Fônico, estimulamos a consciência fonológica das crianças, essencial para o processo de alfabetização. As canções tradicionais, as rimas e outras atividades multissensoriais fazem parte do nosso cotidiano, preparando as crianças para uma transição suave ao aprendizado formal da leitura e escrita.</div>
            </div>
        </div>


        <div class="grid gap-8 py-20 md:grid-cols-2">
            <div class="text-white bg-azul-200 rounded-[40px]">
                <div class="relative grid grid-cols-5 lg:h-[370px] xl:h-96 rounded-t-[40px]">
                    <div class="z-20 col-span-2 flex flex-col justify-center leading-[5rem] md:leading-[6rem] lg:leading-[6.5rem] pl-4 py-4 italic text-9xl font-smoothy sm:pl-4 md:pl-6 md2:pl-10 lg:pl-12" style="font-size: clamp(6rem, 10vw, 7.5rem); text-shadow: 0 0 15px #000;">
                        <div>Ali</div>
                        <div>men</div>
                        <div>tação</div>
                    </div>
                    <div class="relative col-span-3 bg-center bg-cover" style="background-image: url({{ asset('img/alimentacao1.webp') }})">
                        <div class="absolute top-0 bottom-0 bg-gradient-to-r from-azul-200 to-transparent w-[20%]"></div>
                        <img src="{{ asset('img/alimentacao2.webp') }}" alt="alimentação" class="absolute bottom-0 right-0 sm:-right-6 h-[130%]" />
                    </div>
                </div>
                <div class="p-10 text-justify">
                    <p class="pb-4">A nutrição é um pilar importante em nossa escola. Oferecemos um cardápio balanceado e adaptado às necessidades específicas de cada criança, com a devida orientação de nutricionistas especializados. Em casos de alergias ou intolerâncias, trabalhamos em conjunto com as famílias para garantir a segurança alimentar e o bem-estar dos nossos alunos.</p>
                    <p class="pb-4">Na Escola Cristã Genebra, seu filho receberá o cuidado e a atenção que merece, em um ambiente que valoriza o desenvolvimento integral. Aqui, cada risada, descoberta e aprendizado fazem parte de uma jornada repleta de amor e excelência!</p>
                </div>
            </div>

            <div class="text-white rounded-[40px] bg-[var(--vermelho2)] overflow-hidden">
                <div class="bg-center bg-no-repeat bg-cover lg:h-[370px] xl:h-96" style="background-image: url({{ asset('img/coworking.webp') }})">
                    <div class="z-20 col-span-2 flex flex-col justify-center leading-[5rem] md:leading-[6rem] lg:leading-[6.5rem] py-4 pl-4 italic text-9xl font-smoothy sm:pl-4 md:pl-6 md2:pl-10 lg:pl-12" style="font-size: clamp(6rem, 10vw, 7.5rem); text-shadow: 0 0 15px #000;">
                        <div>Co</div>
                        <div>wor</div>
                        <div>king</div>
                    </div>
                </div>

                <div class="p-10">
                    <p class="pb-4 text-justify">Nossos Coworking nas unidades da Ed. Infantil são  liberados para os papais e mamães de todas as unidades Genebra sem custo! Basta chegar, se identificar na recepção e escolher um local de trabalho. Contamos com um espaço confortável, café feito com carinho, wi-fi livre, bons livros à disposição e um belo piano para os músicos genebrinos desfrutarem!</p>
                    <p class="pb-4 text-justify">Toda quarta, às 4 pm, temos um bolinho especial para tornar nossa tarde ainda mais agradável!</p>
                    <p class="pb-4 text-justify">Mais do que uma comodidade, nosso Coworking tangibiliza um dos objetivos de nossa escola que é ter nossas famílias sempre pertinho de nós!</p>
                </div>
            </div>
        </div>

        <div class="grid gap-4 pt-10 pb-20 md:grid-cols-12">
            <div class="flex items-center justify-center md:col-span-3"><img src="{{ asset('img/brands/schole.webp') }}" alt="schole" class="object-cover max-h-64"></div>
            <div class="md:col-span-9">
                <h2 class="pb-4 text-6xl font-smoothy text-azul">Horários Flexíveis</h2>
                <div>
                    <p class="pb-4 text-justify">A contratação do contraturno na faixa etária de 1 a 5 anos, através do nosso Integral e do Período Estendido, segue o objetivo do “Scholé Genebra”: uma complementação da carga horária inspirada na Educação Cristã Clássica.</p>
                    <p class="pb-4 text-justify">O Scholé Genebra oferece mais do que um simples contraturno, sendo uma experiência educacional diferenciada, baseada na formação de um indivíduo sábio, virtuoso e eloquente. O conceito de "Scholé" remete ao lazer, descanso e contemplação, proporcionando um tempo sem distrações, para estudar de forma prazerosa o que realmente importa, e de preferência, junto a amigos.</p>
                    <p class="pb-4 text-justify">Nosso objetivo é cultivar nas crianças o prazer de aprender, buscando tudo que é bom, belo e verdadeiro. Ao mesmo tempo, incentivamos o desenvolvimento de virtudes como sabedoria, coragem, justiça e temperança, sempre em um ambiente onde boas maneiras e respeito são valores fundamentais.</p>
                </div>
            </div>
        </div>
    </x-guest.container>

</x-guest-layout>
