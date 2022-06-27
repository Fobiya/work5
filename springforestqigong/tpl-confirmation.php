<?php
/**
* Template Name: Сonfirmation Page*
*/
get_header(); ?>

    <section class="section__ confirmation__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 x12">
            <div class="block__confirmat"><img class="check" src="<?= get_template_directory_uri(); ?>/img/confirmation__1_check.svg" alt="menu">
              <h3 class="title">Your Order is Complete</h3>
              <p>You will be receiving a confirmation email with order details.</p><a class="orange" href="/">Go Back Home</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
              <?php the_content(); ?>
      </div>
      </div>
      </div>
      
    </section>
    
    

    

    
    
<?php get_footer();