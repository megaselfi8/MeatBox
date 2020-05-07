<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Akun</title>

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
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Akun</h2>
            <div align="right">

              <form action="/akun" method="GET" >
                <input type="text" name="cari" value="{{ old('cari') }}">&nbsp;&nbsp;
                <input type="submit"  value="Cari">
                {{-- <a href="/produk-tambah_produk" class="btn btn-success"><i class="fa fa-plus">&nbsp;&nbsp;</i> Add Admin</a> --}}
              </form>

            </div>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="15%">Username</th>
                  <th width="20%">Email</th>
                  <th width="20%">No Hp</th>
                  <th width="20%">Status</th>
                  <th colspan="2" width="20%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;    
                @endphp
                @foreach($akun as $a)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $a->username }}</td>
                  <td>{{ $a->email }}</td>
                  <td>{{ $a->no_hp }}</td>
                  <td>{{ $a->status }}</td>
                  <td>
                    <a href="{{url('/akun/detail/'.$a->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
                    
                    <a href="javascript:if(confirm('Anda yakin ingin menghapus data {{ $a->username }}?'))window.location.href='/akun/hapus/{{ $a->id }}'" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
            
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