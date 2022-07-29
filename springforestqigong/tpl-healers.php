<?php
/**
* Template Name: Healers Page*
*/
get_header(); 
global $wpdb;
$wpdb->show_errors( true );
$events_types = $wpdb->get_results($wpdb->prepare( "SELECT `name` FROM `wp_amelia_events_tags` GROUP BY `name`", ARRAY_A));

//$amelia_locations = $wpdb->get_results( "SELECT `latitude`,`longitude` FROM `wp_amelia_locations` WHERE 1", ARRAY_A);
//$locations = array();
// foreach ($amelia_locations as $location){
//   $addr = getAddress($location['latitude'], $location['longitude'],'city');
//   array_push($locations,$addr);
// }
//$addr = getAddress('38.902786','-77.050675','city'); // test callback
//echo $addr;
//print_r($locations);  !!!!! it can be need if one will refactoring code for fill empty address fields in the users table


$args = array(
    'role'    => 'wpamelia-provider',
    'orderby' => 'user_nicename',
    'order'   => 'ASC'
);
$users = get_users( $args );

?> 
   
    <section class="section__ healers__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 xl6">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            <?php 
              if (get_field('title')) {
                echo '<h2 class="title">'.get_field('title').'</h2>';
              } else {
                echo '<h2 class="title">Healers</h2>';
              }
              ?>
            
          </div>
          <div class="col m12 s12 l6 xl6">
            <div class="box__images">

              <?php 
                if (get_field('top_background_image')) { ?>

                  <img class="menu__img" src="<?= get_field('top_background_image')  ?>" alt="healers__1_img">
                
              <?php 
              } else { ?>

                <img class="menu__img" src="<?= get_template_directory_uri(); ?>/img/healers__1_img.png" alt="healers__1_img">
              
                <?php } ?>
            
            </div>
          </div>
        </div>
        <form class="row" method="POST" action="javascript:void(null);">
          <!-- Hidden Required Fields-->
          <div class="col m12 s12 l3 xl3">
            <div class="form_input"><span class="field search">
                <input class="name" type="text" name="search" required="" value="" placeholder="Search healer" id="searchHealer"></span></div>
          </div>
          <div class="col m12 s12 l9 xl9" id = "healers-filter">
            <div class="col m12 s12 l4 xl4">
            <?php
            /* don't needed
            
              <div class="block__flex"> 
                <div class="form_select">
                  <select id="by-program" name="by-program">
                    <option value="1">By Program</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4 </option>
                  </select>
                </div>
              </div>
            
            */
            ?>
            </div>
            <div class="col m12 s12 l4 xl4">
              <div class="block__flex"> 
                <div class="form_select">
                  <select id="by-event-type" name="by-event-type">
                    <option value="">By Event type   </option>

                    <?php 

                    foreach ( $events_types as $events_type ) {
                          echo '<option value="'.$events_type->name.'">'.esc_html($events_type->name) . '</option>';
                    }

                    ?>

                  </select>
                </div>
              </div>
            </div>
            <div class="col m12 s12 l4 xl4">
              <div class="block__flex"> 
                <div class="form_select">
                  <select id="by-location" name="by-location">
                    <option value="">By location</option>

                    <?php 

                    foreach ( $users as $user ) {
                        if ($user->billing_city){
                          echo '<option value="'.$user->billing_city.'">'.esc_html( $user->billing_city ) . '</option>';
                        };
                    }

                    ?>

                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
        
        <div id="response">
        
          <?php 
            include( get_stylesheet_directory().'/template-parts/healers-list.php');
          ?>
          
        </div>
      </div>
    </section>

    <script>


      jQuery(document).ready(function($){

        const toSubmit = function() {
            let text = $("#searchHealer").val();

            console.log (text);

            $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php');?>',
            //dataType: "json", // add data type
            data: { 
                
                action: 'get_ajax_healers',
                search: 'searchHealers',
                searchString: text,
                
            },
            success: function( response ) {
              
                document.querySelector('#response').innerHTML = response;
                
            }
        });
          
          };

          const enterPressed = function() {
            $('#searchHealer').keyup(function(event) {
              if(event.which == 13) {
                toSubmit();
              }
            });
          };

          enterPressed();


    const ch = $('#healers-filter');
   
    $('#healers-filter').on('change', function(){
        
        const eventType = $('#by-event-type option:selected').val();

        const eventLocation = $('#by-location option:selected').val();
    

        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php');?>',
            //dataType: "json", // add data type
            data: { 
                action : 'get_ajax_healers',
                eventType: eventType,
                eventLocation: eventLocation,
            },
            success: function( response ) {
              
                document.querySelector('#response').innerHTML = response;
                
            }
        });
    })
  })
</script>
    
<?php get_footer();