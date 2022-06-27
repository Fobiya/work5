<?php
/**
* Template Name: Booking Event Page*
*/
get_header(); ?> 

    
    <section class="section__ booking_event__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            
            <h2 class="title"><?php the_title(); ?></h2>
          </div>
          <div class="col m12 s12 l12 xl12">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
    

    
<?php get_footer();