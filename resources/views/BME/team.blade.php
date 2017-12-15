@extends('layouts.main1')
@section('content')

	    <!--Page Title-->
    <section class="page-title" style="background-image:url('assets/BME/images/footer/footer6.JPG');">
    	<div class="auto-container">
        	<div class="content-box">
            	<h1>NOTRE <span>ÉQUIPE</span></h1>
                <ul class="bread-crumb">
                	<li><a href="/">Accuiel</a></li>
                    <li>NOTRE ÉQUIPE</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

     <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
            
            	<!--Team Member-->
            	@foreach($staffs as $staff)
                <div class="team-member col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image-box">
                        	<figure class="image" style="background-position: center; background-size: cover; height: 407px; background-image:url({{asset('images/staff-thumnail/'.$staff->image)}}) ">
                        	</figure>
                            <ul class="social-links">
                            	<li><a href="{{  $staff->facebook }}"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="{{  $staff->twitter }}"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="{{  $staff->gmail }}"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="{{  $staff->linkedin }}"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                        	<h4><a>{{ $staff->staff_name }}</a></h4>
                            <div class="designation">{{ $staff->position }}</div>
                        </div>
                       
                    </div>
                </div>
                @endforeach
            </div>
            {{ $staffs->links() }}
        </div>
    </section>
    <!--End Team Section-->

 @include('layouts.main2')
@endsection 