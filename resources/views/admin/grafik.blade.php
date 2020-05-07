<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>

    <!-- MY CSS -->
    @include('admin.my_CSS')
    <!-- MY JS -->
    @include('admin.my_JS')

    <link rel="stylesheet" href="{{url('assets/library/highchart/code/css/highcharts.css')}}">

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
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <div class="text-center">
            <h1>Meat Box</h1>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <div class="text-center">


            <div class="col-md-12 mt-5" >
                <div class="card">
                    <div class="card-header">Laporan Pendapatan</div>
                    <div class="card-body">
                    <div id="grafik-pendapatan" style="height: 400px; widht:600px"></div>
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
<script src="{{url('/assets/library/highchart/code/highcharts.js')}}"></script>
<script src="{{url('/assets/library/highchart/setting/app.js')}}"></script>
</html>
