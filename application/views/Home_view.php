<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Star Hotels Helps you Discover The Perfect Balance
	Of Hospitality, Luxury And
	Comfort.">
	<title>Griya Oliver</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/accesibility.css">
	<link rel="stylesheet" href="./assets/css/index.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/faq.css'); ?>">
</head>
<body class="scroll-bar">
	<div id="loader">
		<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
			<path fill="#d4af37" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
				<animateTransform 
					attributeName="transform" 
					attributeType="XML" 
					type="rotate"
					dur="1s" 
					from="0 50 50"
					to="360 50 50" 
					repeatCount="indefinite" />
		</path>
		</svg>
	</div>
   <header>
      <div class="header-container">
         <nav class="header-nav-bar">
				<div class="header-nav-logo">
					<a href="index.html">
						<img src="<?= base_url('assets/img/griya.svg'); ?>"
							alt="griya oliver logo" style="max-width: 200px; height: auto;">
					</a>
				</div>
				<ul class="header-nav-lists">
						<li class="header-nav-list"><a class="header-nav-link header-active" href="<?php echo site_url('home'); ?>">Beranda</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('kamar/index'); ?>">Data Kamar</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('fasilitas/index'); ?>">Fasilitas</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('kontak/index'); ?>">Kontak</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="<?php echo site_url('faq/index'); ?>">Faq</a></li>
						<li class="header-nav-list"><a class="header-btn header-btn-custom" href="<?php echo site_url('user/login'); ?>">Masuk</a></li>
						<li class="header-nav-list"><a class="header-btn header-btn-custom" href="<?php echo site_url('user/registrasi'); ?>">Daftar</a></li>
					</ul>
            
            <div class="header-hamburger-icon">
               <div class="header-hamburger-line-1"></div>
               <div class="header-hamburger-line-2"></div>
               <div class="header-hamburger-line-3"></div>
            </div>
         </nav>
      </div>

      </div>
	</header>

	<div class="jumbotron-container">
		<div class="jumbotron-left">
			<h2 class="jumbotron-header">Nikmati Kenyamanan <br>Tinggal di Kost<br>Griya Oliver</h2>
			<p>Kami menyediakan kamar kost yang nyaman dan terjangkau.<br>
                Pesan kamar dengan mudah sesuai kebutuhan Anda!</p>
					<a href="https://timbu.com/search?query=hotel" class="btn btn-fill btn-large">Pesan Sekarang</a>
		</div>
		<div class="jumbotron-right">
			<form action="" class="jumbotron-form">
				<!-- Put the form here -->
					<h3>Susah cari kost yang sesuai kebutuhan?</h3><br>
					<p>Jangan khawatir, kost kami menyediakan<br> fasilitas yang lengkap dan nyaman.</p>
					<label class="hide" for="arrival">arrival date</label>
					<input type="text" id="arrival" name="arrival_date" placeholder="Arrival Date" onfocus="(this.type='date')" ><br>
					<label class="hide" for="departure">departure date</label>
					<input type="text"  id="departure" name="departure_date" placeholder="Departure Date" onfocus="(this.type='date')" ><br>
					<label class="hide" for="guests">how many guests</label>
					<input type="text" id="guests" name="guests" placeholder="Guests"><br>
					<label class="hide" for="children">children</label>
					<input type="text" id="children" name="children" placeholder="Children"><br>
					<button type="button" class="rates">CHECK RATES</button>
			</form>
		</div>
	</div>

	<!-- Enjoy your stay in our hotel -->
	<div class="enjoy-container">
		<div class="enjoy-header">
			<h2 class="enjoy-heading">Nikmati kenyamanan <br/> tinggal di kost <br>Griya Oliver</h2>
			<hr class="horizontal">
			<p>Kost kami menawarkan kualitas yang  memuaskan <br>untuk memberikan kenyamanan bagi penyewa</p>
		</div>
	<div class="enjoy-services">
		<div class="first-col">
			<div class="upper">
					<span>
						<img src="./assets/img/clock.svg" alt="clock icon" class="enjoy__clock-icon">
					</span>
					<h3>Akses 24 jam</h3>
					<p>Memungkinkan kamu keluar masuk tanpa batasan waktu, sehingga fleksibel</p>
			</div>
			<div class="lower">
				<span>
					<img src="./assets/img/database.svg" alt="fitness icon" class="enjoy__fitness-icon">
				</span>
				<h3>Free air dan listrik</h3>
				<p>Harga kost sudah termasuk air dan listrik. Namun ada tambahan biaya listrik jika membawa magicom/setrika/hair dryer</p>
			</div>
			
		</div>
		<div class="sec-col">
				<div class="upper">
					<span>
						<img src="./assets/img/coffee.svg" alt="coffee icon" class="enjoy__coffee-icon">
					</span>
						<h3>Dapur bersama</h3>
					<p>Kamu dapat menggunakan dapur bersama untuk kegiatan memasak sehari-hari</p>
				</div>
				<div class="lower">
					<span>
						<img src="./assets/img/wifi.svg" alt="wifi icon" class="enjoy__wifi-icon">
					</span>
						<h3>Free Wi-Fi</h3>
						<p>Kamu akan memiliki akses wifi selama 24 jam</p>
				</div>
		</div>
		<div class="third-col cont">
			<img src="./assets/img/ant-design_play-circle-filled.svg" alt="video play icon" class="enjoy__play-icon">
			<img src="./assets/img/video link.webp" alt="women in swimming pool" class="third-col-video">
		</div>
	</div>

	</div>
	<section class="special-offers">

		

	<!-- Client Reviews -->
	<div class="review-container">
		<div class="review-header">
			<h2 class="review-title">
				Review kami
			</h2>
			<hr class="horizontal">
			<p class="">Kami sangat puas bisa memberikan tempat<br>yang membua penyewa senang</p>
		</div>
		<div class="cards-container">
				<div class="card">
					<img src="./assets/img/customer1.webp" alt="" class="card-avi">
					<h2 class="card-title">Nabila Asy Syifa</h2>
					<h3 class="card-subtitle">Tegal, Jawa Tengah.</h3>
					<p class="card-desc">Words can't explain the kind of treatment I received from the management of star hotels. They are the best in the country.</p>
				</div>
				<div class="card">
					<img src="./assets/img/customer2.webp" alt="" class="card-avi">
					<h2 class="card-title">
							Jessica Deborah
					</h2>
					<h3 class="card-subtitle">
							Blitar, Jawa Timur.
					</h3>
					<p class="card-desc">Griya Oliver membuatmu nyaman seperti di rumah.</p>
				</div>
				<div class="card">
					<img 
						src="./assets/img/customer3.webp" 
						alt="" 
						class="card-avi">
					<h2 class="card-title">
						Vivin
					</h2>
					<h3 class="card-subtitle">
						ciamis, Bandung.
					</h3>
					<p class="card-desc">My Family and I are very happy when we lodge into star hotels. They are by far the best in the universe.</p>
				</div>
				

			</div>
	</div>
	<footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">Griya Oliver</h3>
					<p>Dapatkan kenyamanan seperti di rumah</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Kontak Kami</h3>
					<p class="footer-description-detail"> 
						<img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>Jl. Brigjen Katamso No.5, Dusun I, Madegondo, Kec. Grogol, Kabupaten Sukoharjo, Jawa Tengah 57552</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
						<span>0812 2717 4673</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>griyaoliver@gmail.com</span> </p>
				</div>
				<div class="footer-follow-us">
					<h3 class="footer-description-title">Ikuti Kami</h3>
					<ul class="footer-follow-us-lists">
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/facebook.svg" alt="star hotels facebook page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/twitter.svg" alt="star hotels twitter page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/instagram.svg" alt="star hotels instagram page">
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</footer>
	<script>
        const questions = document.querySelectorAll('.faq-question');
        questions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
	<script defer async>
		(() => {
			const loader = document.getElementById('loader');
			const scrollBar = document.getElementsByClassName('scroll-bar')[0];
			window.addEventListener('load', () => {
				loader.classList.add('none');
				scrollBar.classList.remove('scroll-bar')
			});
		})();
	</script>
	<script  defer async src="assets/js/toggleHamburger.js"></script>
</body>
</html>