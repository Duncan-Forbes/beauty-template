$(document).ready(function(){

  $("#beauty-template-portfolio .slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
  });

  $("#beauty-template-testimonials .slider").slick({
    slidesToShow: 1,
    autoplay: true,
    dots: true,
    arrows: false,
  });

  $('#beauty-template-portfolio .social-button').on('click', function(){
    $('.modal').css("display", "block");
  });

  $('.close').on('click', function(){
    $('.modal').css("display", "none");
  });

});
