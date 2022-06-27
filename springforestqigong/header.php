<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package springforestqigong
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    
    <div class="all__menu">
      <div class="box__menu__">
        <div class="top__">
          <a class="logo" href="javascript:;"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="logo_w"></a>
          <a class="close" href="javascript:;"><img src="<?= get_template_directory_uri(); ?>/img/close_w.svg?v13" alt="logo_w"></a>
        </div>
        <div class="menu__content">
          <ul class="menu__">
            <li><a href="javascript:;">Recently Added</a></li>
            <li><a href="javascript:;">Masterclass Sessions</a></li>
            <li><a href="javascript:;">Summit Home</a></li>
            <li><a href="javascript:;">RTT</a></li>
            <li><a href="javascript:;">Human Longevity</a></li>
          </ul>
        </div>
      </div>
    </div>

    
<?php if( is_page_template( 'tpl-home.php' )) { ?>
    
    
     <header class="main">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12"><a class="logo" href="/"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="logo_w"></a>
            <ul class="menu__">
               <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Main Menu',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>
            </ul>
            <div class="box__">
             
            <?php if ( is_user_logged_in() ) {  ?>
            
              <div class="system_user">
                <div class="box__avatar"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/avatar.png" alt="user"></div><span class="name" title="Alex Magamedov Alex Magamedov Alex Magamedov">Alex Magamedov</span><a class="menu__open" href="javascript:;"></a>
                <ul class="select">
                  <li><a class="my_universe__icon" href="/my-account">My Universe</a></li>
                  <li><a class="cart__icon" href="/cart/">Cart</a></li>
                  <li><a class="account__icon" href="javascript:;">Account Settings</a></li>
                  <li><a class="log_out__icon" href="/wp-login.php?action=logout">Log Out</a></li>
                </ul>
              </div>

            <?php } else {  ?>

              <a class="sandy_brown"  href="/my-account">Login</a>
              
            <?php }  ?>
              <a class="help" href="javascript:;">Need help ?</a>
            </div>
            
            <div class="box__cart">
              <a class="cart__"  id='cart__' href="/cart/">
                <span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
              </a>
                <div class="block__list">
                  <a class="close" href="javascript:;"></a>
                  
                  <div id="block__list__cart">NONE</div>
             
                </div>
      
            </div>
            
            <a class="mobile__" href="javascript:;">
              <img class="menu__img" src="<?= get_template_directory_uri(); ?>/img/menu_w.svg?v13" alt="menu">
            </a>
            
          </div>
        </div>
      </div>
    </header>
    
    
    <div class="help__menu main">
     
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl6">
            <div class="box__catygory">
              <div class="block__"><img class="images" src="<?= get_template_directory_uri(); ?>/img/menu_user.png" alt="menu_user"></div>
              
              
              
              <ul>

               <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Need help',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>

              </ul>
            </div>
          </div>
          <div class="col m12 s12 l12 xl6">
            <ul>
          <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Need help right',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>
            </ul>
          </div>
        </div>
      </div>
    </div>


<?php }else if( is_page_template( 'tpl-account.php' ) ||  site_url('/shop/') ||  site_url('/product/') ) { ?>

    <header class="account">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12"><a class="logo" href="/"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/logo_black.svg" alt="logo_w"></a>
            <ul class="menu__">
               <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Main Menu',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>
            </ul>
            <div class="box__">
             
            <?php if ( is_user_logged_in() ) {  ?>
            
              <div class="system_user">
                <div class="box__avatar"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/avatar.png" alt="user"></div><span class="name" title="Alex Magamedov Alex Magamedov Alex Magamedov">Alex Magamedov</span><a class="menu__open" href="javascript:;"></a>
                <ul class="select">
                  <li><a class="my_universe__icon" href="/my-account">My Universe</a></li>
                  <li><a class="cart__icon" href="/cart/">Cart</a></li>
                  <li><a class="account__icon" href="/my-account/edit-account">Account Settings</a></li>
                  <li><a class="log_out__icon" href="/wp-login.php?action=logout">Log Out</a></li>
                </ul>
              </div>
              


            <?php } else {  ?>

              <a class="sandy_brown"  href="/my-account">Login</a>
              
            <?php }  ?>
              <a class="help" href="javascript:;">Need help ?</a>
            </div>
            
            <div class="box__cart">
              <a class="cart__"  id='cart__' href="/cart/">
                <span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
              </a>
                <div class="block__list">
                  <a class="close" href="javascript:;"></a>
                  
                  <div id="block__list__cart">NONE</div>
             
                </div>
      
            </div>

            
            <a class="mobile__" href="javascript:;">
              <img class="menu__img" src="<?= get_template_directory_uri(); ?>/img/menu.svg" alt="menu">
            </a>
            
          </div>
        </div>
      </div>
    </header>
    
 
    
    <div class="help__menu account">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl6">
            <div class="box__catygory">
              <div class="block__"><img class="images" src="<?= get_template_directory_uri(); ?>/img/menu_user.png" alt="menu_user"></div>
              <ul>
               <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Need help',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l12 xl6">
            <ul>
            <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Need help right',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

<?php }else if( is_page_template( 'tpl-account-demo.php' )) { ?>


    <header class="account">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12"><a class="logo" href="/"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/logo_black.svg" alt="logo_black"></a>
            <ul class="menu__">
              <li><a href="javascript:;">Option 1</a></li>
              <li><a href="javascript:;">Option 2</a></li>
              <li><a href="javascript:;">Option 3</a></li>
            </ul>
            <div class="box__">
             

              <div class="system_user">
                <div class="box__avatar"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/avatar.png" alt="user"></div><span class="name" title="Alex Magamedov Alex Magamedov Alex Magamedov">Alex Magamedov</span><a class="menu__open" href="javascript:;"></a>
                <ul class="select">
                  <li><a class="my_universe__icon" href="javascript:;">My Universe</a></li>
                  <li><a class="cart__icon" href="/cart/">Cart</a></li>
                  <li><a class="account__icon" href="javascript:;">Account Settings</a></li>
                  <li><a class="log_out__icon"  href="/wp-login.php?action=logout">Log Out</a></li>
                </ul>
              </div>
              
              <a class="sandy_brown none" href="/my-account">Login</a>
              <a class="help" href="javascript:;">Need help ?</a>
              
            <div class="box__cart">
              <a class="cart__"  id='cart__' href="/cart/">
                <span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
              </a>
                <div class="block__list">
                  <a class="close" href="javascript:;"></a>
                  
                  <div id="block__list__cart">NONE</div>
             
                </div>
      
            </div>
              
              
            
            </div><a class="mobile__" href="javascript:;"><img class="menu__img" src="<?= get_template_directory_uri(); ?>/img/menu.svg" alt="menu"></a>
          </div>
        </div>
      </div>
    </header>
    
    
    <div class="help__menu account">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl6">
            <div class="box__catygory">
              <div class="block__"><img class="images" src="<?= get_template_directory_uri(); ?>/img/menu_user.png" alt="menu_user"></div>
              <ul>
               <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Need help',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l12 xl6">
            <ul>
              <?php wp_nav_menu( 
                $argsm = array(  
                  'menu' => 'Need help right',  
                  'depth' => 2,
                  'container'=>'', 
                  'items_wrap' => '%3$s'
                  )
               );  ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    

<?php }else{ ?>

      <?php 
  
  if(0){
      if(0){ ?> <div id="page" class="site"> <?php }  ?>

      <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'springforestqigong' ); ?></a>

      <header id="masthead" class="site-header" >
          <div class="site-branding">
              <?php
              the_custom_logo();
              if ( is_front_page() && is_home() ) :
                  ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php
              else :
                  ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php
              endif;
              $springforestqigong_description = get_bloginfo( 'description', 'display' );
              if ( $springforestqigong_description || is_customize_preview() ) :
                  ?>
                  <p class="site-description"><?php echo $springforestqigong_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
              <?php endif; ?>
          </div><!-- .site-branding -->

          <nav id="site-navigation" class="main-navigation">
              <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'springforestqigong' ); ?></button>

          </nav><!-- #site-navigation -->
      </header><!-- #masthead -->

      <?php wp_nav_menu(
          array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',

          )
      ); 

  }
  ?>
    
<?php } ?>

	</div>
				