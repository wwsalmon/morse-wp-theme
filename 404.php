<?php get_header();
?>
	<div class="container grid-container">
		<div class="full-header">
			<h1 class="morse-font-accent morse-color-primary mb-2">404 - No page at this URL</h1>
			<div class="full-divider morse-bg-accent"></div>
		</div>
		<div class="stories-container">
			<div class="content-container border-bottom">
				<p>You've come to a broken URL. Maybe you followed a broken link, or something went wrong on our end. Double check that everything in the address is spelled correctly.</p>
				<p class="uppercase-link morse-font-accent align-right"><a href="<?php echo get_home_url() ?>">Take Me Home ></a></p>
			</div>
		</div>
		<div class="home-right">
			<?php if (is_active_sidebar("home_right")){
				dynamic_sidebar("home_right");
			}
			?>
		</div>
	</div>
<?php
get_footer();