@extends('frontend.app')
@section('home_content')
@include('frontend.slider')

<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Service</h4>
            <h1 class="display-4 mb-4">For VeloSwifte, here’s a refined version of the services</h1>
            <p class="mb-0">You can highlight each service with a short description to further showcase expertise if needed! Let me know if you'd like help with that.
            </p>
        </div>
        <div class="row g-4">
            @foreach($service as $serviceData)
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="far fa-handshake fa-3x"></i>
                    </div>
                    <h4 class="mb-4">{{$serviceData->title}}</h4>
                    <p class="mb-4">{!! $serviceData->details !!} </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid bg-light about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary">About Our VeloSwifte</h4>
                    <h1 class="display-4 mb-4">Delivering Agile IT Solutions, VeloSwifte Your Success</h1>
                    <p>At VeloSwifte, we specialize in delivering innovative IT solutions that drive digital transformation. From web and mobile app development to custom websites and game creation, we combine technical expertise with a client-focused approach to bring your vision to life. Our agile processes and commitment to quality ensure fast, reliable results every time.</p>

                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>We focus on bringing your vision to life with custom, cutting-edge solutions.</p>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Our streamlined processes ensure fast, reliable delivery without compromising quality</p>
                    <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>We specialize in web, mobile app, and game development tailored to your needs</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="rounded bg-light">
                                <img src="{{URL::to('frontend/img/about-1.png')}}" class="img-fluid rounded w-100" alt="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">129</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Total Client</h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">99</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Successfully Done Project</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Technologies We Use</h4>
            <h1 class="display-4 mb-4">We continuously explore new technologies </h1>
            <p class="mb-0">At VeloSwifte, we leverage a wide array of cutting-edge technologies to deliver top-notch solutions
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            @foreach($technology as $technologyData)
            <div class="testimonial-item bg-light rounded">
                <div class="row g-0">
                    <div class="col-4  col-lg-4 col-xl-3">
                        <div class="h-100">
                            <img src="{{asset('images/technology/'. $technologyData->logo )}}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-8 col-lg-8 col-xl-9">
                        <div class="d-flex flex-column my-auto text-start p-4">
                            <h4 class="text-dark mb-0">{{$technologyData->name}}</h4>
                            <p class="mb-3">{!! $technologyData->details !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->



@endsection
