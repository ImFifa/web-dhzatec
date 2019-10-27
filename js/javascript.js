jQuery(document).ready(function () {
  jQuery('.hamburger').click(function () {
    jQuery("#myTopnav").toggleClass("responsive");
    jQuery(this).toggleClass("fa-bars fa-times");
  });
});

jQuery(function(){
    // this will get the full URL at the address bar
    var url = window.location.href;

    // passes on every "a" tag
    jQuery("#myTopnav a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) {
          jQuery(this).closest("li a").addClass("active");
        }
    });
});
