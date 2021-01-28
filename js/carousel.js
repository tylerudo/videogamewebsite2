const track = document.querySelector('.carousel__track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel__button--right');
const prevButton = document.querySelector('.carousel__button--left');
const dotsNav = document.querySelector ('.carousel__nav');
const dots = Array.from(dotsNav.children);
 
const slideWidth = slides[0].getBoundingClientRect().width;
// console.log(slideWidth);

// arrange the slides next to one another
const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';
};
slides.forEach(setSlidePosition);

// when i click left, move slides to the left


// when i click right, move slides to the right
nextButton.addEventListener('click', e => {
const currentSlide = track.querySelector('.current-slide');
const nextSlide = currentSlide.nextElementSibling;
const amountToMove = nextSlide.style.left;
    // move to the next slide
track.style.transform = 'translateX(-' + amountToMove + ')';   
currentSlide.classList.remove('.current-slide');
})


// when i click the nav idicators, move to that slide

