<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karanikolaswork
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<script src=""></script>
	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?> >

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'karanikolaswork' ); ?></a>

	<header id="masthead" class="header">
		
		<div class="container header__container ">
			<div class="header__logo"><a href="<?php echo get_home_url(); ?>">karanikolas<span>.work</span></a></div>
			<div class="header__navigation">
				<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="header__cta">Call to action</div>
		</div>
		
	</header><!-- #masthead -->
	<main id="swup" class="transition-fade">
