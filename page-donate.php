<?php
  /*
  Template Name: Donate
  */
?>


<?php get_header(); ?>
  
  <div class="hero-img-donate hero">
    <div class="hero-overlay">
      <div class="container-header">
        <h1>
          <span>Tere</span><br />
          <span>O'Connor</span><br />
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

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else : ?>
	       <p><?php _e( 'Sorry, no pages found.' ); ?></p>
        <?php endif; ?>

    </div>
  </div>

<?php get_footer(); ?>

