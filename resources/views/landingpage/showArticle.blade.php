@extends('landingpage.layout.app')

@section('lp')
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: url({{ asset('storage/article/'.$image) }}) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">{{ $page }}</h1>
        </div>
    </div>

    <div class="content">
        <div class="container p-3 mt-4">
            <div class="row d-flex justify-content-center">
                <div class=" wow fadeIn rounded-3" data-wow-delay="0.5s">
                    <div class="store-item rounded-3 position-relative text-center shadow-lg mt-3">
                        <img src="{{ asset('/storage/article/'.$image) }}" alt="random img"
                            class="img-fluid rounded-top">
                        <div class="p-4">
                            <h1 class="mb-3">{{ $title }}</h1>
                            <p>{!! $content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
