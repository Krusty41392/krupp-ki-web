<?php
/**
 * The header for our theme.
 *
 * @package    ThemeGrill
 * @subpackage Ample
 * @since      Ample 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	/**
	 * This hook is important for WordPress plugins and other many things
	 */
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div id="page" class="hfeed site">

	<?php
	if ( ample_option( 'ample_show_header_logo_text', 'text_only' ) == 'none' ) {
		$header_extra_class = 'logo-disable';
	} else {
		$header_extra_class = '';
	}
	?>
	<header id="masthead" class="site-header <?php echo $header_extra_class; ?>" role="banner">
		<div class="header">
			<div class="main-head-wrap inner-wrap clearfix container">
				<div id="header-section" class="row">
					<?php if ( ( ample_option( 'ample_show_header_logo_text', 'text_only' ) == 'both' || ample_option( 'ample_show_header_logo_text', 'text_only' ) == 'logo_only' ) ) { ?>
						<div class="col-12 d-flex items-justified-center">
							<div id="header-logo-image">
								<?php
								if ( function_exists( 'the_custom_logo' ) && has_custom_logo( $blog_id = 0 ) ) {
									ample_the_custom_logo();
								}
								?>
							</div>

								<?php
							}

							$screen_reader = '';
							if ( ( ample_option( 'ample_show_header_logo_text', 'text_only' ) == 'logo_only' || ample_option( 'ample_show_header_logo_text', 'text_only' ) == 'none' ) ) {
								$screen_reader = 'screen-reader-text';
							}
							?>
							<div id="header-text" class="<?php echo $screen_reader; ?>">
									<?php
								if ( is_front_page() || is_home() ) :
									?>
									<h1 id="site-title">
										<a href="<?php echo esc_url( home_url( '/startseite' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
									</h1>
								<?php else : ?>
									<h3 id="site-title">
										<a href="<?php echo esc_url( home_url( '/startseite' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
									</h3>
									
								<?php
								endif;
								
								?>
							</div>
							
							<nav id="site-navigation" class="main-navigation" role="navigation">
											<span class="menu-toggle"></span>
											<?php
											if ( has_nav_menu( 'primary' ) ) {
												wp_nav_menu(
													array(
														'theme_location' => 'primary',
														'menu_class'     => 'menu menu-primary-container',
													)
												);
											} else {
												wp_page_menu();
											}
											?>
							</nav>
							
							
						</div>
					
				</div>
			</div><!-- .main-head-wrap -->
			<?php
			if ( ample_option( 'ample_header_image_position', 'above' ) == 'below' ) {
				ample_render_header_image();
			}
			?>
		</div><!-- .header -->
	</header><!-- end of header -->
	<div class="main-wrapper" id="main">

		<?php
		if ( ample_option( 'ample_activate_slider', '0' ) == '1' ) {
			if ( is_front_page() ) {
				ample_featured_image_slider();
			}
		}
		if ( '' != ample_header_title() && ! ( is_front_page() ) ) {
			?>
			<div class="header-post-title-container clearfix">
				<div class="inner-wrap">
					<div class="post-title-wrapper">
						<?php if ( is_home() ) : ?>
							<h2 class="header-post-title-class entry-title"><?php echo ample_header_title(); ?></h2>
						<?php else : ?>
							<h1 class="header-post-title-class entry-title"><?php echo ample_header_title(); ?></h1>
						<?php endif; ?>
					</div>
					<?php
					if ( function_exists( 'ample_breadcrumb' ) ) {
						ample_breadcrumb();
					}
					?>
				</div>
			</div>
		<?php } ?>
