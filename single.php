<?php

get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>



<article class="post">

     <h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

     <p class="post-info">
        <?php the_time( 'F j,Y g:i a' )?> | by 
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
      Posted in 
      <?php 
      
      $categories = get_the_category();
      $separetor = ", ";
      $output = '';

      if($categories){

        foreach($categories as $category){
          $output .= '<a href="'.get_category_link( $category->term_id ) .'" >'. $category->cat_name .'</a>'. $separetor;
        } 

        echo trim($output,$separetor);
      }
      
      
      
      ?>
      </p>

            <?php the_post_thumbnail('banner-image'); ?>

      <p><?php 
      //the_content('Continue reading &raquo;'); 
      the_content();
      
      ?> </p>
      
</article>
     





  <?php  endwhile; 

else: 
        echo "<h1>Sorry! No content Found.</h1>";

endif; 

get_footer();

?>