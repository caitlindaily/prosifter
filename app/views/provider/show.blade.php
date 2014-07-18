@extends('layouts.master')

@section('content')

<div class="container">
  <h1>{{{ $provider->company_name }}}<span>(rating display goes here)</span></h1>
  <h4>{{{ $provider->location }}}</h4>

@if(Auth::check())
   {{ link_to_action('PostsController@create', 'Leave Review', $provider->id, array('class'=> 'btn-sm btn-primary')) }}
   <br>
   <br>
</div>
@endif
   <br>

<div class="container">
   <h2>Reviews</h2>
   <hr>
  @foreach($provider->posts as $post)
	<h3>{{{ $post->title }}}</h3>
	<h5>by {{{ $post->user->email }}}</h5>
	<h5>created {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</h5>
	<p>{{{ $post->body }}}</p>
  @endforeach
</div>

@stop
