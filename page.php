<?php
/**
 * Single post template for Dreaming Arcadia.
 */

get_header();
?>

<main>
	<section class="panel posts-panel" aria-label="<?php echo esc_attr__( 'Blog post', 'dreaming-arcadia' ); ?>">

		<article <?php post_class( 'page-section' ); ?> id="post-<?php the_ID(); ?>">

			<div class="page-copy">

				<h1 style="text-align: center">✧ <?php the_title(); ?> ✧</h1>

				<?php if ( is_page( 'moi' ) ) : ?>

						<div class="profile-frame">
								<img
										class="profile-photo"
										src="<?php echo esc_url( get_theme_file_uri( '/assets/michelle-avatar.png' ) ); ?>"
										alt="Michelle"
								/>

								<img
										class="profile-frame-decoration"
										src="<?php echo esc_url( get_theme_file_uri( '/assets/about-frame.png' ) ); ?>"
										alt=""
										aria-hidden="true"
								/>
						</div>

				<?php endif; ?>

				<div class="post-content">
					<?php the_content(); ?>
				</div>

			</div>

		</article>

	</section>
</main>

<?php
get_footer();
