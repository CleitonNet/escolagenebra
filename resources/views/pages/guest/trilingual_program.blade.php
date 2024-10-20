<x-guest-layout>
    <x-slot name="page">Programa Trilíngue</x-slot>

    <x-guest.header image='img/foto9-horizontal.webp' alignment='top'>
        <h1 class="sm:pb-20" style="font-size: clamp(2rem, 9vw, 4rem);"><span class="text-nowrap">Programa Trilíngue &</span> <span class="text-nowrap"> Currículo Internacional</span></h1>
    </x-guest.header>

    <div class="font-poppins">

        <x-guest.container>
            <p class="px-2 xs:px-4 sm:px-6 md:px-8 pb-16 text-lg text-justify pt-7">Na Escola Cristã Genebra, acreditamos que o domínio de vários idiomas é uma ferramenta essencial para capacitar nossos alunos a atuarem em um mundo cada vez mais globalizado. Nosso Programa Trilíngue oferece uma formação completa e consistente em português, inglês e francês, com uma abordagem diferenciada que acompanha os alunos desde a Educação Infantil até o Ensino Médio, preparando-os tanto linguisticamente quanto culturalmente.</p>
        </x-guest.container>

        <x-guest.trilingual-program.jumbutron-right title='Educação Infantil' image="img/pbl.webp">
            <x-slot name="texto">
                Nos primeiros anos, cultivamos o interesse pelas línguas através de uma metodologia lúdica e envolvente. Na Educação Infantil, os alunos são introduzidos ao inglês com a Sensibilização Fonética (Abeka) e ao francês através de projetos interativos baseados no método PBL. Desde cedo, nossos alunos desenvolvem uma base linguística que se consolida à medida que avançam no ensino.
            </x-slot>
            <img src="{{ asset('img/brands/abeka.webp') }}" alt="" class="object-contain pl-6 max-h-10">
            <img src="{{ asset('img/brands/pbl.webp') }}" alt="" class="object-contain max-h-12">
        </x-guest.trilingual-program.jumbutron-right>

        <x-guest.trilingual-program.jumbutron-left title='Fundamental I' image="img/2.webp">
            <x-slot name="texto">
                Nos primeiros anos, cultivamos o interesse pelas línguas através de uma metodologia lúdica e envolvente. Na Educação Infantil, os alunos são introduzidos ao inglês com a Sensibilização Fonética (Abeka) e ao francês através de projetos interativos baseados no método PBL. Desde cedo, nossos alunos desenvolvem uma base linguística que se consolida à medida que avançam no ensino.
            </x-slot>
            <div><img src="{{ asset('img/brands/abeka.webp') }}"    alt="" class="object-contain max-h-10"></div>
            <div><img src="{{ asset('img/brands/richmond.webp') }}" alt="" class="object-contain max-h-10"></div>
            <div><img src="{{ asset('img/brands/maison.webp') }}"   alt="" class="object-contain max-h-12"></div>
        </x-guest.trilingual-program.jumbutron-left>

        <x-guest.trilingual-program.jumbutron-right title='Fundamental II' image="img/3.webp">
            <x-slot name="texto">Já no Fundamental I, o inglês é ensinado com o Método Fonético (Abeka), o que facilita o processo de alfabetização, enquanto o francês segue uma abordagem comunicativa, utilizando materiais da Samir e Maison des Langues. O objetivo é proporcionar um aprendizado fluente e natural, integrando as habilidades de leitura, escrita e fala com base sólida e eficaz.</x-slot>
            <div><img src="{{ asset('img/brands/sme_c.webp') }}"              alt="" class="object-contain max-h-10"> </div>
            <div><img src="{{ asset('img/brands/efetivas.webp') }}"           alt="" class="object-contain max-h-10">      </div>
            <div><img src="{{ asset('img/brands/ets-toefl.webp') }}"          alt="" class="object-contain max-h-12">      </div>
            <div><img src="{{ asset('img/brands/alliance-francaise.webp') }}" alt="" class="object-contain max-h-12">      </div>
        </x-guest.trilingual-program.jumbutron-right>

        <x-guest.trilingual-program.jumbutron-left title='Ensino Médio' image="img/4.webp">
            <x-slot name="texto">
                No Ensino Médio, damos um passo à frente na educação global com a integração da BNCC e do International Baccalaureate (IB), oferecendo aos nossos alunos um currículo internacional de excelência. 50% das aulas são ministradas em inglês, promovendo não só fluência, mas também uma imersão profunda nas disciplinas acadêmicas, preparando os estudantes para universidades de renome ao redor do mundo. Utilizamos materiais de instituições renomadas, como Mackenzie, Macmillan, Kognity e Ebsco, garantindo um ensino rigoroso e completo que expande os horizontes de nossos alunos.
            </x-slot>
            <div><img src="{{ asset('img/brands/macmilan.webp') }}"              alt="" class="object-contain max-h-10"> </div>
            <div><img src="{{ asset('img/brands/kognity.webp') }}"           alt="" class="object-contain max-h-10">      </div>
            <div><img src="{{ asset('img/brands/ebsco.webp') }}"          alt="" class="object-contain max-h-12">      </div>
            <div><img src="{{ asset('img/brands/ib.webp') }}" alt="" class="object-contain max-h-12">      </div>
        </x-guest.trilingual-program.jumbutron-left>

        <img src="{{ asset('img/intercâmbio-express.webp') }}" alt="intercambio cultural" class="w-full max-w-md px-4 mx-auto mt-20 mb-10 min-w-36">

        <x-guest.container>
            <p class="pb-8 text-lg text-center">Como parte de nossa formação internacional, oferecemos anualmente um intercâmbio cultural para a Suíça destinado aos alunos do Fundamental II e do Ensino Médio. Essa é uma oportunidade única para os alunos vivenciarem a imersão em um ambiente educacional de alto nível, além de explorar a rica herança cultural e histórica do país. Essa experiência reforça o aprendizado de línguas, amplia a visão de mundo e proporciona um contato direto com as origens da Reforma Protestante, um marco na história cristã.</p>
            <p class="pb-8 text-lg text-center">Dois alunos têm a chance de ganhar essa viagem como prêmio do nosso concurso cultural "A Bíblia em 1 Ano", incentivando tanto o aprendizado acadêmico quanto o espiritual.</p>
        </x-guest.container>


        <div class="relative bg-azul" style="-webkit-box-shadow: inset 20px 0px 15px -20px rgba(0,0,0,0.75), inset -20px 0px 15px -20px rgba(0,0,0,0.75); box-shadow: inset 20px 0px 15px -20px rgba(0,0,0,0.75), inset -20px 0px 15px -20px rgba(0,0,0,0.75);">
            <div class="absolute top-0 left-0 w-full h-12 bg-white rounded-b-[1.7vw]" style="box-shadow: 0px 20px 20px 0px rgba(0,0,0,0.5);"></div>
            <div class="" style="-webkit-box-shadow: 20px 0px 15px -20px rgba(0,0,0,0.75), -20px 0px 15px -20px rgba(0,0,0,0.75); box-shadow: 20px 0px 15px -20px rgba(0,0,0,0.75), -20px 0px 15px -20px rgba(0,0,0,0.75);">
                <div class="flex">
                    <div class="bg-center bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] w-[30%]" style="background-image: url({{ asset('img/express/1.webp') }})"></div>
                    <div class="bg-bottom bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] w-[40%]" style="background-image: url({{ asset('img/express/2.webp') }})"></div>
                    <div class="bg-center bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] w-[30%]" style="background-image: url({{ asset('img/express/3.webp') }})"></div>
                </div>
                <div class="flex">
                    <div class="bg-center bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] w-[37%]" style="background-image: url({{ asset('img/express/4.webp') }})"></div>
                    <div class="bg-bottom bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] w-[36%]" style="background-image: url({{ asset('img/express/5.webp') }})"></div>
                    <div class="bg-center bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] w-[27%]" style="background-image: url({{ asset('img/express/6.webp') }})"></div>
                </div>
                <div class="flex">
                    <div class="bg-bottom bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] flex-auto" style="background-image: url({{ asset('img/express/7.webp') }})"></div>
                    <div class="bg-center bg-cover h-[250px] xs:h-[350px] sm:h-[450px] md:h-[500px] lg:h-[570px] xl:h-[630px] flex-auto" style="background-image: url({{ asset('img/express/8.webp') }})"></div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-12 bg-white rounded-t-[40px]" style="box-shadow: 0px -20px 20px 0px rgba(0,0,0,0.5);"></div>
        </div>

        <div>
            <x-guest.container>
                <p class="px-8 pb-16 text-lg text-justify pt-7">
                    Nosso Programa Trilíngue e currículo internacional oferecem uma formação completa, inovadora e global, preparando os alunos da Escola Cristã Genebra para os desafios do futuro com uma sólida base acadêmica, ética e cristã.
                </p>

                <img src="{{ asset('img/brands/swisscam.webp') }}" alt="intercambio cultural" class="w-full max-w-md px-4 mx-auto my-10 min-w-36">

                <p class="px-8 pb-16 text-lg text-justify pt-7">
                    Nossa escola é associada da empresa “Swisscam”, uma câmara de comércio entre o Brasil e Suíça. A SWISSCAM atua desde 1945 no Brasil e tem entre seus membros as principais empresas suíças, assim como empresas brasileiras interessadas em fazer negócios na Suíça. Eles são especialistas em promover o desenvolvimento de negócios entre os dois países.
                </p>
            </x-guest.container>
        </div>
    </div>

</x-guest-layout>
