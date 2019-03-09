<?php
/**
 * Sydney child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'sydney_child_enqueue' );
function sydney_child_enqueue() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* ADD YOUR CUSTOM FUNCTIONS BELOW */

// Custom Post Type : Actualités (menu Plus d'info)
function activities_register_post_types() {
    $labels = array(
        'name' => 'Activités',
        'all_items' => 'Toutes les activités',
        'singular_name' => 'Activity',
        'add_new_item' => 'Ajouter une activité',
        'edit_item' => 'Modifier une activité',
        'menu_name' => 'Activités'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
        'menu_position' => 3, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'activites', $args );
}
add_action( 'init', 'activities_register_post_types' );

// Custom Post Type : Actualités (menu Actualités)
/* function news_register_post_types() {
    $labels = array(
        'name' => 'Actualités',
        'all_items' => 'Toutes les Actualités',
        'singular_name' => 'News',
        'add_new_item' => 'Ajouter une actualité',
        'edit_item' => 'Modifier une actualité',
        'menu_name' => 'Actualités'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
        'menu_position' => 3, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'news', $args );
}
add_action( 'init', 'news_register_post_types' );

*/