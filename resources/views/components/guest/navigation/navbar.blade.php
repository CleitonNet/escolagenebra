<nav x-data="{ open: false }" class="border-b backdrop-blur border-gray-100 fixed transition top-0 left-0 right-0 z-[9999] bg-white" style="box-shadow: 0 1px 15px 0 rgba(0,0,0,.3)">
    <div class="mx-auto px-2 md:px-4 max-w-7xl">
        <!-- Primary Navigation Menu -->
        <div class="flex justify-between h-16 md:h-20 gap-1">
            <a href="{{ route('admin.dashboard') }}" class="absolute h-9 w-9 p-1 bg-slate-600 right-0 top-0 rounded-bl-3xl opacity-10 hover:opacity-100 hover:rounded-bl-none transition-all duration-200">
                <img src="{{ asset('img/settings_applications.webp') }}" alt="Settings Applications" class="object-cover h-full w-full">
            </a>

            <!-- Navigation Logotipos -->
            <x-guest.navigation.brand />

            <!-- Navigation Links -->
            <x-guest.navigation.monitor />

            <!-- Navigation controles -->
            <x-guest.navigation.controls />

        </div>

        <!-- Responsive Navigation Menu -->
        <x-guest.navigation.responsive />

    </div>
</nav>
