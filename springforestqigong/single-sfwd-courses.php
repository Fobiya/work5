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

?>
     
    
    <section class="section__ overview__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l7 xl8">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            
            <h2 class="title"><?php the_title(); ?></h2>
            
            
            
            <p><?php $rrrtext =  get_the_content(); echo wp_trim_words( $rrrtext, 45, ' ...' );  ?></p>
            
  
            
            <div class="block__accaunt">
              <div class="box__avatar"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/avatar_n.png" alt="avatar_n"></div>
              <div class="created-by">
                <div class="top">Created by</div>
                <p>Instructor’s name</p>
              </div>
              <div class="categories">
                <div class="top">Categories</div>
                <p>           <?php 
     
                $cats = wp_get_post_terms( $postid, 'ld_course_category' );
                if ($cats){
                  $num = count($cats);
                  $i=1;
                  foreach ($cats as $cat){
                    echo $cat->name;
                    echo ($i != $num) ? ',' : '';
                    $i++;
                  }
                } else {
                  echo "Uncategorized";
                }
                ?></p>
              </div>
              <div class="review">
                <div class="top">Review</div>
                <p><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/star-4.svg" alt="star">4 (3 reviews)</p>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l5 xl4">
            <div class="box__form"><a class="play" href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/video.png" alt="video"></a>
              <div class="blocl__prise">
                <div class="price">$0.00<span>$0.00</span></div>
                <div class="block">00% Off</div>
              </div><a class="orange" href="javascript:;">Buy this Course</a>
              <ul class="list">
                <li><span class="left">Duration</span><span class="right">0h 0m</span></li>
                <li><span class="left">Lessons</span><span class="right">Number</span></li>
                <li><span class="left">Enrolled</span><span class="right">YY</span></li>
                <li><span class="left">Language</span><span class="right">Language</span></li>
                <li><span class="left">Skill</span><span class="right">Skill level</span></li>
                <li><span class="left">Deadline</span><span class="right">MM, YY</span></li>
                <li><span class="left">Certificate</span><span class="right">Yes</span></li>
              </ul><a class="share" href="javascript:;">Share the Course</a>
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
              <li><a href="javascript:;" data-tab="2">Curriculum</a></li>
              <li><a href="javascript:;" data-tab="3">Instructor</a></li>
              <li><a href="javascript:;" data-tab="4">FAQs</a></li>
              <li><a href="javascript:;" data-tab="5">Review</a></li>
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
                <?php the_content(); ?>
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
                <h3 class="title">Curriculum Description</h3>
                   <?php 
                
                echo do_shortcode("[course_content course_id=$postid]"); 
             
                ?>
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
                <h3 class="title">Instructor Description</h3>
     
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
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
              </li>
              <li>
                <h3 class="title">FAQs Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
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
              </li>
              <li>
                <h3 class="title">Review Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
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
              </li>
            </ul>
          </div>
        </div>
      </div>
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
              <div class="block__img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/related_courses.png" alt="logo_w"></div>
              <div class="block__content">
                <h3 class="title">Online Study</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">Add to card</a>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l6 xl6">
            <div class="related_courses">
              <div class="block__img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/related_courses.png" alt="logo_w"></div>
              <div class="block__content">
                <h3 class="title">Online Study</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">Add to card</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php get_footer();