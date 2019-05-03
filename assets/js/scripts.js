$(window).scroll(function () {
          if ($(document).scrollTop() > 60) {
                    $('nav').addClass('shrink');
          } else {
                    $('nav').removeClass('shrink');
          }
});