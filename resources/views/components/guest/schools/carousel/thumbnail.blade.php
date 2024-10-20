@props(['image'=>null,'title'=>null,'index'=>null])
<div class="carousel-thumbnail" style="background-image: url({{ 'storage/'.$image }});" data-slide="{{ $index }}"></div>
