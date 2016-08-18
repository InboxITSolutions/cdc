<html>
<head>
	<title>Home | CDC GROUP</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/fav.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/stickynav.js"></script>
    <link rel="stylesheet" type="text/css" href="css/responsive-500px.css">
    <link rel="stylesheet" type="text/css" href="css/responsive-800px.css">
   <!--  <script type="text/javascript" src="js/simple-lightbox.min.js"></script> -->
    <script type="text/javascript" src="js/hovereffect.js"></script>
    <script type="text/javascript" src="js/headershowhide.js"></script>
    <link href="css/hover.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <script type="text/javascript" src="js/activetoggle.js"></script>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--<script type="text/javascript" src="js/animation.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.webui-popover.css">
    <script type="text/javascript" src="js/jquery.webui-popover.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
    <script src="js/jquery.bxslider.min.js"></script>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel='stylesheet prefetch' href='https://rawgit.com/OwlCarousel2/OwlCarousel2/develop/dist/assets/owl.carousel.min.css'>
    <style type="text/css">
      .header{
        position: absolute;
      }
    </style>
</head>
<body>
<?php include'includes/header.php';?>
<?php include'includes/index-gallery-main.php';?>
<?php include'includes/index-about.php';?>
<?php include'includes/index-services.php';?>
<?php include'includes/index-portfolio.php';?>
<?php /*include'includes/index-gallery.php';*/?>
<?php include'includes/experience-slider.php';?>
<?php include'includes/index-clients.php';?>
<?php include 'includes/footer.php';?>
 <script type="text/javascript" src="js/portfolio-hovereffect.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/magnific-popup.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/login-popup.js"></script>
<script type="text/javascript">
$('.bxslider').bxSlider({
  slideWidth: 200,
  slideMargin: 50,
  maxSlides:5,
  minSlides:5,
  speed:5000
  
 });
</script>
<script src='https://rawgit.com/OwlCarousel2/OwlCarousel2/develop/dist/owl.carousel.min.js'></script>
<script type="text/javascript">
$(function() {
  $('.owl-carousel.testimonial-carousel').owlCarousel({
    autoPlay : 3000,
    items : 3,
    stopOnHover : false,
    nav: true,
    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      750: {
        items: 2,
      }
    }
  });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $('.bxslider-experience-slider').bxSlider({
    minSlides: 20,
    maxSlides: 20,
    slideWidth: 140,
    slideMargin: 0,
    ticker: true,
    infiniteLoop:true,
    speed: 50000
  });
});
</script>
</body>
</html>
