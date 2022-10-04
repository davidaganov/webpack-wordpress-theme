const mix = require("laravel-mix");

mix.js("src/assets/js/main.js", "").setPublicPath("public");
mix.sass("src/assets/sass/main.sass", "").setPublicPath("public");

