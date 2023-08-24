$(document).ready(function () {
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll > 717 && scroll < 1615) {
      $("nav").removeClass("primary-bg");
      $(".nav-link").addClass("dark-text");
      $(".nav-link").removeClass("light-text");
      $("a.navbar-brand").addClass("dark-text");
      $("a.navbar-brand").removeClass("light-text");
      $("button.sign-up").addClass("dark-text");
      $("button.sign-up").removeClass("light-text");
      $("button.sign-up").addClass("dark-border");
      $("button.sign-up").mouseenter(function () {
        $(this).addClass("sign-up-dark");
        $(this).removeClass("sign-up-light");
      });
      $("button.sign-up").mouseleave(function () {
        $(this).removeClass("sign-up-dark");
      });
    } else {
      $("nav").addClass("primary-bg");
      $(".nav-link").addClass("light-text");
      $(".nav-link").removeClass("dark-text");
      $("a.navbar-brand").addClass("light-text");
      $("a.navbar-brand").removeClass("dark-text");
      $("button.sign-up").addClass("light-text");
      $("button.sign-up").removeClass("dark-text");
      $("button.sign-up").removeClass("dark-border");
      $("button.sign-up").mouseenter(function () {
        $(this).addClass("sign-up-light");
        $(this).removeClass("sign-up-dark");
      });
      $("button.sign-up").mouseleave(function () {
        $(this).removeClass("sign-up-light");
      });
    }

    if (scroll > 135 && scroll < 860) {
      $(".back-to-top").addClass("dark-text");
      $(".back-to-top").removeClass("light-text");
      $(".back-to-top").mouseenter(function () {
        $(this).addClass("sign-up-dark");
        $(this).removeClass("sign-up-light");
      });
      $(".back-to-top").mouseleave(function () {
        $(this).removeClass("sign-up-dark");
      });
    } else {
      $(".back-to-top").addClass("light-text");
      $(".back-to-top").removeClass("dark-text");
      $(".back-to-top").mouseenter(function () {
        $(this).addClass("sign-up-light");
        $(this).removeClass("sign-up-dark");
      });
      $(".back-to-top").mouseleave(function () {
        $(this).removeClass("sign-up-light");
      });
    }

    if ($(this).scrollTop()) {
      $(".back-to-top").fadeIn();
    } else {
      $(".back-to-top").fadeOut();
    }
  });

  $("button.sign-up").mouseenter(function () {
    $(this).html(
      "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
    );
  });
  $("button.sign-up").mouseleave(function () {
    $(this).text("Sign Up");
  });

  $(".back-to-top").click(function () {
    $("body").animate({ scrollTop: 0 }, 100);
  });
});
