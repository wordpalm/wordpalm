<?php wp_head(); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name');?> - <?php bloginfo('description'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="pt-br">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<a href="<?php echo get_option('home'); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/projetox.png"></a>
		<div class="header_centralizado">
			<h1><?php bloginfo('name') ?></h1>
		</div>
	</div>
	<div class="menu">
		<div class="menu_centralizado">
			<ul>
				<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
				<?php wp_list_categories('title_li='); ?>
			</ul>
		</div>
	</div>
	