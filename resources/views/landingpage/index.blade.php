@extends('landingpage.layout.app')

@section('lp')
    <!-- start hero section -->
<main id="hero" class="vh-100">  
    <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="carousel">
       
      <div class="carousel-inner h-100">

        <div class="carousel-item active first-slid h-100">
          
          <div class="hero-content d-flex justify-content-center align-items-center text-white text-center  h-100 ">
            <div>
              <div class="mb-5 w-75 mx-auto">
                <h1 class="fw-bold fs-4 mb-4" data-lang-ar="أفضل الإنشاءات الدولية" data-lang-en="Best International Construction">أفضل الإنشاءات الدولية</h1>
            <h2 class="mb-4 fw-bold" data-lang-ar="نبني الأحلام بدقة وتميز" data-lang-en="We build dreams with precision and excellence">نبني الأحلام بدقة وتميز</h2>
            <p class="fs-5 fw-bold" data-lang-ar="نحن متخصصون في تحويل الرؤى إلى حقيقة بمهارة استثنائية واهتمام دقيق بالتفاصيل. مع سنوات من الخبرة والالتزام بالجودة." data-lang-en="We specialize in turning visions into reality with exceptional skill and meticulous attention to detail, backed by years of experience and a commitment to quality.">نحن متخصصون في تحويل الرؤى إلى حقيقة بمهارة استثنائية واهتمام دقيق بالتفاصيل. مع سنوات من الخبرة والالتزام بالجودة.</p>

              </div>
              <div>
                <a class="text-white btn-custom1 px-4 py-2 rounded-3 me-3 fs-5 " data-lang-ar="تواصل معنا" data-lang-en="Contact Us"> تواصل معنا</a>
                <a class="text-white border-2 border-white btn-custom1 btn-custom2 px-4 py-2 rounded-3 me-3 fs-5 " data-lang-ar="المزيد من مشاريعنا" data-lang-en="Our Projects">المزيد من مشاريعنا</a>

              </div>

            </div>
          </div>
        </div>

        <div class="carousel-item sec-slid h-100">
          <div class="hero-content d-flex justify-content-center align-items-center text-white text-center h-100  ">
            <div>
              <div class="mb-5 w-75 mx-auto">
                <h1 class="fw-bold fs-4 mb-4" data-lang-ar="أفضل الإنشاءات الدولية" data-lang-en="Best International Construction">أفضل الإنشاءات الدولية</h1>
            <h2 class="mb-4 fw-bold" data-lang-ar="بناء المستقبل على أساس التميز" data-lang-en="Building the future on a foundation of excellence">بناء المستقبل على أساس التميز</h2>
            <p class="fs-5 fw-bold" data-lang-ar="نحن متخصصون في تحويل الرؤى إلى حقيقة بمهارة استثنائية واهتمام دقيق بالتفاصيل. مع سنوات من الخبرة والالتزام بالجودة." data-lang-en="We specialize in turning visions into reality with exceptional skill and meticulous attention to detail, backed by years of experience and a commitment to quality.">نحن متخصصون في تحويل الرؤى إلى حقيقة بمهارة استثنائية واهتمام دقيق بالتفاصيل. مع سنوات من الخبرة والالتزام بالجودة.</p>

              </div>
              <div>
                <a class="text-white btn-custom1 px-4 py-2 rounded-3 me-3 fs-5 " data-lang-ar="تواصل معنا" data-lang-en="Contact Us"> تواصل معنا</a>
                <a class="text-white border-2 border-white btn-custom1 btn-custom2 px-4 py-2 rounded-3 me-3 fs-5 " data-lang-ar="المزيد من مشاريعنا" data-lang-en="Our Projects">المزيد من مشاريعنا</a>

              </div>

            </div>
          </div>
        </div>
       
      </div>
      <button class="carousel-control-prev d-flex justify-content-center align-items-center next-custom" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <div class=" position-absolute bg-white ani-carosl"></div>
          <i class="fa-solid fa-chevron-left"></i>
      </button>
      <button class="carousel-control-next d-flex  justify-content-center align-items-center  next-custom" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <div class=" position-absolute bg-white ani-carosl"></div>
          <i class="fa-solid fa-chevron-right"></i>
      </button>
    </div>

    <a href=""> <div class="anmi-icon rounded-pill"></div></a>

  </main>
    <!-- end hero section -->
      <!-- start about section -->
<section class="about py-3" id="about">
    <div class="container p-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 offset-lg-1">
                <div class="sec-header mb-5">
                    <h2 class="text-main m-0" data-lang-en="Best International Construction" data-lang-ar="أفضل الإنشاءات الدولية">أفضل الإنشاءات الدولية</h2>
                    <h3 class="text-uppercase m-0" data-lang-en="About Us" data-lang-ar="من نحن">من نحن</h3>
                </div>

                <div class="mb-5">
                    <p data-lang-en="Omani company established in 2004, headquartered in Muscat, Oman, specializing in various fields including: map preparation, engineering consultancy, construction works, contracting, restoration, finishing, and real estate brokerage." data-lang-ar="شركة عمانية تأسست عام 2004م ، مقرها سلطنة عمان مسقط الخوير متخصصة في العديد من المجالات منها : إعداد الخرائط والاستشارات الهندسية وأعمال البناء والمقاولات والترميمات والتشطيبات والوساطة العقارية ..">شركة عمانية تأسست عام 2004م ، مقرها سلطنة عمان مسقط الخوير متخصصة في العديد من المجالات منها : إعداد الخرائط والاستشارات الهندسية وأعمال البناء والمقاولات والترميمات والتشطيبات والوساطة العقارية ..</p>
                    <p data-lang-en="The company aims primarily to enrich the national economy and provide investment and development opportunities in the Sultanate. The company has carried out numerous government and private projects." data-lang-ar="وتهدف الشركة في المقام الأول لإثراء الاقتصاد الوطني وتوفير فرص الاستثمار والتطوير في السلطنة وقامت الشركة بتنفيذ العديد من المشاريع الحكومية والخاصة">وتهدف الشركة في المقام الأول لإثراء الاقتصاد الوطني وتوفير فرص الاستثمار والتطوير في السلطنة وقامت الشركة بتنفيذ العديد من المشاريع الحكومية والخاصة</p>
                </div>

                <div>
                    <a href="{{route('about')}}" class="text-white btn-custom1 px-4 py-2 rounded-3 fs-5" data-lang-en="Read More.." data-lang-ar="إقرا المزيد..">إقرا المزيد.. <i class="fa-solid fa-paper-plane me-1"></i></a>
                    <a class="btn-custom1 btn-custom2 px-4 py-2 rounded-3 me-3 fs-5" data-lang-en="Contact Us" data-lang-ar="تواصل معنا">تواصل معنا <i class="fa-solid fa-paper-plane me-1"></i></a>
                </div>
            </div>
            <div class="col-lg-5">
                <img loading="lazy" src="{{ asset('teahouse/img/about-us-img.png') }}" class="img-fluid" alt="About Us Image">
            </div>
        </div>
    </div>
</section>
 <!-- end about section -->



    <!-- start service section -->
    <section class="service py-5" id="service">
        <div class="container p-4">
            <div class="sec-header text-center mb-5">
                <h2 class="text-main m-0" data-lang-en="Our Services" data-lang-ar="خدماتنا">خدماتنا</h2>
                <h3 class="text-uppercase m-0 text-white" data-lang-en="Construction Services" data-lang-ar="خدماتنا الإنشائية">خدماتنا الإنشائية</h3>
            </div>
            <div class="row g-4 pb-2 justify-content-center">
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
   <!-- end  service section -->



      <!-- start vision section -->
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
   <!-- end vision section -->


      <!-- start projects section -->
<section class="projects py-5" id="projects">
    <div class="container p-4">
        <div class="sec-header text-center mb-5">
            <h2 class="text-main m-0" data-lang-en="Our Projects - Our Works" data-lang-ar="مشاريعنا - أعمالنا">مشاريعنا - أعمالنا</h2>
            <h3 class="m-0" data-lang-en="Explore our diverse range of projects" data-lang-ar="استكشف مجموعتنا المتنوعة من المشاريع">استكشف مجموعتنا المتنوعة من المشاريع</h3>
        </div>
  
        <div class="row g-3 mb-5">
            <div class="col-md-4">
                <div class="card-inner mb-3">
                    <img src="{{ asset('teahouse/img/project-1.jpg') }}" alt="">
                    <div class="card-fillter p-4">
                        <h5 data-lang-en="Map Design" data-lang-ar="تصميم الخرائط">تصميم الخرائط</h5>
                        <a href="#" class="text-main" data-lang-en="View More" data-lang-ar="عرض المزيد">عرض المزيد</a>
                    </div>
                </div>
  
                <div class="card-inner mb-3">
                    <img src="{{ asset('teahouse/img/project-4.jpg') }}" alt="">
                    <div class="card-fillter p-4">
                        <h5 data-lang-en="Map Design" data-lang-ar="تصميم الخرائط">تصميم الخرائط</h5>
                        <a href="#" class="text-main" data-lang-en="View More" data-lang-ar="عرض المزيد">عرض المزيد</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-inner mb-3">
                    <img src="{{ asset('teahouse/img/project-2.jpg') }}" alt="">
                    <div class="card-fillter p-4">
                        <h5 data-lang-en="Map Design" data-lang-ar="تصميم الخرائط">تصميم الخرائط</h5>
                        <a href="#" class="text-main" data-lang-en="View More" data-lang-ar="عرض المزيد">عرض المزيد</a>
                    </div>
                </div>
  
                <div class="card-inner mb-3">
                    <img src="{{ asset('teahouse/img/project-7.jpg') }}" alt="">
                    <div class="card-fillter p-4">
                        <h5 data-lang-en="Map Design" data-lang-ar="تصميم الخرائط">تصميم الخرائط</h5>
                        <a href="#" class="text-main" data-lang-en="View More" data-lang-ar="عرض المزيد">عرض المزيد</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-inner mb-3">
                    <img src="{{ asset('teahouse/img/project-3.jpg') }}" alt="">
                    <div class="card-fillter p-4">
                        <h5 data-lang-en="Map Design" data-lang-ar="تصميم الخرائط">تصميم الخرائط</h5>
                        <a href="#" class="text-main" data-lang-en="View More" data-lang-ar="عرض المزيد">عرض المزيد</a>
                    </div>
                </div>
  
                <div class="card-inner mb-3">
                    <img src="{{ asset('teahouse/img/project-5.jpg') }}" alt="">
                    <div class="card-fillter p-4">
                        <h5 data-lang-en="Map Design" data-lang-ar="تصميم الخرائط">تصميم الخرائط</h5>
                        <a href="#" class="text-main" data-lang-en="View More" data-lang-ar="عرض المزيد">عرض المزيد</a>
                    </div>
                </div>
  
                <div class="card-inner mb-3">
                    <img src="{{ asset('teahouse/img/project-6.jpg') }}" alt="">
                    <div class="card-fillter p-4">
                        <h5 data-lang-en="Map Design" data-lang-ar="تصميم الخرائط">تصميم الخرائط</h5>
                        <a href="#" class="text-main" data-lang-en="View More" data-lang-ar="عرض المزيد">عرض المزيد</a>
                    </div>
                </div>
            </div>
        </div>
  
        <div class="text-center">
            <a href="#" class="text-white btn-custom1 px-4 py-2 rounded-3 fs-5" data-lang-ar="المزيد من مشاريعنا" data-lang-en="More of Our Projects">المزيد من مشاريعنا</a>
        </div>
    </div>
  </section>
     <!-- end projects section -->


  <!-- start testimonials section -->
  <section class="testimonials py-3" id="testimonials">
    <div class="container p-5">
        <div class="sec-header text-center mb-5">
            <h2 class="text-main m-0" data-lang-en="Testimonials" data-lang-ar="الآراء">الآراء</h2>
            <h3 class="text-uppercase m-0" data-lang-en="What Our Clients Say About Us" data-lang-ar="ما يقوله عملائنا عنا">ما يقوله عملائنا عنا</h3>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-4 col-md-6">
                <!-- Testimonial Card -->
                <div class="Testimonial-card">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <p class="card-text" data-lang-en="TaxPal is so easy to use I can’t help but wonder if it’s really doing the things the government expects me to do." data-lang-ar="برنامج TaxPal سهل الاستخدام لدرجة تجعلني أتساءل عما إذا كان يقوم حقًا بالأشياء التي تتوقعها مني الحكومة.">
                                برنامج TaxPal سهل الاستخدام لدرجة تجعلني أتساءل عما إذا كان يقوم حقًا بالأشياء التي تتوقعها مني الحكومة.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-light d-flex justify-content-between align-items-center py-3">
                            <div class="footer-content">
                                <h6 class="fw-bold" data-lang-en="Moamen Moustafa" data-lang-ar="مؤمن مصطفى">مؤمن مصطفى</h6>
                                <p class="text-muted m-0 text-main" data-lang-en="Board Chairman" data-lang-ar="مدير مجلس الادارة">مدير مجلس الادارة</p>
                            </div>
                            <img src="{{ asset('teahouse/img/avatar-1.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Testimonial Card -->
                <div class="Testimonial-card">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <p class="card-text" data-lang-en="The best part about TaxPal is every time I pay my employees, my bank balance doesn’t go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined." data-lang-ar="أفضل جزء في برنامج TaxPal هو أنه في كل مرة أدفع فيها لموظفيّ، لا ينخفض رصيدي المصرفي كما كان يحدث من قبل. متحمس لإنفاق هذا المال الإضافي عندما أكتشف سبب رفض بطاقتي.">
                                أفضل جزء في برنامج TaxPal هو أنه في كل مرة أدفع فيها لموظفيّ، لا ينخفض رصيدي المصرفي كما كان يحدث من قبل. متحمس لإنفاق هذا المال الإضافي عندما أكتشف سبب رفض بطاقتي.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-light d-flex justify-content-between align-items-center py-3">
                            <div class="footer-content">
                                <h6 class="fw-bold" data-lang-en="Moamen Moustafa" data-lang-ar="مؤمن مصطفى">مؤمن مصطفى</h6>
                                <p class="text-muted m-0 text-main" data-lang-en="Board Chairman" data-lang-ar="مدير مجلس الادارة">مدير مجلس الادارة</p>
                            </div>
                            <img src="{{ asset('teahouse/img/avatar-2.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Testimonial Card -->
                <div class="Testimonial-card">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <p class="card-text" data-lang-en="I used to have to remit tax to the EU and with TaxPal I somehow don’t have to do that anymore. Nervous to travel there now though." data-lang-ar="كنت مضطرًا لدفع الضرائب إلى الاتحاد الأوروبي، ولكن مع TaxPal بطريقة ما لم يعد يتعين عليّ القيام بذلك. أشعر بالتوتر الآن عند التفكير في السفر إلى هناك.">
                                كنت مضطرًا لدفع الضرائب إلى الاتحاد الأوروبي، ولكن مع TaxPal بطريقة ما لم يعد يتعين عليّ القيام بذلك. أشعر بالتوتر الآن عند التفكير في السفر إلى هناك.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-light d-flex justify-content-between align-items-center py-3">
                            <div class="footer-content">
                                <h6 class="fw-bold" data-lang-en="Moamen Moustafa" data-lang-ar="مؤمن مصطفى">مؤمن مصطفى</h6>
                                <p class="text-muted m-0 text-main" data-lang-en="Board Chairman" data-lang-ar="مدير مجلس الادارة">مدير مجلس الادارة</p>
                            </div>
                            <img src="{{ asset('teahouse/img/avatar-3.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Testimonial Card -->
                <div class="Testimonial-card">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <p class="card-text" data-lang-en="I’m trying to get a hold of someone in support, I’m in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away." data-lang-ar="أحاول الاتصال بشخص ما في الدعم، أنا في ورطة كبيرة الآن وهم يقولون إن الأمر يتعلق بحساباتي. الرجاء العودة إلي في أسرع وقت.">
                                أحاول الاتصال بشخص ما في الدعم، أنا في ورطة كبيرة الآن وهم يقولون إن الأمر يتعلق بحساباتي. الرجاء العودة إلي في أسرع وقت.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-light d-flex justify-content-between align-items-center py-3">
                            <div class="footer-content">
                                <h6 class="fw-bold" data-lang-en="Moamen Moustafa" data-lang-ar="مؤمن مصطفى">مؤمن مصطفى</h6>
                                <p class="text-muted m-0 text-main" data-lang-en="Board Chairman" data-lang-ar="مدير مجلس الادارة">مدير مجلس الادارة</p>
                            </div>
                            <img src={{asset('teahouse/img/avatar-4.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Testimonial Card -->
                <div class="Testimonial-card">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <p class="card-text" data-lang-en="There are so many things I had to do with my old software that I just don’t do at all with TaxPal. Suspicious but I can’t say I don’t love it." data-lang-ar="هناك العديد من الأشياء التي كان عليّ القيام بها باستخدام برنامجي القديم والتي لا أفعلها على الإطلاق مع TaxPal. مريب ولكن لا أستطيع أن أقول إنني لا أحبه.">
                                هناك العديد من الأشياء التي كان عليّ القيام بها باستخدام برنامجي القديم والتي لا أفعلها على الإطلاق مع TaxPal. مريب ولكن لا أستطيع أن أقول إنني لا أحبه.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-light d-flex justify-content-between align-items-center py-3">
                            <div class="footer-content">
                                <h6 class="fw-bold" data-lang-en="Moamen Moustafa" data-lang-ar="مؤمن مصطفى">مؤمن مصطفى</h6>
                                <p class="text-muted m-0 text-main" data-lang-en="Board Chairman" data-lang-ar="مدير مجلس الادارة">مدير مجلس الادارة</p>
                            </div>
                            <img src="{{ asset('teahouse/img/avatar-5.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Testimonial Card -->
                <div class="Testimonial-card">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <p class="card-text" data-lang-en="This is the fourth email I’ve sent to your support team. I am literally being held in jail for tax fraud. Please answer your damn emails, this is important." data-lang-ar="هذه هي الرسالة الإلكترونية الرابعة التي أرسلها إلى فريق الدعم الخاص بكم. أنا حرفيًا محتجز في السجن بتهمة الاحتيال الضريبي. من فضلكم أجيبوا على رسائل البريد الإلكتروني الخاصة بكم، فهذا مهم.">
                                هذه هي الرسالة الإلكترونية الرابعة التي أرسلها إلى فريق الدعم الخاص بكم. أنا حرفيًا محتجز في السجن بتهمة الاحتيال الضريبي. من فضلكم أجيبوا على رسائل البريد الإلكتروني الخاصة بكم، فهذا مهم.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-light d-flex justify-content-between align-items-center py-3">
                            <div class="footer-content">
                                <h6 class="fw-bold" data-lang-en="Moamen Moustafa" data-lang-ar="مؤمن مصطفى">مؤمن مصطفى</h6>
                                <p class="text-muted m-0 text-main" data-lang-en="Board Chairman" data-lang-ar="مدير مجلس الادارة">مدير مجلس الادارة</p>
                            </div>
                            <img src="{{ asset('teahouse/img/avatar-6.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
     <!-- end testimonials section -->

         <!-- start clients section -->
<section class="clients py-3" id="clients">
    <div class="container p-5">
      <div class="sec-header text-center mb-5">
        <h2 class="text-main m-0" data-lang-en="Best International Construction" data-lang-ar="أفضل الإنشاءات الدولية">أفضل الإنشاءات الدولية</h2>
        <h3 class="text-uppercase m-0" data-lang-en="Our Clients" data-lang-ar="عملائنا">عملائنا</h3>
      </div>
  
      <div class="swiper">
        <div class="slide-container pb-5 ">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide border-0">
              <img src="{{ asset('teahouse/img/logo2.png') }}" class="card-img-top img-fluid" alt="">
            </div>  
            <div class="card swiper-slide border-0">
              <img src="{{ asset('teahouse/img/logo1.png') }}" class="card-img-top img-fluid" alt="">
            </div>  
            <div class="card swiper-slide border-0">
              <img src="{{ asset('teahouse/img/logo3.png') }}" class="card-img-top img-fluid" alt="">
            </div>  
            <div class="card swiper-slide border-0">
              <img src="{{ asset('teahouse/img/logo1.png') }}" class="card-img-top img-fluid" alt="">
            </div>  
            <div class="card swiper-slide border-0">
              <img src="{{ asset('teahouse/img/logo2.png') }}" class="card-img-top img-fluid" alt="">
            </div>  
            <div class="card swiper-slide border-0">
              <img src="{{ asset('teahouse/img/logo3.png') }}" class="card-img-top img-fluid" alt="">
            </div>  
            <div class="card swiper-slide border-0">
              <img src="{{ asset('teahouse/img/logo4.png') }}" class="card-img-top img-fluid" alt="">
            </div>  
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination pt-5"></div>
      </div>
    </div>
  </section>
     <!-- end clients section -->



@endsection
