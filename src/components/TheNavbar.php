<div class="navbar">
  <div class="navbar__logo">
    <?php the_custom_logo(); ?>
  </div>
  <nav class="row" data-slide="1">
    <?php
      wp_nav_menu([
        "menu" => "Main",
        "container" => false,
        "menu_class" => "navbar__menu",
        "echo" => true,
        "fallback_cb" => "wp_page_menu",
        "items_wrap" => '<ul class="navbar__menu">%3$s</ul>',
        "depth" => 1
      ]);
    ?>
  </nav>
</div>
