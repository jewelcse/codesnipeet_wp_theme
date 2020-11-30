
<?php 


function awesomeTheme_resources(){

    wp_enqueue_style( 'style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'awesomeTheme_resources' );


// Get top ancestor
function get_top_ancestor_id(){

    global $post;

    if($post->post_parent){

        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

// Does page have any children?

function has_children(){
    global $post;

   $pages =  get_pages( 'child_of=' . $post->ID );
    return count($pages);
}

// Customize the excerpt length

function custom_excerpt_length(){
    return 25;
}

add_filter( 'excerpt_length','custom_excerpt_length');


// Setup theme

function awesomeTheme1_setup(){

    //Menus
    register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'footer' => __( 'Footer Menu' )
        )
    );


    

    // Add feature images support
    add_theme_support('post-thumbnails' );
    add_image_size('small-thumbnails',180,120,true );
    //add_image_size('banner-image',920,210,true );
    add_image_size('banner-image',920,210,array('left','top') );

    // Add posts format support
    add_theme_support( 'post-formats', array( 'aside', 'gallery','link' ) );



}

add_action( 'after_setup_theme','awesomeTheme1_setup' );

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'main_sidebar' sidebar. */
    register_sidebar(
        array(
            'id'            => 'main_sidebar',
            'name'          => __( 'Right Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    /* Register the 'Footers' sidebar. */
    register_sidebar(
        array(
            'id'            => 'footer1',
            'name'          => __( 'Footer 1' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer2',
            'name'          => __( 'Footer 2' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
}


?>