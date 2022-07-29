<?php 
/*
* Template Name: Blog Post
*/

get_header();
?>

<section class="section__ events__1">
	<div class="container">
		<div class="row">
			<div class="col m12 s12 l12 xl12">
				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			</div>
			<div class="col m12 s12 l8 xl8">
				<h2 class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing</h2>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col m12 s12 l12 xl12">
				<?php 
				// the query
				$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

				<?php if ( $wpb_all_query->have_posts() ) : ?>

				<ul>

					<!-- the loop -->
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
					<!-- end of the loop -->

				</ul>

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer();