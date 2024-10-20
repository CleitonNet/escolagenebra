<div class="pt-20 carousel-container carousel-welcome">
    @if ($slides->count() >= 1)

    <div class="carousel-inner">
        @foreach ($slides as $slide)

            @if (Storage::disk('public')->exists($slide->image))
                <a class="carousel-item content-slide-welcome" @if($slide->btnactionSlide) target="_blank" href="{{ $slide->btnactionSlide }}" @endif>

                    @if ($slide->verticalImage === null || $slide->verticalImage === '')
                    <img src="{{ asset('storage/'.$slide->image) }}" alt="welcome">
                    @else
                    <img src="{{ asset('storage/'.$slide->image) }}" alt="welcome" class="@if($slide->verticalImage) hidden sm:block @endif">
                    <img src="{{ asset('storage/'.$slide->verticalImage) }}" alt="welcome" class="@if($slide->verticalImage) block sm:hidden @endif">
                    @endif

                </a>
            @endif

        @endforeach
    </div>

    @if ($slides->count()>1)
        <div class="carousel-thumbnails">
            @foreach ($slides as $slide)
            <div class="carousel-thumbnail" style="background-image: url({{ 'storage/'.$slide->thumbnail }});" data-slide="{{ $loop->index }}"></div>
            @endforeach
        </div>
        <div class="progress-bar-container"><div class="progress-bar"></div></div>
    @endif

    @endif
</div>
