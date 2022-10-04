<?php
function webpack_theme_scripts() {
  wp_register_script("main.js", get_template_directory_uri() . "/public/main.js", [], 1, true);
  wp_enqueue_script("main.js");

  // wp_register_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js", array(), false, true);
  // wp_enqueue_script("gsap");
}

add_action("wp_enqueue_scripts", "webpack_theme_scripts");

function webpack_theme_styles() {
  wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
  wp_enqueue_style("main.css", get_template_directory_uri() . "/public/main.css", [], 1, "all");
}

add_action("wp_enqueue_scripts", "webpack_theme_styles");
