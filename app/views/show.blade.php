Specific post of one company

@extends('layouts.master')
<html>
<head>

</head>
<body>

<div class="continer">
  <h1>{{{ $provider->compmany_name }}}</h1>
  <h4>{{{ $provider->location }}}</h4>
</div>
<div>Rating</div>

<div class="container">
    @if (Auth::check() {
	@foreach($reviews as $review)
	<h3>{{ $review->user->email }}</h3>
	<p>{{ $review->body) }}</p>
    })
    @endif
</div>



