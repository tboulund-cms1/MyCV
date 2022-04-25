<?php
function register_css_and_js() {
    wp_enqueue_style("roboto-font", "https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome", get_stylesheet_directory_uri() . "/css/font-awesome.css");
    wp_enqueue_style("theme", get_stylesheet_directory_uri() . "/style.css");

    wp_enqueue_script("jquery", get_stylesheet_directory_uri() . "/js/jquery-1.11.3.min.js", [], true);
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", [], true);
    wp_enqueue_script("main", get_stylesheet_directory_uri() . "/js/main.js", [], true);
}
add_action("wp_enqueue_scripts", "register_css_and_js");