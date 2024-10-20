<x-guest-layout>
    <x-slot name="page">Quem Somos</x-slot>

    <x-guest.header :image="asset('img/genebra1.webp')" alignment="center">Quem Somos</x-guest.header>

    <div data-aos="fade-left" class="px-6 py-10 mx-auto sm:px-10 max-w-7xl">
        <p class="pb-4 text-justify">A Escola Cristã Genebra é uma instituição de ensino dedicada a formar futuros reformadores da fé e da sociedade. Nossa missão é proporcionar uma educação de excelência fundamentada na Cosmovisão Cristã Reformada, que une o desenvolvimento acadêmico com uma sólida formação ética e moral.</p>
        <p class="pb-4 text-justify">Inspirados pelos valores da Reforma Protestante, seguimos o princípio de que tudo o que fazemos é "Coram Deo" — ou seja, diante de Deus e para Deus. Nossa abordagem pedagógica visa preparar os alunos para enfrentar o mundo com sabedoria, responsabilidade e um profundo senso de propósito.</p>
    </div>

    <div class="grid gap-20 mb-20 overflow-hidden">

        <x-guest.jumbotron-about>
            <h2 class="flex items-center gap-2 pb-4 text-[28px] xs:text-3xl sm:text-4xl font-smoothy"><img src="{{ asset('img/icons/5.webp') }}" alt="image" class="object-contain max-h-8"> Excelência Acadêmica</h2>
            <p class="pb-4 text-justify">Somos uma escola cognitivo-interacionista e entendemos que nossa metodologia parte da cosmovisão cristã reformada e encontra sustentabilidade acadêmica por meio de parcerias com instituições de ensino tradicionais (Mackenzie, Abeka, Maison des Langues). Outro elemento chave de nosso método é o aprendizado baseado em projetos que se inspira na visão educacional suíça para oportunizar momentos e experiências memoráveis a fim de tornar o aprendizado interativo, significativo e relevante para a formação do aluno.</p>
            <p class="pb-4 text-justify">Unimos a isso os princípios da educação cristã clássica, aplicando métodos e técnicas de comprovada eficácia ao longo dos séculos para garantir um formação ética e moral sólida do corpo discente. Por fim, fazemos tudo Coram Deo, ou seja, toda nossa prática didática pedagógica se dá como forma de cultuar a Deus e glorificá-lo no exercício de nossa vocação.</p>
        </x-guest.jumbotron-about>

        <div data-aos="fade-left" class="px-6 py-2 mx-auto sm:px-14 max-w-7xl">
            <h2 class="flex items-center text-azul gap-2 pb-4 text-[28px] xs:text-3xl sm:text-4xl font-smoothy"><img src="{{ asset('img/icons/2.webp') }}" alt="image" class="object-contain max-h-8"> Educação Cristã Clássica</h2>
            <p class="pb-4 text-justify">Além de nossa abordagem inovadora, seguimos os princípios da Educação Cristã Clássica, que se baseia no desenvolvimento de três pilares: gramática, lógica e retórica. A partir do 6º ano, oferecemos aulas de filosofia clássica para fortalecer o raciocínio lógico, a argumentação e a capacidade de comunicação dos alunos.</p>
            <p class="pb-4 text-justify">Nossa formação acadêmica é embasada por uma cosmovisão cristã, com o objetivo de desenvolver mentes afiadas e corações puros, capacitando nossos alunos a serem testemunhas da fé no ambiente acadêmico e social.</p>
        </div>

        <x-guest.jumbotron-about>
            <h2 class="flex items-center gap-2 pb-4 text-[28px] xs:text-3xl sm:text-4xl font-smoothy"><img src="{{ asset('img/icons/4.webp') }}" alt="image" class="object-contain max-h-8"> Programa Trilíngue e Currículo Internacional</h2>
            <p class="pb-4 text-justify">Em nosso programa trilíngue, oferecemos uma formação sólida em Português, Inglês e Francês, com o inglês sendo ensinado desde os primeiros anos de vida escolar. Utilizamos o método fônico para o desenvolvimento da linguagem, tanto em português quanto em inglês, e no ensino do francês seguimos uma abordagem comunicativa, com o suporte de materiais da Abeka, Richmond e Maison des Langues.</p>
            <p class="pb-4 text-justify">Nosso compromisso com a excelência linguística inclui também a parceria com a Aliança Francesa de Niterói e a preparação para certificações internacionais como o TOEFL.</p>
            <p class="pb-4 text-justify">A partir de 2025, com a integração do currículo IB (International Baccalaureate), 50% das aulas do Ensino Médio serão ministradas em inglês, reforçando nosso compromisso com uma educação global.</p>
        </x-guest.jumbotron-about>

        <div data-aos="fade-left" class="px-6 py-2 text-azul mx-auto sm:px-14 max-w-7xl">
            <h2 class="flex items-center gap-2 pb-4 text-[28px] xs:text-3xl sm:text-4xl font-smoothy"><img src="{{ asset('img/icons/1.webp') }}" alt="image" class="object-contain max-h-8"> Horários Flexíveis e Projetos Extracurriculares</h2>
            <p class="pb-4 text-justify">Além da qualidade acadêmica, nossa estrutura oferece flexibilidade de horários e oportunidades de extensão com disciplinas eletivas para o Fundamental II, programas de período integral no Ensino Médio e Educação Infantil, além de atividades extracurriculares que enriquecem o desenvolvimento integral dos alunos.</p>
            <p class="pb-4 text-justify">Dentre nossos projetos diferenciados, destacamos o Intercâmbio para Suíça, uma experiência cultural transformadora que leva os alunos a uma imersão educacional e cultural no coração na Suíça, com destaque para visitas a locais históricos e educativos de grande importância.</p>
        </div>

        <x-guest.jumbotron-about>
            <h2 class="flex items-center gap-2 pb-4 text-[28px] xs:text-3xl sm:text-4xl font-smoothy"><img src="{{ asset('img/icons/3.webp') }}" alt="image" class="object-contain max-h-8"> Nossa Essência e Valores</h2>
            <p class="pb-4 text-justify">Na Escola Cristã Genebra, buscamos formar alunos com raízes fortes, corações puros e mentes afiadas. Nosso compromisso é preparar cidadãos globais com uma formação cristã sólida, capazes de impactar a sociedade com ética, responsabilidade e uma visão de mundo fundamentada nos valores eternos do Reino de Deus. Mais do que ensinar conteúdos acadêmicos, buscamos despertar em cada estudante a consciência de viver "Coram Deo", servindo a Deus em todas as áreas da vida.</p>
            <p class="pb-4 text-justify">Nossa visão — Go Global, Go Beyond, Go Eternal — nos guia a formar alunos que pensem de maneira global, que vão além dos limites convencionais e caminhem em direção à eternidade, conscientes de seu papel como agentes de transformação no mundo e para a glória de Deus.</p>
            <p class="pb-4 text-justify">Essa é a Escola Cristã Genebra: uma instituição comprometida com a formação completa de cada aluno, unindo fé, excelência acadêmica e uma visão global para impactar positivamente o presente e o futuro!</p>
        </x-guest.jumbotron-about>

    </div>
</x-guest-layout>
