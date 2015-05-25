<?php get_header(); ?>
  
  <div class="hero-img-home hero">
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
      <h2>News</h2>
    </div>
  </div>

    <div class="container-content">
      <div class="news-container">
      
      <?php         

        $the_query = new WP_Query(array(
        'post_type' => 'news',  // Name of custom post type
        'posts_per_page' => -1,  // -1 means "all of them"
        'orderby' => 'menu_order'  // Order by ReOrder plugin
        ));

        while ($the_query->have_posts()) : 
          $the_query->the_post(); 
      ?>

      <div class="news-item">
        <article>
          <p class="news-date"><?php the_field('news_date'); ?></p>
          <h4 class="news-title"><?php the_field('news_title'); ?></h4>
          <p class="news-entry"><?php the_field('news_entry', false, false); ?></p>
        </article>
      </div>

      <?php endwhile; ?>


    </div>
  </div>

<?php get_footer(); ?>
