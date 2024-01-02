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
         <div class="w-full px-4 lg:w-6/12">
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
                           fill="#3056D3"
                           />
                        <circle
                           cx="44.6667"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 44.6667 30.9998)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="1.66667"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 1.66667 30.9998)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="29.9999"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 29.9999 30.9998)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="58.9999"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 58.9999 30.9998)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="15.6667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 15.6667 16.3333)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="44.6667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 44.6667 16.3333)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="1.66667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 1.66667 16.3333)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="29.9999"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 29.9999 16.3333)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="58.9999"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 58.9999 16.3333)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="15.6667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 15.6667 45.3336)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="15.6667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 15.6667 1.66683)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="44.6667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 44.6667 45.3336)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="44.6667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 44.6667 1.66683)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="1.66667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 1.66667 45.3336)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="1.66667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 1.66667 1.66683)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="29.9999"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 29.9999 45.3336)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="29.9999"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 29.9999 1.66683)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="58.9999"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 58.9999 45.3336)"
                           fill="#3056D3"
                           />
                        <circle
                           cx="58.9999"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 58.9999 1.66683)"
                           fill="#3056D3"
                           />
                     </svg>
                  </span>
                  <span class="absolute left-5 -bottom-10 z-[-1] sm:left-16">
                     <svg
                        width="112"
                        height="112"
                        viewBox="0 0 112 112"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           fill-rule="evenodd"
                           clip-rule="evenodd"
                           d="M56 96C78.0914 96 96 78.0914 96 56C96 33.9086 78.0914 16 56 16C33.9086 16 16 33.9086 16 56C16 78.0914 33.9086 96 56 96ZM56 112C86.9279 112 112 86.9279 112 56C112 25.0721 86.9279 0 56 0C25.0721 0 0 25.0721 0 56C0 86.9279 25.0721 112 56 112Z"
                           fill="#13C296"
                           />
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
         <div class="w-full px-4 lg:w-1/2 2xl:w-5/12">
            <div class="sm:mt-10 lg:mt-0">
               <span
                  class="block mb-2 text-lg font-semibold uppercase text-primary"
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

<!-- ====== Services Section Start -->
<section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark">
   <div class="container mx-auto">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
               {{-- <span class="block mb-2 text-lg font-semibold text-primary">What we Serve</span> --}}
               <h2
                  class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
                  >
                  Our Services
               </h2>
               <a
                  href="javascript:void(0)"
                  class="bg-dark dark:bg-dark-2 border-white dark:border-dark-2 border rounded-md inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
                  >
                  Explore Services
                  <span class="pl-[10px]">
                     <svg 
                        width="20" 
                        height="20" 
                        viewBox="0 0 20 20" 
                        fill="none" 
                        xmlns="http://www.w3.org/2000/svg"
                        class="fill-current"
                        >
                        <g clip-path="url(#clip0_906_8052)">
                           <path 
                              d="M13.1875 9.28125H10.6875V6.8125C10.6875 6.4375 10.375 6.125 9.96875 6.125C9.59375 6.125 9.28125 6.4375 9.28125 6.84375V9.3125H6.8125C6.4375 9.3125 6.125 9.625 6.125 10.0312C6.125 10.4062 6.4375 10.7187 6.84375 10.7187H9.3125V13.1875C9.3125 13.5625 9.625 13.875 10.0312 13.875C10.4062 13.875 10.7187 13.5625 10.7187 13.1562V10.6875H13.1875C13.5625 10.6875 13.875 10.375 13.875 9.96875C13.875 9.59375 13.5625 9.28125 13.1875 9.28125Z"
                              />
                           <path 
                              d="M10 0.5625C4.78125 0.5625 0.5625 4.78125 0.5625 10C0.5625 15.2188 4.8125 19.4688 10.0312 19.4688C15.25 19.4688 19.5 15.2188 19.5 10C19.4688 4.78125 15.2188 0.5625 10 0.5625ZM10 18.0625C5.5625 18.0625 1.96875 14.4375 1.96875 10C1.96875 5.5625 5.5625 1.96875 10 1.96875C14.4375 1.96875 18.0625 5.5625 18.0625 10C18.0625 14.4375 14.4375 18.0625 10 18.0625Z" 
                              />
                        </g>
                        <defs>
                           <clipPath id="clip0_906_8052">
                              <rect 
                                 width="20" 
                                 height="20" 
                                 fill="white"
                                 />
                           </clipPath>
                        </defs>
                     </svg>
                  </span>
               </a>
               {{-- <p class="text-base text-body-color dark:text-dark-6">
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
               </p> --}}
            </div>
         </div>
      </div>
      {{-- <div class="flex flex-wrap justify-center -mx-4">
         <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
            <div
               class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
               >
               <div
                  class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
                  >
                  <span
                     class="bg-primary absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
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
                        fill="#3758F9"
                        />
                  </svg>
               </div>
               <h4
                  class="text-dark dark:text-white mb-[14px] text-2xl font-bold"
                  >
                  Marketing Solutions
               </h4>
               <p class="text-body-color dark:text-dark-6">
                  Lorem Ipsum is simply dummy text of the printing and industry.
               </p>
               <span
                  class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
                  ></span>
            </div>
         </div>
         <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
            <div
               class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
               >
               <div
                  class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
                  >
                  <span
                     class="bg-primary absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
                     ></span>
                  <svg
                     width="51"
                     height="50"
                     viewBox="0 0 51 50"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     >
                     <path
                        d="M48.1348 34.7656C47.1191 31.4062 43.7598 29.5312 40.5566 30.4687C37.9004 31.25 34.2285 32.3437 31.3379 33.2031C31.5723 32.2656 31.416 31.4844 31.1816 30.8594C30.4004 28.9844 28.3691 28.125 26.5723 28.125H18.6816C18.0566 28.125 17.3535 27.8125 16.6504 27.1875C15.791 26.4062 14.6191 25.9375 13.4473 25.9375H7.11914C4.30664 25.9375 1.96289 28.3594 1.96289 31.3281V41.4844C1.96289 44.5312 4.30664 46.9531 7.19727 46.9531H14.9316C15.8691 46.9531 16.8848 46.6406 17.7441 46.0938C20.0098 47.3438 22.5879 47.9688 25.166 47.9688C26.7285 47.9688 28.291 47.7344 29.6973 47.2656L43.916 42.9688H43.9941C48.291 41.3281 48.916 37.5781 48.1348 34.7656ZM7.19727 43.4375C6.25977 43.4375 5.47852 42.5781 5.47852 41.4844V31.3281C5.47852 30.3125 6.18164 29.4531 7.11914 29.4531H13.5254C13.916 29.4531 14.2285 29.6094 14.3848 29.7656C14.6191 30 14.8535 30.1562 15.0879 30.3125V43.3594C15.0098 43.3594 15.0098 43.3594 14.9316 43.3594H7.19727V43.4375ZM42.8223 39.6094L28.5254 43.9844C27.4316 44.2969 26.2598 44.5313 25.0098 44.5313C22.9785 44.5313 21.0254 43.9844 19.3066 43.0469L18.5254 42.6562V31.7187C18.6035 31.7187 18.6035 31.7187 18.6816 31.7187H26.6504C27.3535 31.7187 27.9004 32.0312 27.9785 32.2656C28.0566 32.5 27.9004 33.3594 26.2598 34.9219L25.2441 35.8594L25.9473 37.0313C26.6504 38.2813 27.3535 38.0469 30.0879 37.2656C31.3379 36.875 33.0566 36.4063 34.7754 35.9375C38.1348 34.9219 41.5723 33.9063 41.5723 33.9063C42.9004 33.5156 44.3066 34.375 44.7754 35.8594C45.166 37.1094 45.0879 38.75 42.8223 39.6094Z"
                        fill="#3758F9"
                        />
                     <path
                        d="M47.4316 17.6563H45.4785V3.75C45.4785 2.8125 44.6973 1.95312 43.6816 1.95312C42.666 1.95312 41.9629 2.8125 41.9629 3.75V17.6563H37.666V6.09375C37.666 5.15625 36.8848 4.29688 35.8691 4.29688C34.8535 4.29688 34.1504 5.15625 34.1504 6.09375V17.6563H29.8535V10C29.8535 9.0625 29.0723 8.20313 28.0566 8.20313C27.041 8.20313 26.2598 8.98438 26.2598 10V17.6563H25.0879C24.1504 17.6563 23.291 18.4375 23.291 19.4531C23.291 20.4688 24.0723 21.25 25.0879 21.25H47.4316C48.3691 21.25 49.2285 20.4688 49.2285 19.4531C49.2285 18.4375 48.3691 17.6563 47.4316 17.6563Z"
                        fill="#3758F9"
                        />
                  </svg>
               </div>
               <h4
                  class="text-dark dark:text-white mb-[14px] text-2xl font-bold"
                  >
                  Business Analytics
               </h4>
               <p class="text-body-color dark:text-dark-6">
                  Lorem Ipsum is simply dummy text of the printing and industry.
               </p>
               <span
                  class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
                  ></span>
            </div>
         </div>
         <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
            <div
               class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
               >
               <div
                  class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
                  >
                  <span
                     class="bg-primary absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
                     ></span>
                  <svg
                     width="51"
                     height="50"
                     viewBox="0 0 51 50"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     >
                     <path
                        d="M45.9473 17.2656H41.2598V8.125C41.2598 5.46875 39.1504 3.35938 36.4941 3.35938H10.7129C8.05664 3.35938 5.94727 5.46875 5.94727 8.125V21.7969C5.47852 22.1875 5.08789 22.7344 4.85352 23.4375L1.96289 37.5C1.80664 38.2813 2.04102 39.1406 2.58789 39.7656C3.05664 40.3906 3.83789 40.7031 4.61914 40.7031H29.7754V43.4375C29.7754 45.2344 31.2598 46.7188 33.0566 46.7188H45.9473C47.7441 46.7188 49.2285 45.2344 49.2285 43.4375V20.5469C49.2285 18.75 47.7441 17.2656 45.9473 17.2656ZM5.63477 37.1875L8.21289 24.7656H8.60352H29.8535V37.1875H5.63477ZM29.7754 20.5469V21.25H9.46289V8.125C9.46289 7.42187 10.0098 6.875 10.7129 6.875H36.4941C37.1973 6.875 37.7441 7.42187 37.7441 8.125V17.2656H33.0566C31.2598 17.2656 29.7754 18.75 29.7754 20.5469ZM45.7129 43.125H33.291V20.7812H45.7129V43.125Z"
                        fill="#3758F9"
                        />
                     <path
                        d="M37.7441 26.7969H41.6504C42.5879 26.7969 43.4473 26.0156 43.4473 25C43.4473 24.0625 42.666 23.2031 41.6504 23.2031H37.7441C36.8066 23.2031 35.9473 23.9844 35.9473 25C35.9473 25.9375 36.7285 26.7969 37.7441 26.7969Z"
                        fill="#3758F9"
                        />
                     <path
                        d="M39.541 38.9063C39.4629 38.9063 39.3066 38.9844 39.2285 38.9844C39.1504 39.0625 38.9941 39.0625 38.916 39.1406C38.8379 39.2188 38.7598 39.2969 38.6816 39.375C38.3691 39.6875 38.1348 40.1563 38.1348 40.625C38.1348 41.0938 38.291 41.5625 38.6816 41.875C38.7598 41.9531 38.8379 42.0313 38.916 42.1094C38.9941 42.1875 39.1504 42.2656 39.2285 42.2656C39.3066 42.3438 39.4629 42.3438 39.541 42.3438C39.6191 42.3438 39.7754 42.3438 39.8535 42.3438C40.3223 42.3438 40.791 42.1875 41.1035 41.7969C41.416 41.4844 41.6504 41.0156 41.6504 40.5469C41.6504 40.0781 41.4941 39.6094 41.1035 39.2969C40.7129 38.9844 40.0879 38.8281 39.541 38.9063Z"
                        fill="#3758F9"
                        />
                  </svg>
               </div>
               <h4
                  class="text-dark dark:text-white mb-[14px] text-2xl font-bold"
                  >
                  UX & UI Design
               </h4>
               <p class="text-body-color dark:text-dark-6">
                  Lorem Ipsum is simply dummy text of the printing and industry.
               </p>
               <span
                  class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
                  ></span>
            </div>
         </div>
      </div> --}}
      <?php $slides = [1,2,3,4,5,6,7,8,9,10]; ?>
      <div x-data="{ slides: {{ '['.implode(', ', $slides).']' }} }">  
         <div class="relative flex justify-center">
            <div class="relative w-full pb-16">
               <div
                  class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] pb-5"
                  x-ref="carousel"
                  id="carousel_control">
                  <!-- Carousel Items -->
                  @for($i = 1; $i <= count($slides); $i++)
                     <div class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[350px] lg:min-w-[465px] xl:min-w-[370px] 2xl:min-w-[430px]">
                        {{-- <div class="overflow-hidden rounded-lg bg-white dark:bg-dark-2 shadow-1 dark:shadow-box-dark">
                           <div>
                              <img
                                    src="{{ 'https://source.unsplash.com/random/800x800/?img='.$i }}"
                                    alt="product"
                                    class="w-full"
                                    />
                           </div>
                           <div class="p-6">
                              <a
                                    href="javascript:void(0)"
                                    class="mb-3 block text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl lg:text-lg xl:text-xl"
                                    >
                              {{ "IMAGE-".$i }}
                              </a>
                              <p class="text-base text-body-color dark:text-dark-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    enim luctus et lorem.
                              </p>
                           </div>
                           <div class="flex justify-between border-t border-stroke dark:border-dark-3">
                              <div
                                    class="flex gap-1 items-center py-4 px-3 xs:px-4 lg:px-3 xl:px-6"
                                    >
                                    <span>
                                       <svg 
                                       width="16" 
                                       height="16" 
                                       viewBox="0 0 16 16" 
                                       fill="none" 
                                       xmlns="http://www.w3.org/2000/svg"
                                       >
                                       <g clip-path="url(#clip0_1818_1215)">
                                          <path 
                                                d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                                />
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_1818_1215">
                                                <rect 
                                                   width="16" 
                                                   height="16" 
                                                   fill="white"
                                                   />
                                          </clipPath>
                                       </defs>
                                       </svg>
                                    </span>
                                    <span>
                                       <svg 
                                       width="16" 
                                       height="16" 
                                       viewBox="0 0 16 16" 
                                       fill="none" 
                                       xmlns="http://www.w3.org/2000/svg"
                                       >
                                       <g clip-path="url(#clip0_1818_1215)">
                                          <path 
                                                d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                                />
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_1818_1215">
                                                <rect 
                                                   width="16" 
                                                   height="16" 
                                                   fill="white"
                                                   />
                                          </clipPath>
                                       </defs>
                                       </svg>
                                    </span>
                                    <span>
                                       <svg 
                                       width="16" 
                                       height="16" 
                                       viewBox="0 0 16 16" 
                                       fill="none" 
                                       xmlns="http://www.w3.org/2000/svg"
                                       >
                                       <g clip-path="url(#clip0_1818_1215)">
                                          <path 
                                                d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                                />
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_1818_1215">
                                                <rect 
                                                   width="16" 
                                                   height="16" 
                                                   fill="white"
                                                   />
                                          </clipPath>
                                       </defs>
                                       </svg>
                                    </span>
                                    <span>
                                       <svg 
                                       width="16" 
                                       height="16" 
                                       viewBox="0 0 16 16" 
                                       fill="none" 
                                       xmlns="http://www.w3.org/2000/svg"
                                       >
                                       <g clip-path="url(#clip0_1818_1221)">
                                          <path d="M4.0249 15.55C3.7999 15.55 3.5749 15.475 3.3999 15.35C3.0499 15.1 2.8499 14.65 2.9249 14.225L3.5749 10.2L0.774898 7.32495C0.474898 7.02495 0.374898 6.57495 0.499898 6.14995C0.624898 5.74995 0.974898 5.44995 1.3749 5.39995L5.2499 4.77495L6.9999 1.09995C7.1999 0.699951 7.5749 0.449951 7.9999 0.449951C8.4249 0.449951 8.8249 0.699951 8.9999 1.09995L10.7499 4.74995L14.5999 5.34995C14.9999 5.42495 15.3499 5.69995 15.4749 6.09995C15.6249 6.52495 15.4999 6.97495 15.1999 7.27495L12.4249 10.175L13.0749 14.225C13.1499 14.675 12.9749 15.1 12.5999 15.35C12.2499 15.6 11.8249 15.625 11.4499 15.425L7.9999 13.55L4.5499 15.425C4.3999 15.525 4.1999 15.55 4.0249 15.55ZM1.5749 6.49995C1.5749 6.49995 1.5749 6.52495 1.5749 6.54995L4.4999 9.54995C4.6749 9.72495 4.7499 9.99995 4.7249 10.25L4.0499 14.425C4.0499 14.425 4.0499 14.425 4.0499 14.45L7.6499 12.5C7.8749 12.375 8.1499 12.375 8.3999 12.5L11.9999 14.45C11.9999 14.45 11.9999 14.45 11.9999 14.425L11.3249 10.225C11.2749 9.97495 11.3749 9.72495 11.5499 9.52495L14.4749 6.52495C14.4999 6.49995 14.4749 6.47495 14.4749 6.47495L10.4499 5.84995C10.1999 5.79995 9.9749 5.64995 9.8749 5.39995L7.9999 1.59995L6.1999 5.42495C6.0999 5.64995 5.8749 5.82495 5.6249 5.87495L1.5749 6.49995Z" fill="#FFA645"/>
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_1818_1221">
                                                <rect 
                                                   width="16" 
                                                   height="16" 
                                                   fill="white"
                                                   />
                                          </clipPath>
                                       </defs>
                                       </svg>
                                    </span>
                                    <span>
                                       <svg 
                                       width="16" 
                                       height="16" 
                                       viewBox="0 0 16 16" 
                                       fill="none" 
                                       xmlns="http://www.w3.org/2000/svg"
                                       >
                                       <g clip-path="url(#clip0_1818_1221)">
                                          <path d="M4.0249 15.55C3.7999 15.55 3.5749 15.475 3.3999 15.35C3.0499 15.1 2.8499 14.65 2.9249 14.225L3.5749 10.2L0.774898 7.32495C0.474898 7.02495 0.374898 6.57495 0.499898 6.14995C0.624898 5.74995 0.974898 5.44995 1.3749 5.39995L5.2499 4.77495L6.9999 1.09995C7.1999 0.699951 7.5749 0.449951 7.9999 0.449951C8.4249 0.449951 8.8249 0.699951 8.9999 1.09995L10.7499 4.74995L14.5999 5.34995C14.9999 5.42495 15.3499 5.69995 15.4749 6.09995C15.6249 6.52495 15.4999 6.97495 15.1999 7.27495L12.4249 10.175L13.0749 14.225C13.1499 14.675 12.9749 15.1 12.5999 15.35C12.2499 15.6 11.8249 15.625 11.4499 15.425L7.9999 13.55L4.5499 15.425C4.3999 15.525 4.1999 15.55 4.0249 15.55ZM1.5749 6.49995C1.5749 6.49995 1.5749 6.52495 1.5749 6.54995L4.4999 9.54995C4.6749 9.72495 4.7499 9.99995 4.7249 10.25L4.0499 14.425C4.0499 14.425 4.0499 14.425 4.0499 14.45L7.6499 12.5C7.8749 12.375 8.1499 12.375 8.3999 12.5L11.9999 14.45C11.9999 14.45 11.9999 14.45 11.9999 14.425L11.3249 10.225C11.2749 9.97495 11.3749 9.72495 11.5499 9.52495L14.4749 6.52495C14.4999 6.49995 14.4749 6.47495 14.4749 6.47495L10.4499 5.84995C10.1999 5.79995 9.9749 5.64995 9.8749 5.39995L7.9999 1.59995L6.1999 5.42495C6.0999 5.64995 5.8749 5.82495 5.6249 5.87495L1.5749 6.49995Z" fill="#FFA645"/>
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_1818_1221">
                                                <rect 
                                                   width="16" 
                                                   height="16" 
                                                   fill="white"
                                                   />
                                          </clipPath>
                                       </defs>
                                       </svg>
                                    </span>
                                    <span
                                       class="pl-1 text-sm font-medium text-body-color dark:text-dark-6"
                                       >
                                    (55) Reviews
                                    </span>
                              </div>
                              <div
                                    class="border-l border-stroke dark:border-dark-3 py-4 px-3 xs:px-4 lg:px-3 xl:px-6"
                                    >
                                    <span class="text-base font-semibold text-dark dark:text-white">
                                    $299
                                    </span>
                              </div>
                           </div>
                        </div> --}}
                        <div class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 p-10 md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]">
                           <div class="relative z-10 mx-auto mb-10 h-11">
                              {{-- <span class="bg-primary absolute top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"></span> --}}
                              <svg
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
                              </svg>
                           </div>
                           <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-bold">
                              Marketing Solutions
                           </h4>
                           <p class="text-body-color dark:text-dark-6">
                              Lorem Ipsum is simply dummy text of the printing and industry.
                           </p>
                           <span class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"></span>
                        </div>
                     </div>
                  @endfor
               </div>

               <!-- Carousel Controls -->
               <div class="absolute left-0 top-1/2 transform -translate-y-1/2 flex items-center">
                  <button
                        class="flex h-[30px] w-[30px] items-center justify-center rounded-full border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary hover:text-white"
                        @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length);"
                        onclick="previousSlide()"
                  >
                        <!-- Left Arrow SVG Placeholder -->
                        <svg
                           width="14"
                           height="14"
                           viewBox="0 0 14 14"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           class="fill-current"
                        >
                           <path
                              d="M12.25 6.51875H2.90935L6.6281 2.73438C6.82498 2.5375 6.82498 2.23125 6.6281 2.03437C6.43123 1.8375 6.12498 1.8375 5.9281 2.03437L1.39998 6.62813C1.2031 6.825 1.2031 7.13125 1.39998 7.32813L5.9281 11.9219C6.0156 12.0094 6.14685 12.075 6.2781 12.075C6.40935 12.075 6.51873 12.0313 6.6281 11.9438C6.82498 11.7469 6.82498 11.4406 6.6281 11.2438L2.93123 7.50313H12.25C12.5125 7.50313 12.7312 7.28438 12.7312 7.02188C12.7312 6.7375 12.5125 6.51875 12.25 6.51875Z"
                           />
                        </svg>
                  </button>
               </div>

               <div class="absolute right-0 top-1/2 transform -translate-y-1/2 flex items-center">
                  <button
                        class="flex h-[30px] w-[30px] items-center justify-center rounded-full border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary hover:text-white"
                        @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length);"
                        onclick="nextSlide()"
                  >
                        <!-- Right Arrow SVG Placeholder -->
                        <svg
                           width="14"
                           height="14"
                           viewBox="0 0 14 14"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           class="fill-current"
                        >
                           <path
                              d="M12.6008 6.6501L8.07266 2.05635C7.87578 1.85947 7.56953 1.85947 7.37266 2.05635C7.17578 2.25322 7.17578 2.55947 7.37266 2.75635L11.0477 6.49697H1.75078C1.48828 6.49697 1.26953 6.71572 1.26953 6.97822C1.26953 7.24072 1.48828 7.48135 1.75078 7.48135H11.0914L7.37266 11.2657C7.17578 11.4626 7.17578 11.7688 7.37266 11.9657C7.46016 12.0532 7.59141 12.097 7.72266 12.097C7.85391 12.097 7.98516 12.0532 8.07266 11.9438L12.6008 7.3501C12.7977 7.15322 12.7977 6.84697 12.6008 6.6501Z"
                           />
                        </svg>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Services Section End -->

<!-- ====== Services Section Start -->
<section class="bg-gray-2 dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
       <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
             <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-[70px]">
                <h2
                   class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
                   >
                   What we do for you?
                </h2>
                <p class="text-body-color text-base dark:text-dark-6">
                   There are many variations of passages of Lorem Ipsum available
                   but the majority have suffered alteration in some form.
                </p>
             </div>
          </div>
       </div>
       <div class="-mx-4 flex flex-wrap justify-center">
            @for($i = 0; $i < 4; $i++)
            <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <div class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-11 px-6 text-center duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent">
                  {{-- <div
                     class="text-dark dark:text-white group-hover:border-primary group-hover:bg-primary mx-auto mb-9 flex h-20 w-20 items-center justify-center rounded-full border border-stroke dark:border-dark-3 text-3xl font-semibold drop-shadow-feature group-hover:text-white"
                     >
                     1
                  </div> --}}
                  <div class="w-full mb-6 overflow-hidden rounded-md">
                     <img
                        src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-10/image-01.jpg"
                        alt="card image"
                        class="object-cover object-center w-full h-full"
                        />
                     <div class="flex h-11 w-full z-50 max-w-[65px] items-center justify-center rounded-[10px] bg-[#5DDAB4] text-white">
                        New
                     </div>
                  </div>
                  
                  <h4 class="text-primary mb-[14px] text-lg font-semibold uppercase">
                     RESEARCH
                  </h4>
                  <p class="text-body-color dark:text-dark-6 text-base">
                     Lorem ipsum dolor amet adipiscing eiusmod.
                  </p>
                  <span class="bg-primary absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"></span>
               </div>
            </div>
            @endfor
            {{-- <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <div
                  class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-11 px-6 text-center duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent"
                  >
                  <div
                     class="text-dark dark:text-white group-hover:border-primary group-hover:bg-primary mx-auto mb-9 flex h-20 w-20 items-center justify-center rounded-full border border-stroke dark:border-dark-3 text-3xl font-semibold drop-shadow-feature group-hover:text-white"
                     >
                     2
                  </div>
                  <h4 class="text-primary mb-[14px] text-lg font-semibold uppercase">
                     SKETCHES
                  </h4>
                  <p class="text-body-color dark:text-dark-6 text-base">
                     Lorem ipsum dolor amet adipiscing eiusmod.
                  </p>
                  <span
                     class="bg-primary absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"
                     ></span>
               </div>
            </div>
            <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <div
                  class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-11 px-6 text-center duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent"
                  >
                  <div
                     class="text-dark dark:text-white group-hover:border-primary group-hover:bg-primary mx-auto mb-9 flex h-20 w-20 items-center justify-center rounded-full border border-stroke dark:border-dark-3 text-3xl font-semibold drop-shadow-feature group-hover:text-white"
                     >
                     3
                  </div>
                  <h4 class="text-primary mb-[14px] text-lg font-semibold uppercase">
                     CONCEPT
                  </h4>
                  <p class="text-body-color dark:text-dark-6 text-base">
                     Lorem ipsum dolor amet adipiscing eiusmod.
                  </p>
                  <span
                     class="bg-primary absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"
                     ></span>
               </div>
            </div>
            <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <div
                  class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-11 px-6 text-center duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent"
                  >
                  <div
                     class="text-dark dark:text-white group-hover:border-primary group-hover:bg-primary mx-auto mb-9 flex h-20 w-20 items-center justify-center rounded-full border border-stroke dark:border-dark-3 text-3xl font-semibold drop-shadow-feature group-hover:text-white"
                     >
                     4
                  </div>
                  <h4 class="text-primary mb-[14px] text-lg font-semibold uppercase">
                     PRESENTATION
                  </h4>
                  <p class="text-body-color dark:text-dark-6 text-base">
                     Lorem ipsum dolor amet adipiscing eiusmod.
                  </p>
                  <span
                     class="bg-primary absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"
                     ></span>
               </div>
            </div> --}}
       </div>
    </div>
</section>
<!-- ====== Services Section End -->

<section class="bg-[#090E34] dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] media-section mb-10">
    <div class="container mx-auto">
 
      <div class="mx-auto max-w-[700px] text-center mb-10 mt-36 digital-axis" id="digitalAxis">    
         <h2
            class="mb-4 text-3xl font-bold text-white sm:text-4xl md:leading-[1.2] md:text-[48px]"
            style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
            >
            Digital Axis Media is the Way!
         </h2>
         <p
            class="text-base text-white opacity-75"
            style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
            >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
            vel dolor pellentesque, varius elit quis, malesuada quam.
         </p>
      </div>
       <div class="w-full px-4 fun-facts text-center" id="funFacts">
          <h2
            class="mt-24 mb-10 text-3xl font-bold text-white sm:text-4xl md:leading-[1.2] md:text-[48px]"
            style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
            >
            Fun Facts
         </h2>
             <div class="-mx-3 flex flex-wrap md:-mx-4">
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4">
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4
                         class="mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                         >
                         56,825<span style="color: #d29383;" class="font-extrabold">+</span>
                      </h4>
                      <p
                         class="text-base text-body-color dark:text-dark-6 group-hover:text-white"
                         >
                         Clients
                      </p>
                   </div>
                </div>
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4">
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4
                         class="mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                         >
                         35,574<span style="color: #d29383;" class="font-extrabold">+</span>
                      </h4>
                      <p
                         class="text-base text-body-color dark:text-dark-6 group-hover:text-white"
                         >
                         Commits
                      </p>
                   </div>
                </div>
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4">
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4
                         class="mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                         >
                         570<span style="color: #d29383;" class="font-extrabold">+</span>
                      </h4>
                      <p
                         class="text-base text-body-color dark:text-dark-6 group-hover:text-white"
                         >
                         Team Member
                      </p>
                   </div>
                </div>
                <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4">
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4
                         class="mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                         >
                         50%<span style="color: #d29383;" class="font-extrabold">+</span>
                      </h4>
                      <p
                         class="text-base text-body-color dark:text-dark-6 group-hover:text-white"
                         >
                         First Year of use
                      </p>
                   </div>
                </div>
             </div>
          </div>
    </div>
</section>


<!-- ====== Call To Action Section Start -->
<section
   class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[110px]"
   >
   <div class="container mx-auto">
      <div class="relative overflow-hidden">
         <div class="flex flex-wrap items-stretch -mx-4">
            <div class="w-full px-4">
               <div class="mx-auto max-w-[570px] text-center">
                  <h2
                     class="mb-2.5 text-3xl font-bold leading-snug text-white md:text-[40px]"
                     >
                     <span class="pr-0.5">What Are You Looking For?</span>
                     <span class="font-normal"> Get Started Now </span>
                  </h2>
                  <p class="mb-6 text-base leading-relaxed text-white md:pr-10">
                     There are many variations of passages of Lorem Ipsum but the
                     majority have suffered in some form.
                  </p>
                  <a
                     href="javascript:void(0)"
                     class="inline-block py-3 text-base font-medium text-white transition border border-transparent rounded-md bg-secondary px-7 hover:bg-opacity-90"
                     >
                  Explore Now
                  </a>
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
<footer class="relative z-10 bg-white dark:bg-dark pt-20 lg:pt-[120px]">
    <div class="container mx-auto">
       <div class="flex flex-wrap -mx-4 lg:mb-14">
          <div class="w-full px-4 md:w-2/3 lg:w-1/3">
             <div class="w-full mb-12">
                <h4
                   class="text-dark dark:text-white text-3xl font-medium xl:text-[32px]"
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
                            fill="currentColor"
                            />
                         <path
                            d="M17.5 8.58594C14.2187 8.58594 11.5391 11.2656 11.5391 14.5469C11.5391 17.8281 14.2187 20.5625 17.5 20.5625C20.7812 20.5625 23.4609 17.8828 23.4609 14.6016C23.4609 11.3203 20.7812 8.58594 17.5 8.58594ZM17.5 18.1016C15.5312 18.1016 14 16.5156 14 14.6016C14 12.6875 15.5859 11.1016 17.5 11.1016C19.4141 11.1016 21 12.6875 21 14.6016C21 16.5156 19.4687 18.1016 17.5 18.1016Z"
                            fill="currentColor"
                            />
                      </svg>
                   </div>
                   <div>
                      <h5
                         class="mb-4 text-lg font-semibold text-dark dark:text-white"
                         >
                         Our Location
                      </h5>
                      <p class="text-base text-body-color dark:text-dark-6">
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
                            fill="currentColor"
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
    <div class="py-8 border-t border-stroke dark:border-dark-3">
       <div class="container mx-auto">
          <div class="flex flex-wrap items-center -mx-4">
             <div class="w-full px-4 lg:w-3/12 xl:w-1/3">
                <div class="w-full py-3 text-center lg:text-left">
                   <a href="javascript:void(0)" class="inline-block max-w-[160px]">
                   <img
                      src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo.svg"
                      alt="logo"
                      class="max-w-full dark:hidden"
                      />
                   <img
                      src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
                      alt="logo"
                      class="max-w-full hidden dark:block"
                      />
                   </a>
                </div>
             </div>
             <div class="w-full px-4 md:w-1/2 lg:w-5/12 xl:w-1/3">
                <div class="py-3 text-center">
                   <p class="text-base text-body-color dark:text-dark-6">
                      &copy; 2025 TailGrids | All Rights Reserved
                   </p>
                </div>
             </div>
             <div class="w-full px-4 md:w-1/2 lg:w-4/12 xl:w-1/3">
                <div class="w-full py-3">
                   <div
                      class="flex items-center justify-center -mx-3 lg:justify-end"
                      >
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
<!-- ====== Footer Section End -->

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
   });
</script>
@endsection
