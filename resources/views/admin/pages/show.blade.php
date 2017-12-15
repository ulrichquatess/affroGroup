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
                    {{ date( ' h:ia ', strtotime( $page->updated_at ))}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i>{{ date( 'M j Y ', strtotime( $page->updated_at ))}}</span>

                <h3 class="timeline-header"><a>{{ $page->title }}</a></h3>

                <div class="timeline-body">
                  {!! $page->content !!}
                </div>

                 <h3 class="timeline-header"><a>{{ $page->title_fr }}</a></h3>

                <div class="timeline-body">
                  {!! $page->content_fr !!}
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-info" href="{{ route('page.index')}}">Return</a>
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