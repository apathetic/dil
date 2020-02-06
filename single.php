<?php get_header(); ?>
<?php get_sidebar() ?>

<div id="container">
	<main>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="art">
			<?php
				if (has_post_thumbnail( $post->ID ) ) {
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
					echo '<img src="'.$image[0].'" alt="" />';
				}
				echo '<h3>'.get_the_title().'</h3>';
				the_content();
			?>

		</article>

	<?php endwhile; endif; ?>

	</main>
</div>

<?php get_footer(); ?>
