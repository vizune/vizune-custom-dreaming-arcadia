<?php
/**
 * Single post template for Dreaming Arcadia.
 */

get_header();
?>

<main>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="panel posts-panel" aria-label="<?php echo esc_attr__( 'Blog post', 'dreaming-arcadia' ); ?>">

				<article <?php post_class( 'page-section' ); ?> id="post-<?php the_ID(); ?>">

					<div class="page-copy">

						<h1><?php the_title(); ?> ✧</h1>

						<div class="post-info">

							<p class="meta">
								<?php
								printf(
									/* translators: 1: post date, 2: author name */
									esc_html__( 'Posted on %1$s by %2$s', 'dreaming-arcadia' ),
									esc_html( get_the_date( 'F j, Y' ) ),
									esc_html( get_the_author() )
								);
								?>
								&nbsp;•&nbsp;
							</p>

							<?php
							$categories = get_the_category();

							if ( ! empty( $categories ) ) :
								?>
								<div class="tags" aria-label="<?php echo esc_attr__( 'Post categories', 'dreaming-arcadia' ); ?>">

									<?php foreach ( $categories as $category ) : ?>
										<a
											class="tag"
											href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"
										>
											<?php echo esc_html( $category->name ); ?>
										</a>
									<?php endforeach; ?>

								</div>
							<?php endif; ?>

						</div>

						<div class="post-content">
							<?php the_content(); ?>
						</div>

						<div class="post-signature">
							<img
								src="<?php echo esc_url( get_theme_file_uri( '/assets/michelle.png' ) ); ?>"
								alt="Michelle"
							/>
						</div>

						<?php
						wp_link_pages(
							array(
								'before' => '<nav class="post-pages" aria-label="' . esc_attr__( 'Post pages', 'dreaming-arcadia' ) . '">',
								'after'  => '</nav>',
							)
						);
						?>

					</div>

					<?php
					$comment_count = get_comments_number();
					?>

					<div
						class="comment-badge"
						aria-label="<?php echo esc_attr( sprintf( _n( '%s comment', '%s comments', $comment_count, 'dreaming-arcadia' ), number_format_i18n( $comment_count ) ) ); ?>"
					>
						<a href="<?php echo esc_url( get_comments_link() ); ?>">
							<img
								src="<?php echo esc_url( get_theme_file_uri( '/assets/comments.png' ) ); ?>"
								alt=""
							/>
						</a>

						<span class="comment-count">
							<?php echo esc_html( number_format_i18n( $comment_count ) ); ?>
						</span>

						<span class="comment-text">
							<?php echo esc_html( _n( 'comment', 'comments', $comment_count, 'dreaming-arcadia' ) ); ?>
						</span>
					</div>

				</article>

			</section>

			<?php
			/*
			 * Loads comments.php from the theme.
			 * This will use the Dreaming Arcadia comment form and comment list.
			 */
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>

		<?php endwhile; ?>

	<?php else : ?>

		<section class="panel posts-panel">
			<article class="page-section">
				<div class="page-copy">
					<h1><?php esc_html_e( 'Not Found', 'dreaming-arcadia' ); ?></h1>
					<p><?php esc_html_e( 'Sorry, but no post could be found.', 'dreaming-arcadia' ); ?></p>
				</div>
			</article>
		</section>

	<?php endif; ?>
</main>

<?php
get_footer();
