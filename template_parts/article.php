<div class="article-item">
    <div class="article-left">
	    <?php
        get_template_part("template_parts/article-tags-and-categories");

	    get_template_part("template_parts/article-title-with-link");

	    get_template_part("template_parts/article-date-and-author");
	    ?>
    </div>
    <div class="article-right">
        <?php
        get_template_part("template_parts/article-first-image");
        ?>
    </div>

<!--    <div class="article-content">--><?php //echo sz_get_snippet(sz_stripall(get_the_content()), 100) ?><!--</div>-->
</div>