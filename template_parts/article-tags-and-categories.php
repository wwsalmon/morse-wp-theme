<?php

$cats = get_the_category();
$tags = get_the_tags();

if (sizeof($cats) + sizeof($tags) > 0) {
	echo "<div class=\"article-categories\">";
	foreach ($cats as $cat) {
		if ($cat->slug != "uncategorized") {
			?>
			<div class="article-category uppercase-link morse-font-accent"><span><a
						href="<?php echo get_category_link( $cat ) ?>"><?php echo $cat->name ?></a></span></div>
			<?php
		}
	}
	foreach ($tags as $tag){ ?>
		<div class="article-category uppercase-link morse-font-accent"><span><a
					href="<?php echo get_tag_link($tag) ?>"><?php echo "#".$tag->name ?></a></span></div>
		<?php
	}
	echo "</div>";
}