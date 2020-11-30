<?php get_header(); ?>

<div class="site-content clearfix">

  <div class="main-column">
    <?php if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
      
      get_template_part('content',get_post_format());
      
      endwhile; 

    else: 
            echo "<h1>Sorry! No content Found.</h1>";

    endif; ?>

  </div>
  <div class="secondary-column">
    <?php if ( is_active_sidebar( 'main_sidebar' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('main_sidebar'); ?>
    </ul>
    <?php } ?>
  </div>

</div>


<?php  get_footer(); ?>