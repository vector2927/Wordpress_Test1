<?php

function enqueue_lazy_blocks_editor_styles() {
    wp_enqueue_style( 'blockListEditor', get_stylesheet_directory_uri() . '/editor-blog.css', array(), 'all' );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_lazy_blocks_editor_styles' );


function enqueue_lazy_blocks_frontend_styles() {
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style( 'blockListFrontend', get_stylesheet_directory_uri() . '/editor-blog.css', array(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_lazy_blocks_frontend_styles' );