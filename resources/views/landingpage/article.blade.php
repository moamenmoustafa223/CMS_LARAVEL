@extends('landingpage.layout.app')

@section('lp')
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(136, 180, 78, .7), rgba(136, 180, 78, .7)), url({{ asset('teahouse/img/carousel-1.jpg') }}) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">{{ $page }}</h1>
        </div>
    </div>

    <div class="content">
        <div class="container p-3 mt-4">
            <div class="row d-flex justify-content-center">
                @foreach ($article as $p)
                    <div class="col-c-50 col-sm-6 col-md-4 col-lg-3 wow fadeIn rounded-3 service-item" data-wow-delay="0.5s">
                        <div class="store-item rounded-3 position-relative text-center shadow-lg mt-3">
                            <img src="{{ asset('/storage/article/' . $p->image) }}" alt="random img"
                                class="img-fluid rounded-top">
                            <div class="p-4">
                                <h4 class="mb-3">{{ $p->title }}</h4>
                                <p>@php
                                    $article = $p->content;
                                    $limitedArticle = Str::limit($article, $limit = 100, $end = '...');
                                    $replacedText = str_replace('contoh', 'contoh lain', $limitedArticle);
                                @endphp

                                {{ $replacedText }}</p>
                            </div>
                            <div class="pb-3">
                                <a href="{{ route('articleshow',$p->slug) }}" class="btn btn-primary rounded-3">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
