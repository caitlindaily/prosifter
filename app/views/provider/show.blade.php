@extends('layouts.master')

@section('content')


      <div role="main" class="main">

        <section class="page-top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <!-- HOW, GET DYNAMIC CATEGORY NAME -->
                  <li class="active">Category</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2>{{{ strtoupper($provider->company_name) }}}<k style='margin-left: 75px;, '><span style="color: {{$provider->getColor()}}">  {{{ $provider->avgRating() }}}</span></k></h2>
              </div>

            </div>
          </div>
        </section>

        <div class="container">

          <div class="row">
            <div class="col-md-9">
              <div class="blog-posts single-post">

                <article class="post post-large blog-single-post">
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

                  <!-- <div class="post-date">
                    <span class="day">10</span>
                    <span class="month">Jan</span>
                  </div> -->

                  <div class="post-content">

                    <h2>{{ link_to_action('ProviderController@show', $provider->company_name, $provider->id) }}</h2>
                    @if(Auth::check())
                      {{ link_to_action('ProviderController@createReview', 'Leave Review', $provider->id, array('class'=> 'btn-sm btn-primary pull-right')) }}
                    @endif
                    <div>
                          <input value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" data-id="{{ $provider->id }}">
                          <div id="ajax-message"></div>
                        </div>
                    <div class="post-meta">
                      <span><i class="icon icon-user"></i> By <a href="#">John Doe</a> </span>
                      <!-- HOW, REPLACE THIS LINE WITH CATEGORY -->
                      <span><i class="icon icon-comments"></i> <a href="#prov-review">Reviews</a></span>
                    </div>

                    <div><h4><a href="tel:+1{{{preg_replace('/\D+/', '', ($provider->phone))}}}">{{{ $provider->phone }}}</i></a></h4></div>
                    <strong><div>{{{ucwords($provider->address)}}}</div>
                    <div>{{{ucwords($provider->city)}}}, {{{strtoupper($provider->state)}}} {{{$provider->zip_code}}}</div>
                    <div><a href="http://maps.google.com/maps?q={{{ str_replace('+', ' ', ($provider->address)) }}},+{{{ str_replace('+', ' ', ($provider->city)) }}},+{{{str_replace('+', ' ', ($provider->state))}}},+{{{ $provider->zip_code }}}">View Map <i class='icon icon-map-marker'></i></a></div>
                    <div><a href='http://{{{$provider->website}}}'>Visit Website <i class='icon icon-globe'></i></a></div>
                    </strong>

                    <p>{{{ $provider->description }}}</p>
                    <div class="post-block post-share">
                      <h3><i class="icon icon-share"></i>Share this post</h3>

                      <!-- AddThis Button BEGIN -->
                      <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_pinterest_pinit"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                      </div>
                      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                      <!-- AddThis Button END -->

                    </div>

                    <!-- REVIEWS SECTION START -->
                    <div class="post-block post-comments clearfix">
                      <h3><i class="icon icon-comments"></i><a id="prov-review">Reviews</a></h3>
                      @if(Auth::check())
                        {{ link_to_action('ProviderController@createReview', 'Leave Review', $provider->id, array('class'=> 'btn-sm btn-primary pull-right')) }}
                      @endif
                      <ul class="comments">
                        <li>
                          @foreach($provider->posts as $post)
                          <div class="comment">
                            <div class="img-thumbnail">
                              <img class="avatar" alt="" src="{{{ $post->user->img_path }}}">
                            </div>
                            <div class="comment-block">
                              <div class="comment-arrow"></div>
                              <span class="comment-by">
                                <strong>{{{ substr(($post->user->first_name), 0, 1) }}}. {{{ $post->user->last_name }}}</strong>
                              </span>
                              <div><em><strong>{{{ $post->title }}}</strong></em></div>
                              <p>{{{ $post->body }}}</p>
                              <span class="date pull-right">{{{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}}</span>
                            </div>
                          </div>
                          @endforeach
                        </li>
                      </ul>
                    </div>
                    <!-- END REVIEWS SECTION -->
                  </div>
                </article>

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