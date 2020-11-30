<article class="post <?php if(has_post_thumbnail()){ ?> has-thumbnail <?php }?>">

    <div class="post-thumbnail">

    <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail('small-thumbnails'); ?></a>
    
    </div>

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

      <?php
      
      if(is_search() OR is_archive()){ ?>

        <p>
      <?php 
      //the_content('Continue reading &raquo;'); 
      //the_excerpt();
     echo  get_the_excerpt(); ?>
      <a href="<?php  the_permalink()?>"> Read More &raquo;</a>
     </p>

     <?php }else{

     if($post->post_excerpt){ ?>
      <p>
      <?php 
      //the_content('Continue reading &raquo;'); 
      //the_excerpt();
     echo  get_the_excerpt(); ?>
      <a href="<?php  the_permalink()?>"> Read More &raquo;</a>
     </p>
      <?php }else{ 

        the_content();
      } 

      }
      
      ?>

      

      

      
</article>