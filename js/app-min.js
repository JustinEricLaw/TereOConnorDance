jQuery(document).ready(function($){var e=function(){console.log("app.js is loaded")};e(),$(".bio-toggle").on("click",function(e){$(this).children("span").toggleClass("icon-plus").toggleClass("icon-minus"),$(this).parent().nextAll(".bio").first().slideToggle(),$(this).parents(".about-section").toggleClass("active"),e.preventDefault()})});