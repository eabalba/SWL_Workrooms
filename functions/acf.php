<?php

// Custom gutenberg block category
 function add_custom_gutenberg_category($categories){
    return array_merge($categories, array(
        array(
            'slug' => 'bamboo_nine',
            'title' => __('Bamboo Nine', 'bamboo_nine'),
            'icon' => 'null'
        )
    ));
}
add_filter('block_categories', 'add_custom_gutenberg_category', 10, 2);

// Register ACF fields  
function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        // register an accordion block
        acf_register_block(array(
            'name'              => 'accordion',
            'title'             => __('Accordions'),
            'description'       => __('Accordion Content (e.g. for FAQs)'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'excerpt-view',
            'keywords'          => array( 'accordion', 'faqs'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'tabbed',
            'title'             => __('Tabbed Content'),
            'description'       => __('Tabbed Content Areas'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'index-card',
            'keywords'          => array( 'tabs, tabbed'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'map',
            'title'             => __('Map'),
            'description'       => __('Google Map Embed'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'location-alt',
            'keywords'          => array( 'map'),
            'mode'              => 'edit',
        ));
        acf_register_block(array(
            'name'              => 'workroom-slider',
            'title'             => __('Workroom Slider'),
            'description'       => __('Workroom Slider'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'index-card',
            'keywords'          => array('workroom', 'slider'),
            'mode'              => 'edit',
        ));
        acf_register_block(array(
            'name'              => 'banner-slider',
            'title'             => __('Banner Slider'),
            'description'       => __('Hero Banner Image Slider'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'index-card',
            'keywords'          => array('banner', 'hero', 'slider'),
            'mode'              => 'edit',
        ));
        acf_register_block(array(
            'name'              => 'testimonials',
            'title'             => __('Testimonials'),
            'description'       => __('Testimonial Panel'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'index-card',
            'keywords'          => array('testimonial'),
            'mode'              => 'edit',
        ));
        acf_register_block(array(
            'name'              => 'workroom-card',
            'title'             => __('Workroom Card'),
            'description'       => __('Workroom Card Content'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'index-card',
            'keywords'          => array('workroom', 'card'),
            'mode'              => 'edit',
        ));
    }
}
add_action('acf/init', 'my_acf_init');  

//render ACF fields
function my_acf_block_render_callback( $block ) {
    
    // convert name ("acf/testimonials") into path friendly slug ("testimonials")
    $slug = str_replace('acf/', '', $block['name']);
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
    }
}