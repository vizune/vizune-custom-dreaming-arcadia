<?php
/**
 * Footer template for Dreaming Arcadia.
 */
?>

	<footer class="site-footer">
		✦ &nbsp;&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
		<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		&nbsp; • &nbsp;Made with ♡ and daydreams by
		<a
			href="https://vizune.neocities.org"
			target="_blank"
			rel="noopener noreferrer"
		>Vizune</a>
		&nbsp; ✦
	</footer>

</div><!-- /.site-shell -->

<?php wp_footer(); ?>

</body>
</html>
