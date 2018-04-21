<?php
/*
Template Name: Gallery
*/

global $post;


$slug = basename(get_permalink());
$cat = get_term_by('slug', $slug, 'category');

// if ($cat == false) {
// 	$postid = url_to_postid(get_permalink());
// 	$cat = get_term_by('id', $postid, 'category');
// 	$slug = '';
// }

$cat = $cat->term_id;
$posts = get_posts( array('category' => $cat, 'numberposts' => -1 ));		// here's the trick; we get posts where the category name is the same as the page name

get_header();

// ▲ ▼  ◄ ► ◀ ▶


?>

	<main class="gallery <?php echo $slug ?>">

		<section id="artwork">
		<?php
			$i = 1;
			foreach( $posts as $post ) : setup_postdata($post); ?>
			<article id="image-<?php echo $i++ ?>" class="art">
				<?php
					if (has_post_thumbnail( $post->ID ) ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
						// $show_full = get_post_meta( $post->ID, 'fullsize', true);

            echo '<img src="'.$image[0].'" alt="Dil Hildebrand - '.get_the_title().'" />';

						echo '<h3>'.get_the_title().'</h3>';
						echo '<p>'.get_the_content();

						$landscape = $image[1]/$image[2] > 1;

						if ($landscape) {
							$full_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
							echo ' (<a href="' . $full_src[0] . '" title="' . the_title_attribute('echo=0') . '" target="_blank">view full size</a>)';
						}

						echo '</p>';
					}
				?>
			</article>
			<br />
		<?php endforeach; ?>
		</section>

	</main>

<?php get_footer(); ?>
