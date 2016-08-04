<header id="header">
<div class="container nav-header">
	<div class="row header">
    <div class="col-xs-12 col-md-12 col-sm-12 navigation">
     
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="nav-brand" href="index.php"><img src="images/cdc-logo.png" title="CDC Group"></a>
        </div>
        <div class="collapse navbar-collapse navHeaderCollapse pull-right">
          <ul class="nav navbar-nav navbar-left navbar-fixed right hide-on-med-and-down">
            <li><a href="about.php" class="smoothscroll">ABOUT</a></li>
            <li ><a href="portfolio.php">PORTFOLIO</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php#services" class="smoothscroll">PRINT AD</a></li>
                <li><a href="index.php#services" class="smoothscroll">RADIO JINGGLE</a></li>
                <li><a href="index.php#services" class="smoothscroll">TVC</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">GALLERY<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="gallery.php#header">AUDIO</a></li>
                <li><a href="gallery.php#header">VIDEO</a></li>
                <li><a href="gallery.php#header">PHOTO</a></li>
              </ul>
            </li>
            <li ><a href="contact.php" class="smoothscroll">CONTACT</a></li>
            <li>
              <a href="#" id="login">
                <login style="padding: 5px 10px; background-color: rgba(226, 10, 23, 0.83); border-radius:5px;">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login
                </login>
              </a>
            </li>
          </ul>
        </div>
        <div id="login-form" class="webui-popover-content login-form-open">
          <table cellpadding="5">
            <form action="#" method="post">
              <tr><td><input type="text" placeholder="  &#xf007;&nbsp; User Name"></td></tr>
              <tr><td><input type="password" style="margin: 0px 0px 5px 0px;" placeholder="  &#xf084;&nbsp; Password"></td></tr>
              <tr><td>
                <input type="submit" value="LOGIN" class="btn btn-default submit" style="width:100% !important; margin-bottom: 7px !important;" >
              </td></tr>
            </form>
            <form action="#" method="post">
              <tr><td><user style=" font-size: 11px !important; width:50%; margin-top: 3px;">New User?</user>&nbsp;
                <input class="signup" type="submit" value="Signup"></td>
              </tr>
            </form>
          </table>
        </div>
  
    </div>
	</div>
</div>
</header>
<script type="text/javascript">
$(document).ready(function() {
  $(".navbar-toggle").on("click", function() {
    $(this).toggleClass("active");
  });
});
</script>
