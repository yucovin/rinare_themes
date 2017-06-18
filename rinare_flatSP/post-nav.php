<div class="postNav clearfix">
	<?php $next_post = get_previous_post();
            $prev_post = get_next_post();   
         if( $next_post || $prev_post ) :?>
         
        <div class="prePost">
			<?php if( $prev_post ) : ?>
			<?php next_post_link('%link'); ?>
			<?php endif; ?>
		</div>
		<div class="nextPost">
			<?php if( $next_post ) : ?>
			<?php previous_post_link('%link'); ?>
			<?php endif; ?>
		</div>
					
    <?php endif; ?> 
</div>