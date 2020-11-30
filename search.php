<?php

get_header(); ?>


<h2>Search For: <?php  the_search_query(); ?></h2>


 <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 

        get_template_part('content',get_post_format());

    endwhile; 

else: 
        echo "<h1>Sorry! No content Found.</h1>";

endif; 

get_footer();

?>