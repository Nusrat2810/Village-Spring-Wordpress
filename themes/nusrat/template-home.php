<?php defined('ABSPATH') || die('No direct script access allowed.'); ?>

<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>Village at Clear Springs</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicons/favicon-48x48.png">
		<link rel="manifest" href="assets/img/favicons/manifest.json">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="#fff">
		<meta name="application-name" content="frontend-workflow-webpack">
		<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="167x167" href="assets/img/favicons/apple-touch-icon-167x167.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
		<link rel="apple-touch-icon" sizes="1024x1024" href="assets/img/favicons/apple-touch-icon-1024x1024.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-title" content="frontend-workflow-webpack">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-640x1136.png">
		<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-750x1334.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-828x1792.png">
		<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-1125x2436.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-1242x2208.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-1242x2688.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-1536x2048.png">
		<link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-1668x2224.png">
		<link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-1668x2388.png">
		<link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-2048x2732.png">
		<link rel="apple-touch-startup-image" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="assets/img/favicons/apple-touch-startup-image-1620x2160.png">
		<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-1136x640.png">
		<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-1334x750.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-1792x828.png">
		<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2436x1125.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2208x1242.png">
		<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2688x1242.png">
		<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2048x1536.png">
		<link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2224x1668.png">
		<link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2388x1668.png">
		<link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2732x2048.png">
		<link rel="apple-touch-startup-image" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="assets/img/favicons/apple-touch-startup-image-2160x1620.png">
		<link rel="icon" type="image/png" sizes="228x228" href="assets/img/favicons/coast-228x228.png">
		<meta name="msapplication-TileColor" content="#fff">
		<meta name="msapplication-TileImage" content="assets/img/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml">
		<link rel="yandex-tableau-widget" href="assets/img/favicons/yandex-browser-manifest.json">
		<link href="assets/css/app.css" rel="stylesheet">
	</head>

	<body>
		<section id="carousel-banner" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="assets/img/home/banner.png" alt="...">
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
							<li class="nav-item"><a class="nav-link" href="lifestyle.html" rel="smooth-scroll">Lifestyle</a></li>
							<li class="nav-item"><a class="nav-link" href="community.html" rel="smooth-scroll">Community</a></li>
							<li class="nav-item company-brand">
								<a class="nav-link" href="index.html" rel="smooth-scroll">
									<img class="img-fluid" src="assets/img/logo.png" alt="...">
								</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="gallery.html" rel="smooth-scroll">Gallery</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.html" rel="smooth-scroll">Connect</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>
		<main id="primary">
			<section id="home-section-1" class="text-center pt-5">
				<div class="container py-3">
					<div class="row justify-content-center">
						<div class="col-lg-6 text-center text-green">
							<p>Village at Clear Springs has submitted a rezoning application to Loudoun County based on the 2019 Comprehensive Plan. This website outlines our proposal to the County.</p>
							<hr class="border-green mx-5 my-5" />
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-7 text-center">
							<p>Village at Clear Springs is located south of Heritage High School, between Evergreen Mills Road and the Dulles Greenway. In 2019 Loudoun County adopted a new Comprehensive Plan that designated this assemblage of properties to be part of the Transition Policy area, previously identified as rural policy area. A residential development, served by Loudoun Water, was approved for this site.</p>
						</div>
					</div>
				</div>
			</section>

			<section id="community" class="container py-5">
				<div class="row">
					<div class="col-md-6">
						<div class="heading text-start">
							<h2 class="heading-title">Village at Clear Springs is a Proposed Master Planned Community</h2>
						</div>
						<div class="content">
							<p>Village at Clear Springs is designed to create a framework for an innovative residential community, one that is pedestrian oriented and retains the scenic character of the natural environment. The overall community design strikes a balance between nature and convenience, with miles of trails connecting the community to parks and the larger surrounding area.</p>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-fluid" src="assets/img/home/bike-trail.png" alt="...">
					</div>
				</div>
			</section>

			<section id="benefits" class="container py-5">
				<div class="row">
					<div class="col-12">
						<div class="heading mb-5">
							<h2 class="heading-title">Some of the community benefits include:</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0 shadow-none mb-3">
							<div class="card-img d-flex justify-content-center align-items-center">
								<img class="img-fluid" src="assets/img/home/carbon-footprint.png" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center">The design team is committed to reducing the overall carbon footprint with green building methods and optional Smart Homes technologies.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0 shadow-none mb-3">
							<div class="card-img d-flex justify-content-center align-items-center">
								<img class="img-fluid" src="assets/img/home/noun_House_3560941.png" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center">Universal Design for the Active Adult Homes.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0 shadow-none mb-3">
							<div class="card-img d-flex justify-content-center align-items-center">
								<img class="img-fluid" src="assets/img/home/forest.png" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center">Every home is designed to be in close proximity to wooded, natural open spaces. The community is planned around a central core of natural wetlands, forests and meadows that preserve the designated Transition Policy Area.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0 shadow-none mb-3">
							<div class="card-img d-flex justify-content-center align-items-center">
								<img class="img-fluid" src="assets/img/home/people.png" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center">Attainable and Workforce Homes for young professionals, first responders, teachers, support staff, retail workers, and families in the County. Approximately 23% of the total number of residential units are proposed to be Attainable and Workforce Homes.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0 shadow-none mb-3">
							<div class="card-img d-flex justify-content-center align-items-center">
								<img class="img-fluid" src="assets/img/home/bus.png" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center">A planned Loudoun Transit bus stop for public transportation to key areas in the County and pick up points for trips to Metro.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0 shadow-none">
							<div class="card-img d-flex justify-content-center align-items-center">
								<img class="img-fluid" src="assets/img/home/school.png" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text">Mitigating the impact on the County schools with approximately 40% of the proposed residential units are planned for the over 55+ community.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="life-style" class="container-fluid py-5">
				<div class="container">
					<div class="row">
						<div class="col-md-6 my-3">
							<div class="card h-100 bg-transparent border-0 shadow-none mb-3">
								<img src="assets/img/home/lifestyle.png" class="img-fluid" alt="...">
								<div class="card-body d-flex flex-column text-center p-0">
									<div class="heading">
										<h2 class="heading-title py-4">Lifestyle</h2>
									</div>
									<p class="card-text">The vision for Village At Clear Springs is to weave a variety of housing types and age groups into an accessible neighborhood that is surrounded by amenities, parks, and the natural environment. This community will be inter-connected through sidewalks and an extensive trail network including boardwalks over environmentally sensitive areas.</p>
									<a href="lifestyle.html" class="btn my-button mx-auto mt-auto">FIND OUT MORE</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 my-3">
							<div class="card h-100 bg-transparent border-0 shadow-none mb-3">
								<img src="assets/img/home/community.png" class="img-fluid" alt="...">
								<div class="card-body d-flex flex-column text-center p-0">
									<div class="heading">
										<h2 class="heading-title py-4">Community</h2>
									</div>
									<p class="card-text">Village at Clear Spring's team has worked to design a community that is unique and sustainable for years to come. Homes are being designed for all families - to include first time buyers, move-up buyers, empty nesters, and those looking to age in place. The team is focused on eco-living, affordability, and sustainability.</p>
									<a href="community.html" class="btn my-button mx-auto mt-auto">FIND OUT MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="numbers" class="container-fluid py-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="heading mb-5">
								<h2 class="heading-title">Village at Clear Springs By The Numbers</h2>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card border-0 shadow-none mb-3">
								<div class="card-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="assets/img/home/noun_land_3097483.png" alt="...">
								</div>
								<div class="card-body">
									<p class="card-text text-center">246 Acres with substantial space designated to active and passive open space.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card border-0 shadow-none mb-3">
								<div class="card-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="assets/img/home/noun_House_3560941.png" alt="...">
								</div>
								<div class="card-body">
									<p class="card-text text-center">Up to 468 Active Adult residential: single family detached, single family attached and condominiums.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card border-0 shadow-none mb-3">
								<div class="card-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="assets/img/home/noun_House_3560941.png" alt="...">
								</div>
								<div class="card-body">
									<p class="card-text text-center">Up to 436 single family detached and single family attached market rate residential homes.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card border-0 shadow-none mb-3">
								<div class="card-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="assets/img/home/noun_House_3560941.png" alt="...">
								</div>
								<div class="card-body">
									<p class="card-text text-center">Up to 276 Attainable and Workforce Homes.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="banner" class="container-fluid g-0">
				<img class="d-block w-100" src="assets/img/home/Mask Group 5.png" alt="...">
			</section>

			<section id="plan" class="py-5">
				<div class="container">
					<div class="heading">
						<h2 class="heading-title">Community Site Plan</h2>
					</div>
					<div class="content text-center">
						<p>Village at Clear Springs features diverse housing and a mix of active and passive amenities, such as pocket parks, community trails, community clubhouse, pools, and subject to zoning approval a world-class USTA Mid-Atlantic Tennis Campus.</p>
						<img class="img-fluid" src="assets/img/home/site-plan.jpg" alt="...">
					</div>
				</div>
			</section>

			<section id="stay-up" class="container-fluid px-0">
				<div class="section-inner py-5">
					<div class="container">
						<div class="heading">
							<h2 class="heading-title text-white">Stay Up To Date</h2>
						</div>
						<div class="contact-form d-flex justify-content-center">
							<form id="form-newsletter" class="row" action="#" method="POST">
								<div class="col-md-6 form-group my-1">
									<label for="email" class="sr-only">Email</label>
									<input type="email" name="email" class="form-control form-control-lg rounded-0 shadow-none" id="email" placeholder="Email" required>
								</div>
								<div class="col-md-6 my-1">
									<button type="submit" name="btnAction" value="subscribe" class="btn btn-lg my-button w-100">Connect With Us</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<section id="clear" class="container-fluid py-5">
				<div class="container text-center">
					<div class="logo">
						<img src="assets/img/logo-footer.png" alt="...">
					</div>
				</div>
			</section>
		</main>

		<footer id="footer" class="container py-5">
			<div class="d-flex align-items-center">
				<div class="flex-grow-1">
					<p class="copyright text-xs-center m-0">
						<span class="d-block text-uppercase">&copy; 2022 VILLAGE AT CLEAR SPRINGS</span>
						<span class="d-block">Website, plans, specification and content are subject to change during the rezoning process and are for illustrative purposes only. All Rights Reserved. Non-Discriminatory Policy. Village at Clear Springs does not and shall not discriminate on the basis of race, color, religion (creed), gender expression, age, national origin (ancestry), disability, marital status, sexual orientation, or military status in any of its activities or operations.</span>
					</p>
				</div>
				<div class="flex-shrink-0 ms-5">
					<img class="img img-fluid logo-eho" src="assets/img/logo-eho.png" alt="Equal Housing Opportunity" />
				</div>
			</div>
		</footer>

		<div class="modal fade" id="contact-form-alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content bg-green-dark border-secondary text-white rounded-0">
					<div class="modal-header border-0">
						<button type="button" class="btn-close bg-transparent text-white" data-bs-dismiss="modal" aria-label="Close" style="background-image:none">
							<i class="fas fa-times"></i>
						</button>
					</div>
					<div class="modal-body text-center">
						<p><img class="img" src="assets/img/logo.png" alt="..." style="height:65px"></p>
						<div id="contact-form-alert-container">
							<p>Thank you for registering with Village at Clear Springs. You will receive updated information about our rezoning as it becomes available.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script defer src="assets/js/runtime.min.js"></script>
		<script defer src="assets/js/jquery.min.js"></script>
		<script defer src="assets/js/bootstrap.min.js"></script>
		<script defer src="assets/js/lodash.min.js"></script>
		<script defer src="assets/js/app.min.js"></script>
		<script defer src="assets/js/custom.min.js"></script>
	</body>

</html>
