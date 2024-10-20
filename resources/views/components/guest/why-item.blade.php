@props(['link','text','image','target'=>false])
<a @if($target) target="_blank" @endif {{ $attributes->merge(['class' => 'rounded-lg group bg-center bg-cover block' ]) }} href="{{ $link }}" style="background-image: url('{{ $image }}')">
    <div class="flex items-center justify-center p-2 px-10 mt-0 overflow-hidden text-2xl font-extrabold leading-6 text-center text-white transition rounded-lg h-96 lg:hover:bg-azul/70 bg-azul/70 lg:bg-transparent bg-gradient-to-t from-preto/75 via-preto/50 to-transparent group-hover:backdrop-blur-sm">{{ $text }}</div>
</a>
