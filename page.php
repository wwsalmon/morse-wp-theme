<?php get_header();
?>
    <div class="container">
        <div class="single-container content-container">
	        <?php
	        while (have_posts()) : the_post(); ?>
                <h1 class="morse-font-heading"><?php the_title(); ?></h1>
		        <?php
		        the_content();
	        endwhile;
	        ?>
        </div>
    </div>
<?php
get_footer();