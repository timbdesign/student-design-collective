<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Student Design Collective
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link rel="stylesheet" href="wp-content/themes/student-design-collective/tim.css"> -->
<link rel="stylesheet" href="wp-content/themes/student-design-collective/casey.css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/responsive-nav.js"></script>

<script type="text/javascript" src="//use.typekit.net/wjx4lco.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="left-of-logo">
			<ul>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu_class_' ) ); ?>
			</ul>
		</div>
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="http://timbdesign.com/studentdesign/wp-content/themes/student-design-collective/images/student-design-collective.png" alt="Student Design Collective, MCTC, Minneapolis Community and Technical College">
			</a>
		</div>
		<div class="right-of-logo">
			<ul>
				<?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) ); ?>
			</ul>
		</div>
		<nav class="nav-collapse">
		  <ul>
			 <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'my_extra_menu_class'  ) ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) ); ?>
		  </ul>
		</nav>
	</header><!-- #masthead -->
<div id="skrollr-body">
	<div id="content" class="site-content">
