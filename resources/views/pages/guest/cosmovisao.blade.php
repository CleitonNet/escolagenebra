<x-guest-layout>
    <x-slot name="page">Cosmovisão Cristã</x-slot>

    <x-guest.header image='img/foto11.webp'>
        Cosmovisão Cristã
    </x-guest.header>

    <div class="pb-10 font-poppins">
        <x-guest.container class="grid gap-10 sm:gap-20">
            <x-guest.cosmovisao.intro />
            <x-guest.cosmovisao.cristonocentrodetudo />
            <x-guest.cosmovisao.capelaniabibletime />
            <img src="{{ asset('img/cosmovisao/10.webp') }}" alt="" class="w-full rounded-b-3xl" />
        </x-guest.container>

        <div>
            <div class="relative h-40 before:absolute before:top-0 before:bottom-0 before:w-full before:bg-white before:rounded-ee-[120px] before:-z-10 after:absolute after:top-0 after:right-0 after:bottom-0 after:w-full after:bg-vermelho2 after:-z-20"></div>
            <div class="relative before:absolute before:top-0 before:bottom-0 before:w-2/3 before:bg-white before:-z-10 after:absolute after:top-0 after:right-0 after:bottom-0 after:w-2/3 after:bg-vermelho2 after:-z-10">
                <div class="flex px-2 mx-auto sm:px-4 max-w-[1300px]">
                    <div class=" rounded-s-[120px] pb-20 pt-24 px-7 sm:px-14 bg-vermelho2">
                        <p class="pb-8 font-semibold leading-6 text-center text-white sm:text-justify px sm:leading-7 md:leading-8 lg:leading-10 sm:text-lg md:text-xl lg:text-2xl">Reconhecendo a importância da imersão na Palavra de Deus, lançamos anualmente o Concurso “A Bíblia em 1 Ano”, desafiando nossos alunos a completarem a leitura integral da Bíblia.</p>
                        <p class="pb-8 font-semibold leading-6 text-center text-white sm:text-justify px sm:leading-7 md:leading-8 lg:leading-10 sm:text-lg md:text-xl lg:text-2xl">Como incentivo, os vencedores concorrem a uma passagem para o nosso intercâmbio anual na Suíça, onde podem vivenciar de perto a história da Reforma Protestante e ampliar sua visão de mundo. Essa experiência proporciona um momento único de crescimento pessoal e espiritual, sendo uma oportunidade de aprendizado inesquecível que reforça nosso compromisso com a formação integral de nossos alunos.</p>
                    </div>
                </div>
            </div>
        </div>

        <x-guest.container>
            <p class="py-20 text-lg font-medium leading-6 text-center">Aqui na nossa escola, a fé cristã é o fio condutor que entrelaça todos os aspectos da educação. Nosso compromisso é desenvolver uma geração que pensa e age à luz da Palavra de Deus, capacitando os alunos a servirem com excelência e propósito no Reino de Deus, em qualquer lugar que forem chamados a atuar!</p>
        </x-guest.container>

        <x-guest.cosmovisao.chancelas />



    </div>

</x-guest-layout>
