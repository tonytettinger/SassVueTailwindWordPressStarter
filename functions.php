<?php

function scripts() {
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); 
  wp_enqueue_style('maincss',get_template_directory_uri(). '/dist/app.css', '1.1' );
  wp_enqueue_script('jquery');
  wp_enqueue_script('vue', get_template_directory_uri() . '/dist/vue.js', null, null, true);
  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery', 'vue'], '1.2', true);
  wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');