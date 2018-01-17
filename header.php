<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Head -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="Stained glass business in Houston, TX.">
	<link href="./css/style.css" rel="stylesheet">
	<link rel="icon" href="./images/favicon.ico">
	<?php wp_head(); ?>
	<!-- Google Fonts -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet">
</head>

<!-- Body -->
<body <?php body_class(); ?>>

	<!-- Container -->
	<div class="container">

		<!-- Site-nav -->
		<div id="nav-container">
			<div class="row">
				<div class="col" id="title">
					<h1>
						<a href="<?php bloginfo('url'); ?>">ART GLASS BY <span id="wells">WELLS</span></a>
					</h1>
				</div>
			</div>
			<div class="row" id="links">
				<div class="col">
					<ul class="visible" id="nav">
					<?php
					wp_nav_menu( array(
						'menu' => 'primary',
						'theme_location'    => 'primary',
						'container_class'   => 'navbar-collapse collapse',
						'menu_class'        => 'nav navbar-nav navbar-right'
					));
					?>
				</ul>
				</div>
			</div>
		</div>
		<!-- Container -->
		<div class="index">
