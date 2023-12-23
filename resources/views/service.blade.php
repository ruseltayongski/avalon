@section('css')
<style>
    .dark-background {
      background-color: #182537;
    }
    .background-rgb {
        background: linear-gradient(to right, rgba(10, 31, 68, 0.85), rgba(79, 117, 155, 0.85), rgba(192, 214, 228, 0.85));
    }
    .card-bg {
      background-color: rgba(79, 117, 155, 0.85);
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
            <div class="w-full">
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
                  <ul class="block lg:flex justify-end ">
                     <li>
                        <a
                        href="javascript:void(0)"
                        class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                        >
                        Home
                        </a>
                     </li>
                     <li>
                        <a
                        href="javascript:void(0)"
                        class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                        >
                        About
                        </a>
                     </li>
                     <li>
                        <a
                        href="javascript:void(0)"
                        class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                        >
                        Services
                        </a>
                     </li>
                     <li class="lg:ml-6">
                        <a href="javascript:void(0)" class="lg:border-white lg:dark:border-dark-2 lg:border rounded-full inline-flex items-center justify-center py-3 lg:px-7 text-center text-base font-medium lg:text-white dark:text-white hover:bg-gray-4 dark:hover:bg-dark-3 disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5">
                           Contact Us
                        </a>
                     </li>
                  </ul>
               </nav>
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
<section class="relative z-10 overflow-hidden bg-primary py-4 lg:py-[15px]">
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
            <div class="w-full px-4 sm:w-2/3 lg:w-4/12 2xl:w-4/12" >
                <div class="w-full mb-10">
                    <a
                        href="javascript:void(0)"
                        class="mb-6 inline-block max-w-[160px] xl:ml-12"
                        >
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
                            alt="logo"
                            class="max-w-full"
                            />
                    </a>
                    <p class="text-base mb-7 text-gray-7 xl:ml-16">
                        We create digital
                    </p>
                    <div class="flex items-center -mx-3 xl:ml-16">
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


<!-- ====== Products Carousel Section Start -->
<!-- ====== Products Carousel Section Start -->
<section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark">
    <div class="container mx-auto">
       <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
             <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-[70px]">
                <span class="mb-2 block text-lg font-semibold text-primary">
                Most Popular Products
                </span>
                <h2
                   class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:leading-[1.2] md:text-[40px]"
                   >
                   Best Selling Items
                </h2>
                <p class="text-base text-body-color dark:text-dark-6">
                   There are many variations of passages of Lorem Ipsum available
                   but the majority have suffered alteration in some form.
                </p>
             </div>
          </div>
       </div>
       <div
          x-data="
          {
          slides: ['1','2','3', '4', '5'],
          }
          "
          >
          <div class="relative flex justify-center">
             <div class="relative w-full">
                <div
                   class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px]"
                   x-ref="carousel"
                   >
                   <div
                      class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]"
                      >
                      <div>
                         <div class="relative mb-5 overflow-hidden rounded-md">
                            <img
                               src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-01.jpg"
                               alt="product"
                               class="w-full"
                               />
                            <span
                               class="absolute right-4 top-4 inline-flex items-center justify-center rounded bg-secondary pl-[10px] pr-2 py-[3px] text-sm font-medium text-white"
                               >
                               New
                               <span class="pl-1">
                                  <svg
                                     width="12"
                                     height="12"
                                     viewBox="0 0 12 12"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <path
                                        d="M11.1937 4.48125L7.79997 3.95625L6.26247 0.73125C6.14997 0.50625 5.84997 0.50625 5.73747 0.73125L4.19997 3.975L0.82497 4.48125C0.58122 4.51875 0.48747 4.8375 0.67497 5.00625L3.13122 7.5375L2.54997 11.0812C2.51247 11.325 2.75622 11.5312 2.98122 11.3813L6.03747 9.7125L9.07497 11.3813C9.28122 11.4938 9.54372 11.3062 9.48747 11.0812L8.90622 7.5375L11.3625 5.00625C11.5125 4.8375 11.4375 4.51875 11.1937 4.48125Z"
                                        fill="white"
                                        />
                                  </svg>
                               </span>
                            </span>
                            <div
                               class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3"
                               >
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" 
                                           />
                                        <path 
                                           d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" 
                                           />
                                        <path 
                                           d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Add to Cart</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" 
                                           />
                                        <path 
                                           d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Quick View</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z"
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Favorite</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="text-center">
                            <h3>
                               <a
                                  href="javascript:void(0)"
                                  class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]"
                                  >
                               Men Winter Jacket
                               </a>
                            </h3>
                            <p class="text-base font-medium text-body-color dark:text-dark-6">$35.00</p>
                         </div>
                      </div>
                   </div>
                   <div
                      class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]"
                      >
                      <div>
                         <div class="relative mb-5 overflow-hidden rounded-md">
                            <img
                               src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-02.jpg"
                               alt="product"
                               class="w-full"
                               />
                            <div
                               class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3"
                               >
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" 
                                           />
                                        <path 
                                           d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" 
                                           />
                                        <path 
                                           d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Add to Cart</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" 
                                           />
                                        <path 
                                           d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Quick View</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z"
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Favorite</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="text-center">
                            <h3>
                               <a
                                  href="javascript:void(0)"
                                  class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]"
                                  >
                               Men Summer Jacket
                               </a>
                            </h3>
                            <p class="text-base font-medium text-body-color dark:text-dark-6">$55.00</p>
                         </div>
                      </div>
                   </div>
                   <div
                      class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]"
                      >
                      <div>
                         <div class="relative mb-5 overflow-hidden rounded-md">
                            <img
                               src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-03.jpg"
                               alt="product"
                               class="w-full"
                               />
                            <span
                               class="absolute right-4 top-4 inline-flex items-center justify-center rounded bg-red-600 pl-[10px] pr-2 py-[3px] text-sm font-medium text-white"
                               >
                               Hot
                               <span class="pl-1">
                                  <svg
                                     width="14"
                                     height="14"
                                     viewBox="0 0 14 14"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M5.2601 0.709367C5.42417 0.591971 5.641 0.578978 5.81792 0.675942C6.36504 0.975806 7.11161 1.51544 7.66876 2.39728C8.23232 3.28925 8.58064 4.49847 8.37038 6.08794C8.36791 6.10661 8.36706 6.12048 8.367 6.1305C8.39186 6.13485 8.4391 6.13725 8.51054 6.11607C8.71512 6.05543 9.01409 5.81519 8.9819 5.24938C8.96899 5.0225 9.10352 4.81308 9.31522 4.73047C9.52692 4.64787 9.76773 4.71085 9.91189 4.88651C10.6705 5.81091 11.5449 7.35598 11.6287 8.98457C11.6712 9.8111 11.5097 10.6676 11.0168 11.4622C10.5246 12.2556 9.72553 12.9491 8.55615 13.4911C8.34078 13.591 8.08522 13.5339 7.93283 13.3519C7.78043 13.1699 7.76912 12.9082 7.90524 12.7138C8.1604 12.3492 8.49801 11.3816 7.78262 10.4874C7.77356 10.4761 7.76498 10.4644 7.75689 10.4523C7.72895 10.4108 7.70497 10.3824 7.66755 10.338C7.64267 10.3084 7.61184 10.2719 7.56996 10.2197C7.4816 10.1097 7.37428 9.96212 7.29508 9.76512C7.24412 9.63837 7.20934 9.50319 7.19191 9.35681C6.91137 9.58539 6.63847 9.86768 6.42307 10.1983C5.9921 10.8598 5.78034 11.7246 6.22345 12.8176C6.30382 13.0158 6.25587 13.243 6.10224 13.3919C5.94861 13.5407 5.72003 13.5815 5.52441 13.4949C4.57229 13.0735 3.33288 12.1558 2.75581 10.7394C2.16059 9.27837 2.32039 7.41512 3.94633 5.24719L3.94633 5.24719C4.52866 4.47078 5.35445 2.9812 5.0484 1.22654C5.01373 1.02779 5.09602 0.826763 5.2601 0.709367ZM8.36938 6.15304C8.36922 6.15323 8.3686 6.15187 8.36804 6.14837C8.36927 6.15109 8.36955 6.15284 8.36938 6.15304ZM6.1605 2.21C6.09608 3.85031 5.31814 5.16813 4.78633 5.8772C3.32844 7.82105 3.30264 9.29863 3.72821 10.3432C3.99146 10.9894 4.44619 11.5172 4.93744 11.9126C4.87354 11.0261 5.13335 10.2544 5.54332 9.62511C6.126 8.73078 7.00047 8.13556 7.63632 7.85237C7.82495 7.76836 8.04531 7.80272 8.1994 7.94018C8.35349 8.07763 8.41269 8.29265 8.35069 8.4896C8.17683 9.04186 8.22822 9.27128 8.26929 9.37346C8.29316 9.43281 8.32874 9.48766 8.38866 9.56228C8.39893 9.57508 8.41339 9.59235 8.4305 9.6128C8.48172 9.67399 8.55678 9.76366 8.61494 9.84707C9.15478 10.5299 9.2986 11.2399 9.25662 11.8545C9.64189 11.553 9.92326 11.2331 10.1246 10.9086C10.4869 10.3246 10.6135 9.68774 10.5801 9.03851C10.5329 8.12063 10.1655 7.19647 9.71826 6.4404C9.48965 6.78506 9.16023 7.01865 8.80895 7.12278C8.48506 7.21879 8.09695 7.21364 7.77832 7.00856C7.42502 6.78118 7.27217 6.38328 7.32945 5.95024C7.50844 4.59714 7.20954 3.63625 6.78109 2.95812C6.5948 2.66326 6.38 2.41573 6.1605 2.21Z"
                                        fill="white"
                                        />
                                  </svg>
                               </span>
                            </span>
                            <div
                               class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3"
                               >
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" 
                                           />
                                        <path 
                                           d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" 
                                           />
                                        <path 
                                           d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Add to Cart</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" 
                                           />
                                        <path 
                                           d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Quick View</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z"
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Favorite</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="text-center">
                            <h3>
                               <a
                                  href="javascript:void(0)"
                                  class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]"
                                  >
                               Man's Black Shirt
                               </a>
                            </h3>
                            <p class="text-base font-medium text-body-color dark:text-dark-6">$18.00</p>
                         </div>
                      </div>
                   </div>
                   <div
                      class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]"
                      >
                      <div>
                         <div class="relative mb-5 overflow-hidden rounded-md">
                            <img
                               src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-04.jpg"
                               alt="product"
                               class="w-full"
                               />
                            <div
                               class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3"
                               >
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" 
                                           />
                                        <path 
                                           d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" 
                                           />
                                        <path 
                                           d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Add to Cart</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" 
                                           />
                                        <path 
                                           d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Quick View</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z"
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Favorite</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="text-center">
                            <h3>
                               <a
                                  href="javascript:void(0)"
                                  class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]"
                                  >
                               Men Winter Jacket
                               </a>
                            </h3>
                            <p class="text-base font-medium text-body-color dark:text-dark-6">$12.00</p>
                         </div>
                      </div>
                   </div>
                   <div
                      class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px]"
                      >
                      <div>
                         <div class="relative mb-5 overflow-hidden rounded-md">
                            <img
                               src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-01/image-03.jpg"
                               alt="product"
                               class="w-full"
                               />
                            <span
                               class="absolute right-4 top-4 inline-flex items-center justify-center rounded bg-red-600 pl-[10px] pr-2 py-[3px] text-sm font-medium text-white"
                               >
                               Hot
                               <span class="pl-1">
                                  <svg
                                     width="14"
                                     height="14"
                                     viewBox="0 0 14 14"
                                     fill="none"
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M5.2601 0.709367C5.42417 0.591971 5.641 0.578978 5.81792 0.675942C6.36504 0.975806 7.11161 1.51544 7.66876 2.39728C8.23232 3.28925 8.58064 4.49847 8.37038 6.08794C8.36791 6.10661 8.36706 6.12048 8.367 6.1305C8.39186 6.13485 8.4391 6.13725 8.51054 6.11607C8.71512 6.05543 9.01409 5.81519 8.9819 5.24938C8.96899 5.0225 9.10352 4.81308 9.31522 4.73047C9.52692 4.64787 9.76773 4.71085 9.91189 4.88651C10.6705 5.81091 11.5449 7.35598 11.6287 8.98457C11.6712 9.8111 11.5097 10.6676 11.0168 11.4622C10.5246 12.2556 9.72553 12.9491 8.55615 13.4911C8.34078 13.591 8.08522 13.5339 7.93283 13.3519C7.78043 13.1699 7.76912 12.9082 7.90524 12.7138C8.1604 12.3492 8.49801 11.3816 7.78262 10.4874C7.77356 10.4761 7.76498 10.4644 7.75689 10.4523C7.72895 10.4108 7.70497 10.3824 7.66755 10.338C7.64267 10.3084 7.61184 10.2719 7.56996 10.2197C7.4816 10.1097 7.37428 9.96212 7.29508 9.76512C7.24412 9.63837 7.20934 9.50319 7.19191 9.35681C6.91137 9.58539 6.63847 9.86768 6.42307 10.1983C5.9921 10.8598 5.78034 11.7246 6.22345 12.8176C6.30382 13.0158 6.25587 13.243 6.10224 13.3919C5.94861 13.5407 5.72003 13.5815 5.52441 13.4949C4.57229 13.0735 3.33288 12.1558 2.75581 10.7394C2.16059 9.27837 2.32039 7.41512 3.94633 5.24719L3.94633 5.24719C4.52866 4.47078 5.35445 2.9812 5.0484 1.22654C5.01373 1.02779 5.09602 0.826763 5.2601 0.709367ZM8.36938 6.15304C8.36922 6.15323 8.3686 6.15187 8.36804 6.14837C8.36927 6.15109 8.36955 6.15284 8.36938 6.15304ZM6.1605 2.21C6.09608 3.85031 5.31814 5.16813 4.78633 5.8772C3.32844 7.82105 3.30264 9.29863 3.72821 10.3432C3.99146 10.9894 4.44619 11.5172 4.93744 11.9126C4.87354 11.0261 5.13335 10.2544 5.54332 9.62511C6.126 8.73078 7.00047 8.13556 7.63632 7.85237C7.82495 7.76836 8.04531 7.80272 8.1994 7.94018C8.35349 8.07763 8.41269 8.29265 8.35069 8.4896C8.17683 9.04186 8.22822 9.27128 8.26929 9.37346C8.29316 9.43281 8.32874 9.48766 8.38866 9.56228C8.39893 9.57508 8.41339 9.59235 8.4305 9.6128C8.48172 9.67399 8.55678 9.76366 8.61494 9.84707C9.15478 10.5299 9.2986 11.2399 9.25662 11.8545C9.64189 11.553 9.92326 11.2331 10.1246 10.9086C10.4869 10.3246 10.6135 9.68774 10.5801 9.03851C10.5329 8.12063 10.1655 7.19647 9.71826 6.4404C9.48965 6.78506 9.16023 7.01865 8.80895 7.12278C8.48506 7.21879 8.09695 7.21364 7.77832 7.00856C7.42502 6.78118 7.27217 6.38328 7.32945 5.95024C7.50844 4.59714 7.20954 3.63625 6.78109 2.95812C6.5948 2.66326 6.38 2.41573 6.1605 2.21Z"
                                        fill="white"
                                        />
                                  </svg>
                               </span>
                            </span>
                            <div
                               class="absolute bottom-7 left-0 right-0 mx-auto flex w-full items-center justify-center space-x-3"
                               >
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M10.4343 13.4437C9.3093 13.4437 8.4093 14.3437 8.4093 15.4687C8.4093 16.5937 9.3093 17.4937 10.4343 17.4937C11.5593 17.4937 12.4593 16.5937 12.4593 15.4687C12.4593 14.3719 11.5312 13.4437 10.4343 13.4437ZM10.4343 16.2562C10.0124 16.2562 9.67493 15.9187 9.67493 15.4968C9.67493 15.075 10.0124 14.7375 10.4343 14.7375C10.8562 14.7375 11.1937 15.075 11.1937 15.4968C11.1937 15.8906 10.8281 16.2562 10.4343 16.2562Z" 
                                           />
                                        <path 
                                           d="M5.09055 13.4437C3.96555 13.4437 3.06555 14.3437 3.06555 15.4687C3.06555 16.5937 3.96555 17.4937 5.09055 17.4937C6.21555 17.4937 7.11555 16.5937 7.11555 15.4687C7.11555 14.3719 6.18743 13.4437 5.09055 13.4437ZM5.09055 16.2562C4.66868 16.2562 4.33118 15.9187 4.33118 15.4968C4.33118 15.075 4.66868 14.7375 5.09055 14.7375C5.51243 14.7375 5.84993 15.075 5.84993 15.4968C5.84993 15.8906 5.51243 16.2562 5.09055 16.2562Z" 
                                           />
                                        <path 
                                           d="M16.3687 0.506226H14.85C14.175 0.506226 13.5843 1.01248 13.5 1.68748L13.05 4.92185H1.9406C1.65935 4.92185 1.3781 5.06248 1.18122 5.28748C1.01247 5.51248 0.928096 5.82185 1.01247 6.1031C1.01247 6.13123 1.01247 6.13123 1.01247 6.15935L2.75622 11.4187C2.86872 11.8125 3.23435 12.0937 3.65622 12.0937H11.4187C12.4593 12.0937 13.3593 11.3062 13.5 10.2656L14.6812 1.85623C14.6812 1.79998 14.7375 1.77185 14.7937 1.77185H16.3125C16.65 1.77185 16.9593 1.4906 16.9593 1.12498C16.9593 0.759351 16.7062 0.506226 16.3687 0.506226ZM12.2906 10.0687C12.2343 10.4906 11.8687 10.8 11.4468 10.8H3.90935L2.3906 6.18748H12.8531L12.2906 10.0687Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Add to Cart</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M9.00002 6.66565C7.70627 6.66565 6.66565 7.70627 6.66565 9.00002C6.66565 10.2938 7.70627 11.3344 9.00002 11.3344C10.2938 11.3344 11.3344 10.2938 11.3344 9.00002C11.3344 7.70627 10.2938 6.66565 9.00002 6.66565ZM9.00002 10.0688C8.4094 10.0688 7.93127 9.59065 7.93127 9.00002C7.93127 8.4094 8.4094 7.93127 9.00002 7.93127C9.59065 7.93127 10.0688 8.4094 10.0688 9.00002C10.0688 9.59065 9.59065 10.0688 9.00002 10.0688Z" 
                                           />
                                        <path 
                                           d="M17.2125 8.01567C15.6094 5.62505 13.3875 3.2063 9 3.2063C4.6125 3.2063 2.39062 5.62505 0.7875 8.01567C0.39375 8.6063 0.39375 9.3938 0.7875 9.98442C2.39062 12.3469 4.6125 14.7938 9 14.7938C13.3875 14.7938 15.6094 12.3469 17.2125 9.98442C17.6063 9.36567 17.6063 8.6063 17.2125 8.01567ZM16.1719 9.2813C14.1187 12.2907 12.0656 13.5282 9 13.5282C5.93438 13.5282 3.88125 12.2907 1.82812 9.2813C1.71563 9.11255 1.71563 8.88755 1.82812 8.7188C3.88125 5.70942 5.93438 4.47192 9 4.47192C12.0656 4.47192 14.1187 5.70942 16.1719 8.7188C16.2563 8.88755 16.2563 9.11255 16.1719 9.2813Z" 
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Quick View</span>
                                  </div>
                               </div>
                               <div class="group relative">
                                  <button
                                     class="mx-auto mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white text-center drop-shadow-three hover:bg-primary hover:text-white"
                                     >
                                     <svg 
                                        width="18" 
                                        height="18" 
                                        viewBox="0 0 18 18" 
                                        fill="none" 
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <path 
                                           d="M8.99998 16.5938C8.63435 16.5938 8.26873 16.4531 7.98748 16.2C7.3406 15.6375 6.74998 15.1313 6.2156 14.6813C4.61248 13.3031 3.20623 12.15 2.22185 10.9688C1.06873 9.5625 0.506226 8.24062 0.506226 6.75C0.506226 5.31562 1.01248 3.96563 1.91248 2.98125C2.8406 1.96875 4.13435 1.40625 5.51248 1.40625C6.5531 1.40625 7.53748 1.74375 8.38123 2.39062C8.60623 2.55938 8.8031 2.72812 8.99998 2.95312C9.19685 2.75625 9.39373 2.55938 9.61873 2.39062C10.4625 1.74375 11.4187 1.40625 12.4875 1.40625C13.8937 1.40625 15.1594 1.96875 16.0875 2.98125C17.0156 3.96563 17.4937 5.31562 17.4937 6.75C17.4937 8.24062 16.9594 9.5625 15.7781 10.9688C14.7937 12.15 13.3875 13.3313 11.7844 14.6813C11.25 15.1313 10.6312 15.6656 9.98435 16.2C9.73123 16.4531 9.3656 16.5938 8.99998 16.5938ZM5.51248 2.67188C4.47185 2.67188 3.5156 3.09375 2.81248 3.825C2.13748 4.58438 1.77185 5.625 1.77185 6.75C1.77185 7.90312 2.22185 9 3.1781 10.1531C4.10623 11.25 5.45623 12.4031 7.0031 13.725C7.53748 14.175 8.15623 14.7094 8.8031 15.2719C8.9156 15.3562 9.08435 15.3562 9.19685 15.2719C9.84373 14.7094 10.4625 14.2031 10.9969 13.725C12.5719 12.375 13.9219 11.25 14.8219 10.1531C15.7781 9 16.2281 7.90312 16.2281 6.75C16.2281 5.625 15.8344 4.58437 15.1594 3.85312C14.4562 3.09375 13.5 2.67188 12.4875 2.67188C11.7281 2.67188 11.025 2.925 10.4062 3.375C10.1531 3.57188 9.9281 3.79688 9.7031 4.05C9.53435 4.24687 9.28123 4.3875 8.99998 4.3875C8.71873 4.3875 8.49373 4.275 8.29685 4.05C8.07185 3.79688 7.84685 3.57188 7.59373 3.375C7.0031 2.925 6.29998 2.67188 5.51248 2.67188Z"
                                           />
                                     </svg>
                                  </button>
                                  <div
                                     class="absolute -top-full left-1/2 z-50 mb-10 -translate-x-1/2 whitespace-nowrap rounded-[5px] bg-white dark:bg-dark-2 px-[14px] py-[5px] text-sm text-dark dark:text-white shadow-1 dark:shadow-none opacity-0 group-hover:opacity-100"
                                     >
                                     <div
                                        class="absolute -bottom-1 left-1/2 h-3 w-3 -translate-x-1/2 rotate-45 bg-white dark:bg-dark-2"
                                        ></div>
                                     <span>Favorite</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="text-center">
                            <h3>
                               <a
                                  href="javascript:void(0)"
                                  class="text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl mb-[5px]"
                                  >
                               Man's Black Shirt
                               </a>
                            </h3>
                            <p class="text-base font-medium text-body-color dark:text-dark-6">$18.00</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div
                   class="absolute -left-4 -right-4 top-1/2 flex -translate-y-16 items-center justify-between"
                   >
                   <button
                      class="mx-2 flex h-11 w-11 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white shadow-input transition-all hover:bg-primary hover:text-white"
                      @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
                      >
                      <svg 
                         width="20" 
                         height="20" 
                         viewBox="0 0 20 20" 
                         fill="none" 
                         xmlns="http://www.w3.org/2000/svg"
                         class="fill-current"
                         >
                         <path 
                            d="M17.5 9.3125H4.15625L9.46875 3.90625C9.75 3.625 9.75 3.1875 9.46875 2.90625C9.1875 2.625 8.75 2.625 8.46875 2.90625L2 9.46875C1.71875 9.75 1.71875 10.1875 2 10.4688L8.46875 17.0312C8.59375 17.1563 8.78125 17.25 8.96875 17.25C9.15625 17.25 9.3125 17.1875 9.46875 17.0625C9.75 16.7812 9.75 16.3438 9.46875 16.0625L4.1875 10.7187H17.5C17.875 10.7187 18.1875 10.4062 18.1875 10.0312C18.1875 9.625 17.875 9.3125 17.5 9.3125Z" 
                            />
                      </svg>
                   </button>
                   <button
                      class="mx-2 flex h-11 w-11 items-center justify-center rounded-full bg-white dark:bg-dark-2 text-dark dark:text-white shadow-input transition-all hover:bg-primary hover:text-white"
                      @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
                      >
                      <svg 
                         width="20" 
                         height="20" 
                         viewBox="0 0 20 20" 
                         fill="none" 
                         xmlns="http://www.w3.org/2000/svg"
                         class="fill-current"
                         >
                         <path 
                            d="M18 9.5L11.5312 2.9375C11.25 2.65625 10.8125 2.65625 10.5312 2.9375C10.25 3.21875 10.25 3.65625 10.5312 3.9375L15.7812 9.28125H2.5C2.125 9.28125 1.8125 9.59375 1.8125 9.96875C1.8125 10.3437 2.125 10.6875 2.5 10.6875H15.8437L10.5312 16.0938C10.25 16.375 10.25 16.8125 10.5312 17.0938C10.6562 17.2188 10.8437 17.2813 11.0312 17.2813C11.2187 17.2813 11.4062 17.2188 11.5312 17.0625L18 10.5C18.2812 10.2187 18.2812 9.78125 18 9.5Z" 
                            />
                      </svg>
                   </button>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- ====== Products Carousel Section End -->
 <!-- ====== Products Carousel Section End -->