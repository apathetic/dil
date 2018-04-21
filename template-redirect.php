<?php
/*
Template Name: Redirect
*/

// This template looks to see if there are any child pages under the current page. If so, we
// redirect to the first child page. Thus, the current page is never actually visited, and
// simply serves as a "placeholder" for the menu structure in this instance.

// NOTE: used for Selected Works --> to redirect to most current year

	global $post;
	$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
	if ($pagekids) {
		$firstchild = $pagekids[0];
		$location = get_permalink($firstchild->ID);
		wp_redirect($location);
	}
?>
