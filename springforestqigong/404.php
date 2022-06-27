<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package springforestqigong
 */

get_header(); ?>


    <section class="error__404">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h1 class="title">404</h1>
            
              <p><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'springforestqigong' ); ?></p>
            
            <a href="/">home</a>
          </div>
        </div>
      </div>
    </section>
   
   
    <?php if(0){ ?>
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'springforestqigong' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'springforestqigong' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'springforestqigong' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$springforestqigong_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'springforestqigong' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$springforestqigong_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
    <?php } ?>
    
<?php get_footer('not'); 
