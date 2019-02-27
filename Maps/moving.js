var buttonNext = document.getElementById("btnNext"),
    buttonPrev = document.getElementById("btnPrev"),
    slides = document.querySelectorAll('#slides .slide'),
    currentSlide = 0;

buttonPrev.addEventListener("click", function(){
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide - 1) % slides.length;
    if (currentSlide < 0){
        currentSlide = slides.length - 1;
    }
    slides[currentSlide].className = 'slide showing';
});

buttonNext.addEventListener("click", function(){
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'slide showing';
});

