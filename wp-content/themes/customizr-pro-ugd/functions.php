<?php
/* ANDY CUSTOM */
add_action( 'wp_enqueue_scripts', 'my_google_font' );
function my_google_font() {
	wp_enqueue_style( $handle = 'my-google-font', $src = 'https://fonts.googleapis.com/css?family=Caveat|Caveat+Brush', $deps = array(), $ver = null, $media = null );
}
?>
