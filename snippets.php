<?php

// Check if current page is a blog page
function is_blog () {
    return ( is_home() || is_archive() || is_author() || is_category() || is_single() || is_tag()) && 'post' == get_post_type();
}

// Custom post type query args, with custom taxonomy
$args = array(
    'post_type' => array( 'post_type_slug' ),
    'tax_query' => array(
        array(
            'taxonomy' => 'tax_slug',
            'field' => 'slug',
            'terms' => 'term_slug' // For more term OR use array: array('term_slug1', 'term_slug2'), for AND multiply tax_query block
        )
    ),      
    'posts_per_page' => 999,
    'order'  => 'DESC'
);

?>
