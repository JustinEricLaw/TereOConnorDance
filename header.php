<!DOCTYPE HTML>
<html>
  <head>

    <meta charset="UTF-8" />
    <title><?php wp_title('|', 'true', 'right'); ?>Tere O’Connor Dance</title>

    <!-- Viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  
    <?php wp_head(); ?>

  </head>


  <body lang="en" <?php body_class(); ?>>
    <div class="header">
      <div class="nav-container">  
        <div class="menu-button">
          <span class="icon-menu"></span>
          <h6>Menu</h6>
        </div>
        <nav class="navbar">

          <?php
            $defaults = array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'menu_class' => 'flexnav',
              'items_wrap' => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>'
            );
        
            wp_nav_menu($defaults);
          ?>

          <!--
          <ul class="flexnav" data-breakpoint="800">
            <li><a href="<?php bloginfo('url'); ?>">News</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/teaching">Teaching</a></li>
            <li><a href="/calendar">Calendar</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/media">Media</a></li>
            <li><a href="/bleed">Bleed</a></li>
            <li><a href="/donate">Donate</a></li>
          </ul>
          -->
        </nav>
      </div>
    </div>