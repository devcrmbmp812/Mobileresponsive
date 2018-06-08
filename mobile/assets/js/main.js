$(document).ready(function() {

  // Navigation bar scroll class
  $(window).scroll(function() {
    $('.navbar-top').toggleClass("scrolled", ($(window).scrollTop() > 0));
  });

  // Turn balance input to autonumeric
  $('#inputNumeric').autoNumeric('init', {minimumValue: '0', maximumValue: '999999999'});

  // Change input value onclick amount buttons
  $('.amount-buttons .btn').click(function() {
    var x = $(this).data('id');
    $('#inputNumeric').autoNumeric('set', x);
  });

  $("#datepicker").datepicker().datepicker("setDate", new Date());

  // Homepage Carousel
  $('.sport-carousel').owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    items: 5
  });

  $('.casino-carousel').owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    items: 3
  });

  $('.minigame-carousel').owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    items: 3
  });


  // // will remove this
  // $('.option-select').selectpicker({
  //   style: 'btn-option'
  // });

  // $('.bankNameSelect').selectpicker({
  //   style: 'btn-dark'
  // });

  // $('.casino-select').selectpicker({
  //   style: 'btn'
  // });


  // when opening the sidebar
  $('#mainMenuCollapse').on('click', function() {
    // open sidebar
    $('#mainMenu').addClass('active');

    // fade in the overlay
    $('.overlay').fadeIn();
  });


  // if dismiss or overlay was clicked
  $('#dismiss, .overlay').on('click', function() {
    // hide the sidebar
    $('#mainMenu').removeClass('active');

    // fade out the overlay
    $('.overlay').fadeOut();
  });


  // when opening the sidebar
  $('#balanceMenuCollapse').on('click', function() {
    // open sidebar
    $('#balanceMenu').toggleClass('active shadow');

    $('.page-content').toggleClass('balance-overlay');
    // body overflow hidden
    $("body").toggleClass("hidden");
  });

});
