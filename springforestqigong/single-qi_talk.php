<?php 
get_header();
?>
<h1><?php the_title();?></h1>
<div class=""><?php the_post_thumbnail('large'); ?></div>
<?php
the_content();
the_field('date');?>

<a href="http://www.google.com/calendar/event?
action=TEMPLATE
&text=<?php the_title(); ?>
&date=<?php echo get_field('date') ;?>"

target="_blank" rel="nofollow">Add to my calendar</a>

<?php
get_footer();

?>