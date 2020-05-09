<!DOCTYPE html>
<html lang="zxx">

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
	{{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}

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
				<a href="cart.html" class="card-bag"><img src="/assets/library/marketplace/img/icons/bag.png" alt=""><span>{{ $cart->jumlah_keranjang }}</span></a>
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


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
			<div class="cart-table">
				<table>
					<thead>
						<tr>
							<th class="product-th">Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th class="total-th">SubTotal</th>
						</tr>
					</thead>
					<tbody>
            @foreach($nota->cart as $c)
						<tr>
							<td class="product-col">
								<div class="pc-title">
									<h4>{{ $c->nama_produk }}</h4>
								</div>
							</td>
							<td class="price-col">Rp {{ $c->harga }}</td>
							<td class="quy-col">
								<div class="quy-input">
									<span>Qty</span>
									<a href="{{url('/cart/minus?t_produk_id='. $c->t_produk_id)}}" class="btn btn-danger btn-sm ">-</a>
									<span> {{ $c->kuantitas }} </span>
									<a href="{{url('/cart/plus?t_produk_id='. $c->t_produk_id)}}" class="btn btn-info btn-sm ">+</a>
								</div>
							</td>
							<td class="total-col">Rp {{ $c->subtotal }}</td>
						</tr>
            @endforeach
					</tbody>
				</table>
			</div>

			<div class="cart-table">
				<table>
					<thead>
						<tr>
							<th class="product-th">Total Belanja</th>
							<th class="total-th">Rp {{$nota_tag->total_pembelian}}</th>
						</tr>
						<tr>
							<th class="product-th">Pajak 10%</th>
							<th class="total-th">Rp {{$nota_tag->ppn / 100 * $nota_tag->total_pembelian}}.00</th>
						</tr>
						<tr>
							<th class="product-th">Total Tagihan</th>
							<th class="total-th">Rp {{$nota_tag->jumlah_tagihan}}</th>
						</tr>
					</thead>
				</table>
			</div>

			<div class="row cart-buttons">
				<div class="col-lg-12 col-md-12 text-lg-right text-left">
					<a class="site-btn btn-line btn-update" href="{{url('/cart/checkout/'. $nota->id)}}">Checkout</a>
				</div>
      </div>
      
		</div>
  </div>
  <!-- Page end -->


  <!--====== Javascripts & Jquery ======-->
  @include('market_js')

</body>

</html>