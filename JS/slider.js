$('.content-slider').each(function(i, e){
    var id = 'adaptive';
    $(e).attr('id', id+i);
    var selector = '#'+id+i;
    var slider = $(selector).lightSlider({
      item:4,
      slideMove: 1,
      slideMargin: 15,
      loop: true,
      keyPress: true,
      pager:false,
      gallery: false,
     });
});
  /*-- Page Scroll To Top Section ---------------*/
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