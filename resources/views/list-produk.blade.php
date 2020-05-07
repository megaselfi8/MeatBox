<!DOCTYPE html>
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
  {{-- NAVBAR --}}
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
          {{-- <a class="nav-item nav-link" href="{{url('/produk/daging')}}">
            <h4>Produk</h4>
          </a> --}}
          <a class="nav-item nav-link page-scroll" href="{{url('/cart')}}">
            <span class="badge badge-danger" style="position:absolute; margin-left: -15px; margin-top: -15px;">{{ $cart->jumlah_keranjang }}</span>
            <i class="fas fa-shopping-cart"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>
  
  {{-- PRODUK --}}
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
</html>