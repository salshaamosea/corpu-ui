<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/style.css">
</head>

<body>
	<div class="search-box">
		<input type="text" placeholder="Search here..." />
	</div>

	<div class="nav-container">
		<div class="wrapper">
			<nav>
				<div class="logo">
					Learning Analytics
				</div>

				<ul class="nav-items">
					<li>
						<a href="#">blog</a>
					</li>

					<li>
						<a href="#">contact</a>
					</li>

					<li>
						<a href="#">about</a>
					</li>

					<li>
						<a class="nav-btn-container" href="#">
							<img class="search-btn" src="images/search-icon.svg" alt="" />
							<img class="close-btn" src="images/close-icon.svg" alt="" />
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="header-container">
		<div class="wrapper">
			<header>
				<div class="hero-content">
					<h1>Hi, I’m Darlene</h1>
					<p>
						I design beautiful websites & mobile apps that modern trends
						demand
					</p>
					<a href="#">
						Contact Me
					</a>
				</div>

				<div class="hero-image">
					<img src="images/photo.png" alt="" />
					<div class="photo-bg"></div>
				</div>
			</header>

			<div class="social-icons">
				<a href="#">
					<img src="images/instagram-logo.png" alt="" />
				</a>
				<a href="#">
					<img src="images/behance-logo.png" alt="" />
				</a>
				<a href="#">
					<img src="images/dribbble-logo.png" alt="" />
				</a>
			</div>
		</div>
	</div>

	<script src="<?= base_url() ?>public/css/main.js"></script>
</body>

</html>