# Dreaming Arcadia

A custom WordPress theme created for **Dreaming Arcadia**.

The theme combines a dreamy pastel fantasy aesthetic with a lightweight classic WordPress structure. It was designed around soft lavender and blue tones, floral details, custom illustrated assets, decorative post cards, and a responsive layout that works across desktop, tablet, and mobile.

## Features

- Custom responsive WordPress theme
- Dreamy pastel fantasy design
- Custom illustrated header and navigation
- Decorative post cards with category tags and comment badges
- Styled single post layout
- Custom comments section and comment form
- Styled pagination
- Custom 404 page
- Custom page template styling
- Optional page-specific artwork for the `/moi/` page
- Responsive layouts for desktop, tablet, and mobile
- WordPress-compatible title handling via `title-tag`
- Theme stylesheet loaded through `functions.php`
- Dynamic dates, categories, excerpts, comments, and pagination

## Theme Structure

```text
dreaming-arcadia/
├── assets/
│   ├── about.png
│   ├── about-frame.png
│   ├── comments.png
│   ├── favicon.png
│   ├── header-left.png
│   ├── header-right.png
│   ├── home.png
│   ├── logo.png
│   ├── michelle.png
│   ├── moon.png
│   ├── pillar.png
│   ├── wisteria.png
│   └── ...
├── 404.php
├── comments.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── single.php
└── style.css
```

## Installation

1. Copy the `dreaming-arcadia` folder into:

   ```text
   wp-content/themes/
   ```

2. Open the WordPress admin dashboard.
3. Go to **Appearance → Themes**.
4. Activate **Dreaming Arcadia**.

## Local Development

The theme can be developed locally using WordPress Studio or another local WordPress environment.

For WordPress Studio, the theme should live inside:

```text
<site-folder>/wp-content/themes/dreaming-arcadia/
```

Changes to PHP and CSS files can then be previewed immediately in the local WordPress site.

## WordPress Settings

### Blog posts per page

The number of posts shown on the homepage is controlled in WordPress:

```text
Settings → Reading → Blog pages show at most
```

### Site title and tagline

The site title and tagline can be changed under:

```text
Settings → General
```

The theme uses WordPress's `title-tag` support for page titles.

## Templates

### `index.php`

Main blog feed / fallback posts template.

Displays:

- Post title
- Date
- Categories
- Excerpt
- Read more link
- Comment count
- Pagination

### `single.php`

Full individual blog post template.

Displays:

- Post title
- Date
- Author
- Categories
- Full post content
- Michelle signature artwork
- Comment badge
- Comments section

### `page.php`

Used for standard WordPress pages.

The `/moi/` page can include additional profile artwork or framing using:

```php
is_page( 'moi' )
```

### `comments.php`

Handles:

- Comment form
- Existing comments
- Comment metadata
- Avatars
- Moderation notices
- Comment pagination

### `404.php`

Custom "page not found" layout using the Dreaming Arcadia design.

## Styling

The main stylesheet is:

```text
style.css
```

The stylesheet includes styling for:

- Header
- Navigation
- Post cards
- Post content
- Category tags
- Read more buttons
- Comment badges
- Comment form
- Submitted comments
- Pagination
- Blockquotes
- Footer
- Responsive breakpoints

## Fonts

The theme uses Google Fonts:

- **Cormorant Garamond** — headings and decorative typography
- **Nunito** — body copy and UI text

## Theme Setup

The theme uses `functions.php` to:

- Enqueue `style.css`
- Enable WordPress `title-tag` support

Example:

```php
function dreaming_arcadia_enqueue_styles() {
    wp_enqueue_style(
        'dreaming-arcadia-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}

add_action(
    'wp_enqueue_scripts',
    'dreaming_arcadia_enqueue_styles'
);

function dreaming_arcadia_setup() {
    add_theme_support( 'title-tag' );
}

add_action(
    'after_setup_theme',
    'dreaming_arcadia_setup'
);
```

## Credits

Theme design and development by **Vizune**.

Created for **Dreaming Arcadia**.

---

Made with ♡ and daydreams.
