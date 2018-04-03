<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

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
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/content', get_post_format() );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

									the_post_navigation( array(
										'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
										'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
									) );

								endwhile; // End of the loop.
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

	
<?php get_footer();
