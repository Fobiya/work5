<?php 
/**
 * Shordcode for insert custom field into content
 */

 function show_video_qi(){
	 $link = get_field('video_link');
	 $html = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$link.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
	 return $html;

  
}

add_shortcode ('video_qi', 'show_video_qi');
?>