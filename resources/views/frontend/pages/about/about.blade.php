@extends('frontend.app')
@section('home_content')
    @include('frontend.slider')
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

@endsection
