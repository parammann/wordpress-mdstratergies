<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<section class="banner_section">
<section class="slider">    
    <?php echo do_shortcode("[metaslider id='52']"); ?>
</section>
	<?php echo get_post_meta(63, 'slider_home', true); ?>
</section>

<section class="service">
	<section class="container-fluid">
    	<section class="row">
        	<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<h1 class="heading"><?php echo get_the_title(66); ?></h1>
				<?php
					$args = array(
						'post_parent' => 66,
						'post_type' => 'page',
						'orderby' => 'menu_order'
					);
				$child_query = new WP_Query( $args );
				?>
				<ul class="service_list">
				<?php
				while ( $child_query->have_posts() ) : $child_query->the_post();
				?>
				<li>
                    <a href="<?php the_permalink(); ?>"><span class="img">
						<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::get_post_thumbnail_url(get_post_type(),'secondary-image',$post_id)) :
								MultiPostThumbnails::the_post_thumbnail(
								get_post_type(),'secondary-image',$post_id);
						else :?>
								<img src="<?php echo get_template_directory_uri().'/images/icn01.png'?>">
						<?php
						endif;
						?>
					</span></a>
					<a href="<?php the_permalink(); ?>"><h3><?php echo the_title();?></h3></a>
				</li>
				<?php
				 endwhile;
				 wp_reset_postdata();
				?>
				</ul>
            </section>
        </section>
     </section>       
</section>

<section class="about_section" style="background:#ffffff url('<?php   echo get_the_post_thumbnail_url(); ?>') no-repeat;background-position: bottom center;
    background-size: cover;">
	<section class="container-fluid">
    	<section class="row">
        	<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<?php the_content(); ?>
            </section>
        </section>
     </section>       
</section>

<section class="announces">
	<section class="container-fluid">
    	<section class="row">
        	<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php
					$args = array(
						'post_parent' => 151,
						'post_type' => 'page',
						'orderby' => 'menu_order'
					);
				$child_query = new WP_Query( $args );
				?>
				<h1 class="heading"> <?php echo get_the_title(151); ?> </h1>
				<ul class="list">
				<?php
				while ( $child_query->have_posts() ) : $child_query->the_post();
				?>
				<?php the_content(); ?>
				<?php
					 endwhile; 
					 wp_reset_postdata();
				?>
				</ul>
			
			
            	
            </section>
        </section>
    </section>        
</section>
	