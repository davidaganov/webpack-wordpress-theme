<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <?php get_template_part("src/components/base/Head"); ?>
  <body>
    <?php get_template_part("src/components/TheHeader"); ?>

    <main>
      <?php get_template_part("src/components/blocks/Content"); ?>
    </main>

    <?php get_template_part("src/components/TheFooter"); ?>
  </body>
</html>
