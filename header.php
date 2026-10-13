<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Nunito:wght@400;500;600&display=swap"
		rel="stylesheet"
	>

	<link
		rel="icon"
		type="image/png"
		href="<?php echo esc_url( get_theme_file_uri( '/assets/favicon.png' ) ); ?>"
	>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-shell">
	<div class="decor" aria-hidden="true"></div>

	<header class="hero">

		<img
			class="hero-character top"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/wisteria.png' ) ); ?>"
			alt=""
			aria-hidden="true"
		/>

		<img
			class="hero-character left"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/header-left.png' ) ); ?>"
			alt=""
			aria-hidden="true"
		/>

		<img
        class="hero-pillar left"
        src="<?php echo esc_url( get_theme_file_uri( '/assets/pillar.png' ) ); ?>"
        alt=""
        aria-hidden="true"
      />
      
      <img
        class="hero-pillar right"
        src="<?php echo esc_url( get_theme_file_uri( '/assets/pillar.png' ) ); ?>"
        alt=""
        aria-hidden="true"
      />

		<div class="hero-center">

			<img
				src="<?php echo esc_url( get_theme_file_uri( '/assets/moon.png' ) ); ?>"
				class="moon-decoration"
				alt=""
				role="presentation"
				aria-hidden="true"
			/>

			<a
				class="logo-link"
				href="<?php echo esc_url( home_url( '/' ) ); ?>"
				aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
			>
				<img
					class="logo"
					src="<?php echo esc_url( get_theme_file_uri( '/assets/logo.png' ) ); ?>"
					alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
				/>
			</a>

			<nav class="nav-icons" aria-label="<?php esc_attr_e( 'Primary navigation', 'dreaming-arcadia' ); ?>">

				<a class="nav-item" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img
						src="<?php echo esc_url( get_theme_file_uri( '/assets/home.png' ) ); ?>"
						alt=""
					/>
					<p><?php esc_html_e( 'Home', 'dreaming-arcadia' ); ?></p>
				</a>

				<a class="nav-item" href="<?php echo esc_url( home_url( '/moi/' ) ); ?>">
					<img
						src="<?php echo esc_url( get_theme_file_uri( '/assets/about.png' ) ); ?>"
						alt=""
					/>
					<p><?php esc_html_e( 'Michelle', 'dreaming-arcadia' ); ?></p>
				</a>

				<a class="nav-item" href="<?php echo esc_url( home_url( '/exit/' ) ); ?>">
					<img
						src="<?php echo esc_url( get_theme_file_uri( '/assets/exit.png' ) ); ?>"
						alt=""
					/>
					<p><?php esc_html_e( 'Exit', 'dreaming-arcadia' ); ?></p>
				</a>

			</nav>

		</div>

		<img
			class="hero-character right"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/header-right.png' ) ); ?>"
			alt=""
			aria-hidden="true"
		/>

	</header>
