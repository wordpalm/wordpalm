<?php get_header(); ?>
<div class="my_container">
	<div class="my_side">
		<?php get_sidebar(); ?>
	</div>
	<?php
	if(have_posts()) : while(have_posts()): the_post();
		?>
		<div class="post_container">
			<h1><a href="<?php the_permalink(); ?>" id="title"><?php the_title(); ?></a></h1>
			<p style="text-align: center;"><?php the_post_thumbnail(array(300,300)) ?></p>
			<p><?php the_content(); ?></p>
			<p>Publicado por <?php the_author(); ?> em: <?php the_date('d/m/Y') ?> ás <?php the_time('h:i:s') ?>.</p>
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