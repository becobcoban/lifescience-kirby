		<?php snippet('newsletter'); ?>
		<footer class="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<nav class="footer-nav">
						<div class="col-xs-12 col-sm-12 col-md-2">
							<div class="footer-divider">
								<h2 class="heading footer-heading footer-toggle" data-shown="no">HOME</h2>
								<ul class="footer-menu">
									<li class="footer-menu__item">
										<a class="footer-menu__link" href="#">Quick Health Test</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2">
							<div class="footer-divider">
								<h2 class="heading footer-heading footer-toggle" data-shown="no">ABOUT</h2>
								<ul class="footer-menu">
									<li class="footer-menu__item">
										<a class="footer-menu__link" href="#">Vision and Mission</a>
									</li>
									<li class="footer-menu__item">
										<a class="footer-menu__link" href="#">Our Approach</a>
									</li>
									<li class="footer-menu__item">
										<a class="footer-menu__link" href="#">Our Medical Team</a>
									</li>
									<li class="footer-menu__item">
										<a class="footer-menu__link" href="#">Our Facilities</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2">
							<div class="footer-divider">
								<h2 class="heading footer-heading footer-toggle" data-shown="no">PROGRAMS</h2>
								<ul class="footer-menu">
									<li class="footer-menu__item">
										<a class="footer-menu__link" href="#">Our Signature Programs</a>
									</li>
									<li class="footer-menu__item">
										<a class="footer-menu__link" href="#">Our Signature Services</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2">
							<div class="footer-divider">
								<h2 class="heading footer-heading"><a class="footer-link" href="#">PRESS</a></h2>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2">
							<div class="footer-divider">
								<h2 class="heading footer-heading"><a class="footer-link" href="#">MY ACCOUNT</a></h2>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2">
							<div class="footer-divider">
								<h2 class="heading footer-heading"><a class="footer-link" href="#">CAREERS</a></h2>
							</div>
						</div>
					</nav>
				</div>
				<div class="footer-social">
					<h2 class="heading footer-social-heading">FOLLOW US</h2>
					<ul class="footer-menu footer-menu--social">
						<li class="footer-menu__item">
							<a class="footer-menu__link" href=""><i class="social-icon social-icon--facebook"></i></a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href=""><i class="social-icon social-icon--twitter"></i></a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href=""><i class="social-icon social-icon--youtube"></i></a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href=""><i class="social-icon social-icon--instagram"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<hr class="footer-line hidden-xs hidden-sm">
			<div class="container">
				<div class="footer-copyright">
					<?php echo $site->copyright()->kirbytext() ?>
				</div>
			</div>
		</footer>

		<!-- Scripts -->
		<?php echo js('assets/js/jquery-2.2.2.min.js'); ?>
		<?php echo js('assets/js/bootstrap-datepicker.min.js'); ?>
		<?php echo js('assets/js/slick.min.js'); ?>
		<?php echo js('assets/js/app.js'); ?>
	</body>
</html>