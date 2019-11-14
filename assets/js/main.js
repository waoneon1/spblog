// ===========================================
//   Smooth Scrolling
// ===========================================
jQuery(document).ready(function ($) {
  // Add smooth scrolling to all links
  $(".js-scrollto a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $("html, body").animate({
        scrollTop: ($(hash).offset().top - 60) + 'px'
      }, 1200, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        // /window.location.hash = hash;
      });
    } // End if
  });
});


// ===========================================
//   Scroll NAV Bottom
// ===========================================
$(document).ready(function () {

  var position = $(window).scrollTop(); 
  // should start at 0
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if(scroll > position) {
        $('.js-bottom-mnav').css('bottom', '0');
        $('.sb-back-to-top').css('bottom', '60px');
      } else {
        $('.js-bottom-mnav').css('bottom', '-60px');
        $('.sb-back-to-top').css('bottom', '30px');
      }

      position = scroll;
  });

});

