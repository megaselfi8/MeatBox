<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Meat Box</title>

		<!-- CSS -->
		<link rel="stylesheet"  href="{{'/assets/library/bootstrap-4.4.1/css/bootstrap.css'}}">
		
		<!-- JS -->
		<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
		<script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>

		<!-- My Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quattrocento+Sans&display=swap">
		
		<!-- My CSS -->
		<link rel="stylesheet"  href="/assets/library/style.css">
		<link rel="stylesheet" href="/assets/library/animate.css">
		<!-- My JS -->
		<script src="{{url('/assets/library/anim.js')}}"></script>

	</head>
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand page-scroll" href="#"><img src="/assets/image/METBROX.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav ml-auto">
						<a class="nav-item nav-link active page-scroll" href="#">Home <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link page-scroll" href="#panel-pelayanan">Pelayanan</a>
						<a class="nav-item nav-link page-scroll" href="#panel-contact">Kontak</a>
						<a class="nav-item btn btn-light button" href="/login">Login</a>
						</div>
				</div>
			</div>
		</nav>

		<!-- Jumbotron -->
		<div class="jumbotron ij jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">SELAMAT DATANG MEAT BOX</h1>
				<a href="#" class="s1"><img src="/assets/image/icon/ig.png" class="rounded-circle sosmed"></a>
				<a href="#" class="s2"><img src="/assets/image/icon/wa.png" class=" rounded-circle sosmed"></a>
				<a href="#" class="s3"><img src="/assets/image/icon/line.png" class="rounded-circle sosmed"></a>
				<br>
				<a href="#panel-kerja" class="btn btn-light button page-scroll">Cari Tahu Lebih</a>
			</div>
		</div>

		<!-- Meat Box -->
		<div class="panel-kerja" id="panel-kerja">
			<div class="container">
				<h2 class="kk"><strong>Mengapa Produk Meat Box</strong></h2>
				<div class="row">
					<div class="col-md-4 ck1">
						<img src="/assets/image/icon/concept.png" class="rounded-circle" alt="Concept">
						<h4><strong>Harga Terjangkau</strong></h4>
						<p>Kami menawarkan harga yang <br> 
						terjangkau, dan gratis ongkir <br>
						diseluruh Indonesia</p>
					</div>
					<div class="col-md-4 ck2">
						<img src="/assets/image/icon/prepare.png" class="rounded-circle" alt="Prepare">
						<h4><strong>Higenis</strong></h4>
						<p>Seluruh produk Meat Box dikemas <br>
						dengan teknologi tinggi untuk <br>
						meminimalisir kontaminasi, <br>
						sehingga kehigienisan terjaga.</p>
					</div>
					<div class="col-md-4 ck3">
						<img src="/assets/image/icon/final.png" class="rounded-circle" alt="Final">
						<h4><strong>Kualitas yang terjaga</strong></h4>
						<p>Kualitas daging yang selalu kami<br>
						jaga, dari mulai peternakan sampai<br>
						di Tempat Pemotongan Hewan.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Carousel -->
		<div class="bd-example">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/assets/image/crs1.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>“Happiness [is] only real when shared”</h5>
							<p>Jon Krakauer</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="/assets/image/crs2.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>“Every year on your birthday, you get a chance to start new”</h5>
							<p>Sammy Hagar</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="/assets/image/crs3.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>“Kebersamaan dengan keluarga akan membuatmu bahagia. Maksimalkan moment dengan keluargamu sebaik-baiknya”</h5>
							<p>Budi Setiawan</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- PRODUK -->
		<div class="panel-pelayanan" id="panel-pelayanan">
			<div class="container">
				<h2 class="pk"><strong>PRODUK</strong></h2>
				<div class="row">
					<div class="col-md-4 p1">
						<img src="/assets/image/GATHERENG.jpg" class="image" alt="Gathering">
						<a href="#.php">
							<div class="overlay overlayFade">
								<div class="text">Gathering</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 p2">
						<img src="/assets/image/KAWEN.jpg" class="image" alt="Wedding">
						<a href="#">
							<div class="overlay overlayFade">
								<div class="text">Wedding</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 p3">
						<img src="/assets/image/EXIBITIPON.jpg" class="image" alt="Exhibition">
						<a href="#">
							<div class="overlay overlayFade">
								<div class="text">Exhibition</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 p4">
						<img src="/assets/image/SEMINAR.jpg" class="image" alt="Seminar">
						<a href="#">
							<div class="overlay overlayFade">
								<div class="text">Seminar</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 p5">
						<img src="/assets/image/MOSEK.jpg" class="image" alt="Music Event">
						<a href="#">
							<div class="overlay overlayFade">
								<div class="text">Music Event</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 p6">
						<img src="/assets/image/LONCHING.jpg" class="image" alt="Launching">
						<a href="#">
							<div class="overlay overlayFade">
								<div class="text">Launching</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact -->
		<div class="panel-contact" id="panel-contact">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 k1">
						<h4><strong>KONTAK KAMI</strong></h4>
						<p>Rencanakan Event anda <br>
						dengan mendiskusikannya<br> 
						bersama kami</p>
						<!-- <br> -->
						<img src="/assets/image/icon/NGGON.png"></i><span>Komplek Sigura - Gura Residence 1 AA</span><br>
						<img src="/assets/image/icon/PONE.png"><span>+6281111333888</span><br>
						<img src="/assets/image/icon/EMEL.png"></i><span>vestha@organizer.com</span><br>
					</div>
					<div class="col-md-6 k2">
						<form>
							<input type="text" name="nama" class="form-control" placeholder="Your Name" /><br>
							<input type="email" name="email" class="form-control" placeholder="Your E-mail" /><br>
							<textarea name="pesan_u" class="form-control" placeholder="Your Message" style="height:200px"></textarea><br>
							<input type="submit" name="submit" value="Submit" class="btn btn-light btn-block button1">
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Review -->
		<div class="panel-review" id="panel-review">
			<div class="container">
				<h2 class="pr"><strong>PELAYANAN KAMI</strong></h2>
				<div class="row">
					<div class="col-md-3 r1">
						<img src="/assets/image/icon/warranty.png" class="rounded-circle" alt="Budi Setiawan">
						<h4><strong>Jaminan Keamanan</strong></h4>
						<p>Payment system Meat Box<br> 
						menjamin keamanan uang anda<br>
						dalam bertransaksi.</p>
				  </div>
				  <div class="col-md-3 r2">
						<img src="/assets/image/icon/wallet.png" class="rounded-circle" alt="Johnny">
						<h4><strong>Kemudahan Pembayaran</strong></h4>
						<p>Meat Box menyediakan<br>
						berbagai metode pembayaran<br>
						untuk bertransaksi.</p>
				  </div>
				  <div class="col-md-3 r2">
						<img src="/assets/image/icon/cs.png" class="rounded-circle" alt="Mario">
						<h4><strong>Customer Service</strong></h4>
						<p>CS Meat Box siap membantu<br>
						anda melalui e-mail, media sosial<br>
						dan call center.</p>
				  </div>
				  <div class="col-md-3 r3">
						<img src="/assets/image/icon/delivery.png" class="rounded-circle" alt="Mario">
						<h4><strong>Jasa Pengiriman</strong></h4>
						<p>Meat Box menyediakan<br>
						berbagai pilihan jasa pengiriman<br>
						dengan jangkauan nasional.</p>
				  </div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div class="panel-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<h2><strong>Tentang Kami</strong></h2>
						<p>Kami Hadir sebagai supplier daging modern yang hadir di berbagai media online</p>
					</div>
					<div class="col-md-3">
						<h2><strong>Home</strong></h2>
						<a href="">Mengapa Produk Meat Box</a>
						<br>
						<a href="">Produk</a>
						<br>
						<a href="">Contact Us</a>
						<br>
						<a href="">Pelayanan Kami</a>
					</div>
					<div class="col-md-3">
						<h2><strong>Meat Box</strong></h2>
						<a href="">Daging Ayam</a>
						<br>
						<a href="">Daging Bebek</<a>
						<br>
						<a href="">Daging Sapi</a>
						<br>
						<a href="">Daging Kambing</a>
					</div>
					<div class="col-md-3">
						<a class="footer-brand" href="index.php"><img src="/assets/image/METBROX.png"></a>
						<p>Copyright © 2019 Meat Box, All Rights Reseverd</p> <br>
						<p>Find Us on Social Media</p>
						<a href="#"><img src="/assets/image/icon/ig1.png" alt="IG" class="sf"></a>
						<a href="#"><img src="/assets/image/icon/line1.png" alt="LINE" class="sf"></a>
						<a href="#"><img src="/assets/image/icon/wa1.png" alt="WA" class="sf"></a>
						<a href="#"><img src="/assets/image/icon/email1.png" alt="WA" class="sf"></a>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
