@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Edit English Content</a></li>
    <li><a data-toggle="tab" href="#menu1">Edit French Content</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($service, ['route' => ['service.update', $service->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Service Title</label>
                 {{ Form::text('service_title', null, ["class" => 'form-control']) }}
                     @if ($errors->has('service_title'))
                        <p class="help is-danger">{{$errors->first('service_title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Service Description</label>
                  {{ Form::textarea('service_description', null, ["class" => 'form-control']) }}
                     @if ($errors->has('service_description'))
                        <p class="help is-danger">{{$errors->first('service_description')}} </p>
                     @endif
                </div>


                <div class="form-group">
                  {{ Form::label('service_image', 'Upload Feautured Image:')}}
                  {{ Form::file('service_image')}}
                     @if ($errors->has('service_image'))
                        <p class="help is-danger">{{$errors->first('service_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('service.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">
              
                <div class="form-group">
                  <label>Service Title</label>
                 {{ Form::text('service_title_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('service_title_fr'))
                        <p class="help is-danger">{{$errors->first('service_title_fr')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Service Description</label>
                  {{ Form::textarea('service_description_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('service_description_fr'))
                        <p class="help is-danger">{{$errors->first('service_description_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('service.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection