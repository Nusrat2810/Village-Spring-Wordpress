<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="shortcut icon" href="<?php echo get_theme_file_uri('assets/img/favicons/favicon.ico') ?>">

	<?php wp_head(); ?>
</head>

<body>
	<header>
		<section id="carousel-banner" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<!--<img class="d-block w-100" src="<?php //echo get_theme_file_uri('assets/img/home/banner.png') 
														?>" alt="...">-->
					<div class="d-block w-100">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev d-none" type="button" data-bs-target="#carousel-banner" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next d-none" type="button" data-bs-target="#carousel-banner" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</section>
		<section id="navigation" class="sticky-top">
			<nav class="navbar navbar-expand-md">
				<div class="container">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbar-primary">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/lifestyle'); ?>" rel="smooth-scroll">Lifestyle</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/community'); ?>" rel="smooth-scroll">Community</a></li>
							<li class="nav-item company-brand">
								<a class="nav-link" href="<?php echo site_url('/home'); ?>" rel="smooth-scroll">
									<img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/logo.png') ?>" alt="...">
								</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/gallery'); ?>" rel="smooth-scroll">Gallery</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/contact'); ?>" rel="smooth-scroll">Connect</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>

	</header>
</body>