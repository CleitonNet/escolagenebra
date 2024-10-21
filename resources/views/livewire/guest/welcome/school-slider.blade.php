<x-guest.container class="w-full my-20">

    <div class="carousel-container carousel-schools">

        <div class="carousel-inner">
            @foreach ($schools as $school)
            <x-guest.schools.carousel.slide :image="$school->image" :title="$school->title" :segments="$school->segments" :phone="$school->phone" :address="$school->address" :urlScheduleVisite="$school->titurlScheduleVisitele" :urlHowToGetThere="$school->urlHowToGetThere" />
            @endforeach
        </div>

        <div class="carousel-thumbnails">
            @foreach ($schools as $school)
            <x-guest.schools.carousel.thumbnail :image="$school->image" :index="$loop->index" />
            @endforeach
        </div>

    </div>

</x-guest.container>
