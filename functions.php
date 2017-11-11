<?php
// יבוא קבצי css
/*****************************
Table of content:
1. theme_styles() - import all theme css
2. theme_scripts() - import all theme js
3. add theme support 
    3.1 add theme support - menus
4. theme navigation menu
4.1 register menus
 4.2 include navbar walker class
5. create sidebars
**************************/


/*****************************

1. theme_styles() - import all theme css
**************************/
function theme_styles()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .
    '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
     wp_enqueue_style('theme-css', get_template_directory_uri() .
    '/css/theme.css', array(), '1.0.0', 'all' ); 

}
add_action('wp_enqueue_scripts', 'theme_styles');

/*****************************
2. theme_scripts() - import all theme js
**************************/


function theme_scripts(){

global $wp_scripts;

wp_register_script('html5-shiv'
,'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', 
array(), '3.7.3', false );

wp_register_script('respond-js'
,'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js', 
array(), '1.4.2', false );

$wp_scripts->add_data('html5-shiv','conditional' , 'lt IE 9');
$wp_scripts->add_data('respond-js','conditional' , 'lt IE 9');

wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' ,
array('jquery'), '3.3.7', true );

wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js' ,
array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'theme_scripts');

/**********************************************
3. add theme support
***********************************************/

/*************************
3.1 add theme support - menus
**************************/
add_theme_support('menus');

/*************************
4.0 theme navigation menu
**************************/
// 4.1 register menus
function register_theme_menus() {
    register_nav_menus(
        array(
            'main_menu' => __('Main menu', 'alonr_theme'),
            'footer_menu' => __('Footer Menu', 'alonr_theme')
        )


    );
}


add_action('init', 'register_theme_menus');

// 4.2 include navbar walker class
include(get_stylesheet_directory() . '/inc/wp_navbar_walker.php' );


/*****************************
5. create sidebars
**************************/

function create_sidebar($name, $id, $desc)
{
register_sidebar(

    array(
    'name'              => __($name, 'alonr_theme'),
    'id'                => $id,
    'description'       => __($desc, alonr_theme),
    'befor_widget'      => '<div id="%1$s" class="widget %2$s">',
    'after_widget'      =>'</div>',
    'befor_title'       =>'<h4 class="%2$s title">',
    'after_title'       =>'</h4>'
        )
    );

}

create_sidebar('Page Sidebar', 'sidebar-page', 'sidebar for left and 
right sidebar pages');

create_sidebar('Blog Sidebar', 'sidebar-blog', 'Sidebar for blog pages');
create_sidebar('shop Sidebar', 'sidebar-shop', 'Sidebar for shop');

