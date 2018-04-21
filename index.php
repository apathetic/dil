<?php $images = array('Studio A', 'Studio C', 'Studio D', 'Studio E', 'Studio F', 'Studio G', 'Studio H'); // any 3 of these get selected ?>
<?php $images = array(        88, 29, 34); // any 3 of these get selected ?>

<?php get_header(); ?>

	<main class="splash">

	<?php
		foreach($images as $image) :
			if (has_post_thumbnail( $image ) ) {
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $image ), 'medium' );
				echo '<div>';
				echo '<img src="'.$image_url[0].'" alt="" />';
				// echo '<h4>'.get_the_title($image).'</h4>';
				echo '</div>';
			}
		endforeach;
	?>

	</main>

<?php get_footer(); ?>