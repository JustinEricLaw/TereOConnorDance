jQuery(document).ready(function($) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut

  // Test that JS is loading
  var testing = function () {
    console.log('app.js is loaded');
  };
  testing();

  // Accordion for About Page
  $(".bio-toggle").on("click", function(event){
    
    // toggle icon state
    $(this).children('span')
      .toggleClass('icon-plus').toggleClass('icon-minus');
    
    // toggle display of bio text
    $(this).parent().nextAll(".bio").first().slideToggle();

    // remove extra bottom padding of container 
    $(this).parents(".about-section").toggleClass('active');
    event.preventDefault();
  });


});