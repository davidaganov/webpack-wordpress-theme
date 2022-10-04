<?php
/*
Template Name: News Post
Template Post Type: post
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <?php get_template_part("src/components/base/Head"); ?>
  <body>
    <?php get_template_part("src/components/TheHeader"); ?>

    <main>
      <?php
      while (have_posts()):
        the_post();
      ?>

      <section class="single-post" id="single-post">
        <div class="single-post__inner inner">
          <article id="single-post__body post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- Content -->
          </article>
        </div>
      </section>

      <?php endwhile; ?>
    </main>
    <?php get_template_part("src/components/TheFooter"); ?>
  </body>
</html>
