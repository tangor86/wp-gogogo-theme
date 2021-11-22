<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Padma 
 */


get_header();
?>
<main class="container">
	<div class="row g-5">
		<div class="col-md-8">
			<?php
                echo "index get_post_type() = " . get_post_type();

				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; 
					the_posts_navigation();

				else :
					
					get_template_part( 'template-parts/content', 'none' );

				endif;
			?>
		</div>
		<?php if (is_active_sidebar('sidebar-1')): ?>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
		<?php endif; ?>
		<!-- [t:sidebar2] -->
		<!-- php-transform content will be here -->
		<!-- [/t:sidebar2] -->
	</div>
</main>
<?php
get_footer();
