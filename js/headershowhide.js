 $(document).ready(function() {
	var navOffset = jQuery(".header").offset().top;
		jQuery(window).scroll(function(){
         var scrollPos= jQuery(window).scrollTop();
            /*alert(scrollPos);*/
		/*if(scrollPos<=1){
             jQuery(".header").addClass("headershow");
            
         
         }
         else{
             jQuery(".header").removeClass("headershow");

             
         }*/
     });
    });