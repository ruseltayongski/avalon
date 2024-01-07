@section('css')
<style>
   .bacground-image-hero { 
      background: url("{{ asset('/images/v2.png') }}") no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 100% 100%;
      height: 100vh;
   }
   
   .img-icon {
      width: 70%;
      height: 70%;
   }

   .avalon-logo {
      width: 40%;
      height: 40%;
   }

   #cart-badge {
      font-size:5pt;
      padding:3px 5px;
      top:0;
      right:0;
   }

   .icon-bottom {
      bottom: 0;
   }

   .icon-bottom-padding {
      bottom: 0;
      padding-bottom: 3rem;
   }

   .flex a img {
      transition: transform 0.3s ease;
   }

   .img-up:hover img {
      transform: translateY(-55px);
   }

   .flex a:hover {
      cursor: pointer;
      filter: brightness(1.2);
   }

   .flex:hover .img-description {
      opacity: 1;
      color: white;
      margin-top: 20px;
   }

   .img-description {
      opacity: 0;
      position: absolute;
      /* transition: opacity 0.5s ease-in-out; */
   }
   
   .flex a:not(:hover) .img-description {
      opacity: 0;
   }

   /* WAVES */
   .wave-container {
      position: relative;
      background: #011523;
      /* min-height: 2vh; */
      /* padding: 20px 50px; */
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      top:0;
      margin-top: -1px;
   }

   @media screen and (max-width: 430px) {
      .wave-container {
         margin-bottom: 30px;
      }
   }
   
   .wave {
      position: absolute;
      top: 0px;
      margin-top: -10px;
      left: 0;
      width: 100%;
      height: 100px;
      /* background: url("https://i.imgur.com/ZAts69f.png"); */
      background: url("{{ asset('images/wave1.png') }}");
      background-size: 1000px 100px;
   }
   
   .wave#wave1 {
      z-index: 2;
      opacity: 1;
      bottom: 0;
      animation: animateWaves 6s linear infinite;
   }
   
   .wave#wave2 {
      z-index: 1;
      opacity: 0.5;
      bottom: 10px;
      animation: animate 6s linear infinite !important;
   }
   
   .wave#wave3 {
      z-index: 2;
      opacity: 0.2;
      bottom: 15px;
      animation: animateWaves 5s linear infinite;
   }
   
   .wave#wave4 {
      z-index: 1;
      opacity: 0.7;
      bottom: 20px;
      animation: animate 5s linear infinite;
   }
   
   @keyframes animateWaves {
      0% {
         background-position-x: 1000px;
      }
      100% {
         background-positon-x: 0px;
      }
   }
   
   @keyframes animate {
      0% {
         background-position-x: -1000px;
      }
      100% {
         background-positon-x: 0px;
      }
   }

   .newsletter-bg {
      background: url("{{ asset('/images/newsletter.png') }}") no-repeat center; 
      background-size: 100% 100%;
   }

   .avalon-logo-footer {
      background: url("{{ asset('/images/avalonlogo.png') }}") no-repeat center; 
      width: 100%;
      height: auto;
   }

   /* .media-section {
      border-radius: 276px 0 250px 0;
   } */

   /* .media-section {
      WAVE FOOTER
   } */
   .wave-container-footer {
      position: relative;
      background: #011523;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-top: 1px;
      /* margin-top:35%; */
   }

   /* @media screen and (max-width: 430px) {
      .wave-container-footer {
         margin-bottom: 30px;
      }
   } */
   
   .wave-footer {
      position: absolute;
      top: 0px;
      margin-top: -100px;
      left: 0;
      width: 100%;
      height: 100px;
      background: url("{{ asset('images/wave_footer.png') }}");
      background-size: 1000px 100px;
   }
   
   .wave-footer#wave1 {
      z-index: 2;
      opacity: 1;
      bottom: 0;
      animation: animateWaves 6s linear infinite;
   }
   
   .wave-footer#wave2 {
      z-index: 1;
      opacity: 0.5;
      bottom: 10px;
      animation: animate 6s linear infinite !important;
   }
   
   .wave-footer#wave3 {
      z-index: 2;
      opacity: 0.2;
      bottom: 15px;
      animation: animateWaves 5s linear infinite;
   }
   
   .wave-footer#wave4 {
      z-index: 1;
      opacity: 0.7;
      bottom: 20px;
      animation: animate 5s linear infinite;
   }
   
   .bacground-our-services { 
      background: url("{{ asset('/images/our_services.png') }}") no-repeat center center ; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 80% 100%;
   }

   @media (min-width: 390px) and (max-width: 430px) {
      .bacground-our-services {
         background-size: cover;
      }
   }

   #bacground-our-services-wave1 {
      background: url("{{ asset('/images/our_services.png') }}") no-repeat center center ; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 80% 100%;
      
      bottom: 0;
      animation: animateBubbles 4s linear infinite;
   }

   @media (min-width: 390px) and (max-width: 430px) {
      #bacground-our-services-wave1 {
         background-size: cover;
      }
   }

   #bacground-our-services-wave2 {
      background: url("{{ asset('/images/our_services.png') }}") no-repeat center center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 80% 100%;

      bottom: 0;
      animation: bubbles 4s linear infinite;
   }

   @media (min-width: 390px) and (max-width: 430px) {
      #bacground-our-services-wave2 {
         background-size: cover;
      }
   }


   #bacground-our-services-wave3 {
      background: url("{{ asset('/images/our_services.png') }}") no-repeat center center ; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 80% 100%;
      
      bottom: 0;
      animation: animateBubbles 3s linear infinite;
   }

   @media (min-width: 390px) and (max-width: 430px) {
      #bacground-our-services-wave3 {
         background-size: cover;
      }
   }

   #bacground-our-services-wave4 {
      background: url("{{ asset('/images/our_services.png') }}") no-repeat center center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 80% 100%;

      bottom: 0;
      animation: bubbles 3s linear infinite;
   }

   @media (min-width: 390px) and (max-width: 430px) {
      #bacground-our-services-wave4 {
         background-size: cover;
      }
   }

   @keyframes animateBubbles {
      0% {
         transform: translateY(0) scale(1);
         opacity: 1;
      }
      50% {
         transform: translateY(20px) scale(1.05);
         opacity: 0.5;
      }
      100% {
         transform: translateY(50px) scale(1);
         opacity: 0;
      }
   }
   
   @keyframes bubbles {
      0% {
         transform: translateY(0) scale(1);
         opacity: 1;
      }
      50% {
         transform: translateY(-20px) scale(1.05);
         opacity: 0.5;
      }
      100% {
         transform: translateY(-50px) scale(1);
         opacity: 0;
      }
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
   <div class="container mx-auto lg:px-24">
      <div class="relative flex items-center justify-between -mx-4 ">
         <div class="max-w-full px-4 w-60">
            <a href="javascript:void(0)" class="block w-full">
               <img
                  src="{{ asset('images/avalon-logo.png') }}"
                  alt="logo"
                  class="avalon-logo mt-6"
               />
            </a>
         </div>
         <div class=" flex items-center justify-between w-full -mt-4">
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
                  <ul class="block lg:flex ">
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-dark lg:ml-10 lg:inline-flex lg:text-white"
                           >
                        Home
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-dark lg:ml-10 lg:inline-flex lg:text-white"
                           >
                        About Us
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-dark lg:ml-10 lg:inline-flex lg:text-white"
                           >
                        Services
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
               <div class="flex items-center">
                  <div class="flex h-8 min-w-[50px] items-center justify-center rounded-full text-white relative">
                     <section x-data="{modalOpen: false}">
                        <button type="button" @click="modalOpen = true" onclick="triggerModal()">
                           <?xml version="1.0" encoding="utf-8"?>
                           <svg width="25" height="25" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <defs>
                                 <clipPath id="clip-cart">
                                    <rect width="96" height="96"/>
                                 </clipPath>
                              </defs>
                              <g id="cart" clip-path="url(#clip-cart)">
                                 <g id="pills" transform="translate(0 -116)">
                                    <g id="Group_154" data-name="Group 154">
                                    <path id="Path_188" data-name="Path 188" d="M92,132H84.619a8.361,8.361,0,0,0-7.956,5.47L63.712,174.53A8.364,8.364,0,0,1,55.755,180H21.321a8.4,8.4,0,0,1-7.773-4.994l-8.925-21C2.387,148.746,6.445,143,12.4,143H57" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"/>
                                    <circle id="Ellipse_335" data-name="Ellipse 335" cx="4.5" cy="4.5" r="4.5" transform="translate(20 187)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"/>
                                    <circle id="Ellipse_336" data-name="Ellipse 336" cx="4.5" cy="4.5" r="4.5" transform="translate(49 187)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"/>
                                    </g>
                                 </g>
                              </g>
                           </svg>
                           <span class="inline-flex items-center justify-center leading-none bg-dark rounded-full absolute z-1" id="cart-badge">3</span>
                        </button>
                        @include('layouts._cart')  
                     </section>
                     {{-- <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        class="fill-current"
                        >
                        <path
                           d="M15.3437 19.156C12.7812 19.156 9.09373 17.3123 5.71873 14.0935C1.12498 9.7185 -0.843773 4.8435 1.15623 2.7185C1.24998 2.62475 1.34373 2.56225 1.46873 2.49975L4.09373 1.031C4.68748 0.718502 5.43748 0.874752 5.81248 1.406L7.71873 4.12475C7.90623 4.406 7.99998 4.74975 7.93748 5.06225C7.87498 5.406 7.68748 5.68725 7.40623 5.87475L6.24998 6.62475C6.18748 6.656 6.18748 6.68725 6.18748 6.7185C6.18748 6.74975 6.18748 6.781 6.21873 6.81225C7.06248 8.06225 9.46873 11.2498 13.2812 13.531C13.375 13.5935 13.5312 13.5623 13.5937 13.4998L14.4062 12.406C14.8125 11.8435 15.5937 11.7185 16.1875 12.0935L19.0312 13.906C19.625 14.281 19.8125 15.031 19.4375 15.6248L17.875 18.1248C17.8125 18.2498 17.7187 18.3435 17.625 18.406C17.0312 18.9373 16.25 19.156 15.3437 19.156ZM4.74998 1.93725C4.71873 1.93725 4.68748 1.93725 4.62498 1.9685L1.99998 3.43725C1.96873 3.4685 1.96873 3.4685 1.93748 3.4685C0.624977 4.87475 2.12498 9.156 6.49998 13.3123C10.875 17.4685 15.4062 18.906 16.9062 17.6248C16.9062 17.6248 16.9062 17.6248 16.9375 17.5935L18.5 15.0935C18.5312 15.031 18.5312 14.9373 18.4375 14.8748L15.5937 13.0623C15.5 12.9998 15.3437 13.031 15.2812 13.0935L14.4687 14.1873C14.0625 14.7185 13.3125 14.8748 12.7187 14.531C8.68748 12.1248 6.18748 8.781 5.31248 7.43725C5.12498 7.156 5.06248 6.8435 5.12498 6.49975C5.18748 6.18725 5.37498 5.87475 5.65623 5.7185L6.81248 4.93725C6.87498 4.906 6.87498 4.87475 6.87498 4.8435C6.87498 4.81225 6.87498 4.781 6.84373 4.7185L4.93748 1.99975C4.90623 1.9685 4.81248 1.93725 4.74998 1.93725Z"
                           />
                     </svg> --}}
                  </div>
                  <div class="ml-4 w-full whitespace-nowrap">
                     <a
                        href="javascript:void(0)"
                        class="py-3 text-base font-medium bg-white rounded-md shadow-1 dark:shadow-none px-7 text-dark hover:bg-gray-2 hover:text-body-color"
                        >
                        Contact Us
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- ====== Navbar Section End -->

<!-- ====== Hero Section Start 768 820-->
<div 
    x-data="{ isMobile: window.innerWidth <= 1024 }"
    x-init="() => {
         console.log(window.innerWidth);
         window.addEventListener('resize', () => {
               isMobile = window.innerWidth <= 1024;
               console.log(window.innerWidth);
         });
    }"
    :class="{ 'relative z-10 bg-cover bg-center bg-no-repeat pt-[120px] pb-20 md:pt-[150px]': isMobile, 'z-10 relative bacground-image-hero': !isMobile }"
    :style="isMobile ? 'background-image: url({{ asset('/images/banner.jpg') }})' : ''">
    <div class="container mx-auto h-full lg:flex justify-center items-center xl:pb-[210px] 2xl:pb-[370px]">
        <div class="flex flex-wrap w-full justify-center ">
            {{-- <div class="w-full px-4 lg:w-1/2"> --}}
            <div class="p-4">
                {{-- <div class="mb-16 max-w-[500px] lg:mb-0"> --}}
                <div class="animate-fade-up">   
                <h1 class="mb-12 text-3xl font-bold !leading-[1.208] text-white sm:text-4xl lg:text-[42px] 2xl:text-6xl">
                    Empowering your<br>            
                    business presence.
                </h1>
                <ul class="flex flex-wrap items-center justify-center lg:pr-6">
                    <li>
                        <a
                           href="javascript:void(0)"
                           class="bg-dark dark:bg-dark-2 border-dark dark:border-dark-2 border rounded-md inline-flex items-center justify-center py-2 px-4 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
                        >
                           Know More
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </div>

        <!-- ====== Horizontal Menu Section Start -->
        {{-- <header x-data="{navbarOpen: false}" class="icon-margin-top -mb-10 "> --}}
        <header x-data="{navbarOpen: false}" :class="{ 'icon-bottom-padding lg:absolute' : window.innerWidth !== 1024,'icon-bottom lg:absolute': window.innerWidth === 1024 }">
            <div class="mx-auto" :class="{ 'mt-12': isMobile }">
                <div class="flex items-center justify-center ">
                    <div class="flex w-full ">
                        <div class="flex w-full ">
                            <div @click.outside="navbarOpen = false" class="group relative md:hidden sm:block">
                                <button @click="navbarOpen = !navbarOpen" class="flex h-9 w-9 items-center justify-center rounded bg-white/[0.08] text-white ">
                                <svg 
                                    width="21" 
                                    height="20" 
                                    viewBox="0 0 21 20" 
                                    fill="none" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    class="fill-current"
                                    >
                                    <g clip-path="url(#clip0_1052_7440)">
                                        <path 
                                            d="M19.3854 9.3125H1.88538C1.51038 9.3125 1.16663 9.625 1.16663 10.0312C1.16663 10.4062 1.47913 10.75 1.88538 10.75H19.3854C19.7604 10.75 20.1041 10.4375 20.1041 10.0312C20.1041 9.625 19.7604 9.3125 19.3854 9.3125Z" 
                                            />
                                        <path 
                                            d="M19.3854 14.625H1.88538C1.51038 14.625 1.16663 14.9375 1.16663 15.3437C1.16663 15.75 1.47913 16.0625 1.88538 16.0625H19.3854C19.7604 16.0625 20.1041 15.75 20.1041 15.3437C20.1041 14.9375 19.7604 14.625 19.3854 14.625Z" 
                                            />
                                        <path 
                                            d="M1.88538 5.375H19.3854C19.7604 5.375 20.1041 5.0625 20.1041 4.65625C20.1041 4.25 19.7916 3.9375 19.3854 3.9375H1.88538C1.51038 3.9375 1.16663 4.25 1.16663 4.65625C1.16663 5.0625 1.51038 5.375 1.88538 5.375Z" 
                                            />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1052_7440">
                                            <rect width="20" height="20" fill="white" transform="translate(0.635376)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                </button>
                                <nav
                                :class="navbarOpen ? 'visible opacity-100 top-full' : 'invisible opacity-0 top-[120%]'"
                                class="absolute left-0 mt-2 w-[250px] rounded bg-[#1d5b80] shadow-card-2 duration-200"
                                >
                                <ul class="space-y-5 py-6 px-5">
                                    @for ($i=0; $i<12; $i++)
                                    <li>
                                        <a
                                            href="javascript:void(0)"
                                            class="relative block text-sm font-medium text-white opacity-70 duration-200 hover:opacity-100"
                                            >
                                            iconmobile{{ $i }}
                                        </a>
                                    </li>
                                    @endfor
                                </ul>
                                </nav>
                            </div>
                            <div class="hidden md:block w-full mt-12 xl:px-24">
                                <nav>
                                {{-- <ul class="flex space-x-[25px] justify-center" :class="{ 'space-x-2': isMobile }"> --}}
                                <ul :class="{'flex space-x-[25px] justify-center ': !isMobile, 'flex space-x-2 justify-center': isMobile}">
                                    <?php 
                                       $delay = 0;
                                       $icon_images = [
                                          [
                                             'filepath' => 'books.png',
                                             'filename' => 'Books'
                                          ],
                                          [
                                             'filepath' => 'volume.png',
                                             'filename' => 'Volume'
                                          ],
                                          [
                                             'filepath' => 'global.png',
                                             'filename' => 'Global'
                                          ],
                                          [
                                             'filepath' => 'code.png',
                                             'filename' => 'Code'
                                          ],
                                          [
                                             'filepath' => 'megaphone.png',
                                             'filename' => 'Megaphone'
                                          ],
                                          [
                                             'filepath' => 'volume.png',
                                             'filename' => 'Volume'
                                          ],
                                          [
                                             'filepath' => 'headset.png',
                                             'filename' => 'Headset'
                                          ],
                                          [
                                             'filepath' => 'youtube.png',
                                             'filename' => 'Youtube'
                                          ],
                                          [
                                             'filepath' => 'head-idea.png',
                                             'filename' => 'Idea'
                                          ],
                                          [
                                             'filepath' => 'building.png',
                                             'filename' => 'Building'
                                          ],
                                          [
                                             'filepath' => 'video-alt.png',
                                             'filename' => 'Video'
                                          ],
                                          [
                                             'filepath' => 'video-alt-1.png',
                                             'filename' => 'Video1'
                                          ]
                                          ,[
                                             'filepath' => 'video-camera.png',
                                             'filename' => 'Camera'
                                          ],
                                       ];
                                    ?>
                                    {{-- @for ($i=0; $i<13; $i++) --}}
                                    @foreach($icon_images as $row)
                                    <li class="fade-right animate-fade-right animate-delay-{{ $delay }} ">
                                       <div class="relative ">
                                          <a href="javascript:void(0)" class="flex justify-center items-center img-up text-base font-medium text-white dark:text-dark-6 hover:text-primary">
                                             {{-- <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                                <g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/> </g>
                                             </svg> --}}
                                             <img src="{{ asset('images/page1_icon').'/'.$row['filepath'] }}" class="img-icon" alt="img-icon">
                                             <p class="img-description">{{ $row['filename'] }}</p>
                                          </a>
                                       </div>
                                    </li>
                                    <?php $delay += 25; ?>
                                    @endforeach
                                </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ====== Horizontal Menu Section End -->
    </div>
</div>
<!-- ====== Hero Section End -->

<div class="wave-container">
	<div class="waves">
		<div class="wave" id="wave1"></div>
		<div class="wave" id="wave2"></div>
		<div class="wave" id="wave3"></div>
		<div class="wave" id="wave4"></div>
	</div>
</div>

<!-- ====== About Section Start -->
<section class="overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
   <div class="container mx-auto">
      <div class="flex flex-wrap items-center justify-between -mx-4">
         <div class="w-full px-4 lg:w-6/12" id="whatWeDoImage">
            <div class="relative mx-auto flex h-[500px] max-w-[440px]">
               <div class="absolute left-0 z-30 mr-14 max-w-[270px] rounded-lg">
                  <img
                     src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-05/image-01.jpg"
                     alt="about image"
                     class="w-full rounded-lg"
                     />
                  <span class="absolute top-6 -right-14 -z-10">
                     <svg
                        width="61"
                        height="47"
                        viewBox="0 0 61 47"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle
                           cx="15.6667"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 15.6667 30.9998)"
                           fill="#090E34"
                           />
                        <circle
                           cx="44.6667"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 44.6667 30.9998)"
                           fill="#090E34"
                           />
                        <circle
                           cx="1.66667"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 1.66667 30.9998)"
                           fill="#090E34"
                           />
                        <circle
                           cx="29.9999"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 29.9999 30.9998)"
                           fill="#090E34"
                           />
                        <circle
                           cx="58.9999"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 58.9999 30.9998)"
                           fill="#090E34"
                           />
                        <circle
                           cx="15.6667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 15.6667 16.3333)"
                           fill="#090E34"
                           />
                        <circle
                           cx="44.6667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 44.6667 16.3333)"
                           fill="#090E34"
                           />
                        <circle
                           cx="1.66667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 1.66667 16.3333)"
                           fill="#090E34"
                           />
                        <circle
                           cx="29.9999"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 29.9999 16.3333)"
                           fill="#090E34"
                           />
                        <circle
                           cx="58.9999"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 58.9999 16.3333)"
                           fill="#090E34"
                           />
                        <circle
                           cx="15.6667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 15.6667 45.3336)"
                           fill="#090E34"
                           />
                        <circle
                           cx="15.6667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 15.6667 1.66683)"
                           fill="#090E34"
                           />
                        <circle
                           cx="44.6667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 44.6667 45.3336)"
                           fill="#090E34"
                           />
                        <circle
                           cx="44.6667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 44.6667 1.66683)"
                           fill="#090E34"
                           />
                        <circle
                           cx="1.66667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 1.66667 45.3336)"
                           fill="##090E34"
                           />
                        <circle
                           cx="1.66667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 1.66667 1.66683)"
                           fill="#090E34"
                           />
                        <circle
                           cx="29.9999"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 29.9999 45.3336)"
                           fill="#090E34"
                           />
                        <circle
                           cx="29.9999"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 29.9999 1.66683)"
                           fill="#090E34"
                           />
                        <circle
                           cx="58.9999"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 58.9999 45.3336)"
                           fill="#090E34"
                           />
                        <circle
                           cx="58.9999"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 58.9999 1.66683)"
                           fill="#090E34"
                           />
                     </svg>
                  </span>
                  <span class="absolute -left-36 -bottom-20 z-[-1] -sm:left-72">
                     <svg xmlns="http://www.w3.org/2000/svg" width="757" height="450" viewBox="0 0 757 450" fill="none">
                        <g filter="url(#filter0_d)">
                        <path d="M 15 419 C 280 458 277 379 314 345 C 361 254 331 252 401 144 C 492 33 606.689 7 740 7" stroke="#090E34" stroke-width="10" stroke-linecap="round"/>
                        </g>
                        <path d="M 15 419 C 280 458 277 379 314 345 C 361 254 331 252 401 144 C 492 33 606.689 7 740 7" stroke="#090E34" stroke-width="12" stroke-linecap="round"/>
                     </svg>   
                  </span>
               </div>
               <div
                  class="absolute right-0 top-20 z-30 ml-14 max-w-[300px] rounded-lg"
                  >
                  <img
                     src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-05/image-02.jpg"
                     alt="about image"
                     class="w-full rounded-lg"
                     />
               </div>
            </div>
         </div>
         <div class="w-full px-4 lg:w-1/2 2xl:w-5/12 opacity-0" id="whatWeDoText">
            <div class="sm:mt-10 lg:mt-0">
               <span
                  class="block mb-2 text-lg font-semibold uppercase text-dark"
                  >
               WHAT WE ACHIEVED
               </span>
               <h2
                  class="mb-11 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-4xl sm:leading-tight md:text-[40px]/[48px]"
                  >
                  We grow your business with full potential by the innovation.
               </h2>
               <h3 class="mb-4 text-lg font-bold text-dark dark:text-white">
                  Company Benefits
               </h3>
               <p class="text-base text-body-color dark:text-dark-6 mb-9">
                  Proin gravida nibh vel velit auctor aliquet. aks Aenean
                  sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                  ipsum, nec sagittis sem, tidiomic consequat ipsum.
               </p>
               <h3 class="mb-4 text-lg font-bold text-dark dark:text-white">
                  Competitive Salary
               </h3>
               <p class="text-base text-body-color dark:text-dark-6">
                  Proin gravida nibh vel velit auctor aliquet. aks Aenean
                  sollicitudin, lorem quis bibendum auctor.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== About Section End -->


<div class="flex justify-center items-center  py-20 overflow-hidden" x-data="{ isMobile: window.innerWidth <= 600 }">
   <!-- ====== Services Section Start -->
   <section class="relative pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark bacground-our-services w-full z-40">
      <span class="absolute -z-10 h-full w-full" id="bacground-our-services-wave1"></span>
      <span class="absolute -z-10 h-full w-full" id="bacground-our-services-wave2"></span>
      <span class="absolute -z-10 h-full w-full" id="bacground-our-services-wave3"></span>
      <span class="absolute -z-10 h-full w-full" id="bacground-our-services-wave4"></span>
      <div class="container mx-auto">
         <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
               <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                  {{-- <span class="block mb-2 text-lg font-semibold text-primary">What we Serve</span> --}}
                  <h2
                     class="text-white dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
                     >
                     Our Services
                  </h2>
                  <a
                     href="javascript:void(0)"
                     class="bg-dark dark:bg-dark-2 dark:border-dark-2 border border-white rounded-md inline-flex items-center 
                     justify-center py-3 px-5 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color 
                     disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
                     >
                     Explore Services
                     <span class="pl-[10px]">
                        <svg viewBox="0 0 40 40" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" 
                           xmlns:xlink="http://www.w3.org/1999/xlink" 
                           xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000">
                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                           <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                           <g id="SVGRepo_iconCarrier">  <defs> </defs> 
                              <g id="Page-1" stroke="none" stroke-width="1" 
                              fill="none" fill-rule="evenodd" sketch:type="MSPage"> 
                              <g id="Icon-Set" sketch:type="MSLayerGroup" 
                              transform="translate(-464.000000, -983.000000)" fill="#ffffff">
                              <path d="M494,1011 C494,1012.1 493.104,1013 492,1013 L468,1013 C466.896,1013 466,1012.1 466,1011 L466,987 C466,
                              985.896 466.896,985 468,985 L492,985 C493.104,985 494,
                              985.896 494,987 L494,1011 L494,1011 Z M492,983 L468,
                              983 C465.791,983 464,984.791 464,987 L464,1011 C464,
                              1013.21 465.791,1015 468,1015 L492,1015 C494.209,1015 496,1013.21 496,
                              1011 L496,987 C496,984.791 494.209,983 492,983 L492,983 Z M487.535,
                              998.121 L481.879,992.465 C481.488,992.074 480.855,992.074 480.465,
                              992.465 C480.074,992.854 480.074,993.488 480.465,993.879 L484.586,998 L474,
                              998 C473.447,998 473,998.447 473,999 C473,999.552 473.447,1000 
                              474,1000 L484.586,1000 L480.465,1004.12 C480.074,1004.51 480.074,
                              1005.14 480.465,1005.54 C480.855,1005.93 481.488,1005.93 481.879,
                              1005.54 L487.535,999.879 C487.775,999.639 487.85,999.311 487.795,
                              999 C487.85,998.689 487.775,998.361 487.535,998.121 L487.535,998.121 Z" 
                              id="arrow-right-square" sketch:type="MSShapeGroup"> </path> 
                        </g> </g> </g></svg>
                     </span>
                  </a>
               </div>
            </div>
         </div>
         <?php $slides = [1,2,3,4,5,6,7,8,9,10]; ?>
         <div x-data="{ slides: {{ '['.implode(', ', $slides).']' }} }">  
            <div class="relative flex justify-center ">
               <div class="relative w-full ">
                  <div
                     class="bgflex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] 
                     sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] "
                     x-ref="carousel"
                     id="carousel_control">
                     <!-- Carousel Items -->
                     <?php $count = 0; ?>
                     @for($i = 1; $i <= count($slides); $i++)
                        <?php
                           if($count == 3){
                              $count = 0;
                           }
                           $count++;
                        ?>
                        <div class="mx-auto h-full min-w-[300px] px-4 pb-8 xs:min-w-[360px] sm:min-w-[510px] 
                              md:min-w-[350px] lg:min-w-[465px] xl:min-w-[380px] 2xl:min-w-[440px] services-section" id="services{{ $i }}">
                           <div class="group relative shadow-xl rounded-xl border border-stroke dark:border-dark-3 
                              bg-white dark:bg-dark-2 p-10 md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]">
                              <div class="relative z-10 mx-auto mb-10">
                                 {{-- <svg
                                    width="51"
                                    height="50"
                                    viewBox="0 0 51 50"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                       d="M48.2129 27.75H46.3848C45.7676 27.75 45.2441 27.0312 45.2441 26.1875V14.375C45.2441 13.5078 45.8066 12.75 46.4473 12.75H48.2129C48.6273 12.75 49.0247 12.5853 49.3177 12.2923C49.6108 11.9993 49.7754 11.6019 49.7754 11.1875C49.7754 10.7731 49.6108 10.3756 49.3177 10.0826C49.0247 9.78958 48.6273 9.62496 48.2129 9.62496H46.4473C45.6834 9.63491 44.9363 9.85058 44.2846 10.2493C43.6329 10.648 43.1008 11.215 42.7441 11.8906H32.5176L31.0254 10.5859C29.6979 9.3961 28.1019 8.54574 26.3739 8.10763C24.6459 7.66951 22.8375 7.65669 21.1035 8.07027C16.7285 9.17964 13.8379 12.7031 12.8301 14.1562H11.2676C11.2851 12.9959 10.8506 11.8743 10.056 11.0287C9.26132 10.183 8.1689 9.6796 7.00977 9.62496H2.90039C2.48599 9.62496 2.08856 9.78958 1.79554 10.0826C1.50251 10.3756 1.33789 10.7731 1.33789 11.1875C1.33789 11.6019 1.50251 11.9993 1.79554 12.2923C2.08856 12.5853 2.48599 12.75 2.90039 12.75H6.99414C7.61133 12.75 8.13477 13.4609 8.13477 14.3125V26.1171C8.13477 26.9843 7.57227 27.75 6.93164 27.75H2.90039C2.48599 27.75 2.08856 27.9146 1.79554 28.2076C1.50251 28.5006 1.33789 28.8981 1.33789 29.3125C1.33789 29.7269 1.50251 30.1243 1.79554 30.4173C2.08856 30.7103 2.48599 30.875 2.90039 30.875H6.93164C7.69117 30.8592 8.4327 30.6409 9.07961 30.2426C9.72651 29.8443 10.2553 29.2804 10.6113 28.6093H11.1582C11.7521 28.6105 12.3357 28.7638 12.8535 29.0546C12.8139 29.2662 12.8185 29.4837 12.8669 29.6934C12.9153 29.9031 13.0065 30.1006 13.1348 30.2734L14.9395 32.6875C15.1519 32.9635 15.4479 33.1635 15.7832 33.2578L18.1738 33.8984L19.2441 36.1796C19.3399 36.3842 19.4789 36.5656 19.6516 36.7112C19.8242 36.8569 20.0264 36.9634 20.2441 37.0234L22.7598 37.7109L24.3926 40.3046C24.5986 40.6321 24.9187 40.8715 25.291 40.9765L29.6426 42.1875C29.7797 42.2275 29.9216 42.2485 30.0645 42.25C30.3204 42.2503 30.5725 42.1879 30.7986 42.068C31.0248 41.9481 31.218 41.7745 31.3613 41.5625L39.5254 29.4375C39.5971 29.3314 39.6937 29.2446 39.8067 29.1847C39.9198 29.1248 40.0459 29.0935 40.1738 29.0937H43.041C43.4169 29.6348 43.9162 30.0786 44.4977 30.3883C45.0791 30.6981 45.726 30.8649 46.3848 30.875H48.2129C48.6273 30.875 49.0247 30.7103 49.3177 30.4173C49.6108 30.1243 49.7754 29.7269 49.7754 29.3125C49.7754 28.8981 49.6108 28.5006 49.3177 28.2076C49.0247 27.9146 48.6273 27.75 48.2129 27.75ZM15.3535 15.9687C16.1895 14.789 18.4785 11.9531 21.8691 11.0937C23.1138 10.8063 24.4095 10.8238 25.646 11.1448C26.8824 11.4659 28.023 12.0808 28.9707 12.9375L32.166 15.7187C32.5549 16.0161 32.8127 16.4532 32.8848 16.9375C32.8908 17.0594 32.8718 17.1812 32.8288 17.2955C32.7857 17.4097 32.7197 17.5139 32.6348 17.6015L31.3066 19.0234C30.9691 19.3887 30.5075 19.615 30.0121 19.6584C29.5166 19.7017 29.0228 19.5589 28.627 19.2578L28.3145 19.0234C27.3474 18.2923 26.1483 17.9361 24.939 18.0209C23.7297 18.1056 22.5919 18.6255 21.7363 19.4843L14.8379 26.6171C13.7811 25.8988 12.5374 25.5051 11.2598 25.4843V17.2812H12.8223C13.318 17.2789 13.8062 17.1587 14.2463 16.9305C14.6864 16.7023 15.066 16.3726 15.3535 15.9687ZM36.9395 27.6875L29.4004 38.875L26.7129 38.0937L25.0801 35.5C24.8722 35.171 24.549 34.9314 24.1738 34.8281L21.7676 34.1718L20.6895 31.8828C20.5937 31.6782 20.4547 31.4968 20.282 31.3512C20.1094 31.2055 19.9072 31.099 19.6895 31.039L17.1191 30.3515L16.4316 29.4375L23.9473 21.625C24.2729 21.3043 24.703 21.1114 25.159 21.0813C25.615 21.0512 26.0666 21.1859 26.4316 21.4609L26.7441 21.6953C27.7581 22.4607 29.02 22.8229 30.2856 22.7118C31.5512 22.6007 32.7306 22.0241 33.5957 21.0937L34.9316 19.7343C35.3031 19.3396 35.5908 18.8738 35.7775 18.3649C35.9641 17.8561 36.0458 17.3147 36.0176 16.7734C35.9849 16.1594 35.8197 15.5597 35.5332 15.0156H42.1191V25.9531H40.1738C39.5339 25.9551 38.9042 26.1144 38.3403 26.4168C37.7763 26.7192 37.2953 27.1555 36.9395 27.6875Z"
                                       fill="#3758F9"
                                       />
                                 </svg> --}}
                                 <div class="bg-dark p-2 w-[60px] rounded-lg">
                                    @if($count == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="31">
                                       <rect width="100%" height="100%" fill="none"/>
                                       <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAfCAYAAACcai8CAAAAAXNSR0IArs4c6QAAAohJREFUWEfVmDFv00AUx9+/Qa2Eiu1KlVqoBM3GRvkGYURCQh0YmICJjYaVhWSBCbUwZiDZkGCpBIKx4gNUyYwQhKXJgrBjOhRV99C72OC4SYl8ZyucZMln+/3vd3fv7p0fKFXY8zw6Pt4gYF1fRJf0J8N7KV50xZbpeloyWe+mXv6tM8t9QEQ+MXdIqS4ODztpMcQPNKhSWwRUU0CnAeT9rktK1RGGrbghDaxhmfeIaCNvgkz6zA8xGOzoidbAjrMdjWwmvUKMgKvw/c4Q2HW5kEZNGmF+jsGgCl5crFCpJO4w66WLICiDHadKwPas00Y71ZIA7xCw9V8AHx3pEd4l4KYJ8K/V8zTf75lITGer1CbYdcV/K9NZjP/qy6MagZnWmo18wZW6J8Bt0/1XgL9fv6F7s/ayQReaDZP+T7aV/ZhdV0LiMPxmLElgkVjoHWjo5Q/vMipOMGOuC/AP01CcBo6bE/DLD+7bc5MI2DhoTAKOwZffv7Xj3xI8bES5fwELeOlnSKuvX5n5N3OrMOAY+uKLZ9l9u0jglTfD0T0ThtkXYhHA59r7VH5ao4WehcASLTrr25oM4Xz/gMpP6uS097OPaNoyD2BZXDL9EkCslwjYWqSz4qen9TIKzcZnif6t23T28ye70z8OXB9+HKdFwB3r05eHIHBNgGsEPM5D37omsAT2vLvE3LQubl/QRxBo4HVi/mpf37riRwRBJf5rNl541vHSgrJDhGErTqRUokRK7u1mbED/MYttMlU1q77cIWATvq/zcH+ApaL9WSn57ZeU1RXTg33G0RSzbzohyLybzKudAB7XgO7EaMZyNFupVJzVnIbPp7k5P/Gh3I9c8P3k+xOavwHw4CVK2+Ee+wAAAABJRU5ErkJggg==" x="0" y="0" width="44" height="31"/>
                                    </svg>
                                    @elseif($count == 2)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="31">
                                       <rect width="100%" height="100%" fill="none"/>
                                       <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAsCAYAAAD8WEF4AAAAAXNSR0IArs4c6QAAA5JJREFUWEftmD1P1WAUx8+pRhforYkLMOBNlBnCCuEykmjCookuwCcAPgGXhUkj6AQDl4nBiQQTR/ETSEwYHIw4gQkJba8hIcEec/qWvtLn1N5QEzu253meX/89r0UAADIMAxxnERDnAeAB3+vxdQiOs4Hd7o7kHHRhG43PADAqWViJLVEbbXtVdS8kXV8BxLbqgsrtEJtomscq+yI1Gt+DT3828xjOJ1vwu69fZW0pm1u/ujD85hXcOT3x1hOtom3HxHLd8upqFDRtDhANQFzmF2JYCk492t6Fi0cjpSAkiwa3t2CosxXA7qBtL7jcfX0t0LRZQJwDACOypwmIYzHYL+/24XJgQHJuKdsYLMAeEB0WBjd/gaiyNwSb+8Lsjuw2obvUDZYBfz59DmczT2Cwswn3P7yvFywDBsHdHRsPlW6utesFa4+Ow7e1l3DVn85AtYT9+nYz02//w0rzVzR1XTwcgaPO7r+hLFOyv5oTLTfIah1gSUkvBwbBnJiC02cvYGi7hqkrz41Y8dvdehUFLrUbQMS99FSu/9ek3H5Cy2q5jYxhcOM/D0TcyESHgLCR4V5ymI25PTyfzH85adTn2XPHdfckbBE30LaXkrZkGC1wnFn3vqatey2irrcBcaUqEPE+ouabG12ijzcy1iCuomkqTyneDMbAAEsZviIR6ofA+JhHKTTNA8EacGGlV3QUCtcSLaNtr0v3ktiLYckwOFo7GYdwxPLwZ0oAJLZy2MiACQCHMV/PGP4kMEW2ItjU2I7YBMdZAsRF/yAvHyqO1kVwyefKsG7CJuKfId7USeTmRzc4iXicD+6H06oUpsheHVbXd/wRmffkaJ4OFEzlau+ZKNKLQPm5EqyvKqvnXY6zEP1P5avLqgcl8gAta1oFQGKjBttocNFw6zeripbVTB6SyhI9ULcQNgWRUDUKTQovJVFSHGCJAhB2SFmHus2HV7q9q+JUdq2ypOucll6Hhys0HQl1Ky0UubB+ULFKXtAQKaWkVDBWqG4+bDxViZJ9RipT/gd7nU9nwqbUEbZyqUIBUEkqy4ZNFICsVFUU1b0oFClYSaoqBI43PX+tbho2fkBmASiCDDNXMpVdk6NV9ozB9qIKJQuF35WV6nlD2LKpqkiRKgtFFDY+ASgUgCLQ0B0SaRAt657q2qhdNqzfq5bZMKcMR3ve0nGQ9lnHMXox+Llu5jjzoGl7aJo8DomvP6u/VA3sq/WXAAAAAElFTkSuQmCC" x="0" y="0" width="43" height="44"/>
                                    </svg>
                                    @elseif($count == 3) 
                                    <svg viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg" width="44" height="31">
                                       <rect width="100%" height="100%" fill="none"/>
                                       <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAArCAYAAAD7YZFOAAAAAXNSR0IArs4c6QAABC9JREFUWEfFWb1uG0cQ/mbXBIL8IDICuI0IhLJTmOQVpuyksNWkjfwElp7AUR/AMvIAtts00RuYegJJQACBbI6UAgQiDZBpgwS+InYAk7uT7P1Ix/vj3cXHXEnNzn47O9/M7CcCANu2196Jjx8T8Q5A6+a3Ep8DcFcp9fSe9eW0xPrYEjLAZuKjIxC134dDAM5M8dbX1sYg8Hdq/7ouINosxDppPdXQgzwHoN75+Akx9t8TMNcNM08J+hAkWwDModei/pmxv9lqPM3al/rD0QTkXSWDuoL4RXSB1rxDRI/8nQckaC9qozTagvCsyCHnSu19Zd16nraG+mdjDv5IClt3rMZx1Lg3vNgnEk98cCed1saDJIe94cWUSHyevBk5gP4NEJ8CHOS102k2rv9P4OgA0CdK1Y7vWXWXJKf2ZF3K+SQANFNshfMzDLTSyGlWe3db8WtbjDDvdpobB0nRqxTcv2XpoNP8YjchTbpE4lsvTdSLTuvWd6sHRxh0bjeszBxOsTFrKo4cEhO+Z7/aJskvfdCppFgAp5XaY/Bl8QxOLKV8BNBOGbYmJbwpylJeW0qKBXC5ahRzwVKSnPD9s1evAfaLc7JNcXCEgZrPY0XYHEzK2surDf2jpiR8b3ixlBQL4JhNkYx/RNIUzlgLyhXplITvD0fPQfTY93HcaTa2ov6KEyIXogWj0qQoDO7N7C3ezP5OhHjjw88Sf89DCqXm9eikUhjcL3+M8P3Pyb36x29+QDLAcqRYDbgUUvTPx0dgeENEgk114BgDkDvLASVJURk4BroEbGd1gf7ZyDwLfkqzqQycmUgEycvhMynho50ialMZOIB3mdkMqf7wWZwUVYPbXjYaZZGiUnBgtJd1gaxOUSk4VsJZNhplkaJScEqp4/BoVJQUhcEZ2v/+9s8c7csjQJ7RKGzD0A83mze75Sbh3I3fB7ekCxh3aaQoFbl8+HxwOUajMCk068O7rZtu8S4DziHCwySArPHssmUhuNbsLuBGLqVTFH9DgKed5kY9CdzC9fjglnUBF5w9akOSHfgMiFN8TC8IzovM8vdCEilWA244ti+vO218CtkESkGJN0Sxa3UjV5IUJQhRAtyS0ShOCm+P1YBLSfgwqaKkqKm/rq8EnG1P1mZy/voKTHx8itqYTrEScF7eZZPC1ablJ5PgfRwDF+5r4ZAvKJtZpSQk4ZphM6y79Yajg0C6NZrxXM/cQl6Tog02Yrm4HxbNlbpWp3DhdIVmEjHZFazNXBao7Q6zjunGROI+4L+kTOuJSLin5+MHknGUr/V5uh4VW5TPNUMfbja9/rh4A1fRS/fEJzVV27asukPGqDcc7xPBE6T/88dGA94JNOA4QLOXUeY90drTZ8SAwFMS1L1z+0owd8GZzwjJQrwr/R8cApyo86xzmv0+ABwToTS7fwBYiFECwk3OlAAAAABJRU5ErkJggg==" x="0" y="0" width="39" height="43"/>
                                    </svg>
                                    @endif
                                 </div>
                              </div>
                              <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-bold">
                                 Refreshing Design
                              </h4>
                              <p class="text-body-color dark:text-dark-6">
                                 Lorem Ipsum is simply dummy text of the printing and industry.
                              </p>
                              <span class="bg-dark absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"></span>
                           </div>
                        </div>
                     @endfor
                  </div>

                  <div class="absolute left-0 top-1/2 transform -translate-y-1/2 flex items-center">
                     <button
                           class="flex lg:h-full lg:w-full items-center justify-center rounded-full dark:bg-white
                           text-body-color dark:text-dark-6 hover:border-gray hover:bg-gray-300 xs:bg-gray-100 xs:-ml-7"
                           @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length);"
                           onclick="previousSlide()"
                     >
                           <!-- Left Arrow SVG Placeholder -->
                           <svg xmlns="http://www.w3.org/2000/svg" width="76" height="70">
                              <rect width="100%" height="100%" fill="none"/>
                              <image xlink:href="data:image/png;base64,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" x="0" y="0" width="76" height="70"/>
                           </svg>
                     </button>
                  </div>

                  <div class="absolute right-0 top-1/2 transform -translate-y-1/2 flex items-center">
                     <button
                           class="flex lg:h-full lg:w-full items-center justify-center rounded-full dark:bg-white
                           text-body-color dark:text-dark-6 hover:border-gray hover:bg-gray-300 xs:bg-gray-100 xs:-mr-7"
                           @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length);"
                           onclick="nextSlide()"
                     >
                           <!-- Right Arrow SVG Placeholder -->
                           <svg xmlns="http://www.w3.org/2000/svg" width="76" height="70">
                              <rect width="100%" height="100%" fill="none"/>
                              <image xlink:href="data:image/png;base64,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" x="0" y="0" width="76" height="70"/>
                           </svg>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ====== Services Section End -->
</div>

<!-- ====== Services Section Start -->
<section class="dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] xs:mb-8">
   <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
         <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[700px] text-center lg:mb-[70px] opacity-0" id="businessSolutions">
               <h2 class="text-dark dark:text-white mb-6 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                  Business Solutions Reimagined
               </h2>
               <p class="text-body-color text-base dark:text-dark-6">
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
               </p>
            </div>
         </div>
      </div>
      <div class="xl:container flex flex-wrap justify-center">
         @for($i = 0; $i < 4; $i++)
         <div class="w-full px-4 md:w-1/2 xl:w-1/4">
            <div class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white 
            dark:bg-dark-2 py-6 px-6 text-center duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent marketing-section opacity-0" id="marketing{{ $i }}">
               <div class="w-full mb-6 overflow-hidden rounded-md relative">
                  <img
                     src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-10/image-01.jpg"
                     alt="card image"
                     class="object-cover object-center w-full h-full"
                     />
                  <div class="absolute top-2 left-2 flex h-7 w-11 z-50 max-w-[65px] items-center justify-center rounded-[5px] bg-[#5DDAB4] text-white text-[12px]">
                     New
                  </div>
               </div>
               
               <h4 class="text-dark mb-[14px] text-lg font-semibold uppercase mt-12">
                  RESEARCH
               </h4>
               <p class="text-body-color dark:text-dark-6 text-base">
                  Lorem ipsum dolor amet adipiscing eiusmod.
               </p>
               <span class="bg-dark absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"></span>
            </div>
         </div>
         @endfor
      </div>
   </div>
</section>
<!-- ====== Services Section End -->

<div class="wave-container-footer xs:-mb-1">
   <div class="waves">
      <div class="wave-footer" id="wave1"></div>
      <div class="wave-footer" id="wave2"></div>
      <div class="wave-footer" id="wave3"></div>
      <div class="wave-footer" id="wave4"></div>
   </div>
</div>

<section class="bg-[#011523] dark:bg-dark pt-2 pb-12 media-section">
    <div class="container mx-auto">
      <div class="mx-auto max-w-[800px] text-center mb-10 mt-6 opacity-0" id="avalonHouse">    
         <h2
            class="mb-4 text-3xl font-bold text-white sm:text-4xl md:leading-[1.2] md:text-[48px]"
            style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
            >
            Avalon House your powerhouse!
         </h2>
         <p
            class="text-base text-white opacity-75"
            style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
            >
            There are many variations of passages of Lorem Ipsum available<br>
            but the majority have sufferred alteration in some form.
         </p>
      </div>
       <div class="w-full px-4 fun-facts text-center">
          <h2
            class="mt-24 mb-10 text-3xl font-bold text-white sm:text-4xl md:leading-[1.2] md:text-[48px] opacity-0"
            style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
            id="funFacts"
            >
            Fun Facts
         </h2>
             <div class="-mx-3 flex flex-wrap md:-mx-4">
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4 opacity-0" id="rightBoxOne">
                     <div class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8">
                        <h4 class="flex justify-center mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]">
                           10,892
                           &nbsp;
                           <svg fill="#13C296" height="25" width="25" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
                              <g id="SVGRepo_bgCarrier" stroke-width="2"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                              <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M378.88,184.026v307.2h112.64v-307.2H378.88z M471.04,470.747h-71.68v-266.24h71.68V470.747z"></path> 
                              </g> </g> <g> <g> 
                                 <path d="M256,235.227v256h102.4v-256H256z M337.92,470.747h-61.44v-215.04h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M133.12,286.427v204.8h102.4v-204.8H133.12z M215.04,470.747L215.04,470.747H153.6v-163.84h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M0,347.867v143.36h112.64v-143.36H0z M92.16,470.747H20.48v-102.4h71.68V470.747z"></path> </g> </g> <g> <g> 
                                 <polygon points="336.975,0.293 330.095,19.581 404.601,46.146 56.565,229.831 66.125,247.942 411.508,65.658 385.95,137.341 405.24,144.223 443.07,38.122 ">
                                 </polygon> 
                                 </g> 
                                 </g> 
                              </g>
                           </svg>
                        </h4>
                        <p class="text-base text-body-color dark:text-dark-6 group-hover:text-white">
                           Clients
                        </p>
                     </div>
                </div>
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4 opacity-0" id="rightBoxTwo">
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4 class="flex justify-center b-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]">
                           1,832
                           &nbsp;
                           <svg fill="#13C296" height="25" width="25" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
                              <g id="SVGRepo_bgCarrier" stroke-width="2"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                              <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M378.88,184.026v307.2h112.64v-307.2H378.88z M471.04,470.747h-71.68v-266.24h71.68V470.747z"></path> 
                              </g> </g> <g> <g> 
                                 <path d="M256,235.227v256h102.4v-256H256z M337.92,470.747h-61.44v-215.04h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M133.12,286.427v204.8h102.4v-204.8H133.12z M215.04,470.747L215.04,470.747H153.6v-163.84h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M0,347.867v143.36h112.64v-143.36H0z M92.16,470.747H20.48v-102.4h71.68V470.747z"></path> </g> </g> <g> <g> 
                                 <polygon points="336.975,0.293 330.095,19.581 404.601,46.146 56.565,229.831 66.125,247.942 411.508,65.658 385.95,137.341 405.24,144.223 443.07,38.122 ">
                                 </polygon> 
                                 </g> 
                                 </g> 
                              </g>
                           </svg>
                      </h4>
                      <p
                         class="text-base text-body-color dark:text-dark-6 group-hover:text-white"
                         >
                         Team Members
                      </p>
                   </div>
                </div>
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4 opacity-0" id="leftBoxOne">
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                    
                      >
                      <h4 class="flex justify-center mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]">
                           5,318
                           &nbsp;
                           <svg fill="#13C296" height="25" width="25" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
                              <g id="SVGRepo_bgCarrier" stroke-width="2"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                              <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M378.88,184.026v307.2h112.64v-307.2H378.88z M471.04,470.747h-71.68v-266.24h71.68V470.747z"></path> 
                              </g> </g> <g> <g> 
                                 <path d="M256,235.227v256h102.4v-256H256z M337.92,470.747h-61.44v-215.04h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M133.12,286.427v204.8h102.4v-204.8H133.12z M215.04,470.747L215.04,470.747H153.6v-163.84h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M0,347.867v143.36h112.64v-143.36H0z M92.16,470.747H20.48v-102.4h71.68V470.747z"></path> </g> </g> <g> <g> 
                                 <polygon points="336.975,0.293 330.095,19.581 404.601,46.146 56.565,229.831 66.125,247.942 411.508,65.658 385.95,137.341 405.24,144.223 443.07,38.122 ">
                                 </polygon> 
                                 </g> 
                                 </g> 
                              </g>
                           </svg>
                      </h4>
                      <p
                         class="text-base text-body-color dark:text-dark-6 group-hover:text-white"
                         >
                         Partners
                      </p>
                   </div>
                </div>
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4 opacity-0" id="leftBoxTwo">
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4 class="flex justify-center mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]">
                           319,892
                           &nbsp;
                           <svg fill="#13C296" height="25" width="25" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
                              <g id="SVGRepo_bgCarrier" stroke-width="2"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                              <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M378.88,184.026v307.2h112.64v-307.2H378.88z M471.04,470.747h-71.68v-266.24h71.68V470.747z"></path> 
                              </g> </g> <g> <g> 
                                 <path d="M256,235.227v256h102.4v-256H256z M337.92,470.747h-61.44v-215.04h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M133.12,286.427v204.8h102.4v-204.8H133.12z M215.04,470.747L215.04,470.747H153.6v-163.84h61.44V470.747z"></path> </g> </g> <g> <g> 
                                 <path d="M0,347.867v143.36h112.64v-143.36H0z M92.16,470.747H20.48v-102.4h71.68V470.747z"></path> </g> </g> <g> <g> 
                                 <polygon points="336.975,0.293 330.095,19.581 404.601,46.146 56.565,229.831 66.125,247.942 411.508,65.658 385.95,137.341 405.24,144.223 443.07,38.122 ">
                                 </polygon> 
                                 </g> 
                                 </g> 
                              </g>
                           </svg>
                      </h4>
                      <p
                         class="text-base text-body-color dark:text-dark-6 group-hover:text-white"
                         >
                         Projects
                      </p>
                   </div>
                </div>
             </div>
          </div>
    </div>
</section>

<section
   class="relative z-10 newsletter-bg"
   x-data="{ isMobile: window.innerWidth <= 600 }"
   x-init="() => {
       window.addEventListener('resize', () => {
           isMobile = window.innerWidth <= 600;
           console.log(window.innerWidth);
       });
   }"
   >
   <div class="container mx-auto">
      <div class="text-center lg:pt-[20px]"
      :style="isMobile ? 'padding-top: 30px;' : ''">

         <h2 class="text-3xl text-white font-semibold opacity-0"
             id="join"
             :style="isMobile ? 'font-size: 22px' : ''"
            >Join Our Newsletter Now
         </h2>
   
         <form action="#" method="post" class="mt-4 space-x-2" id="signUp">
             <input
             type="text"
             placeholder="Enter your Email"
             class="w-1/4 px-5 py-3 text-base bg-white border outline-none border-stroke text-body-color dark:text-white dark:border-dark-3"
             :style="isMobile ? 'width: 200px' : ''"/>
             <button type="submit" class="bg-white text-dark px-5 py-3 font-semibold" >SIGN UP</button>
         </form>
         <p class="text-white opacity-90 pb-4 pt-6" id="subscribe">You can unsubscribe anytime</p>
     </div>
   </div>
</section>

<footer class="relative z-10 bg-white dark:bg-dark lg:pt-[120px]"
      x-data="{ isMobile: window.innerWidth <= 600 }"
      x-init="() => {
         window.addEventListener('resize', () => {
            isMobile = window.innerWidth <= 600;
            console.log(window.innerWidth);
         });
      }">
      <img class="absolute inset-0 mx-auto my-auto" 
         :class="{ 'mx-auto my-auto': isMobile, 'top-0 left-0': !isMobile }" 
         src="{{ asset('/images/avalonlogo.png') }}" 
         alt="">

    <img class="absolute left-0" 
         src="{{ asset('/images/eclipse.png') }}" 
         alt="">
   <img class="absolute right-12 top-12" src="{{ asset('/images/vector.png') }}" alt="">
   <img class="absolute right-0 top-0" src="{{ asset('/images/eclipse-right.png') }}" alt="">
    <div class="container mx-auto">
       <div class="flex flex-wrap -mx-4 lg:mb-14 opacity-0" id="footerSection">
          <div class="w-full px-4 md:w-2/3 lg:w-1/3">
             <div class="w-full mb-12">
                <h4
                   class="text-dark dark:text-white text-3xl mt-5 font-medium xl:text-[32px]"
                   :class="{ 'text-center text-2xl': isMobile}"
                   >
                   Please feel free to get in touch with us
                </h4>
             </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
             <div class="w-full mb-12">
                <div class="flex">
                   <div class="mr-6 h-9 w-9 text-primary">
                      <svg
                         width="35"
                         height="35"
                         viewBox="0 0 35 35"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                         >
                         <path
                            d="M17.5 0.984375C9.95312 0.984375 3.82812 6.89063 3.82812 14.1641C3.82812 19.6875 11.1562 28.4375 15.4766 33.1406C16.0234 33.7422 16.7344 34.0156 17.5 34.0156C18.2656 34.0156 18.9766 33.6875 19.5234 33.1406C23.8438 28.4375 31.1719 19.6875 31.1719 14.1641C31.1719 6.89063 25.0469 0.984375 17.5 0.984375ZM17.7188 31.5C17.6094 31.6094 17.4453 31.6094 17.2812 31.5C11.9766 25.7031 6.28906 18.1563 6.28906 14.1641C6.28906 8.25781 11.3203 3.44531 17.5 3.44531C23.6797 3.44531 28.7109 8.25781 28.7109 14.1641C28.7109 18.1563 23.0234 25.7031 17.7188 31.5Z"
                            fill="#011523"
                            />
                         <path
                            d="M17.5 8.58594C14.2187 8.58594 11.5391 11.2656 11.5391 14.5469C11.5391 17.8281 14.2187 20.5625 17.5 20.5625C20.7812 20.5625 23.4609 17.8828 23.4609 14.6016C23.4609 11.3203 20.7812 8.58594 17.5 8.58594ZM17.5 18.1016C15.5312 18.1016 14 16.5156 14 14.6016C14 12.6875 15.5859 11.1016 17.5 11.1016C19.4141 11.1016 21 12.6875 21 14.6016C21 16.5156 19.4687 18.1016 17.5 18.1016Z"
                            fill="#011523"
                            />
                      </svg>
                   </div>
                   <div>
                      <h5
                         class="mb-4 text-lg font-semibold text-dark dark:text-white"
                         >
                         Our Location
                      </h5>
                      <p class="text-base text-body-color dark:text-dark-6 mobile-view">
                         401 Broadway, 24th Floor, Orchard Cloud View, London
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
             <div class="w-full mb-12">
                <div class="flex">
                   <div class="mr-6 h-9 w-9 text-primary">
                      <svg
                         width="35"
                         height="35"
                         viewBox="0 0 35 35"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                         >
                         <path
                            d="M30.625 5.25H4.375C2.51562 5.25 0.929688 6.78125 0.929688 8.69531V26.4141C0.929688 28.2734 2.46094 29.8594 4.375 29.8594H30.625C32.4844 29.8594 34.0703 28.3281 34.0703 26.4141V8.64062C34.0703 6.78125 32.4844 5.25 30.625 5.25ZM30.625 7.71094C30.6797 7.71094 30.7344 7.71094 30.7891 7.71094L17.5 16.2422L4.21094 7.71094C4.26562 7.71094 4.32031 7.71094 4.375 7.71094H30.625ZM30.625 27.2891H4.375C3.82812 27.2891 3.39062 26.8516 3.39062 26.3047V10.1172L16.1875 18.3203C16.5703 18.5938 17.0078 18.7031 17.4453 18.7031C17.8828 18.7031 18.3203 18.5938 18.7031 18.3203L31.5 10.1172V26.3594C31.6094 26.9062 31.1719 27.2891 30.625 27.2891Z"
                            fill="#011523"
                            />
                      </svg>
                   </div>
                   <div>
                      <h5
                         class="mb-4 text-lg font-semibold text-dark dark:text-white"
                         >
                         How Can We Help?
                      </h5>
                      <p class="mb-2 text-base text-body-color dark:text-dark-6">
                         info@yourdomain.com
                      </p>
                      <p class="text-base text-body-color dark:text-dark-6">
                         contact@yourdomain.com
                      </p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="py-8 border-t border-stroke dark:border-dark-3 bg-[#011523]">
       <div class="container mx-auto">
          <div class="flex flex-wrap items-center justify-center -mx-4">
            <div class="w-full px-4 md:w-1/2 lg:w-5/12 xl:w-1/3">
               <div class="py-3 text-center">
                  <p class="text-base text-white dark:text-dark-6">
                     &copy; 2024 Avalon House.All Rights Reserved.
                  </p>
               </div>
            </div>
             <div class="w-full px-4 lg:w-3/12 xl:w-1/3">
                <div class="w-full py-3 text-center justify-center flex space-x-3">
                  <img src="{{ asset('/images/paypal.png') }}" alt="">
                  <img src="{{ asset('/images/visa.png') }}" alt="">
                  <img src="{{ asset('/images/mastercard.png') }}" alt="">
                  <img src="{{ asset('/images/american.png') }}" alt="">
                  <img src="{{ asset('/images/discover.png') }}" alt="">
                </div>
             </div>
            
             <div class="w-full px-4 md:w-1/2 lg:w-4/12 xl:w-1/3">
                <div class="w-full py-3">
               
                   <div
                      class="flex items-center justify-center -mx-3 lg:justify-end"
                      >
                      <h2 class="text-white">Follow Us: </h2>
                      <a
                         href="javascript:void(0)"
                         class="px-3 hover:text-primary text-dark-7 dark:text-white/40"
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
                         class="px-3 hover:text-primary text-dark-7 dark:text-white/40"
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
                         class="px-3 hover:text-primary text-dark-7 dark:text-white/40"
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
                         class="px-3 hover:text-primary text-dark-7 dark:text-white/40"
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
          </div>
       </div>
    </div>
</footer>

@endsection

@section('js')
<script>
   var activeSlide = 0;
   function nextSlide() {
      activeSlide += 1;
   }

   function previousSlide() {
      if(activeSlide >= 0)
         activeSlide -= 1;
   }
   document.addEventListener("DOMContentLoaded", function () {
      const carousel = document.getElementById("carousel_control");

      function scrollToNextSlide() {
         const slides = parseInt("{{ count($slides) }}");
         const slideWidth = carousel.scrollWidth / slides; 
         activeSlide = (activeSlide + 1) % slides; 
         carousel.scrollLeft = slideWidth * activeSlide;
      }

      function startCarouselInterval() {
         setInterval(scrollToNextSlide, 3000);
      }
   
      startCarouselInterval();

      var elementIds = [
               "whatWeDoText",
               "whatWeDoImage",
               "join", 
               "signUp", 
               "subscribe", 
               "footerSection",
               "businessSolutions",
               "avalonHouse",
               "funFacts",
               "rightBoxOne",
               "rightBoxTwo",
               "leftBoxOne",
               "leftBoxTwo"
            ];
      var animationClasses = {
         join: "animate-fade-up",
         signUp: "animate-fade-up",
         subscribe: "animate-fade-up",
         footerSection: "animate-fade-right",
         whatWeDoText: "animate-fade-up",
         whatWeDoImage: "animate-fade-right",
         businessSolutions: "animate-fade-down",
         avalonHouse: "animate-fade-down",
         funFacts: "animate-fade-right",
         rightBoxOne: "animate-fade-right",
         rightBoxTwo: "animate-fade-right",
         leftBoxOne: "animate-fade-left",
         leftBoxTwo: "animate-fade-left"

      };
      var animationDelays = {
         join: 100,
         signUp: 500,
         subscribe: 700,
      };
      

      var delayIncrement = 100;
      var elementCards = [];
   

      for (var i = 0; i < 4; i++) {
         elementCards.push("marketing" + i); 
      }

      var marketingDelayIncrement = 101;
      var observer = new IntersectionObserver(function(entries) {
         entries.forEach(function(entry) {
               if (entry.isIntersecting) {
                  var animationClass = animationClasses[entry.target.id];
                  var delay = animationDelays[entry.target.id];
                  var delayClass = 'animate-delay-' + (elementCards.indexOf(entry.target.id) * delayIncrement);
                  setTimeout(() => {
                     entry.target.classList.add(animationClass);
                  }, delay);
              
                  if(entry.target.classList.contains('marketing-section')) {
                     setTimeout(function(){
                           entry.target.classList.add(`animate-fade-right`);
                     }, marketingDelayIncrement); 
                  marketingDelayIncrement += 300;
                  } 
                  entry.target.classList.add(delayClass);
                  observer.unobserve(entry.target);
               } else {
                  entry.target.style.opacity = 0;
               }
         });
      }, { threshold: 0 });

      elementIds.concat(elementCards).forEach(function(elementId) {
         var element = document.getElementById(elementId);
         if (element) {
               observer.observe(element);
         }
      });
   });
</script>
@endsection
