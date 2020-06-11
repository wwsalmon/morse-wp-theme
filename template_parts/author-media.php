<?php
$media = \Media_Credit::author_media_and_posts( ['author_id' => get_the_author_meta("ID")] );
if ( !(empty( $media )) ) :?>
    <div class="media-title uppercase-link morse-font-accent mb-3"><span>Media by this author</span></div>
    <div class="media-archive clearfix border-bottom">
		<?php
		foreach ( $media as $attachment ) : ?>
			<?php
			\setup_postdata( $attachment );

			// If media is attached to a post, link to the parent post. Otherwise, link to attachment page itself.
			?>
            <div class='media-archive-item mb-2' id='attachment-<?php echo \esc_attr( $attachment->ID ); ?>'>
				<?php if ( $attachment->post_parent > 0 ) : ?>
                    <a href="<?php \the_permalink( $attachment->post_parent ); ?>" title="<?php \the_title_attribute( $attachment->post_parent ); ?>"><?php echo \wp_get_attachment_image( $attachment->ID, 'large' ); ?></a>
				<?php else : ?>
					<?php echo \wp_get_attachment_link( $attachment->ID, 'large', true ); ?>
				<?php endif; ?>
            </div>
		<?php
		endforeach; ?>
        <script>
		const container = document.querySelector(".media-archive");
		const options = {
            itemSelector: ".media-archive-item",
            columnWidth: ".media-archive-item",
            gutter: 24
		};

		imagesLoaded(container, () => {
            const msnry = new Masonry(container, options);
		});
        </script>
    </div>
<?php endif;