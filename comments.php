<?php
/**
 * Comments template for Dreaming Arcadia.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	echo '<p class="comments-password-required">';
	esc_html_e( 'This post is password protected. Enter the password to view comments.', 'dreaming-arcadia' );
	echo '</p>';
	return;
}

$commenter           = wp_get_current_commenter();
$require_name_email  = (bool) get_option( 'require_name_email' );
$show_cookie_consent = (bool) get_option( 'show_comments_cookies_opt_in' );
?>

<?php if ( comments_open() ) : ?>

	<section class="comments-section" id="respond">

		<img
			class="comments-moon"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/moon-decoration.png' ) ); ?>"
			alt=""
			role="presentation"
			aria-hidden="true"
		/>

		<div class="comments-heading">
			<h2>
				<?php esc_html_e( 'Leave a Reply', 'dreaming-arcadia' ); ?>
				<span aria-hidden="true">✦</span>
			</h2>

			<?php if ( ! is_user_logged_in() ) : ?>
				<p class="comment-notes">
					<?php esc_html_e( 'Your email address will not be published.', 'dreaming-arcadia' ); ?>

					<?php if ( $require_name_email ) : ?>
						<?php esc_html_e( 'Required fields are marked', 'dreaming-arcadia' ); ?>
						<span class="required">*</span>
					<?php endif; ?>
				</p>
			<?php endif; ?>
		</div>

		<?php if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) : ?>

			<p class="must-log-in">
				<?php
				printf(
					wp_kses(
						__( 'You must be <a href="%s">logged in</a> to post a comment.', 'dreaming-arcadia' ),
						array( 'a' => array( 'href' => array() ) )
					),
					esc_url( wp_login_url( get_permalink() ) )
				);
				?>
			</p>

		<?php else : ?>

			<form
				class="comment-form"
				id="commentform"
				action="<?php echo esc_url( site_url( '/wp-comments-post.php' ) ); ?>"
				method="post"
			>

				<?php if ( is_user_logged_in() ) : ?>
					<p class="logged-in-as">
						<?php
						printf(
							wp_kses(
								__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s">Log out?</a>', 'dreaming-arcadia' ),
								array( 'a' => array( 'href' => array() ) )
							),
							esc_url( admin_url( 'profile.php' ) ),
							esc_html( wp_get_current_user()->display_name ),
							esc_url( wp_logout_url( get_permalink() ) )
						);
						?>
					</p>
				<?php endif; ?>

				<div class="form-row form-row-comment">
					<label for="comment">
						<?php esc_html_e( 'Comment', 'dreaming-arcadia' ); ?>
						<span class="required">*</span>
					</label>

					<textarea
						id="comment"
						name="comment"
						rows="7"
						placeholder="<?php echo esc_attr__( 'Share your thoughts...', 'dreaming-arcadia' ); ?>"
						required
						aria-required="true"
					></textarea>
				</div>

				<?php if ( ! is_user_logged_in() ) : ?>

					<div class="form-row">
						<label for="author">
							<?php esc_html_e( 'Name', 'dreaming-arcadia' ); ?>

							<?php if ( $require_name_email ) : ?>
								<span class="required">*</span>
							<?php endif; ?>
						</label>

						<input
							id="author"
							name="author"
							type="text"
							autocomplete="name"
							value="<?php echo esc_attr( $commenter['comment_author'] ); ?>"
							placeholder="<?php echo esc_attr__( 'Your name', 'dreaming-arcadia' ); ?>"
							<?php if ( $require_name_email ) : ?>
								required
								aria-required="true"
							<?php endif; ?>
						/>
					</div>

					<div class="form-row">
						<label for="email">
							<?php esc_html_e( 'Email', 'dreaming-arcadia' ); ?>

							<?php if ( $require_name_email ) : ?>
								<span class="required">*</span>
							<?php endif; ?>
						</label>

						<input
							id="email"
							name="email"
							type="email"
							autocomplete="email"
							value="<?php echo esc_attr( $commenter['comment_author_email'] ); ?>"
							placeholder="<?php echo esc_attr__( 'you@example.com', 'dreaming-arcadia' ); ?>"
							<?php if ( $require_name_email ) : ?>
								required
								aria-required="true"
							<?php endif; ?>
						/>
					</div>

					<div class="form-row">
						<label for="url">
							<?php esc_html_e( 'Website', 'dreaming-arcadia' ); ?>
						</label>

						<input
							id="url"
							name="url"
							type="url"
							autocomplete="url"
							value="<?php echo esc_attr( $commenter['comment_author_url'] ); ?>"
							placeholder="<?php echo esc_attr__( 'https://yourwebsite.com', 'dreaming-arcadia' ); ?>"
						/>
					</div>

					<?php if ( $show_cookie_consent ) : ?>
						<p class="comment-form-cookies-consent">
							<input
								id="wp-comment-cookies-consent"
								name="wp-comment-cookies-consent"
								type="checkbox"
								value="yes"
							/>

							<label for="wp-comment-cookies-consent">
								<?php
								esc_html_e(
									'Save my name, email, and website in this browser for the next time I comment.',
									'dreaming-arcadia'
								);
								?>
							</label>
						</p>
					<?php endif; ?>

				<?php endif; ?>

				<div class="form-submit">
					<button
						class="dream-button"
						id="submit"
						name="submit"
						type="submit"
					>
						<?php esc_html_e( 'Post Comment', 'dreaming-arcadia' ); ?>
						<span class="button-arrow" aria-hidden="true">→</span>
					</button>
				</div>

				<?php comment_id_fields(); ?>
				<?php do_action( 'comment_form', get_the_ID() ); ?>

			</form>

		<?php endif; ?>

	</section>

<?php endif; ?>


<?php if ( have_comments() ) : ?>

	<section class="comments-list" aria-label="<?php echo esc_attr__( 'Comments', 'dreaming-arcadia' ); ?>">

		<?php foreach ( $comments as $comment ) : ?>

			<article
				<?php comment_class( 'commentbox' ); ?>
				id="comment-<?php comment_ID(); ?>"
			>

				<div class="commentinfo">

					<div class="avatar">
						<?php echo get_avatar( $comment, 120 ); ?>
					</div>

					<p class="comment-meta">
						<?php esc_html_e( 'Posted on', 'dreaming-arcadia' ); ?>

						<time datetime="<?php comment_time( 'c' ); ?>">
							<?php comment_date( 'F jS, Y' ); ?>
							<?php esc_html_e( 'at', 'dreaming-arcadia' ); ?>
							<?php comment_time(); ?>
						</time>

						<?php esc_html_e( 'by', 'dreaming-arcadia' ); ?>

						<span class="author">
							<?php comment_author_link(); ?>
						</span>
					</p>

				</div>

				<?php if ( '0' === $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation">
						<?php esc_html_e( 'Your comment is awaiting moderation.', 'dreaming-arcadia' ); ?>
					</p>
				<?php endif; ?>

				<div class="comment-content">
					<?php comment_text(); ?>
				</div>

			</article>

		<?php endforeach; ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="comment-navigation" aria-label="<?php echo esc_attr__( 'Comment navigation', 'dreaming-arcadia' ); ?>">
				<div class="nav-previous">
					<?php previous_comments_link( esc_html__( '← Older Comments', 'dreaming-arcadia' ) ); ?>
				</div>

				<div class="nav-next">
					<?php next_comments_link( esc_html__( 'Newer Comments →', 'dreaming-arcadia' ) ); ?>
				</div>
			</nav>
		<?php endif; ?>

	</section>

<?php elseif ( ! comments_open() ) : ?>

	<p class="no-comments">
		<?php esc_html_e( 'Comments are closed.', 'dreaming-arcadia' ); ?>
	</p>

<?php endif; ?>
