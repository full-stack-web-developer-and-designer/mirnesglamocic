'use strict';
jQuery(document).ready(function() {
  jQuery('.content-slider').each(function(i, e){
    var id = 'adaptive';
    jQuery(e).attr('id', id+i);
    var selector = '#'+id+i;
    var slider = jQuery(selector).lightSlider({
      item:4,
      slideMove: 1,
      slideMargin: 15,
      keyPress: true,
      pager: false,
      gallery: true,
      responsive: [          {
        breakpoint:1260,
        settings: {
            item:4,
            slideMove:1,
            slideMargin:12,
          }
    },			        {
        breakpoint:1118,
        settings: {
            item:3,
            slideMove:1,
            slideMargin:10,
          }
    },	{
        breakpoint:1006,
        settings: {
            item:2,
            slideMove:1,
            slideMargin:15,
          }
    },        {
        breakpoint:700,
        settings: {
            item:2,
            slideMove:1,
            slideMargin:10,
          }
    },			  {
        breakpoint:520,
        settings: {
            item:1,
            slideMove:1,
            slideMargin:0,
          }
    }],
     });
});
});
  /*-- Page Scroll To Top Section ---------------*/
  'use strict';
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scroll-top').fadeIn();
    } else {
      jQuery('.scroll-top').fadeOut();
    }
  });
  
  jQuery('.scroll-top').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });
});