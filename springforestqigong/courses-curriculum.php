<?php
/**
* Template Name: Courses Curriculum Page* 
*
*/
get_header(); ?>
    

    <section class="section__ courses-curriculum__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          </div>
          <div class="col m12 s12 l8 xl8">
            <h2 class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing</h2>
          </div>
          <div class="col m12 s12 l4 xl4"><a class="orange" href="javascript:;">Back to Course</a></div>
        </div>
      </div>
    </section>
    <section class="section__ courses-curriculum__2">
      <div class="right__menu"><a class="close" href="javascript:;"></a>
        <form method="POST" action="javascript:void(null);">
          <!-- Hidden Required Fields-->
          <div class="form_input"><span class="field">
              <input class="name" type="text" name="search" required="" value="" placeholder="Search courses"></span></div>
          <button type="submit" name="send"></button>
        </form>
        <div class="block__select"><a class="title_top" href="javascript:;">Part of the Course</a>
          <ul>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
          </ul>
        </div>
        <div class="block__select"><a class="title_top" href="javascript:;">Part of the Course</a>
          <ul>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
          </ul>
        </div>
        <div class="block__select"><a class="title_top" href="javascript:;">Part of the Course</a>
          <ul>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
            <li><a href="javascript:;">Duration</a></li>
          </ul>
        </div>
      </div>
      <div class="box__button">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12"><a class="orange" href="javascript:;">Previous</a><a class="orange" href="javascript:;">Lesson</a></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Course Description</h2>
          </div>
          <div class="col m12 s12 l12 xl12">
            <div class="block__img"><a class="play" href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/courses-curriculum__2_post_img.png" alt="video"></a></div>
          </div>
          <div class="col m12 s12 l12 xl12">
            <h3 class="title">Course Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
            <p>Lorem ipsum dolor sit a met, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p><a class="border_orange" href="javascript:;">Learn more</a>
          </div>
        </div>
      </div>
    </section>
    

<?php get_footer('not');