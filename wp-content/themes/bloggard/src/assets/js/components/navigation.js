$(document).ready(function() {
  $("#navbar__top__toggle-menu").change(function() {
    if ($(window).width() < 800) {
      $(".navbar__nav-content").slideToggle();
    }
  });

  $(window).resize(function() {
    if ($(window).width() >= 800) {
      $(".navbar__nav-content").css('display', 'flex');
    } else {
      if ($('#navbar__top__toggle-menu').is(':checked')) {
        $(".navbar__nav-content").css('display', 'block');
      } else {
        $(".navbar__nav-content").css('display', 'none');
      }
    }
  });
});


$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $(".navbar").addClass("scrolled");
    } else {
      $(".navbar").removeClass("scrolled");
    }
  });
});
