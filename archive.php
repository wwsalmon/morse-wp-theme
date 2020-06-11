<?php get_header();
?>
    <div class="container grid-container">
        <div class="full-header">
            <h1 class="morse-color-primary morse-font-accent mb-2"><?php echo the_archive_title(); ?></h1>
            <?php
                if (is_author()) {
                    echo "<p class='morse-font-body mt-2 mb-2'>" . get_the_author_meta('description') . " Contact the author at <a href='mailto:" . get_the_author_meta('email') . "'>" . get_the_author_meta('email') . ".</a></p>";
                }
            ?>
            <div class="full-divider morse-bg-accent"></div>
        </div>
        <div class="stories-container">
		    <?php

            get_template_part("template_parts/author-media");

		    if ( have_posts() ) {
			    while ( have_posts() ) {
				    the_post();
				    get_template_part( "template_parts/article" );
		        }
		    }
			?>
        </div>
        <div class="home-right">
	        <?php if (is_active_sidebar("home_right")){
		        dynamic_sidebar("home_right");
	        }
	        ?>
        </div>
    </div>
<?php
get_footer();