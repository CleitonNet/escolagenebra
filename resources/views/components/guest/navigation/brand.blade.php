<div class="flex items-center">
    <!-- Logo -->
    <a href="{{ route('guest.welcome') }}" class="flex items-center sm:gap-0.5" aria-label="Escola Cristã Genebra">
        <x-guest.application-logo class="sm:h-[80px] h-[55px] sm:mt-6 mt-4 z-[999]"
            style="filter: drop-shadow(0 4px 0px #fff)" />
    </a>
    <div class="flex gap-2 pt-2">
        <a href="{{ route('guest.welcome') }}" class="flex items-center" aria-label="Escola Cristã Genebra">
            <x-guest.application-logo-text class="sm:h-[40px] h-6 text-azul" />
        </a>

        <div class="rounded-tl-xl rounded-b-lg bg-[#1c539c] block inset-y-0 min-w-px w-[0.3vw] max-w-1"></div>

        <a href="https://ib.escolagenebra.com.br/" aria-label="International Baccalaureate" target="_blanc" class="text-[9px] xs:text-[10px] font-light">
            <div class="opacity-80 text-nowrap leading-[10px] xs:leading-3 sm:leading-[14px]">Cadidate School for</div>
            <div class="opacity-80 text-nowrap leading-[10px] xs:leading-3 sm:leading-[14px]">Diploma Programme<sup>*</sup> from</div>
            <div class="opacity-80 text-nowrap leading-[10px] xs:leading-3 sm:leading-[14px]">International Baccalaureate</div>
        </a>
    </div>
</div>
