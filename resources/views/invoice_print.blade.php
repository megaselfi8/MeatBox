<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title}}</title>

    <!--## CSS ##-->
    <link rel="stylesheet" href="{{public_path()}}/assets/library/bootstrap-4.4.1/css/bootstrap.css">
</head>
<body>
    
    <!--## CONTENT ##-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Nota {{ $nota->jenis_faktur }}<h4>
                <table style="...">
                    <tr class="m-0 p-0">
                        <th>Nomor</th>
                        <td>{{ $nota->id }}</td>
                    </tr>
                    <tr class="m-0 p-0">
                        <th>Tanggal</th>
                        <td>{{ $nota->tgl_pembelian }}</td>
                    </tr>
                    <tr class="m-0 p-0">
                        <th>Customer</th>
                        <td>{{ session('s_id') }} | {{ session('s_username') }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <img src="{{public_path()}}/assets/image/METBROX.png" width="100" style="position: fixed; right: 0;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr class="mb-3 mt-5">
                <table style="...">
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
                            <td>Rp. {{ $c->harga }}</td>
                            <td class="text-center">{{ $c->kuantitas }}</td>
                            <td class="text-right">Rp. {{ $c->subtotal }}</td>
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
                <table>

            </div>
        </div>

        <div class="row-mt-5">
            <div class="col-md-12">
               <small>Pembayaran jatuh tempo dalam 30 hari sejak tanggal faktu.</small>
            </div>
        </div>

    </div>

</body>
</html>
