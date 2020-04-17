<?php 
/**
* Dequeue jQuery Migrate script in WordPress.
*/
function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        // $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );
//BOOSTRAP CDN + scripts
function my_scripts() {
	wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'3.3.1',true );
	wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ),'1.14.7',true );
	wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ),'4.3.1',true );
	wp_enqueue_script( 'APP',get_template_directory_uri() . '/js/app.js' );
	
  }
  add_action( 'wp_enqueue_scripts', 'my_scripts' );
  


  // SOPORTE IMAGENES DESTACADAS
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }


 
  
// action hook for custom type
// function custom_css(){

//     $args = array(
//           'labels' => array(

//                     'name' => 'images',
//                     'singular_name' => 'image',
//         ),

//         // hierarchical replace the code above: it makes it look 
//         // like pages in the admin
//        'hierarchical' => true,
//        'public' => true,
//        'has_archive' => true,
//        'menu_icon' => 'dashicons-images-alt2',
//        'supports' => array('title', 'editor', 'thumbnail'),
//     //    'rewrite' => array('slug' => 'images'),
//     );
      
//     register_post_type('images', $args);
// }
//  add_action('init', 'custom_css');   
 

 
//  function my_first_taxonomy() {
       
//     $args = array(
        
//               'labels' => array(     

//                    'name' => 'vistas',
//                    'singular_name' => 'vista',
//     ),

//                    'public' => true,
//                    'hierarchical' => true,
    
//     );

//              register_taxonomy('vistas', array('images'), $args);

//  }
//  add_action('init', 'my_first_taxonomy' );     

/*
* Adding a menu to contain the custom post types for frontpage
*/

 function frontpage_admin_menu() {
    add_menu_page(
        'Home',
        'Home',
        'read',
        'Home',
        '',
        'dashicons-admin-home',
        40
    );
    add_submenu_page(
        'Home',
        'prueba',
        'prueba',
        '',
        'prueba',
        '');


    add_menu_page(
        'Sobre nosotros',
        'Sobre nosotros',
        'read',
        'sobre-nosotros',
        '',
        'dashicons-admin-home',
        40
    );
    add_menu_page(
        'incubacion',
        'incubacion',
        'read',
        'incubacion',
        '',
        'dashicons-admin-home',
        40
    );
    add_menu_page(
        'prospectiva',
        'prospectiva',
        'read',
        'prospectiva',
        '',
        'dashicons-admin-home',
        40
    );


 }

 add_action( 'admin_menu', 'frontpage_admin_menu' );

//  function frontpage_admin_menu() {



//     add_menu_page(
//         'testeos',
//         'testeos',
//         'read',
//         'testeos',
//         '',
//         'dashicons-admin-home',
//         40
//     );

//  }

//  add_action( 'admin_menu', 'frontpage_admin_menu' );

// ?>