<?php
/**
* Template Name: Events Page*
*/
get_header(); ?>


<section class="section__ events__1">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
          <ul>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                class="breadcrumbs__link" href="https://springforesstg.wpengine.com/" itemprop="item"><span
                  itemprop="name">Home</span></a>
              <meta itemprop="position" content="1">
            </li>
            <li class="breadcrumbs__current">Events</li>
          </ul>
        </div>
      </div>
    </div>


    <!-- I met this here -->
    <!-- <div class="row">
      <div class="col m12 s12 l12 xl6">
        <h1 class="title">Emmy Lorem ipsum dolor sit amet, dolor</h1>
        <p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
      </div>
      <div class="col m12 s12 l12 xl6">
        <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_img.png" alt="logo_w"></div>
        <div class="block__right">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
            laoreet dolore magna aliquam erat volutpat. vulputate velit esse accumsan et iusto odio dignissim qui </p>
        </div>
      </div>
    </div> -->

    <div class="row h2-img">
      <div class="col m12 s12 l6 xl6">
        <h2 class="title-main">Events</h2>
      </div>
      <div class="col m12 s12 l6 xl6">
        <div class="block__img"><img class="check" src="<?= get_template_directory_uri(); ?>/img/events__2_img.png"
            alt="menu"></div>
      </div>
    </div>


    <!-- <div class="row">
      <div class="col m12 s12 l12 xl12">
        <h4 class="sub_title">Choose the best event for you</h4>
      </div>
    </div> -->

    <div class="row">
      <div class="col m12 s12 l4 xl4">
        <div class="box__filter">
          <p class="information">Showing 1–6 courses of 10 avaible now</p>
          <form method="POST" action="javascript:void(null);">
            <!-- Hidden Required Fields-->
            <div class="block__tab"><a class="title __tab" href="javascript:;">Program</a>
              <div class="box__select">
                <div class="form_input"><span class="field">
                    <input class="name" type="checkbox" name="Advanced" required="" value="Advanced"
                      placeholder="Advanced"></span></div>
              </div>
            </div>
            <div class="block__tab"><a class="title __tab" href="javascript:;">Event type</a>
              <div class="box__select">
                <div class="form_input"><span class="field">
                    <input class="name" type="checkbox" name="Advanced" required="" value="Advanced"
                      placeholder="Advanced"></span></div>
              </div>
            </div>
            <div class="block__tab"><a class="title __tab" href="javascript:;">By Month</a>
              <div class="box__select">
                <div class="form_input"><span class="field">
                    <input class="name" type="checkbox" name="Advanced" required="" value="Advanced"
                      placeholder="Advanced"></span></div>
              </div>
            </div>
            <div class="block__tab"><a class="title __tab" href="javascript:;">By teacher</a>
              <div class="box__select">
                <div class="form_input"><span class="field">
                    <input class="name" type="checkbox" name="Advanced" required="" value="Advanced"
                      placeholder="Advanced"></span></div>
              </div>
            </div>
            <div class="block__tab"><a class="title __tab" href="javascript:;">Price</a>
              <div class="box__select">
                <div class="form_input"><span class="field">
                    <input class="name" type="checkbox" name="Advanced" required="" value="Advanced"
                      placeholder="Advanced"></span></div>
              </div>
            </div>
            <button class="blue" type="submit" name="send">Show Result</button>
          </form>
        </div>
      </div>
      <div class="col m12 s12 l8 xl8">
        <div class="navigation__top">
          <form method="POST" action="javascript:void(null);">
            <!-- Hidden Required Fields-->
            <div class="block__flex">
              <div class="form_input"><span class="field search">
                  <input class="name" type="text" name="search" required="" value=""
                    placeholder="Search courses"></span></div>
            </div>
            <!-- <div class="block__flex">
              <div class="form_select">
                <select id="categories" name="categories">
                  <option value="1">All categories</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
            </div>
            <div class="block__flex">
              <div class="form_select">
                <select id="filter" name="filter">
                  <option value="1">Sort by: Newest</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
            </div> -->
          </form>
        </div>
        <div class="block__post">


          <?php
                $query = new WP_Query(array(
                  'post_type' => 'events',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  'numberposts' => -1
                ));
             
              while ($query->have_posts()) {
                  $query->the_post();
                  $post_content = get_the_content();
                  $pos1 = (strpos($post_content, '[ameliaevents event'));
                  $pos2 = (strpos($post_content, 'type=list]'));
                  $string = substr($post_content, $pos1, $pos2-$pos1);
                  
                  $event_id = (int) filter_var($string, FILTER_SANITIZE_NUMBER_INT); 
                  global $wpdb;
                  $event_price_string = $wpdb->get_row( "SELECT `price` FROM `wp_amelia_events` WHERE `id` = $event_id" );
                  $event_price = 	number_format((int)$event_price_string->price, 2, '.', ' ');
                 

            ?>


          <div class="post__">
            <div class="block__img">
              <a href="<?php echo get_the_permalink(); ?>">
                <!-- <img src="<?//= get_template_directory_uri(); ?>/img/courses__1_post.png" alt="menu"> -->
                <?php the_post_thumbnail('medium'); ?>
              </a>
            </div>
            <div class="block__content">
              <h4 class="title__post"> <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>

              <p class="catalog">Advanced</p>
              <!-- <div class="star"><img src="<?//= get_template_directory_uri(); ?>/img/star.png" alt="menu"></div> -->
              <div class="block"><span class="les">10 Lessons</span><span class="time">4h 30m</span></div>
              <div class="price"> <span>$0.00</span>$0.00</div>
            </div>
          </div>

          <?php
              //  '<li class="ion-arrow-right-c"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            }

        //  else {
        //     // no posts found
        // }
        /* Restore original Post Data */
        // wp_reset_postdata();
        wp_reset_query();
      ?>









        </div>
        <div class="paggination">
          <ul>
            <li><a class="prev" href="javascript:;"></a></li>
            <li><a href="javascript:;">1</a></li>
            <li><a href="javascript:;">2</a></li>
            <li><a class="next" href="javascript:;"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- PHP dynamic contents here -->
    <!-- <div class="row">
          <?php 
                // $query = new WP_Query(array(
                //       'post_type' => 'events',
                //       'post_status' => 'publish',
                //       'posts_per_page' => -1,
                //       'numberposts' => -1
                //   ));
                
                //   while ($query->have_posts()) {
                //       $query->the_post();
                //       $post_content = get_the_content();
                //       $pos1 = (strpos($post_content, '[ameliaevents event'));
                //       $pos2 = (strpos($post_content, 'type=list]'));
                //       $string = substr($post_content, $pos1, $pos2-$pos1);
                      
                //       $event_id = (int) filter_var($string, FILTER_SANITIZE_NUMBER_INT); 
                //       global $wpdb;
                //       $event_price_string = $wpdb->get_row( "SELECT `price` FROM `wp_amelia_events` WHERE `id` = $event_id" );
                //       $event_price = 	number_format((int)$event_price_string->price, 2, '.', ' ');
                    

          ?>
      <div class="col m6 s12 l4 xl4">
        <div class="block__catygory">
          <div class="catygory__img"><?php //the_post_thumbnail('medium'); ?></div>
          <div class="catygory__content">
            <h3 class="title__catygory"><?php// the_title(); ?></h3><span class="prise">$<?= $event_price; ?></span>
            <p><?php// the_excerpt(); ?></p><a class="border_orange" href="<?php// the_permalink(); ?>">View Item</a>
          </div>
        </div>
      </div>
      <?php
            // }
            //   wp_reset_query();
            ?>

    </div> -->
  </div>
</section>
<!-- <section class="section__ shop__2">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <h3 class="title">If you believe it, it works. If you don't believe it, it still works. If you believe it will
          work, it often works faster. Either way, it works, because Qi knows what to do.</h3><a class="author"
          href="javascript:;">- Chunyi Lin, Qigong Master</a>
      </div>
    </div>
  </div>
</section> -->





<?php if(0){ ?>
<footer class="main">
  <div class="container">
    <div class="row">
      <div class="col m5 s12 l4 xl3">
        <div class="box__logo"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/logo.svg"
            alt="logo_w"></div>
        <ul class="sosel">
          <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/face.svg"
                alt="face"></a></li>
          <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/twit.svg"
                alt="twit"></a></li>
          <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/pint.svg"
                alt="pint"></a></li>
          <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/Inst.svg"
                alt="Inst"></a></li>
          <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/yout.svg"
                alt="yout"></a></li>
        </ul>
      </div>
      <div class="col m7 s12 l8 xl4">
        <h4 class="title">Quick Links</h4>
        <ul>
          <li><a href="javascript:;">Lorem ipsum</a></li>
          <li><a href="javascript:;">Dolor sit amet</a></li>
          <li><a href="javascript:;">Consectetur</a></li>
          <li><a href="javascript:;">Adipiscing</a></li>
        </ul>
        <ul>
          <li><a href="javascript:;">Lorem ipsum</a></li>
          <li><a href="javascript:;">Dolor sit amet</a></li>
          <li><a href="javascript:;">Consectetur</a></li>
          <li><a href="javascript:;">Adipiscing</a></li>
        </ul>
      </div>
      <div class="col m7 s12 l8 xl5">
        <h3 class="title">Suspendisse laoreet mattis diam neque sed.</h3>
        <form method="POST" action="javascript:void(null);">
          <!-- Hidden Required Fields-->
          <div class="form_input"><span class="field">
              <input class="name" type="text" name="search" required="" value="" placeholder="Search"></span></div>
          <button class="orange" type="submit" name="send">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</footer>
<?php } ?>


<?php get_footer();