<!DOCTYPE html>
<html lang="es-mx">

<head>
   <!-- <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tema Personal PHP</title>
   <meta name="author" content="oramirezj">
   <meta name="description" content="Practice to 'Became a WordPress Developer'">
   <link rel="stylesheet" href="style.css"> -->
   <?php wp_head(); ?>
</head>

<body>
   <main>
      <header class="site-header">
         <div class="container">
            <h1 class="school-logo-text float-left">
               <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
                  aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
               <nav class="main-navigation">
                  <ul>
                     <li><a href="<?php echo site_url('./?page_id=12') ?>">About Us</a></li>
                     <li><a href="#">Programs</a></li>
                     <li><a href="#">Events</a></li>
                     <li><a href="#">Campuses</a></li>
                     <li><a href="#">Blog</a></li>
                  </ul>
               </nav>
               <div class="site-header__util">
                  <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                  <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                  <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
               </div>
            </div>
         </div>
      </header>

   </main>