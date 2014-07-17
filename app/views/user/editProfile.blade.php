@section('content')

<!--Edit Info-->
<div class="container">
	@if(isset($user))
	  <h1>Edit Info</h1>
	   {{ Form::model($user, array('action' => array('UsersController@update'), 'method' => 'PUT', 'files' => true)) }}
	

<div class="container">
    <div>
      {{ Form::label('first_name', 'First Name') }}<br>
      {{ Form::text('first_name') }}
    </div>  
    <br>
    <div>   
      {{ Form::label('last_name', 'Last Name') }}<br>
      {{ Form::text('last name') }}
    </div>   
    <br>
    <div>   
      {{ Form::label('email', 'Email') }}<br>
      {{ Form::email('email') }}
    </div>  
      {{ Form::submit('Submit') }}
      {{ Form::close() }}   
	@endif
	</div>
@stop	