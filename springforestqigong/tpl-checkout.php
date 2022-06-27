<?php
/**
* Template Name: Checkout Page*
*/
get_header(); ?>

   <section class="section__ checkout__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          </div>


        <?php the_content(); ?>
        </div>
      </div>
      
</section>

<?php get_footer();