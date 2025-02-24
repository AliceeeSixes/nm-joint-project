

// Slick carousels

$("#products-slider").slick({
    // Arrows
    arrows: true,
    prevArrow: "#products-arrow-prev",
    nextArrow: "#products-arrow-next",
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    slidesToShow: 3
});

$("#quote-carousel").slick({
    arrows: false,
    dots: true,
    infinite: true,
    slidesToShow: 1,
    appendDots: "#quote-carousel-dots",
});