@extends('layouts.boxed')
@section('content')
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($slide, ['route' => ['slide.update', $slide->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Titre</label>
                  {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Entrez le Contenu</label>
                  {{ Form::text('content', null, ["class" => 'form-control']) }}
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('Slide_image', 'Upload Feautured Image:')}}
                  {{ Form::file('slide1_image')}}
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Sauvegarder les modifications</button>
                <a href="{{ route('slide.index') }}" class="btn btn-warning">Annuler</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
    
@endsection