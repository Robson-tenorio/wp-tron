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