<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kategori</title>

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
                  <h2>Add Kategori</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />

                  <div class="col-md-8 center-margin">
                    <form class="form-horizontal form-label-left" action="/kategori/store" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <h4><label>Kategori</label></h4>
                        <input type="text" name="nama_kategori" class="form-control" required="required">
                      </div>

                      <br><br>
                      <div class="form-group">
                        <div align="center">
                          <input type="Submit" name="Submit" value="Submit" class="btn btn-success">
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