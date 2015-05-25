<?php
  /*
  Template Name: Projects
  */
?>


<?php get_header(); ?>
  
  <div class="hero-img-projects hero">
    <div class="hero-overlay">
      <div class="container-header">
        <h1>
          <span>Tere</span><br />
          <span>O’Connor</span><br />
          <span>Dance</span>
        </h1>
      </div>
    </div>
  </div>

  <div class="description-area">
    <div class="container-content">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>


  <div class="container-content">
    <div class="about-container">

      <?php
        $the_query = new WP_Query(array(
        'post_type' => 'project',  // Name of custom post type
        'posts_per_page' => -1,  // -1 means "all of them"
        'orderby' => 'menu_order'  // Order by ReOrder plugin
        ));

        while ($the_query->have_posts()) : 
          $the_query->the_post(); 
      ?>

      <article class="about-section">
        <h4 class="about-title"><?php the_field('project_title'); ?></h4>
        <p class="about-entry"><?php the_field('project_description', false, false); ?></p>
        <?php if( get_field('project_funding_information') ): ?>
          <p class="projects-funding"><?php the_field('project_funding_information', false, false); ?></p>
        <?php endif; ?>
      </article>

      <?php endwhile; ?>

    </div>
  </div>


<?php get_footer(); ?>

