<?php
//adding css and js files

function gt_Setup(){
    if(is_page('About')|| is_page('contact us')){
        wp_enqueue_style('style',get_template_directory_uri()."/style-about.css",'NULL',microtime(),'all');
    }else
    wp_enqueue_style('style',get_template_directory_uri()."/style.css",'NULL',microtime(),'all');
    wp_enqueue_script('main',get_template_directory_uri()."/js/main.js",'NULL',microtime(),true);
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.1.0/css/all.css');
}

add_action('wp_enqueue_scripts','gt_Setup');

//adding functionality to the website

function gt_theme_support(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5',
    
        array('comment-list','comment-form','search-form')
    
    );
}

add_action('after_setup_theme','gt_theme_support');


function gt_custom_post_type(){

    register_post_type('project',

    array(

        'rewrite'=> array('slug' => 'projects'),
        'labels'=> array(
            'name'=>'projects',
            'singular_name'=>'project',
            'add_new_item'=>'Add New Project',
            'edit_item' => 'Edit Project'
        ),

        'menu-icon'=>'dashicons-clipboard',
        'public'=>true,
        'publicly_queryable' => true,
        'query_var' => true,
        // 'taxonomies' =>array('category'),
        'has_archive'=>true,
        'show_in_rest' => true,
        'supports'=>array(

            'title','excerpt','thumbnail','editor','comments'
        )


    )

);

}
add_action('init','gt_custom_post_type');
//sidebar


function gt_widgets(){
    register_sidebar(
        array(
            'name'=>'Main Sidebar',
            'id'=>'main_sidebar',
            'before_title'=>'<h3>',
            'after_title'=>'<h3>'

        )
        );
    
        register_sidebar(

            array(
    
                'before_title'=>'',
                    'after_title'=>'',
                    'before_widget'=>'',
                    'after_widget'=>'',
                    'name'=>'Footer Area',
                    'id'=>'footer-1',
                    'description'=>'Footer Widget Area'
    
    
    
            )
    
            );
        
            register_sidebar(

                array(
        
                    'before_title'=>'',
                        'after_title'=>'',
                        'before_widget'=>'',
                        'after_widget'=>'',
                        'name'=>'Second Footer Area',
                        'id'=>'footer-2',
                        'description'=>'Footer Widget Area'
        
        
        
                )
        
                );

}

add_action('widgets_init','gt_widgets');

function wpb_custom_new_menu() {
    register_nav_menu('header_menu','Header Navigation Menu');
  }
add_action( 'after_setup_theme', 'wpb_custom_new_menu' );

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
        'name'  =>  __('Badge'),
        'singular_name' =>  __('wine Badge'),
        'search_items'      => __( 'wine Badges' ),
        'all_items'         => __( 'All wine Badges' ),
        'parent_item'       => __( 'Parent wine Badge' ),
        'parent_item_colon' => __( 'Parent wine Badge:' ),
        'edit_item'         => __( 'Edit wine Badge' ), 
        'update_item'       => __( 'Update wine Badge' ),
        'add_new_item'      => __( 'Add New Project' ),
        'new_item_name'     => __( 'New wine Badge' ),
        'menu_name'         => __( 'Badges' ),
	);
	$args = array(
		'labels'                     => $labels,
        'public'    =>  true,
        'show_in_rest' => true,
        'hierarchical'  =>  true,
	);
	register_taxonomy('project_badges', array('project'), $args);

}

add_action('init','custom_taxonomy',0);