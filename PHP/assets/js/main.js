jQuery(function($) {
  // Banner Home
  $('.banner-home').slick({
    dots: true,
    infinite: true,
    speed: 500,
    cssEase: 'linear'

  });

  $('.partners-slick>.row').slick({
    dots: true,
    infinite: true,
    speed: 500,
    cssEase: 'linear',
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  $("#totop").click(function() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  });
});

