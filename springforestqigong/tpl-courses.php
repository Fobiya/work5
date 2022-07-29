<?php
/**
* Template Name: Courses Page*
*
*/
get_header(); ?>

<section class="section__ courses__1">
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
            <li class="breadcrumbs__current">Courses</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <h2 class="title">Our original courses</h2>
      </div>
      <div class="col m12 s12 l6 xl6">
        <div class="block__img"><img class="check" src="<?= get_template_directory_uri(); ?>/img/courses__1_img.png"
            alt="menu"></div>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l4 xl4">
        <div class="box__filter">
          <p class="information">Showing 1–6 courses of 10 avaible now</p>
          <form method="POST" action="javascript:void(null);">
            <!-- Hidden Required Fields-->
            <div class="block__tab"><a class="title __tab" href="javascript:;">Category</a>
              <div class="box__select">
                <div class="form_input"><span class="field">
                    <input class="name" type="checkbox" name="Advanced" required="" value="Advanced"
                      placeholder="Advanced"></span></div>
              </div>
            </div>
            <div class="block__tab"><a class="title __tab" href="javascript:;">Instructors</a>
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
            <div class="block__tab"><a class="title __tab" href="javascript:;">Rating</a>
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
            <div class="block__flex">
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
            </div>
          </form>
        </div>
        <div class="block__post">


          <?php  $args = array(
            'order' => 'DESC', // order filter  last post
            'posts_per_page' => 20, // echo show three post 
  
   'post_type'  => 'sfwd-courses', // Post type category BLOG
//		   'category_name'  => $categories[0]->slug,
//			 'paged'  => $paged,
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>


          <div class="post__">
            <div class="block__img">
              <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?= get_template_directory_uri(); ?>/img/courses__1_post.png" alt="menu">
              </a>
            </div>
            <div class="block__content">
              <p class="catalog">Advanced</p>
              <h4 class="title__post"> <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <div class="star"><img src="<?= get_template_directory_uri(); ?>/img/star.png" alt="menu"></div>
              <div class="block"><span class="les">10 Lessons</span><span class="time">4h 30m</span></div>
              <div class="price"> <span>$0.00</span>$0.00</div>
            </div>
          </div>

          <?php
               // '<li class="ion-arrow-right-c"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
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
  </div>
</section>

<?php get_footer();