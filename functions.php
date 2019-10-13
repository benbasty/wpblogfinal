<?php 
// adding css and js 
function blog_setup(){
    wp_enqueue_style('style',get_stylesheet_uri(),NULL,microtime(),all);
    wp_enqueue_script('script',get_theme_file_uri('/js/script.js'),NULL,microtime(),true);

    wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Bree+Serif&display=swap');
    wp_enqueue_style('aos','https://unpkg.com/aos@next/dist/aos.css');

    wp_enqueue_script('fontsawesome','https://kit.fontawesome.com/16437b9baf.js');
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('aosjs','https://unpkg.com/aos@next/dist/aos.js');
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.min.js');
}

add_action('wp_enqueue_scripts','blog_setup');

//adding theme support
function blog_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form'));
}
add_action('after_setup_theme', 'blog_init');

//adding pagination function
function bittersweet_pagination() {

    global $wp_query;
    
    if ( $wp_query->max_num_pages <= 1 ) return; 
    
    $big = 999999999; // need an unlikely integer
    
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-wrap"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
        echo '</ul></div>';
    }
}

// costum post type
function blog_custom_post_type() {
    register_post_type('projects', 
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Projects',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-welcome-write-blog',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt','comments'
            )
        )
    );
}
add_action ('init', 'blog_custom_post_type');

//sidebar

function blog_sidebar(){
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}
add_action('widgets_init','blog_sidebar');

//search filters

function search_filter($searchquery) {
    if($searchquery-> is_search()){
        $searchquery-> set('post_type', array('post','projects'));
    }
}
add_filter('pre_get_posts', 'search_filter');