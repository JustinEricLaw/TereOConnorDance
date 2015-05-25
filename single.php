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

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="blog-item">
          <article>
            <div class="news-date"><?php the_time('F j, Y'); ?></div>
            <h4 class="news-title"><?php the_title(); ?></h4>
            <?php the_content(); ?>
            <?php comments_template(); ?>
        </div>

      <?php endwhile; else : ?>
	       <p><?php _e( 'Sorry, no posts found.' ); ?></p>
      <?php endif; ?>

    </div>
  </div>

<?php get_footer(); ?>

