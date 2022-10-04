<?php
  add_filter("nav_menu_link_attributes", "filter_nav_menu_link_attributes", 10, 3);
  function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === "Main") {
      $atts["class"] = "navbar__item";

      if ($item->current) {
        $atts["class"] .= " navbar__item--active";
      };

      if ($item->ID === 125 && in_category("news")) {
        $atts["class"] .= " navbar__item--active";
      };
    };

    return $atts;
  };
?>
