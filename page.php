<?php

get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>



<article class="post page">

<?php  if(has_children() OR $post->post_parent>0){ ?>
    <nav class="site-nav children-links">
        <span class="parent-link">
            <a href="<?php echo get_the_permalink( get_top_ancestor_id() )?>"><?php echo get_the_title( get_top_ancestor_id() ) ?></a>
        </span>


        <ul>
            <?php 
            //'child_of' =>$post->ID,
            $args = array(
                'child_of' =>get_top_ancestor_id(),
                'title_li' =>''
            );

            ?>

            <?php wp_list_pages($args ) ; ?>

        </ul>
    </nav>

        <?php } ?>

      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?> </p>
      
</article>
     





  <?php  endwhile; 

else: 
        echo "<h1>Sorry! No content Found.</h1>";

endif; 

get_footer();

?>