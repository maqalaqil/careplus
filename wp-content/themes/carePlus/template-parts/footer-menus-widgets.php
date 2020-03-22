<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );

// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
	?>

	<div class="footer-nav-widgets-wrapper header-footer-group">

		<div class="footer-inner section-inner">

			<?php

			$footer_top_classes = '';

			$footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';
			$footer_top_classes .= $has_social_menu ? ' has-social-menu' : '';

			?>

			<?php if ( $has_sidebar_1 || $has_sidebar_2 ) { ?>

				<aside class="footer-widgets-outer-wrapper" role="complementary">

					<div class="footer-widgets-wrapper">

						<?php if ( $has_sidebar_1 ) { ?>

							<div class="footer-widgets column-one grid-item">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>

						<?php } ?>

						<?php if ( $has_sidebar_2 ) { ?>

							<div class="footer-widgets column-two grid-item">
								<?php dynamic_sidebar( 'sidebar-2' ); ?>
							</div>

						<?php } ?>

					</div><!-- .footer-widgets-wrapper -->

				</aside><!-- .footer-widgets-outer-wrapper -->

			<?php } ?>

		</div><!-- .footer-inner -->

	</div><!-- .footer-nav-widgets-wrapper -->

<?php } ?>
