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

@endsection
