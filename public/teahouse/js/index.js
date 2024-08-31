$(document).ready(function() {
  let sections = $('section');
  let navbar = $("nav");

  // Store the offset top of each section
  let sectionOffsets = [];
  sections.each(function() {
      sectionOffsets.push($(this).offset().top);
  });

  $(window).scroll(function() {
      let windowOffset = $(window).scrollTop();
      let active = false;

      // Check each section's offset
      for (let i = 0; i < sectionOffsets.length; i++) {
          if (windowOffset >= sectionOffsets[i] - 100 && (i === sectionOffsets.length - 1 || windowOffset < sectionOffsets[i + 1] - 100)) {
              navbar.addClass('bg-second shadow-sm');
              active = true;
              break;
          }
      }

      // Remove background if no section is active
      if (!active) {
          navbar.removeClass('bg-second shadow-sm');
      }
  });
});





    
    $(".nav-item").on('click','a',function(){
       
        $(".nav-item a.active").removeClass("active"); 
     
        $(this).addClass("active"); 
    });
   
    var swiper = new Swiper(".mySwiperService", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
       
    var swiper = new Swiper(".slide-container", {
        slidesPerView: 4,
        spaceBetween: 20,
        sliderPerGroup: 4,
        loop: true,
        centerSlide: "true",
        fade: "true",
        grabCursor: "true",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          520: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 3,
          },
          1000: {
            slidesPerView: 4,
          },
        },
      });





      let isArabic = localStorage.getItem('language') === 'ar';

      function updateIcons() {
          const icons = document.querySelectorAll('.icon-direction');
          icons.forEach(icon => {
              if (isArabic) {
                  icon.classList.remove('fa-circle-right');
                  icon.classList.add('fa-circle-left');
              } else {
                  icon.classList.remove('fa-circle-left');
                  icon.classList.add('fa-circle-right');
              }
          });
      }
      
      function translatePage(language) {
          isArabic = (language === 'ar');
          localStorage.setItem('language', language); // Save the selected language to localStorage
          updateIcons(); // Update icon direction based on the selected language
      
          document.querySelectorAll('[data-lang-ar], [data-lang-en]').forEach(element => {
              const text = language === 'ar' ? element.getAttribute('data-lang-ar') : element.getAttribute('data-lang-en');
              element.innerHTML = text; // Use innerHTML to render HTML tags
          });
      
          const languageIcon = document.getElementById('languageIcon');
          const currentLanguage = document.getElementById('currentLanguage');
      
          if (isArabic) {
            languageIcon.src = egyptFlagPath;
            currentLanguage.textContent = 'العربية';
            document.documentElement.setAttribute('lang', 'ar');
            document.documentElement.setAttribute('dir', 'rtl');

        } else {
            languageIcon.src = kingdomFlagPath;
            currentLanguage.textContent = 'English';
            document.documentElement.setAttribute('lang', 'en');
            document.documentElement.setAttribute('dir', 'ltr');
        }
      }
      
      document.querySelectorAll('.langdropdown-item').forEach(item => {
          item.addEventListener('click', function(event) {
              event.preventDefault();
              const selectedLanguage = this.getAttribute('data-lang');
              translatePage(selectedLanguage);
              console.log(selectedLanguage);
          });
      });
      
      // Apply the saved language preference on page load
      document.addEventListener('DOMContentLoaded', () => {
          if (localStorage.getItem('language')) {
              translatePage(localStorage.getItem('language'));
          } else {
              // Default to Arabic if no preference is saved
              translatePage('ar');
          }
      });