<?php

function scripts() {
  wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('style');
  wp_enqueue_script('jquery');
  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery', 'vue'], 1, true);
  wp_enqueue_script('app');
  wp_enqueue_script('vue', get_template_directory_uri() . '/dist/vue.js', null, null, true);
}
add_action('wp_enqueue_scripts', 'scripts');