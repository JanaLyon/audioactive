<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package audio-active
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container-fluid site-info-bg">
		<div class="site-info">
			<div class="row">
				<div class="col-xs-12">
					<div class="container">
						<div class="row">
							<div class="upper-footer">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
									<img class="footer-logo" src="/wp-content/themes/audio-active/images/full_logo.svg"
										 width="75%"
										 alt="AudioActive logo"/>
								</div><!-- .col -->
								<div class="footer-gap visible-xs visible-sm hidden-md hidden-lg"></div>
								<!-- gap space -->
								<div class="col-xs-12 col-sm-7 col-md-7 col-lg-3 block-margin">
									<a class="" href="/">
										Home <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a><br>
									<a class="" href="/about-us/">
										About us <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a><br>
									<a class="" href="/contact-us-2/">
										Contact us <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a><br>
									<a class="" href="https://mydonate.bt.com/donation/donate.html?charity=audioactive">
										Make a donation <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a>
								</div><!-- .col -->
								<div class="col-xs-12 custom-breakpoint col-sm-6 col-md-7 col-lg-3">
									<a class="" href="/the-simon-dsouza-award/">
										The Simon D'Souza Award <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a><br>
									<a class="" href="/category/news/">
										News <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a><br>
									<!--a class="" href="/projects/">
										Projects <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a-->
								</div><!-- .col -->

								<div class="footer-gap hidden-xs visible-sm hidden-md hidden-lg"></div>
								<!-- gap space -->

								<div class="col-xs-12 custom-breakpoint col-sm-6 col-md-5 col-lg-3">
									<div class="row adjust-margin">
										<div class="col-xs-12 col-sm-12 col-md-12 address">
											<div class="info-symbols">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
											</div>
											<div class="info-symbols">
												<a href="https://www.google.co.uk/maps/place/114+London+Rd,+Brighton+BN1+4LJ/@50.8310074,-0.1381559,17z/data=!3m1!4b1!4m5!3m4!1s0x4875859dc1bfdea1:0xa8719896f16f1598!8m2!3d50.831004!4d-0.1359672?hl=en"
												   class="">AudioActive<br>
													114 London Road<br>
													Brighton BN1 4LJ
												</a>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 email">
											<div class="info-symbols">
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<a class="email-custom-class" href="mailto:office@audioactive.org.uk">office@audioactive.org.uk</a>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 telephone text-center">
											<div class="info-symbols">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<a href="tel://01273628414">01273 628414</a>
											</div>
										</div>
									</div><!-- .col -->
								</div>
							</div><!-- .upper-footer -->
						</div><!-- .row -->
						<div class="row visible-xs social-links-bottom">
							<div class="footer-social-link-container text-center">
								<!-- soundcloud -->
								<a class="btn bottom-bar-links" data-toggle="tooltip" title="Soundcloud"
								   href="https://soundcloud.com/audio_active" target="_blank"><i
											class="fa fa-soundcloud" aria-hidden="true"></i></a>
							</div>
							<div class="footer-social-link-container text-center">
								<!-- facebook -->
								<a class="btn bottom-bar-links" data-toggle="tooltip" title="Facebook"
								   href="https://www.facebook.com/likeaudioactive/" target="_blank"><i
											class="fa fa-facebook-official" aria-hidden="true"></i></a>
							</div>
							<div class="footer-social-link-container text-center">
								<!-- twitter -->
								<a class="btn bottom-bar-links" data-toggle="tooltip" title="Twitter"
								   href="https://twitter.com/Audio_Active" target="_blank"><i class="fa fa-twitter"
																							  aria-hidden="true"></i></a>
							</div>
							<div class="footer-social-link-container text-center">
								<!-- instagram -->
								<a class="btn bottom-bar-links" data-toggle="tooltip" title="Instagram"
								   href="https://www.instagram.com/audioactive_/" target="_blank"><i
											class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
							<div class="footer-social-link-container text-center">
								<!-- youtube -->
								<a class="btn bottom-bar-links" data-toggle="tooltip" title="Youtube"
								   href="https://www.youtube.com/channel/UCa4IXl4cqRZLQSa-pr2zujg" target="_blank"><i
											class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .site-info -->
	</div><!-- .container-fluid -->
		<!-- .container -->
	<div class="container-fluid site-copyright-bg">
		<div class="site-copyright">
			<div class="row">
				<div class="col-xs-12">
					<div class="container">
						<div class="row">
							<div class="lower-footer">
								<div class="col-xs-12">
									<i class="fa fa-copyright" aria-hidden="true"></i> AudioActive
								</div><!-- .col -->
							</div><!-- .lower-footer -->
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .site-copyright -->
	</div><!-- .container-fluid -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
