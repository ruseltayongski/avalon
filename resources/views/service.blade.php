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


<!-- ====== Call To Action Section Start -->
<section
   class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[50px]"
   >
   <div class="container mx-auto">
      <div class="relative overflow-hidden">
         <div class="flex flex-wrap items-stretch -mx-4">
            <div class="w-full px-4">
               <div class="mx-auto w-full text-center">
                    <h2
                        class="text-3xl font-bold leading-snug text-white md:text-[40px]"
                        >
                        <span class="pr-0.5">Let's Create Brands Together!</span>
                        <a
                            href="javascript:void(0)"
                            class="ml-8 bg-orange dark:bg-dark-2 border-orange dark:border-dark-2 border rounded-full inline-flex items-center justify-center py-3 px-9 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
                            >
                            Button
                        </a>
                    </h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div>
      <span class="absolute top-0 left-0">
         <svg
            width="495"
            height="470"
            viewBox="0 0 495 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <circle
               cx="55"
               cy="442"
               r="138"
               stroke="white"
               stroke-opacity="0.04"
               stroke-width="50"
               />
            <circle
               cx="446"
               r="39"
               stroke="white"
               stroke-opacity="0.04"
               stroke-width="20"
               />
            <path
               d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
               stroke="white"
               stroke-opacity="0.08"
               stroke-width="12"
               />
         </svg>
      </span>
      <span class="absolute bottom-0 right-0">
         <svg
            width="493"
            height="470"
            viewBox="0 0 493 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <circle
               cx="462"
               cy="5"
               r="138"
               stroke="white"
               stroke-opacity="0.04"
               stroke-width="50"
               />
            <circle
               cx="49"
               cy="470"
               r="39"
               stroke="white"
               stroke-opacity="0.04"
               stroke-width="20"
               />
            <path
               d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
               stroke="white"
               stroke-opacity="0.06"
               stroke-width="13"
               />
         </svg>
      </span>
   </div>
</section>
<!-- ====== Call To Action Section End -->

<!-- ====== Footer Section Start -->
<footer class="bg-[#090E34] relative z-10">
    <div class="container pt-4 lg:pt-20">
       <div class="flex flex-wrap -mx-4"> 
            <div class="w-full px-4 sm:w-1/2 lg:w-4/12 2xl:w-5/12">
                <div class="w-full mb-10 lg:mt-10">
                    <ul>
                        <li>
                            <p
                                class="inline-flex items-start mb-3 text-base leading-loose text-gray-7"
                                >
                                <span class="mr-3 mt-[10px]">
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M10 0.5625C5.6875 0.5625 2.1875 3.9375 2.1875 8.09375C2.1875 11.25 6.375 16.25 8.84375 18.9375C9.15625 19.2813 9.5625 19.4375 10 19.4375C10.4375 19.4375 10.8438 19.25 11.1562 18.9375C13.625 16.25 17.8125 11.25 17.8125 8.09375C17.8125 3.9375 14.3125 0.5625 10 0.5625ZM10.125 18C10.0625 18.0625 9.96875 18.0625 9.875 18C6.84375 14.6875 3.59375 10.375 3.59375 8.09375C3.59375 4.71875 6.46875 1.96875 10 1.96875C13.5312 1.96875 16.4062 4.71875 16.4062 8.09375C16.4062 10.375 13.1562 14.6875 10.125 18Z"
                                        fill="white"
                                        />
                                    <path
                                        d="M10 4.90625C8.125 4.90625 6.59375 6.4375 6.59375 8.3125C6.59375 10.1875 8.125 11.75 10 11.75C11.875 11.75 13.4062 10.2188 13.4062 8.34375C13.4062 6.46875 11.875 4.90625 10 4.90625ZM10 10.3438C8.875 10.3438 8 9.4375 8 8.34375C8 7.25 8.90625 6.34375 10 6.34375C11.0937 6.34375 12 7.25 12 8.34375C12 9.4375 11.125 10.3438 10 10.3438Z"
                                        fill="white"
                                        />
                                </svg>
                                </span>
                                401 Broadway, 24th Floor, London
                            </p>
                        </li>
                        <li>
                            <p
                                class="inline-flex items-start mb-3 text-base leading-loose text-gray-7"
                                >
                                <span class="mr-3 mt-[10px]">
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <g clip-path="url(#clip0_941_16074)">
                                        <path
                                            d="M15.1875 19.4688C14.3437 19.4688 13.375 19.25 12.3125 18.8438C10.1875 18 7.84374 16.375 5.74999 14.2813C3.65624 12.1875 2.03124 9.84377 1.18749 7.68752C0.249989 5.37502 0.343739 3.46877 1.43749 2.40627C1.46874 2.37502 1.53124 2.34377 1.56249 2.31252L4.18749 0.750025C4.84374 0.375025 5.68749 0.562525 6.12499 1.18752L7.96874 3.93753C8.40624 4.59378 8.21874 5.46877 7.59374 5.90627L6.46874 6.68752C7.28124 8.00002 9.59374 11.2188 13.2812 13.5313L13.9687 12.5313C14.5 11.7813 15.3437 11.5625 16.0312 12.0313L18.7812 13.875C19.4062 14.3125 19.5937 15.1563 19.2187 15.8125L17.6562 18.4375C17.625 18.5 17.5937 18.5313 17.5625 18.5625C17 19.1563 16.1875 19.4688 15.1875 19.4688ZM2.37499 3.46878C1.78124 4.12503 1.81249 5.46877 2.49999 7.18752C3.28124 9.15627 4.78124 11.3125 6.74999 13.2813C8.68749 15.2188 10.875 16.7188 12.8125 17.5C14.5 18.1875 15.8437 18.2188 16.5312 17.625L18.0312 15.0625C18.0312 15.0313 18.0312 15.0313 18.0312 15L15.2812 13.1563C15.2812 13.1563 15.2187 13.1875 15.1562 13.2813L14.4687 14.2813C14.0312 14.9063 13.1875 15.0938 12.5625 14.6875C8.62499 12.25 6.18749 8.84377 5.31249 7.46877C4.90624 6.81252 5.06249 5.96878 5.68749 5.53128L6.81249 4.75002V4.71878L4.96874 1.96877C4.96874 1.93752 4.93749 1.93752 4.90624 1.96877L2.37499 3.46878Z"
                                            fill="white"
                                            />
                                        <path
                                            d="M18.3125 8.90627C17.9375 8.90627 17.6562 8.62502 17.625 8.25002C17.375 5.09377 14.7812 2.56252 11.5937 2.34377C11.2187 2.31252 10.9062 2.00002 10.9375 1.59377C10.9687 1.21877 11.2812 0.906272 11.6875 0.937522C15.5625 1.18752 18.7187 4.25002 19.0312 8.12502C19.0625 8.50002 18.7812 8.84377 18.375 8.87502C18.375 8.90627 18.3437 8.90627 18.3125 8.90627Z"
                                            fill="white"
                                            />
                                        <path
                                            d="M15.2187 9.18749C14.875 9.18749 14.5625 8.93749 14.5312 8.56249C14.3437 6.87499 13.0312 5.56249 11.3437 5.34374C10.9687 5.31249 10.6875 4.93749 10.7187 4.56249C10.75 4.18749 11.125 3.90624 11.5 3.93749C13.8437 4.21874 15.6562 6.03124 15.9375 8.37499C15.9687 8.74999 15.7187 9.09374 15.3125 9.15624C15.25 9.18749 15.2187 9.18749 15.2187 9.18749Z"
                                            fill="white"
                                            />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_941_16074">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                </span>
                                +885 543 4565
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 sm:w-2/3 lg:w-4/12 2xl:w-4/12" > <!-- Center this part -->
                <div class="w-full mb-10">
                    <a
                        href="javascript:void(0)"
                        class="mb-6 inline-block max-w-[160px]"
                        >
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
                            alt="logo"
                            class="max-w-full"
                            />
                    </a>
                    <p class="text-base mb-7 text-gray-7">
                        We create digital
                    </p>
                    <div class="flex items-center -mx-3">
                        <a
                            href="javascript:void(0)"
                            class="px-3 text-gray-7 hover:text-white"
                            >
                            <svg
                                width="10"
                                height="18"
                                viewBox="0 0 10 18"
                                class="fill-current"
                                >
                                <path
                                d="M9.00007 6.82105H7.50006H6.96434V6.27097V4.56571V4.01562H7.50006H8.62507C8.91971 4.01562 9.16078 3.79559 9.16078 3.46554V0.550085C9.16078 0.247538 8.9465 0 8.62507 0H6.66969C4.55361 0 3.08038 1.54024 3.08038 3.82309V6.21596V6.76605H2.54466H0.72322C0.348217 6.76605 0 7.06859 0 7.50866V9.48897C0 9.87402 0.294645 10.2316 0.72322 10.2316H2.49109H3.02681V10.7817V16.31C3.02681 16.6951 3.32145 17.0526 3.75003 17.0526H6.26791C6.42862 17.0526 6.56255 16.9701 6.66969 16.8601C6.77684 16.7501 6.8572 16.5576 6.8572 16.3925V10.8092V10.2591H7.4197H8.62507C8.97328 10.2591 9.24114 10.0391 9.29471 9.709V9.6815V9.65399L9.66972 7.7562C9.6965 7.56367 9.66972 7.34363 9.509 7.1236C9.45543 6.98608 9.21436 6.84856 9.00007 6.82105Z"
                                />
                            </svg>
                        </a>
                        <a
                            href="javascript:void(0)"
                            class="px-3 text-gray-7 hover:text-white"
                            >
                            <svg
                                width="19"
                                height="15"
                                viewBox="0 0 19 15"
                                class="fill-current"
                                >
                                <path
                                d="M16.2622 3.17878L17.33 1.93293C17.6391 1.59551 17.7234 1.33595 17.7515 1.20618C16.9085 1.67337 16.1217 1.82911 15.6159 1.82911H15.4192L15.3068 1.72528C14.6324 1.18022 13.7894 0.894714 12.8902 0.894714C10.9233 0.894714 9.37779 2.40012 9.37779 4.13913C9.37779 4.24295 9.37779 4.39868 9.40589 4.5025L9.49019 5.02161L8.90009 4.99565C5.30334 4.89183 2.35288 2.03675 1.87518 1.5436C1.08839 2.84136 1.53799 4.08722 2.01568 4.86587L2.97107 6.31937L1.45369 5.54071C1.48179 6.63084 1.93138 7.48736 2.80247 8.11029L3.56116 8.62939L2.80247 8.9149C3.28017 10.2386 4.34795 10.7837 5.13474 10.9913L6.17443 11.2509L5.19094 11.8738C3.61736 12.912 1.65039 12.8342 0.779297 12.7563C2.54957 13.8983 4.65705 14.1579 6.11823 14.1579C7.21412 14.1579 8.02901 14.0541 8.2257 13.9762C16.0936 12.2631 16.4589 5.77431 16.4589 4.47655V4.29486L16.6275 4.19104C17.5829 3.36047 17.9763 2.91923 18.2011 2.65967C18.1168 2.68563 18.0044 2.73754 17.892 2.7635L16.2622 3.17878Z"
                                />
                            </svg>
                        </a>
                        <a
                            href="javascript:void(0)"
                            class="px-3 text-gray-7 hover:text-white"
                            >
                            <svg
                                width="18"
                                height="18"
                                viewBox="0 0 18 18"
                                class="fill-current"
                                >
                                <path
                                d="M8.91688 12.4995C10.6918 12.4995 12.1306 11.0911 12.1306 9.35385C12.1306 7.61655 10.6918 6.20819 8.91688 6.20819C7.14197 6.20819 5.70312 7.61655 5.70312 9.35385C5.70312 11.0911 7.14197 12.4995 8.91688 12.4995Z"
                                />
                                <path
                                d="M12.4078 0.947388H5.37075C2.57257 0.947388 0.300781 3.17104 0.300781 5.90993V12.7436C0.300781 15.5367 2.57257 17.7604 5.37075 17.7604H12.3524C15.2059 17.7604 17.4777 15.5367 17.4777 12.7978V5.90993C17.4777 3.17104 15.2059 0.947388 12.4078 0.947388ZM8.91696 13.4758C6.56206 13.4758 4.70584 11.6047 4.70584 9.35389C4.70584 7.10312 6.58976 5.23199 8.91696 5.23199C11.2165 5.23199 13.1004 7.10312 13.1004 9.35389C13.1004 11.6047 11.2442 13.4758 8.91696 13.4758ZM14.735 5.61164C14.4579 5.90993 14.0423 6.07264 13.5714 6.07264C13.1558 6.07264 12.7402 5.90993 12.4078 5.61164C12.103 5.31334 11.9368 4.9337 11.9368 4.47269C11.9368 4.01169 12.103 3.65916 12.4078 3.33375C12.7125 3.00834 13.1004 2.84563 13.5714 2.84563C13.9869 2.84563 14.4302 3.00834 14.735 3.30663C15.012 3.65916 15.2059 4.06593 15.2059 4.49981C15.1782 4.9337 15.012 5.31334 14.735 5.61164Z"
                                />
                                <path
                                d="M13.5985 3.82184C13.2383 3.82184 12.9336 4.12013 12.9336 4.47266C12.9336 4.82519 13.2383 5.12349 13.5985 5.12349C13.9587 5.12349 14.2634 4.82519 14.2634 4.47266C14.2634 4.12013 13.9864 3.82184 13.5985 3.82184Z"
                                />
                            </svg>
                        </a>
                        <a
                            href="javascript:void(0)"
                            class="px-3 text-gray-7 hover:text-white"
                            >
                            <svg
                                width="18"
                                height="18"
                                viewBox="0 0 18 18"
                                class="fill-current"
                                >
                                <path
                                d="M16.7821 0.947388H1.84847C1.14272 0.947388 0.578125 1.49747 0.578125 2.18508V16.7623C0.578125 17.4224 1.14272 18 1.84847 18H16.7257C17.4314 18 17.996 17.4499 17.996 16.7623V2.15757C18.0525 1.49747 17.4879 0.947388 16.7821 0.947388ZM5.7442 15.4421H3.17528V7.32837H5.7442V15.4421ZM4.44563 6.2007C3.59873 6.2007 2.94944 5.5406 2.94944 4.74297C2.94944 3.94535 3.62696 3.28525 4.44563 3.28525C5.26429 3.28525 5.94181 3.94535 5.94181 4.74297C5.94181 5.5406 5.32075 6.2007 4.44563 6.2007ZM15.4835 15.4421H12.9146V11.509C12.9146 10.5739 12.8864 9.33618 11.5596 9.33618C10.2045 9.33618 10.0069 10.3813 10.0069 11.4265V15.4421H7.438V7.32837H9.95046V8.45605H9.9787C10.3457 7.79594 11.1644 7.13584 12.4347 7.13584C15.0601 7.13584 15.54 8.7861 15.54 11.0414V15.4421H15.4835Z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-4/12 2xl:w-3/12">
                <div class="w-full mb-10 lg:mt-10">
                    <ul>
                        <li>
                            <p
                                class="inline-flex items-start mb-3 text-base leading-loose text-gray-7"
                                >
                                <span class="mr-3 mt-[10px]">
                                    <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M17.5 3H2.5C1.4375 3 0.53125 3.875 0.53125 4.96875V15.0937C0.53125 16.1562 1.40625 17.0625 2.5 17.0625H17.5C18.5625 17.0625 19.4687 16.1875 19.4687 15.0937V4.9375C19.4687 3.875 18.5625 3 17.5 3ZM17.5 4.40625C17.5312 4.40625 17.5625 4.40625 17.5937 4.40625L10 9.28125L2.40625 4.40625C2.4375 4.40625 2.46875 4.40625 2.5 4.40625H17.5ZM17.5 15.5938H2.5C2.1875 15.5938 1.9375 15.3438 1.9375 15.0312V5.78125L9.25 10.4688C9.46875 10.625 9.71875 10.6875 9.96875 10.6875C10.2187 10.6875 10.4687 10.625 10.6875 10.4688L18 5.78125V15.0625C18.0625 15.375 17.8125 15.5938 17.5 15.5938Z"
                                        fill="white"
                                        />
                                    </svg>
                                </span>
                                info@yourmail.com
                            </p>
                        </li>
                        <li>
                            <p
                                class="inline-flex items-start mb-3 text-base leading-loose text-gray-7"
                                >
                                asdsad asdasdsa
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
       </div>
    </div>
</footer>
 <!-- ====== Footer Section End -->

@endsection