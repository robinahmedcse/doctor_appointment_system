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
    
      <link href="{{asset('public/backEnds/')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css" />


            <!--    ajax jquery-->           
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script> 
            
   
    <!--    jquery.dataTables.min.js -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   

     <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script> 
    
 
        <script>
            
             function one_delete(){
                   var check = confirm("আপনি কি এটা স্থায়ীভাবে মুছে ফেলতে চান?");
                  if(check){return true;}else{return false;}
              }  
           
        </script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>হাতের মুঠোয় পর্চার</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           @include('admin.include.profile')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
        @include('admin.include.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           @include('admin.include.slidebar-footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin.include.top-nav')
        <!-- /top navigation -->

        <!-- page content -->
   @yield('x')
        <!-- /page content -->

        <!-- footer content -->
     @include('admin.include.footer')
        <!-- /footer content -->
      </div>
    </div>
 
      
    <!-- Bootstrap -->
    <script src="{{asset('public/backEnds/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="{{asset('public/backEnds/')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('public/backEnds/')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('public/backEnds/')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('public/backEnds/')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('public/backEnds/')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('public/backEnds/')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('public/backEnds/')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('public/backEnds/')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('public/backEnds/')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('public/backEnds/')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('public/backEnds/')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('public/backEnds/')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('public/backEnds/')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
       <script src="{{asset('public/backEnds/')}}/build/js/custom.min.js"></script>
	
	


     
  </body>
</html>
