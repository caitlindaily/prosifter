@extends('layouts.master')
<link href="/css/ratings.css" rel="stylesheet">
@section('content')

    <div class="container">
    @if(isset($post))
      <h1>Edit Review</h1>
       {{ Form::model($post, array('action' => array('PostsController@update', $post->slug), 'method' => 'PUT')) }}
    @else
      <h1>Create Review</h1>
       {{ Form::open(array('action' => 'PostsController@store')) }}
    @endif
    </div>

<!--Error/Success Message-->
    @if ($errors->has('title'))
      {{ $errors->first('title', '<span class="help-block">:message</span>') }}
    @endif  

<!--Create/Edit Form-->
<div class="container">
    <div>
      {{ Form::label('title', 'Title') }}<br>
      {{ Form::text('title') }}
    </div>  
    <br>
    <div>   
      {{ Form::label('body', 'Review') }}<br>
      {{ Form::textarea('body') }}
    </div>   
      <div class="rate-ex1-cnt">
      <a href="#" data-rating="1" class="star rate-btn-1 rate-btn">1</a>
      <a href="#" data-rating="2" class="star rate-btn-2 rate-btn">2</a>
      <a href="#" data-rating="3" class="star rate-btn-3 rate-btn">3</a>
      <a href="#" data-rating="4" class="star rate-btn-4 rate-btn">4</a>
      <a href="#" data-rating="5" class="star rate-btn-5 rate-btn">5</a>
    </div>
    <br>
      {{ Form::submit('Submit') }}
      {{ Form::close() }}   
  
</div>

@stop

@section('bottomscript')
    <script type="text/javascript">
        $(".star").click(function (e) {
            var rating = $(this).data('rating');

            $.post('/rating', { "rating": rating }, function() {
                alert("I was posted! Yay!");
            });

            e.preventDefault();
        });
    </script>
@stop