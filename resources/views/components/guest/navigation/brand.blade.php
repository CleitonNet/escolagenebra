<div class="flex items-center gap-1.5 md:gap-2">
    <!-- Logo -->
    <a href="{{ route('guest.welcome') }}" class="flex items-center sm:gap-0.5" aria-label="Escola Cristã Genebra">
        <x-guest.application-logo class="sm:h-[80px] h-[55px] sm:mt-9 mt-8 z-[999]" style="filter: drop-shadow(0 4px 0px #fff)" />
        <x-guest.application-logo-text class="sm:h-[40px] h-6 mt-4 text-azul" />
    </a>
    <div class="w-px rounded bg-slate-400/40 md:h-2/3 h-2/5"></div>
    <a href="https://ib.escolagenebra.com.br" target="_blank" class="flex items-center xs:gap-0.5 sm:gap-1 pt-2" title="International Baccalaurate (IB)" aria-label="International Baccalaurate (IB)">
        <img src="{{ asset('img/brands/ib-candidate.webp') }}" alt="International Baccalaureate Organization"
            class="object-cover md:max-h-11 max-h-7">
        {{-- <img src="{{ asset('img/international-baccalaureate.webp') }}" alt="International Baccalaureate Organization"
            class="object-cover md:max-h-11 max-h-7"> --}}
        {{-- <div class="flex flex-col items-start justify-center text-[10px] text-sky-700/80 sm:text-xs">
            <div>Cadidate</div>
            <div>School</div>
        </div> --}}
    </a>
</div>
