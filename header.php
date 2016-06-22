<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great|Fenix' rel='stylesheet' type='text/css'>
	<?php endif; ?>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="container">

		<!-- site-header -->
		<header class="site-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>
			<div id="burger"></div>

			<span class="menu-trigger">MENU</span>

			<nav class="site-nav">

			<?php $args = array(
				'theme_location' => 'primary'
			); ?>

				<?php wp_nav_menu( $args ); ?>
			</nav>

		</header>
