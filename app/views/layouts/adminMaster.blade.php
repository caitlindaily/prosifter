

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin | proSifter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">

    <link href="/css/admin-bootstrap.css" rel="stylesheet">
    <link href="/css/admin-bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/admin-site.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
@yield('topscript')


  <body>
    <!--NavBar-->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="{{ action('AdminController@getIndex') }}">proSifter Admin Panel</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="/">Back to Website</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--Left Panel-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><i class="icon-wrench"></i> Administration</li>
              <li class="active"><a href="{{ action('AdminController@getUsers') }}">Users</a></li>
              <li><a href="{{ action('AdminController@getRoles') }}">Roles</a></li>
              <li class="nav-header"><i class="icon-user"></i> Profile</li>
              <li><a href="{{ action('AdminController@getProfile') }}">My Profile</a></li>
              <!-- <li><a href="#">Settings</a></li> -->
              <li>{{ link_to_action('HomeController@doLogout', 'Logout') }}</li>
            </ul>
          </div>
        </div>
 @yield('content')

    <!--Footer Content-->
    <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-1">
                <a href="index.html" class="logo">
                  <img alt="proSifter logo" class="img-responsive" src="/img/logo-footer.png">
                </a>
              </div>
              <div class="col-md-7">
                <p>© Copyright 2014. All Rights Reserved.</p>
              </div>
            </div>
          </div>
        </div>

    </div>

    <script src="/js/admin-jquery.js"></script>
    <script src="/js/admin-bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.dropdown-menu li a').hover(
        function() {
            $(this).children('i').addClass('icon-white');
        },
        function() {
            $(this).children('i').removeClass('icon-white');
        });

        if($(window).width() > 760)
        {
            $('tr.list-users td div ul').addClass('pull-right');
        }
    });
    </script>

    @yield('bottomscript')
  </body>
</html>