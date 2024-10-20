@props(['label','icon'=>null,'route'=>null,'active'=>'','params' => []])

@php
    $isRoute = request()->routeIs($active) ? 'active':'';
@endphp

<a @if($isRoute == '') href="{{ route($route, $params) }}" @endif class="{{ $isRoute }}">
    <div class="material-symbols-outlined">{{ $icon }}</div>
    <div class="item-label">{{ $label }}</div>
</a>
