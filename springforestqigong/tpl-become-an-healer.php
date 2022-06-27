<?php
/**
* Template Name: Become An Healer Page*
*
*/
get_header(); ?>

    <section class="section__ become-an-healer__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
             <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l6 xl6">
            <h1 class="title"><?php the_title(); ?></h1>
            <a class="orange" href="javascript:;">Make an Appointment</a>
          </div>
          <div class="col m12 s12 l6 xl6">
            <div class="block__autor"><img class="images" src="<?= get_template_directory_uri(); ?>/img/become-an-healer__1_img.png" alt="overview__1_author"></div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Apply As Instructor</h2>
            <p class="desc">Discover your perfect program in our courses.</p>
            <p>Convallis vitae, nunc ut venenatis, lectus. Tellus nunc orci dolor nec facilisis et lacus, eu aliquet. Amet imperdiet ac venenatis, lacus. Tortor interdum quisque et, eu etiam ac. Hac lectus at posuere est consequat euismod tellus ut. Dolor ut diam sed dignissim eget gravida. Lectus mattis hac vitae, sed quis vel ornare sed. Ut vel cursus sed id eu. Laoreet bibendum eget dui sapien bibendum sapien.</p>
          </div>
          <div class="col m12 s12 l12 xl12">
            <div class="block__img"><img class="images" src="<?= get_template_directory_uri(); ?>/img/become-an-healer__1_big_img.png" alt="become-an-healer__1_big_img"></div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <ul class="tab__healers">
              <li class="active"><a href="javascript:;" data-tab="1">Become an Instructor</a></li>
              <li><a href="javascript:;" data-tab="2">Instructor Rules</a></li>
              <li><a href="javascript:;" data-tab="3">Start with courses</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container tab__content">
        <div class="row active">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Become an Instructor</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Instructor Rules</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Start with courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section__ become-an-healer__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l7 xl7">
            <h2 class="title">Register Now to <br>Get a 50% Discount</h2>
            <p class="sub">Get 100 Online Courses For Free</p>
            <div class="col_daven">
              <div class="day"><span>0</span>
                <p>Days</p>
              </div>
              <div class="hou"><span>0</span>
                <p>Hours</p>
              </div>
              <div class="min"><span>0</span>
                <p>Minutes</p>
              </div>
              <div class="sec"><span>0</span>
                <p>Seconds</p>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l5 xl5">
            <h3 class="sub_form">Create Free Account To Get</h3>
            <h4 class="title_form">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
            <div class="box__form">
              <form method="POST" action="javascript:void(null);">
                <!-- Hidden Required Fields-->
                <div class="form_input">
                  <label>Email Adress</label><span class="field">
                    <input class="mail" type="email" name="email" required="" value="" placeholder="Email"></span>
                </div>
                <div class="form_input">
                  <label>Phone Number</label><span class="field">
                    <input class="phone" type="text" name="phone" required="" value="" placeholder="Phone"></span>
                </div>
                <div class="form_input">
                  <label>Street Adress</label><span class="field">
                    <input class="adress" type="text" name="adress" required="" value="" placeholder="Street Adress"></span>
                </div>
                <button class="blue" type="submit" name="send">Get it Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    

<?php get_footer();