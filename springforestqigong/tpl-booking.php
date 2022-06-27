<?php
/**
* Template Name: Booking Page*
*/
get_header(); ?> 

    
    <section class="section__ booking__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl6">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            
            <h2 class="title"><?php the_title(); ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </p>
            <a class="orange event" href="/booking-event-list/">Book Event</a>
          </div>
          <div class="col m12 s12 l12 xl6">
            <div class="box__img"><img class="images" src="<?= get_template_directory_uri(); ?>/img/booking__1_img.png" alt="booking__1_img"></div>
          </div>
        </div>
      </div>
    </section>

    
<?php get_footer();