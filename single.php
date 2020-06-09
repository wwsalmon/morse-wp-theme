<?php get_header();
?>
    <div class="container content-container single-container">
        <?php
        while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="single-date"><?php echo the_date("F d, Y"); ?></div>
            <div class="single-author"><span><?php echo sz_author_with_link(get_the_author_meta("ID")); ?></span></div>
            <?php
            the_content();
        endwhile;
        ?>
    </div>
<?php
get_footer();