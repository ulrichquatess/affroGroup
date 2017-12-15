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
               {!! Form::model($blog, ['route' => ['blog.update', $blog->id], 'method' => 'PATCH', 'files' =>true]) !!}
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


                <div class="form-group">
                  {{ Form::label('blog_image', 'Upload Feautured Image:')}}
                  {{ Form::file('blog_image')}}
                     @if ($errors->has('blog_image'))
                        <p class="help is-danger">{{$errors->first('blog_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('blog.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">
              
                <div class="form-group">
                  <label>Blog Title</label>
                 {{ Form::text('blog_title_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('blog_title_fr'))
                        <p class="help is-danger">{{$errors->first('blog_title_fr')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Blog Description</label>
                  {{ Form::textarea('blog_description_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('blog_description_fr'))
                        <p class="help is-danger">{{$errors->first('blog_description_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('blog.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection