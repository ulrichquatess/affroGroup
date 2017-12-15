@extends('blog.home')

@section('content')
   
   <!-- Header -->
    <header class="masthead" style="height: 100px;">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Studio!</div>
        </div>
      </div>
    </header>

    <div class="container">
     <div class="row">
     	<div class="col-md-6 col-md-offset-3">
     		<div class="panel panel-default">
     			<div class="panel-heading">
     				Reset Password
     			</div>
     			<div class="panel-body">
     				{!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}

                         {{ Form::hidden('token', $token) }}

     				{{ Form::label('email', 'Email Adress') }}
     				{{ Form::email('email', $email, ['class' => 'form-control'])}}

                         {{ Form::label('password', 'New Password') }}
                         {{ Form::password('password', ['class' => 'form-control']) }}

                         {{ Form::label('password_confirmation', 'Confirm New Password') }}
                         {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
<br>
     				{{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

     				{!! Form::close() !!}
     			</div>
     		</div>
     	</div>
     </div>
  </div> 
@endsection