@extends('frontend.app')
@section('home_content')
@include('frontend.slider')

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Services</p>
            <h1>What We Provide</h1>
        </div>
        <div class="row g-4">
            @foreach($service as $serviceData)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{asset('images/service/'. $serviceData->image )}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="mb-3">{{$serviceData->title}}</h3>
                        <p>{!! Str::limit($serviceData->details, 100) !!}</p>
                        <span class="text-primary">Choice Your Service</span>
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Service End -->




<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Technology</p>
            <h1>We use Technology</h1>
        </div>
        <div class="row g-4">
            @foreach($technology as $technologyData)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="{{asset('images/technology/'. $technologyData->logo )}}" alt="" style="height: 50px; width: 50px; margin-top: 5px;">
                        <h5 class="text-uppercase">{{$technologyData->name}}</h5>
                        <span class="text-primary">{{$technologyData->details}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Team Start -->
<!--<div class="container-xxl py-5">-->
<!--    <div class="container">-->
<!--        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">-->
<!--            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Team</p>-->
<!--            <h1 class="text-uppercase">Meet Our Team</h1>-->
<!--        </div>-->
<!--        <div class="row g-4">-->


<!--            @foreach($team as $teamData)-->
<!--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">-->
<!--                <div class="team-item">-->
<!--                    <div class="team-img position-relative overflow-hidden">-->
<!--                        <img class="img-fluid" src="{{asset('images/team/'. $teamData->image )}}"alt="">-->
<!--                        <div class="team-social">-->
<!--                            <a class="btn btn-square" href="{{$teamData->facebook}}"><i class="fab fa-facebook-f"></i></a>-->
<!--                            <a class="btn btn-square" href="{{$teamData->linkedin}}"><i class="fab fa-linkedin"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="bg-secondary text-center p-4">-->
<!--                        <h5 class="text-uppercase">{{$teamData->name}}</h5>-->
<!--                        <span class="text-primary">{{$teamData->designation}}</span>-->
<!--                        <span class="text-primary">{{$teamData->email}}</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            @endforeach-->

<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Team End -->





<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Clients</p>
            <h1> Our Clients </h1>
        </div>
        <!-- Testimonial End -->
        <div class="container-xxl">
            <div class="container">
                <div class="swiper mySwiper mySwipertwo">
                    <div class="swiper-wrapper">
                        @foreach($client as $key=>$clientData)
                            <div class="swiper-slide d-flex justify-content-center border">
                                <a href="{{$clientData->link}}">
                                    <img src="{{asset('images/client/'. $clientData->logo )}}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
