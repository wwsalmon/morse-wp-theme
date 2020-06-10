<?php get_header();
?>
    <div class="container grid-container">
        <?php
        if (have_posts()){
            $post_count = 0;
            while (have_posts()) {
	            $post_count ++;
	            the_post();
	            if ( $post_count == 1 ) {
		            get_template_part( "template_parts/lede-story" );
	                ?>
                    <div class="full-header morse-font-accent morse-color-primary">
                        <h1>Latest</h1>
                        <div class="full-divider morse-bg-accent"></div>
                    </div>
                    <div class="stories-container">
                    <?php
	            } else {
		            get_template_part( "template_parts/article" );
	            }
            }
        }
        ?>
        </div>
    </div>
<?php
get_footer();