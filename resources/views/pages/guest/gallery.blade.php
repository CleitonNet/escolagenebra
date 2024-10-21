<x-guest-layout>
    <x-slot name="page">Galeria de Fotos</x-slot>

    <style>
        .items {
            display: flex;
        }
    </style>
    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="items">
            <a class="item">
                <img src="{{ asset('galery/genebra1.webp') }}" />
            </a>
            <a class="item">
                <img src="{{ asset('galery/genebra2.webp') }}" />
            </a>
            <a class="item">
                <img src="{{ asset('galery/genebra3.webp') }}" />
            </a>
            <a class="item">
                <img src="{{ asset('galery/genebra4.webp') }}" />
            </a>
        </div>
        <!-- list thumnail -->
        {{-- <div class="thumbnail">
            <a class="item" href="#1">
                <img src="{{ asset('galery/genebra1.webp') }}" />
            </a>
            <a class="item" href="#2">
                <img src="{{ asset('galery/genebra2.webp') }}" />
            </a>
            <a class="item" href="#3">
                <img src="{{ asset('galery/genebra3.webp') }}" />
            </a>
            <a class="item" href="#4">
                <img src="{{ asset('galery/genebra4.webp') }}" />
            </a>
        </div> --}}
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
</x-guest-layout>

