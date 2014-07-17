@extends('layouts.master')

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
    <p>Some sort of rating to click on goes here</p>
    <br>
      {{ Form::submit('Submit') }}
      {{ Form::close() }}   
</div>
@stop