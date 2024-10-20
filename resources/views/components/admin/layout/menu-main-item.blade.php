@props(['label','icon'=>null,'route'=>null,'active'=>false,'params' => []])

@php
    $isRoute = request()->routeIs($active) ? 'active':'';

@endphp

<div class="menu-item {{ $isRoute }}">
    <a @if($isRoute == '') href="{{ route($route, $params) }}" @endif class="item-link">
        @if($icon)
            <div class="material-symbols-outlined">{{ $icon }}</div>
        @endif
        <div class="item-label">{{ $label }}</div>
    </a>
</div>
