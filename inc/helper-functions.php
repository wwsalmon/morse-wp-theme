<?php
function catch_that_image($post_id)
{
    $post = get_post($post_id);
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    if (empty($first_img)) {
        // see if it's just an issue with image not having quotes, not necessarily missing them entirely
        $output = preg_match_all('<img.+src=([^\'"\s]+)[\'"\s].*>', $post->post_content, $matches);
        $first_img = $matches[1][0];
        if (empty($first_img)){
            $first_img = false;
        }
    }
    return $first_img;
}

function sz_stripall($str){
    return wp_strip_all_tags(strip_shortcodes($str));
}

function sz_author_with_link($id){
    return "<a href=\"" . get_author_posts_url($id) . "\">" . get_the_author_meta("display_name", $id) . "</a>";
}

// adapted from from https://stackoverflow.com/a/12445298, with modification

function sz_get_snippet( $str, $wordCount = 10 ) {
    $words = preg_split(
        '/([\s,\.;\?\!]+)/',
        $str,
        $wordCount*2+1,
        PREG_SPLIT_DELIM_CAPTURE
    );
    $retval = implode('', array_slice($words, 0, $wordCount * 2 - 1));
    if (sizeof($words) > $wordCount * 2): $retval = $retval . "..."; endif;
    return $retval;
}

// Code from https://www.wordpressaddicted.com/wordpress-get-tag-id-by-tag-name/:

function get_tag_ID($tag_name) {
    $tag = get_term_by('name', $tag_name, 'post_tag');
    if ($tag) {
        return $tag->term_id;
    } else {
        return 0;
    }
}

// Code from https://wordpress.stackexchange.com/questions/237044/wp-get-nav-menu-items-not-working-with-slug

function get_menu_items_by_registered_slug($menu_slug) {
    $menu_items = array();

    if ( ($locations = get_nav_menu_locations()) && isset($locations[$menu_slug]) && $locations[$menu_slug] != 0 ) {
        $menu = get_term( $locations[ $menu_slug ] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    }

    return $menu_items;
}