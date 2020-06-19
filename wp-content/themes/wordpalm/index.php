<?php get_header(); ?>
<div class="my_container">
	<div class="my_side">
		<?php get_sidebar(); ?>
	</div>
	<?php
	if(have_posts()) : while(have_posts()): the_post();
		?>
		<h1><a href="<?php the_permalink(); ?>" id="title"><?php the_title(); ?></a></h1>
		<div class="content">
			<div class="thumbnail"><?php the_post_thumbnail(array(200,185)); ?></div>
			<p><?php the_excerpt(); ?><i>publicado em: <?php the_date('d/m/Y'); ?> ás <?php the_time('h:i:s') ?></i> - <?php comments_number("Nenhum comentário","1 comentário","% comentários"); ?><br>Publicado por: <?php the_author(); ?></p>
		</div>
		<?php 
	endwhile; ?>
	<?php else: ?>
		<p>Não há posts</p>
		<?php
	endif;
	?>
</div>
<div style="clear: both;"></div>
<?php get_footer(); ?>

