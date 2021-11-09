<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Padma
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>

	<!-- [t:css] -->
	<!-- php-transform content will be here -->
	<!-- [/t:css] -->

	<?php wp_head(); ?>
</head>

<body>
<?php if ( function_exists( 'wp_body_open' ) ) {wp_body_open();} else {do_action( 'wp_body_open');} ?>

	<!-- [t:svg] -->
	<!-- php-transform content will be here -->
	<!-- [/t:svg] -->

	<!-- [t:header] -->
	<!-- php-transform content will be here -->
	<!-- [/t:header] -->