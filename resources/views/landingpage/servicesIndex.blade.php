@extends('landingpage.layout.app') <!-- Assuming you have a base layout -->

@section('lp')
<div id="sectionHero" >  
  
 
          
          <div class="hero-content pb-5 d-flex justify-content-center align-items-end text-white text-center  h-100 ">
            <div>
              <div class="mb-5">
            <h2 class="fw-bold" data-lang-ar="نبني الأحلام بدقة وتميز" data-lang-en="We build dreams with precision and excellence">نبني الأحلام بدقة وتميز</h2>
              </div>
            </div>
          </div>
   

      

</div>
        
<section class="service py-5 " id="service">
    <div class="container p-4">
        <div class="sec-header text-center mb-5">
            <h2 class="text-main m-0" data-lang-en="Our Services" data-lang-ar="خدماتنا">خدماتنا</h2>
            <h3 class="text-uppercase m-0 text-white" data-lang-en="Construction Services" data-lang-ar="خدماتنا الإنشائية">خدماتنا الإنشائية</h3>
        </div>

        <div class="row g-4 pb-2">
            @foreach ($activeServices as $service)
                <div class="col-md-4">
                    <a href="{{ route('home.services.show', $service->slug) }}" class="text-decoration-none">
                        <div class="service-card rounded-4 py-4 px-3">
                            <div class="iconLayer d-flex align-items-center justify-content-center rounded-circle mb-3">
                                <img src="{{ asset('storage/service/' . $service->image) }}" alt="{{ $service->name_en }}" width="54px" class="fs-1">
                            </div>
                            <h4 data-lang-en="{{ $service->name_en }}" data-lang-ar="{{ $service->name_ar }}">
                                {{ $service->name_en }}
                            </h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        
    </div>
</section>



<section class="whatWeDo py-3" id="whatWeDo">
    <div class="container p-5">
        <div class="sec-header text-center mb-5 w-75 mx-auto">
            <h2 class="text-main" data-lang-en="What We Do" data-lang-ar="ماذا نفعل">ماذا نفعل</h2>
            <h3 class="text-uppercase" data-lang-en="Building the Future on a Foundation of Excellence" data-lang-ar="بناء المستقبل على أساس التميز">بناء المستقبل على أساس التميز</h3>
            
        </div>
        <div class="row g-2 align-items-stretch">
            <div class="col-lg-3 col-md-6">
                <div class="whatWeDo-card rounded-5 py-5 px-3 d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h4>
                        <span class="fw-bold d-flex align-items-center justify-content-center">
                            <span><i class="fa-solid fa-percent fs-1 mx-2"></i></span> 99
                        </span>
                    </h4>
                    <p class="fw-bold" data-lang-ar="معدل الموافقة على مراقبة المباني" data-lang-en="Building Monitoring Approval Rate">معدل الموافقة على مراقبة المباني</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="whatWeDo-card rounded-5 py-5 px-3 d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h4>
                        <span class="fw-bold d-flex align-items-center justify-content-center">
                            <span><i class="fa-solid fa-plus fs-1 mx-2"></i></span> 320
                        </span>
                    </h4>
                    <p class="fw-bold" data-lang-ar="إدارة البناء النشطة" data-lang-en="Active Construction Management">إدارة البناء النشطة</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="whatWeDo-card rounded-5 py-5 px-3 d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h4>
                        <span class="fw-bold d-flex align-items-center justify-content-center">
                            <span><i class="fa-solid fa-plus fs-1 mx-2"></i></span> 200
                        </span>
                    </h4>
                    <p class="fw-bold" data-lang-ar="المشاريع المنجزة كل عام" data-lang-en="Projects Completed Each Year">المشاريع المنجزة كل عام</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="whatWeDo-card rounded-5 py-5 px-3 d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h4><span class="fw-bold" data-lang-ar="4.23" data-lang-en="4.23">4.23</span></h4>
                    <p class="fw-bold" data-lang-ar="حجم التداولات بالدولارات في عام 2024" data-lang-en="Transaction Volume in USD for 2024">حجم التداولات بالدولارات في عام 2024</p>
                </div>
            </div>
        </div>
    </div>
</section>










@endsection