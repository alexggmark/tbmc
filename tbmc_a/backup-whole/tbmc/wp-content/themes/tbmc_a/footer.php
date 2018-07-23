<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tbmc_a
 */

?>

		</div>
	</div><!-- #content -->

	<footer class="footer">

		<div class="footer__menu">
			<a class="footer__menu--item" href="#">Privacy & Cookie Policy</a>
			<a class="footer__menu--item" href="#">Terms & Conditions</a>
			<a class="footer__menu--item" href="#">Our Values</a>
			<a class="footer__menu--item" href="#">Online Brochure</a>
		</div>
		<div class="footer__menu--social">
			<a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/soc1.svg"></a>
			<a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/soc2.svg"></a>
			<a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/soc3.svg"></a>
			<a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/soc4.svg"></a>
		</div>
		<div class="footer__menu--spacedtag">
			Website by <a href="http://spaced.digital">Spaced</a>
		</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
