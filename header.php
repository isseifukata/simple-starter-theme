<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mysite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header py-4">
		<div id="site-navigation-mobile" class="site-navigation-mobile iziModal">
			<div class="container py-4">
				<div class="row pb-4">
					<div class="col text-right"><button class="menu-btn menu-btn-close" data-izimodal-close=""><i class="fas fa-times"></i></button>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<nav class="" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'container' => 'div',
									'fallback_cb' => false,
									'items_wrap' => '<ul class="">%3$s</ul>',
									'depth' => 0,
								)
							);
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-3">
					<div class="site-branding">
						<?php

						if( has_custom_logo() ){
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$custom_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							$custom_logo_url = $custom_logo[0];
						}
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?= $custom_logo_url; ?>" alt="<?php bloginfo( 'name' ) ?>"></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?= $custom_logo_url; ?>" alt="<?php bloginfo( 'name' ) ?>"></a></p>
							<?php
						endif;
						$mysite__description = get_bloginfo( 'description', 'display' );
						if ( $mysite__description || is_customize_preview() ) :
							?>
							<p class="site-description"><small><?php echo $mysite__description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></small></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-9">
					<nav id="site-navigation" class="main-navigation d-none d-lg-block">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container' => 'div',
								'fallback_cb' => false,
								'items_wrap' => '<ul class="list-unstyled m-0 d-flex justify-content-between align-items-center">%3$s</ul>',
								'depth' => 0,
							)
						);
						?>
					</nav><!-- #site-navigation -->
					<div class="text-right d-lg-none">
						<button class="menu-btn menu-btn-open" data-izimodal-open=".iziModal"><i class="fas fa-bars"></i></button>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
