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

  var modelVideo = function () {
    $(".js-controle-gastos").on("click", function () {
      $("body").append(
        ' <div class="modal-video">' +
          '<div class="modal-video__content">' +
          '<button type="button" class="close js-close" data-dismiss="modal" aria-label="Close">' +
          '<span aria-hidden="true">&times;</span>' +
          "</button>" +
          '<iframe width="100%" height="500"' +
          'src="https://www.youtube.com/embed/4oeVCWTyUpY?controls=0&amp;start=7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>'
      );
    });
    $("body").on("click", ".js-close", function () {
      $(".modal-video").remove();
    });
  };

  (function () {
    slick();
    modelVideo();
  })();
});
