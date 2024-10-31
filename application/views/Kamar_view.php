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
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('home'); ?>">Beranda</a></li>
                    <li class="header-nav-list"><a class="header-nav-link header-active" href="<?php echo site_url('kamar/index'); ?>">Data Kamar</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('fasilitas/index'); ?>">Fasilitas</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('kontak/index'); ?>">Kontak</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('faq/index'); ?>">Faq</a></li>
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="https://timbu.com/search?query=hotel">Pesan sekarang</a></li>
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
                <h2 class="page-header">Kamar Griya Oliver</h2>
                <hr />
                <p class="page-sub-header">
                    Dapatkan kenyamanan tidur dikamar <br>
                    Griya Oliver
                </p>
            </div>

            <!-- Special offers section -->
            <!-- <section class="special-offers">
                <div class="row center-lg">
                    <div class="col image-col right-marg">
                        <img src="<?php echo base_url(); ?>assets/img/hotel-1.webp" alt="room-image" class="small-image">
                        <img src="<?php echo base_url(); ?>assets/img/hotel-2.webp" alt="room-image" class="small-image">
                        <img src="<?php echo base_url(); ?>assets/img/hotel-3.webp" alt="room-image" class="small-image">
                        <div class="side-by-side-container">
                            <div class="large-image-container">
                                <img src="<?php echo base_url(); ?>assets/img/hotel-4-large.webp" alt="room-image-large" class="large-image">
                            </div>
                            <section class="stacked-image-container">
                              <div><img src="<?php echo base_url(); ?>assets/img/hotel-5.webp" alt="room-image" class="small-image"></div>
                              <div><img src="<?php echo base_url(); ?>assets/img/hotel-6.webp" alt="room-image" class="small-image"></div>
                            </section>
                        </div>
                    </div>
                    <div class="col">
                        <h3 class="offers-title">Special Offers</h3>
                        <p class="offers-sub-title">
                            Get 10% discount off this city view- standard room. <br> Offers valid till june 31st 2020
                        </p>
                        <ul class="offers-list">
                            <li>
                                <div>
                                    <img src="<?php echo base_url(); ?>assets/img/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text">Free Wi-Fi Service</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="<?php echo base_url(); ?>assets/img/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text">Best Rate Guarantee</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="<?php echo base_url(); ?>assets/img/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text">Free DSTV Access</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-fill btn-large">View More</a>
                    </div>
                </div> -->
            </section>

            <!-- Rooms -->
            <section class="rooms-section">
                <div class="row room-section-header-container">
                    <div class="col col-3">
                        <h4 class="room-section-header active-header" id="standard-room">Lantai 1</h4>
                    </div>
                    <div class="col col-3">
                        <h4 class="room-section-header" id="king-room">Lantai 2</h4>
                    </div>
                </div>
                <div class="row center-lg">
                    <div class="rooms col col-2">
                        <img src="https://res.cloudinary.com/start-ng/image/upload/v1591638448/Rectangle_42_nastdj.png"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 1</h3>
                        <p class="room-text">Ruangan bersih dan <br> nyaman</p>
                        <div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">Maksimal 2 orang</p>
                            </div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/bed.png" alt="tick" class="list-icon">
                                <p class="list-text">1 Kasur</p>
                            </div>
                        </div>
                        <p class="amount-text">Rp 550.000</p>
                        <div class="buttons-container">
                            <a href="#" class="btn btn-ghost">Selengkapnya</a>
                            <a href="https://timbu.com/search?query=hotel" class="btn btn-fill">Pesan sekarang</a>
                        </div>
                    </div>
                    <div class="rooms col col-2">
                        <img src="https://res.cloudinary.com/start-ng/image/upload/v1591638449/Rectangle_43_d9eepu.png"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 2</h3>
                        <p class="room-text">Ruangan bersih dan <br> nyaman</p>
                        <div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">Maksimal 2 orang</p>
                            </div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/bed.png" alt="tick" class="list-icon">
                                <p class="list-text">1 Kasur</p>
                            </div>
                        </div>
                        <p class="amount-text">Rp 500.000</p>
                        <div class="buttons-container">
                            <a href="#" class="btn btn-ghost">Selengkapnya</a>
                            <a href="https://timbu.com/search?query=hotel" class="btn btn-fill">Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="rooms col col-2">
                        <img src="https://res.cloudinary.com/start-ng/image/upload/v1591638448/Rectangle_44_anerdv.png"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 3</h3>
                        <p class="room-text">Ruangan bersih dan <br> nyaman</p>
                        <div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">Maksimal 2 orang</p>
                            </div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/bed.png" alt="tick" class="list-icon">
                                <p class="list-text">1 Kasur</p>
                            </div>
                        </div>
                        <p class="amount-text">Rp 550.000</p>
                        <div class="buttons-container">
                            <a href="#" class="btn btn-ghost">Selengkapnya</a>
                            <a href="https://timbu.com/search?query=hotel" class="btn btn-fill">Pesan sekarang</a>
                        </div>
                    </div>
                    <div class="rooms col col-2">
                        <img src="https://res.cloudinary.com/start-ng/image/upload/v1591638449/Rectangle_45_mtl458.png"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 4</h3>
                        <p class="room-text">Ruangan bersih dan <br> nyaman</p>
                        <div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">Maksimal 2 orang</p>
                            </div>
                            <div class="details-container">
                                <img src="<?php echo base_url(); ?>assets/img/bed.png" alt="tick" class="list-icon">
                                <p class="list-text">1 Kasur</p>
                            </div>
                        </div>
                        <p class="amount-text">Rp 550.000</p>
                        <div class="buttons-container">
                            <a href="#" class="btn btn-ghost">Selengkapnya</a>
                            <a href="https://timbu.com/search?query=hotel" class="btn btn-fill">Pesan sekarang</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

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
    <script src="<?php echo base_url(); ?>assets/js/switchRooms.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/toggleHamburger.js"></script>
</body>

</html>