@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
          <div class="row-fluid">
            <div class="page-header">
                <h1>New User <small>User registration</small></h1>
            </div>

                {{ Form::model($user, array('action' => array('AdminController@putUser', $user->id), 'method' => 'PUT', 'files' => true)) }}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="firstName">First Name</label>
                        <div class="controls">
                            {{ Form::text('first_name', null, array('class' => 'input-xlarge')) }}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="lastName">Last Name</label>
                        <div class="controls">
                            {{ Form::text('last_name', null, array('class' => 'nput-xlarge')) }}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">E-mail</label>
                        <div class="controls">
                            {{ Form::text('email', null, array('class' => 'nput-xlarge')) }}
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
                                <option value="admin" @if($user->role == "admin") selected @endif>Admin</option>
                                <option value="mod" @if($user->role == "mod") selected @endif>Moderator</option>
                                <option value="user" @if($user->role == "user") selected @endif>User</option>
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