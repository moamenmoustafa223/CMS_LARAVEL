<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Tea House | {{ $page }} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('landingpage.layout.css')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top ">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="{{ route('index') }}" class="navbar-brand animated fadeInDown">
                    <img class="img-fluid" src="{{ asset('storage/logo/' . $logo->image) }}" alt="">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse animated fadeInRight " id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('index') }}"
                            class="nav-item nav-link service-item  {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}"
                            class="nav-item nav-link service-item {{ Request::is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('articles') }}"
                            class="nav-item nav-link service-item {{ Request::is('articles') ? 'active' : '' }}">Article</a>
                        <a href="{{ route('products') }}"
                            class="nav-item nav-link service-item {{ Request::is('products') ? 'active' : '' }}">Products</a>
                        <a href="{{ route('contacts') }}"
                            class="nav-item nav-link service-item {{ Request::is('contacts') ? 'active' : '' }}">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('lp')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>{{ $address }}
                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>{{ $whatsapp }}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>{{ $email }}</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Business Hours</h4>
                    @foreach ($schedule as $scd)
                        <p class="mb-1">{{ $scd->day }}</p>
                        <h6 class="text-light">{{ substr($scd->open, 0, -3) }} - {{ substr($scd->close, 0, -3) }}</h6>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3954.2782091895738!2d111.0491372!3d-7.6532054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a218edda45465%3A0xb9260ff1e10f9be7!2sWarung%20ABC%20by%20LANCAR%20BAROKAH%20GROUP!5e0!3m2!1sid!2sid!4v1692795607023!5m2!1sid!2sid"
                        width="300" height="300" style="border-radius: 20px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    @include('landingpage.layout.js')
</body>

</html>
