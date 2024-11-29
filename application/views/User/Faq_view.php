<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Griya Oliver - Kamar</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-header.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-footer.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/rooms-and-suites.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/index.css">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>./assets/img/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/faq.css">
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
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/fasilitas/index'); ?>">Fasilitas</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/kontak/index'); ?>">Kontak</a></li>
                    <li class="header-nav-list"><a class="header-nav-link header-active" href="<?php echo site_url('user/faq/index'); ?>">FAQ</a></li>
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="https://timbu.com/search?query=hotel">Pesan</a></li>
                </ul>

                <div class="header-hamburger-icon">
                    <div class="header-hamburger-line-1"></div>
                    <div class="header-hamburger-line-2"></div>
                    <div class="header-hamburger-line-3"></div>
                </div>
            </nav>

    </header>

    
<section>
<div class="container">

<!-- Top Text -->
<div class="page-header-container">
    <h2 class="page-header">Frekuenly Ask Question</h2> <br>
    <p class="page-sub-header"> Pertanyaan yang sering ditanyakan oleh calon <br>penyewa Griya Oliver </p>
</div>

    <div class="faq">
        <div class="question">
            <h3>Berapa harga untuk menyewa di kost griya oliver?</h3>
            <svg width="15" height="10" viewBox="0 0 42 25">
                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="answer">
            <p>
                Biaya untuk 1 orang yaitu Rp 550.000, sedangkan untuk 2 orang(double) yaitu Rp 650.000
            </p>
        </div>
    </div> <!-- End of faq -->

    <div class="faq">
        <div class="question">
            <h3>Fasilitas apa saja yang ditawarkan oleh kost griya oliver?</h3>
            <svg width="15" height="10" viewBox="0 0 42 25">
                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="answer">
            <p>
                HTML and CSS are considered beginner-friendly programming languages for web development.
            </p>
        </div>
    </div> <!-- End of faq -->

    <div class="faq">
        <div class="question">
            <h3>Apakah tamu boleh berkunjung ke kost?</h3>
            <svg width="15" height="10" viewBox="0 0 42 25">
                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="answer">
            <p>
                Web development is the process of creating and maintaining websites. It includes web design, web publishing, and database management.
            </p>
        </div>
    </div> <!-- End of faq -->

    <div class="faq">
        <div class="question">
            <h3>Bagaimana regulasi untuk tamu yang ingin menginap di kost?</h3>
            <svg width="15" height="10" viewBox="0 0 42 25">
                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="answer">
            <p>
                Biaya untuk 1 orang yaitu Rp 550.000, sedangkan untuk 2 orang(double) yaitu Rp 650.000
            </p>
        </div>
    </div> <!-- End of faq -->

    <div class="faq">
        <div class="question">
            <h3>Seberapa jauh jarak kost ke Pakuwon Mall dan The Park Mall Solo??</h3>
            <svg width="15" height="10" viewBox="0 0 42 25">
                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="answer">
            <p>
                Biaya untuk 1 orang yaitu Rp 550.000, sedangkan untuk 2 orang(double) yaitu Rp 650.000
            </p>
        </div>
    </div> <!-- End of faq -->

</section>
<footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">Griya Oliver</h3>
					<p>Memberikan kenyamanan seperti dirumah</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Kontak</h3>
					<p class="footer-description-detail"> 
						<img src="<?php echo base_url(); ?>./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>Jl. Brigjen Katamso no 5, Dusun I</span></p>
					<p class="footer-description-detail">
						<img src="<?php echo base_url(); ?>./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
						<span>
					 08185956620</span></p>
					<p class="footer-description-detail">
						<img src="<?php echo base_url(); ?>./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>griyaoliver@gmail.com</span> </p>
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
<script src="<?php echo base_url('assets/js/app.js'); ?>"> </script>
</body>
</html>
