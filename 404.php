<?php
/**
 * 404 template for Dreaming Arcadia.
 */

get_header();
?>

<main>
	<section class="panel posts-panel" aria-label="<?php echo esc_attr__( 'Page not found', 'dreaming-arcadia' ); ?>">

		<article class="page-section page-section--oneCol">
			<div class="page-copy page-copy--center">

				<img
					src="<?php echo esc_url( get_theme_file_uri( '/assets/404.png' ) ); ?>"
					width="650"
					alt="<?php echo esc_attr__( '404 error', 'dreaming-arcadia' ); ?>"
				/>

				<h1 style="margin: 40px 0;">
					<?php esc_html_e( 'Oops! This page seems to be out of reach...', 'dreaming-arcadia' ); ?>
				</h1>

				<p>
					<?php esc_html_e( "The page you're looking for doesn't exist or may have been moved.", 'dreaming-arcadia' ); ?>
				</p>

				<p>
					<?php esc_html_e( "But don't worry, there's plenty of lovely places to explore in Dreaming Arcadia.", 'dreaming-arcadia' ); ?>
				</p>

				<a
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					class="dream-button"
					style="margin: 25px 0;"
				>
					<?php esc_html_e( 'Return to home', 'dreaming-arcadia' ); ?>
					<span class="button-arrow" aria-hidden="true">→</span>
				</a>

			</div>
		</article>

	</section>
</main>

<?php
get_footer();
