jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 50) {
      jQuery('#back-to-top').fadeIn();
    } else {
      jQuery('#back-to-top').fadeOut();
    }
  });
  // scroll body to 0px on click
  jQuery('#back-to-top').click(function () {
    jQuery('body,html').animate({
      scrollTop: 0
    }, 400);
    return false;
  });
  jQuery('.close_arrow').on('click', function () {
    jQuery('#navbarHeader2').collapse('hide');
  });
   jQuery('.campus_text_right button').on('click', function(){
    jQuery('.red_popup').slideUp("slow", function() {

    });

   });
  // setTimeout(function () {
  //   jQuery(".red_popup").slideUp(1000);
  // }, 5000);


  jQuery("#mycarousel").carousel({
    interval: 1000,
    pause: "false"
  });
  jQuery('#playButton').click(function () {
    if (jQuery(this).find('span').hasClass('fa-play')) {
      jQuery(this).find('span').removeClass('fa-play');
      jQuery(this).find('span').addClass('fa-pause');
      jQuery('#myCarousel').carousel('cycle');
    } else {
      jQuery(this).find('span').removeClass('fa-pause');
      jQuery(this).find('span').addClass('fa-play');
      jQuery('#myCarousel').carousel('pause');
    }

  });




});
jQuery(document).keydown(function (event) {
  if (event.keyCode == 27) {
    jQuery('#exampleModal').hide();
  }
});
jQuery(document).keydown(function (event) {
  if (event.keyCode == 27) {
    jQuery('#navbarHeader2').collapse('hide');
  }
});
jQuery(document).keydown(function (event) {
  if (event.keyCode == 27) {
    jQuery('.modal.fade').hide();

  }
});
jQuery(document).ready(function () {
  var owl = $('#owl-carousel3');
  owl.owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    dots: false,

  });
  jQuery('.play').on('click', function () {
    owl.trigger('play.owl.autoplay', [1000])
  })
  jQuery('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
  });
  jQuery('#carouselButtons .play').click(function () {
    if (jQuery(this).find('span').hasClass('fa-play')) {
      jQuery(this).find('span').removeClass('fa-play');
      jQuery(this).find('span').addClass('fa-pause');
      owl.trigger('play.owl.autoplay', [1000]);
    } else {
      jQuery(this).find('span').removeClass('fa-pause');
      jQuery(this).find('span').addClass('fa-play');
      owl.trigger('stop.owl.autoplay');
    }

  });

});
jQuery(document).ready(function () {
  var owl = jQuery('#owl-carousel2');
  owl.owlCarousel({
    items: 1,
    loop: false,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    dots: false,
    callbacks: false,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash',
    merge: true, video: true,
  });
});
jQuery(document).ready(function () {
  var owl = jQuery('#owl-carousel22');
  owl.owlCarousel({
    items: 5,
    loop: false,
    margin: 10,
    autoplay: false,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    dots: false,
    nav: true,
    nav: true,
    merge: true, video: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 3,
      },
      1180: {
        items: 5,
      }
    }
  });
});