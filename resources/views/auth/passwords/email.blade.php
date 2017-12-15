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

   <div class="container ulrich" style="margin-top: 70px; margin-left: 80px;">
     <div class="row">
     	<div class="col-md-6 col-md-offset-3">
     		<div class="panel panel-default">
     			<div class="panel-heading text-center">
     				<h1>Reset Password</h1> 
     			</div>
     			<div class="panel-body">
     				{!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}

     				{{ Form::label('email', 'Email Adress') }}
     				{{ Form::email('email', null, ['class' => 'form-control'])}}
<br>
     				{{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

     				{!! Form::close() !!}
     			</div>
     		</div>
     	</div>
     </div>
</div>

@endsection