<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
    
    <section class="inner_content">
    	<section class="container-fluid">
            <section class="row">
                <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<?php the_content(); ?>
                </section>
            </section>
        </section>        
    </section>
</article><!-- #post-## -->
