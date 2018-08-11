<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package magazine-newspaper
 */

?>
	<footer class="sec-bg-color">
		<div class="container">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>
	</footer>



		<div class="copyright text-center spacer">
			<div class="social d-flex justify-content-center">
						<a href="https://www.facebook.com/cpushssc/" class="mx-2">
							<i class="fab fa-facebook-f"></i>
						</a>
		   <p> Senior high School SteelHawks | Powered by <a href="http://itsdancedrick.site/" target="_blank"> Dancedrick Media </a> and Themebootstrap </a> </p>


			 				</div>
		</div>

		<div class="scroll-top-wrapper"> <span class="scroll-top-inner"><i class="fa fa-2x fa-angle-up"></i></span></div>

		<?php wp_footer(); ?>
	</body>
</html>
