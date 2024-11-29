<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamar</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-header.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/global-footer.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/rooms-and-suites.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/detailkamar.css">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>./assets/img/favicon.webp" type="image/x-icon">
</head>
<body>
    <header>
        <div class="header-container">
            <nav class="header-nav-bar">
                <div class="header-nav-logo">
                    <a href="index.html">
                        <img src="<?= base_url('assets/img/griya.svg'); ?>" alt="star hotels logo" style="max-width: 200px; height: auto;">
                    </a>
                </div>
                <ul class="header-nav-lists">
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/home'); ?>">Beranda</a></li>
                    <li class="header-nav-list"><a class="header-nav-link header-active" href="<?php echo site_url('user/kamar/index'); ?>">Data Kamar</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/fasilitas/index'); ?>">Fasilitas</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/kontak/index'); ?>">Kontak</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('user/faq/index'); ?>">FAQ</a></li>
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="">Pesan</a></li>
                </ul>
                <div class="header-hamburger-icon">
                    <div class="header-hamburger-line-1"></div>
                    <div class="header-hamburger-line-2"></div>
                    <div class="header-hamburger-line-3"></div>
                </div>
            </nav>
        </div>
    </header>
    
    

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
                        <span>Jl. Brigjen Katamso no 5, Dusun I</span>
                    </p>
                    <p class="footer-description-detail">
                        <img src="<?php echo base_url(); ?>./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
                        <span>08185956620</span>
                    </p>
                    <p class="footer-description-detail">
                        <img src="<?php echo base_url(); ?>./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
                        <span>griyaoliver@gmail.com</span>
                    </p>
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
</body>
</html>
