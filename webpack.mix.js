const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);

mix.copy("resources/admin-lte", "public/admin-lte");

mix.js(
    "resources/js/pages/charts_inline.js",
    "public/js/pages/charts_inline.js"
);

mix.js("resources/js/pages/ui_sliders.js", "public/js/pages/ui_sliders.js");
mix.js("resources/js/pages/ui_modals.js", "public/js/pages/ui_modals.js");
mix.js("resources/js/pages/ui_ribbons.js", "public/js/pages/ui_ribbons.js");
