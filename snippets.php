<?php

// Check if current page is a blog page
function is_blog () {
    return ( is_home() || is_archive() || is_author() || is_category() || is_single() || is_tag()) && 'post' == get_post_type();
}

?>