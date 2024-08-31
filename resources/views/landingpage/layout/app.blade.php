<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <title> Best International Construction | {{ $page }} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="Best International Construction, افضل الإنشاءات الدولية, Construction, Engineering, Oman, Building, Infrastructure, Project Management, Civil Engineering, Best Construction Companies, Construction Services Oman">
    <meta name="description" content="Best International Construction | افضل الإنشاءات الدولية is a leading construction and engineering company in Oman, dedicated to delivering high-quality infrastructure and building projects with exceptional expertise and precision.">
    

    @include('landingpage.layout.css')
</head>

<body>

    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> --}}
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top pb-0">
        <div class="container-lg">
          <a class="navbar-brand d-flex align-items-center justify-content-center"  href="{{ route('index') }}">
              <img loading="lazy" src="{{ asset('teahouse/img/logo.png') }}" alt="Best International Construction, افضل الإنشاءات الدولية">
              <div class="d-flex flex-column align-items-center">
                  <p class="logoText m-0 fs-6 fw-bold">أفضل الإنشاءات الدولية</p>
                  <p class="text-main m-0 logoTextE fw-bold">BEST INTERNATIONAL CONSTRUCTION</p>
                </div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center vw-100" id="navbarSupportedContent">
                <ul class="navbar-nav auto-margin mb-3 mb-lg-0 text-capitalize fw-bold">
                    <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}  py-lg-2" aria-current="page" href="{{ route('index') }}" data-lang-ar="الرئيسية" data-lang-en="Home">الرئيسية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-lg-2" href="#about" data-lang-ar="من نحن" data-lang-en="About Us">من نحن</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle py-lg-2 {{ Request::is('services*') ? 'active' : '' }}" 
                   href="#" 
                   id="servicesDropdown" 
                   role="button" 
                   data-bs-toggle="dropdown" 
                   aria-expanded="false" 
                   data-lang-ar="خدماتنا" 
                   data-lang-en="Our Services">
                   {{ __('Our Services') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                    @foreach($activeServices as $service)
                        <li>
                            <a class="dropdown-item text-second m-0"  data-lang-ar="{{ $service->name_ar }}" 
                            data-lang-en="{{ $service->name_en }}" href="{{ route('home.services.show', $service->slug) }}">
                               {{ $service->name_ar }} 
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            
            <li class="nav-item">
                <a class="nav-link  py-lg-2" href="#projects" data-lang-ar="مشاريعنا" data-lang-en="Our Projects">مشاريعنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  py-lg-2" href="#contact" data-lang-ar="تواصل معنا" data-lang-en="Contact Us">تواصل معنا</a>
            </li>
        </ul>
        <ul class="navbar-nav auto-margin mb-3 mb-lg-0 text-capitalize fw-bold">
            <!-- Language Toggle Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img loading="lazy" src="{{ asset('teahouse/img/egypt.png') }}" width="24" class="img-fluid mx-3" alt="Arabic Language" id="languageIcon">
                    <span id="currentLanguage">العربية</span>
                </a>
                <ul class="dropdown-menu langdropdown-menu text-center" aria-labelledby="languageDropdown">
                    <li><a class="dropdown-item langdropdown-item text-second m-0" href="#" data-lang="ar"><img src="{{ asset('teahouse/img/egypt.png') }}" class="img-fluid mx-2 " alt="Arabic Language"> العربية</a></li>
                  <li><a class="dropdown-item langdropdown-item text-second m-0" href="#" data-lang="en"><img src="{{ asset('teahouse/img/kingdom.svg') }}" width="24" class="img-fluid mx-2" alt="English Language"> English</a></li>
                </ul>
            </li>
            </ul>
          </div>
        </div>
    </nav>
    
    
    
   




                {{-- <div class="collapse navbar-collapse animated fadeInRight " id="navbarCollapse">
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
                </div> --}}
    
    <!-- Navbar End -->

    <!-- start about section -->
 

    @yield('lp')

               <!-- start contact section -->
<section class="contact py-5" id="contact">
    <div class="container p-4">
        <div class="row g-3 align-items-stretch">
            <div class="col-md-4">
                @foreach($contact as $info)
                <div class="contactDetails bg-second rounded-4 p-4 pb-0 text-center h-100 d-flex flex-column justify-content-between">
                    <div class="mb-4">
                        <div class="iconLayer mx-auto d-flex align-items-center justify-content-center rounded-circle mb-3">
                            <i class="fa-solid fa-phone text-main fs-1"></i>
                        </div>
                        <p class="text-white fw-bold fs-4">{{ $info->phone }} </p>
                    </div>
                    <div class="mb-4">
                        <div class="iconLayer mx-auto d-flex align-items-center justify-content-center rounded-circle mb-3">
                            <i class="fa-solid fa-envelope-open text-main fs-1"></i>
                        </div>
                        <p class="text-white fw-bold fs-5" >{{ $info->email }} </p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('teahouse/img/contact-info-img.png') }}" width="220px" alt="" data-lang-ar="صورة معلومات الاتصال" data-lang-en="Contact Info Image">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-8">
                <div class="contactForm bg-white rounded-4 p-4 h-100 d-flex flex-column justify-content-between">
                    <div class="sec-header mb-5">
                        <h2 class="text-main m-0" data-lang-ar="تواصل معنا" data-lang-en="Contact Us">تواصل معنا</h2>
                        <h3 class="m-0" data-lang-ar="كن على تواصل معنا" data-lang-en="Get in touch">كن على تواصل معنا</h3>
                    </div>
                    @if (Session::has('success'))
                    <div id="myalert" class="alert alert-success alert-dismissible" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                
                    <div class="row">
                        <!-- Name Field -->
                        <div class="col-md-6">
                            <label for="name" class="mb-2" data-lang-ar="الاسم" data-lang-en="Name">الاسم</label>
                            <input type="text" name="name" class="form-control p-3 mb-3 rounded-2 bg-light @error('name') is-invalid @enderror" id="name" placeholder="" aria-label="Name" value="{{ old('name') }}" >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <!-- Phone Number Field -->
                        <div class="col-md-6">
                            <label for="phonenum" class="mb-2" data-lang-ar="رقم الهاتف" data-lang-en="Phone Number">رقم الهاتف</label>
                            <input type="tel" name="phone" class="form-control p-3 mb-3 rounded-2 bg-light @error('phone') is-invalid @enderror" id="phonenum" placeholder="" aria-label="PhoneNumber" value="{{ old('phone') }}" >
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="mb-2" data-lang-ar="البريد الإلكتروني" data-lang-en="Email">البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control p-3 rounded-2 bg-light @error('email') is-invalid @enderror" id="email" placeholder="" aria-label="Email" value="{{ old('email') }}" >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <!-- Message Text Field -->
                    <div class="mb-4">
                        <label for="message" class="mb-2" data-lang-ar="نص الرسالة" data-lang-en="Message Text">نص الرسالة</label>
                        <textarea name="message" class="form-control p-3 rounded-2 bg-light @error('message') is-invalid @enderror" id="message" rows="4" placeholder="" aria-label="Message" required style="resize: none;">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="text-white btn-custom1 px-4 py-2 rounded-3 fs-5">
                            <span data-lang-ar="إرسال" data-lang-en="Send">إرسال</span>
                            <i class="fa-solid fa-paper-plane mx-1"></i>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
   <!-- end contact section -->
    <!-- Footer Start -->
    <section id="footer" class="py-5 bg-second">
        <div class="container">
            <div class="row g-4 justify-content-between">
                @foreach($logo as $logo)
                <div class="col-md-5 text-center">
                    <div class="w-75 mx-auto">
                        <a class="navbar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
                            <img loading="lazy" src="{{ asset('storage/logo/' . $logo->image) }}" alt="Best International Construction, افضل الإنشاءات الدولية">
                            <div class="d-flex flex-column align-items-center">
                                <p class="logoText m-0 fs-5 fw-bold" >أفضل الإنشاءات الدولية</p>
                                <p class="text-main m-0 fw-bold">BEST INTERNATIONAL CONSTRUCTION</p>
                            </div>
                        </a>  
                        <p data-lang-ar="{{ $logo->brief_ar }}" data-lang-en="{{ $logo->brief_en }}">
                            {{ $logo->brief_ar }}
                        </p>                

                    </div>
                </div>
                @endforeach
                <div class="col-lg-2 col-md-4 mb-4 d-flex justify-content-center">
                    <div>
                        <h6 class="mb-3 text-main fs-5" data-lang-ar="خدماتنا" data-lang-en="Our Services">خدماتنا</h6>
                        <ul class="p-0">
                            @foreach($activeServices as $service)
                            <li class="mb-2">
                                <a href="{{ route('home.services.show', $service->slug) }}" class="text-white">
                                    <i class="fa-regular text-main mx-2 icon-direction"></i>
                                    <span data-lang-ar="{{ $service->name_ar }}" data-lang-en="{{ $service->name_en }}">
                                        {{ $service->name_ar }} 
                                    </span>
                                        </a>
                                    </li>
                            @endforeach
                        </ul>
                        
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 d-flex justify-content-center">
                    <div>
                        <h6 class="mb-3 text-main fs-5" data-lang-ar="الشركة" data-lang-en="The Company">الشركة</h6>
                        <ul class="p-0">
                            <li class="mb-2">
                                <a href="#" class="text-white">
                                    <i class="fa-regular fa-circle-left text-main mx-2 icon-direction"></i>
                                    <span data-lang-ar="من نحن" data-lang-en="About Us">من نحن</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white">
                                    <i class="fa-regular fa-circle-left text-main mx-2 icon-direction"></i>
                                    <span data-lang-ar="خدماتنا" data-lang-en="Our Services">خدماتنا</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white">
                                    <i class="fa-regular fa-circle-left text-main mx-2 icon-direction"></i>
                                    <span data-lang-ar="الأسئلة الشائعة" data-lang-en="FAQs">الأسئلة الشائعة</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white">
                                    <i class="fa-regular fa-circle-left text-main mx-2 icon-direction"></i>
                                    <span data-lang-ar="سياسة الخصوصية" data-lang-en="Privacy Policy">سياسة الخصوصية</span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 d-flex justify-content-center">
                    <div>
                        <h6 class="mb-3 text-main fs-5" data-lang-ar="تواصل معنا" data-lang-en="Contact Us">تواصل معنا</h6>
                        <ul class="p-0">
                            @foreach($contact as $info)
                                <li class="mb-2">
                                    <a href="tel:{{ $info->phone }}" class="text-white">
                                        <i class="fa-solid fa-phone fs-5 text-main mx-2"></i>
                                        <span>{{ $info->phone }}</span>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="mailto:{{ $info->email }}" class="text-white">
                                        <i class="fa-solid fa-envelope-open fs-5 text-main mx-2"></i>
                                        <span>{{ $info->email }}</span>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://wa.me/{{ $info->whatsapp }}" class="text-white" target="_blank">
                                        <i class="fa-brands fa-whatsapp fs-5 text-main mx-2"></i>
                                        <span>{{ $info->whatsapp }}</span>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ $info->address_link }}" class="text-white" target="_blank">
                                        <i class="fa-solid fa-map-location-dot fs-5 text-main mx-2"></i>
                                        <span>{{ $info->address_en }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center py-3 border-top border-bottom">
                <p class="m-0 fw-bold" data-lang-ar="جميع الحقوق محفوظة لدي أفضل الإنشاءات الدولية ٢٠٢٣©" data-lang-en="All rights reserved to Best International Construction ©2023">جميع الحقوق محفوظة لدي أفضل الإنشاءات الدولية ٢٠٢٣©</p>
                <div class="icons d-flex">
                    <div class="icon d-flex align-items-center justify-content-center mx-1 p-3">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                    <div class="icon d-flex align-items-center justify-content-center mx-1 p-3">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="icon d-flex align-items-center justify-content-center mx-1 p-3">
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="icon d-flex align-items-center justify-content-center mx-1 p-3">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



















    {{-- <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
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
    </div> --}}
    <!-- Footer End -->

    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a> --}}


    @include('landingpage.layout.js')
</body>

</html>
