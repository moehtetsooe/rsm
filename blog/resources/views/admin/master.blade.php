<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Moe Htet Soe | </title>

    <!-- Bootstrap -->
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('web/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('web/css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('web/css/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('web/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('web/css/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('web/css/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('web/css/custom.min.css')}}" rel="stylesheet">

    @yield('css')

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin Panel!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('web/images/user-img.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Moe Htet Soe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin/super-admin">Super Admin</a></li>
                      <li><a href="#">User One</a></li>
                      <li><a href="#">User Two</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">General Form</a></li>
                      <li><a href="#">Advanced Components</a></li>
                      <li><a href="#">Form Validation</a></li>
                      <li><a href="#">Form Wizard</a></li>
                      <li><a href="#">Form Upload</a></li>
                      <li><a href="#">Form Buttons</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout" class="pull-right">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <div class="clear-both"></div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('web/images/user-img.png')}}" alt="">Moe Htet Soe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Admin Panel By Moe Htet Soe
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('web/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('web/js/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('web/js/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('web/js/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('web/js/skycons.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('web/js/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('web/js/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('web/js/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('web/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('web/js/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('web/js/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('web/js/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('web/js/flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('web/js/flot/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('web/js/flot/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('web/js/flot/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('web/js/date/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('web/js/jqvmap/jquery.vmap.js')}}"></script>
    <script src="{{asset('web/js/jqvmap/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('web/js/jqvmap/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('web/js/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('web/js/daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('web/js/custom.min.js')}}"></script>
	  @yield('js')
  </body>
</html>
