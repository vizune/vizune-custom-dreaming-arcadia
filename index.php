<?php
/**
 * Main blog feed template for Dreaming Arcadia.
 *
 * WordPress will use index.php as the fallback posts template.
 * If you later add a home.php, WordPress will prefer home.php for the blog feed.
 */

get_header();
?>

<main>
	<?php if ( have_posts() ) : ?>

		<section class="panel posts-panel" aria-label="<?php echo esc_attr__( 'Latest posts', 'dreaming-arcadia' ); ?>">

			<?php while ( have_posts() ) : the_post(); ?>

				<article <?php post_class( 'post-card' ); ?> id="post-<?php the_ID(); ?>">

					<div class="post-copy">

						<h2>
							<a
								href="<?php the_permalink(); ?>"
								rel="bookmark"
							>
								<?php the_title(); ?> ✧
							</a>
						</h2>

						<div class="post-info">

							<p class="meta">
								<?php
								printf(
									/* translators: %s: post date */
									esc_html__( 'Posted on %s', 'dreaming-arcadia' ),
									esc_html( get_the_date( 'F j, Y' ) )
								);
								?>
								&nbsp;•&nbsp;
							</p>

							<?php
							$categories = get_the_category();

							if ( ! empty( $categories ) ) :
								?>
								<div
									class="tags"
									aria-label="<?php echo esc_attr__( 'Post categories', 'dreaming-arcadia' ); ?>"
								>
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

						<p class="excerpt">
							<?php echo esc_html( get_the_excerpt() ); ?>
						</p>

						<a
							class="read-more"
							href="<?php the_permalink(); ?>"
							aria-label="<?php echo esc_attr( sprintf( __( 'Read more about %s', 'dreaming-arcadia' ), get_the_title() ) ); ?>"
						>
							<?php esc_html_e( 'Read more', 'dreaming-arcadia' ); ?>
							<span class="arrow" aria-hidden="true">→</span>
						</a>

					</div>

					<?php
					$comment_count = get_comments_number();
					$comment_label = sprintf(
						_n( '%s comment', '%s comments', $comment_count, 'dreaming-arcadia' ),
						number_format_i18n( $comment_count )
					);
					?>

					<div
						class="comment-badge"
						aria-label="<?php echo esc_attr( $comment_label ); ?>"
					>
						<a
							href="<?php echo esc_url( get_comments_link() ); ?>"
							aria-label="<?php echo esc_attr( $comment_label ); ?>"
						>
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

			<?php endwhile; ?>

			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 1,
					'prev_text' => '← ' . esc_html__( 'Previous', 'dreaming-arcadia' ),
					'next_text' => esc_html__( 'Next', 'dreaming-arcadia' ) . ' →',
				)
			);
			?>

		</section>

	<?php else : ?>

		<section class="panel posts-panel">
			<article class="post-card">
				<div class="post-copy">
					<h2><?php esc_html_e( 'Not Found', 'dreaming-arcadia' ); ?> ✧</h2>
					<p class="excerpt">
						<?php esc_html_e( 'Sorry, but no posts matched your criteria.', 'dreaming-arcadia' ); ?>
					</p>
				</div>
			</article>
		</section>

	<?php endif; ?>
</main>

<?php
get_footer();
