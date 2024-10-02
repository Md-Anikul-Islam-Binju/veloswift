<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Veloswift</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="shortcut icon" href="#">
    <meta property="og:image" content="Veloswift"/>
    <meta property="og:site_name" content="Veloswift"/>
    <meta property="og:description" content="Veloswift"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="body-inner">

    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase">
{{--                <img src="#" alt="logo" style="height:60px;">--}}
                Veloswift
            </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Other</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Career</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    @yield('home_content')
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Get In Touch</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>......</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+88....</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>....</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                    <a class="btn btn-link" href="{{route('service')}}">Our Services</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">Support</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Newsletter</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script>
        let swiperPartner = new Swiper(".mySwipertwo", {
            slidesPerView: 2,
            spaceBetween: 20,
            autoplay: {
                delay: 1500,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
            },
        });
    </script>
</div>
</body>

</html>
