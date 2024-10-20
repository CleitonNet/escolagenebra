@props(['slides'])

<div x-data="{
    currentSlide: 0, slides: {{ $slides }}, init() { setInterval(() => { this.nextSlide(); }, 7000); // 7 segundos },
    nextSlide() { this.currentSlide = (this.currentSlide + 1) % this.slides.length; },
    prevSlide() { this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length; },
    goToSlide(index) { this.currentSlide = index; }
  }" x-init="init()" class="relative w-full h-screen overflow-hidden">
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="currentSlide === index"
            class="absolute inset-0 w-full h-full transition-opacity duration-500 ease-in-out bg-center bg-cover"
            :class="{ 'opacity-100': currentSlide === index, 'opacity-0': currentSlide !== index }"
            :style="`background-image: url(${slide.image});`">
            <div class="flex items-center h-full p-6 text-white bg-gradient-to-r from-black/90 via-black/25 to-transparent"
                :class="'text-center': slide.alignment === 'center'">
                <div class="w-full px-4 mx-auto max-w-7xl md:px-6 xl:px-8">
                    <div class="max-w-7xl">
                        <h1 class="text-4xl font-light sm:leading-[2rem] md:leading-[3rem] lg:leading-[4rem]"
                            x-text="slide.titleLine1" :style="'font-size: clamp(2rem, 5vw, 4rem);'"></h1>
                        <h1 class="text-4xl font-bold sm:leading-[2rem] md:leading-[3rem] lg:leading-[4rem]"
                            x-text="slide.titleLine2" :style="'font-size: clamp(2rem, 5vw, 4rem);'"></h1>
                        <p class="mt-4 text-xl" x-text="slide.subtitle"></p>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <!-- Controls -->
    <button @click="prevSlide"
        class="absolute left-0 px-4 py-2 text-white transform -translate-y-1/2 bg-black bg-opacity-50 top-1/2"> &#9664;
    </button>
    <button @click="nextSlide"
        class="absolute right-0 px-4 py-2 text-white transform -translate-y-1/2 bg-black bg-opacity-50 top-1/2"> &#9654;
    </button>

    <!-- Thumbnails -->
    <div class="absolute flex space-x-2 transform -translate-x-1/2 bottom-4 left-1/2">
        <template x-for="(slide, index) in slides" :key="index">
            <div
                @mouseover="goToSlide(index)" <!-- Evento mouseover adicionado -->
                class="w-24 h-16 transition-all bg-center bg-cover border-2 border-transparent cursor-pointer hover:border-white"
                :style="`background-image: url(${slide.image});`"
                :class="{'border-white': currentSlide === index}"
            ></div>
        </template>
    </div>
</div>
