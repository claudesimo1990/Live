$(document).ready(function () {

const ratio = .1;
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
};
const handleIntersect = function (entries,observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio){
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target)
        }
    })
};
const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('[class*="reveal-"]').forEach(function (r) {
    observer.observe(r);
});

$(document).ready(function(){
    // Prepare the preview for profile picture
        $("#wizard-picture").change(function(){
            readURL(this);
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    (function($) {
      $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
        template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })
      // Toggle the side navigation
      $("#sidenavToggler").click(function(e) {
        e.preventDefault();
        $("body").toggleClass("sidenav-toggled");
        $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
        $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
      });
      // Force the toggled class to be removed when a collapsible nav link is clicked
      $(".navbar-sidenav .nav-link-collapse").click(function(e) {
        e.preventDefault();
        $("body").removeClass("sidenav-toggled");
      });
      // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
      $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
        var e0 = e.originalEvent,
          delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        e.preventDefault();
      });
      // Scroll to top button appear
      $(document).scroll(function() {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
          $('.scroll-to-top').fadeIn();
        } else {
          $('.scroll-to-top').fadeOut();
        }
      });
      // Configure tooltips globally
      $('[data-toggle="tooltip"]').tooltip()
      // Smooth scrolling using jQuery easing
      $(document).on('click', 'a.scroll-to-top', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
          scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
      });
    })(jQuery);

});

$(function(){
    $("div[data-toggle=collapse]").click(function(){
        $(this).children('span').toggleClass("fa-chevron-down fa-chevron-up");
    });
});
$(document).ready(function () {
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
          } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
          }
      });
  }
});
