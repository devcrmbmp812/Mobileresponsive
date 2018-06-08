$(document).ready(function() {
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    autoplay: true,
    centerMode: true,
    infinite: false,
    autoplaySpeed: 8000,
    dots: false,
    centerPadding: 0,
    asNavFor: '.slider-nav'
  });

  $('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    infinite: true,
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    draggable: true,
    centerPadding: 0
  });

  $('.slider-for-casino').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    autoplay: true,
    centerMode: true,
    infinite: false,
    autoplaySpeed: 8000,
    dots: false,
    centerPadding: 0,
    asNavFor: '.slider-nav-casino'
  });

  $('.slider-nav-casino').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for-casino',
    infinite: true,
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    draggable: true,
    centerPadding: 0
  });

  $('.match-carousel-cover').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true
  });
});

// toggle for sports betting
$(document).ready(function() {
  $(".slide-toggle").click(function() {
    $(this).removeClass('active');
    $(this).parent().parent().parent().find('.sport-tabs-content').slideToggle("fast");
  });
  $(".slide-toggle.fa-minus").click(function() {
    $(this).removeClass('active');
    $(this).parent().find('.fa-chevron-down').addClass('active');
  });
  $(".slide-toggle.fa-chevron-down").click(function() {
    $(this).removeClass('active');
    $(this).parent().find('.fa-minus').addClass('active');
  });
});

// coupon fixed position
$(document).ready(function() {
  var sidebar_checkbox = ('#couponCheckbox');
  $(sidebar_checkbox).change(function() {
    $('.sidebar-betting-cover .betting-coupon').toggleClass('alternative');
  });
});

$(window).scroll(function(){
    if($(this).scrollTop() > 300) {
        $('.sidebar-betting-cover .betting-coupon').addClass('fixed');
        $('.sidebar-betting-cover .betting-coupon').removeClass('relative');
    }
    else {
      $('.sidebar-betting-cover .betting-coupon').addClass('relative');
      $('.sidebar-betting-cover .betting-coupon').removeClass('fixed');
    }
});

// custom scrollbar
(function($) {
  $(window).on("load", function() {
    $(".mCustomScrollbar").mCustomScrollbar({
      theme: "light-1",
    });
  });
})(jQuery);

// Turn balance input to autonumeric
$('#depositInput, #withdrawInput, #balanceTransferInput, #couponInput, #casinoSidebarInput, #casinoSidebarInput2').autoNumeric('init', {
  minimumValue: '0',
  maximumValue: '999999999'
});

// Change input value onclick amount buttons
$('#depositButtons .btn').click(function() {
  var x = $(this).data('id');
  $('#depositInput').autoNumeric('set', x);
});

// Change input value onclick amount buttons
$('#withdrawButtons .btn').click(function() {
  var x = $(this).data('id');
  $('#withdrawInput').autoNumeric('set', x);
});

// Change input value onclick amount buttons
$('#balanceTransferButtons .btn').click(function() {
  var x = $(this).data('id');
  $('#balanceTransferInput').autoNumeric('set', x);
});

// Change input value onclick amount buttons
$('#couponInputButtons .btn').click(function() {
  var x = $(this).data('id');
  $('#couponInput').autoNumeric('set', x);
});
