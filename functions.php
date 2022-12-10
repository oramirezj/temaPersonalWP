<?php

function archivosTemaPersonalWP()
{
   wp_enqueue_script('mainPersonalJS', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
   wp_enqueue_style('custome-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('estilosTemaPersonalWP', get_theme_file_uri('/build/style-index.css')); /*Si se requieren más archivos se agregara una linea nueva por página que ocupemos*/
   wp_enqueue_style('estilosExtrasTemaPersonalWP', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'archivosTemaPersonalWP');