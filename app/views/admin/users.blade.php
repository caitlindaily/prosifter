@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1>Users <small>All users</small></h1>
			</div>
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>E-mail</th>
						<th>Role</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>

				@foreach ($users as $user)

				<tbody>
				<tr class="list-users">
					<td>{{ $user->id }}</td>
					<td>{{ $user->first_name }}</td>
					<td>{{ $user->last_name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->role }}</td>
					<td><span class="label label-success">Active</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{{ action('AdminController@getUser', $user->id) }}"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#" class="deleteUser" data-userid="{{ $user->id }}">
									<i class="icon-trash"></i> Delete
								</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="{{ action('AdminController@getAdminRole', $user->id) }}"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>

								<li><a href="{{ action('AdminController@getUserRole', $user->id) }}"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>

				@endforeach


				</tbody>
			</table>

			<div class="pagination">
				{{ $users->links() }}
			</div>
			<a href="{{ action('AdminController@getNewUser') }}" class="btn btn-success">New User</a>
		  </div>
        </div>
      </div>

      <hr>
<!-- -->
{{ Form::open(array('action' => array('AdminController@deleteUser'), 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}

@stop

@section('bottomscript')

<script type="text/javascript">
    $(".deleteUser").click(function() {
        var userId = $(this).data('userid');
        $("#deleteForm").attr('action', '/admin/user/' + userId);
        if (confirm("Are you sure you want to delete user")) {
            $('#deleteForm').submit();
        };
    });
</script>
@stop
