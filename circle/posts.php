<?php
	// SORTS ALL OF THE WORDPRESS POSTS BY DATE IN DESCENDING ORDER. INCLUDE IN OTHER FILES TO ACCESS POSTS
	// Include the wp-load'er
	define( 'WP_USE_THEMES', false );
    require( $_SERVER['DOCUMENT_ROOT'] . '/Blog/wp-load.php' );
    require( $_SERVER['DOCUMENT_ROOT'] . '/Blog/wp-blog-header.php');

	$postlist = get_posts( 'orderby=date&order=DESC&showposts=-1');
	$posts = array();
	foreach ( $postlist as $post ) {
	$posts[] += $post->ID;
	}
?>
