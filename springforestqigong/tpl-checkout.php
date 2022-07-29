<?php
/**
* Template Name: Checkout Page*
*/
get_header(); 

  $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $urlParts = parse_url($url);
  $path = $urlParts['path'];
  $subdomain = explode('/', $path);

?>

   <section class="section__ checkout__1">
      <div class="container">
       
         
            
        <div class="row">
           <div class="col m12 s12 l12 xl12">
            <?php if ( function_exists( 'dimox_breadcrumbs_notrow' ) ) dimox_breadcrumbs_notrow(); ?>
<?php  if ($subdomain[3] == ''){ ?>
            <a class="border_orange" href="/cart/">Go Cart</a>
<?php }else if ($subdomain[3] == 'order-received'){  } ?> 

  
          </div>
          <div class="col m12 s12 l12 xl12">

             <?php the_content(); ?>
        
          </div>
        </div>
        
      </div>
      
</section>

<?php get_footer();