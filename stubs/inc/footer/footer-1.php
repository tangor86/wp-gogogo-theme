<?php
/**
 * Footer action
 * @package Padma
 */

function padma_footer_style_1(){ ?>
<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright text-center">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'padma' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'padma' ), 'WordPress' );
						?>
					</a>
					<p>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'padma' ), 'padma', 'ashathemes' );
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php }
add_action('padma_footer_style','padma_footer_style_1');