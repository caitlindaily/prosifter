@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1>New User <small>User registration</small></h1>
			</div>
			{{ Form::open(array('action' => 'AdminController@postUser', 'class' => 'form-horizontal')) }}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="firstName">First Name</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="firstName" name="firstName" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="lastName">Last Name</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="lastName" name="lastName" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">E-mail</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="email" name="email" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" class="input-xlarge" id="password" name="password" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="role">Role</label>
						<div class="controls">
							<select id="role" name="role">
								<option value="admin">Admin</option>
								<option value="mod">Moderator</option>
								<option value="user" selected>User</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="active">Active?</label>
						<div class="controls">
							<input type="checkbox" id="active" name="active" value="1" />
						</div>
					</div>
					<div class="form-actions">
						<input type="submit" class="btn btn-success btn-large" value="Save User" /> <a class="btn" href="users.html">Cancel</a>
					</div>
				</fieldset>
			{{ Form::close() }}
		  </div>
        </div>
      </div>

      <hr>
@stop
