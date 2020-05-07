<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produk</title>

    <!-- MY CSS -->
    @include('admin.my_CSS')
    <!-- MY JS -->
    @include('admin.my_JS')

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span> Meat Box </span></a>
          </div>

          <div class="clearfix"></div>
          <br />

            @include('admin.Asidenav');
        </div>
      </div>

        @include('admin.Atopnav');

<!----------------------- page content ----------------------->

  <div class="right_col" role="main">
    <div class="">
      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Detail Produk </h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />

              <div class="col-md-8">
                <form class="form-horizontal form-label-left">

                  <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                      <img src="{{url($produk->foto)}}" alt="{{ $produk->nama_produk }}" style="width: 150px; height: 150px">
                    </div>

                    <div class="col-md-4 col-md-offset-3">
                      <div>
                        <h3><label>Nama Barang</label> :</h3>
                        <h4>{{ $produk->nama_produk }}</h4>
                      </div>

                      <br>
                      <div class="form-group">
                        <h3><label>Harga</label> :</h3>
                        <h4>{{ $produk->harga }}</h4>
                      </div>

                      {{-- <br>
                      <div class="form-group">
                        <h3><label>Kategori</label> :</h3>
                        <h4></h4>
                      </div> --}}

                      <br>
                      <div class="form-group">
                        <h3><label>Deskripsi</label> :</h3>
                        <h4>{{ $produk->deskripsi }}</h4>
                      </div>
                      
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!----------------------- /page content ----------------------->

@include('admin.Afooter');

</div>
</div>

</body>
</html>