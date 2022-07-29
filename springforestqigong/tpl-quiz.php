<?php
/**
* Template Name: Quiz Page*
*/
get_header(); ?> 
   
    <section class="section__ quiz__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">

            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l8 xl8">
            <h2 class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing</h2>
          </div>
          <div class="col m12 s12 l12 xl12">
            <div class="content__quiz">
              <div class="block__info"> 
                <h2 class="title">Your type of energy</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p><a class="orange" href="javascript:;">Next question</a>
              </div>
              <div class="select">
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
                  <label for="select1">Lorem ipsum dolor sit amet</label>
                </div>
                <div class="input">
                  <input id="select1" type="radio" name="select1" value="select1">
                  <label for="select1">Lorem ipsum dolor sit amet</label>
                </div>
              </div>
              <div class="bottom__"><a class="green" href="javascript:;">Questions 1/8</a></div>
            </div>
            <div class="content__quiz__all">
              <div class="select__list">
                <div class="namber">Questions 2/8</div>
                <div class="linear"><span class="green__"></span><span class="red__ select__"></span><span></span><span></span><span class="green__"></span><span class="red__"></span><span class="green__"></span><span></span><span class="green__"></span><span class="red__"></span></div>
                <h2 class="title">Question 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</p>
              </div>
              <div class="select">
                <div class="input">
                  <input id="select1" type="radio" name="select1" value="select1">
                  <label class="failed" for="select1">Lorem ipsum dolor sit amet</label>
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
            <div class="content__quiz__all">
              <div class="block__info">
                <h2 class="title">Congratulation!</h2>
                <p>You have passed Lorem ipsum dolor. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
                <div class="two__bot"><a class="border_orange" href="javascript:;">Try again</a><a class="orange" href="javascript:;">Close</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   
    
<?php get_footer();