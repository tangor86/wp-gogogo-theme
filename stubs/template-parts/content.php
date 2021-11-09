<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Padma
 */
?>
<article id="post-<?php the_ID(); ?>" class="blog-post">
	<div class="post-content">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="blog-post-title">', '</h1>' );
		else :
			the_title( '<h2 class="blog-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>

		<?php
		if ( 'post' === get_post_type() ) : ?>
			<p class="blog-post-meta"><?php padma_posted_on(); ?> <?php padma_posted_by(); ?></p>
		<?php endif; ?>

		<!--
		<div class="post-thumbnail">
			<?php padma_post_thumbnail(); ?>
		</div>
		-->

		<div class="entry-content">
			<?php

			if (is_single( )) {
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
			} else {
				the_excerpt();
			}
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'padma' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<?php if ( is_singular() ) : ?>
			<footer class="entry-footer">
				<?php padma_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article>