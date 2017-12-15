@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($client, ['route' => ['client.update', $client->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Name Of Client</label>
                  {{ Form::text('client_name', null, ["class" => 'form-control']) }}
                    @if ($errors->has('client_name'))
                        <p class="help is-danger">{{$errors->first('client_name')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Client Description</label>
                  {{ Form::textarea('description', null, ["class" => 'form-control']) }}
                  @if ($errors->has('description'))
                        <p class="help is-danger">{{$errors->first('description')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Facebook</label>
                  {{ Form::text('facebook', null, ["class" => 'form-control']) }}
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Twitter</label>
                  {{ Form::text('twitter', null, ["class" => 'form-control']) }}
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Linkedin</label>
                  {{ Form::text('linkedin', null, ["class" => 'form-control']) }}
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>G-mail</label>
                  {{ Form::text('gmail', null, ["class" => 'form-control']) }}
                </div>



                <div class="form-group">
                  {{ Form::label('featured_image', 'Upload Feautured Image:')}}
                  {{ Form::file('featured_image')}}
                </div>

                 <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('client.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
@endsection