<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<footer>
	<section class="container-fluid">
    	<section class="row">
        	<section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            	<?php  $arg=array('theme_location' => 'footer');
									wp_nav_menu($arg); ?>
				
            </section>
            
            <section class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            	<?php dynamic_sidebar('sidebar-2'); ?>
				
            
            <section class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			            	<?php dynamic_sidebar('sidebar-3'); ?>
            	
            </section>
        </section>
    </section>        
</footer>

<?php wp_footer(); ?>

</body>
</html>
