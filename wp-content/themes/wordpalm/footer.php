<div class="footer">
	<div class="central_footer">
		<div class="right_footer">
			<ul>
				<p style="float: right;">
					<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
					<?php wp_list_pages('title_li='); ?>
				</p>
			</ul>
		</div>
		<a href="<?php get_option('home'); ?>"><?php bloginfo('name'); ?>&reg;</a> - Todos os direitos reservados&copy;
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>