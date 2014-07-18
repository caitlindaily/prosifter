@extends('layouts.master')

@section('content')
{{-- PUT ME IN TOP SCRIPT! --}}
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="/star-rating/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />


<div class="container">
<h1>{{{ $category->name }}}</h1>
<hr>
</div>


<div class="container">
@foreach($providers as $provider)
<h2>{{ link_to_action('ProviderController@show', $provider->company_name, $provider->id) }}</h2>
<input value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" data-id="{{ $provider->id }}">
<div id="ajax-message"></div>
	<p>{{ $provider->location }}</p>
@endforeach
</div>
{{ $providers->links() }}



@stop
@section('bottomscript')
<script src="/star-rating/js/star-rating.min.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        $(".rating").rating();
    });

    $('.rating').on('rating.change', function(event, value) {
    	console.log('I clicked stars!');
    	console.log(value);

    	var providerId = $(this).data('id');
    	var starRating = value;

	     $.ajax({
	        url: "/rate-provider",
	        type: "POST",
	        data: {
	        	'provider_id': providerId,
	        	'star_rating': starRating
	        },
	        dataType: "json",
	        success: function (data) {
	            $('#ajax-message').html(data.message);
	        }
	    });
    
    });



</script>







@stop
