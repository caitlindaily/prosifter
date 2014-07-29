@extends('layouts.master')


@section('content')


			<div role="main" class="main">
				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li class="active">Category</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>{{{ strtoupper($category->name) }}}</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts">
								@foreach($providers as $provider)
								<article class="post post-medium">
									<div class="row">

										<div class="col-md-5">
											<div class="post-image">
												<div class="owl-carousel" data-plugin-options='{"items":1}'>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="{{{ $provider->img_path }}}" alt="">
														</div>
													</div>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="/img/blog/blog-image-2.jpg" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">
												<div>
													<h2>{{ link_to_action('ProviderController@show', $provider->company_name, $provider->id) }}<k style='margin-left: 50px;'><span style="color: {{$provider->getColor()}}">  {{{ $provider->avgRating() }}}</span></k></h2>
												</div>
												@if (Auth::check())
												<div>
													<input value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" data-id="{{ $provider->id }}">
													<div id="ajax-message-{{ $provider->id }}"></div>
												</div>
												@endif
												<div><h4><a href="tel:+1{{{preg_replace('/\D+/', '', ($provider->phone))}}}">{{{ $provider->phone }}}</a></h4></div>
												<strong><div>{{{ucwords($provider->address)}}}</div>
												<div>{{{ucwords($provider->city)}}}, {{{strtoupper($provider->state)}}} {{{$provider->zip_code}}}</div>
												<div><a href="http://maps.google.com/maps?q={{{ str_replace('+', ' ', ($provider->address)) }}},+{{{ str_replace('+', ' ', ($provider->city)) }}},+{{{str_replace('+', ' ', ($provider->state))}}},+{{{ $provider->zip_code }}}">View Map <i class='icon icon-map-marker'></i></a></div>
												<div><a href='http://{{{$provider->website}}}'>Visit Website <i class='icon icon-globe'></i></a></div>
												</strong>
												<p>{{{ substr($provider->description, 0, 250) }}}...</p>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="post-meta">
												<span><i class="icon icon-calendar"></i> January 10, 2013 </span>
												<span><i class="icon icon-user"></i> By <a href="#">John Doe</a> </span>
												{{ link_to_action('ProviderController@show', 'Read more...', $provider->id, array('class' => 'btn btn-xs btn-primary pull-right')) }}
											</div>
										</div>
									</div>
								</article>
								@endforeach
								<!-- PAGINATION -->
								<span class="pagination pagination-lg pull-right">
									{{ $providers->links() }}
								</span>
							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">

								<hr />

								<h4>Categories</h4>
								<ul class="nav nav-list primary push-bottom">
									@foreach($categories as $category)
									<li>{{ link_to_action('CategoryController@show', $category->name, [$category->name]) }}</li>
									@endforeach
								</ul>

							</aside>
						</div>
					</div>

				</div>

			</div>


@stop


@section('bottomscript')
<script src="/star-rating/js/star-rating.min.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        $(".rating").rating();
    });

    $('.rating').on('rating.change', function(event, value) {
    	
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
	            $('#ajax-message-' + providerId).html(data.message);
	        }
	    });
    
    });
</script>


@stop