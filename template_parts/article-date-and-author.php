<div class="article-date"><span><?php the_time("F j, Y"); ?></span></div>
<div class="article-author">
	<span>
		<?php
		$post_id = get_the_ID();
		if (function_exists('coauthors_posts_links')) {
			$coauthors = get_coauthors($post_id);
			$last = end($coauthors)->display_name;
			foreach ($coauthors as $author) {
				$authorID = $author->ID;
				echo sz_author_with_link( $authorID );
				if ($author->display_name != $last) echo ", ";
			}
		}
		else{
			echo sz_author_with_link(get_the_author_meta("ID"));
		}
		?>
	</span>
</div>