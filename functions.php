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
  
  ?>