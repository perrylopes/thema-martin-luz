$(document).ready(function () {
  var slick = function () {
    if ($(window).width() <= 768) {
      $(".js-reduzir-gastos__itens").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    }
  };

  (function () {
    slick();
  })();
});
