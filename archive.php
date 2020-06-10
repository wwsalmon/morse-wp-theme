<?php get_header();
?>
    <div class="container grid-container">
        <div class="full-header morse-font-accent morse-color-primary">
            <h1><?php echo the_archive_title(); ?></h1>
            <div class="full-divider morse-bg-accent"></div>
        </div>
        <div class="stories-container">
		    <?php
		    if ( have_posts() ) {
			    while ( have_posts() ) {
				    the_post();
				    get_template_part( "template_parts/article" );
		        }
		    }
			?>
        </div>
        <div class="home-right">
        </div>
    </div>
<?php
get_footer();