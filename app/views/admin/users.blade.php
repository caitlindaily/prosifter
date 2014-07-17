<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Users | Strass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Admin panel developed with the Bootstrap from Twitter.">
    <meta name="author" content="travis">

    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/site.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
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
			  <li><a href="my-profile.html">Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
			<li><a href="index.html">Home</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="new-user.html">New User</a></li>
					<li class="divider"></li>
					<li><a href="users.html">Manage Users</a></li>
				</ul>
			  </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Roles <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="new-role.html">New Role</a></li>
					<li class="divider"></li>
					<li><a href="roles.html">Manage Roles</a></li>
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
              <li class="active"><a href="users.html">Users</a></li>
              <li><a href="roles.html">Roles</a></li>
              <li class="nav-header"><i class="icon-signal"></i> Statistics</li>
              <li><a href="stats.html">General</a></li>
              <li><a href="user-stats.html">Users</a></li>
              <li><a href="visitor-stats.html">Visitors</a></li>
              <li class="nav-header"><i class="icon-user"></i> Profile</li>
              <li><a href="my-profile.html">My profile</a></li>
              <li><a href="#">Settings</a></li>
			  <li><a href="#">Logout</a></li> 
            </ul>
          </div>
        </div>
        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1>Users <small>All users</small></h1>
			</div>
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>E-mail</th>
						<th>Phone</th>
						<th>City</th>
						<th>Role</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<tr class="list-users">
					<td>1</td>
					<td>Admin</td>
					<td>travis@provider.com</td>
					<td>xxx-xxx-xxxx</td>
					<td>My City</td>
					<td>Admin</td>
					<td><span class="label label-success">Active</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>2</td>
					<td>Jose E. Jones</td>
					<td>joseejones@provider.com</td>
					<td>801-xxx-xxxx</td>
					<td>Morgan, UT</td>
					<td>Moderator</td>
					<td><span class="label label-success">Active</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>3</td>
					<td>George F. Green</td>
					<td>georgefgreen@provider.com</td>
					<td>443-xxx-xxxx</td>
					<td>Baltimore, MD</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>4</td>
					<td>Leticia E. Bonk</td>
					<td>leticiaebonk@provider.com</td>
					<td>615-xxx-xxxx</td>
					<td>Lafayette, TN</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>5</td>
					<td>Darrell J. Ezzell</td>
					<td>darrelljezzell@provider.com</td>
					<td>937-xxx-xxxx</td>
					<td>Yellow Springs, OH</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>6</td>
					<td>Gene A. Lawhorn</td>
					<td>genealawhorn@provider.com</td>
					<td>901-xxx-xxxx</td>
					<td>Memphis, TN</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>7</td>
					<td>Timothy R. Nichols</td>
					<td>timothyrnichols@provider.com</td>
					<td>212-xxx-xxxx</td>
					<td>New York, NY</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>8</td>
					<td>Samuel I. Heim</td>
					<td>samueliheim@provider.com</td>
					<td>508-xxx-xxxx</td>
					<td>Marlboro, MA</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>9</td>
					<td>Dennis B. Kim</td>
					<td>dennisbkim@provider.com</td>
					<td>407-xxx-xxxx</td>
					<td>Orlando, FL</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>10</td>
					<td>Joni D. Soto</td>
					<td>jonidsoto@provider.com</td>
					<td>215-xxx-xxxx</td>
					<td>Philadelphia, PA</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				</tbody>
			</table>
			<div class="pagination">
				<ul>
					<li><a href="#">Prev</a></li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
			<a href="new-user.html" class="btn btn-success">New User</a>
		  </div>
        </div>
      </div>

      <hr>

      <footer class="well">
        &copy; Strass
      </footer>

    </div>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
