$(document).ready(function() {
      $("#slider").hover(function(){
         jQuery(".fa-angle-left").toggleClass("hide-it");
         jQuery(".fa-angle-right").toggleClass("hide-it");
      });
   });