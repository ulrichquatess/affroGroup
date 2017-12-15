@extends('layouts.boxed')
@section('content')
 <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    {{ date( ' h:ia ', strtotime( $service->updated_at ))}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i>{{ date( 'M j Y ', strtotime( $service->updated_at ))}}</span>

                <h3 class="timeline-header"><a>{{ $service->service_title  }}</a></h3>

                <div class="timeline-body">
                  {!! $service->service_description !!}
                </div>

                <h3 class="timeline-header"><a>{{ $service->service_title_fr  }}</a></h3>

                <div class="timeline-body">
                  {!! $service->service_description_fr !!}
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-info" href="{{ route('service.index')}}">Go Back</a>
                  {!! Form::open(['method' => 'DELETE','route' => ['service.destroy', $service->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                </div>
              </div>
              <div class="container" style="margin-top: 50px; margin-left: 100px;">
                <div class="row">
                  <div class="col-md-4">
                     <img src="{{asset('images/service/'.$service->image)}}" alt="image logo">
                  </div>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
