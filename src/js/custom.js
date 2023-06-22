$('li.dropdown').on('click',function(){
    $(this).children('ul.dropdown-menu').slideToggle('fast')
})

$(".testimonialWrapper .owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
        0: {
        items: 1,
        },
        600: {
        items: 3,
        },
        1000: {
        items: 3,
        },
    },
});


function handlePreloader() {
    if($('.preloader').length){
        $('.preloader').delay(900).fadeOut(500);
    }
}

$(window).on('load', function() {
    handlePreloader();
    sortableMasonry();
});	