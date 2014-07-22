@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
          <div class="well hero-unit">
          	@if (Auth::check())
            <h1>Welcome, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
            @endif
            <p>This is the administration panel. Here you can manage your users, providers, &amp their roles.</p>
            <p><a class="btn btn-success btn-large" href="{{ action('AdminController@getUsers') }}">Manage Users &raquo;</a></p>
          </div>
          <div class="row-fluid">
            <div class="span3">
              <h3>Total Users</h3>
              <p><a href="/admin/users" class="badge badge-inverse">11</a></p>
            </div>
            <div class="span3">
              <h3>New Users Today</h3>
              <p><a href="/admin/users" class="badge badge-inverse">2</a></p>
            </div>
            <div class="span3">
              <h3>Roles</h3>
			  <p><a href="/admin/roles" class="badge badge-inverse">3</a></p>
            </div>
          </div>
		  <br />
        </div>
      </div>

      <hr>

@stop