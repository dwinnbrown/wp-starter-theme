jQuery(document).ready(function () {
   jQuery(".site-content > .container > main").css("display", "none");
   jQuery("footer").css("display", "none");
   jQuery(".site-content > .container > main").fadeIn(500);
   jQuery("footer").fadeIn(500);
   jQuery(".right-nav ul li a").click(function(event) {
       event.preventDefault();
       linkLocation = this.href;
       jQuery(".site-content > .container > main").fadeOut(500, redirectPage);
       jQuery("footer").fadeOut(500, redirectPage);
   });

   function redirectPage() {
        window.location = linkLocation;
    }

    jQuery('.dropdown-toggle').click(function() {
        jQuery(this).toggleClass("fa-bars");
        jQuery(this).toggleClass("fa-times");
        jQuery(this).next().toggleClass("dropdown-open");
    });

});
