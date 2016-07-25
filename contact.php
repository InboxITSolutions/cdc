<html>
<head>
  <title>Contact| CDC GROUP</title>
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
    <style type="text/css">
    .header{
      position: relative !important;
      background: #000;
    }

    .nav-header{
      padding: 0 !important;
    }
    </style>
  </head>
<body>
  <?php include'includes/header.php';?>
<section id="contact">
  <div class="container">
    <div class="row" id="contact">
      <div class="col-xs-12 col-md-12 col-sm-12 contact-us">
        <h3 align="center" class="animate-contact-h3"><span class="index_topic">CONTACT US</span></h3>
        <br/>
        <div class="col-xs-12 col-md-6 col-sm-6 contact-info animate-contact-content">
          <table>
            <tr><td><company class="company">CDC Advertisement Company</company></td></tr>
            <tr><td><add class="address"><i class="fa fa-map-marker"></i> Bagbazar,Kathmandu</add></td></tr> 
            <tr><td><phone class="phone"><i class="fa fa-mobile"></i> 9841111111</phone></td></tr>
            <tr><td><mobile class="mobile"><i class="fa fa-phone"></i> 01-4246500,4245021</mobile></td></tr>
            <tr><td><mail class="mail"><i class="fa fa-envelope"></i>  cdcgroup@mail.com.np</mail></td></tr>
          </table>
          <div class="col-xs-12 col-md-12 col-sm-12 line" style="padding: 0px;">
            <hr style="box-shadow:0px 0px 0px 0px #fff; border: 1px solid rgba(226, 10, 23, 0.3); margin: 5px 0px;"/>
          </div>
          <table>
            <tr>
              <td> <company class="company">Find Us</company></td>
            </tr>
            <tr>
              <td>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6475383532043!2d85.32745716447285!3d27.69728653254211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a364bb5935%3A0xf40b4cf2c78cf48a!2sAnamnagar%2C+Kathmandu+44617!5e0!3m2!1sen!2snp!4v1465809398679" 
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                      </iframe>
              </td>
            </tr>
          </table>
          <br/>
        </div>
        <div class="col-xs-12 col-md-6 col-sm-6 contact-feedback animate-contact-content">
          <table cellpadding="5">
            <tr><td><company class="company">Leave Us Your Feedback</company></td></tr>
            <form action="#" method="post">
              <tr><td><input type="text" placeholder="  &#xf007;&nbsp; Your Name"></td></tr>
              <tr><td><input type="text" placeholder="  &#xf0e0;&nbsp; Your Email Address"></td></tr>
              <tr><td><input type="text" placeholder="  &#xf02d;&nbsp; Subject Of Your Message"></td></tr>
              <tr><td><textarea rows="7"  placeholder="  &#xf075;&nbsp; Drop Us A Message"></textarea></td></tr>
              <tr><td><input type="submit" value="Submit Message" class="btn btn-default submit pull-left" style="margin-bottom:0px !important;"></td></tr>
            </form>
          </table><br/>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12 line"> <hr style="box-shadow:0px 0px 0px 0px #fff; margin: 0px 0px 15px 0px;"/></div>         
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
</body>
</html>