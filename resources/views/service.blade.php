@section('css')
<style>
    .dark-background {
      background-color: #182537;
    }

    /* .background-rgb {
        background: linear-gradient(
        to right, 
        rgba(29,91,128,0.85),
        rgba(50,118,155,0.85),
        rgba(159,202,218,0.85)
        );
    } */

    .background-rgb {
        background: rgb(202,226,238);
        background: linear-gradient(156deg, rgba(202,226,238,0.85) 0%, rgba(30,88,126,0.85) 100%);
    }

    .card-bg {
        background-color: rgba(79, 117, 155, 0.85);
    }
    .parent-card:hover + .shadow-for-card {
        opacity: 14%;
    }
  </style>
@endsection

@extends('layouts.app')

@section('content')
<!-- ====== Hero Section Start -->
<div
   x-data="
   {
   videoOpen: false
   }
   "
   class="relative z-10 bg-cover bg-no-repeat pt-[120px] pb-20 md:pt-[150px]"
   style="background-image: url('{{ asset('/images/hero-image-07.jpg') }}');"
   >
   {{-- <div class="absolute top-0 left-0 -z-10 h-full w-full " style="background: linear-gradient(to bottom, rgba(132, 16, 60, 0.85), rgba(186, 119, 109, 0.85));"></div> --}}
   <div class="absolute top-0 left-0 -z-10 h-full w-full background-rgb"></div>
   
   {{-- <div class="container mx-auto mt-20"> --}}
   <div class="container mx-auto">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="w-full px-4 lg:w-1/2">
            <div class="mb-16 lg:mb-0">
               <h1 class="animate-fade-up mb-4 text-3xl font-bold !leading-[1.208] text-white sm:text-4xl lg:text-[42px] xl:text-6xl">
                  Our Services
               </h1>
               <p class="animate-fade-up text-base text-white mb-9">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere arcu sit amet ligula feugiat eleifend.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere arcu sit amet ligula feugiat eleifend.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
               </p>
            </div>
        </div>
      </div>
   </div>
</div>
<!-- ====== Hero Section End -->

<!-- ====== Services Section Start -->
{{-- <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark dark-background"> --}}
<section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark">
    <div class="container mx-auto ">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                    {{-- <h2 class="text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"> --}}
                    <h2 class="animate-fade-left text-[#1d5b80] dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                    Here's What We Do
                    </h2>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4 opacity-0" id="whatswedocard">
            @for($i = 0; $i < 12; $i++)
                <div class="relative w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/2 mb-8">
                    <div id="whatswedo{{ $i }}" class="parent-card group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white h-full dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]">
                        <div class="relative z-10 inline-flex items-center mx-auto mb-10 h-11">
                            <span class="bg-primary absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"></span>
                            <svg
                                width="51"
                                height="50"
                                viewBox="0 0 51 50"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M48.2129 27.75H46.3848C45.7676 27.75 45.2441 27.0312 45.2441 26.1875V14.375C45.2441 13.5078 45.8066 12.75 46.4473 12.75H48.2129C48.6273 12.75 49.0247 12.5853 49.3177 12.2923C49.6108 11.9993 49.7754 11.6019 49.7754 11.1875C49.7754 10.7731 49.6108 10.3756 49.3177 10.0826C49.0247 9.78958 48.6273 9.62496 48.2129 9.62496H46.4473C45.6834 9.63491 44.9363 9.85058 44.2846 10.2493C43.6329 10.648 43.1008 11.215 42.7441 11.8906H32.5176L31.0254 10.5859C29.6979 9.3961 28.1019 8.54574 26.3739 8.10763C24.6459 7.66951 22.8375 7.65669 21.1035 8.07027C16.7285 9.17964 13.8379 12.7031 12.8301 14.1562H11.2676C11.2851 12.9959 10.8506 11.8743 10.056 11.0287C9.26132 10.183 8.1689 9.6796 7.00977 9.62496H2.90039C2.48599 9.62496 2.08856 9.78958 1.79554 10.0826C1.50251 10.3756 1.33789 10.7731 1.33789 11.1875C1.33789 11.6019 1.50251 11.9993 1.79554 12.2923C2.08856 12.5853 2.48599 12.75 2.90039 12.75H6.99414C7.61133 12.75 8.13477 13.4609 8.13477 14.3125V26.1171C8.13477 26.9843 7.57227 27.75 6.93164 27.75H2.90039C2.48599 27.75 2.08856 27.9146 1.79554 28.2076C1.50251 28.5006 1.33789 28.8981 1.33789 29.3125C1.33789 29.7269 1.50251 30.1243 1.79554 30.4173C2.08856 30.7103 2.48599 30.875 2.90039 30.875H6.93164C7.69117 30.8592 8.4327 30.6409 9.07961 30.2426C9.72651 29.8443 10.2553 29.2804 10.6113 28.6093H11.1582C11.7521 28.6105 12.3357 28.7638 12.8535 29.0546C12.8139 29.2662 12.8185 29.4837 12.8669 29.6934C12.9153 29.9031 13.0065 30.1006 13.1348 30.2734L14.9395 32.6875C15.1519 32.9635 15.4479 33.1635 15.7832 33.2578L18.1738 33.8984L19.2441 36.1796C19.3399 36.3842 19.4789 36.5656 19.6516 36.7112C19.8242 36.8569 20.0264 36.9634 20.2441 37.0234L22.7598 37.7109L24.3926 40.3046C24.5986 40.6321 24.9187 40.8715 25.291 40.9765L29.6426 42.1875C29.7797 42.2275 29.9216 42.2485 30.0645 42.25C30.3204 42.2503 30.5725 42.1879 30.7986 42.068C31.0248 41.9481 31.218 41.7745 31.3613 41.5625L39.5254 29.4375C39.5971 29.3314 39.6937 29.2446 39.8067 29.1847C39.9198 29.1248 40.0459 29.0935 40.1738 29.0937H43.041C43.4169 29.6348 43.9162 30.0786 44.4977 30.3883C45.0791 30.6981 45.726 30.8649 46.3848 30.875H48.2129C48.6273 30.875 49.0247 30.7103 49.3177 30.4173C49.6108 30.1243 49.7754 29.7269 49.7754 29.3125C49.7754 28.8981 49.6108 28.5006 49.3177 28.2076C49.0247 27.9146 48.6273 27.75 48.2129 27.75ZM15.3535 15.9687C16.1895 14.789 18.4785 11.9531 21.8691 11.0937C23.1138 10.8063 24.4095 10.8238 25.646 11.1448C26.8824 11.4659 28.023 12.0808 28.9707 12.9375L32.166 15.7187C32.5549 16.0161 32.8127 16.4532 32.8848 16.9375C32.8908 17.0594 32.8718 17.1812 32.8288 17.2955C32.7857 17.4097 32.7197 17.5139 32.6348 17.6015L31.3066 19.0234C30.9691 19.3887 30.5075 19.615 30.0121 19.6584C29.5166 19.7017 29.0228 19.5589 28.627 19.2578L28.3145 19.0234C27.3474 18.2923 26.1483 17.9361 24.939 18.0209C23.7297 18.1056 22.5919 18.6255 21.7363 19.4843L14.8379 26.6171C13.7811 25.8988 12.5374 25.5051 11.2598 25.4843V17.2812H12.8223C13.318 17.2789 13.8062 17.1587 14.2463 16.9305C14.6864 16.7023 15.066 16.3726 15.3535 15.9687ZM36.9395 27.6875L29.4004 38.875L26.7129 38.0937L25.0801 35.5C24.8722 35.171 24.549 34.9314 24.1738 34.8281L21.7676 34.1718L20.6895 31.8828C20.5937 31.6782 20.4547 31.4968 20.282 31.3512C20.1094 31.2055 19.9072 31.099 19.6895 31.039L17.1191 30.3515L16.4316 29.4375L23.9473 21.625C24.2729 21.3043 24.703 21.1114 25.159 21.0813C25.615 21.0512 26.0666 21.1859 26.4316 21.4609L26.7441 21.6953C27.7581 22.4607 29.02 22.8229 30.2856 22.7118C31.5512 22.6007 32.7306 22.0241 33.5957 21.0937L34.9316 19.7343C35.3031 19.3396 35.5908 18.8738 35.7775 18.3649C35.9641 17.8561 36.0458 17.3147 36.0176 16.7734C35.9849 16.1594 35.8197 15.5597 35.5332 15.0156H42.1191V25.9531H40.1738C39.5339 25.9551 38.9042 26.1144 38.3403 26.4168C37.7763 26.7192 37.2953 27.1555 36.9395 27.6875Z"
                                    fill="#1d5b80"
                                    />
                            </svg>
                        </div>
                        <h4 class="text-[#1d5b80] dark:text-white mb-[14px] text-2xl font-bold">
                            Marketing Solutions
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Lorem Ipsum is simply dummy text of the printing and industry Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="#" class="text-[#1d5b80] px-4 py-2 border border-[#1d5b80] hover:bg-opacity-90 left-4 absolute xl:mt-6">
                            Learn More
                        </a>
                    </div>
                    <span class="bg-primary shadow-for-card absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"></span>
                </div>    
            @endfor
        </div>
    </div>
</section>
<!-- ====== Services Section End -->

@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Array of element IDs to be animated
        var elementIds = [];
        for(i = 0; i < 12; i++) {
            elementIds.push("whatswedo"+i);
        }

        // Set up the Intersection Observer
        var observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                // If the entry is in the viewport
                if (entry.isIntersecting) {
                    // Get the element and add the animate-jump class
                    var element = entry.target;
                    element.classList.add("fade-right");
                    element.classList.add("animate-fade-right");
                    element.classList.add("animate-delay-100");

                    // Stop observing once the animation is applied
                    observer.unobserve(element);
                    var myElement = document.getElementById('whatswedocard');
                    myElement.classList.remove('opacity-0');
                } else {
                    entry.target.style.opacity = 0;
                }
            });
        }, { threshold: 0.5 }); // Adjust the threshold as needed

        // Start observing each element with the specified IDs
        elementIds.forEach(function(elementId) {
            var element = document.getElementById(elementId);
            if (element) {
                observer.observe(element);
            }
        });

    });
</script>
  
@endsection
