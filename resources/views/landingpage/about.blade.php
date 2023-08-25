@extends('landingpage.layout.app')

@section('lp')
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(136, 180, 78, .7), rgba(136, 180, 78, .7)), url({{ asset('teahouse/img/carousel-1.jpg') }}) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">{{$page}}</h1>
        </div>
    </div>

    <div class="content">
        <div class="container p-3 mt-4">
            <div class="row">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="text-center animated slideInDown"><i>{{$title}}</i></h1>
                </div>
                <div class="col-md-5 col-lg-6">
                    <img class="img-fluid p-4 wow fadeInLeft rounded-circle shadow" src="/storage/about/{{$image}}" data-wow-delay="0.5s" alt=""  srcset="">
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="wow fadeInRight fs-2 p-4" data-wow-delay="0.5s">{!! $text !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
