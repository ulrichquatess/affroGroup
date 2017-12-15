@extends('layouts.admin')
@section('content')
    <body>
        <div class="container">
                <h1><br><br></h1>
            <section>       
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            {!! Form::open() !!}
                                <h1>Log in</h1> 
                                <div>
                                <p> 
                                    {{ Form::label('email', 'Your email:') }}
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => " mymail@mail.com"]) }}                                    
                                </p>
                                @if ($errors->has('email'))
                                  <p class="help is-danger">{{$errors->first('email')}} </p>
                                @endif
                            </div><br>
                                <p> 
                                  {{ Form::label('password', 'Your password') }}
                                    {{ Form::password('password', ['class' => 'form-control', ' placeholder' => 'eg. X8df!90EO']) }} 
                                </p>
                                @if ($errors->has('password'))
                                  <p class="help is-danger">{{$errors->first('password')}} </p>
                                @endif
                                <p class="signin button"> 
                  <input type="submit" value="Log in"/> 
                </p>   
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>  
            </section>
        </div>
        @endsection