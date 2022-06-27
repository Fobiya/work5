<?php
/**
* Template Name: Cart Page*
*/
get_header(); ?>

   
    <section class="section__ cart__1">
     
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          </div>
        </div>
      </div>
      <div class="container">
        <?php the_content(); ?>
      
      </div>
   
   
   
    </section>



<?php get_footer();