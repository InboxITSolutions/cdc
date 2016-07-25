 $(document).ready(function() {
	$(window).scroll(function(event){
         var scrollPos= $(this).scrollTop();
            /*alert( scrollPos);*/
		if(scrollPos>=640){
            jQuery(".animate-about-h3").addClass("animated fadeInUp");
           
         }
         if(scrollPos>=716){
            jQuery(".animate-about-h1").addClass("animated fadeInUp");
         }
         if(scrollPos>=782){
            jQuery(".animate-about-p").addClass("animated fadeInUp");
         }
          if(scrollPos>=1161){
            jQuery(".animate-about-h4").addClass("animated fadeInUp");
         }
         if(scrollPos>=1154){
            jQuery(".see_about").addClass("animated fadeInUp");
         }
          if(scrollPos>=1848){
            jQuery(".animate-services-h3").addClass("animated fadeInUp");
         }
         if(scrollPos>=1928){
            jQuery(".animate-services-content").addClass("animated fadeInUp");
         }
         if(scrollPos>=2491){
            jQuery(".our-work-h3").addClass("animated fadeInUp");
         }
         if(scrollPos>=2571){
            jQuery(".our-work-li-first-row").addClass("animated fadeInUp");
         }
          if(scrollPos>=2820){
            jQuery(".our-work-li-second-row").addClass("animated fadeInUp");
         }
         if(scrollPos>=3163){
            jQuery(".animate-contact-h3").addClass("animated fadeInUp");
         }
          if(scrollPos>=3236){
            jQuery(".animate-contact-content").addClass("animated fadeInUp");
         }
         if(scrollPos>=3842){
            jQuery(".animate-footer-left").addClass("animated fadeInUp");
            jQuery(".animate-footer-center").addClass("animated fadeInUp");
            jQuery(".animate-footer-right").addClass("animated fadeInUp");
         }
         if(scrollPos>=3930){
            jQuery(".animate-footer-down").addClass("animated fadeInUp");
         }
     });
	
    });