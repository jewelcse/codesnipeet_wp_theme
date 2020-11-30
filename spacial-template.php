<?php

/*

Template Name:Special Layout


*/
get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>



<article class="post page">

      <h2><?php the_title(); ?></h2>
      <div class="info-box">
            <h4>Desclaimer Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos laboriosam assumenda dolorum in sit repellat doloribus repellendus ut beatae eaque.</p>
      </div>
      <p><?php the_content(); ?> </p>
      
</article>
     





  <?php  endwhile; 

else: 
        echo "<h1>Sorry! No content Found.</h1>";

endif; 

get_footer();

?>