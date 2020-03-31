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

// Code from https://www.wordpressaddicted.com/wordpress-get-tag-id-by-tag-name/:

function get_tag_ID($tag_name) {
    $tag = get_term_by('name', $tag_name, 'post_tag');
    if ($tag) {
        return $tag->term_id;
    } else {
        return 0;
    }
}

function sz_stripall($str){
    return wp_strip_all_tags(strip_shortcodes($str));
}

// Code from https://stackoverflow.com/a/12445298

function get_snippet( $str, $wordCount = 10 ) {
    return implode(
        '',
        array_slice(
            preg_split(
                '/([\s,\.;\?\!]+)/',
                $str,
                $wordCount*2+1,
                PREG_SPLIT_DELIM_CAPTURE
            ),
            0,
            $wordCount*2-1
        )
    );
}