@extends('landingpage.layout.app') <!-- Assuming you have a base layout -->

@section('lp')

<div id="sectionHero" >  
  
 
          
    <div class="hero-content pb-5 d-flex justify-content-center align-items-end text-white text-center  h-100 ">
      <div>
        <div class="mb-5">
      <h2 class="fw-bold" data-lang-ar="{{ $service->name_ar }}" data-lang-en="{{ $service->name_en }}">{{ $service->name_ar }}</h2>
        </div>
      </div>
    </div>




</div>
<section class="service-details py-5" id="serviceDetails">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 ">
                @if ($images->count() > 0)
                <div class="swiper mySwiperService">
                    <div class="swiper-wrapper">
                        @foreach ($images as $image)

                        <div class="swiper-slide"><img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->name_en }}" class="img-fluid rounded-4"></div>
                            
                        @endforeach
                   
                 
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                @else
                <img src="{{ asset('storage/service/' . $service->image) }}" alt="{{ $service->name_en }}" width="54px" class="fs-1">

                @endif
              
               
            </div>
            <div class="col-md-6">
                <!-- Service Details -->
                {{-- <h1 class="text-main mb-4">{{ $service->name_ar }}</h1> --}}
                <p class="text-muted mb-3" data-lang-en="Service Description" data-lang-ar="وصف الخدمة">Service Description:</p>
                <p>{{ $service->description_ar }}</p>
                
                <!-- Any Additional Details -->
                <ul class="list-unstyled">
                    <li><strong data-lang-en="Created At:" data-lang-ar="تاريخ الإنشاء:">Created At:</strong> {{ $service->created_at->format('M d, Y') }}</li>
                    <!-- Add more details if needed -->
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="vision py-3" id="vision">
    <div class="container p-5">
        <div class="sec-header mb-5">
            <h2 class="text-main m-0" data-lang-en="Best International Construction" data-lang-ar="أفضل الإنشاءات الدولية">أفضل الإنشاءات الدولية</h2>
            <h3 class="text-uppercase m-0" data-lang-en="Goals, Vision, and Mission" data-lang-ar="الأهداف ، الرؤية والرسالة">الأهداف ، الرؤية والرسالة</h3>
        </div>
        <div class="row g-4 align-items-stretch">
            <div class="col-md-4">
                <div class="vision-card rounded-4 py-4 px-3 d-flex flex-column justify-content-center h-100">
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fa-solid fa-bullseye fs-1"></i> 
                        <h4 class="m-0 mx-2 fw-bold" data-lang-en="Goals" data-lang-ar="الأهداف">الأهداف</h4>
                    </div>
                    <p data-lang-en="We aim to be among the best offices in providing financial and administrative services to our clients in Egypt and to compete strongly across the Arab world." data-lang-ar="نسعى لأن نكون من افضل المكاتب فى تقديم الخدمات المالية والادارية لعملائنا على مستوى مصر و المنافسة القوية على مستوى الوطن العربى">نسعى لأن نكون من افضل المكاتب فى تقديم الخدمات المالية والادارية لعملائنا على مستوى مصر و المنافسة القوية على مستوى الوطن العربى</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vision-card rounded-4 py-4 px-3 d-flex flex-column justify-content-center h-100">
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fa-solid fa-stairs fs-1"></i>
                        <h4 class="m-0 mx-2 fw-bold" data-lang-en="Vision" data-lang-ar="الرؤية">الرؤية</h4>
                    </div>
                    <p data-lang-en="We aim to be among the best offices in providing financial and administrative services to our clients in Egypt and to compete strongly across the Arab world." data-lang-ar="نسعى لأن نكون من افضل المكاتب فى تقديم الخدمات المالية والادارية لعملائنا على مستوى مصر و المنافسة القوية على مستوى الوطن العربى">نسعى لأن نكون من افضل المكاتب فى تقديم الخدمات المالية والادارية لعملائنا على مستوى مصر و المنافسة القوية على مستوى الوطن العربى</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vision-card rounded-4 py-4 px-3 d-flex flex-column justify-content-center h-100">
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fa-solid fa-message fs-2"></i>
                        <h4 class="m-0 mx-2 fw-bold" data-lang-en="Mission" data-lang-ar="الرسالة">الرسالة</h4>
                    </div>
                    <p data-lang-en="We aim to be among the best offices in providing financial and administrative services to our clients in Egypt and to compete strongly across the Arab world." data-lang-ar="نسعى لأن نكون من افضل المكاتب فى تقديم الخدمات المالية والادارية لعملائنا على مستوى مصر و المنافسة القوية على مستوى الوطن العربى">نسعى لأن نكون من افضل المكاتب فى تقديم الخدمات المالية والادارية لعملائنا على مستوى مصر و المنافسة القوية على مستوى الوطن العربى</p>
                </div>
            </div>
        </div>
    </div>
  </section>





@endsection
