document.addEventListener('DOMContentLoaded', function() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach(slide => slide.style.opacity = '0');
        slides[index].style.opacity = '1';
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    // Mostrar primeiro slide
    showSlide(currentSlide);

    // Mudar slide a cada 5 segundos
    setInterval(nextSlide, 5000);
});
