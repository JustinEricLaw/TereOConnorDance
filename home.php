<?php get_header(); ?>
  
  <div class="hero-img-blog hero">
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
      <h2>Blog</h2>
    </div>
  </div>

  <div class="container-content">
    <div class="about-container clearfix">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="news-item">
        <article>
          <p class="news-date"><?php the_time('F j, Y'); ?></p>
          <h4 class="blog-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h4>
          <?php the_excerpt(); ?> 
      </div>

      <?php endwhile; ?>

      <!-- Pagination functions here. -->
      <div class="pagination">
        <div class="nav-previous alignleft"><?php next_posts_link( 'Older Posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer Posts' ); ?></div>
      </div>

      <?php else : ?>
      <p><?php _e('Nothing to see here...'); ?></p>
      <?php endif; ?>

    </div>
  </div>

<?php get_footer(); ?>

