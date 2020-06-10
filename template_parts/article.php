<div class="article-item">
    <div class="article-left">
	    <?php
	    get_template_part("template_parts/article-title-with-link");

//	    if (sizeof(get_the_category()) > 0) {
//		    echo "<div class=\"article-categories\">";
//		    foreach (get_the_category() as $cat) {
//			    ?>
<!--                <div class="article-category"><span><a href="--><?php //echo get_category_link($cat) ?><!--">--><?php //echo $cat->name ?><!--</a></span></div>-->
<!--			    --><?php
//		    }
//		    echo "</div>";
//	    }

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