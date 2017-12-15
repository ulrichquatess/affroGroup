@extends('layouts.boxed')
@section('content')
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Afficher toutes les pages</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('slide.create')}}">Créer un nouvel article</a><br>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Titre</th>
                  <th>Contenu</th>
                  <th>Action</th>
                </tr>
                @foreach($slides as $slide) 
                <tr>
                  <td>{{ substr(strip_tags($slide->title), 0, 40) }} {{ strlen(strip_tags($slide->slide_title)) > 50 ? "..." : ""  }}</td>
                  <td>{{ substr(strip_tags($slide->content), 0, 70) }} {{ strlen(strip_tags($slide->content)) > 100 ? "..." : ""  }}</td>
                  <td>
                <a class="btn btn-info" href="{{ route('slide.show', $slide->id)}}">Montrer</a>
               <a class="btn btn-primary" href="{{ route('slide.edit', $slide->id) }}">Modifier</a>
                {!! Form::open(['method' => 'DELETE','route' => ['slide.destroy', $slide->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Effacer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                 </td>            
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
@endsection        