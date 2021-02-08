<?php

function sycamore_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Archivo+Black');

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400');

  wp_enqueue_script('ion-icons', '//unpkg.com/ionicons@5.4.0/dist/ionicons.js');

  wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js');

  wp_enqueue_script('form', get_theme_file_uri('/js/form.js'), NULL, '1', true);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1', true);

  wp_enqueue_style('sycamore_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'sycamore_files');

?>