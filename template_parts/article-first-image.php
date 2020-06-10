<?php
$first_image = catch_that_image(get_the_ID());
if ($first_image != false) {
	?><a href="<?php echo get_the_permalink() ?>">
    <div class="article-image"><img src="<?php echo $first_image ?>"></div></a>
	<?php
}