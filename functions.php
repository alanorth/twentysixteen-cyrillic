<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * Register Google fonts for Twenty Sixteen Cyrillic.
 *
 * @since Twenty Sixteen Cyrillic 0.9
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext,cyrillic';

	// Fira Sans for headers, body, etc.
	$fonts[] = 'Fira+Sans:400,400italic,700,700italic';

	// Fira Mono for monospace text.
	$fonts[] = 'Fira+Mono';

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

?>
