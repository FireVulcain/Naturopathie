<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 *
 * @package Primer
 * @since   1.0.0
 */

?>

		</div><!-- #content -->

		<?php

		/**
		 * Fires before the `<footer>` element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'primer_before_footer' );

		?>

		<?php

		/**
		 * Fires after the `<footer>` element.
		 *
		 * @hooked primer_add_site_info - 10
		 *
		 * @since 1.0.0
		 */
		do_action( 'primer_after_footer' );

		?>

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>

</html>