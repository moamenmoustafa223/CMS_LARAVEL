@extends('landingpage.layout.app')

@section('lp')
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(136, 180, 78, .7), rgba(136, 180, 78, .7)), url({{ asset('teahouse/img/carousel-1.jpg') }}) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">{{ $page }}</h1>
        </div>
    </div>
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">If You Have Any Query, Please Contact Us</h1>
            </div>
            <div class="row g-5 mb-5 justify-content-center d-flex">
                <div class="col-md-4 col-sm-6 col-c-50 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-envelope fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">{{ $email }}</p>
                </div>
                <div class="col-md-4 col-sm-6 col-c-50 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fab fa-whatsapp fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">{{ $whatsapp }}</p>
                </div>
                <div class="col-md-4 col-sm-6 col-c-50 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">{{ $address }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
