@extends('frontend.app')
@section('home_content')
    @include('frontend.slider')
    <!-- Project Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Project</h4>
                <h1 class="display-4 mb-4"> Explore our projects to see how we empower businesses</h1>
                <p class="mb-0">At VeloSwifte, we take pride in delivering innovative and tailored IT solutions across various industries.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($project as $projectData)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('images/project/'. $projectData->image )}}" class="img-fluid rounded-top w-100" alt="">
                                <a href="{{$projectData->link}}" class="blog-categiry py-2 px-4">
                                    <span>Link</span>
                                </a>
                            </div>
                            <div class="blog-content p-4">
                                <a href="#" class="h4 d-inline-block mb-3">{{$projectData->name}}</a>
                                <p class="mb-3">{!! Str::limit($projectData->details, 250) !!}</p>
                                <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
