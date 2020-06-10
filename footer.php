<?php
$footer_bg = get_theme_mod("morse-wp-footer-bg");
$footer_class = "";
$footer_logo = "";
if ($footer_bg == "light"){
	$footer_logo = "morse-wp-logo-light";
} else if ($footer_bg == "dark"){
	$footer_class = "morse-bg-primary";
	$footer_logo = "morse-wp-logo-dark";
}
$footer_line = get_theme_mod("morse-wp-footer-line");
if ($footer_line == "primary"){
	$line_class = "morse-bg-primary";
} else if ($footer_line == "accent"){
	$line_class = "morse-bg-accent";
} else if ($footer_line == "none"){
	$line_class = "morse-none";
}
?>
<footer class="<?php echo $footer_class ?>">
	<div class="morse-wp-footer-line <?php echo $line_class ?>"></div>
	<div class="footer-inner container grid-container">
        <div class="footer-left">
            <div class="footer-logo"><img src="<?php echo get_theme_mod($footer_logo); ?>"></div>
            <p><?php echo get_theme_mod("morse-wp-footer-blurb"); ?></p>
        </div>
        <div class="footer-right">
	        <?php
	        foreach (get_menu_items_by_registered_slug("navbar") as $item){
		        echo "<div class=\"footer-right-item morse-font-accent uppercase-link\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
	        }
	        ?>
        </div>
	</div>
</footer>
<div class="post-footer">
    <div class="post-footer-inner container">
        <p>This website uses <a href="https://github.com/wwsalmon/morse-wp-theme">Morse</a>, a WordPress theme custom made for small newspapers by <a href="https://www.samsonzhang.com/">Samson Zhang</a>.</p>
    </div>
</div>
</body>
</html>
<?php
wp_footer();