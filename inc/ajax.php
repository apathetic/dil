<?

add_action( 'wp_ajax_fetch', 'fetch' );
add_action('wp_ajax_fetch', 'fetch');
function fetch() {

	global $wpdb;
	$errors = array();
	$success = false; // unless told otherwise

	$filter = isset($_REQUEST['filter']) ? $_REQUEST['filter'] : die('internet is broken');
	$term = isset($_REQUEST[$filter]) ? $_REQUEST[$filter] : die(-1);



	$output = '';


	$posts = get_posts(array(
		// 'tag'=>$term,
		'post_status'=>'draft',
		'posts_per_page'=>3
	));
	foreach ($posts as $post) : setup_postdata($post);

/*		<article id="post-'. $post->ID .'">
		 	<?php if (function_exists(\'get_the_post_thumbnail\')) echo get_the_post_thumbnail( $post->ID, \'thumbnail\' ); ?> 
			<h3><a href="'.get_permalink($post->ID).'" rel="bookmark" title="Permanent Link to '.$post->title_attribute.'">'.$post->post_title.'</a></h3>
			'.$post->post_excerpt.'
		</article>
*/

		$output .= '<article class="brief" id="post-'.$post->ID.'">';
		$output .= '	<h3><a href="'.get_permalink($post->ID).'" rel="bookmark" title="Permanent Link to '.$post->title_attribute.'">'.$post->post_title.'</a></h3>';
		$output .= '	<h6>'.the_time('l, F jS, Y').'</h6>';
		$output .= 		get_the_excerpt();
		$output .= '</article>';

	endforeach;

	echo '<h3>Articles in <span>'.$term .'</span></h3>';
	echo $output;
	exit;

}