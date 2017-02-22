<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name')?></title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src='https://code.jquery.com/jquery-2.2.3.min.js'></script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="aside">
			<div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/image/logo.png" alt="VOFP"></a></div>
			</div>
			<div class="header_nav">

			<?php wp_nav_menu(array('theme_localion'=>'menu', 'menu_class'=>'navigation', 'container'=>'false')); ?>
			
			</div>
		</div>
	</header>