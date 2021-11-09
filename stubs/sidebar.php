<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Padma
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="position-sticky" style="top: 2rem;">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>