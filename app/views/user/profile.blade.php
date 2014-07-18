@extends('layouts.master')

@section('content')

<div class="container">
	<h3>Profile View</h3>

	@if (Auth::check())
	<h5>Personal Info</h5>
	<div>Name: {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
	<br>
	<div>Email: {{ Auth::user()->email }}</div>
	<br>

	<h5>Provider Info</h5>
	<div>Name: {{ Auth::user()->provider->company_name }}</div>
	<br>
	<div>Location: {{ Auth::user()->provider->location }}</div>
	<br>
	{{ link_to_action('UsersController@edit', 'Edit Info', Auth::id(), array('class'=> 'btn btn-primary')) }}
	@endif
</div>

@stop