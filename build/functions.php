<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 400, 300, true ); // 50 pixels wide by 50 pixels tall, crop mode
add_filter( 'jetpack_enable_open_graph', '__return_false' );
add_theme_support( 'infinite-scroll', array(
    'container' => 'feed__posts'
) );
