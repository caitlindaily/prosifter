@extends('layouts.master')

@section('content')

<div class="continer">
  <h1>{{{ $provider->company_name }}}</h1>
  <h4>{{{ $provider->location }}}</h4>
</div>
<div>Rating</div>

<div class="container">
  @foreach($provider->posts as $post)
	<h3>{{{ $post->user->email }}}</h3>
	<h5>{{{ $post->title }}}</h5>
	<p>{{{ $post->body }}}</p>
  @endforeach
</div>

@stop
