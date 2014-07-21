@extends('layouts.master')
<link href="/css/ratings.css" rel="stylesheet">
@section('content')

    <div class="container">
    @if(isset($post))
      <h1>Edit Review</h1>
       {{ Form::model($post, array('action' => array('PostsController@update', $post->slug), 'method' => 'PUT')) }}
    @else
      <h1>Create Review</h1>
       {{ Form::open(array('action' => 'ProviderController@saveReview')) }}
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
    <br>
      {{ Form::submit('Submit') }}
      {{ Form::close() }}   
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