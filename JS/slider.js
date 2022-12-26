'use strict';
jQuery(document).ready(function () {
  jQuery('.content-slider').each(function(i, e){
    var id = 'adaptive';
    jQuery(e).attr('id', id+i);
    var selector = '#'+id+i;
    var slider = jQuery(selector).lightSlider({
      item:4,
      slideMove: 1,
      slideMargin: 15,
      loop: true,
      keyPress: true,
      pager:false,
      gallery: false,
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