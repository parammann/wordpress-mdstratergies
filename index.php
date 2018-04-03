<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
			<?php
			if ( have_posts() ) :
			?>
				<section class="inner_banner">
						<?php if(has_post_thumbnail()){ 
							the_post_thumbnail(); 
							} else { ?>
								<img src="<?php echo get_template_directory_uri().'/images/about-ban.jpg' ?>">
							<?php } ?>
						
						<section class="banner_cont">
							<h1><?php echo wp_title(""); ?></h1>
						</section>
				</section>
				 <section class="news_content">
					<section class="container-fluid">
						<section class="row">
							<section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<?php
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							the_posts_pagination( array(
								'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
							) );

						?>
						</section>	
							 <section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
								<div class="right_side">
									<h2>News Items</h2>
										<ul class="news_itmes_list">
										<?php
										while ( have_posts() ) : the_post(); 
												get_template_part('template-parts/sidebar/content', get_post_format() ); 
										endwhile; ?>
										</ul>
								</div>
							</section>
						</section>
					</section>    
			</section>
</div><!-- .wrap -->
					<?php	else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
						

get_footer(); ?> 
