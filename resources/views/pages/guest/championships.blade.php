<x-guest-layout>
    <x-slot name="page">Campeonatos Esportivos</x-slot>

    <div class="relative flex justify-center flex-col items-center">
        <div class="bg-azul pt-20 w-full">
            <x-guest.container><img src="{{ asset('img/atletica1.webp') }}" alt="atletica" class="object-contain w-full pb-6"></x-guest.container>
            <div class="rounded-t-3xl h-10 bg-white -mb-1"></div>
        </div>
        <img src="{{ asset('img/atletica.webp') }}" alt="piso" class="hidden md:block relative object-cover -mt-20 md:-mt-48 min-h-[900px] md:min-h-[700px] left-0">
        <div class="block md:hidden -mt-80 sm:-mt-40 sm:py-[5rem] min-h-[850px] sm:min-h-[850px] left-0"></div>
        <div class="max-w-[450px] px-4 md:px-0 md:left-[10vw] xl:left-[16vw] 2xl:left-[20vw] pb-40 md:pb-0 pt-80 md:pt-96 xl:pt-80 2xl:pt-60 absolute">
            <h2 style="text-shadow: 0 0 2px #fff" class="font-smoothy text-4xl sm:text-5xl pb-4 text-azul-200">Competições <span class="xs:text-nowrap">Esportivas e Acadêmicas</span> </h2>
            <p style="text-shadow: 0 0 2px #fff" class="font-poppins text-lg text-justify">Na Escola Cristã Genebra, o esporte e a educação caminham lado a lado para proporcionar uma formação integral aos nossos alunos. Acreditamos que as competições esportivas e acadêmicas são ferramentas essenciais para desenvolver não apenas a saúde física, mas também o caráter e a resiliência. Nossas atividades são oferecidas em diversos espaços, desde nossas instalações até clubes conveniados e locais públicos, como praias, skate parks e parques.</p>
        </div>
    </div>

<div class="relative">
        <div class="absolute top-0 right-0 w-full h-full"></div>
        <div class="hidden lg:block pt-16 absolute inset-0 pr-32"><div class="bg-contain bg-center bg-no-repeat h-full" style="background-image: url({{ asset('img/E71T0138.webp') }})"></div></div>
        <div class="grid lg:grid-cols-2 absolute inset-0 -z-10">
            <div class="bg-azul-200"></div>
            <div class="hidden lg:block">
                <div class="absolute inset-y-0 w-full right-0"><div class="relative h-full"><img src="{{ asset('img/atletica-vertical-azul.webp') }}" alt="atletica" class="object-contain absolute inset-y-0 right-0 h-full -z-10 opacity-5 drop-shadow-lg"></div></div>
            </div>
        </div>
        <x-guest.container class="grid lg:grid-cols-2 font-poppins">
            <div class="text-white py-10 lg:pr-32 flex flex-col justify-between">
                <p class="font-poppins text-lg font-medium text-justify">Além de competições internas, nossa Atlética está sempre ativa em torneios regionais e estaduais. A Atlética é uma associação estudantil, supervisionada pela Coordenação de Projetos, e tem como objetivo integrar os alunos por meio do esporte. Entre as modalidades que nossos alunos praticam estão futebol, vôlei, basquete e atletismo, além do Genebra Chess (nosso clube de xadrez).</p>
                <p>Estamos construindo um <strong>legado de excelência esportiva</strong> e acadêmica. <strong>Junte-se a nós</strong> nessa jornada de sucesso! 🌟</p>
            </div>
            <div class="text-sm text-white lg:text-azul relative">
                <div class="lg:pl-40 lg:pt-64">
                    <h2 class="font-smoothy text-5xl pb-4">Nossas Conquistas em 2023:</h2>

                    <h3 class="sm:pl-20 lg:pl-0 font-bold">Conquistas no Xadrez:</h3>
                    <p class="sm:pl-20 lg:pl-0 text-justify leading-5">🥇 Interclasse Rio de Janeiro 2023: Conquistamos o 1º lugar no Interclasse regional com o incrível desempenho de Miguel Tavares.</p>
                    -
                    <p class="sm:pl-20 lg:pl-0 text-justify leading-5">🥈🥉 Chess Open Niterói 2023 (Categoria Escolar): Miguel Tavares e Guilherme Resinente brilharam no pódio, conquistando o 2º e 3º lugar, respectivamente.</p>
                    -
                    <p class="sm:pl-20 lg:pl-0 text-justify leading-5">🥉 JEN (Jogos Escolares do Niterói) - Categoria Sub 14: Benjamin mostrou sua habilidade e garantiu o 3º lugar.</p>
                    -
                    <p class="sm:pl-20 lg:pl-0 text-justify leading-5">🌐 64º Lugar no Chess Xadrez International: Luca Liparisi destacou-se globalmente, conquistando o 64º lugar em uma competição internacional de xadrez.</p>
                </div>
                <div class="pl-10 sm:pl-20 grid sm:grid-cols-2 lg:grid-cols-1 lg:pl-80 py-10 leading-3">
                    <h3 class="font-bold">Categoria Sub-8 (Jenzinho):</h3>
                    <p>🥇 Cabo de Guerra</p>
                    <p>🥇 Dodbool</p>
                    <p>🥇 Handebol</p>
                    <p>🥇 Futsal</p>
                    -
                    <h3 class="font-bold">Jen Categoria Sub-10:</h3>
                    <p>🥇 Futsal</p>
                    <p>🥇 Cabo de Guerra</p>
                    <p>🥇 Dodbooll</p>
                    <p>🥇 Handebol</p>
                    -
                    <h3 class="font-bold">Jen Sub-12:</h3>
                    <p>🥇 Campeão do Futsal</p>
                </div>
            </div>
        </x-guest.container>
    </div>

    <div class="py-20">
        <x-guest.container class="grid lg:grid-cols-2 xl:grid-cols-5 gap-8">
            <div class="xl:col-span-2 relative h-[400px] md:h-96"><img src="{{ asset('img/jogos-escolares.webp') }}" alt="image" class="object-contain inset-0 w-full h-full absolute"></div>
            <div class="xl:col-span-1 relative h-96"><img src="{{ asset('img/jenzinho.webp') }}"                     alt="image" class="object-contain inset-0 w-full h-[105%] -mt-8 absolute"></div>
            <div class="xl:col-span-2 relative h-96"><img src="{{ asset('img/chess-open.webp') }}"                   alt="image" class="object-contain inset-0 w-full h-full absolute"></div>
            <div class="xl:col-span-2 relative h-96"><img src="{{ asset('img/estadual.webp') }}"                     alt="image" class="object-contain inset-0 w-full h-full absolute"></div>
            <div class="xl:col-span-1 relative h-96"><img src="{{ asset('img/medals.webp') }}"                       alt="image" class="object-contain inset-0 w-full h-full absolute"></div>
            <div class="xl:col-span-2 relative h-96"><img src="{{ asset('img/chess-intercambio.webp') }}"            alt="image" class="object-contain inset-0 w-full h-full absolute"></div>
        </x-guest.container>
    </div>

    <div>
        <x-guest.container>
            <h3 class="text-5xl pb-4 font-smoothy text-azul">Fraternidades Genebra</h3>
            <p class="text-justify font-poppins text-lg pb-4">Uma de nossas iniciativas mais empolgantes são as Fraternidades Genebra, que tornam o cotidiano escolar ainda mais dinâmico. Todos os alunos são designados a uma fraternidade, com base em suas características pessoais, formando uma comunidade que reflete as diferentes identidades de cada casa.</p>
            <p class="text-justify font-poppins text-lg pb-4">Ao longo do ano letivo, essas fraternidades competem em várias atividades, ganhando pontos por desempenho acadêmico, comportamento exemplar e participação em eventos colaborativos e esportivos.</p>
        </x-guest.container>
    </div>

    <div class="relative">
        <div class="rounded-b-3xl h-3 xs:h-4 sm:h-5 md:h-6 lg:h-8 xl:h-10 bg-white z-10 absolute w-full top-0"></div>
        <div class="bg-gradient-to-b from-black/60 via-transparent z-0 to-black/60 absolute inset-0"></div>
        <img src="{{ asset('img/interclasse.webp') }}" alt="" class="object-contain w-full">
        <div class="rounded-t-3xl h-3 xs:h-4 sm:h-5 md:h-6 lg:h-8 xl:h-10 bg-white z-10 absolute w-full bottom-0"></div>
    </div>

    <x-guest.container class="py-20 grid gap-4 font-poppins">
        <div class="text-white grid grid-cols-12">
            <div class="col-span-2 relative">
                <img src="{{ asset('img/reformadores/wycliffe.webp') }}" alt="reformador" class="object-contain w-[120%] absolute right-0 -bottom-6 z-20">
                <div class="bg-vermelho w-1/2 absolute right-0 inset-y-0 -z-10"></div>
            </div>
            <div class="col-span-9 py-10 pl-4 bg-vermelho">
                <p class="leading-5">A Casa Wycliffe é conhecida pelos feitos audaciosos e a coragem indomável de seus membros. Inspirados pelo símbolo do leão em seu brasão escarlate, eles enfrentam desafios com determinação e habilidade. Os integrantes desta nobre casa são reconhecidos por suas proezas e pela coragem que permeia cada aspecto de suas vidas. Seu legado é forjado pela ousadia de seus atos, tornando-os verdadeiros heróis em tempos de adversidade.</p>
                <div class="font-bold text-lg">Patrono: John Wycliffe.</div>
            </div>
            <div class="col-span-1 relative bg-vermelho rounded-e-3xl"></div>
        </div>
        <div class="text-white grid grid-cols-12">
            <div class="col-span-1 relative bg-azul-200 rounded-s-3xl"></div>
            <div class="col-span-9 py-10 pr-4 bg-azul-200">
                <p class="leading-5">Os membros da Casa Knox, cujo estandarte é o cordeiro, representam a união entre a força e a humildade. Seu brasão azul simboliza a lealdade inabalável e a determinação em defender seus ideais, enquanto a figura do cordeiro representa a gentileza e a compaixão, valores essenciais que complementam a força e a coragem de seus membros. Assim, o cordeiro continua a ser uma força benevolente e respeitada, inspirando outros a seguirem seu exemplo de integridade e serviço altruísta.</p>
                <div class="font-bold text-lg text-right">Patrono: John Knox.</div>
            </div>
            <div class="col-span-2 relative">
                <img src="{{ asset('img/reformadores/knox.webp') }}" alt="reformador" class="object-contain w-[120%] absolute right-0 -bottom-6 z-20">
                <div class="bg-azul-200 w-1/2 absolute left-0 inset-y-0 -z-10"></div>
            </div>
        </div>
        <div class="text-white grid grid-cols-12">
            <div class="col-span-2 relative">
                <img src="{{ asset('img/reformadores/huss.webp') }}" alt="reformador" class="object-contain w-[120%] absolute right-0 -bottom-6 z-20">
                <div class="bg-gray-700 w-1/2 absolute right-0 inset-y-0 -z-10"></div>
            </div>
            <div class="col-span-9 py-10 pl-4 bg-gray-700">
                <p class="leading-5">A Casa Huss caracteriza-se pelo forte senso de justiça. O símbolo do ganso cinzento representa proteção e trabalho em equipe. Ele simboliza a ideia de segurança coletiva, onde cada indivíduo contribui para o bem-estar do grupo. A sua forma curva sugere suporte e apoio mútuo, enquanto a cor cinza pode denotar estabilidade e solidez. Juntos, esses elementos representam a importância de se unir em prol de um objetivo comum, criando um ambiente seguro e colaborativo, onde todos possam prosperar.</p>
                <div class="font-bold text-lg">Patrono: Jan Huss.</div>
            </div>
            <div class="col-span-1 relative bg-gray-700 rounded-e-3xl"></div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-1 relative bg-amarelo rounded-s-3xl"></div>
            <div class="col-span-9 py-10 pr-4 bg-amarelo">
                <p class="leading-5">Os membros da Casa Magno, cujo brasão ostenta a majestosa águia, simbolizando visão, coragem e excelência, são reconhecidos pela sua profunda busca por sabedoria e conhecimento. Sua habilidade excepcional em elaborar estratégias eficazes os destacam pela capacidade de enfrentar desafios com astúcia. Assim, a marca da Casa Magno não apenas reside em seu domínio intelectual, mas também na sua capacidade de transformar esse conhecimento em ações poderosas e impactantes.</p>
                <div class="font-bold text-lg text-right">Patrono: Carlos Magno.</div>
            </div>
            <div class="col-span-2 relative">
                <img src="{{ asset('img/reformadores/magno.webp') }}" alt="reformador" class="object-contain w-[120%] absolute right-0 -bottom-6 z-20">
                <div class="bg-amarelo w-1/2 absolute left-0 inset-y-0 -z-10"></div>
            </div>
        </div>
    </x-guest.container>

    <div>
        <x-guest.container>
            <h3 class="text-5xl pb-4 font-smoothy text-azul">Interclasse</h3>
            <p class="text-justify text-lg pb-4 font-poppins">Essas competições internas culminam nos nossos Jogos Interclasse, onde os alunos podem demonstrar suas habilidades em uma variedade de esportes. As fraternidades não apenas promovem uma competição saudável, mas também encorajam o trabalho em equipe, a liderança e o espírito esportivo!</p>
        </x-guest.container>
    </div>

    <x-guest.container class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-4 py-20">
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/0U5A0151.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Basquete</div>
        </div>
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/0U5A0177.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Handbol</div>
        </div>
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/0U5A0171.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Tênis</div>
        </div>
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/0U5A0217.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Natação</div>
        </div>
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/IMG_9651.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Atletismo</div>
        </div>
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/IMG_9658.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Corrida com Obstácul</div>
        </div>
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/IMG_9881.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Lançamento de Dardos</div>
        </div>
        <div>
            <div class="h-[400px] bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('img/0U5A0161.webp') }})"></div>
            <div class="font-smoothy text-2xl text-center text-azul pt-1">Futsal</div>
        </div>
    </x-guest.container>

    <div class="relative">
        <x-guest.container>
            <h2 class="font-smoothy pb-4 text-5xl text-azul">Cheerleaders</h2>
            <p class="font-poppins text-lg">Você já deve ter visto cheerleaders em filmes norte-americanos – as meninas com roupas de ginástica e pom-poms se apresentando antes de partidas esportivas, com coreografias acrobáticas e gritos de guerra. Cheerleading, ou liderar uma torcida, ao pé da letra, basicamente é uma performance de habilidades atléticas, com dança, saltos e canto para ater a atenção de uma plateia em um evento. Nossas meninas estão sempre presentes em nossas competições e abertura de eventos!</p>
        </x-guest.container>

        <img src="{{ asset('img/cheerleaders.webp') }}" alt="cheerleaders" class="object-contain w-full">
        <div class="rounded-t-[100px] h-[4vw] absolute inset-x-0 bottom-0 w-full bg-azul"></div>
    </div>

    <div class="-mt-1 bg-azul pb-20 pt-1 relative font-poppins">
        <x-guest.container>
            <h2 class="font-smoothy pb-6 text-6xl italic text-white text-center">Competições Acadêmicas</h2>
            <p class="text-white text-lg text-center sm:text-left sm:text-xl md:text-2xl mb-10">Além disso, promovemos competições acadêmicas como Campeonatos de Tábuada e Feira de Ciências. Também participamos de competições de renome, desafiando nossos alunos a se destacarem em diversas áreas do conhecimento. Queremos que cada aluno tenha a chance de brilhar, seja nos esportes ou nas competições intelectuais, reforçando seu desenvolvimento integral e multidisciplinar.</p>
            <div class="grid md:grid-cols-7 gap-4">
                <div class="md:col-span-5">
                    <img src="{{ asset('img/worldskills.webp') }}" alt="Worldskills" class="object-contain w-full">
                </div>
                <div class="md:col-span-2">
                    <img src="{{ asset('img/imagem1.webp') }}" alt="imagem" class="object-contain w-full">
                </div>
            </div>
        </x-guest.container>
        <img src="{{ asset('img/competicoes-academicas.webp') }}" alt="image" class="absolute right-0 bottom-0 w-[500px] object-contain">
    </div>


</x-guest-layout>
