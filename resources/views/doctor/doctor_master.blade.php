
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('public/backEnds/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/backEnds/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/backEnds/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('public/backEnds/')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('public/backEnds/')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('public/backEnds/')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/backEnds/')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/backEnds/')}}/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('supper/admin/master/dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Robin Ahmed!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('doctor.include.menu_profile')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('doctor.include.sidebar')
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            @include('doctor.include.menu_footer_buttom')
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        @include('doctor.include.top_nav')
        <!-- /top navigation -->
        <!-- page content -->
        @yield('x')
        <!-- /page content -->
        <!-- footer content -->
        @include('doctor.include.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('public/asset/backEnds/')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('public/asset/backEnds/')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/asset/backEnds/')}}/build/js/custom.min.js"></script>
	
  </body>
</html>
