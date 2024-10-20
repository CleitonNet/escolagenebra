<div class="flex">
    <!-- Settings Dropdown -->
    <div class="flex items-center gap-1.5 sm:ml-6">

        <a href="https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20para%20conhecer%20a%20escola.%20" target="_blanc" class="items-center hidden px-2 py-2 text-sm font-bold leading-4 text-center text-white transition rounded-lg sm:px-4 xl:px-10 lg:px-8 md:px-6 xs:inline-flex text-xm focus:outline-none bg-gradient-to-r from-azul via-azul/90 to-azul hover:from-azul/90 hover:via-azul hover:to-azul/90">
            {{ __('Agendar') }} {{ __('Visita') }}
        </a>

        <div class="flex gap-1">
            <div class="w-8 h-5 bg-center bg-no-repeat bg-cover rounded bg" style="background-image: url({{ asset('img/brazil.svg') }})"></div>
            <div class="w-8 h-5 bg-center bg-no-repeat bg-cover rounded bg" style="background-image: url({{ asset('img/united_states.svg') }})"></div>
        </div>


        <!-- Hamburger -->
        <div class="flex items-center lg:hidden">
            <button x-on:click="open =! open" class="inline-flex items-center justify-center gap-1 p-2 transition duration-150 ease-in-out rounded-md text-azul hover:text-azul hover:bg-azul/20 focus:outline-none focus:bg-azul/30 focus:text-azul">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span class="hidden sm:inline">Menu</span>
            </button>
        </div>


    </div>
</div>
