// header
const btOpenMenu = document.getElementById('btOpenMenu');
const btCloseMenu = document.getElementById('btCloseMenu');
const pelicula = document.querySelector('.pelicula');
const mobileMenu = document.querySelector('.mobile-menu');

function openMenu() {
    pelicula.classList.add('active');
    mobileMenu.style.transitionDelay = '200ms';
    pelicula.style.transitionDelay = '0ms'
}

function closeMenu() {
    pelicula.classList.remove('active');
    mobileMenu.style.transitionDelay = '0ms';
    pelicula.style.transitionDelay = '200ms'
}

btOpenMenu.addEventListener('click', openMenu);
btCloseMenu.addEventListener('click', closeMenu);

// carrossel destaque
$(document).ready(function() {

    $(".carrossel-destaque").owlCarousel({
        items: 1,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: false,
        loop: true,
        dots: true
    });

});

// carrossel produtos destaques e lançamentos
$(document).ready(function() {

    $(".carrossel-produtos").owlCarousel({
        items: 1,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: false,
        loop: true,
        dots: true,
        responsive: {
            400: {
                items: 2
            },
            600: {
                items: 3
            },
            980: {
                items: 4
            }
        }
    });

});









const slides = document.querySelectorAll('.slide');
const thumbnails = document.querySelectorAll('.thumbnail');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentSlide = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.style.transform = `translateX(-${index * 100}%)`;
    thumbnails[i].classList.remove('active');
  });
  thumbnails[index].classList.add('active');
  currentSlide = index;
}

thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener('click', () => {
    showSlide(index);
  });
});

prevButton.addEventListener('click', () => {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  showSlide(currentSlide);
});

nextButton.addEventListener('click', () => {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
});

showSlide(currentSlide);