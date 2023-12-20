@section('css')
<style>
    .dark-background {
      background-color: #182537;
    }
    .background-rgb {
        background: linear-gradient(to right, rgba(10, 31, 68, 0.85), rgba(79, 117, 155, 0.85), rgba(192, 214, 228, 0.85));
    }
  </style>
@endsection

@extends('layouts.app')

@section('content')

<!-- ====== Navbar Section Start -->
<header
   x-data="
        {
        navbarOpen: false,
        }
   "
   class="absolute top-0 left-0 z-50 w-full"
   >
   <div class="container mx-auto">
      <div class="relative flex items-center justify-between -mx-4">
         <div class="max-w-full px-4 w-60">
            <a href="javascript:void(0)" class="block w-full py-5">
            <img
               src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
               alt="logo"
               class="w-full"
               />
            </a>
         </div>
         <div class="flex items-center justify-between w-full px-4">
            <div>
               <button
                  @click="navbarOpen = !navbarOpen"
                  :class="navbarOpen && 'navbarTogglerActive'"
                  id="navbarToggler"
                  class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                  >
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                  ></span>
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                  ></span>
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                  ></span>
               </button>
               <nav
                  :class="!navbarOpen && 'hidden' "
                  id="navbarCollapse"
                  class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white dark:bg-dark-2 py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:dark:bg-transparent lg:shadow-none xl:ml-11"
                  >
                  <ul class="block lg:flex">
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                           >
                        About Us
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                           >
                        Features
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                           >
                        Pricing
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                           >
                        Support
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                <a href="javascript:void(0)"
                class="py-3 text-base font-medium rounded-l-full rounded-r-full shadow-1 dark:shadow-none px-7 text-white border border-white hover:bg-gray-2 hover:text-body-color"
                >
                Get Started
                </a>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- ====== Navbar Section End -->

<!-- ====== Hero Section Start -->
<div
   x-data="
   {
   videoOpen: false
   }
   "
   class="relative z-10 bg-cover  pt-[120px] pb-20 md:pt-[150px]"
   style="background-image: url('{{ asset('/images/hero-image-07.jpg') }}');height:70svh;"
   >
   {{-- <div class="absolute top-0 left-0 -z-10 h-full w-full " style="background: linear-gradient(to bottom, rgba(132, 16, 60, 0.85), rgba(186, 119, 109, 0.85));"></div> --}}
   <div class="absolute top-0 left-0 -z-10 h-full w-full background-rgb"></div>
   
   <div class="container mx-auto mt-20">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="w-full px-4 lg:w-1/2">
            <div class="mb-16 lg:mb-0">
               <h1
                  class="mb-4 text-3xl font-bold !leading-[1.208] text-white sm:text-4xl lg:text-[42px] xl:text-6xl"
                  >
                  Our Services
               </h1>
               <p class="text-base text-white mb-9">
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
<section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark dark-background">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                    <h2 class="text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                    Here's What We Do
                    </h2>
                </div>
            </div>
        </div>
        @for($i = 0; $i < 6; $i++)
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/2">
                    <div
                        class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:pb-[85px] xl:px-[43px]"
                        >
                        <div class="relative z-10 inline-flex items-center mx-auto mb-10 h-11">
                            <span
                                class="bg-primary absolute right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
                                ></span>
                            <svg
                                width="51"
                                height="50"
                                viewBox="0 0 51 50"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M48.2129 27.75H46.3848C45.7676 27.75 45.2441 27.0312 45.2441 26.1875V14.375C45.2441 13.5078 45.8066 12.75 46.4473 12.75H48.2129C48.6273 12.75 49.0247 12.5853 49.3177 12.2923C49.6108 11.9993 49.7754 11.6019 49.7754 11.1875C49.7754 10.7731 49.6108 10.3756 49.3177 10.0826C49.0247 9.78958 48.6273 9.62496 48.2129 9.62496H46.4473C45.6834 9.63491 44.9363 9.85058 44.2846 10.2493C43.6329 10.648 43.1008 11.215 42.7441 11.8906H32.5176L31.0254 10.5859C29.6979 9.3961 28.1019 8.54574 26.3739 8.10763C24.6459 7.66951 22.8375 7.65669 21.1035 8.07027C16.7285 9.17964 13.8379 12.7031 12.8301 14.1562H11.2676C11.2851 12.9959 10.8506 11.8743 10.056 11.0287C9.26132 10.183 8.1689 9.6796 7.00977 9.62496H2.90039C2.48599 9.62496 2.08856 9.78958 1.79554 10.0826C1.50251 10.3756 1.33789 10.7731 1.33789 11.1875C1.33789 11.6019 1.50251 11.9993 1.79554 12.2923C2.08856 12.5853 2.48599 12.75 2.90039 12.75H6.99414C7.61133 12.75 8.13477 13.4609 8.13477 14.3125V26.1171C8.13477 26.9843 7.57227 27.75 6.93164 27.75H2.90039C2.48599 27.75 2.08856 27.9146 1.79554 28.2076C1.50251 28.5006 1.33789 28.8981 1.33789 29.3125C1.33789 29.7269 1.50251 30.1243 1.79554 30.4173C2.08856 30.7103 2.48599 30.875 2.90039 30.875H6.93164C7.69117 30.8592 8.4327 30.6409 9.07961 30.2426C9.72651 29.8443 10.2553 29.2804 10.6113 28.6093H11.1582C11.7521 28.6105 12.3357 28.7638 12.8535 29.0546C12.8139 29.2662 12.8185 29.4837 12.8669 29.6934C12.9153 29.9031 13.0065 30.1006 13.1348 30.2734L14.9395 32.6875C15.1519 32.9635 15.4479 33.1635 15.7832 33.2578L18.1738 33.8984L19.2441 36.1796C19.3399 36.3842 19.4789 36.5656 19.6516 36.7112C19.8242 36.8569 20.0264 36.9634 20.2441 37.0234L22.7598 37.7109L24.3926 40.3046C24.5986 40.6321 24.9187 40.8715 25.291 40.9765L29.6426 42.1875C29.7797 42.2275 29.9216 42.2485 30.0645 42.25C30.3204 42.2503 30.5725 42.1879 30.7986 42.068C31.0248 41.9481 31.218 41.7745 31.3613 41.5625L39.5254 29.4375C39.5971 29.3314 39.6937 29.2446 39.8067 29.1847C39.9198 29.1248 40.0459 29.0935 40.1738 29.0937H43.041C43.4169 29.6348 43.9162 30.0786 44.4977 30.3883C45.0791 30.6981 45.726 30.8649 46.3848 30.875H48.2129C48.6273 30.875 49.0247 30.7103 49.3177 30.4173C49.6108 30.1243 49.7754 29.7269 49.7754 29.3125C49.7754 28.8981 49.6108 28.5006 49.3177 28.2076C49.0247 27.9146 48.6273 27.75 48.2129 27.75ZM15.3535 15.9687C16.1895 14.789 18.4785 11.9531 21.8691 11.0937C23.1138 10.8063 24.4095 10.8238 25.646 11.1448C26.8824 11.4659 28.023 12.0808 28.9707 12.9375L32.166 15.7187C32.5549 16.0161 32.8127 16.4532 32.8848 16.9375C32.8908 17.0594 32.8718 17.1812 32.8288 17.2955C32.7857 17.4097 32.7197 17.5139 32.6348 17.6015L31.3066 19.0234C30.9691 19.3887 30.5075 19.615 30.0121 19.6584C29.5166 19.7017 29.0228 19.5589 28.627 19.2578L28.3145 19.0234C27.3474 18.2923 26.1483 17.9361 24.939 18.0209C23.7297 18.1056 22.5919 18.6255 21.7363 19.4843L14.8379 26.6171C13.7811 25.8988 12.5374 25.5051 11.2598 25.4843V17.2812H12.8223C13.318 17.2789 13.8062 17.1587 14.2463 16.9305C14.6864 16.7023 15.066 16.3726 15.3535 15.9687ZM36.9395 27.6875L29.4004 38.875L26.7129 38.0937L25.0801 35.5C24.8722 35.171 24.549 34.9314 24.1738 34.8281L21.7676 34.1718L20.6895 31.8828C20.5937 31.6782 20.4547 31.4968 20.282 31.3512C20.1094 31.2055 19.9072 31.099 19.6895 31.039L17.1191 30.3515L16.4316 29.4375L23.9473 21.625C24.2729 21.3043 24.703 21.1114 25.159 21.0813C25.615 21.0512 26.0666 21.1859 26.4316 21.4609L26.7441 21.6953C27.7581 22.4607 29.02 22.8229 30.2856 22.7118C31.5512 22.6007 32.7306 22.0241 33.5957 21.0937L34.9316 19.7343C35.3031 19.3396 35.5908 18.8738 35.7775 18.3649C35.9641 17.8561 36.0458 17.3147 36.0176 16.7734C35.9849 16.1594 35.8197 15.5597 35.5332 15.0156H42.1191V25.9531H40.1738C39.5339 25.9551 38.9042 26.1144 38.3403 26.4168C37.7763 26.7192 37.2953 27.1555 36.9395 27.6875Z"
                                    fill="white"
                                />
                            </svg>

                        </div>
                        <h4 class="text-white dark:text-white mb-[14px] text-2xl font-bold">
                            Marketing Solutions
                        </h4>
                        <p class="text-white dark:text-dark-6">
                            Lorem Ipsum is simply dummy text of the printing and industry. asdasd
                        </p>
                        <span class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"></span>

                        <a href="#" class="text-primary text-left absolute left-10 xl:mt-6 hover:underline">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/2">
                    <div
                        class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:pb-[85px] xl:px-[43px]"
                        >
                        <div class="relative z-10 inline-flex items-center mx-auto mb-10 h-11">
                            <span
                                class="bg-primary absolute right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"></span>
                            <svg
                                width="51"
                                height="50"
                                viewBox="0 0 51 50"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M48.1348 34.7656C47.1191 31.4062 43.7598 29.5312 40.5566 30.4687C37.9004 31.25 34.2285 32.3437 31.3379 33.2031C31.5723 32.2656 31.416 31.4844 31.1816 30.8594C30.4004 28.9844 28.3691 28.125 26.5723 28.125H18.6816C18.0566 28.125 17.3535 27.8125 16.6504 27.1875C15.791 26.4062 14.6191 25.9375 13.4473 25.9375H7.11914C4.30664 25.9375 1.96289 28.3594 1.96289 31.3281V41.4844C1.96289 44.5312 4.30664 46.9531 7.19727 46.9531H14.9316C15.8691 46.9531 16.8848 46.6406 17.7441 46.0938C20.0098 47.3438 22.5879 47.9688 25.166 47.9688C26.7285 47.9688 28.291 47.7344 29.6973 47.2656L43.916 42.9688H43.9941C48.291 41.3281 48.916 37.5781 48.1348 34.7656ZM7.19727 43.4375C6.25977 43.4375 5.47852 42.5781 5.47852 41.4844V31.3281C5.47852 30.3125 6.18164 29.4531 7.11914 29.4531H13.5254C13.916 29.4531 14.2285 29.6094 14.3848 29.7656C14.6191 30 14.8535 30.1562 15.0879 30.3125V43.3594C15.0098 43.3594 15.0098 43.3594 14.9316 43.3594H7.19727V43.4375ZM42.8223 39.6094L28.5254 43.9844C27.4316 44.2969 26.2598 44.5313 25.0098 44.5313C22.9785 44.5313 21.0254 43.9844 19.3066 43.0469L18.5254 42.6562V31.7187C18.6035 31.7187 18.6035 31.7187 18.6816 31.7187H26.6504C27.3535 31.7187 27.9004 32.0312 27.9785 32.2656C28.0566 32.5 27.9004 33.3594 26.2598 34.9219L25.2441 35.8594L25.9473 37.0313C26.6504 38.2813 27.3535 38.0469 30.0879 37.2656C31.3379 36.875 33.0566 36.4063 34.7754 35.9375C38.1348 34.9219 41.5723 33.9063 41.5723 33.9063C42.9004 33.5156 44.3066 34.375 44.7754 35.8594C45.166 37.1094 45.0879 38.75 42.8223 39.6094Z"
                                    fill="white"
                                    />
                                <path
                                    d="M47.4316 17.6563H45.4785V3.75C45.4785 2.8125 44.6973 1.95312 43.6816 1.95312C42.666 1.95312 41.9629 2.8125 41.9629 3.75V17.6563H37.666V6.09375C37.666 5.15625 36.8848 4.29688 35.8691 4.29688C34.8535 4.29688 34.1504 5.15625 34.1504 6.09375V17.6563H29.8535V10C29.8535 9.0625 29.0723 8.20313 28.0566 8.20313C27.041 8.20313 26.2598 8.98438 26.2598 10V17.6563H25.0879C24.1504 17.6563 23.291 18.4375 23.291 19.4531C23.291 20.4688 24.0723 21.25 25.0879 21.25H47.4316C48.3691 21.25 49.2285 20.4688 49.2285 19.4531C49.2285 18.4375 48.3691 17.6563 47.4316 17.6563Z"
                                    fill="white"
                                    />
                            </svg>
                        </div>
                        <h4
                            class="text-white dark:text-white mb-[14px] text-2xl font-bold"
                            >
                            Business Analytics
                        </h4>
                        <p class="text-white dark:text-dark-6">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <span class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"></span>

                        <a href="#" class="text-primary text-left absolute left-10 xl:mt-6 hover:underline">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</section>
<!-- ====== Services Section End -->

@endsection

<!-- ====== Cards Section Start -->
<section class="bg-gray-1 dark:bg-dark pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container mx-auto">
       <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
             <div
                class="px-6 py-8 mb-8 duration-300 bg-white rounded-lg shadow-1 dark:shadow-card hover:shadow-3 dark:bg-dark-2 sm:px-8 lg:px-6 xl:px-8"
                >
                <h3>
                   <a
                      href="javascript:void(0)"
                      class="block mb-3 text-lg font-bold leading-tight hover:text-primary text-dark dark:text-white sm:text-xl sm:leading-tight lg:text-lg lg:leading-tight xl:text-xl xl:leading-tight"
                      >
                   Ready for SaaS Websites Crafted by TailGrids
                   </a>
                </h3>
                <p
                   class="mb-5 text-base font-medium leading-relaxed text-body-color dark:text-dark-6"
                   >
                   Lorem ipsum dolor sit amet, vehiculaum ero felis loreum fitiona
                   fringilla goes scelerisque Interdum et.
                </p>
                <a
                   href="javascript:void(0)"
                   class="inline-flex items-center px-4 py-2 font-semibold text-white rounded bg-primary hover:bg-opacity-90"
                   >
                Learn More
                </a>
             </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
             <div
                class="px-6 py-8 mb-8 duration-300 bg-white rounded-lg shadow-1 dark:shadow-card hover:shadow-3 dark:bg-dark-2 sm:px-8 lg:px-6 xl:px-8"
                >
                <h3>
                   <a
                      href="javascript:void(0)"
                      class="block mb-3 text-lg font-bold leading-tight hover:text-primary text-dark dark:text-white sm:text-xl sm:leading-tight lg:text-lg lg:leading-tight xl:text-xl xl:leading-tight"
                      >
                   Ready for SaaS Websites Crafted by TailGrids
                   </a>
                </h3>
                <p
                   class="mb-5 text-base font-medium leading-relaxed text-body-color dark:text-dark-6"
                   >
                   Lorem ipsum dolor sit amet, vehiculaum ero felis loreum fitiona
                   fringilla goes scelerisque Interdum et.
                </p>
                <a
                   href="javascript:void(0)"
                   class="inline-flex items-center px-4 py-2 font-semibold text-white rounded bg-primary hover:bg-opacity-90"
                   >
                Learn More
                </a>
             </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
             <div
                class="px-6 py-8 mb-8 duration-300 bg-white rounded-lg shadow-1 dark:shadow-card hover:shadow-3 dark:bg-dark-2 sm:px-8 lg:px-6 xl:px-8"
                >
                <h3>
                   <a
                      href="javascript:void(0)"
                      class="block mb-3 text-lg font-bold leading-tight hover:text-primary text-dark dark:text-white sm:text-xl sm:leading-tight lg:text-lg lg:leading-tight xl:text-xl xl:leading-tight"
                      >
                   Ready for SaaS Websites Crafted by TailGrids
                   </a>
                </h3>
                <p
                   class="mb-5 text-base font-medium leading-relaxed text-body-color dark:text-dark-6"
                   >
                   Lorem ipsum dolor sit amet, vehiculaum ero felis loreum fitiona
                   fringilla goes scelerisque Interdum et.
                </p>
                <a
                   href="javascript:void(0)"
                   class="inline-flex items-center px-4 py-2 font-semibold text-white rounded bg-primary hover:bg-opacity-90"
                   >
                Learn More
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- ====== Cards Section End -->