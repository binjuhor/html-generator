(function ($){
    'use strict';
    $(document).ready(function ($) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 20) {
                $('header').addClass("sticky");
            } else {
                $('header').removeClass("sticky");
            }
        })

        $('.hamburger').click(function(e) {
            e.preventDefault()
            $(this).toggleClass('active')
            $('.header__navigation > nav').slideToggle()
        })
    });

    const sliderElement = $('#tsuchimoto-slider');
    const windowWidth = window.innerWidth || document.documentElement.clientWidth || 0;
    const sliderImages = sliderElement.data('sliders');

    //Vegas全体の設定
    sliderElement.vegas({
        overlay: true,
        transition: 'fade2',
        transitionDuration: 2000,
        delay: 5000,
        animationDuration: 20000,
        animation: 'random',
        slides: (windowWidth > 768) ? sliderImages.pc : sliderImages.sp,
    });

    $('.slider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 6900,
        infinite: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        cssEase: 'linear',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 426,
                settings: {
                    slidesToShow: 1.5,
                }
            }
        ]
    });

    $('.slider-manual').slick({
        arrows: false,
        autoplay: true,
        infinite: true,
        slidesToScroll: 4,
        slidesToShow: 4,
        centerMode: true,
    });

})(jQuery)
