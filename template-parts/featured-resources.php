<a class="resource" title="<?php the_title_attribute(); ?>" href="<?php echo get_permalink() ?>">
	<div class="resource__card">
		<div class="resource__image" style="background-image: url(<?php the_post_thumbnail_url('small'); ?>)" alt="<?php the_title_attribute(); ?>">&nbsp;</div>
		<div class="resource__details">
			<h3 class="resource__title"><?php the_title(); ?></h3>
		</div>
	</div>
</a>
<!-- #post-<?php the_ID(); ?> -->
