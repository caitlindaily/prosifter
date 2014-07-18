@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1>My profile <small>Update info</small></h1>
			</div>
			<form class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Name</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="name" value="Admin" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">E-mail</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="email" value="travis@provider.com" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="pnohe">Phone</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="phone" value="xxx-xxx-xxxx" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="city">City</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="city" value="My City" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="role">Role</label>
						<div class="controls">
							<select id="role">
								<option value="admin" selected>Admin</option>
								<option value="mod">Moderator</option>
								<option value="user">User</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="active">Active?</label>
						<div class="controls">
							<input type="checkbox" id="active" value="1" checked />
						</div>
					</div>
					<div class="form-actions">
						<input type="submit" class="btn btn-success btn-large" value="Save Changes" /> <a class="btn" href="users.html">Cancel</a>
					</div>
				</fieldset>
			</form>
		  </div>
        </div>
      </div>

      <hr>

@stop