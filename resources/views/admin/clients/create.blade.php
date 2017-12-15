@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Client Element</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'client.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Name Of Client</label>
                  <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter Client Name...">
                    @if ($errors->has('client_name'))
                        <p class="help is-danger">{{$errors->first('client_name')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Client Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3" placeholder="Entre Description ..."></textarea>
                  @if ($errors->has('description'))
                        <p class="help is-danger">{{$errors->first('description')}} </p>
                     @endif
                </div>

                 <!-- textarea -->
                <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Twitter</label>
                  <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Linkedin</label>
                  <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>G-mail</label>
                  <input type="text" name="gmail" id="gmail" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  {{ Form::label('client_image', 'Upload Feautured Image:')}}
                  {{ Form::file('client_image')}}
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('client.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
@endsection