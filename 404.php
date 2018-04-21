<?php get_header(); ?>

	<main>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article>

			<p>Error 404 - The page you were looking for was not found. Please try again!</p>

		</article>

	<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>