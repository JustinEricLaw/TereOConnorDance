<?php get_header(); ?>
  
  <div class="hero-img-home hero">
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
      <h2>News</h2>
    </div>
  </div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
