<?php get_header(); ?>
  
  <div class="hero-img-blog hero">
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
      <h2>Blog</h2>
    </div>
  </div>

  <div class="container-content">
    <div class="about-container">

      <div>
        <h4 class="news-title">
          <?php wp_title(''); ?>Blog Posts ?></h4>
      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="news-item">
          <article>
            <p class="news-date"><?php the_time('F j, Y'); ?></p>
            <h4 class="news-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
              </a>
            </h4>
            <?php the_excerpt(); ?>
        </div>

      <?php endwhile; else : ?>
	       <p><?php _e( 'Sorry, no posts found.' ); ?></p>
      <?php endif; ?>

    </div>
  </div>

<?php get_footer(); ?>

