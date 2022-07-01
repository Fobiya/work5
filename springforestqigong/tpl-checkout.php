<?php
/**
* Template Name: Checkout Page*
*/
get_header(); ?>

   <section class="section__ checkout__1">
      <div class="container">
       
         
            
        <div class="row">
           <div class="col m12 s12 l12 xl12">
            <?php if ( function_exists( 'dimox_breadcrumbs_notrow' ) ) dimox_breadcrumbs_notrow(); ?>

            <a class="border_orange" href="/cart/">Go Cart</a>
          </div>
          <div class="col m12 s12 l12 xl12">

             <?php the_content(); ?>
        
          </div>
        </div>
        
      </div>
      
</section>

<?php get_footer();