<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple
 */

?>
<!doctype html>
<html ⚡ lang="en" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="alternate" href="http://www.reboart.com/" hreflang="x-default">
	<link rel="alternate" href="http://www.reboart.com/en/" hreflang="en">
	<link rel="alternate" href="http://www.reboart.com/fr/" hreflang="fr">
	<link rel="alternate" href="http://www.reboart.com/es/" hreflang="es">
	<link rel="alternate" href="http://www.reboart.com/mx/" hreflang="es-mx">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="backnav" class="backnav"></div>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'simple' ); ?></a>
	<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    	
    		
    	<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h2 class="logo mr-auto"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php
			else :
				?>
				<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php
			endif;?>	
 <button href="javascript:void(0);" type="button" onclick="myFunction()" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>
 <nav id="myTopnav" class="topnav nav-menu d-none d-lg-block">


        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

      </nav><!-- .nav-menu -->
 
    </div>
  </header><!-- End Header -->

  


