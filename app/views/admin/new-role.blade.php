@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1>New Role <small>Add a new role</small></h1>
			</div>
			<form class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="role">Role Name</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="role" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="description">Description</label>
						<div class="controls">
							<textarea class="input-xlarge" id="description" rows="3"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="slug">Slug</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="slug" />
						</div>
					</div>
					<div class="form-actions">
						<input type="submit" class="btn btn-success btn-large" value="Save Role" /> <a class="btn" href="roles.html">Cancel</a>
					</div>
				</fieldset>
			</form>
		  </div>
        </div>
      </div>

      <hr>
@stop
