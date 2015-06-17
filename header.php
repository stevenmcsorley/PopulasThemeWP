<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

<div class="container-fluid no_padding outer_header">
<div class="header_wrap">
			<!-- header -->
			<header class="header clear col-md-12" role="banner">

					<!-- logo -->
					<div class="logo">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					</div>
					<!-- /logo -->

<!-- nav -->
<nav class="nav" role="navigation">
<?php
wp_nav_menu( array(
 'menu'            => 'Primary',
'theme_location'  => 'header-menu',
'depth'             => 2,
'container'         => 'div',
'container_class'   => 'collapse navbar-collapse',
'container_id'      => 'bs-example-navbar-collapse-1',
'menu_class'        => 'nav navbar-nav',
'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
'walker'            => new wp_bootstrap_navwalker())
            );
?>
<!-- /nav -->
</nav>
			</header>
			<!-- /header -->
</div>
</div>
		<!-- wrapper -->
		<div class="wrapper">