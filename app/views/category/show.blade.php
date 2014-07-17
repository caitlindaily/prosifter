@extends('layouts.master')

@section('content')
<div classs="container">
<h1>{{{ $category->name }}}</h1>
<hr>
</div>


<div class="container">
@foreach($providers as $provider)
<h2>{{ link_to_action('ProviderController@show', $provider->company_name, $provider->id) }}</h2>
	<p>{{ $provider->location }}</p>
@endforeach
</div>
{{ $providers->links() }}


@stop





