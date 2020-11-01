window.addEventListener("DOMContentLoaded", () => {
  $('.assortSlider').slick({
    autoplay: true,
    fade: true,
    speed: 500,
    prevArrow: '<div class="assortArrow assortArrowPrev"><i class="fas fa-chevron-circle-left"></i></div>',
    nextArrow: '<div class="assortArrow assortArrowNext"><i class="fas fa-chevron-circle-right"></i></div>',
  });
  $('a[href^="#"]').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top}, 800);
    return false;
  });
  $('button[href^="#"]').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top}, 800);
    return false;
    });
});