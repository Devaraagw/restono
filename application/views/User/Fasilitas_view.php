<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Griya Oliver - Fasilitas</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-header.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-footer.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/facilities.css">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>./assets/img/favicon.webp" type="image/x-icon">
</head>

<body>

	<header>
		<div class="header-container">
			<nav class="header-nav-bar">
				<div class="header-nav-logo">
					<a href="index.html">
						<img src="<?= base_url('assets/img/griya.svg'); ?>"
							alt="star hotels logo" style="max-width: 200px; height: auto;">
					</a>
				</div>
				<ul class="header-nav-lists">
					<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/home'); ?>">Beranda</a></li>
					<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/kamar/index'); ?>">Data Kamar</a></li>
					<li class="header-nav-list"><a class="header-nav-link header-active" href="<?php echo site_url('user/fasilitas/index'); ?>">Fasilitas</a></li>
					<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/kontak/index'); ?>">Kontak</a></li>
					<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/faq/index'); ?>">FAQ</a></li>
					<li class="header-nav-list"><a class="header-btn header-btn-custom" href="https://timbu.com/search?query=hotel">Pesan</a></li>
				</ul>

				<div class="header-hamburger-icon">
					<div class="header-hamburger-line-1"></div>
					<div class="header-hamburger-line-2"></div>
					<div class="header-hamburger-line-3"></div>
				</div>
			</nav>

	</header>
	<main>
		<div class="container">

			<!-- Top Text -->
			<div class="page-header-container">
				<h2 class="page-header">Fasilitas Griya Oliver</h2>
				<hr />
				<p class="page-sub-header">
					Rasakan kenyamanan di kost griya oliver <br> dengan fasilitas yang lengkap
				</p>
			</div>

			<!-- Facilities Gallery -->
			<div class="container">
				<div class="containera">

					<div class="gallery">

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/gymnasium.webp" alt="gym">
							<h4>
								Kasur dan bantal
							</h4>
							<p class="imggrid">
								Kami menyediakan peralatan tidur yang lengkap dari mulai kasur, bantal, sprei bantal, dan sprei kasur.
							</p>
						</div>

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/helipad.webp" alt="helipad">
							<h4>Lemari</h4>
							<p class="imggrid">
								Kami menyediakan lemari yang bisa muat untuk maksimal 2 orang penyewa.
							</p>
						</div>

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/restaurants.webp" alt="restaurants">
							<h4>Kamar mandi dalam</h4>
							<p class="imggrid">
								Kamar mandi dalam dengan fasilitas berupa ember, gayung, cantolan, dan sikat.
							</p>
						</div>

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/swimming_pool.webp" alt="swim">
							<h4>Rak sepatu</h4>
							<p class="imggrid">
								Masing-masing kamar memiliki 1 rak sepatu di depan kamar.
							</p>
						</div>

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/swimming_pool.webp" alt="swim">
							<h4>Dapur bersama</h4>
							<p class="imggrid">
								Dapur dipakai bergantian dengan beberapa fasilitas seperti kompor, gas, dan peralatan masak lain.
							</p>
						</div>

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/swimming_pool.webp" alt="swim">
							<h4>Tempat jemur</h4>
							<p class="imggrid">
								Tempat jemur berada di lantai 1 dan lantai 2.
							</p>
						</div>

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/swimming_pool.webp" alt="swim">
							<h4>Sprei kasur dan bantal</h4>
							<p class="imggrid">
								We have the best equipped swimming pool in the country with an
								instructor waiting to guide you
							</p>
						</div>

						<div class="gallery-item">
							<img class="gallery-image" src="<?php echo base_url(); ?>./assets/img/swimming_pool.webp" alt="swim">
							<h4>Wifi</h4>
							<p class="imggrid">
								Wifi sudah termasuk dalam harga kost, bisa dipakai 24 jam.
							</p>
						</div>

					</div>

				</div>
			</div>

	</main>

	<footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">Griya Oliver</h3>
					<p>Memberikan kenyamanan seperti di rumah</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Kontak kami</h3>
					<p class="footer-description-detail"> 
						<img src="<?php echo base_url(); ?>./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>Jl. Beidjen Katamso no 5, Dusun I</span></p>
					<p class="footer-description-detail">
						<img src="<?php echo base_url(); ?>./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
						<span>
					 08185956620</span></p>
					<p class="footer-description-detail">
						<img src="<?php echo base_url(); ?>./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>griyaoliver2gmail.com</span> </p>
				</div>
				<div class="footer-follow-us">
					<h3 class="footer-description-title">Ikuti kami</h3>
					<ul class="footer-follow-us-lists">
						<li class="follow-us-list">
							<a href="">
								<img src="<?php echo base_url(); ?>./assets/img/facebook.svg" alt="star hotels facebook page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="<?php echo base_url(); ?>./assets/img/twitter.svg" alt="star hotels twitter page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="<?php echo base_url(); ?>./assets/img/instagram.svg" alt="star hotels instagram page">
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</footer>
	<script src="<?php echo base_url(); ?>assets/js/toggleHamburger.js"></script>
</body>

</html>