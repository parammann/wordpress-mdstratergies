<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
	
		
                	<ul class="news-list">
                    	<li>
                        	<a href='<?php the_permalink() ?> '><h2><?php echo the_title(); ?></h2></a>
                            <span class="date"><?php echo the_time('F Y'); ?></span>
                            <ul class="social-icn">
                            	<li><a href="#"><img src="<?php echo get_template_directory_uri().'/images/soc01.png' ?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri().'/images/soc02.png' ?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri().'/images/soc03.png' ?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri().'/images/soc04.png' ?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri().'/images/soc05.png' ?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri().'/images/soc06.png' ?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri().'/images/soc07.png' ?>"></a></li>
                            </ul>
                            
                            <?php echo the_content(); ?>
							<?php if (is_home()){ ?>
                            <a href="<?php echo the_permalink(); ?>" class="read">Read More</a>
							<?php } else { } ?>
                        </li>
					</ul>
                
	


