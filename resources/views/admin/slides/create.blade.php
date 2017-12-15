@extends('layouts.boxed')
@section('content')
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Éléments généraux</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'slide.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter ...">
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Content</label>
                  <input type="text" name="content" id="content" class="form-control" placeholder="Enter ...">
                    @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                 <div class="form-group">
                  {{ Form::label('Slide_image', 'Upload Feautured Image:')}}
                  {{ Form::file('slide1_image')}}
                </div>


                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Soumettre</button>
                <a href="{{ route('slide.index') }}" class="btn btn-default">Retourner</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
 @endsection