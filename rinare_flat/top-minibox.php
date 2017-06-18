<div class="miniBoxPost">
	
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>">
			
		<div class="eyeCatch">
			<?php if (has_post_thumbnail()) : ?>
			
			<?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id()); ?>
			<img src="<?php echo $image_attributes[0]; ?>" width="200" height="auto">
			<?php else: ?>
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/noImage200x167.jpg" width="200" height="167" alt="No image">
			<?php endif; ?>
		</div>
		
		</a>
	</div><!-- end .thumbnail -->
	
	<time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y  m/d D.'); ?></time>
	
	<div class="titleDay">
		<a href="<?php the_permalink(); ?>">
			<h3><?php the_title(); ?></h3>
		</a>
	</div>
	
</div>