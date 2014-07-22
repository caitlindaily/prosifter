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
                <h2>{{{ strtoupper($provider->company_name) }}} <span style="margin-left: 75px;, color: {{$provider->getColor()}}">  {{{ $provider->avgRating() }}}</span></h2>
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
                          <img class="img-responsive" src="/img/blog/blog-image-1.jpg" alt="">
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
                      {{ link_to_action('PostsController@create', 'Leave Review', $provider->id, array('class'=> 'btn-sm btn-primary pull-right')) }}
                    @endif
                    <div class="post-meta">
                      <span><i class="icon icon-user"></i> By <a href="#">John Doe</a> </span>
                      <!-- HOW, REPLACE THIS LINE WITH CATEGORY -->
                      <span><i class="icon icon-comments"></i> <a href="#">Reviews</a></span>
                    </div>

                    <div><h4><a href="tel:+1{{{preg_replace('/\D+/', '', ($provider->phone))}}}">{{{ $provider->phone }}}</a></h4></div>
                    <strong><div>{{{ucwords($provider->address)}}}</div>
                    <div>{{{ucwords($provider->city)}}}, {{{strtoupper($provider->state)}}} {{{$provider->zip_code}}}</div>
                    <div><a href="http://maps.google.com/maps?q={{{ str_replace('+', ' ', ($provider->address)) }}},+{{{ str_replace('+', ' ', ($provider->city)) }}},+{{{str_replace('+', ' ', ($provider->state))}}},+{{{ $provider->zip }}}">View Map</a></div>
                    <div><a href='http://{{{$provider->website}}}'>Visit Website</a></div>
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

                    <div class="post-block post-comments clearfix">
                      <h3><i class="icon icon-comments"></i>Reviews</h3>

                      <ul class="comments">
                        <li>
                          @foreach($provider->posts as $post)
                          <div class="comment">
                            <div class="img-thumbnail">
                              <img class="avatar" alt="" src="img/avatar-2.jpg">
                            </div>
                            <div class="comment-block">
                              <div class="comment-arrow"></div>
                              <span class="comment-by">
                                <strong>{{{ substr(($post->user->first_name), 0, 1) }}}. {{{ $post->user->last_name }}}</strong>
                                <span class="pull-right">
                                  <span> <a href="#"><i class="icon icon-reply"></i> Reply</a></span>
                                </span>
                              </span>
                              <p>{{{ $post->body }}}</p>
                              <span class="date pull-right">{{{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}}</span>
                            </div>
                          </div>
                          @endforeach
                        </li>
                      </ul>

                    </div>

                    <div class="post-block post-leave-comment">
                      <h3>Leave a Review</h3>

                      {{ Form::open(array('action' => 'PostsController@store')) }}
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-12">
                              {{ Form::text('title', null, array('placeholder' => 'Title', 'class' => 'form-group')) }}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-12">
                              {{ Form::textarea('title', null, array('placeholder' => 'Review', 'class' => 'form-group')) }}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            {{ Form::submit('Submit', null, array('class' => 'btn btn-primary btn-lg')) }}
                          </div>
                        </div>
                      {{ Form::close() }}
                    </div>

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

                <div class="tabs">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="icon icon-star"></i> Popular</a></li>
                    <li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="popularPosts">
                      <ul class="simple-post-list">
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="blog-single.html">
                                <img src="/img/blog/blog-thumb-1.jpg" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
                            <div class="post-meta">
                               Jan 10, 2013
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="blog-single.html">
                                <img src="/img/blog/blog-thumb-2.jpg" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="blog-single.html">Vitae Nibh Un Odiosters</a>
                            <div class="post-meta">
                               Jan 10, 2013
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="blog-single.html">
                                <img src="/img/blog/blog-thumb-3.jpg" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="blog-single.html">Odiosters Nullam Vitae</a>
                            <div class="post-meta">
                               Jan 10, 2013
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-pane" id="recentPosts">
                      <ul class="simple-post-list">
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="blog-single.html">
                                <img src="/img/blog/blog-thumb-2.jpg" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="blog-single.html">Vitae Nibh Un Odiosters</a>
                            <div class="post-meta">
                               Jan 10, 2013
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="blog-single.html">
                                <img src="/img/blog/blog-thumb-3.jpg" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="blog-single.html">Odiosters Nullam Vitae</a>
                            <div class="post-meta">
                               Jan 10, 2013
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="blog-single.html">
                                <img src="/img/blog/blog-thumb-1.jpg" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
                            <div class="post-meta">
                               Jan 10, 2013
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <hr />

                <h4>About Us</h4>
                <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

              </aside>
            </div>
          </div>

        </div>

      </div>


@stop