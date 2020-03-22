<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/f317ae7616.js" crossorigin="anonymous"></script>
		<!-- bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
		<!-- Small Header -->
        <div class="pre-header">
			<div class="container">
				<div class="d-flex justify-content-between  align-items-center">
					<div class="pre-header-left">
						<ul class="top-contact">
							<li><i class="fas fa-map-marker-alt"></i></i> Yemen - Sanaa - Haddah st. </li>
						</ul>
					</div>
					<div class="pre-header-right">
						<ul class="top-contact d-inline">
							<li><i class="far fa-clock"></i>Mon - Sat 8.00 - 18.00 </li>
						</ul>
						<ul class="social-icons d-inline">
							<li><a target="_blank" href="#" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="#" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Header -->
		<header id="site-header" class="site-header-menu">
			<div class="container">			
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex align-items-center site-header-menu-inner">
							<div class="site-branding">
								<a href="index.html">
									<?php twentytwenty_site_logo(); ?>
								</a>
							</div> 
							<div class="menu-right-box ml-auto">
                                    <a href="#" class="search-btn"><i class="fas fa-bars"></i></a>
							</div>


							<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->



					<div class="header-navigation-wrapper">

						<?php
						if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
							?>
							<div class="header-toggles hide-no-js">
								<?php
								if ( has_nav_menu( 'expanded' ) ) {
									?>

									<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

										<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
											<span class="toggle-inner">
												<span class="toggle-text"><?php _e( '', 'twentytwenty' ); ?></span>
												<span class="toggle-icon">
													<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
												</span>
											</span>
										</button><!-- .nav-toggle -->

									</div><!-- .nav-toggle-wrapper -->

									<?php
								}
							
								?>

							</div><!-- .header-toggles -->
						<?php } ?>

					</div><!-- .header-navigation-wrapper -->



						</div>
					</div>
				</div>
			</div>

		</div><!-- .header-inner -->

		

	</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
