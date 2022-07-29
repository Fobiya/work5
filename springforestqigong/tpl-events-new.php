<?php
/**
* Template Name: Events New Page*
*/
get_header(); ?> 

    <section class="section__ events__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            
              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
 
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l6 xl6">
            <h2 class="title-main"><?php the_title(); ?></h2>
          </div>
          <div class="col m12 s12 l6 xl6">
            <div class="block__img"><img class="check" src="<?= get_template_directory_uri(); ?>/img/courses__1_img.png" alt="menu"></div>
          </div>
        </div>

       
        <?php $programms = get_field('programm_categories', 'option'); 
        usort($programms, function($a, $b) {return strcmp($a->name, $b->name);});
       
        //echo "<pre>";
       
        //var_dump($_POST['programm']);
       // echo "</pre>";
        ?>
      

        <div class="row">
          <div class="col m12 s12 l4 xl4">
            <div class="box__filter">
              <p class="information">Showing 1–6 courses of 10 avaible now</p>
              <form method="POST" action="">
                <!-- Hidden Required Fields-->
                <div class="block__tab"><a class="name__title __tab" href="javascript:;">Program</a>
                  <div class="box__select"> 

                    <?php 
                      $i = 1;
                      foreach ($programms as $programm){?>

                        <div class="input">
                          <input id="programm-<?= $i; ?>" type="checkbox" name="programm[]" value="<?= $programm -> slug; ?>">
                          <label for="programm-<?= $i; ?>"><?= $programm -> name; ?></label>
                        </div>

                    <?php 
                    $i++;
                    } ?>

                  </div>
                </div>
                <div class="block__tab"><a class="name__title __tab" href="javascript:;">Event type</a>
                  <div class="box__select"> 
                    <div class="input">
                      <input id="Classroom" type="checkbox" name="Classroom">
                      <label for="Classroom">Classroom</label>
                    </div>
                    <div class="input">
                      <input id="Healing" type="checkbox" name="Healing">
                      <label for="Healing">Healing reatreat</label>
                    </div>
                    <div class="input">
                      <input id="Meditation" type="checkbox" name="Meditation">
                      <label for="Meditation">Meditation reatreat</label>
                    </div>
                    <div class="input">
                      <input id="Certification" type="checkbox" name="Certification">
                      <label for="Certification">Certification</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                  </div>
                </div>
                <div class="block__tab"><a class="name__title __tab" href="javascript:;">By month</a>
                  <div class="box__select"> 
                    <div class="input">
                      <input id="Advanced" type="checkbox" name="Advanced">
                      <label for="Advanced">Advanced</label>
                    </div>
                    <div class="input">
                      <input id="Oigong" type="checkbox" name="Oigong">
                      <label for="Oigong">Oigong</label>
                    </div>
                    <div class="input">
                      <input id="Popular" type="checkbox" name="Popular">
                      <label for="Popular">Popular</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                  </div>
                </div>
                <div class="block__tab"><a class="name__title __tab" href="javascript:;">By teacher</a>
                  <div class="box__select"> 
                    <div class="input">
                      <input id="Advanced" type="checkbox" name="Advanced">
                      <label for="Advanced">Advanced</label>
                    </div>
                    <div class="input">
                      <input id="Oigong" type="checkbox" name="Oigong">
                      <label for="Oigong">Oigong</label>
                    </div>
                    <div class="input">
                      <input id="Popular" type="checkbox" name="Popular">
                      <label for="Popular">Popular</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                  </div>
                </div>
                <div class="block__tab"><a class="name__title __tab" href="javascript:;">By location</a>
                  <div class="box__select"> 
                    <div class="input">
                      <input id="Advanced" type="checkbox" name="Advanced">
                      <label for="Advanced">Advanced</label>
                    </div>
                    <div class="input">
                      <input id="Oigong" type="checkbox" name="Oigong">
                      <label for="Oigong">Oigong</label>
                    </div>
                    <div class="input">
                      <input id="Popular" type="checkbox" name="Popular">
                      <label for="Popular">Popular</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                  </div>
                </div>
                <div class="block__tab"><a class="name__title __tab" href="javascript:;">Price</a>
                  <div class="box__select"> 
                    <div class="input">
                      <input id="Advanced" type="checkbox" name="Advanced">
                      <label for="Advanced">Advanced</label>
                    </div>
                    <div class="input">
                      <input id="Oigong" type="checkbox" name="Oigong">
                      <label for="Oigong">Oigong</label>
                    </div>
                    <div class="input">
                      <input id="Popular" type="checkbox" name="Popular">
                      <label for="Popular">Popular</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Novice" type="checkbox" name="Novice">
                      <label for="Novice">For Novice</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
                    <div class="input">
                      <input id="Fast" type="checkbox" name="Fast">
                      <label for="Fast">Fast</label>
                    </div>
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
                      <input class="name" type="text" name="search" required="" value="" placeholder="Search courses"></span></div>
                </div>
              </form>
            </div>
            <div class="block__post">
              <div class="post__">
                <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/events__1__post.png" alt="menu"><span class="data"> June 29-26 20:00</span></div>
                <div class="block__content">
                  <div class="flex__top">
                    <div class="status"><span class="live">LIVE</span><span class="online">ONLINE</span></div>
                    <h4 class="title__post">The Healing Connection</h4>
                    <p class="catalog">Advanced</p>
                  </div>
                  <div class="user">
                    <ul class="list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                  <div class="block"><span class="time">4h 30m</span><span class="les">Healing Center</span></div>
                  <div class="block__bottum">
                    <div class="prise">$0.00 / Free</div><a class="border_orange" href="javascript:;">More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="block__post">
              <div class="post__">
                <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/events__1__post.png" alt="menu"><span class="data"> June 29-26 20:00</span></div>
                <div class="block__content">
                  <div class="flex__top">
                    <div class="status"><span class="live">LIVE</span><span class="online">ONLINE</span></div>
                    <h4 class="title__post">The Healing Connection</h4>
                    <p class="catalog">Advanced</p>
                  </div>
                  <div class="user">
                    <ul class="list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                  <div class="block"><span class="time">4h 30m</span><span class="les">Healing Center</span></div>
                  <div class="block__bottum">
                    <div class="prise">$0.00 / Free</div><a class="border_orange" href="javascript:;">More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="block__post">
              <div class="post__">
                <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/events__1__post.png" alt="menu"><span class="data"> June 29-26 20:00</span></div>
                <div class="block__content">
                  <div class="flex__top">
                    <div class="status"><span class="live">LIVE</span><span class="online">ONLINE</span></div>
                    <h4 class="title__post">The Healing Connection</h4>
                    <p class="catalog">Advanced</p>
                  </div>
                  <div class="user">
                    <ul class="list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                  <div class="block"><span class="time">4h 30m</span><span class="les">Healing Center</span></div>
                  <div class="block__bottum">
                    <div class="prise">$0.00 / Free</div><a class="border_orange" href="javascript:;">More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="block__post">
              <div class="post__">
                <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/events__1__post.png" alt="menu"><span class="data"> June 29-26 20:00</span></div>
                <div class="block__content">
                  <div class="flex__top">
                    <div class="status"><span class="live">LIVE</span><span class="online">ONLINE</span></div>
                    <h4 class="title__post">The Healing Connection</h4>
                    <p class="catalog">Advanced</p>
                  </div>
                  <div class="user">
                    <ul class="list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                  <div class="block"><span class="time">4h 30m</span><span class="les">Healing Center</span></div>
                  <div class="block__bottum">
                    <div class="prise">$0.00 / Free</div><a class="border_orange" href="javascript:;">More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="block__post">
              <div class="post__">
                <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/events__1__post.png" alt="menu"><span class="data"> June 29-26 20:00</span></div>
                <div class="block__content">
                  <div class="flex__top">
                    <div class="status"><span class="live">LIVE</span><span class="online">ONLINE</span></div>
                    <h4 class="title__post">The Healing Connection</h4>
                    <p class="catalog">Advanced</p>
                  </div>
                  <div class="user">
                    <ul class="list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/events__1__user.png" alt="menu"></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                  <div class="block"><span class="time">4h 30m</span><span class="les">Healing Center</span></div>
                  <div class="block__bottum">
                    <div class="prise">$0.00 / Free</div><a class="border_orange" href="javascript:;">More</a>
                  </div>
                </div>
              </div>
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