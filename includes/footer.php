		<!--Footer -->
		<footer class="footer">
			<div class="container">
				<div class="footer-top">
					<div class="footer-logo">
						<img src="images/logo.png" alt="Bloom">
					</div>
					
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<div class="footer-contact">
								<h4 class="footer-title">Address</h4>
								<p>2 Maple Ave.<br>Morristown, NJ 07960</p>
							 </div>
							
							<div class="footer-contact">
								<h4 class="footer-title">Phone</h4>
								<p>(973)292-3377</p>
							 </div>
							
							<div class="footer-contact">
								<h4 class="footer-title">Email</h4>
								<p>info@bloommorristown.com</p>
							 </div>
						</div>
						<div class="col-sm-5 col-md-3">
							<div class="footer-col">
								<h4 class="footer-title">Hours of Operation</h4>
								<ul class="hours-list">
									<li><span>Monday</span> 9am - 5pm</li>
									<li><span>Tuesday</span> 9am - 9pm</li>
									<li><span>Wednesday</span> 9am - 9pm</li>
									<li><span>Thursday</span> 9am - 9pm</li>
									<li><span>Friday</span> 9am - 6pm</li>
									<li><span>Saturday</span> 9am - 5pm</li>
									<li><span>Sunday</span> 10am - 4pm</li>
								</ul>
								<p class="text-highlighted">(Sundays Blowouts &amp; Mens Cuts Only)</p>
							</div>
						</div>
						<div class="col-sm-3 col-md-2">
							<div class="footer-col pl30">
								<h4 class="footer-title">Quick Links</h4>
								<ul class="footer-list">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Team</a></li>
									<li><a href="#">Our Services</a></li>
									<li><a href="#">Gift Cards</a></li>
									<li><a href="#">Events/Promotions</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-sm-12 col-md-4">
							<div class="row footer-col newsletter-col">
								<div class="col-sm-6 col-md-12 footer-newsletter">
									<h4 class="footer-title">Newsletter</h4>
									<form class="newsletter-form">
										<input type="text" class="form-control input-sm" placeholder="Type your email address here">
										<button type="submit" class="btn btn-submit disabled">submit</button>
									</form>
								</div>
								<div class="col-sm-6 col-md-12 footer-social">
									<h4 class="footer-title">GET INSPIRED BY FOLLOWING US</h4>
									<ul class="social-list">
										<li><a href="#"><i class="fill" data-feather="facebook"></i></a></li>
										<li><a href="#"><i data-feather="instagram"></i></a></li>
										<li><a href="#"><i class="fill" data-feather="twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="row">
						<div class="col-sm-6">
							<p class="footer-bottom-links"><a href="#">Terms of Use</a><a href="#">Privacy Policy</a></p>
						</div>
						<div class="col-sm-6">
							<p class="copyright">2018&copy; Bloom | All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer><!--/Footer -->

		</div>
        <!--/Wrapper -->    
	   
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	   	<script src="js/feather.min.js"></script>
		<script src="js/main.js"></script>

		<?php if(isset($home_page) && ($home_page == true)) { ?>
		<script src="js/jquery.superslides.min.js"></script>
		<script>
			$('#slides').superslides({
			  play: 12000,
			  animation: 'fade',
			  animation_speed: 'slow'
			});
			
			$('body').on('animated.slides', '#slides', function(e){
				$('.slides-item').removeClass('zoomin');
				var currentSlide = $('#slides').superslides('current');
				$('.slides-container').children().eq(currentSlide).addClass('zoomin');
			});
			 
		</script>
		<?php } ?>
	</body>
</html>