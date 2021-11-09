<!--[arstratsiroaste]
<?php if ( is_front_page() && is_home() ) :	?>
<li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home!</a></li>
<?php endif; ?>
-->


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
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>
						<article class="blog-post">
							<?php the_title( '<h2 class="blog-post-title">', '</h2>' ); ?>
							<p class="blog-post-meta"><?php padma_posted_on();?> <?php padma_posted_by(); ?></p>

							<?php
								the_content(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'padma' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);
							?>
						</article>
						<?php
					endwhile; 
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
		</div>
		<?php if(is_active_sidebar('sidebar-1')): ?>
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
