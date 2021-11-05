<?php
/**
 * Padma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Padma
 */
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-style.php';

/**
 * Load padma Header.
 */
require get_template_directory() . '/inc/header/header-1.php';

/**
 * Load padma Footer.
 */
require get_template_directory() . '/inc/footer/footer-1.php';


/** Welcome Page * */
require get_template_directory() . '/welcome/welcome.php';