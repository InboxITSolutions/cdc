 $(document).ready(function() {
	var navOffset = jQuery(".header").offset().top;
		jQuery(window).scroll(function(){
         var scrollPos= jQuery(window).scrollTop();
            /*alert(scrollPos);*/
		if(scrollPos>navOffset){
             jQuery(".header").addClass("fixed");
             
         }
         else{
             jQuery(".header").removeClass("fixed");
             
         }
     });
    });