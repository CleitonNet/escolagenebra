export class Carousel {
    constructor(carouselSelector, progressBar = null, time = 5000) {
        this.carouselContainer  = document.querySelector(carouselSelector);
        if (!this.carouselContainer) return;

        this.slides             = this.carouselContainer.querySelectorAll('.carousel-item');
        this.thumbnails         = this.carouselContainer.querySelectorAll('.carousel-thumbnail');
        this.progressBar        = this.carouselContainer.querySelector(progressBar);
        this.slideIndex         = 0;
        this.totalSlides        = this.slides.length;
        this.carouselInterval   = null;
        this.time               = time;

        // Variáveis para toque
        this.touchStartX        = 0;
        this.touchEndX          = 0;

        if (this.totalSlides > 0) { this.init(); }
    }

    init() {
        this.addEventListeners();
        this.startCarousel();
        this.resetProgressBar();
    }

    addEventListeners() {
        this.carouselContainer.addEventListener('mouseenter', () => this.pauseCarousel());
        this.carouselContainer.addEventListener('mouseleave', () => this.startCarousel());

        this.thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => this.goToSlide(index));
        });

        // Adicionando eventos de toque
        this.carouselContainer.addEventListener('touchstart', (e) => this.handleTouchStart(e));
        this.carouselContainer.addEventListener('touchmove', (e) => this.handleTouchMove(e));
        this.carouselContainer.addEventListener('touchend', () => this.handleTouchEnd());
    }

    handleTouchStart(e) {
        this.touchStartX = e.touches[0].clientX;
    }

    handleTouchMove(e) {
        this.touchEndX = e.touches[0].clientX;
    }

    handleTouchEnd() {
        const touchDifference = this.touchStartX - this.touchEndX;

        // Verifica se o usuário deslizou mais de 50px
        if (touchDifference > 50) {
            // Desliza para o próximo slide
            this.moveSlide();
        } else if (touchDifference < -50) {
            // Desliza para o slide anterior
            this.slideIndex = (this.slideIndex - 2 + this.totalSlides) % this.totalSlides;
            this.moveSlide();
        }

        this.pauseCarousel();
    }

    updateActiveThumbnail() {
        this.thumbnails.forEach((thumbnail, index) => {
            thumbnail.classList.toggle('active', index === this.slideIndex);
        });
    }

    resetProgressBar() {
        if (!this.progressBar) return;
        this.progressBar.style.animation = 'none';
        setTimeout(() => { this.progressBar.style.animation = `progress ${this.time / 1000}s linear`; }, 10);
    }

    moveSlide() {
        this.slides.forEach((slide) => { slide.style.transform = `translateX(-${this.slideIndex * 100}%)`; });

        this.updateActiveThumbnail();
        this.slideIndex = (this.slideIndex + 1) % this.totalSlides;
        this.resetProgressBar();
    }

    goToSlide(index) {
        this.slideIndex = index;
        this.moveSlide();
        this.pauseCarousel();
    }

    startCarousel() {
        this.clearInterval();
        this.carouselInterval = setInterval(() => {
            this.moveSlide();
        }, this.time);
        this.resetProgressBar();
    }

    pauseCarousel() {
        clearInterval(this.carouselInterval);
        if (this.progressBar) { this.progressBar.style.animation = 'none'; }
    }

    clearInterval() {
        if (this.carouselInterval) { clearInterval(this.carouselInterval); }
    }
}
