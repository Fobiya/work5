<?php
/**
* Template Name: Certified locations
*
*/
get_header(); 

$key = 'AIzaSyCiJatC7yb5TKWSKiPZKLOdLymPRY-gKsA'; 
function getAddress($latitude, $longitude)
{
       
  //google map api url
        $url = "https://maps.google.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=$key";

        // send http request
        $geocode = file_get_contents($url);
        $json = json_decode($geocode);
        $address = $json->results[0];//->formatted_address;
        return $address;
};


$args = array(
    'role'    => 'wpamelia-provider',
    'orderby' => 'user_nicename',
    'order'   => 'ASC'
);
$users = get_users( $args );

?>

  <section class="section__ users__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <div id="map" style="height:600px"></div>
            <ul>
            <?php 
            $cert_users = array();
            foreach ( $users as $user ) {
              $lat = get_field('latitude', 'user_'. $user -> ID );
              $lng = get_field('longitude', 'user_'. $user -> ID );
              $logo = get_field('logo', 'user_'. $user -> ID );
              $email = get_user_meta($user -> ID, 'user_email',true);
              //$logo = wp_get_attachment_url( $logo_id );
              $cats = get_field('certified_category', 'user_'. $user -> ID );
              //echo $user->display_name.'; '.$lat.'; '.$lng.'; '.$logo.'<br>';
              if ($cats[0]){
                array_push($cert_users,array(
                  'name'  => $user->display_name,
                  'email' => $email,
                  'lat'   => $lat,
                  'lng'   => $lng,
                  'logo'  => $logo,
                  'cats'  => $cats
                ));
              }
              

    $all_meta_for_user = array_map( function( $a ){ return $a[0]; }, get_user_meta( $user->ID ) );

   
    //print_r($all_meta_for_user);
   
}
// echo '<pre>';
//               print_r ($cert_users);
//               echo '</pre>';
            ?>
            </ul>
          </div>
        </div>
      </div>
  </section>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=<?php echo $key;?>&callback=initMap&v=weekly"
      defer
    ></script>
    <script>
      
      const users = <?php echo json_encode($cert_users);?>;
      

     
      let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(47.931662789082395, -39.135626421677806),
    zoom: 4,
  });


  const iconBase = "<?php echo get_template_directory_uri().'/images/certified-professionals/toolbox/'; ?>";
  //console.log('base'+iconBase);
  const icons = {
    healer: {
      icon: iconBase + "Certified-Healer-45x45.png",
    },
    instructor: {
      icon: iconBase + "Certified-Instructor-45x45.png",
    },
    leader: {
      icon: iconBase + "Certified-Practice-Group-Leader-45x45.png",
    },
    trainer: {
      icon: iconBase + "Certified-Trainer-45x45.png",
    },
  };

  let usertype;
  const features = [];
   for (let i=0; i<users.length; i++){
    switch(users[i]['cats'][0]){
      case 'Certified Healer':
        usertype = 'healer';
        break;
      case 'Certified Instructor':
        usertype = 'instructor';
        break;
      case 'Certified Practice Group Leader':
        usertype = 'leader';
        break;
      case 'Certified Trainer':
        usertype = 'trainer';
        break;

    }

    
    
    features.push({
      position: new google.maps.LatLng(users[i]['lat'],users[i]['lng']),
      type: usertype,
    }
    );

   }
  console.log(features);
  //  const features = [
  //   {
  //     position: new google.maps.LatLng(-33.91721, 151.2263),
  //     type: "healer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91539, 151.2282),
  //     type: "healer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91747, 151.22912),
  //     type: "healer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.9191, 151.22907),
  //     type: "healer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91725, 151.23011),
  //     type: "healer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91872, 151.23089),
  //     type: "trainer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91784, 151.23094),
  //     type: "trainer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91682, 151.23149),
  //     type: "trainer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.9179, 151.23463),
  //     type: "trainer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91666, 151.23468),
  //     type: "trainer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.916988, 151.23364),
  //     type: "trainer",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
  //     type: "leader",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.916365282092855, 151.22937399734496),
  //     type: "leader",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91665018901448, 151.2282474695587),
  //     type: "leader",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.919543720969806, 151.23112279762267),
  //     type: "leader",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91608037421864, 151.23288232673644),
  //     type: "leader",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
  //     type: "leader",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
  //     type: "leader",
  //   },
  //   {
  //     position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
  //     type: "instructor",
  //   },
  // ];

  // Create markers.
  for (let i = 0; i < features.length; i++) {
    const marker = new google.maps.Marker({
      position: features[i].position,
      icon: icons[features[i].type].icon,
      map: map,
    });
  }
}
window.initMap = initMap;
    </script>
  <?php
get_footer();
?>