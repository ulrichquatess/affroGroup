@extends('layouts.admin')
@section('content')

  <header>
                <h1>Login and Registration Form</h1>
        
            </header>
<section>       
      <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        

                        <div id="login" class="animate form">
                            {!! Form::open() !!}

                                <h1> Sign up </h1> 
                                <p> 
                                    {{ Form::label('name', "Name")}}
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'eg. mysupermail' ]) }}
                                </p>
                                @if ($errors->has('name'))
                                  <p class="help is-danger">{{$errors->first('name')}} </p>
                                @endif

                                <p> 
                                    {{ Form::label('email', 'Email:') }}
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => "mysupermail@mail.com"]) }}
    
                                </p>

                                @if ($errors->has('email'))
                                  <p class="help is-danger">{{$errors->first('email')}} </p>
                                @endif

                                <p> 
                                    {{ Form::label('password', 'Password:') }}
                                    {{ Form::password('password', ['class' => 'form-control', ' placeholder' => 'eg. X8df!90EO']) }}
                                </p>

                                @if ($errors->has('password'))
                                  <p class="help is-danger">{{$errors->first('password')}} </p>
                                @endif

                                <p> 
                                    {{ Form::label('password_confirmation', "Confirm Password")}}
                                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'eg. X8df!90EO']) }}
                                </p>

                                @if ($errors->has('password_confirmation'))
                                  <p class="help is-danger">{{$errors->first('password_confirmation')}} </p>
                                @endif

                                <p class="signin button"> 
                  <input type="submit" value="Sign up"/> 
                </p>
                                <p class="change_link">  
                  Already a member ?
                  <a href="{{ route('login') }}" class="to_register"> Go and log in </a>
                </p>
                            </form>
                        </div>
            
                    </div>
                </div>  
            </section>
      @endsection