@props(['image'=>null,'title'=>null,'segments'=>null,'phone'=>null,'address'=>null,'urlScheduleVisite'=>null,'urlHowToGetThere'=>null])
<div class="carousel-item content-slide-schools">
    <div class="school-image" style="background-image: url({{ 'storage/'.$image }})"></div>
    <div class="school-data">
        <div class="content-text">
            <div class="school-title">{{ $title }}</div>
            <div class="school-text"><img src="{{ asset('img/graduate-cap.svg') }}" alt="graduate-cap" class=" h-7 md:h-8">
                @foreach ($segments as $index => $segment)
                    {{ $segment->name }}

                    @if ($index == count($segments) - 2) <!-- Se for o penúltimo item -->
                        e
                    @elseif ($index < count($segments) - 2) <!-- Se não for o último ou penúltimo -->
                        ,
                    @endif
                @endforeach

            </div>
            <div class="school-text"><img src="{{ asset('img/phone.svg') }}" alt="graduate-cap" class=" h-7 md:h-8">{{ $phone }}</div>
            <div class="school-text"><img src="{{ asset('img/map-point.svg') }}" alt="graduate-cap" class=" h-7 md:h-8">{{ $address }}</div>
        </div>
        <div class="school-btns">
            <a href="{{ $urlScheduleVisite }}" class="school-btn school-btn1">Agenar uma visita</a>
            <a href="{{ $urlHowToGetThere }}" class="school-btn school-btn2">Como chegar</a>
        </div>
    </div>
</div>
