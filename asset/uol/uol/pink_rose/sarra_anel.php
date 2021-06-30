<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta name="description" content="Sarra & Anel - Undangan Pernikahan Online Manten Baru">
		<meta name="author" content="mantenbaru.com">
		<title>Sarra & Anel - Undangan Pernikahan Online Manten Baru</title>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta property="og:title" content="Sarra & Anel - Undangan Pernikahan Online Manten Baru">
        <meta property="og:site_name" content="Sarra & Anel - Undangan Pernikahan Online Manten Baru">
        <meta property="og:description" content="Sarra & Anel - Undangan Pernikahan Online Manten Baru">
        <meta property="og:url" content="<?php echo base_url()?>sarra_anel">
        <meta property="og:image" content="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/share.jpg">
        <meta property="og:image:url" content="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/share.jpg">
        <meta property="og:image:width" content="400"/>
        <meta property="og:image:height" content="300"/>
        <meta property="og:type" content="article">
		
		<!-- Google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic%7CPlayfair+Display%7CAmatic+SC:400,700' rel='stylesheet' type='text/css'>
		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/template/frontend/pink_rose/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<?php $this->load->view('front/baru/plugin/ganalytics'); ?>
	</head>

	<body id="home" class="theme-flowers">
	    
	    <audio autoplay loop id="myAudio">
            <source src="<?php echo base_url(); ?>assets/template/frontend/backsound/marry_your_daughter.mp3" type="audio/mpeg">
        </audio>
<style>
    #over-layar {
        position:fixed;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0,0,0,0.75);
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: block;
        font-size: 16px;
        margin: 0px;
        cursor: pointer;
        z-index:9999;
        display: none;
    }
    .tapfp {
        text-align:center;
        font-size: 40px;
        line-height: 45px;
    }
@media screen and (max-width: 769px) {
    #over-layar {
        display: -webkit-flex; /* Safari */
        -webkit-align-items: center; /* Safari 7.0+ */
        display: flex;
        align-items: center;
    }
}
</style>
<script>
$(document).ready(function(){
	$("#over-layar").click(function(){
			$("#over-layar").fadeOut(650);
		});
});
</script>
<div onclick="playSound()" type="button" id="over-layar" style="display: none;">
    <div style="margin:0 auto;">
        <div class="tapfp">TAP LAYAR</div>
        <div style="text-align:center"><br />Gunakan tombol arah di bawah untuk membuka halaman selanjutnya</div>
    </div>
</div>
<script>
var x = document.getElementById("myAudio");

function playSound() {
    x.play();
}

function pauseSound() {
    x.pause();
}
</script>
	    
	    
		<!-- Preloader -->
		<div class="loader">
			<div class="icon">
				<img src="<?php echo base_url()?>assets/template/frontend/pink_rose/img/hearts.svg" alt="" />
			</div>
		</div>
		<!-- Navigation -->
		<nav class="navbar navbar-default pink-color">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#home" class="page-scroll">Beranda</a></li>
						<li><a href="#about" class="page-scroll">Manten</a></li>
						<li><a href="#gallery" class="page-scroll">Galeri</a></li>
						<li><a href="#doa" class="page-scroll">Doa Tamu</a></li>
						<li><a href="#location" class="page-scroll">Lokasi</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<nav class="navbar navbar-default pink-color clone unstick">
			<div class="container">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
						<li><a href="#home" class="page-scroll">Beranda</a></li>
						<li><a href="#about" class="page-scroll">Manten</a></li>
						<li><a href="#gallery" class="page-scroll">Galeri</a></li>
						<li><a href="#doa" class="page-scroll">Doa Tamu</a></li>
						<li><a href="#location" class="page-scroll">Lokasi</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- About us -->
		<section class="about-us">
			<div class="container">
				<div class="row text-center">
						<h2>-Kami Mengundang- <br>Bapak/Ibu/Saudara/i Untuk<br><span>Menghadiri Pernikahan</span></h2>
					<h3>SARRA<span> & </span>ANEL</h3>
					<h4>11 November 2018</h4>
				</div>
				<div id="about" class="row groom-bride">
					<div class="col-sm-3 text-center">
						<h3>Sarra Fadhilah</h3>
						<p>Putri Pertama dari Bapak Fadhilah &  Ibu Mirah</p>
					</div>
					<div class="col-sm-6 big-photo text-center">
						<img class="flower-frame-top" src="<?php echo base_url()?>assets/template/frontend/pink_rose/img/flowers-frame.png" alt="">
						<img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/about-us2.png" alt="about-us">
						<img class="flower-frame-bottom" src="<?php echo base_url()?>assets/template/frontend/pink_rose/img/flowers-frame-low.png" alt="">
					</div>
					<div class="col-sm-3 text-center">
						<h3>Ainul Yaqin</h3>
						<p>Putra Kelima dari Bapak Ustdz. Tahmid Kahfi & Ibu Juju Maryati</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
		<section class="location text-center">
			<div class="container">
				<h2 class="text-center">Insya Allah</h2>
				<div class="devider">
					<img src="<?php echo base_url()?>assets/template/frontend/pink_rose/img/devider-flower.png" alt="devider">
				</div>
				<p class="intro-text text-center">Akan diselenggarakan pada waktu dan lokasi</p>
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-4">
						<div class="ev-name">Akad</div>
						<p>Pukul 09.00 WIB<br>
						Gedung Pertemuan Albasyariah<br>
						Gg. Langgar, Kp. Kelapa, Ds. Rawa Panjang Kec. Bojong Gede, Bogor</p>
					</div>
					<div class="col-sm-4">
						<div class="ev-name">Resepsi</div>
						<p>Pukul 11.00 - 17.00 WIB <br>
						Gedung Pertemuan Albasyariah<br>
						Gg. Langgar, Kp. Kelapa, Ds. Rawa Panjang Kec. Bojong Gede, Bogor</p>
					</div>
					<div class="col-sm-2">
					</div>
				</div>
			</div>
</section>
		<!-- Countdown -->
		<section class="countdown">
			<div class="container">
				<h2 class="text-center">بِسْمِ اللهِ الرَّحْمنِ الرَّحِيمِ</h2>
				<p class="intro-text text-center">Hitung Mundur Mulainya Acara Pernikahan</p>
				<div id="timer" class="text-center">
					<div class="timer-item">
						<span class="days digit"></span>
						<div class="smalltext">Hari</div>
					</div>
					<div class="timer-item">
						<span class="hours digit"></span>
						<div class="smalltext">Jam</div>
					</div>
					<div class="timer-item">
						<span class="minutes digit"></span>
						<div class="smalltext">Menit</div>
					</div>
					<div class="timer-item">
						<span class="seconds digit"></span>
						<div class="smalltext">Detik</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Love story -->
		<section id="love-story" class="love-story text-center container">
			<div>
				<h2>QS. Ar-Ruum:21 </h2>
				<p>Dan diantara tanda-tanda kekuasaan-Nya ialah diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri, supaya kamu mendapat ketenangan hati dan dijadikan-Nya kasih sayang diantara kamu. Sesungguhnya yang demikian menjadi tanda-tanda bagi orang-orang berifikir. </p>

			</div>
		</section>

		<section id="gallery" class="gallery">
			<div class="container">
				<h2 class="text-center">Galeri</h2>
				<div class="devider">
					<img src="<?php echo base_url()?>assets/template/frontend/pink_rose/img/devider-flower.png" alt="devider">
				</div>
				<p class="intro-text text-center">Momen - Momen Penting Lainnya</p>
				<!-- OWL Gallery -->
				<div class="owl-carousel gallery-carousel owl-theme responsive-0">
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/1putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/1putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/2putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/2putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/3putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/3putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/4putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/4putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/5putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/5putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/6putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/6putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/7putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/7putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/8putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/8putih.jpg" alt=""></a>
					</div>
					<div>
						<a href="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/9putih.jpg" data-lightbox="roadtrip"><img src="<?php echo base_url()?>assets/template/frontend/pink_rose/sarra_anel/9putih.jpg" alt=""></a>
					</div>
				</div>
			</div>
		</section>
		<section id="doa" class="location text-center">
			<div class="container">
				<h2 class="text-center">Doa & Pesan</h2>
				<div  class="fb-comments" data-href="https://www.mantenbaru.com/sarra_anel/" data-numposts="5" data-mobile="mobile"></div>
			</div>
		</section>
<section id="location" class="location text-center">
	<div class="container">
		<h2 class="text-center">Peta Lokasi Pernikahan</h2>
	</div>
</section>
		<!-- Map -->
		<div class="map">
			<div class="container">
			    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.468407233846!2d106.80159376431253!3d-6.4621870149829554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9e2faf1bcc1%3A0xcac3ef039dfef379!2sGedung+Albasyariah!5e0!3m2!1sen!2sid!4v1539856778714" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<!-- Footer -->
		<footer class="pink-color">
			<div class="footer-lines">
				<div class="container">
					<p>Sarra & Anel</p>
					<p>11 November 2018</p><br>
					<p><img src="<?php echo base_url()?>assets/template/frontend/weddingbook/includes/images/borders/logo.png" /></p>
				</div>
				
			</div>
		</footer>
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/template/frontend/pink_rose/css/vendor/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/template/frontend/pink_rose/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/template/frontend/pink_rose/css/vendor/lightbox.min.css">
		<!-- Libraries -->
		<script src="<?php echo base_url()?>assets/template/frontend/pink_rose/js/vendor/jquery.min.js"></script>
		<script src="<?php echo base_url()?>assets/template/frontend/pink_rose/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/template/frontend/pink_rose/js/vendor/lightbox.min.js"></script>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		    (function (d, w, c) {
		        (w[c] = w[c] || []).push(function() {
		            try {
		                w.yaCounter41923584 = new Ya.Metrika({
		                    id:41923584,
		                    clickmap:true,
		                    trackLinks:true,
		                    accurateTrackBounce:true,
		                    webvisor:true
		                });
		            } catch(e) { }
		        });

		        var n = d.getElementsByTagName("script")[0],
		            s = d.createElement("script"),
		            f = function () { n.parentNode.insertBefore(s, n); };
		        s.type = "text/javascript";
		        s.async = true;
		        s.src = "../../../mc.yandex.ru/metrika/watch.js";

		        if (w.opera == "[object Opera]") {
		            d.addEventListener("DOMContentLoaded", f, false);
		        } else { f(); }
		    })(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/41923584" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->

		<link rel="stylesheet" href="<?php echo base_url()?>assets/template/frontend/pink_rose/css/vendor/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/template/frontend/pink_rose/css/vendor/owl.theme.default.min.css">
		<script src="<?php echo base_url()?>assets/template/frontend/pink_rose/js/vendor/owl.carousel.min.js"></script>
		<script src="<?php echo base_url()?>assets/template/frontend/pink_rose/js/vendor/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>assets/template/frontend/pink_rose/js/vendor/jquery.timeline.js"></script>
		<!-- Main -->
		<script src="<?php echo base_url()?>assets/template/frontend/pink_rose/js/sarra_anel.js"></script>
		<!-- Google map -->
	
		<div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10&appId=129429343801925';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
	</body>

</html>
