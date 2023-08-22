@extends('landingpage.layout.app')

@section('lp')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel as $c)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <img class="w-100" src="{{ asset('/storage/carousel/' . $c->image) }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 text-center">
                                        <h1 class="display-1 text-dark mb-4 animated zoomIn">{{ $c->title }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="content">
        <div class="container p-3">
            <h1 class="text-center animated slideInDown"><i>Galleries</i></h1>
            <div class="row d-flex justify-content-center">
                @foreach ($gallery as $p)
                    <div class="col-c-279 col-c-375 col-sm-4 col-md-4 col-lg-3 animated fadeInUp galleries rounded-3 service-item"
                        data-wow-delay="0.5s">
                        <div class="store-item position-relative text-center  mt-3">
                            <a href="{{ asset('/storage/gallery/' . $p->image) }}" data-lightbox="lightbox"
                                data-title="{{ $p->name }}">
                                <img width="300px" src="{{ asset('/storage/gallery/' . $p->image) }}" alt="random img"
                                    class="img-fluid shadow-lg">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Carousel End -->
@endsection
