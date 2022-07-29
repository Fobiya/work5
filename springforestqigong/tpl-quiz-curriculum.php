<?php
/**
* Template Name: Quiz curriculum Page*
*/
get_header(); ?> 
  
    <section class="section__ quiz-curriculum__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l8 xl8">
            <h2 class="title"><?php the_title(); ?></h2>
          </div>
          <div class="col m12 s12 l12 xl12">
            <div class="content__quiz-curriculum">
              <h2 class="title">SFQ Level 2 test</h2>
              <p>You should score at least 85 points out of 100 </p><a class="orange" href="javascript:;">Next question</a>
            </div>
            <div class="content__question">
              <div class="question__left">
                <div class="box__namber">48</div>
              </div>
              <div class="question__right">
                <div class="box__line" data-ques="19"><span></span></div>
                <div class="question">Question 19/40</div>
                <h2 class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</h2>
                <p class="info">Choose all correct options</p>
                <div class="select">
                  <div class="input">
                    <input id="select1" type="radio" name="select1" value="select1">
                    <label class="failed" for="select1">Lor      em ipsum dolor sit amet</label>
                  </div>
                  <div class="input">
                    <input id="select1" type="radio" name="select1" value="select1">
                    <label for="select1">Lorem ipsum dolor sit amet</label>
                  </div>
                  <div class="input">
                    <input id="select1" type="radio" name="select1" value="select1">
                    <label for="select1">Lorem ipsum dolor sit amet</label>
                  </div>
                  <div class="input">
                    <input id="select1" type="radio" name="select1" value="select1">
                    <label class="check" for="select1">Lorem ipsum dolor sit amet</label>
                  </div>
                </div>
                <div class="bottom__two"><a class="border_orange" href="javascript:;">Back</a><a class="orange" href="javascript:;">Next question</a></div>
              </div>
            </div>
            <div class="content__quiz-curriculum">
              <h2 class="title">Congratulation!</h2>
              <p>You have passed the test successfully. Now you have acces to a new level of Healing.</p>
              <p class="info">Start to learn new material</p><a class="orange" href="javascript:;">Learn SFQ level 3</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    
<?php get_footer();