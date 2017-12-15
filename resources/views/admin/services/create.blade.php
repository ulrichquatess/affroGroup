@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Create English Content</a></li>
    <li><a data-toggle="tab" href="#menu1">Create French Content</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'service.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Service Title</label>
                  <input type="text" name="service_title" id="service_title" class="form-control" placeholder="Enter Service Title ...">
                    @if ($errors->has('service_title'))
                        <p class="help is-danger">{{$errors->first('service_title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Service Description</label>
                  <textarea class="form-control" name="service_description" id="service_description" rows="3" placeholder="Entre ..."></textarea>
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
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('service.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">

               <div class="form-group">
                  <label>Service Title</label>
                  <input type="text" name="service_title_fr" id="service_title_fr" class="form-control" placeholder="Enter Service Title ...">
                    @if ($errors->has('service_title_fr'))
                        <p class="help is-danger">{{$errors->first('service_title_fr')}} </p>
                     @endif
                </div>

               <!-- textarea -->
                <div class="form-group">
                  <label>Service Description</label>
                  <textarea class="form-control" name="service_description_fr" id="service_description_fr" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('service_description_fr'))
                        <p class="help is-danger">{{$errors->first('service_description_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('service.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection