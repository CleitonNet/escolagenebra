<header>
    <a href="{{ route('admin.dashboard') }}" id="brand" class="gap-1.5">
        <x-guest.application-logo class="sm:h-16 h-12 sm:mt-2 z-[999]" style="filter: drop-shadow(0 2px 0px #fff)" />
        <x-guest.application-logo-text class="sm:h-10 h-8 mt-1 text-white/75" />
    </a>

    <nav id="menu-main">
    <x-admin.layout.menu-main-item route='admin.dashboard'        active="admin.dashboard"   icon='home'                label='Home' />
    <x-admin.layout.menu-main-item route='admin.web.slide.index'  active="admin.web.slide.*" icon='auto_awesome_motion' label='Slides' />
    <x-admin.layout.menu-main-item route='admin.web.school.index' active="admin.web.school.*" icon='account_balance'     label='Escolas' />
    <x-admin.layout.menu-main-item route='admin.web.quiz.index'   active="admin.web.quiz.*" icon='quiz'                label='Quizzes' />
    </nav>

    <div id="ctrls-right">
        <button type="button" id="btnProfile"	 title="Menu do Perfil" 	   aria-label="Menu do Perfil" 		style="background-image: url({{ asset('storage/'.auth()->user()->thumbnail) }});"></button>
        <button type="button" id="openMenuMain"	 title="Abrir menu principal"  aria-label="Abrir menu principal"><span class="material-symbols-outlined">menu</span></button>
        <button type="button" id="closeMenuMain" title="Fechar menu principal" aria-label="Fechar menu principal"><span class="material-symbols-outlined">close</span></button>
    </div>

    <nav id="menu-main-responsive">
        <div>{{ Str::ucfirst(getModule()) }}</div>
        <x-admin.layout.menu-responsive-item route='admin.dashboard'        active="admin.dashboard" icon='home'                 label='Home' />
        <x-admin.layout.menu-responsive-item route='admin.web.slide.index'  active="admin.web.slide.*" icon='auto_awesome_motion'  label='Slides' />
        <x-admin.layout.menu-responsive-item route='admin.web.school.index' active="admin.web.school.*" icon='account_balance'      label='Escolas' />
        <x-admin.layout.menu-responsive-item route='admin.web.quiz.index'   active="admin.web.quiz.*" icon='quiz'                 label='Quizzes' />
    </nav>

    <div id="menu-profile">
        <div id="btnCloseProfile"><span class="material-symbols-outlined">close</span></div>

        <div>
            <a href="{{ route('admin.profile') }}" style="background-image: url({{ asset('storage/'.auth()->user()->photo) }});"></a>
            <a href="{{ route('admin.profile') }}">{{ getFirstAndLastName(auth()->user()->name) }}</a>
            <a href="{{ route('admin.profile') }}">{{ auth()->user()->email }}</a>
            <a href="{{ route('admin.profile') }}">Editar Perfil</a>
        </div>

        <nav>
            <x-admin.layout.menu-responsive-item route='admin.dashboard' active="admin.*" icon='globe'     label='Web' />
        </nav>

        <div id="ProfileBottom">
            <x-admin.layout.menu-responsive-item route='admin.setup' icon='manufacturing' label='Setup' />
            @livewire('auth.logout')
        </div>
    </div>

</header>
