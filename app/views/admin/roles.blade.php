@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1>Roles <small>Manage roles</small></h1>
			</div>
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<th>ID</th>
						<th>Role</th>
						<th>Description</th>
						<th>Slug</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<tr class="list-roles">
					<td>1</td>
					<td>Admin</td>
					<td>Can manage, add, delete users, providers.</td>
					<td>admin</td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-roles">
					<td>2</td>
					<td>Provider</td>
					<td>Is a provider as well as a user. Can edit business information.</td>
					<td>prov</td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-roles">
					<td>3</td>
					<td>User</td>
					<td>Can only rate providers and leave reviews.</td>
					<td>user</td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
							</ul>
						</div>
					</td>
				</tr>
				</tbody>
			</table>
			<a href="{{ action('AdminController@getNewRole') }}" class="btn btn-success">New Role</a>
		  </div>
        </div>
      </div>

      <hr>
@stop
