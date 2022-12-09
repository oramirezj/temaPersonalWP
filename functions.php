<?php

function archivosTemaPersonalWP()
{
   wp_enqueue_style('estilosTemaPersonalWP', get_stylesheet_uri()); /*Si se requieren más archivos se agregara una linea nueva por página que ocupemos*/
}

add_action('wp_enqueue_scripts', 'archivosTemaPersonalWP');