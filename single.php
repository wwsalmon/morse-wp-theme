<?php get_header();
?>
    <div class="container">
        <div class="single-container">
	        <?php
	        while (have_posts()) :
		        the_post();
		        get_template_part("template_parts/article-tags-and-categories"); ?>
                <h1 class="morse-font-heading"><?php the_title(); ?></h1>
		        <?php
		        get_template_part("template_parts/article-date-and-author");
		        echo "<div class=\"content-container\">" . do_shortcode(get_the_content()) . "</div>";
	        endwhile;
	        ?>
        </div>
    </div>
<?php
get_footer();