@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('client.create')}}">Create A New Client</a><br>
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
              <h3 class="box-title">Client Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Client Name</th>
                  <th>Client Description</th>
                  <th>Facebook</th>
                  <th>G-Mail</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($clients as $client ) 
                <tr>
                  <td>{{ substr(strip_tags($client->client_name), 0, 20)}} {{ strlen(strip_tags($client->client_name)) > 100 ? "...." : "" }}</td>
                  <td>{{ substr(strip_tags($client->description), 0, 10)}} {{ strlen(strip_tags($client->description)) > 100 ? "...." : "" }}</td>
                  <td>{{ $client->facebook }}</td>
                  <td>{{ $client->gmail }}</td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('client.show', $client->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('client.edit', $client->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['client.destroy', $client->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                <th>Client Name</th>
                  <th>Client Description</th>
                  <th>Facebook</th>
                  <th>G-Mail</th>
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