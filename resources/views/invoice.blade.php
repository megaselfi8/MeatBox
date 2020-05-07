<!DOCTYPE html>
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
</html>