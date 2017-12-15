@extends('layouts.main1')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url('assets/BME/images/footer/footer6.JPG');">
        <div class="auto-container">
            <div class="content-box">
                <h1>Nos <span>Projets</span></h1>
                <ul class="bread-crumb">
                    <li><a href="/">Accuiel</a></li>
                    <li>Nos Projets</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Project Section-->
    <section class="project-section">
        <div class="auto-container">
            <div class="row">
                @foreach($projects as $project)
                <!--Gallery Item Two-->
                <div class="gallery-item-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{asset('images/project-thumnail/'.$project->image)}}" alt="">
                            <div class="overlay-box">
                                <div class="content">
                                    <h3 style="color: white;">En savoir plus sur</h3>
                                    <a href="{{ url('projec/'.$project->id)}}" title="Image Title Here" ><span class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                        <p><a href="{{ url('projec/'.$project->id)}}">{{ substr(strip_tags($project->project_title), 0, 30) }} {{ strlen(strip_tags($project->project_title)) > 40 ? "..." : ""  }}</a></p>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                   {{ $projects->links() }}
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Project Section-->
    <!--End Project Section-->
    <!--End Project Section-->
    	@include('layouts.main2')
@endsection