@extends('landingpage.layout.app')

@section('lp')
 
<div id="sectionHero" >  
  
 
          
    <div class="hero-content pb-5 d-flex justify-content-center align-items-end text-white text-center  h-100 ">
      <div>
        <div class="mb-5">
      <h2 class="fw-bold" data-lang-ar="{{$page_ar}}" data-lang-en="{{$page_en}}">{{$page_ar}}</h2>
        </div>
      </div>
    </div>




</div>

<section class="about py-3" id="about">
    <div class="container p-5">
        <div class="row g-4 align-items-center">
            @forelse ($about as $a)
                <div class="col-lg-6 offset-lg-1">
                    <div class="sec-header mb-5">
                        <h2 class="text-main m-0" data-lang-en="Best International Construction" data-lang-ar="أفضل الإنشاءات الدولية">أفضل الإنشاءات الدولية</h2>

                        <h3 class="text-uppercase m-0"
                        data-lang-en="{{ $a->title_en }}"
                        data-lang-ar="{{ $a->title_ar }}">
                        {{ $a->title_ar }}
                        </h3>
                    </div>

                    <div class="mb-5">
                      
                        <p data-lang-en="{{ $a->description1_en }}" data-lang-ar="{{ $a->description1_ar }}">
                            {{ $a->description1_ar }}
                        </p>
                        @if($a->description2_ar)
                        <p data-lang-en="{{ $a->description2_en }}" data-lang-ar="{{ $a->description2_ar }}">
                            {{ $a->description2_ar }}
                        </p>
                        @else
                          <span></span>
                        @endif
                    </div>

                    <div>
                        <a class="text-white btn-custom1 px-4 py-2 rounded-3 fs-5" 
                           data-lang-en="Read More.." data-lang-ar="إقرا المزيد..">
                           إقرا المزيد.. <i class="fa-solid fa-paper-plane me-1"></i>
                        </a>
                        <a class="btn-custom1 btn-custom2 px-4 py-2 rounded-3 me-3 fs-5"
                           data-lang-en="Contact Us" data-lang-ar="تواصل معنا">
                           تواصل معنا <i class="fa-solid fa-paper-plane me-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img loading="lazy" data-wow-delay="0.5s" 
                         src="{{ asset('storage/about/' . $a->image) }}" 
                         class="img-fluid wow fadeInLeft" 
                         alt="About Us Image">
                </div>
            @empty
                <p>No about information available.</p>
            @endforelse
        </div>
    </div>
</section>













    {{-- <div class="content">
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
    </div> --}}
@endsection
