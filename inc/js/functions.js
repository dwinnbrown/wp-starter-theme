jQuery(document).ready(function () {
   jQuery(".site-content > .container > main").css("display", "none");
   jQuery("footer").css("display", "none");
   jQuery(".site-content > .container > main").fadeIn(1000);
   jQuery("footer").fadeIn(1000);
   jQuery(".right-nav ul li a").click(function(event) {
       event.preventDefault();
       linkLocation = this.href;
       jQuery(".site-content > .container > main").fadeOut(1000, redirectPage);
       jQuery("footer").fadeOut(1000, redirectPage);
   });

   function redirectPage() {
        window.location = linkLocation;
    }

});
