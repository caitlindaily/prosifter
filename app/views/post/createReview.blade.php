@extends('layouts.master')
<link href="/css/ratings.css" rel="stylesheet">
@section('content')

      <div role="main" class="main">

        <section class="page-top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">Review</li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h2>Create Review</h2>
              </div>
            </div>
          </div>
        </section>

        <div class="container">

          <div class="row">
            <div class="col-md-12">

              <div class="row featured-boxes login">
                <div class="col-md-12">
                  <div class="featured-box featured-box-secundary default info-content">
                    <div class="box-content">
                      <h4>Please leave your review</h4>
                      {{ Form::open(array('action' => array('ProviderController@saveReview', $provider->id))) }}
                      <!--Error/Success Message-->
                      @if ($errors->has('title'))
                        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                      @endif
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-6">
                              <label>Title</label>
                              {{ Form::text('title', null, array('class' => 'form-control input-lg', 'placeholder' => 'Title')) }}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-6">
                              <label>Body</label>
                              {{ Form::textarea('body', null, array('class' => 'form-control input-lg', 'placeholder' => 'Body')) }}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <span>{{ Form::submit('Submit', array('class' => 'btn btn-primary pull-right push-bottom')) }}</span>
                          </div>
                        </div>
                      {{ Form::close() }}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

@stop

@section('bottomscript')
    <script type="text/javascript">
        $(".star").click(function (e) {
            var rating = $(this).data('rating');
            e.preventDefault();
        });
    </script>
@stop