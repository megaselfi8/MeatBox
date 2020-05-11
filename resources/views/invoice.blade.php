{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}}</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{'/assets/library/fontawesome-5.13.0/css/fontawesome.min.css'}}">
  <link rel="stylesheet" href="{{'/assets/library/fontawesome-5.13.0/css/solid.css'}}">
  <!-- CSS -->
  <link rel="stylesheet"  href="{{'/assets/library/bootstrap-4.4.1/css/bootstrap.css'}}">
		
  <!-- JS -->
  <script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
  <script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>

  <!-- My CSS -->
  <link rel="stylesheet"  href="/assets/library/style2.css"> 
</head>
<body>


  <!-- CONTENT -->
  <section class="bg-color-0">
    <div class="container">
      <div class="row align-items-center half-screen space">
        <div class="container">
        
          <div class="row mb-4">
            <div class="col-md-6">
              <h4>Nota {{ $nota->jenis_faktur }}</h4>
              <table>
                <tr>
                  <th>Nomor</th>
                  <td>{{ $nota->id }}</td>
                </tr>
                <tr>
                  <th>Tanggal</th>
                  <td>{{ $nota->tgl_pembelian }}</td>
                </tr>
                <tr>
                  <th>Customer</th>
                  <td>{{ session('s_id') }} | {{ session('s_username') }}</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 text-right">
              <img src="/assets/image/METBROX.png" alt="logo" width="100">
            </div>
          </div>

          <hr class="m-0">

          <div class="row mt-4">
            <div class="col-md-12">
              <table style="width: 100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cart as $c)
                  <tr>
                    <td>{{ $c->t_produk_id }}</td>
                    <td>{{ $c->nama_produk }}</td>
                    <td>Rp {{ $c->harga }}</td>
                    <td class="text-center">{{ $c->kuantitas }}</td>
                    <td class="text-center">Rp {{ $c->subtotal }}</td>
                  </tr>
                  @endforeach

                  <tr>
                    <td colspan="4" class="text-right pr-2" style="background: #efefef;">Total Belanja</td>
                    <td class="text-right" style="background: #efefef;">Rp {{$nota->total_pembelian}}</td>
                  </tr>
                  <tr>
                    <td colspan="4" class="text-right pr-2">PPN 10% </td>
                    <td class="text-right">Rp {{$nota->ppn / 100 * $nota->total_pembelian}}.00</td>
                  </tr>
                  <tr>
                    <td colspan="4" class="text-right pr-2">Total Tagihan</td>
                    <td class="text-right">Rp {{$nota->jumlah_tagihan}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-12">
              <p>Pembayaran jatuh tempo dalam 30 hari sejak tanggal faktur.</p>
              <a class="btn btn-success float-right" href="{{url('/invoice/preview/'. $nota->id)}}">Preview</a>
              <a class="btn btn-warning float-right" href="{{url('/invoice/print/'. $nota->id)}}">Print</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  
</body>
</html> --}}

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
        <a href="{{url('/cart')}}" class="card-bag"><img src="/assets/library/marketplace/img/icons/bag.png" alt=""><span>0</span></a>
        {{-- {{ $cart->jumlah_keranjang }} --}}
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
			<form class="checkout-form">
				<div class="row">
					<div class="col-lg-12">
						<div class="order-card">
							<div class="order-details">
								<div class="od-warp">
                  <h4 class="checkout-title">Nota {{ $nota->jenis_faktur }}</h4>
									<table class="nota-table">
										<tr>
											<td>Nomor</td>
											<td>{{ $nota->id }}</td>
										</tr>
										<tr>
											<td>Tanggal</td>
											<td>{{ $nota->tgl_pembelian }}</td>
										</tr>
										<tr>
											<td>Customer</td>
											<td>{{ session('s_id') }} | {{ session('s_username') }}</td>
										</tr>
                  </table>
                  <br>

									<hr class="m-0"><br>
                  
                  <table class="cart-table">
										<thead>
											<tr>
												<th class="product-th">Product</th>
												<th>Price</th>
												<th>Quantity</th>
												<th class="total-th">Subtotal</th>
											</tr>
										</thead>
										<tbody>
                    @foreach($cart as $c)
											<tr>
												<td class="product-col">
													<div class="pc-title">
														<h4 style="margin-bottom:10px;">{{ $c->nama_produk }}</h4>
													</div>
												</td>
												<td class="price-col">Rp {{ $c->harga }}</td>
												<td class="quy-col">
													<div class="text-center">
														<span>{{ $c->kuantitas }}</span>
													</div>
												</td>
												<td class="total-col">Rp {{ $c->subtotal }}</td>
											</tr>
                      @endforeach
										</tbody>
										{{-- <tfoot>
											<tr class="order-total">
												<td colspan="3" class="text-right pr-2" style="background: #efefef">Total Belanja</td>
                          <td class="text-right">Rp {{$nota->total_pembelian}}</td>
											</tr>
											<tr>
												<td colspan="3" class="text-right pr-2">PPN 10%</td>
												<td class="text-right">Rp {{$nota->ppn / 100 * $nota->total_pembelian}}.00</td>
											</tr>
											<tr>
												<td colspan="3" class="text-right pr-2">Total Tagihan</td>
												<td class="text-right">Rp {{$nota->jumlah_tagihan}}</td>
											</tr>
										</tfoot> --}}
                  </table>

                  <div class="cart-table">
                    <table>
                      <thead>
                        <tr>
                          <th class="product-th">Total Belanja</th>
                          <th class="total-th">Rp {{$nota->total_pembelian}}</th>
                        </tr>
                        <tr>
                          <th class="product-th">Pajak 10%</th>
                          <th class="total-th">Rp {{$nota->ppn / 100 * $nota->total_pembelian}}.00</th>
                        </tr>
                        <tr>
                          <th class="product-th">Total Tagihan</th>
                          <th class="total-th">Rp {{$nota->jumlah_tagihan}}</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  
                  <div class="row cart-buttons">
                    <div class="col-lg-12 col-md-12 text-lg-right text-left">
                      <a class="site-btn btn-line btn-update" href="{{url('/invoice/preview/' . $nota->id)}}" >Preview</a>
                      <a class="site-btn btn-line btn-update" href="{{url('/invoice/print/' . $nota->id)}}" >Print</a>
                    </div>
                  </div>                
                  
                </div>
              </div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
  <!-- Page end -->


  <!--====== Javascripts & Jquery ======-->
  @include('market_js')

</body>

</html>