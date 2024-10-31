<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Griya Oliver - kontak</title>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>

		<link
			href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-header.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-footer.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/accesibility.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/contact-page.css" />
		<link
			rel="shortcut icon"
			href="<?php echo base_url(); ?>./assets/img/favicon.webp"
			type="image/x-icon"
		/>
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
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('home'); ?>">Beranda</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('kamar/index'); ?>">Data Kamar</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('fasilitas/index'); ?>">Fasilitas</a></li>
						<li class="header-nav-list"><a class="header-nav-link header-active" href="<?php echo site_url('kontak/index'); ?>">Kontak</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('faq/index'); ?>">Faq</a></li>
						<li class="header-nav-list"><a class="header-btn header-btn-custom" href="https://timbu.com/search?query=hotel">Pesan</a></li>
					</ul>

					<div class="header-hamburger-icon">
						<div class="header-hamburger-line-1"></div>
						<div class="header-hamburger-line-2"></div>
						<div class="header-hamburger-line-3"></div>
					</div>
				</nav>
			</div>
		</header>

		<main>
			<div class="container">
				<!-- Header part contain Title page and descriptoion -->
				<div class="header">
					<h2>Kontak Kami</h2>
					<hr/>
					<p>
						Tertarik untuk menyewa? Atau ada hal lain yang ingin ditanyakan? isi form berikut
					</p>
				</div>

				<!-- End of header Part -->

				<!-- Main part contain form and informatoion contactus -->
				<div class="main">
					<div class="contact">
						<!-- Form start here -->
						<div class="contact-form">
							<form action="#">
								<div class="contact-detail">
									<label class="hide" for="name">Masukkan namamu</label>
									<input type="text" class="form-control" placeholder="Nama" id="name" />
									<label class="hide" for="email">Masukkan alamat email</label>
									<input
										type="email"
										class="form-control"
										placeholder="Email"
										id="email"
										name="email"
									/>
								</div>
								<label class="hide" for="message">Pesan</label>
								<textarea
									class="form-control"
									rows="5"
									id="comment"
									placeholder="Pesan"
									style="resize: none; width: 100%;"
									name="message"
								></textarea>

								<button type="submit" class="btn">Kirim Pesan</button>
							</form>
						</div>
						<!-- Form finish here -->

						<!-- Contact Us start here -->
						<div class="contact-us">
							<h3>Kontak Kami</h3>

							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-map-marker"
									aria-hidden="true"
								></i
								>Jl. Brigjen Katamso No.5,&nbsp;Dusun&nbsp;I</span
							>
							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-phone"
									aria-hidden="true"
								></i
								>0812 2717 4673</span
							>
							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-envelope-o"
									aria-hidden="true"
								></i
								>griyaoliver@gmail.com</span
							>
						</div>
						<!-- Contact Us Finish here -->
					</div>
				</div>
			</div>
		</main>

		<footer class="footer">
			<div class="footer-container">
				<nav class="footer-nav">
					<div class="footer-description">
						<h3 class="footer-description-title">Griya Oliver</h3>
						<p>Dapatkan kenyamanan seperti di rumah</p>
					</div>
					<div class="footer-contact-us">
						<h3 class="footer-description-title">Kontak kami</h3>
						<p class="footer-description-detail"> 
							<img src="<?php echo base_url(); ?>./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">
	
							<span>Jl. Bridjen Katamso no 5, Dusun I</span></p>
						<p class="footer-description-detail">
							<img src="<?php echo base_url(); ?>./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
							<span>
						 08185956620</span></p>
						<p class="footer-description-detail">
							<img src="<?php echo base_url(); ?>./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
							<span>griyaoliver@gmail.com</span> </p>
					</div>
					<div class="footer-follow-us">
						<h3 class="footer-description-title">Follow Us</h3>
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
