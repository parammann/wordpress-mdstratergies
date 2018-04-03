<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo( 'name' ); ?></title>

<link href="<?php echo get_template_directory_uri().'/css/bootstrap.css' ?>" type="text/css" rel="stylesheet" />

<link href="<?php echo get_template_directory_uri().'/css/style.css' ?>" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri().'/js/bootstrap.js' ?>"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <section class="top-head">
        <section class="container-fluid">
            <section class="row">
                <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php  $arg=array('menu_class' => 'top_link' , 'theme_location' => 'header');
									wp_nav_menu($arg); ?>
                </section>
            </section>
        </section>        
    </section>
    
    <section class="bottom_head">
    	<section class="container-fluid">
            <section class="row">
                <section class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			

                	<span class="logo"><a href="<?php the_permalink(); ?>"><?php	if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?></a></span>
                </section>
                
                <section class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                	<section class="right_side">
                    	<span class="phone"><a href="tel:281-358-0300"><?php echo get_post_meta(40, 'Phone', true); ?></a></span>
                        
                        <div class="navigation">
                        	<button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation </span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span> </button>	
								<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" >
                                	<?php  $args=array('theme_location' => 'newmenu');
									wp_nav_menu($args); ?>
									
                                </nav>
                        </div>
                    </section>
                </section>
            </section>
         </section>       
    </section>


</header>