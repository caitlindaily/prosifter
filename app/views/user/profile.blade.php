@extends('layouts.master')

@section('content')

<div class="container">
	<h3>Profile View</h3>

	
	<h5>Personal Info</h5>
	<div>Name: {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
	<br>
	<div>Email: {{ Auth::user()->email }}</div>
	<br>

	@if (Auth::user()->role == 'prov')
	<h5>Company Info</h5>
	<div>Name: {{ Auth::user()->provider->company_name }}</div>
	<br>
	<div>Location: {{ Auth::user()->provider->location }}</div>
	<br> 
	@endif

	{{ link_to_action('UsersController@edit', 'Edit Info', Auth::id()) }} 
</div>

@stop