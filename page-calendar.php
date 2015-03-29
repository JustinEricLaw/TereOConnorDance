<?php
  /*
  Template Name: Calendar
  */
?>


<?php get_header(); ?>
  
  <div class="hero-img-calendar hero">
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
      <article class="calendar-section">
        <?php
        $the_query = new WP_Query(array(
        'post_type' => 'calendar',  // Name of custom post type
        'posts_per_page' => -1,  // -1 means "all of them"
        'orderby' => 'menu_order'  // Order by ReOrder plugin
        ));

        while ($the_query->have_posts()) : 
          $the_query->the_post(); 
        ?>

        <section class="cal-entry">
          <h5 class="cal-date"><?php the_field('calendar_date'); ?> | <?php the_field('calendar_time'); ?></h5>
          <div class="cal-list group">
            <p class="cal-city"><?php the_field('calendar_location'); ?></p>
            <p class="cal-venue"><?php the_field('calendar_venue'); ?></p>
            <p class="cal-title"><i><?php the_field('work_title'); ?></i></p>
            <p class="cal-button"><a href="<?php the_field('ticket_link'); ?>">Buy Tickets</a></p>
          </div>
        </section>

        <?php endwhile; ?>

      </article>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else : ?>
      <?php endif; ?>


    </div>
  </div>

<?php get_footer(); ?>

