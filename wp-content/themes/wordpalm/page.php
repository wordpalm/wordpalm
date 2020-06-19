<?php get_header(); ?>
<div class="my_container">
	<div class="my_side">
		<?php get_sidebar(); ?>
	</div>
	<?php
	if(have_posts()) : the_post();
		?>
		<h1><a href="<?php the_permalink(); ?>" id="title"><?php the_title(); ?></a></h1>
		<div class="content">
			<div class="thumbnail"><?php the_post_thumbnail(array(200,185)); ?></div>
			<p><?php the_content(); ?></p>
		</div>
	<?php else: ?>
		<p>Não há conteúdo</p>
		<?php
	endif;
	?>
</div>
<div style="clear: both;"></div>
<?php get_footer(); ?>
