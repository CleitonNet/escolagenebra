<div :class="{'block': open, 'hidden': ! open}" class="hidden xl:hidden">
    <div class="pt-10 pb-3 space-y-1">
        <x-guest.responsive-nav-link class="bg-indigo-200/20" :href="route('guest.about')"      :active="request()->routeIs('about')"      >{{ __('Sobre nós') }}      </x-guest.responsive-nav-link>
        <div class="py-1 space-y-1">
            <x-guest.responsive-nav-link class="bg-indigo-100/50" :href="route('guest.segments.garderie')" :active="request()->routeIs('garderie')" >{{ __('Garderie/ Ed. Infantil') }} </x-guest.responsive-nav-link>
            <x-guest.responsive-nav-link class="bg-indigo-100/50" :href="route('guest.segments.fundamentalI')" :active="request()->routeIs('fundamentalI')" >{{ __('Ens. Fundamental I') }} </x-guest.responsive-nav-link>
            <x-guest.responsive-nav-link class="bg-indigo-100/50" :href="route('guest.segments.fundamentalII')" :active="request()->routeIs('fundamentalII')" >{{ __('Ens. Fundamental II') }} </x-guest.responsive-nav-link>
            <x-guest.responsive-nav-link class="bg-indigo-100/50" :href="route('guest.segments.high-school')" :active="request()->routeIs('high-school')" >{{ __('Ens. Médio') }} </x-guest.responsive-nav-link>
        </div>
        <x-guest.responsive-nav-link class="bg-indigo-200/20" :href="'https://galeriagenebra.myportfolio.com/work'" target="_blank" :active="request()->routeIs('gallery')"     >{{ __('Galeria') }}     </x-guest.responsive-nav-link>
        <x-guest.responsive-nav-link class="bg-indigo-200/20" :href="route('guest.enrollment')"      :active="request()->routeIs('guest.enrollment')"      >{{ __('Matrícula') }}      </x-guest.responsive-nav-link>
    </div>
</div>
