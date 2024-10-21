<x-guest-layout>
    <div class="font-poppins">

        <div class="relative flex justify-center bg-center bg-no-repeat bg-cover" style="background-image: url({{ asset('img/fundamental11.webp') }})">

            <x-guest.container class="grid grid-cols-12 z-20 min-h-[750px]">
                <div class="flex flex-col justify-end md:justify-around md:col-span-7 col-span-full pt-40 md:pb-20 md:pr-20 text-white lg:pr-40">
                    <div class="px-4 md:px-10" style="text-shadow: 0 0 2px #000">
                        <h1 class="pb-4 text-6xl font-smoothy">Fundamental 1</h1>
                        <p>Na Escola Cristã Genebra, os primeiros anos do Ensino Fundamental marcam o início de uma jornada transformadora, onde cada aluno é preparado para descobrir seu potencial, desenvolver habilidades essenciais e fortalecer valores éticos e cristãos. Unimos o legado da Educação Cristã Clássica com abordagens pedagógicas inovadoras, criando um ambiente onde tradição e modernidade andam lado a lado.</p>
                    </div>
                    <div class="text-azul-200">.</div>
                </div>
                <div class="col-span-5"></div>
            </x-guest.container>

            <div class="absolute top-0 bottom-0 flex right-0 md:max-w-[50%] w-full left-0 z-10 md:rounded-e-full bg-azul opacity-90 md:opacity-100 h-full"></div>

            <img src="{{ asset('img/fundamental12.webp') }}" alt="fundamental 1" class="z-0 absolute bottom-0 pl-[2vw] md:pl-80 object-cover md:object-contain right-0 md:right-auto h-[90%] md:h-[82%]" style="filter: drop-shadow(0 0 10px #000)">

        </div>

        <x-guest.container>
            <h2 class="pt-20 pb-10 text-center font-smoothy text-azul leading-8 2xl:leading-[3.5rem]" style="font-size: clamp(2rem, 4vw, 4.3rem)">Abordagem Cognitivo Interacionista  <span class="text-nowrap">e Educação Clássica</span></h2>
            <p class="pb-4 text-justify">Nosso modelo pedagógico, que mescla os princípios da Educação Clássica com a abordagem cognitivo-interacionista, promove uma aprendizagem ativa e significativa. Valorizamos a mediação do professor e a interação do aluno com o conhecimento, incentivando uma participação ativa no processo de construção do saber.</p>
            <p class="pb-4 text-justify">Com o Trivium como base, nossos alunos aprendem a dominar a gramática, a lógica e a retórica, formando um alicerce sólido para o pensamento crítico e a comunicação.</p>
        </x-guest.container>

        <div class="mx-auto max-w-7xl">
            <div class="relative flex justify-center mt-10">
                <img src="{{ asset('img/lupa1.webp') }}" alt="image" class="hidden md:flex absolute top-0 bottom-0 object-cover w-1/4 h-full">
                <img src="{{ asset('img/lupa2.webp') }}" alt="image" class="hidden md:flex absolute top-0 bottom-0 object-contain h-full">

                <div class="flex md:flex-row flex-col min-h-[580px] gap-4 z-20">
                    <div class="flex items-start flex-auto">
                        <div class="pl-8 md:pr-28">
                            <h3 class="pb-4 font-bold">🌍 Programa Trilíngue</h3>
                            <p class="leading-5">Desde o 1º ano, os alunos participam do nosso programa trilíngue, com aulas diárias de inglês (em parceria com a Abeka, que utiliza o método fônico) e duas aulas semanais de francês (em colaboração com a Aliança Francesa de Niterói). Esse ambiente de imersão linguística prepara as crianças para os desafios de um mundo globalizado.</p>
                        </div>
                    </div>
                    <div class="min-w-[20%] relative flex justify-center">
                        <img src="{{ asset('img/lupa1.webp') }}" alt="image" class="md:hidden absolute top-0 bottom-0 object-cover w-2/4 h-full">
                        <img src="{{ asset('img/lupa2.webp') }}" alt="image" class="object-contain h-full md:hidden z-20">
                    </div>
                    <div class="flex md2:items-center flex-auto">
                        <div class="px-10">
                            <h3 class="pb-4 font-bold">🧠Problem Based Learning</h3>
                            <p class="leading-5">Inspirados pelo modelo suíço de educação, integramos o PBL no currículo para incentivar a resolução de problemas reais. Esse método exclusivo da Genebra coloca o aluno no centro do aprendizado, promovendo curiosidade, pensamento crítico e colaboração em atividades práticas e instigantes.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid md2:grid-cols-5 min-h-[550px] gap-20 relative">
                <img src="{{ asset('img/experience2.webp') }}" alt="image" class="absolute bottom-0 object-contain h-[100%] z-10 md2:opacity-100 opacity-50 blur-sm md2:blur-none hidden lg:block">
                <div class="col-span-2 bg-center bg-no-repeat bg-cover hidden lg:block" style="background-image: url({{ asset('img/experience1.webp') }});"></div>
                <div class="z-20 flex flex-col justify-around col-span-3 py-4 md:py-10 md2:pl-24 px-6" style="text-shadow: 1px 1px 3px #fff">
                    <div>
                        <h3 class="py-4 font-bold">🔡 Alfabetização pelo Método Fônico</h3>
                        <p class="text-justify">A alfabetização dos nossos alunos é conduzida através do Método Fônico, uma abordagem eficaz que foca na associação entre letras e sons, promovendo uma base sólida na leitura e escrita.</p>
                    </div>
                    <div>
                        <h3 class="py-4 font-bold">✍️ Valorização da Letra Cursiva</h3>
                        <p class="text-justify">A partir do 1º ano, nossos alunos são incentivados a utilizar a letra cursiva, um importante aliado no desenvolvimento cognitivo e motor, além de fortalecer a fluência na escrita.</p>
                    </div>
                    <div>
                        <h3 class="py-4 font-bold">🕒 Rotina de Aulas Balanceada</h3>
                        <p class="text-justify">Nossas aulas possuem 40 minutos de duração, seguidas de intervalos de 30 minutos, promovendo o equilíbrio perfeito entre foco e descanso, favorecendo uma absorção mais eficiente dos conteúdos.</p>
                    </div>
                </div>
            </div>

            <div class="relative flex flex-col md:flex-row items-end md:items-center md:mt-10">
                <div class="z-20 flex flex-col justify-center gap-4 md:gap-12 md:py-6 px-6 md:pl-10 md:pr-2" style="text-shadow: 1px 1px 3px #fff">
                    <div>
                        <h3 class="pb-4 font-bold">🖥️ Tecnologia Integrada e Monitoramento</h3>
                        <p class=" text-justify md:text-left">Utilizamos ferramentas tecnológicas com inteligência artificial para acompanhar de perto o desenvolvimento dos nossos alunos, garantindo um acompanhamento contínuo e personalizado das suas habilidades de leitura e escrita.</p>
                    </div>
                    <div>
                        <h3 class="pb-4 font-bold">👩‍🏫 Turmas Reduzidas e Atenção Individualizada</h3>
                        <p>Com turmas de até 18 alunos e coordenações especializadas, asseguramos que cada criança receba o apoio e a atenção que necessita para florescer academicamente e pessoalmente.</p>
                    </div>
                </div>
                <img src="{{ asset('img/handbook.webp') }}" alt="image" class="object-cover max-w-[70%] md:max-w-96">
            </div>

        </div>

        <img src="{{ asset('img/inteligencia-artificial.webp') }}" alt="inteligencia artificial" class="object-contain w-full -mt-[8px] md:-mt-[29px]">

        <x-guest.container>
            <div class="pb-10 text-justify">
                <p class="pb-4 px-2">Utilizamos uma plataforma que é parte essencial do projeto Explorações Literárias, que visa fomentar o prazer pela leitura e incentivar o crescimento acadêmico e pessoal dos alunos. Integrada ao nosso currículo, a plataforma oferece uma vasta biblioteca digital, com mais de 1.000 livros interativos e audiolivros, abrangendo diferentes gêneros e níveis de leitura. Isso permite que os alunos tenham acesso a uma experiência literária personalizada, escolhendo leituras que correspondem ao seu nível e interesse.</p>
                <p class="pb-4 px-2">Além disso, a plataforma acompanha o progresso dos estudantes, oferecendo relatórios detalhados de desempenho e atividades que reforçam a compreensão textual, vocabulário e fluência. Essa ferramenta se alinha perfeitamente ao nosso compromisso de formar leitores críticos, proficientes e apaixonados pela literatura, enriquecendo o ambiente de aprendizado e inspirando uma jornada literária contínua e prazerosa.</p>
            </div>
        </x-guest.container>

    </div>
</x-guest-layout>
