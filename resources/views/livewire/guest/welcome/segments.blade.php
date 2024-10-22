<div class="mb-28">

    <h2 class="text-3xl font-bold tracking-wide text-center md:text-4xl lg:text-5xl mb-14 lg:hidden">Segmentos</h2>

    <div class="swiper segments px-2 sm:px-4">

        <div class="swiper-wrapper">
            <x-guest.segmentos.segmento duration='1000' stitle='Berçário/ <span class="text-nowrap">Ed. Infantil</span>'
                :gotoURL="route('guest.segments.garderie')" image='img/segmento-child-education.webp'
                description='Como pais, vocês têm a responsabilidade única e profunda de moldar o futuro de seu filho. Cada escolha conta, ' />
            <x-guest.segmentos.segmento duration='1250' stitle='Ensino <span class="text-nowrap">Fundamental I</span>'
                :gotoURL="route('guest.segments.fundamentalI')" image='img/segmento-fundamental-i.webp'
                description='Adentrar os primeiros anos da Educação Fundamental é uma etapa crucial na jornada educacional de cada criança. Na Escola' />
            <x-guest.segmentos.segmento duration='1500' stitle='Ensino <span class="text-nowrap">Fundamental II</span>'
                :gotoURL="route('guest.segments.fundamentalII')" image='img/segmento-fundamental-ii.webp'
                description='Na fase do Fundamental II, a Escola Cristã Genebra abraça a etapa da lógica, um dos pilares centrais do Trivium, a base da' />
            <x-guest.segmentos.segmento target="_blank" duration='1750' stitle='Ensino Médio' :gotoURL="route('guest.segments.high-school')"
                image='img/segmento-high-school.webp'
                description='No Ensino Médio da Escola Cristã Genebra, nosso compromisso é duplo: proporcionar uma formação de padrão internacional' />
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>

    </div>
</div>
