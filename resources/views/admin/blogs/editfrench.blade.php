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
               {!! Form::model($blogfrench, ['route' => ['blogfrench.update', $blogfrench->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Blog Title</label>
                 {{ Form::text('blog_title', null, ["class" => 'form-control']) }}
                     @if ($errors->has('blog_title'))
                        <p class="help is-danger">{{$errors->first('blog_title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Blog Description</label>
                  {{ Form::textarea('blog_description', null, ["class" => 'form-control']) }}
                     @if ($errors->has('blog_description'))
                        <p class="help is-danger">{{$errors->first('blog_description')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('blog.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
@endsection