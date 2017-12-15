@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('blog.create')}}">Create A New Blog</a><br>
                  </div>
                </div>
              </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Blog Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Blog Title</th>
                  <th>Blog Description</th>
                  <th></th>
                  <th></th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($blogs as $blog ) 
                <tr>
                  <td>{{ substr(strip_tags($blog->blog_title), 0, 40) }} {{ strlen(strip_tags($blog->blog_title)) > 40 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($blog->blog_description), 0, 100) !!} {!! strlen(strip_tags($blog->blog_description)) > 100 ? "...." : "" !!}</td>
                  <td></td>
                  <td> </td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('blog.show', $blog->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('blog.edit', $blog->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['blog.destroy', $blog->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                <th>Blog Title</th>
                  <th>Blog Description</th>
                  <th></th>
                  <th></th>
                  <th>Action</th>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection        