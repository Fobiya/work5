<?php
/**
* Template Name: Shop DEMO Page*
*/
get_header(); ?> 

    
    <section class="section__ shop__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl6">
            <h1 class="title">Lorem ipsum dolor sit amet, dolor</h1>
            <p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p><a class="orange" href="javascript:;">Buy Now</a>
          </div>
          <div class="col m12 s12 l12 xl6">
            <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_img.png" alt="logo_w"></div>
            <div class="block__right">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh   euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. vulputate velit esse accumsan et iusto odio dignissim qui </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h4 class="sub_title">Best Selling Products</h4>
          </div>
        </div>
        <div class="row">
          <div class="col m6 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_1.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_2.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_3.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section__ shop__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h3 class="title">If you believe it, it works. If you don't believe it, it still works. If you believe it will work, it often works faster. Either way, it works, because Qi knows what to do.</h3><a class="author" href="javascript:;">- Chunyi Lin, Qigong Master</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section__ shop__3">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l4 xl4">
            <div class="block_menu">
              <ul>
                <li><a class="active" href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a>
                  <ul>
                    <li><a href="javascript:;">Lorem ipsum dolor </a></li>
                    <li><a href="javascript:;">Lorem ipsum dolor </a></li>
                  </ul>
                </li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
                <li><a href="javascript:;">Lorem ipsum dolor</a></li>
              </ul>
            </div>
          </div> 
          <div class="col m12 s12 l8 xl8">
            <div class="block__post">
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
              <div class="post__">
                <div class="block__img__"><a class="title_link" href="javascript:;">Lorem ipsum dolor</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   
   
    <?php the_content(); 
    
    
    ?>
    
    <?php if(0){ ?>
    <footer class="main">
      <div class="container">
        <div class="row">
          <div class="col m5 s12 l4 xl3">
            <div class="box__logo"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="logo_w"></div>
            <ul class="sosel">
              <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/face.svg" alt="face"></a></li>
              <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/twit.svg" alt="twit"></a></li>
              <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/pint.svg" alt="pint"></a></li>
              <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/Inst.svg" alt="Inst"></a></li>
              <li><a href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/yout.svg" alt="yout"></a></li>
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