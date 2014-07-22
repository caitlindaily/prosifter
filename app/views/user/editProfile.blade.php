@extends('layouts.master')

@section('content')

<div class="container">
   <!--Edit Form-->
	  <h1>Edit Info</h1>
	   {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files' => true)) }}
	
    <div>
      {{ Form::label('first_name', 'First Name') }}<br>
      {{ Form::text('first_name') }}
    </div>  
    <br>
    <div>   
      {{ Form::label('last_name', 'Last Name') }}<br>
      {{ Form::text('last_name') }}
    </div>   
    <br>
    <div>   
      {{ Form::label('email', 'Email') }}<br>
      {{ Form::email('email') }}
    </div> 
    <br>
    <div>
      {{ Form::submit('Submit') }}
      {{ Form::close() }}   
    </div>  
</div>
@stop	