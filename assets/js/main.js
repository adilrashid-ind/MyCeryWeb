$(document).ready(function () {
  $("#owl-demo").owlCarousel({
    navigation: true, // Show next and prev buttons

    slideSpeed: 300,
    paginationSpeed: 400,

    items: 1,

    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
  });

});
