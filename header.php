<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>

<div class="container">

        <!-- site header -->
        <header class="site-header">

        <div class="hd-search">
            <?php  get_search_form( )?>
        </div>
 
            <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
            <h4><?php bloginfo('description'); ?>
        <?php if( is_page( 'contact-us' )){ ?> - We are greatfull to contact us! 
        
        <?php } ?>
        </h4>

            <nav class="site-nav">
                <?php
                
                $args = array(
                    'theme_location' => 'primary'
                );
                
                ?>
                <?php wp_nav_menu( $args);?>
            </nav>
 
        </header>

        <!-- end site header -->