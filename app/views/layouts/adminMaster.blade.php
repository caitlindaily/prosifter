

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin | Strass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin panel developed with the Bootstrap from Twitter.">
    <meta name="author" content="travis">

    <link href="css/admin-bootstrap.css" rel="stylesheet">
    <link href="css/admin-site.css" rel="stylesheet">
    <link href="css/admin-bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
@yield('topscript')


  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Strass Administration</a>
          <div class="btn-group pull-right">
            <a class="btn" href="my-profile.html"><i class="icon-user"></i> Admin</a>
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ action('AdminController@showAdminProfile') }}">Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
            <li><a href="{{ action('AdminController@showAdmin') }}">Home</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ action('AdminController@showAdminNewUsers') }}">New User</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ action('AdminController@showAdminUsers') }}">Manage Users</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Roles <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ action('AdminController@showAdminNewRole') }}">New Role</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ action('AdminController@showAdminRoles') }}">Manage Roles</a></li>
                </ul>
              </li>
              <li><a href="stats.html">Stats</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><i class="icon-wrench"></i> Administration</li>
              <li class="active"><a href="{{ action('AdminController@showAdminUsers') }}">Users</a></li>
              <li><a href="{{ action('AdminController@showAdminRoles') }}">Roles</a></li>
              <li class="nav-header"><i class="icon-signal"></i> Statistics</li>
              <li><a href="stats.html">General</a></li>
              <li><a href="user-stats.html">Users</a></li>
              <li><a href="visitor-stats.html">Visitors</a></li>
              <li class="nav-header"><i class="icon-user"></i> Profile</li>
              <li><a href="{{ action('AdminController@showAdminProfile') }}">My profile</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
 @yield('content')







@yield('bottomscript')

<footer class="well">
        &copy; Strass
      </footer>

    </div>

    <script src="js/admin-jquery.js"></script>
    <script src="js/admin-bootstrap.min.js"></script>
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
  </body>
</html>