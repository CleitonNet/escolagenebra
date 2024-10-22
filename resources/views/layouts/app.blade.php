<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author"   content="Cleiton dos Santos">
	<meta name="description" content="Uma plataforma de dashboard para gerenciamento de ministérios e treinamentos.">
	<meta name="keywords" content="dashboard, ministérios, treinamentos, evangelismo, financeiro">

	<meta property="og:type" content="website" /> <!-- TIPO DE ARQUIVO -->
    <meta property="og:url" content="https://www.dominio.com.br/" /> <!-- ENDEREÇO DO SITE -->
    <meta property="og:title" content="Título do Site" /> <!-- TITULO DO ARQUIVO -->
    <meta property="og:image" content="https://www.dominio.com.br/img/logo.png" /><!-- IMAGEM DE REFERENCIA DO SITE -->
    <meta property="og:description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit." /> <!-- DESCRIÇÃO DO SITE -->

	<link rel="shortcut icon" href="{{ asset('img/favicon.webp') }}" type="image/x-icon">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app-C6h5LArl.css') }}">
    {{-- @vite(['resources/css/admin/app.css', 'resources/js/admin/app.js']) --}}

	<title>{{ $title ?? '' }} :: Escola Cristã Genebra</title>

    @livewireStyles
</head>

<body>

    <x-admin.layout.navigation />

    @if (!empty(trim($__env->yieldPushContent('aside-left'))))
        <x-admin.layout.aside-left>@stack('aside-left')</x-admin.layout.aside-left>
    @endif


	<main>
		<div id="title-page">
            @if (!empty(trim($__env->yieldPushContent('aside-left'))))
                <button type="button" title="Abrir menu Lateral" aria-label="Abrir menu Lateral" id="openMenu">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            @endif

			<h1>{{ $title ?? '' }}</h1>
		</div>

        {{ $slot }}
	</main>

    @if (!empty(trim($__env->yieldPushContent('aside-right'))))
        <x-admin.layout.aside-right>@stack('aside-right')</x-admin.layout.aside-right>
    @endif


	<footer>
        <div class="flex justify-between opacity-75 transition-all duration-200 hover:opacity-100 w-full text-sm">
            <div>© {{ date('Y') }} :: Escola Cristã Genebra</div>
            <div>{{ Str::ucfirst(getModule()) }}</div>
        </div>
	</footer>

	<script type="module" src="{{ asset('build/assets/app-CgxOnVNB.js') }}"></script>
    @livewireScripts
</body>
