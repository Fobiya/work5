<?php
/**
* Template Name: Account Page*
*
*/
get_header(); ?>
    
<?php if ( is_user_logged_in() ) { 
  
  $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $urlParts = parse_url($url);
  $path = $urlParts['path'];
  $subdomain = explode('/', $path);
  // echo $subdomain[2];    //где номер[2] каталога  ?>

    <section class="section__ event__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <ul class="top">
              <li data-top="1"><a class="active" href="javascript:;">Account detals</a></li>
              <li data-top="2"><a href="javascript:;">MY ITEMS</a></li>
              <li data-top="3"><a href="javascript:;">QI LIBRARY</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row active">

          <div class="col m12 s12 l4 xl4">
            <ul class="menu__item account_detals"> 
              <li><a class="<?php if ($subdomain[2] == ''){ echo 'active ';  } ?>"  href="/my-account/" >Dashboard</a></li>
              <li><a class="<?php if ($subdomain[2] == 'orders'){ echo 'active ';  } ?>" href="/my-account/orders/" >Orders</a></li>
              <li><a class="<?php if ($subdomain[2] == 'downloads'){ echo 'active ';  } ?>" href="/my-account/downloads/" >Download</a></li>
              <li><a class="<?php if ($subdomain[2] == 'edit-address'){ echo 'active ';  } ?>" href="/my-account/edit-address/" >Addresses</a></li>
              <li><a class="<?php if ($subdomain[2] == 'payment-methods'){ echo 'active ';  } ?>" href="/my-account/payment-methods/" >Payment Methods</a></li>
              <li><a class="<?php if ($subdomain[2]== 'edit-account'){ echo 'active ';  } ?>" href="/my-account/edit-account/" >Account details</a></li>
              <hr>
              <li><a href="javascript:;" data-item="2">Customer portal</a></li> 
              <hr>
              <li><a class="logout"  href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></li>
            </ul>
          </div>
          
          <div class="col m12 s12 l8 xl8">

            <?php the_content(); ?>

            <div class="conteiner__my_items">
              <!-- <div class="qigong_downloads active">
                <h3 class="title">
                  Downloads
                </h3>
              </div> -->
                
              <div class="qigong_portal active">
                <h3 class="title">
                 Customer portal
                </h3>
                <?php echo do_shortcode('[ameliacustomerpanel appointments=1 events=1]');?>
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l4 xl4">
            <ul class="menu__item my_items">
              <li><a class="active" href="javascript:;" data-item="1">QIGONG COURSES</a></li>
              <li><a href="javascript:;" data-item="2">QIGONG MEDITATIONS</a></li>
              <li><a href="javascript:;" data-item="3">AUDIO PROGRAMS</a></li>
              <li><a href="javascript:;" data-item="4">EVENT RECORDINGS</a></li>
              <hr>
              <li><a class="logout"  href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></li>
            </ul>
          </div>
          <div class="col m12 s12 l8 xl8">
            <div class="conteiner__my_items">
              <div class="qigoing_courses active">
                <h3 class="title">Qigoing courses</h3>
                  <ul class="post__row">
                <?php 
                
                $product_ids = sfgGetBouthProducts(); //function placed in template-functions.php
                foreach ($product_ids as $product_id){
                  $product = wc_get_product($product_id);
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
                  $product_image = ($image[0]) ? $image[0] : '/wp-content/uploads/woocommerce-placeholder-300x300.png';
    
                ?>
                  <li>
                    <div class="box__img"><a href="/products/<?= $product ->slug; ?>"><img class="images" src="<?= $product_image; ?>" alt="<?= $product ->name; ?>"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="/products/<?= $product ->slug; ?>"><?= $product ->name; ?></a></h4>
                      <p><?= $product ->description; ?></p><a class="border_orange" href="/products/<?= $product ->slug; ?>">Watch</a>
                    </div>
                  </li>
                <?php
                }
                
                ?>
                <?php /* markup example
                  <li>
                    <div class="box__img"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/courses_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p><a class="border_orange" href="javascript:;">Watch</a>
                    </div>
                  </li>
                  */
                 ?>
                </ul>
              </div>
              <div class="qigoing_mediations">
                <h3 class="title">Qigoing mediations</h3>
                <ul class="post__">
                  <li>
                    <div class="box__img"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mus nec ...</p><a class="orange" href="javascript:;">Watch</a>
                    </div>
                  </li>
                  <li>
                    <div class="box__img"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mus nec ...</p><a class="orange" href="javascript:;">Watch</a>
                    </div>
                  </li>
                  <li>
                    <div class="box__img"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mus nec ...</p><a class="orange" href="javascript:;">Watch</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="audio_programs">
                <h3 class="title">Audio programs</h3>
                <ul class="post__">
                  <li>
                    <div class="box__img"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mus nec ...</p><a class="border_orange" href="javascript:;">Play</a>
                    </div>
                  </li>
                  <li>
                    <div class="box__img"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mus nec ...</p><a class="border_orange" href="javascript:;">Play</a>
                    </div>
                  </li>
                  <li>
                    <div class="box__img"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mus nec ...</p><a class="border_orange" href="javascript:;">Play</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="event_recordings">
                <h3 class="title">Event recordings</h3>
               
                <ul class="post__">
                  <li>
                    <div class="box__img video"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>12m 45s.</p>
                    </div>
                  </li>
                  <li>
                    <div class="box__img video"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>12m 45s.</p>
                    </div>
                  </li>
                  <li>
                    <div class="box__img video"><a href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/account__1_post.png" alt="account__1_post"></a></div>
                    <div class="box__content">
                      <h4 class="title_post"> <a href="javascript:;">Pellentesque leo.</a></h4>
                      <p>12m 45s.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l4 xl4">
            <ul class="menu__item qi_library">

              <li><a class="active" href="javascript:;" data-item="1">QI TALK</a></li>
              <li><a href="javascript:;" data-item="2"> Heart of wisdom</a></li>
              <hr>

              <li><a class="logout" href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></li>
            </ul>
          </div>

          <?php 
          /**
           * Get QI Talk posts
           */
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              $args = array(
                  'post_type'     => 'library',
                  'paged'         => $paged,
                  'numberposts'   =>  -1,
                  'posts_per_page' => 6,
                  'order'         => 'ASC',
                  'orderby'       => 'ID',
                  'tax_query'     => array(
                    array(
                        'taxonomy' => 'qi_library_types',
                        'field'    => 'slug',
                        'terms'    => 'qi-talk',
                    ),
 
                  ),
              );
              $the_query = new WP_Query( $args );
              
              if ( $the_query->have_posts() ) {
              
                  
                      
          ?>
          <div class="col m12 s12 l8 xl8">
            
            <div class="conteiner__qi_library">
              <div class="qi_takl active">
                <h3 class="title">Free Access to Everyone!</h3>
                <div class="ajax_talk">
                  <ul class="post__">

                  <?php 
                  while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $link = get_field('video_link');
                    $terms = get_the_terms(get_the_ID(),'qi_instructors');
                    $master = $terms[0]->name; 
                      if (strtotime(get_field('date')) > time() ) continue;
                      ?>
          
                    <li>
                      <div class="box__img"><iframe src="<?php echo $link['url']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
                      <div class="box__content">
                        <h4 class="title_post"> <?php the_title(); ?></h4>
                        <p>with <?php echo $master; ?></p>
      
                        
                      </div>
                    </li>

                    <?php 
                    }    
                      } 
                      echo paginate_links( array(
                          'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                          'total'        => $the_query->max_num_pages,
                          'current'      => max( 1, get_query_var( 'paged' ) ),
                          'format'       => '?paged=%#%',
                          'show_all'     => true,
                          'type'         => 'plain',
                          'end_size'     => 1,
                          'mid_size'     => 1,
                          'prev_next'    => true,
                          'prev_text'    => '<--',
                          'next_text'    => '-->',
                          'before_page_number' => '',
                          'after_page_number' => '',
                          'add_args'     => false,
                          'add_fragment' => '',
                      ) );

                      wp_reset_postdata();
                    ?>
                    
                  </ul>
                </div>
              </div>

              
              <div class="heart_of_wisdom">
                <h3 class="title">Heart of wisdom</h3>
                <div class="ajax_wisdom">
                  <ul class="post__">

                  <?php 
                    /**
                     * Get Heart Wisdom posts
                     */
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type'     => 'library',
                        'paged'         => $paged,
                        'numberposts'   =>  -1,
                        'posts_per_page' => 6,
                        'order'         => 'ASC',
                        'orderby'       => 'ID',
                        'tax_query'     => array(
                          array(
                              'taxonomy' => 'qi_library_types',
                              'field'    => 'slug',
                              'terms'    => 'heart-wisdom',
                          ),
                  
                        ),
                    );
                  $the_query = new WP_Query( $args );
                  
                  if ( $the_query->have_posts() ) {
                
                    while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      $video = get_field('video_link');
                      $audio = get_field('audio_link');
                      $terms = get_the_terms(get_the_ID(),'qi_instructors');
                      $master = $terms[0]->name; 
                        if (strtotime(get_field('date')) > time() ) continue;
                        ?>
            
                      <li>
                        <div class="box__content">
                          <h4 class="title_post"> <?php the_field('date')?> | <?php echo $master; ?></h4>
                          <p><?php the_title(); ?></p>
                        </div>
                        <?php 
                        if ($video){ ?>

                          <div class="box__img"><iframe src="<?php echo $video['url']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>

                          <?php } else { ?>

                          <div class="box_img"><audio src="<?php echo $audio['url']; ?>" controls="controls" style="height:100px"></audio></div>
                        
                          <?php } ?>

                        
                      </li>

                      <?php 
                      }    
                        } 
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $the_query->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => true,
                            'type'         => 'plain',
                            'end_size'     => 1,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => '<--',
                            'next_text'    => '-->',
                            'before_page_number' => '',
                            'after_page_number' => '',
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );

                        wp_reset_postdata();
                      ?>
                    
                  </ul>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </section>

<?php } else {  ?> 
 
     <section class="section__ event__1">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">

               <?php the_content(); ?>

            </div>
          </div>
         </div>
      </section>
      
<?php }  ?> 

<script>
  jQuery(function($) {
    
    $('.ajax_talk').on('click', 'a.page-numbers', function(e){
        e.preventDefault();
        let link = $(this).attr('href');
        $('.ajax_talk').fadeOut(500, function(){
            $(this).load(link + ' .ajax_talk', function() {
                $(this).fadeIn(500);
            });
        });
    });

    $('.ajax_wisdom').on('click', 'a.page-numbers', function(e){
        e.preventDefault();
        let link = $(this).attr('href');
        $('.ajax_wisdom').fadeOut(500, function(){
            $(this).load(link + ' .ajax_wisdom', function() {
                $(this).fadeIn(500);
            });
        });
    });
});
</script>
<?php get_footer('not');