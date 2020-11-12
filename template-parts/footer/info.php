<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">

	<p class="footer-copyright">
		2020 <a href="/">Vibes</a>
	</p>

	<p class="footer-credits">
	<?php
	/* translators: Theme name. */
		printf( esc_html__( 'Theme: %s by the contributors.', 'wp-rig' ), '<a href="' . esc_url( 'https://www.nicklasbryntesson.se/' ) . '">WP Rig</a>' );
	?>
	</p>

	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
</div><!-- .site-info -->
