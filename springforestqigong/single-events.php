<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package springforestqigong
 */

get_header(); 

$postid = get_the_ID();

global $wpdb;
// $course_id = get_the_id();

// $sql_query = "SELECT * FROM `wp_postmeta` WHERE `meta_key` = '_related_course' AND `meta_value` LIKE '%$course_id%'";
// $sql_query = $wpdb->prepare( $sql_query);
// $res = $wpdb->get_results($sql_query);

// $product_id = $res[0]->post_id;
// $product = wc_get_product( $product_id );

?>


<section class="section__ overview__1 background">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l7 xl8">
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

        <h2 class="title"><?php the_title(); ?></h2>



        <p><?php $rrrtext =  get_the_content(); echo wp_trim_words( $rrrtext, 45, ' ...' );  ?></p>



        <div class="block__accaunt">
          <div class="box__avatar"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/avatar_n.png"
              alt="avatar_n"></div>
          <div class="created-by">
            <div class="top">Teacher</div>
            <p>Master Chunyi Lin</p>
          </div>
          <div class="categories">
            <div class="top">Level</div>
            <p> <?php 
     
                // $cats = wp_get_post_terms( $postid, 'ld_course_category' );
                // if ($cats){
                //   $num = count($cats);
                //   $i=1;
                //   foreach ($cats as $cat){
                //     echo $cat->name;
                //     echo ($i != $num) ? ',' : '';
                //     $i++;
                //   }
                // } else {
                //   echo "Uncategorized";
                // }
                ?>
              Basics</p>
          </div>
          <div class="review">
            <div class="top">Duration</div>
            <p>
              <!--<img class="logo__img" src="<?//= get_template_directory_uri(); ?>/img/star-4.svg" alt="star">-->
              1h 30m all course
            </p>
          </div>
          <div class="created-by">
            <div class="top">Location</div>
            <p>Online</p>
          </div>

        </div>
      </div>
      <div class="col m12 s12 l5 xl4">
        <div class="box__form"><a class="play" href="javascript:;"><img class="logo__img"
              src="<?= get_template_directory_uri(); ?>/img/video.png" alt="video"></a>
          <div class="blocl__prise">

            <div class="price">$0.00<?php //echo $product->get_regular_price(); ?>
              <?php 
                
                  // $discount = ((float)$product->get_regular_price() - (float)$product->get_sale_price())/(float)$product->get_regular_price()*100;
                  ?>
              <span><?php //echo ($product->get_sale_price()) ? '$'.$product->get_sale_price() : ''; ?></span>

            </div>
            <?php //echo($product->get_sale_price()) ?  '<div class="block">'.number_format($discount,0).'% Off</div>' : ''; ?>
            <div class="block">00% Off</div>

          </div><a class="orange" href="<?php //echo $product->add_to_cart_url(); ?>">Buy a Ticket</a>
          <ul class="list">
            <li><span class="left">Level</span><span class="right">Basics</span></li>
            <li class="parent-list"><span class="left">Sessions</span><span class="right">3</span></li>
            <li class="child-list"><span class="left-child">1</span><span class="right-child">Monday, July 18: 9:00 AM -
                12:00 PM</span></li>
            <li class="child-list"><span class="left-child">2</span><span class="right-child">Monday, July 18: 9:00 AM -
                12:00 PM</span></li>
            <li class="child-list last"><span class="left-child">3</span><span class="right-child">Monday, July 18: 9:00
                AM - 12:00 PM</span></li>
            <li><span class="left">Duration</span><span class="right">1h 30m (30 m each session)</span></li>
            <li><span class="left">Certificate</span><span class="right">Yes</span></li>
            <!-- <li><span class="left">Deadline</span><span class="right">MM, YY</span></li>
            <li><span class="left">Certificate</span><span class="right">Yes</span></li> -->
          </ul><a class="share" href="javascript:;">Share the Event</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section__ overview__2">
  <div class="container filter">
    <div class="row">
      <div class="col m12 s12 l7 xl8">
        <ul class="tab__overview">
          <li class="active"><a href="javascript:;" data-tab="1">Overview</a></li>
          <li><a href="javascript:;" data-tab="2">Teacher and reviews</a></li>
          <li><a href="javascript:;" data-tab="3">More about class</a></li>
          <li><a href="javascript:;" data-tab="4">FAQs</a></li>
          <!-- <li><a href="javascript:;" data-tab="5">Review</a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l5 xl8">
        <ul class="tab__content">
          <li class="active">
            <!-- <h3 class="title">Overview Description</h3> -->
            <p class="title"><?php the_content(); ?></p>
            <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
                <div class="block__read_more">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p><a class="border_orange" href="javascript:;">Read more</a>
                </div>
                <h3 class="title">Lorem ipsum dolor sit amet</h3>
                <ul class="list check">
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                  <li>Lorem ipsum dolor sit ame</li>
                </ul>
                <h3 class="title">Lorem ipsum</h3>
                <ul class="list dots">
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
                </ul>
              </li> -->
          <li>
            <?php 
                
                //echo do_shortcode("[course_content course_id=$postid]"); 
             
                ?>

            <div class="teacher-info">
              <div class="block__img"><img class="logo__img"
                  src="<?= get_template_directory_uri(); ?>/img/chunyi-Lin.png" alt="teacher-image"></div>
              <div class="block__content">
                <h3 class="title">Chunyi Lin</h3>
                <p>Master Qi gong</p>
              </div>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
            <div class="block__read_more mb">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p><a class="border_orange" href="javascript:;">Read
                more</a>
            </div>

            <!-- <h3 class="title">Lorem ipsum dolor sit amet</h3>
            <ul class="list check">
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
            </ul>
            <h3 class="title">Lorem ipsum</h3>
            <ul class="list dots">
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
            </ul> -->
          </li>
          <li>
            <h3 class="title">Requirements</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

            <div class="div-levels">
              <img src="<?= get_template_directory_uri(); ?>/img/check-icon.png" alt="check-icon">
              <p>Spring Forest Qigong level 1</p>
            </div>
            <div class="div-levels">
              <img src="<?= get_template_directory_uri(); ?>/img/check-icon.png" alt="check-icon">
              <p>Spring Forest Qigong level 2</p>
            </div>
            <div class="div-levels">
              <img src="<?= get_template_directory_uri(); ?>/img/check-icon.png" alt="check-icon">
              <p>Spring Forest Qigong level 3</p>

            </div>

            <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
            <div class="block__read_more">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p><a class="border_orange" href="javascript:;">Read
                more</a>
            </div> -->
            <!-- <h3 class="title">Lorem ipsum dolor sit amet</h3>
            <ul class="list check">
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
            </ul> -->
            <!-- <h3 class="title mt">More</h3>
            <ul class="list dots">
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
            </ul> -->
          </li>
          <li>
            <h3 class="title">Refunds</h3>
            <p>All approved refunds are subject to an administration fee to offset system and financial charges.
              This fee is based on the per person registration fee for the event or program and will be
              discussed at the time of the request.</p>
            <p>100% attendance is required for all Spring Forest Qigong classes. This policy applies to both online
              and in-person classes, and to multi-session classes. If you miss part of a class, the registration
              fee is not refundable. Depending on how much of the class content is missed, your certificate of
              completion may not be granted. To earn a certificate of completion, you will then have to take the
              entire class again. Alternatively, it may be possible to make up missed class time through a
              coaching session with your teacher.</p>
            <div class="block__read_more">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p><a class="border_orange" href="javascript:;">Read
                more</a>
            </div>
            <h3 class="title">Lorem ipsum dolor sit amet</h3>
            <ul class="list check">
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
            </ul>
            <h3 class="title">Lorem ipsum</h3>
            <ul class="list dots">
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
            </ul>
          </li>
          <li>
            <h3 class="title">Review Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
            <div class="block__read_more">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea</p><a class="border_orange" href="javascript:;">Read
                more</a>
            </div>
            <h3 class="title">Lorem ipsum dolor sit amet</h3>
            <ul class="list check">
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
              <li>Lorem ipsum dolor sit ame</li>
            </ul>
            <h3 class="title">Lorem ipsum</h3>
            <ul class="list dots">
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <section class="section__ single__2">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl12">
          <div class="testimonials_slider">
            <div>
              <div class="block__">
                <div class="box_img"><img class="logo__img"
                    src="<?= get_template_directory_uri(); ?>/img/chunyi-Lin.png" alt="face"></div>
                <div class="box_content">
                  <p>My life mission is to create "A Healer in Every Home and a World without Pain and Suffering." I am
                    very grateful for Qigong Master Gadu Doushin for sharing Spring Forest Qigong in his community and
                    helping achieve this vision.</p>
                  <p class="author">- Chunyi Lin, Qigong Master, The Founder and Creator of Spring Forest Qigong</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col m12 s12 l8 xl8">
        <h3 class="title">Related Courses</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <div class="related_courses">
          <div class="block__img"><img class="logo__img"
              src="<?= get_template_directory_uri(); ?>/img/related_courses.png" alt="logo_w"></div>
          <div class="block__content">
            <h3 class="title">Online Study</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a
              class="border_orange" href="javascript:;">Add to card</a>
          </div>
        </div>
      </div>
      <div class="col m12 s12 l6 xl6">
        <div class="related_courses">
          <div class="block__img"><img class="logo__img"
              src="<?= get_template_directory_uri(); ?>/img/related_courses.png" alt="logo_w"></div>
          <div class="block__content">
            <h3 class="title">Online Study</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a
              class="border_orange" href="javascript:;">Add to card</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();