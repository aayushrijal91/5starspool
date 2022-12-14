// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(() => {
    $('.service-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: "60px",
        autoplay: true,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: "linear",
        infinite: true,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1540,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                    centerPadding: "10px",
                    dots: false,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                }
            }]
    });
});

$("#exampleModalCenter").click(function () {
    $('#video').each(function (index) {
        $(this).attr('src', $(this).attr('src'));
        return false;
    });
});