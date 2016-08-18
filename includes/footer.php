<footer id="footer">
	<div class="conatiner">
		<div class="row" >
			<div class="col-xs-12 col-md-12 col-sm-12 footer">
			 <div class="col-xs-12 col-md-12 col-sm-12 foot-up">
						<div class="col-xs-12 col-md-4 col-sm-4 foot-center">
							<h3 class="footer-heading"><span>CDC Group Advertising company</span></h3>
							<i class="fa fa-mobile" aria-hidden="true">&nbsp;9800000000&nbsp;</i><br/>
							<i class="fa fa-phone" aria-hidden="true">&nbsp;01-4400000</i><br/>
							<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Locate</a>
						</div>
						<div class="col-xs-12 col-md-2 col-sm-2 foot-left">
							<h3 class="footer-heading"><span>Quick Links</span></h3>
							<ul class="animate-footer-left">
				  				<li><a href="#">About</a></li>
				  				<li><a href="#">portfolio</a></li>
				  				<li><a href="#">services</a></li>
				  				<li><a href="#">gallery</a></li>
				  				<li><a href="#">contact</a></li>
				  				
				  			</ul>
						</div>
						
						<div class="col-xs-12 col-md-6 col-sm-6 foot-right animate-footer-right">
							<div class="subscribe">
  							<!-- <h3>Subscribe to our newsletter</h3> -->
  							<div class="subscribe__wrapper">
  							<input type="text" id="input" placeholder="Subscribe to our newslatter" />
  							<button id="send">
  							<span class="divider"></span>
  							<span class="send">Send</span>
  						<svg width="122.6px" height="250px" viewBox="0 0 122.6 77.9">
  							<g id="p2" transform="scale(2)" fill="#fff">
  							<path d="M62.4,6.9L23.6,45.7c-0.3,0.3-0.9,0.3-1.2,0L0.3,23.7c-0.3-0.3-0.3-0.9,0-1.2l5.4-5.4c0.3-0.3,0.9-0.3,1.2,0l16.1,16.1
	L55.8,0.3c0.3-0.3,0.9-0.3,1.2,0l5.4,5.4C62.8,6,62.8,6.5,62.4,6.9L62.4,6.9z"/></g>
							<g id="p1">
          					<path fill="#FFFFFF" d="M113.6,8.1v61.8H8V8.1H113.6 M121.6,0.1H0v77.8h121.6V0.1L121.6,0.1z" />
          					<polygon fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="9.9,73.1 60.8,48.8 115.5,73.1 " />
          					<polyline id="mail" fill="none" stroke="#FFFFFF" stroke-width="8" stroke-miterlimit="10" points="2.6,3.1 60.8,48.8 118.9,3.6 " />
          					<polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="5.4,6.9 60.8,48.8 115.5,6.9 " />
        					</g>
      					</svg>
      					</button>
  </div>
</div>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true" style="padding: 0.2em;"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true" ></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true" style="padding: 0.1em;"></i></a></li>
						</ul>
						</div>
			  </div>
				
				<div class="col-xs-12 col-sm-12 col-md-12 foot-bottom">
				  <div class="col-xs-12 col-md-4 col-sm-4 centered-left">
				   	<p>&copy;&nbsp;cdc group pvt ltd</p>
				   </div>
				   <div class="col-xs-12 col-md-4 col-sm-4 centered-center">
				   		<!-- <i class="fa fa-phone" aria-hidden="true">&nbsp;Check-mail</i> -->
				   </div>
				   <div class="col-xs-12 col-md-4 col-sm-4 centered-right">
				   	<p style="margin:0px;" class="animate-footer-down">Design:&nbsp;<a href="www.theinboxit.com">InBox I.T.</a></p>
				   </div>
				</div>
					
				
			</div>
			<a href="#" class="go-top" id="back-to-top" role="button" title="Click to return on the top page"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
		</div>
	</div>
</footer>
<script type="text/javascript">
	var mail = document.getElementById('mail'),
    input = document.getElementById('input'),
    sendText = document.querySelectorAll('.send'),
    send = document.getElementById('send'),
    tick = document.getElementById('p2'),
    p1 = document.getElementById('p1');

send.addEventListener('click', function() {
  sendText[0].textContent = "Sent";
  p1.style.opacity = 0;
  tick.style.opacity = 1;
});


input.addEventListener('keydown', function() {
  var email = this.value;
  openMail();
  if(validateEmail(email)) {
    closeMail();
  }
});

function openMail() {
  mail.setAttribute('points', "2.6,55.9 60.8,5.3 118.9,56.3");
  mail.setAttribute('transform', 'translate(0,-53)');
}

function closeMail() {
  mail.setAttribute('points', "2.6,3.1 60.8,48.8 118.9,3.6");
  mail.setAttribute('transform', 'translate(0,0)');
}

function validateEmail(email) {
    var ex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return ex.test(email);
}
</script>
