$(document).ready('.content-slider').each(function(i, e){
    var id = 'adaptive';
    $(e).attr('id', id+i);
    var selector = '#'+id+i;
    var slider = $(selector).lightSlider({
      item:4,
      slideMove: 1,
      slideMargin: 15,
      speed: 1000, //ms'
      auto: true,
      pauseOnHover: true,
      pause: 5000,
      keyPress: true,
      controls: false,
      pager:false
     });
});