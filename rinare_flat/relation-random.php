<?php foreach((get_the_category()) as $cat)
	{
     $category_id = $cat->cat_ID;
    }
?>

<?php 
    $args = array(
                  'category' => $category_id,
                  'numberposts' => 8,
                  'orderby' => 'rand',
                  'exclude' => array($post->ID, 249, 686, 522, 202, 196, 194, 170, 161, 151, 144, 127, 102, 94, 93, 92, 89, 88, 84, 83, 81, 77, 74, 71, 65, 63, 60, 58, 59, 48, 41, 33, 38, 32, 29, 25, 24, 19, 11)); ?>

<?php $rand_posts = get_posts($args); ?>

<?php foreach($rand_posts as $post):
      setup_postdata($post); ?>
    
              
		<div class="linkBox">
			<a href="<?php the_permalink(); ?>">
			<div class="thumb">
				<?php if (has_post_thumbnail()) : ?>
				<?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); ?>
				<img src="<?php echo $image_attributes[0]; ?>" width="100%" height="auto">
				<?php else: ?>
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/noImage300.png" width="150" height="150" alt="No image">
				<?php endif; ?>
			</div>
			<div class="cover"></div>
			<div class="date"><?php echo get_post_time('Y.m.d D.'); ?></div>
			<div class="title"><?php the_title(); ?></div>
			</a>
		</div><!-- end .linkBox -->
	   	   
<?php endforeach;
	  wp_reset_postdata(); ?> 