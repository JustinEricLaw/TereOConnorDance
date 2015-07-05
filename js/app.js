jQuery(document).ready(function($) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  
  // Test that file has loaded
  var test = function () {
    console.log('App.js is loaded!');
  }
  test();


  // Accordion for About Page
  $("#bio-toggle").on("click", function(event){
    $(".bio").slideToggle();
    event.preventDefault();
  });


});