{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produk</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{'/assets/library/fontawesome-5.13.0/css/fontawesome.min.css'}}">
  <link rel="stylesheet" href="{{'/assets/library/fontawesome-5.13.0/css/solid.css'}}">
  <!-- CSS -->
  <link rel="stylesheet" href="{{'/assets/library/bootstrap-4.4.1/css/bootstrap.css'}}">
		
  <!-- JS -->
  <script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
  <script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>

  <!-- My CSS -->
  <link rel="stylesheet"  href="/assets/library/style2.css"> 
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <h1>MEATBOX</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link page-scroll" href="{{url('/cart')}}">
            <span class="badge badge-danger" style="position:absolute; margin-left: -15px; margin-top: -15px;">{{ $cart->jumlah_keranjang }}</span>
            <i class="fas fa-shopping-cart"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>
  

  <div class="panel-produk">
    <div class="row">

      @foreach($produk as $p)
      <div class="col-md-4">
        <div class="panel panel-default text-center">
          <div class="panel-body">
            <span class="badge badge-danger" style="position:absolute; border: 2px solid #ffffff; margin-left: -20px;">
              {{ $p->kategori }}
            </span>
            <img src="{{ url($p->foto) }}">
          </div>
          <div class="panel-footer">
            <h1>{{ $p->nama_produk }}</h1>
            <h2>Rp {{ $p->harga }}</h2>
            <h6>Stok <span class="badge btn-warning">{{ $p->stock }}</span></h6>
            <a class="btn btn-lg" href="{{ url('/cart?t_produk_id=' . $p->id) }}">Beli</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>


</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{$title}}</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="/assets/image/METBROX.png" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	@include('market_css')
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="/assets/image/METBROX.png" alt="logo" style="width: 150px;">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="{{url('/cart')}}" class="card-bag"><img src="/assets/library/marketplace/img/icons/bag.png" alt=""><span>{{ $cart->jumlah_keranjang }}</span></a>
				<a href="/login" class="search" style="width: 30px; height: 30px;"><img src="/assets/library/marketplace/img/icons/login.png" alt=""></a>
			</div>

			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="/">Home</a></li>
				<li><a href="/produk/daging">Produk</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Product section -->
	<section class="product-section spad">
		<div class="container">

			
			<div class="row" id="product-filter">
				<div class="col-md-2 offset-8">

					<table>
						<thead>
							<tr>
								<form action="/produk/daging" method="GET">
								<th><input type="text" class="form-control" name="cari" value="{{ old('cari') }}" style="width: 350px"></th>
								<th><input type="submit" class="btn btn-outline-info" value="Search"></th>
							</form>
							</tr>
						</thead>
					</table>
							
				</div>

				<br><br><br><br>

        @foreach($produk as $p)
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{ url($p->foto) }}" alt="">
              <div class="bache">{{ $p->kategori }}</div>
              <div class="pi-meta">
								<div class="pi-m-left">
									<p>Stock :</p>
								</div>
								<div class="pi-m-right">
									<p>{{ $p->stock }}</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h5>{{ $p->nama_produk }}</h5>
							<p>Rp {{ $p->harga }}</p>
							<a href="{{ url('/cart?t_produk_id=' . $p->id) }}" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
        </div>
        @endforeach

			</div>
			<br><br><br><br><br><br><br>
		</div>
	</section>
	<!-- Product section end -->


	<!-- Footer top section -->
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="/assets/image/METBROX.png" class="footer-logo" alt="" style="width: 150px;">
						<p>Kami Hadir sebagai supplier daging modern yang hadir di berbagai media online.</p>
						<div class="cards">
							<img src="/assets/library/marketplace/img/cards/5.png" alt="">
							<img src="/assets/library/marketplace/img/cards/4.png" alt="">
							<img src="/assets/library/marketplace/img/cards/3.png" alt="">
							<img src="/assets/library/marketplace/img/cards/2.png" alt="">
							<img src="/assets/library/marketplace/img/cards/1.png" alt="">
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6"></div>

				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Sitemap</h6>
						<ul>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Bloggers</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Produk</h6>
						<ul>
							<li><a href="#">Daging</a></li>
							<li><a href="#">Daging</a></li>
							<li><a href="#">Daging</a></li>
							<li><a href="#">Daging</a></li>
							<li><a href="#">Daging</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contact</h6>
						<div class="text-box">
							<p>MeatBox.Corp</p>
							<p>Kota Malang, Jawa Timur</p>
							<p>+53 345 7953 32453</p>
							<p>meatbox@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
				<a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
  @include('market_js')
  
</body>

</html>