<html>
<head>
  <title>Portfolio| CDC GROUP</title>
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
    <script type="text/javascript" src="js/parralax.js"></script>
    <link rel="stylesheet" type="text/css" href="css/responsive-500px.css">
    <link rel="stylesheet" type="text/css" href="css/responsive-800px.css">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <script type="text/javascript" src="js/activetoggle.js"></script>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.webui-popover.css">
    <script type="text/javascript" src="js/jquery.webui-popover.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
</head>
<body>
  <?php include'includes/header.php';?>
  <section id="portfolio-more">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12 portfolio-more">
                <div class="col-xs-12 col-md-12 col-sm-12 portfolio-more-images">
                    <ul class="bxslider-portfolio">
                    <li>
                        <a href="assets/advertise3-2.jpg" class="popup-portfolio-more">
                        <img src="assets/advertise3-2.jpg"/>
                         </a>
                    </li>
                    <li>
                        <a href="assets/advertise3-2.jpg" class="popup-portfolio-more">
                        <img src="assets/advertise3-2.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="assets/advertise3-2.jpg" class="popup-portfolio-more">
                        <img src="assets/advertise3-2.jpg"/>
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 portfolio-more-desc">
                    <div class="col-xs-12 col-md-8 col-sm-8 portfolio-more-desc-left">
                         <h4><span>Portfolio</span></h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
                         lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xs-12 col-md-3 col-sm-3 portfolio-more-desc-right">
                        
                        <div class="published-date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span>Published: January 1, 2016</span>
                        </div>
                        <div class="category-portfolio">
                            <h4><span>CATEGORIES</span></h4>
                                <a href="services.php"><span>Radio Jinggle</span></a><br/>
                                <a href="#"><span>Print Ad</span></a>
                        </div>
                    </div>
                   
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 related-projects">
                    <h4><span>RELATED PROJECTS</span></h4>
                    <ul>
                        <li>
                            <div class="portfolio-more-wrapper">
                                <a href="#">
                                <img src="assets/advertise1.jpg">
                            </a>
                            </div>
                            
                        </li>
                        <li>
                            <div class="portfolio-more-wrapper">
                                <a href="#">
                                <img src="assets/advertise2.jpg">
                            </a>
                            </div>
                            
                        </li>
                        <li>
                            <div class="portfolio-more-wrapper">
                                <a href="#">
                                <img src="assets/advertise3.jpg">
                            </a>
                            </div>
                            
                        </li>
                        <li>
                            <div class="portfolio-more-wrapper">
                                <a href="#">
                                <img src="assets/advertise4.jpg">
                            </a>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </section>
<?php include 'includes/footer.php';?>
<script type="text/javascript">
$('#login').webuiPopover({
  url: '#login-form'
});
</script>
<script type="text/javascript">
$('.bxslider-portfolio').bxSlider({
  minSlides:2,
  maxSlides:2,
  slideWidth: 1200,
  slideMargin: 10,
  ticker: false,
  speed: 5000,
  hideControlOnEnd:true
  });
</script>
<script type="text/javascript">
$(document).ready(function() {
  $('.popup-portfolio-more').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});});
</script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
</body>