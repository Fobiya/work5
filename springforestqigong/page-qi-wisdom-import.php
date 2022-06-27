<?php 
die();
get_header();
$file = get_stylesheet_directory_uri().'/qi_wisdom.csv';
//echo $file;
$open = fopen($file, "r");

  if (($open = fopen($file, "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 0, ";")) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }

 //echo count($array);
  $terms = get_terms( array(
      'taxonomy' => 'qi_instructors',
      'hide_empty' => false,
  ) );


  
  foreach($terms as $term){
    $term_name[$term->term_id] = $term->name;
  }


  for ($i=1; $i<count($array); $i++){
    $c = array_combine($array[0], $array[$i]);

    $term_id = wp_insert_term(
    $c['Master'],   // the term 
    'qi_instructors', // the taxonomy
    );
  $key = (array_search ($c['Master'], $term_name)) ? array_search ($c['Master'], $term_name) : $term_id;  

  //  echo $c['﻿Title'].'<br>';
  //  echo $c['Vimeo link'].'<br>';
  //  echo esc_html($c['Audio link']).'<br>';
  //  echo $c['Master'].'<br>';
  //  echo ($key) ? $key : 'FALSE<br>';
  //  echo $c['Date'].'<hr>';


    //Create post object
    $my_post = array(
      'post_title'    => $c['﻿Title'],
      'post_content'  => '',
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type'     =>'library'
    );
    
    //Insert the post into the database
     $post_id = wp_insert_post( $my_post, true );

      wp_set_object_terms( $post_id, 760, 'qi_library_types' );

      wp_set_object_terms( $post_id, $key, 'qi_instructors' );

    echo "POST_ID: $post_id<br>";

    if($c['Vimeo link']){
      $value =  array(
          'title' => $c['Vimeo link'],
          'url' => $c['Vimeo link'],
      );
      update_field('video_link', $value, $post_id);
    }

    if($c['Audio link']){
      $value =  array(
          'title' => esc_html($c['Audio link']),
          'url' => esc_html($c['Audio link']),
      );
      update_field('audio_link', $value, $post_id);
    }

    if($c['Date']){
      update_field('date', $c['Date'], $post_id);
    }

    //print_r($c);

  }

get_footer();
?>