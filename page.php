<?php $slug = basename(get_permalink()); ?>
<?php get_header(); ?>
<?php get_sidebar() ?>

  <div id="container">
    <main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article>

        <?php the_content(); ?>

      </article>

    <?php endwhile; endif; ?>

    </main>
  </div>

<?php get_footer(); ?>
