@section('css')
<style>
   .bacground-image-hero { 
      background: url("{{ asset('/images/banner.png') }}") no-repeat center center fixed; 
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
      /* background: #011523; */
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
      /* opacity: 1; */
      bottom: 0;
      animation: animateWaves 6s linear infinite;
   }
   
   .wave#wave2 {
      z-index: 1;
      /* opacity: 0.5; */
      bottom: 10px;
      animation: animate 6s linear infinite !important;
   }
   
   .wave#wave3 {
      z-index: 2;
      /* opacity: 0.2; */
      bottom: 15px;
      animation: animateWaves 5s linear infinite;
   }
   
   .wave#wave4 {
      z-index: 1;
      /* opacity: 0.7; */
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

   @media (min-width: 320px) and (max-width: 430px) {
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

   @media (min-width: 320px) and (max-width: 430px) {
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

   @media (min-width: 320px) and (max-width: 430px) {
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

   @media (min-width: 320px) and (max-width: 430px) {
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

   @media (min-width: 320px) and (max-width: 430px) {
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

   /* .avalon-logo {
      width: 63%;
      height: 63%;
   } */
</style>
@endsection
@extends('layouts.app')

@section('content')


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
    <div class="container mx-auto h-full lg:flex justify-center items-center xl:pb-[210px] 2xl:pb-[280px]">
        <div class="flex flex-wrap w-full justify-center ">
            {{-- <div class="w-full px-4 lg:w-1/2"> --}}
            <div class="p-4 text-center ">
               {{-- <div class="mb-16 max-w-[500px] lg:mb-0"> --}}
               <div id="hero-title">   
                  <h1 class="mb-12 text-3xl font-bold !leading-[1.208] text-dark sm:text-4xl lg:text-[42px] 2xl:text-6xl">
                     Empowering your<br>            
                     business presence.
                  </h1>
                  <ul class="flex flex-wrap items-center justify-center lg:pr-6">
                     <li>
                           <a
                              href="#aboutUs"
                              class="
                              bg-dark dark:bg-dark-2 border-dark dark:border-dark-2 border rounded-md inline-flex items-center justify-center py-2 px-4 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
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
        <header x-data="{navbarOpen: false}" class="bottom-0 absolute" :class="{ 'icon-bottom-padding lg:absolute' : window.innerWidth !== 1024,'icon-bottom lg:absolute': window.innerWidth === 1024 }">
            <div class="mx-auto " :class="{ 'mt-12': isMobile }">
                <div class="flex items-center justify-center ">
                    <div class="flex w-full ">
                        <div class="flex w-full ">
                           {{-- <div @click.outside="navbarOpen = false" class="group relative md:hidden sm:block">
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
                               </div> --}}
                            <div class="hidden md:block w-full mt-12 b-0 xl:px-24 ">
                                 <nav>
                                    <ul :class="{'flex space-x-[25px] justify-center ': !isMobile, 'flex space-x-2 justify-center': isMobile}">
                                       <?php 
                                          $icon_images = [
                                             [
                                                'filepath' => 'books.png',
                                                'filename' => 'Bookstore Foundation'
                                             ],
                                             [
                                                'filepath' => 'volume.png',
                                                'filename' => 'Audiobook'
                                             ],
                                             [
                                                'filepath' => 'newspaper.png',
                                                'filename' => 'Print Ads'
                                             ],
                                             [
                                                'filepath' => 'global.png',
                                                'filename' => 'Internet Services'
                                             ],
                                             [
                                                'filepath' => 'code.png',
                                                'filename' => 'Web Services'
                                             ],
                                             [
                                                'filepath' => 'megaphone.png',
                                                'filename' => 'Social Media'
                                             ],
                                             [
                                                'filepath' => 'headset.png',
                                                'filename' => 'Podcast'
                                             ],
                                             [
                                                'filepath' => 'youtube.png',
                                                'filename' => 'Youtube Marketing'
                                             ],
                                             [
                                                'filepath' => 'head-idea.png',
                                                'filename' => 'Literary Agent Circle'
                                             ],
                                             [
                                                'filepath' => 'building.png',
                                                'filename' => 'Trad Pub Pitch'
                                             ],
                                             [
                                                'filepath' => 'video-alt.png',
                                                'filename' => 'Animation Trailer'
                                             ],
                                             [
                                                'filepath' => 'video-alt-1.png',
                                                'filename' => 'Cinematic Trailer'
                                             ]
                                             ,[
                                                'filepath' => 'video-camera.png',
                                                'filename' => 'Film Pitch Pro'
                                             ],
                                          ];
                                       ?>
                                       @foreach($icon_images as $index => $row)
                                          <li class="fade-right" id="hero-icon{{ $index }}">
                                             <div class="relative ">
                                                <a href="<?php
                                                      if (in_array($index, [1, 2, 5, 6, 7, 8, 9])) {
                                                         echo route('services') . '?category=Digital Media and Marketing';
                                                      } 
                                                      else if(in_array($index, [3, 4, 8, 9])) {
                                                         echo route('services') . '?category=Tech and Dev';
                                                      }
                                                      else if(in_array($index, [0, 4, 2, 8, 9])) {
                                                         echo route('services') . '?category=Book Creation';
                                                      }
                                                    /*   else if(in_array($index, [3, 4, 8, 9])) {
                                                         echo route('services') . '?category=Business Affairs';
                                                      } */
                                                      else if(in_array($index, [10, 11, 12])) {
                                                         echo route('services') . '?category=Book-to-film/TV';
                                                      }
                                                   ?>" class="flex justify-center items-center img-up text-base font-medium text-white dark:text-dark-6 hover:text-primary">
                                                   <img src="{{ asset('images/page1_icon').'/'.$row['filepath'] }}" class="img-icon" alt="img-icon">
                                                   <p class="img-description">{{ $row['filename'] }}</p>
                                                </a>
                                             </div>
                                          </li>
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
    
    <div x-data="{ stripeNotification: '{{ session('stripe_save') }}' }" x-show="stripeNotification" class="fixed z-[60] w-1/2 lg:w-[30%] 2xl:w-[25%] top-20 right-0 flex 
      items-center rounded-lg border border-green-light-4 dark:border-green bg-white dark:bg-dark-2 p-5"
      :class="{ 'w-full': isMobile, '': !isMobile}">
      <div class="mr-5 flex h-[60px] w-full max-w-[60px] items-center justify-center rounded-[5px] bg-green">
         <svg 
            width="24" 
            height="25" 
            viewBox="0 0 24 25"
            fill="none" 
            xmlns="http://www.w3.org/2000/svg"
            >
            <path 
               d="M12 1.17499C5.7375 1.17499 0.675003 6.23749 0.675003 12.5C0.675003 18.7625 5.7375 23.8625 12 23.8625C18.2625 23.8625 23.3625 18.7625 23.3625 12.5C23.3625 6.23749 18.2625 1.17499 12 1.17499ZM12 22.175C6.675 22.175 2.3625 17.825 2.3625 12.5C2.3625 7.17499 6.675 2.86249 12 2.86249C17.325 2.86249 21.675 7.21249 21.675 12.5375C21.675 17.825 17.325 22.175 12 22.175Z" 
               fill="white"
               />
            <path 
               d="M15.225 9.01248L10.7625 13.3625L8.7375 11.375C8.4 11.0375 7.875 11.075 7.5375 11.375C7.2 11.7125 7.2375 12.2375 7.5375 12.575L9.9375 14.9C10.1625 15.125 10.4625 15.2375 10.7625 15.2375C11.0625 15.2375 11.3625 15.125 11.5875 14.9L16.425 10.25C16.7625 9.91248 16.7625 9.38748 16.425 9.04998C16.0875 8.71248 15.5625 8.71248 15.225 9.01248Z" 
               fill="white"
               />
         </svg>
      </div>
      <div class="flex w-full items-center justify-between">
         <div>
            <h6 class="text-base font-semibold text-dark dark:text-white sm:text-lg mb-0.5">
            Congratulations
            </h6>
            <p class="text-body-color text-sm dark:text-dark-6">
            your transaction was successful
            </p>
         </div>
         <button class="text-dark-5 dark:text-dark-6 hover:text-green" @click="stripeNotification = false">
               <svg 
               width="16" 
               height="16" 
               viewBox="0 0 16 16" 
               fill="none" 
               xmlns="http://www.w3.org/2000/svg"
               class="fill-current"
               >
               <g clip-path="url(#clip0_1088_26057)">
                  <path 
                     d="M8.79999 7.99999L14.9 1.89999C15.125 1.67499 15.125 1.32499 14.9 1.09999C14.675 0.874994 14.325 0.874994 14.1 1.09999L7.99999 7.19999L1.89999 1.09999C1.67499 0.874994 1.32499 0.874994 1.09999 1.09999C0.874994 1.32499 0.874994 1.67499 1.09999 1.89999L7.19999 7.99999L1.09999 14.1C0.874994 14.325 0.874994 14.675 1.09999 14.9C1.19999 15 1.34999 15.075 1.49999 15.075C1.64999 15.075 1.79999 15.025 1.89999 14.9L7.99999 8.79999L14.1 14.9C14.2 15 14.35 15.075 14.5 15.075C14.65 15.075 14.8 15.025 14.9 14.9C15.125 14.675 15.125 14.325 14.9 14.1L8.79999 7.99999Z" 
                     />
               </g>
               <defs>
                  <clipPath id="clip0_1088_26057">
                     <rect width="16" height="16" fill="white"/>
                  </clipPath>
               </defs>
               </svg>
         </button>
      </div>
   </div>
</div>
<!-- ====== Hero Section End -->

<div class="wave-container bg-[#011523]">
   <div class="waves">
		<div class="wave opacity-1 dark:invert" id="wave1"></div>
		<div class="wave opacity-50 dark:opacity-1 dark:invert-[50%]" id="wave2"></div>
		<div class="wave opacity-20 dark:opacity-1 dark:invert-[80%]" id="wave3"></div>
		<div class="wave opacity-0 dark:opacity-1 dark:invert-[30%]" id="wave4"></div>
	</div>
</div>

<!-- ====== About Section Start -->
<section class="overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]" id="aboutUs">
   <div class="container mx-auto">
      <div class="flex flex-wrap items-center justify-between -mx-4">
         <div class="w-full px-4 lg:w-6/12" id="whatWeDoImage">
            <div class="relative mx-auto flex h-[500px] max-w-[440px]">
               <div class="absolute left-0 z-30 mr-14 max-w-[270px] rounded-lg">
                  <img
                     src="{{ asset('/images/services/image-1.jpg') }}"
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
                           class="dark:fill-white"
                           />
                        <circle
                           cx="44.6667"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 44.6667 30.9998)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="1.66667"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 1.66667 30.9998)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="29.9999"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 29.9999 30.9998)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="58.9999"
                           cy="30.9998"
                           r="1.66667"
                           transform="rotate(-90 58.9999 30.9998)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="15.6667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 15.6667 16.3333)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="44.6667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 44.6667 16.3333)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="1.66667"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 1.66667 16.3333)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="29.9999"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 29.9999 16.3333)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="58.9999"
                           cy="16.3333"
                           r="1.66667"
                           transform="rotate(-90 58.9999 16.3333)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="15.6667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 15.6667 45.3336)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="15.6667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 15.6667 1.66683)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="44.6667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 44.6667 45.3336)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="44.6667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 44.6667 1.66683)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="1.66667"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 1.66667 45.3336)"
                           fill="##090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="1.66667"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 1.66667 1.66683)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="29.9999"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 29.9999 45.3336)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="29.9999"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 29.9999 1.66683)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="58.9999"
                           cy="45.3336"
                           r="1.66667"
                           transform="rotate(-90 58.9999 45.3336)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                        <circle
                           cx="58.9999"
                           cy="1.66683"
                           r="1.66667"
                           transform="rotate(-90 58.9999 1.66683)"
                           fill="#090E34"
                           class="dark:fill-white"
                           />
                     </svg>
                  </span>
                  <span class="absolute -left-36 -bottom-20 z-[-1] -sm:left-72">
                     <svg xmlns="http://www.w3.org/2000/svg" width="700" height="450" viewBox="0 0 757 450" fill="none">
                        <g filter="url(#filter0_d)">
                        <path d="M 15 419 C 280 458 277 379 314 345 C 361 254 331 252 401 144 C 492 33 606.689 7 740 7" class="dark:stroke-white" stroke="#090E34" stroke-width="10" stroke-linecap="round"/>
                        </g>
                        <path d="M 15 419 C 280 458 277 379 314 345 C 361 254 331 252 401 144 C 492 33 606.689 7 740 7" class="dark:stroke-white" stroke="#090E34" stroke-width="12" stroke-linecap="round"/>
                     </svg>   
                  </span>
               </div>
               <div
                  class="absolute right-0 top-20 z-30 ml-14 max-w-[300px] rounded-lg"
                  >
                  <img
                     src="{{ asset('/images/services/image-1.jpg') }}"
                     alt="about image"
                     class="w-full rounded-lg"
                     />
               </div>
            </div>
         </div>
         <div class="w-full px-4 lg:w-1/2 2xl:w-5/12 opacity-0" id="whatWeDoText">
            <div class="sm:mt-10 lg:mt-0">
               <span
                  class="block mb-2 text-lg font-semibold uppercase text-dark dark:text-white"
                  >
               WHO WE ARE
               </span>
               <h2
                  class="mb-11 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-4xl sm:leading-tight md:text-[40px]/[48px]"
                  >
                  Maximizing your business growth with innovative strategies.
               </h2>
               <h3 class="mb-4 text-lg font-bold text-dark dark:text-white">
                  VISION
               </h3>
               <p class="text-base text-body-color dark:text-dark-6 mb-9">
                  Become a top player in the digital marketing industry of good reputation. With creative solutions, 
                  and a dedication to excellence, we aim to lead positive changes and set new ethical standards for the industry.
               </p>
               <h3 class="mb-4 text-lg font-bold text-dark dark:text-white">
                  MISSION
               </h3>
               <p class="text-base text-body-color dark:text-dark-6">
                  We provide excellent services tailored to market needs, guarantees client satisfaction, continuous 
                  improvements, and uphold ethical business practices, creating lasting value for the workforce, the clients, and the stakeholders.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== About Section End -->

<div class="dark:bg-dark flex justify-center items-center py-20 overflow-hidden" x-data="{ isMobile: window.innerWidth <= 600 }"  x-init="() => {
      window.addEventListener('resize', () => {
         isMobile = window.innerWidth <= 600;
         console.log(window.innerWidth);
      });
   }">
   <!-- ====== Services Section Start -->
   <section class="relative pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark bacground-our-services w-full z-40">
      <span class="absolute -z-10 h-full w-full dark:invert" id="bacground-our-services-wave1"></span>
      <span class="absolute -z-10 h-full w-full dark:invert" id="bacground-our-services-wave2"></span>
      <span class="absolute -z-10 h-full w-full dark:invert" id="bacground-our-services-wave3"></span>
      <span class="absolute -z-10 h-full w-full dark:invert" id="bacground-our-services-wave4"></span>
      <div class="container mx-auto">
         <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
               <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                  {{-- <span class="block mb-2 text-lg font-semibold text-primary">What we Serve</span> --}}
                  <h2 class="text-white dark:text-dark mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                     Our Services
                  </h2>
                  <a
                     href="{{ route('services') }}"
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
         <?php
            $slidesData = [
               [
                  'svg' => '<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_714_6527)">
                  <path d="M44.6475 8.79596V35.5349C44.6475 36.5158 43.8522 37.3111 42.8713 37.3111H25.272C24.8311 38.3225 23.8222 39.0298 22.6475 39.0298C21.4736 39.0298 20.4646 38.3225 20.0238 37.3111H2.42362C1.44273 37.3111 0.647461 36.5158 0.647461 35.5349V8.79596C0.647461 7.81507 1.44273 7.01981 2.42362 7.01981H20.0238C20.4646 8.03129 21.4736 8.73856 22.6475 8.73856C23.8222 8.73856 24.8311 8.03129 25.272 7.01981H42.8713C43.8522 7.01981 44.6475 7.81507 44.6475 8.79596Z" fill="#6770E6"/>
                  <path d="M42.8713 35.5923H2.42362C1.44273 35.5923 0.647461 34.797 0.647461 33.8161V35.5349C0.647461 36.5158 1.44273 37.3111 2.42362 37.3111H20.0238C20.4646 38.3225 21.4736 39.0298 22.6475 39.0298C23.8222 39.0298 24.8311 38.3225 25.272 37.3111H42.8713C43.8522 37.3111 44.6475 36.5158 44.6475 35.5349V33.8161C44.6475 34.797 43.8522 35.5923 42.8713 35.5923Z" fill="#333399"/>
                  <path d="M20.023 6.26527H2.53421C2.29152 6.26527 2.09473 6.46207 2.09473 6.70476V35.5437C2.09473 35.7863 2.29152 35.9831 2.53421 35.9831H20.023C21.1931 35.9831 21.2755 37.3573 22.657 37.3573V35.9831V7.63941C22.657 6.88059 21.4771 6.26527 20.023 6.26527Z" fill="#FFEFE4"/>
                  <path d="M42.7796 6.26527H25.291C23.8369 6.26527 22.657 6.88059 22.657 7.63941V35.9833V37.3575C24.0385 37.3575 24.1208 35.9833 25.291 35.9833H42.7798C43.0225 35.9833 43.2192 35.7865 43.2192 35.5438V6.70476C43.2192 6.46207 43.0225 6.26527 42.7796 6.26527Z" fill="#FFE4D1"/>
                  <path d="M20.023 6.26527H2.53421C2.29152 6.26527 2.09473 6.46207 2.09473 6.70476V7.56413C2.09473 7.32145 2.29152 7.12465 2.53421 7.12465H20.023C21.4771 7.12465 22.657 7.73996 22.657 8.49879V7.63941C22.657 6.88059 21.4771 6.26527 20.023 6.26527Z" fill="#FFF7F2"/>
                  <path d="M42.7796 6.26527H25.291C23.8369 6.26527 22.657 6.88059 22.657 7.63941V8.49879C22.657 7.73996 23.8369 7.12465 25.291 7.12465H42.7798C43.0225 7.12465 43.2192 7.32145 43.2192 7.56413V6.70476C43.2192 6.46207 43.0225 6.26527 42.7796 6.26527Z" fill="#FFEFE4"/>
                  <path d="M37.9307 15.4852H27.9453C27.4708 15.4852 27.0859 15.1003 27.0859 14.6258C27.0859 14.1512 27.4708 13.7664 27.9453 13.7664H37.9307C38.4053 13.7664 38.7901 14.1512 38.7901 14.6258C38.7901 15.1003 38.4053 15.4852 37.9307 15.4852Z" fill="#FFF7F2"/>
                  <path d="M37.9307 20.2755H27.9453C27.4708 20.2755 27.0859 19.8907 27.0859 19.4161C27.0859 18.9416 27.4708 18.5567 27.9453 18.5567H37.9307C38.4053 18.5567 38.7901 18.9416 38.7901 19.4161C38.7901 19.8907 38.4053 20.2755 37.9307 20.2755Z" fill="#FFF7F2"/>
                  <path d="M37.9307 25.066H27.9453C27.4708 25.066 27.0859 24.6812 27.0859 24.2066C27.0859 23.7321 27.4708 23.3472 27.9453 23.3472H37.9307C38.4053 23.3472 38.7901 23.7321 38.7901 24.2066C38.7901 24.6812 38.4053 25.066 37.9307 25.066Z" fill="#FFF7F2"/>
                  <path d="M37.9307 29.8563H27.9453C27.4708 29.8563 27.0859 29.4715 27.0859 28.9969C27.0859 28.5224 27.4708 28.1376 27.9453 28.1376H37.9307C38.4053 28.1376 38.7901 28.5224 38.7901 28.9969C38.7901 29.4715 38.4053 29.8563 37.9307 29.8563Z" fill="#FFF7F2"/>
                  <path d="M17.3685 25.066H7.38306C6.90851 25.066 6.52368 24.6812 6.52368 24.2066C6.52368 23.7321 6.90851 23.3472 7.38306 23.3472H17.3685C17.843 23.3472 18.2279 23.7321 18.2279 24.2066C18.2279 24.6812 17.843 25.066 17.3685 25.066Z" fill="#EDD4C2"/>
                  <path d="M17.3685 29.8563H7.38306C6.90851 29.8563 6.52368 29.4715 6.52368 28.9969C6.52368 28.5224 6.90851 28.1376 7.38306 28.1376H17.3685C17.843 28.1376 18.2279 28.5224 18.2279 28.9969C18.2279 29.4715 17.843 29.8563 17.3685 29.8563Z" fill="#EDD4C2"/>
                  <path d="M17.4948 20.2755H7.25673C6.85196 20.2755 6.52368 19.9474 6.52368 19.5424V14.4995C6.52368 14.0947 6.85179 13.7664 7.25673 13.7664H17.4948C17.8996 13.7664 18.2279 14.0945 18.2279 14.4995V19.5426C18.2279 19.9474 17.8996 20.2755 17.4948 20.2755Z" fill="#D476E2"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_714_6527">
                  <rect width="44" height="44" fill="white" transform="translate(0.647461 0.647537)"/>
                  </clipPath>
                  </defs>
                  </svg>',
                  'title' => 'Bookstore Foundation',
                  'content' => 'Supporting and growing independent bookstores.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M41.2049 31.3857C41.031 31.3857 40.8548 31.3417 40.6931 31.249C40.1989 30.9658 40.0279 30.3357 40.311 29.8415C41.3749 27.9851 41.9373 25.8686 41.9373 23.7209C41.9373 21.5523 41.3646 19.4182 40.2812 17.549C39.9958 17.0563 40.1635 16.4253 40.6565 16.1397C41.1496 15.8542 41.7803 16.0221 42.0658 16.5149C43.331 18.6978 43.9998 21.1897 43.9998 23.7211C43.9998 26.2282 43.343 28.6993 42.1005 30.8673C41.9103 31.1995 41.5626 31.3857 41.2049 31.3857Z" fill="#D476E2"/>
                  <path d="M37.9668 30.0401C37.8004 30.0401 37.6318 29.9998 37.4754 29.9148C36.975 29.6428 36.7896 29.0167 37.0615 28.5162C37.8555 27.0542 38.2753 25.3962 38.2753 23.7207C38.2753 21.9513 37.8098 20.2115 36.9293 18.6896C36.6442 18.1967 36.8124 17.5657 37.3054 17.2806C37.7987 16.9949 38.4293 17.1639 38.7144 17.6566C39.7764 19.4923 40.3376 21.5891 40.3376 23.7207C40.3376 25.7389 39.8314 27.7376 38.8736 29.5009C38.6867 29.845 38.3323 30.0401 37.9668 30.0401Z" fill="#D476E2"/>
                  <path d="M2.79503 31.3857C2.43736 31.3857 2.08983 31.1995 1.89922 30.8669C0.656734 28.6989 0 26.2279 0 23.7207C0 21.1893 0.668766 18.6975 1.93394 16.5145C2.21959 16.0216 2.85037 15.8535 3.34331 16.1393C3.83608 16.425 4.004 17.0559 3.71852 17.5487C2.63519 19.4178 2.0625 21.552 2.0625 23.7205C2.0625 25.8683 2.6247 27.9849 3.68878 29.8412C3.97186 30.3353 3.80084 30.9654 3.3067 31.2487C3.14514 31.3417 2.9688 31.3857 2.79503 31.3857Z" fill="#D476E2"/>
                  <path d="M6.03337 30.0401C5.66762 30.0401 5.31338 29.845 5.12638 29.5009C4.1687 27.7376 3.66235 25.7389 3.66235 23.7207C3.66235 21.5891 4.2237 19.4921 5.28554 17.6566C5.57085 17.1639 6.20129 16.9947 6.69457 17.2806C7.18751 17.5657 7.35595 18.1967 7.07063 18.6896C6.19012 20.2115 5.72468 21.9514 5.72468 23.7207C5.72468 25.3962 6.1444 27.0544 6.93846 28.5162C7.21037 29.0167 7.02492 29.6428 6.52459 29.9148C6.36835 29.9997 6.19957 30.0401 6.03337 30.0401Z" fill="#D476E2"/>
                  <path d="M32.1945 44H11.5726C9.59947 44 8 42.4005 8 40.4274V3.57259C8 1.59947 9.59947 0 11.5726 0H32.1943C34.1675 0 35.7669 1.59947 35.7669 3.57259V40.4272C35.7671 42.4005 34.1676 44 32.1945 44Z" fill="#69EBFC"/>
                  <path d="M32.1945 0H11.5726C9.59947 0 8 1.59947 8 3.57259V4.77572C8 2.80259 9.59947 1.20312 11.5726 1.20312H32.1943C34.1675 1.20312 35.7669 2.80259 35.7669 4.77572V3.57259C35.7671 1.59947 34.1676 0 32.1945 0Z" fill="#A1F1FC"/>
                  <path d="M11.5726 44H32.1943C34.1675 44 35.7669 42.4005 35.7669 40.4274V39.2243C35.7669 41.1974 34.1675 42.7969 32.1943 42.7969H11.5726C9.59947 42.7969 8 41.1974 8 39.2243V40.4274C8 42.4005 9.59947 44 11.5726 44Z" fill="#5FD4E3"/>
                  <path d="M11.5726 42.2812C10.5505 42.2812 9.71875 41.4495 9.71875 40.4274V5.80697C9.71875 4.78483 10.5505 3.95312 11.5726 3.95312H32.1943C33.2165 3.95312 34.0482 4.78483 34.0482 5.80697V40.4274C34.0482 41.4495 33.2165 42.2812 32.1943 42.2812H11.5726Z" fill="#FFEFE4"/>
                  <path d="M20.6622 15.8161H12.1783C11.7692 15.8161 11.4375 15.4844 11.4375 15.0753V6.5914C11.4375 6.18233 11.7692 5.85062 12.1783 5.85062H20.6622C21.0713 5.85062 21.403 6.18233 21.403 6.5914V15.0753C21.403 15.4844 21.0713 15.8161 20.6622 15.8161Z" fill="#FF8354"/>
                  <path d="M16.4201 7.14157C16.8977 7.14157 17.3254 7.43771 17.4935 7.88493L19.6264 13.5623C19.8014 14.0281 19.4571 14.5253 18.9595 14.5253C18.6557 14.5253 18.3851 14.3325 18.286 14.0453L17.8432 12.7619H14.997L14.5542 14.0453C14.455 14.3325 14.1847 14.5253 13.8808 14.5253C13.3832 14.5253 13.0388 14.0281 13.2139 13.5623L15.3469 7.88493C15.5148 7.43771 15.9425 7.14157 16.4201 7.14157ZM17.3895 11.4831L16.7295 9.6372L16.4613 8.74001H16.3788L16.1107 9.6372L15.4507 11.4831H17.3895Z" fill="#FFEFE4"/>
                  <path d="M31.4415 7.62696H23.8812C23.3907 7.62696 22.9932 7.22941 22.9932 6.73888C22.9932 6.24835 23.3907 5.8508 23.8812 5.8508H31.4415C31.932 5.8508 32.3296 6.24835 32.3296 6.73888C32.3296 7.22924 31.9319 7.62696 31.4415 7.62696Z" fill="#EDD4C2"/>
                  <path d="M31.4415 11.7215H23.8812C23.3907 11.7215 22.9932 11.324 22.9932 10.8335C22.9932 10.3429 23.3907 9.94537 23.8812 9.94537H31.4415C31.932 9.94537 32.3296 10.3429 32.3296 10.8335C32.3296 11.3238 31.9319 11.7215 31.4415 11.7215Z" fill="#EDD4C2"/>
                  <path d="M31.4415 15.8161H23.8812C23.3907 15.8161 22.9932 15.4186 22.9932 14.928C22.9932 14.4375 23.3907 14.0399 23.8812 14.0399H31.4415C31.932 14.0399 32.3296 14.4375 32.3296 14.928C32.3296 15.4186 31.9319 15.8161 31.4415 15.8161Z" fill="#EDD4C2"/>
                  <path d="M31.4415 19.9107H12.3256C11.835 19.9107 11.4375 19.5131 11.4375 19.0226C11.4375 18.5321 11.835 18.1345 12.3256 18.1345H31.4415C31.932 18.1345 32.3296 18.5321 32.3296 19.0226C32.3296 19.5131 31.9319 19.9107 31.4415 19.9107Z" fill="#EDD4C2"/>
                  <path d="M31.4415 24.0053H12.3256C11.835 24.0053 11.4375 23.6077 11.4375 23.1172C11.4375 22.6267 11.835 22.2291 12.3256 22.2291H31.4415C31.932 22.2291 32.3296 22.6267 32.3296 23.1172C32.3296 23.6077 31.9319 24.0053 31.4415 24.0053Z" fill="#EDD4C2"/>
                  <path d="M31.4415 28.0998H12.3256C11.835 28.0998 11.4375 27.7023 11.4375 27.2118C11.4375 26.7212 11.835 26.3237 12.3256 26.3237H31.4415C31.932 26.3237 32.3296 26.7212 32.3296 27.2118C32.3296 27.7023 31.9319 28.0998 31.4415 28.0998Z" fill="#EDD4C2"/>
                  <path d="M31.4415 32.1944H12.3256C11.835 32.1944 11.4375 31.7969 11.4375 31.3064C11.4375 30.8158 11.835 30.4183 12.3256 30.4183H31.4415C31.932 30.4183 32.3296 30.8158 32.3296 31.3064C32.3296 31.7969 31.9319 32.1944 31.4415 32.1944Z" fill="#EDD4C2"/>
                  <path d="M21.8835 36.289H12.3256C11.835 36.289 11.4375 35.8915 11.4375 35.4009C11.4375 34.9104 11.835 34.5128 12.3256 34.5128H21.8835C22.3741 34.5128 22.7716 34.9104 22.7716 35.4009C22.7716 35.8915 22.3741 36.289 21.8835 36.289Z" fill="#EDD4C2"/>
                  <path d="M31.4415 36.289H12.3256C11.835 36.289 11.4375 35.8915 11.4375 35.4009C11.4375 34.9104 11.835 34.5128 12.3256 34.5128H31.4415C31.932 34.5128 32.3296 34.9104 32.3296 35.4009C32.3296 35.8915 31.9319 36.289 31.4415 36.289Z" fill="#EDD4C2"/>
                  <path d="M21.8835 40.3837H12.3256C11.835 40.3837 11.4375 39.9862 11.4375 39.4957C11.4375 39.0051 11.835 38.6076 12.3256 38.6076H21.8835C22.3741 38.6076 22.7716 39.0051 22.7716 39.4957C22.7716 39.986 22.3741 40.3837 21.8835 40.3837Z" fill="#EDD4C2"/>
                  <path d="M25.4306 2.73523H15.7585C15.3314 2.73523 14.9851 2.3889 14.9851 1.96179C14.9851 1.53468 15.3314 1.18835 15.7585 1.18835H25.4306C25.8577 1.18835 26.2041 1.53468 26.2041 1.96179C26.2041 2.3889 25.8577 2.73523 25.4306 2.73523Z" fill="#5FD4E3"/>
                  <path d="M28.0085 2.73523C28.4357 2.73523 28.782 2.38895 28.782 1.96179C28.782 1.53463 28.4357 1.18835 28.0085 1.18835C27.5814 1.18835 27.2351 1.53463 27.2351 1.96179C27.2351 2.38895 27.5814 2.73523 28.0085 2.73523Z" fill="#5FD4E3"/>
                  </svg>',
                  'title' => 'Audiobook',
                  'content' => 'Your written book into high-quality and engaging audio.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22.0217 44.0038C34.172 44.0038 44.0217 34.154 44.0217 22.0038C44.0217 9.85352 34.172 0.00378418 22.0217 0.00378418C9.87146 0.00378418 0.0217285 9.85352 0.0217285 22.0038C0.0217285 34.154 9.87146 44.0038 22.0217 44.0038Z" fill="#8F95E6"/>
                  <path d="M22.0217 42.285C10.1594 42.285 0.491635 32.8962 0.0399473 21.1444C0.0289473 21.4297 0.0217285 21.7159 0.0217285 22.0038C0.0217285 34.154 9.87154 44.0038 22.0217 44.0038C34.1719 44.0038 44.0217 34.154 44.0217 22.0038C44.0217 21.7159 44.0145 21.4297 44.0035 21.1444C43.5518 32.8962 33.884 42.285 22.0217 42.285Z" fill="#6770E6"/>
                  <path d="M26.4892 8.56334C26.2963 7.81757 25.4734 6.76054 22.3547 6.76054C17.5366 6.76054 16.8506 7.474 15.5683 6.24182C14.4863 5.20215 13.851 10.2058 15.2936 11.7948C14.6846 14.0453 15.1717 16.2994 15.1717 16.2994H21.9498H28.7279C28.7279 16.2994 29.8655 11.034 26.4892 8.56334Z" fill="#333399"/>
                  <path d="M15.5681 7.44511C16.8503 8.67728 17.5364 7.96383 22.3546 7.96383C25.4733 7.96383 26.2964 9.02086 26.4891 9.76663C28.2846 11.0804 28.8034 13.1845 28.8957 14.867C28.9864 13.1268 28.7511 10.2187 26.4891 8.5635C26.2962 7.81774 25.4733 6.7607 22.3546 6.7607C17.5364 6.7607 16.8505 7.47416 15.5681 6.24199C14.8571 5.55861 14.339 7.48602 14.4769 9.33849C14.5769 7.96864 15.0133 6.91196 15.5681 7.44511Z" fill="#5861C7"/>
                  <path d="M16.5405 16.5364C16.5405 16.5364 15.9561 15.4658 14.7872 15.4658C13.6183 15.4658 12.7906 20.6046 16.5405 19.7481V16.5364Z" fill="#FFE4D1"/>
                  <path d="M27.3589 16.5364C27.3589 16.5364 27.9433 15.4658 29.1122 15.4658C30.2809 15.4658 31.1089 20.6046 27.3589 19.7481V16.5364Z" fill="#FFE4D1"/>
                  <path d="M21.9495 9.65044C12.9948 9.65044 14.707 24.3368 21.9495 24.3368C29.1921 24.3368 30.9043 9.65044 21.9495 9.65044Z" fill="#FFEFE4"/>
                  <path d="M21.9495 8.85105C21.9495 8.85105 15.8586 7.99185 15.8586 15.8068C15.8586 15.8068 16.6255 12.5768 18.385 11.6958C19.2045 11.2855 19.5046 12.3248 21.9495 12.3248C24.3945 12.3248 24.6946 11.2853 25.5141 11.6958C27.2736 12.5766 28.0405 15.8068 28.0405 15.8068C28.0405 7.99167 21.9495 8.85105 21.9495 8.85105Z" fill="#333399"/>
                  <path d="M31.8097 28.1762L26.3067 26.368C25.7877 26.1975 25.435 25.7149 25.4302 25.1685L25.4106 22.9464C24.4907 23.7744 23.3458 24.2877 22.0069 24.2995C20.6682 24.3114 19.5144 23.8183 18.5801 23.0067L18.599 25.1508C18.604 25.7058 18.2491 26.2001 17.7217 26.373L12.2211 28.1772C10.5736 28.7176 9.45972 30.2552 9.45972 31.9889V40.0653C12.9445 42.4935 17.1645 43.9386 21.7192 44.0002H22.3244C26.8727 43.9388 31.0871 42.4976 34.5689 40.0758V31.9873C34.5689 30.2541 33.456 28.7171 31.8097 28.1762Z" fill="#FF8354"/>
                  <path d="M34.5689 38.357C31.0102 40.8329 26.6858 42.285 22.0216 42.285C17.3509 42.285 13.0211 40.8287 9.45947 38.3465V40.0653C9.45964 40.0654 9.45999 40.0656 9.46016 40.0658C9.89518 40.369 10.3419 40.6567 10.7991 40.9286C10.7998 40.9289 10.8004 40.9293 10.8011 40.9298C11.2581 41.2014 11.7258 41.4568 12.2035 41.6953C12.2043 41.6958 12.2053 41.6962 12.2062 41.6967C12.6838 41.9351 13.1713 42.1568 13.6678 42.3608C13.6687 42.3612 13.6694 42.3615 13.6702 42.3619C16.1573 43.3831 18.8729 43.9618 21.7191 44.0003H22.3243C24.5984 43.9696 26.7891 43.594 28.8465 42.9234C28.8465 42.9234 28.8465 42.9234 28.8466 42.9234C29.3605 42.7558 29.8662 42.5698 30.3627 42.3663C30.3634 42.3662 30.3641 42.3658 30.3648 42.3655C30.861 42.162 31.3481 41.9408 31.8254 41.7029C31.8261 41.7025 31.8268 41.7022 31.8273 41.7019C32.3046 41.4638 32.7721 41.2089 33.2289 40.9379C33.2294 40.9375 33.2298 40.9374 33.2303 40.937C33.6873 40.6658 34.1338 40.3786 34.5689 40.0759V38.357Z" fill="#E0734A"/>
                  <path d="M21.8178 31.1829C24.6395 31.1829 27.0462 29.4118 27.9905 26.9213L26.3067 26.368C25.7876 26.1974 25.4349 25.7149 25.4301 25.1685L25.4105 22.9464C24.4906 23.7744 23.3458 24.2877 22.0069 24.2995C20.6681 24.3114 19.5143 23.8183 18.58 23.0067L18.5989 25.1508C18.6037 25.7058 18.249 26.2001 17.7217 26.373L15.6917 27.0389C16.6662 29.4673 19.041 31.1829 21.8178 31.1829Z" fill="#FFE4D1"/>
                  <path d="M22.0217 1.72253C33.884 1.72253 43.5518 11.1114 44.0035 22.8632C44.0145 22.5778 44.0217 22.2917 44.0217 22.0038C44.0217 9.8536 34.1719 0.00378418 22.0217 0.00378418C9.87154 0.00378418 0.0217285 9.8536 0.0217285 22.0038C0.0217285 22.2917 0.0289473 22.5778 0.0399473 22.8632C0.491635 11.1114 10.1594 1.72253 22.0217 1.72253Z" fill="#9FA5FF"/>
                  <path d="M6.46411 26.3942V37.5588C10.3793 41.4745 15.7636 43.9196 21.7192 44H22.3244C22.3354 43.9998 22.3464 43.9998 22.3574 43.9997V30.8392L7.14078 25.9024C6.80666 25.794 6.46411 26.043 6.46411 26.3942Z" fill="#69EBFC"/>
                  <path d="M22.0217 42.285C15.9451 42.285 10.4451 39.8205 6.46411 35.8377V37.559C6.51086 37.6057 6.55899 37.6515 6.60625 37.6979C6.68325 37.7735 6.75991 37.8496 6.83811 37.9242C6.8993 37.9827 6.96203 38.0397 7.02391 38.0975C7.08956 38.1587 7.15453 38.2204 7.22088 38.2809C7.28825 38.3421 7.357 38.402 7.42506 38.4624C7.48728 38.5175 7.54881 38.5734 7.61155 38.6279C7.68442 38.6911 7.75867 38.753 7.83258 38.8152C7.89188 38.8652 7.95049 38.9161 8.0103 38.9654C8.08867 39.0302 8.16842 39.0937 8.24783 39.1574C8.30403 39.2026 8.35972 39.2487 8.41644 39.2934C8.50049 39.3596 8.58574 39.4243 8.67081 39.4893C8.7241 39.5301 8.77669 39.5713 8.83014 39.6115C8.91917 39.6782 9.00924 39.7435 9.0993 39.8088C9.15017 39.8458 9.20036 39.8834 9.25158 39.9199C9.3456 39.9871 9.44099 40.0526 9.53603 40.1184C9.58399 40.1516 9.6316 40.1852 9.67989 40.2181C9.77941 40.2856 9.87995 40.3514 9.98067 40.4174C10.0255 40.4468 10.0702 40.4769 10.1153 40.5061C10.2192 40.5732 10.3244 40.6386 10.4298 40.7041C10.4726 40.7308 10.515 40.7579 10.558 40.7842C10.6671 40.8511 10.7775 40.9162 10.888 40.9812C10.9275 41.0044 10.9669 41.0283 11.0068 41.0513C11.1212 41.1175 11.2366 41.1823 11.3522 41.2464C11.389 41.2669 11.4255 41.2876 11.4622 41.3079C11.5817 41.3734 11.702 41.4372 11.8228 41.5004C11.8567 41.5181 11.8902 41.5364 11.9241 41.5539C12.0487 41.6183 12.1743 41.6812 12.3005 41.7435C12.3309 41.7584 12.3611 41.7739 12.3917 41.7888C12.5213 41.8521 12.6518 41.9136 12.7829 41.9743C12.8106 41.9872 12.8383 42.0004 12.8659 42.0131C13.0003 42.0748 13.1358 42.1346 13.2717 42.1936C13.2965 42.2043 13.3209 42.2153 13.3456 42.2259C13.4849 42.2857 13.6249 42.3438 13.7655 42.4007C13.7875 42.4096 13.8094 42.4188 13.8315 42.4277C13.975 42.4853 14.1196 42.5413 14.2647 42.596C14.2841 42.6032 14.3035 42.6107 14.3229 42.6181C14.4709 42.6735 14.6198 42.7269 14.7693 42.7792C14.7861 42.785 14.8028 42.791 14.8195 42.7969C14.9719 42.8496 15.1252 42.9007 15.2791 42.9502C15.2932 42.9547 15.3073 42.9595 15.3213 42.9639C15.4781 43.014 15.6355 43.0623 15.7937 43.1088C15.8053 43.1123 15.8169 43.1159 15.8284 43.1191C15.9893 43.1662 16.1508 43.2114 16.3132 43.2549C16.3223 43.2573 16.3313 43.2599 16.3404 43.2623C16.505 43.3061 16.6706 43.3483 16.8368 43.3883C16.8438 43.39 16.8507 43.3917 16.8577 43.3935C17.026 43.4338 17.1951 43.4724 17.3648 43.509C17.3698 43.51 17.3747 43.511 17.3795 43.5122C17.5511 43.549 17.7233 43.5839 17.8964 43.6167C17.8998 43.6174 17.9031 43.6181 17.9065 43.6186C18.081 43.6516 18.2563 43.6826 18.4323 43.7114C18.4342 43.7118 18.4361 43.7121 18.438 43.7123C18.6152 43.7413 18.793 43.7683 18.9718 43.7931C18.9725 43.7931 18.9733 43.7932 18.974 43.7934C19.8729 43.9179 20.7892 43.9881 21.7194 44.0007H22.3246C22.3254 44.0007 22.3265 44.0007 22.3273 44.0007C22.3375 44.0005 22.3474 44.0005 22.3576 44.0004V42.2816C22.2455 42.2826 22.134 42.285 22.0217 42.285Z" fill="#5FD4E3"/>
                  <path d="M38.2505 36.8564V26.3942C38.2505 26.043 37.908 25.7941 37.574 25.9024L22.3574 30.8392V43.9997C28.648 43.9055 34.2986 41.1721 38.2505 36.8564Z" fill="#A1F1FC"/>
                  <path d="M38.2505 35.1356C34.299 39.4524 28.6487 42.1869 22.3574 42.2809V43.9997C25.6985 43.9497 28.8589 43.1551 31.6804 41.7746C31.6832 41.7732 31.6858 41.7718 31.6883 41.7706C31.849 41.6919 32.0085 41.6113 32.1668 41.5288C32.178 41.5229 32.189 41.5171 32.2002 41.5113C32.3501 41.4329 32.4989 41.353 32.6467 41.2713C32.6639 41.2619 32.6809 41.2521 32.6981 41.2426C32.8396 41.1641 32.98 41.084 33.1194 41.0023C33.141 40.9896 33.1625 40.9769 33.1842 40.964C33.3188 40.8846 33.4525 40.8038 33.5853 40.7217C33.6101 40.7064 33.6345 40.6909 33.6591 40.6756C33.7883 40.595 33.9167 40.513 34.0441 40.4297C34.0707 40.4123 34.0972 40.3948 34.1238 40.3772C34.2486 40.2949 34.3725 40.2114 34.4954 40.1265C34.5233 40.1072 34.5511 40.088 34.5789 40.0687C34.7001 39.9843 34.8203 39.8989 34.9395 39.8121C34.9679 39.7915 34.9963 39.7709 35.0246 39.7501C35.1427 39.6634 35.2596 39.5756 35.3758 39.4867C35.4043 39.4649 35.4328 39.4431 35.4612 39.4213C35.5767 39.3321 35.6911 39.2415 35.8047 39.15C35.8326 39.1277 35.8604 39.1054 35.8881 39.083C36.0021 38.9904 36.1148 38.8965 36.2269 38.8017C36.2532 38.7795 36.2795 38.7575 36.3056 38.7351C36.4187 38.6385 36.5308 38.5404 36.642 38.4416C36.6658 38.4203 36.6901 38.3991 36.714 38.3776C36.8272 38.2759 36.9393 38.1728 37.0505 38.0688C37.0711 38.0494 37.0921 38.0303 37.1127 38.0109C37.2274 37.9027 37.3405 37.7933 37.4529 37.6827C37.4692 37.6666 37.4859 37.6508 37.5022 37.6346C37.6199 37.5179 37.7363 37.3998 37.8514 37.2806C37.8616 37.2702 37.8717 37.2599 37.8817 37.2496C38.0053 37.1211 38.1273 36.9911 38.2478 36.8596C38.2488 36.8584 38.2498 36.8574 38.251 36.8562V35.1356H38.2505Z" fill="#69EBFC"/>
                  <path d="M25.425 39.9661L35.7359 36.6209C36.1053 36.5011 36.3554 36.157 36.3554 35.7686V29.8036C36.3554 29.195 35.7617 28.7636 35.1828 28.9513L24.8719 32.2965C24.5025 32.4163 24.2524 32.7604 24.2524 33.1489V39.1138C24.2524 39.7224 24.8461 40.1538 25.425 39.9661Z" fill="#69EBFC"/>
                  <path d="M19.6278 33.6213L15.7154 32.3448C15.4396 32.2547 15.2529 31.9976 15.2529 31.7075C15.2529 31.2517 15.6979 30.9289 16.1312 31.0702L20.0436 32.3467C20.3195 32.4368 20.5061 32.6939 20.5061 32.984C20.5061 33.4398 20.0611 33.7626 19.6278 33.6213Z" fill="#5FD4E3"/>
                  <path d="M19.6278 35.8909L15.7154 34.6144C15.4396 34.5244 15.2529 34.2672 15.2529 33.9771C15.2529 33.5213 15.6979 33.1985 16.1312 33.3398L20.0436 34.6163C20.3195 34.7064 20.5061 34.9635 20.5061 35.2536C20.5061 35.7094 20.0611 36.0322 19.6278 35.8909Z" fill="#5FD4E3"/>
                  <path d="M19.6278 38.1193L15.7154 36.8428C15.4396 36.7527 15.2529 36.4956 15.2529 36.2055C15.2529 35.7497 15.6979 35.4269 16.1312 35.5682L20.0436 36.8447C20.3195 36.9347 20.5061 37.1919 20.5061 37.482C20.5061 37.9378 20.0611 38.2608 19.6278 38.1193Z" fill="#5FD4E3"/>
                  <path d="M19.629 40.388L8.86687 36.8964C8.59049 36.8067 8.40332 36.5492 8.40332 36.2587V36.2581C8.40332 35.8028 8.84745 35.48 9.28057 35.6204L20.0427 39.112C20.3191 39.2018 20.5062 39.4592 20.5062 39.7497V39.7504C20.5062 40.2057 20.0621 40.5285 19.629 40.388Z" fill="#5FD4E3"/>
                  <path d="M13.2822 36.0616L9.02276 34.6797C8.6534 34.5599 8.40332 34.2159 8.40332 33.8274V29.8036C8.40332 29.195 8.99698 28.7636 9.57585 28.9513L13.8353 30.3332C14.2046 30.453 14.4547 30.7971 14.4547 31.1855V35.2093C14.4545 35.8179 13.8609 36.2495 13.2822 36.0616Z" fill="#FF8354"/>
                  </svg>',
                  'title' => 'Print Ads',
                  'content' => 'Tailored to engage and captivate your audience.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_714_6587)">
                  <path d="M22 2.0625C27.3255 2.0625 32.3323 4.13634 36.0979 7.90213C39.8637 11.6677 41.9375 16.6745 41.9375 22C41.9375 27.3255 39.8637 32.3323 36.0979 36.0979C32.3323 39.8637 27.3255 41.9375 22 41.9375C16.6745 41.9375 11.6677 39.8637 7.90213 36.0979C4.13634 32.3323 2.0625 27.3255 2.0625 22C2.0625 16.6745 4.13634 11.6677 7.90213 7.90213C11.6677 4.13634 16.6745 2.0625 22 2.0625ZM22 0C9.84981 0 0 9.84981 0 22C0 34.1502 9.84981 44 22 44C34.1502 44 44 34.1502 44 22C44 9.84981 34.1502 0 22 0Z" fill="#B665C2"/>
                  <path d="M22 1.20312C33.9491 1.20312 43.6728 10.7295 43.9916 22.6016C43.9969 22.4017 44 22.2013 44 22C44 9.84981 34.1502 0 22 0C9.84981 0 0 9.84981 0 22C0 22.2013 0.00309375 22.4017 0.00842187 22.6016C0.32725 10.7295 10.0509 1.20312 22 1.20312Z" fill="#D476E2"/>
                  <path d="M22 42.7969C10.0509 42.7969 0.32725 33.2705 0.00842187 21.3984C0.00309375 21.5983 0 21.7987 0 22C0 34.1502 9.84981 44 22 44C34.1502 44 44 34.1502 44 22C44 21.7987 43.9969 21.5983 43.9916 21.3984C43.6728 33.2705 33.9491 42.7969 22 42.7969Z" fill="#9654A1"/>
                  <path d="M22.0216 39.0529C31.4375 39.0529 39.0707 31.4198 39.0707 22.0038C39.0707 12.5878 31.4375 4.95464 22.0216 4.95464C12.6056 4.95464 4.97241 12.5878 4.97241 22.0038C4.97241 31.4198 12.6056 39.0529 22.0216 39.0529Z" fill="#A1F1FC"/>
                  <path d="M39.0708 22.0038C39.0708 21.8596 39.0689 21.7159 39.0653 21.5725C38.8401 12.4991 31.5262 5.18512 22.4527 4.95997C22.3094 4.95636 22.1657 4.95447 22.0215 4.95447C21.8773 4.95447 21.7336 4.95636 21.5902 4.95997C12.5168 5.18512 5.20282 12.4991 4.97767 21.5725C4.97406 21.7159 4.97217 21.8596 4.97217 22.0038C4.97217 22.148 4.97406 22.2917 4.97767 22.435C5.08595 26.8008 6.83615 30.7587 9.63307 33.7162C9.63411 33.7174 9.63514 33.7184 9.63634 33.7196C10.0263 34.1318 10.4366 34.5249 10.8658 34.8965C10.8689 34.8992 10.8718 34.9021 10.8749 34.9049C10.875 34.9047 10.875 34.9047 10.8752 34.9045C13.7629 37.4017 17.4974 38.946 21.5902 39.0476C21.7336 39.0512 21.8773 39.0531 22.0215 39.0531C22.1657 39.0531 22.3094 39.0512 22.4527 39.0476C26.5456 38.946 30.2801 37.4015 33.1677 34.9045C33.1679 34.9045 33.1679 34.9047 33.1681 34.9049C33.1712 34.9021 33.1743 34.8992 33.1774 34.8963C33.6064 34.5247 34.0165 34.132 34.4064 33.7198C34.4077 33.7186 34.4089 33.7176 34.4101 33.7162C34.4101 33.7162 34.4101 33.7162 34.4099 33.716C37.2068 30.7586 38.9568 26.8006 39.0653 22.435C39.0691 22.2917 39.0708 22.148 39.0708 22.0038ZM31.9127 10.2914C30.9402 11.1153 29.8806 11.8073 28.7559 12.3582C28.0637 10.2561 27.1521 8.49355 26.0894 7.21669C28.2202 7.79934 30.2012 8.84125 31.9127 10.2914ZM22.8814 6.83822C24.0707 7.28595 25.261 8.635 26.2457 10.6908C26.5916 11.413 26.8991 12.1962 27.1681 13.0274C25.8014 13.5132 24.361 13.8033 22.8814 13.8844V6.83822ZM22.8814 15.6064C24.5391 15.5241 26.1344 15.2049 27.6344 14.6821C28.1186 16.6636 28.4013 18.855 28.4577 21.1442H22.8812V15.6064H22.8814ZM28.4577 22.8635C28.4013 25.1527 28.1187 27.3443 27.6347 29.3258C26.1346 28.8028 24.5391 28.4836 22.8812 28.4013V22.8635H28.4577ZM15.5856 22.8635H21.1621V28.4013C19.5042 28.4836 17.9087 28.8028 16.4086 29.3258C15.9246 27.3441 15.642 25.1525 15.5856 22.8635ZM15.5856 21.1442C15.642 18.855 15.9249 16.6638 16.4089 14.6821C17.9089 15.2049 19.5042 15.5241 21.1619 15.6064V21.1442H15.5856ZM21.1621 6.83822V13.8846C19.6824 13.8033 18.2421 13.5133 16.8754 13.0276C17.1444 12.1964 17.4518 11.4132 17.7978 10.691C18.7823 8.635 19.9726 7.28595 21.1621 6.83822ZM17.9541 7.21686C16.8914 8.49372 15.9797 10.2563 15.2876 12.3583C14.1628 11.8075 13.1032 11.1155 12.1308 10.2915C13.8421 8.84125 15.8232 7.79934 17.9541 7.21686ZM10.8757 11.4795C12.0546 12.4991 13.3748 13.3597 14.8027 14.0283C14.2586 16.1702 13.9265 18.5824 13.8655 21.1442H6.71618C6.91521 17.5182 8.37134 14.1278 10.8757 11.4795ZM13.8655 22.8635C13.9265 25.4253 14.2589 27.8374 14.8029 29.9795C13.3758 30.6475 12.0565 31.5074 10.8781 32.5261C8.37409 29.8777 6.91521 26.4895 6.71618 22.8635H13.8655ZM12.1335 33.7174C13.1058 32.8938 14.1644 32.2022 15.2888 31.6515C15.9808 33.7523 16.8917 35.5144 17.9541 36.7907C15.8242 36.2086 13.8445 35.1665 12.1335 33.7174ZM17.7977 33.3168C17.4517 32.5945 17.1442 31.8117 16.8754 30.9805C18.2421 30.4947 19.6826 30.2055 21.1621 30.1242V37.1693C19.9726 36.7216 18.7823 35.3726 17.7977 33.3168ZM22.8814 37.1693V30.1242C24.3609 30.2055 25.8014 30.4947 27.1681 30.9805C26.8993 31.8117 26.5916 32.5945 26.2458 33.3168C25.261 35.3726 24.0707 36.7216 22.8814 37.1693ZM28.7545 31.6515C29.8789 32.2022 30.9375 32.8938 31.9098 33.7174C30.1988 35.1665 28.2191 36.2086 26.0894 36.7907C27.1516 35.5145 28.0625 33.7523 28.7545 31.6515ZM33.1652 32.5261C31.9868 31.5074 30.6675 30.6475 29.2404 29.9795C29.7844 27.8376 30.1168 25.4253 30.1778 22.8635H37.3273C37.1281 26.4894 35.6692 29.8777 33.1652 32.5261ZM30.1778 21.1442C30.117 18.5824 29.7847 16.1702 29.2406 14.0283C30.6685 13.3597 31.9887 12.4991 33.1676 11.4795C35.6718 14.128 37.1281 17.5182 37.3271 21.1442H30.1778Z" fill="#5FD4E3"/>
                  <path d="M6.87351 9.14581C8.14796 9.14581 9.18111 8.11267 9.18111 6.83822C9.18111 5.56377 8.14796 4.53062 6.87351 4.53062C5.59906 4.53062 4.56592 5.56377 4.56592 6.83822C4.56592 8.11267 5.59906 9.14581 6.87351 9.14581Z" fill="#D476E2"/>
                  <path d="M6.87334 5.73392C7.93931 5.73392 8.83392 6.45768 9.09895 7.43995C9.15086 7.24796 9.18093 7.04687 9.18093 6.83839C9.18093 5.56393 8.14779 4.53079 6.87334 4.53079C5.59889 4.53079 4.56592 5.56393 4.56592 6.83839C4.56592 7.04687 4.596 7.24796 4.6479 7.43995C4.91293 6.45768 5.80754 5.73392 6.87334 5.73392Z" fill="#EA82FA"/>
                  <path d="M28.4577 16.1922C29.7322 16.1922 30.7653 15.159 30.7653 13.8846C30.7653 12.6101 29.7322 11.577 28.4577 11.577C27.1833 11.577 26.1501 12.6101 26.1501 13.8846C26.1501 15.159 27.1833 16.1922 28.4577 16.1922Z" fill="#D476E2"/>
                  <path d="M28.4576 12.7803C29.5235 12.7803 30.4181 13.504 30.6832 14.4863C30.7351 14.2943 30.7652 14.0932 30.7652 13.8847C30.7652 12.6103 29.732 11.5771 28.4576 11.5771C27.1831 11.5771 26.1501 12.6103 26.1501 13.8847C26.1501 14.0932 26.1802 14.2943 26.2321 14.4863C26.497 13.504 27.3916 12.7803 28.4576 12.7803Z" fill="#EA82FA"/>
                  <path d="M14.8027 24.3076C16.0772 24.3076 17.1103 23.2745 17.1103 22C17.1103 20.7256 16.0772 19.6924 14.8027 19.6924C13.5283 19.6924 12.4951 20.7256 12.4951 22C12.4951 23.2745 13.5283 24.3076 14.8027 24.3076Z" fill="#D476E2"/>
                  <path d="M14.8028 20.8955C15.8688 20.8955 16.7634 21.6193 17.0284 22.6016C17.0803 22.4096 17.1104 22.2085 17.1104 22C17.1104 20.7256 16.0772 19.6924 14.8028 19.6924C13.5283 19.6924 12.4954 20.7256 12.4954 22C12.4954 22.2085 12.5254 22.4096 12.5773 22.6016C12.8422 21.6193 13.7368 20.8955 14.8028 20.8955Z" fill="#EA82FA"/>
                  <path d="M36.7634 39.0531C38.0379 39.0531 39.071 38.0199 39.071 36.7455C39.071 35.471 38.0379 34.4379 36.7634 34.4379C35.489 34.4379 34.4558 35.471 34.4558 36.7455C34.4558 38.0199 35.489 39.0531 36.7634 39.0531Z" fill="#D476E2"/>
                  <path d="M36.7635 35.6412C37.8294 35.6412 38.7241 36.365 38.9891 37.3472C39.041 37.1553 39.0711 36.9542 39.0711 36.7457C39.0711 35.4712 38.0379 34.4381 36.7635 34.4381C35.489 34.4381 34.4561 35.4712 34.4561 36.7457C34.4561 36.9542 34.4861 37.1553 34.538 37.3472C34.8029 36.365 35.6975 35.6412 36.7635 35.6412Z" fill="#EA82FA"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_714_6587">
                  <rect width="44" height="44" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>',
                  'title' => 'Internet Services',
                  'content' => 'Access to a global network for information and entertainment.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_715_6961)">
                  <path d="M42.7791 33.958H1.22526C0.549791 33.958 0.00219727 33.4104 0.00219727 32.735V1.22306C0.00219727 0.547594 0.549791 0 1.22526 0H42.779C43.4544 0 44.002 0.547594 44.002 1.22306V32.735C44.0022 33.4104 43.4546 33.958 42.7791 33.958Z" fill="#6770E6"/>
                  <path d="M42.7791 0H1.22526C0.549791 0 0.00219727 0.547594 0.00219727 1.22306V2.42619C0.00219727 1.75072 0.549791 1.20312 1.22526 1.20312H42.7791C43.4546 1.20312 44.0022 1.75072 44.0022 2.42619V1.22306C44.0022 0.547594 43.4546 0 42.7791 0Z" fill="#8F95E6"/>
                  <path d="M2.58032 30.1568V4.22744C2.58032 3.3165 3.3187 2.57812 4.22963 2.57812H39.7748C40.6857 2.57812 41.4241 3.3165 41.4241 4.22744V30.1568C41.4241 30.8323 40.8765 31.3799 40.201 31.3799H3.80338C3.12792 31.3799 2.58032 30.8323 2.58032 30.1568Z" fill="#FFEFE4"/>
                  <path d="M27.3451 33.958H16.8696V40.5641H27.3451V33.958Z" fill="#5861C7"/>
                  <path d="M32.2984 44H11.9654C11.0167 44 10.2476 43.2309 10.2476 42.2821C10.2476 41.3334 11.0167 40.5642 11.9654 40.5642H32.2984C33.2472 40.5642 34.0163 41.3334 34.0163 42.2821C34.0163 43.2309 33.2472 44 32.2984 44Z" fill="#6770E6"/>
                  <path d="M32.2984 42.7969H11.9654C11.2285 42.7969 10.6019 42.3321 10.3578 41.6805C10.2875 41.8681 10.2473 42.0702 10.2473 42.2821C10.2473 43.2309 11.0165 44 11.9652 44H32.2982C33.2469 44 34.0161 43.2309 34.0161 42.2821C34.0161 42.0702 33.9759 41.8681 33.9056 41.6805C33.6618 42.3321 33.0352 42.7969 32.2984 42.7969Z" fill="#5861C7"/>
                  <path d="M39.7748 2.57812H4.22963C3.3187 2.57812 2.58032 3.3165 2.58032 4.22744V6.38447H41.4241V4.22744C41.4241 3.3165 40.6857 2.57812 39.7748 2.57812Z" fill="#D476E2"/>
                  <path d="M5.23201 5.41423C5.74726 5.41423 6.16495 4.99654 6.16495 4.48129C6.16495 3.96605 5.74726 3.54836 5.23201 3.54836C4.71676 3.54836 4.29907 3.96605 4.29907 4.48129C4.29907 4.99654 4.71676 5.41423 5.23201 5.41423Z" fill="#B665C2"/>
                  <path d="M8.81673 5.41423C9.33197 5.41423 9.74966 4.99654 9.74966 4.48129C9.74966 3.96605 9.33197 3.54836 8.81673 3.54836C8.30148 3.54836 7.88379 3.96605 7.88379 4.48129C7.88379 4.99654 8.30148 5.41423 8.81673 5.41423Z" fill="#B665C2"/>
                  <path d="M12.3099 5.41423C12.8251 5.41423 13.2428 4.99654 13.2428 4.48129C13.2428 3.96605 12.8251 3.54836 12.3099 3.54836C11.7946 3.54836 11.377 3.96605 11.377 4.48129C11.377 4.99654 11.7946 5.41423 12.3099 5.41423Z" fill="#B665C2"/>
                  <path d="M18 11.5789C18 11.6975 17.9609 11.8171 17.8797 11.9201L13.593 17.3576C13.5261 17.4424 13.5261 17.5577 13.593 17.6425L17.8797 23.0799C18.0827 23.3376 18.0227 23.6995 17.7454 23.8882C17.4681 24.0769 17.0787 24.0211 16.8756 23.7634L12.0501 17.6424C11.9833 17.5576 11.9833 17.4424 12.0501 17.3576L16.8756 11.2366C17.0787 10.9789 17.4681 10.9231 17.7454 11.1118C17.9118 11.2252 18 11.4008 18 11.5789Z" fill="#FF8354"/>
                  <path d="M27 23.4211C27 23.3025 27.0391 23.1829 27.1203 23.0799L31.407 17.6424C31.4739 17.5576 31.4739 17.4423 31.407 17.3575L27.1203 11.9201C26.9173 11.6624 26.9773 11.3005 27.2546 11.1118C27.5319 10.9231 27.9213 10.9789 28.1244 11.2366L32.9499 17.3576C33.0167 17.4424 33.0167 17.5576 32.9499 17.6424L28.1244 23.7634C27.9213 24.0211 27.5319 24.0769 27.2546 23.8882C27.0882 23.7748 27 23.5992 27 23.4211Z" fill="#FF8354"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_715_6961">
                  <rect width="44" height="44" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>',
                  'title' => 'Web Services',
                  'content' => 'Create, edit, and manage digital designs and software projects.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_714_6554)">
                  <path d="M38.8187 0H12.33C9.46848 0 7.14868 2.3198 7.14868 5.18134V20.3796C7.14868 23.2411 9.46848 25.5609 12.33 25.5609H27.8565V31.0234C27.8565 31.8854 28.8986 32.317 29.5081 31.7075L35.6548 25.5607H38.8187C41.6803 25.5607 44.0001 23.2409 44.0001 20.3794V5.18134C44.0001 2.3198 41.6803 0 38.8187 0Z" fill="#FF0F0F"/>
                  <path d="M38.8187 0H12.33C9.46848 0 7.14868 2.3198 7.14868 5.18134V6.38447C7.14868 3.52292 9.46848 1.20312 12.33 1.20312H38.8187C41.6803 1.20312 44.0001 3.52292 44.0001 6.38447V5.18134C44.0001 2.3198 41.6803 0 38.8187 0Z" fill="#F45555"/>
                  <path d="M9.97974 36.1436L21.446 40.3903V22.554L9.97974 26.8008V36.1436Z" fill="#6770E6"/>
                  <path d="M7.75031 44C8.98163 44 9.97988 43.0017 9.97988 41.7704V36.1436H5.52075V41.7704C5.52075 43.0017 6.51883 44 7.75031 44Z" fill="#B665C2"/>
                  <path d="M7.75031 42.7969C6.519 42.7969 5.52075 41.7986 5.52075 40.5673V41.7704C5.52075 43.0018 6.519 44 7.75031 44C8.98163 44 9.97988 43.0018 9.97988 41.7704V40.5673C9.97971 41.7986 8.98163 42.7969 7.75031 42.7969Z" fill="#A059AB"/>
                  <path d="M4.67139 36.1436H9.97975V26.8008H4.67139C2.09138 26.8008 0 28.8922 0 31.4722C0 34.052 2.09138 36.1436 4.67139 36.1436Z" fill="#D476E2"/>
                  <path d="M9.97974 26.8008V28.1758L21.446 23.929V22.554L9.97974 26.8008Z" fill="#8F95E6"/>
                  <path d="M4.67139 26.8008C2.09138 26.8008 0 28.8922 0 31.4722C0 31.7058 0.0177031 31.9352 0.0507031 32.1597C0.383281 29.9057 2.32495 28.1758 4.67139 28.1758H9.97975V26.8008H4.67139Z" fill="#EA82FA"/>
                  <path d="M22.2592 34.0563H21.446V28.8881H22.2592C23.6864 28.8881 24.8433 30.045 24.8433 31.4722C24.8433 32.8993 23.6864 34.0563 22.2592 34.0563Z" fill="#D476E2"/>
                  <path d="M16.9272 9.3433C16.9272 8.82406 17.0273 8.33439 17.2277 7.87428C17.4279 7.41452 17.7024 7.00992 18.0513 6.66119C18.3999 6.3128 18.8117 6.03814 19.2866 5.83756C19.7613 5.63733 20.2805 5.53712 20.8446 5.53712C21.4084 5.53712 21.9314 5.63716 22.4137 5.83756C22.8958 6.03797 23.3114 6.3128 23.6601 6.66119C24.0087 7.01009 24.2833 7.41452 24.4837 7.87428C24.684 8.33439 24.7843 8.82406 24.7843 9.3433C24.7843 9.86287 24.6841 10.356 24.4837 10.8235C24.2835 11.2908 24.0087 11.6954 23.6601 12.0364C23.3112 12.3779 22.8958 12.6485 22.4137 12.8489C21.9314 13.0491 21.4084 13.1495 20.8446 13.1495C20.2805 13.1495 19.7613 13.0493 19.2866 12.8489C18.8115 12.6486 18.3997 12.3779 18.0513 12.0364C17.7024 11.6952 17.4281 11.2908 17.2277 10.8235C17.0273 10.356 16.9272 9.86287 16.9272 9.3433ZM19.3087 9.3433C19.3087 9.83297 19.4569 10.2264 19.7541 10.5229C20.0507 10.8199 20.4141 10.968 20.8446 10.968C21.2748 10.968 21.6383 10.8199 21.9352 10.5229C22.232 10.2262 22.3803 9.83297 22.3803 9.3433C22.3803 8.85362 22.232 8.46055 21.9352 8.16372C21.6383 7.86689 21.2748 7.71839 20.8446 7.71839C20.4139 7.71839 20.0507 7.86689 19.7541 8.16372C19.4569 8.46072 19.3087 8.85362 19.3087 9.3433ZM20.3426 19.415L29.0467 6.41764C29.3722 5.93158 30.0303 5.80164 30.5162 6.12752C31.0014 6.45305 31.1312 7.1103 30.806 7.59584L22.1019 20.5932C21.7764 21.0793 21.1182 21.2092 20.6324 20.8833C20.1472 20.5578 20.0174 19.9005 20.3426 19.415ZM26.3644 17.6675C26.3644 17.1483 26.4644 16.6586 26.665 16.1985C26.8652 15.7388 27.1397 15.3343 27.4884 14.9856C27.837 14.637 28.2488 14.3624 28.7237 14.162C29.1984 13.9618 29.7177 13.8614 30.2818 13.8614C30.8455 13.8614 31.3685 13.9616 31.851 14.162C32.3329 14.3622 32.7485 14.637 33.0972 14.9856C33.4458 15.3345 33.7205 15.7388 33.9209 16.1985C34.1211 16.6586 34.2215 17.1483 34.2215 17.6675C34.2215 18.1871 34.1213 18.6804 33.9209 19.1477C33.7206 19.6152 33.4458 20.0197 33.0972 20.3607C32.7483 20.7022 32.3329 20.9729 31.851 21.1731C31.3685 21.3733 30.8455 21.4735 30.2818 21.4735C29.7177 21.4735 29.1984 21.3735 28.7237 21.1731C28.2487 20.9729 27.8368 20.7022 27.4884 20.3607C27.1397 20.0195 26.8654 19.6151 26.665 19.1477C26.4644 18.6804 26.3644 18.1871 26.3644 17.6675ZM28.7459 17.6675C28.7459 18.1572 28.894 18.5506 29.191 18.8471C29.4877 19.1441 29.851 19.2925 30.2816 19.2925C30.7118 19.2925 31.0753 19.1443 31.3723 18.8471C31.669 18.5505 31.8175 18.1572 31.8175 17.6675C31.8175 17.1779 31.669 16.785 31.3723 16.488C31.0753 16.1913 30.7118 16.0428 30.2816 16.0428C29.851 16.0428 29.4877 16.1913 29.191 16.488C28.894 16.785 28.7459 17.1779 28.7459 17.6675Z" fill="#FFEFE4"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_714_6554">
                  <rect width="44" height="44" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>',
                  'title' => 'Social Media',
                  'content' => 'Boosting brand engagement with targeted content and strategy.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 44C34.1503 44 44 34.1503 44 22C44 9.84974 34.1503 0 22 0C9.84974 0 0 9.84974 0 22C0 34.1503 9.84974 44 22 44Z" fill="#8F95E6"/>
                  <path d="M22 42.2812C10.1377 42.2812 0.469906 32.8924 0.0182187 21.1406C0.00721875 21.4259 0 21.7121 0 22C0 34.1502 9.84981 44 22 44C34.1502 44 44 34.1502 44 22C44 21.7121 43.9928 21.4259 43.9818 21.1406C43.5301 32.8924 33.8623 42.2812 22 42.2812Z" fill="#6770E6"/>
                  <path d="M22 1.71875C33.8623 1.71875 43.5301 11.1076 43.9818 22.8594C43.9928 22.5741 44 22.2879 44 22C44 9.84981 34.1502 0 22 0C9.84981 0 0 9.84981 0 22C0 22.2879 0.00721875 22.5741 0.0182187 22.8594C0.469906 11.1076 10.1377 1.71875 22 1.71875Z" fill="#9FA5FF"/>
                  <path d="M31.7877 28.1724L26.8012 26.5339H17.1977L12.1991 28.1734C10.5517 28.7138 9.43774 30.2514 9.43774 31.9851V40.0615C12.9225 42.4897 17.1426 43.9349 21.6972 43.9964H22.3024C26.8507 43.935 31.0651 42.4939 34.547 40.072V31.9835C34.5471 30.2503 33.4342 28.7133 31.7877 28.1724Z" fill="#5FD4E3"/>
                  <path d="M34.5471 38.3532C30.9885 40.8291 26.6641 42.2812 21.9999 42.2812C17.3292 42.2812 12.9993 40.8249 9.43774 38.3427V40.0615C9.43792 40.0616 9.43826 40.0618 9.43843 40.062C9.87345 40.3652 10.3202 40.6529 10.7773 40.9248C10.778 40.9252 10.7787 40.9255 10.7794 40.926C11.2364 41.1976 11.7041 41.453 12.1817 41.6915C12.1826 41.6921 12.1836 41.6924 12.1845 41.6929C12.6621 41.9313 13.1496 42.153 13.6461 42.357C13.647 42.3574 13.6477 42.3577 13.6485 42.3581C16.1355 43.3794 18.8512 43.9581 21.6974 43.9966H22.3026C24.5767 43.9658 26.7674 43.5902 28.8247 42.9196C28.8247 42.9196 28.8247 42.9196 28.8249 42.9196C29.3388 42.752 29.8445 42.566 30.341 42.3625C30.3417 42.3624 30.3424 42.362 30.3431 42.3617C30.8393 42.1582 31.3264 41.937 31.8037 41.6991C31.8044 41.6988 31.805 41.6984 31.8056 41.6981C32.2829 41.46 32.7504 41.2051 33.2072 40.9341C33.2077 40.9337 33.2081 40.9336 33.2086 40.9332C33.6656 40.662 34.1121 40.3748 34.5471 40.0721V38.3532Z" fill="#5BCAD9"/>
                  <path d="M29.6992 10.3857C29.3106 6.27207 22.8208 5.18496 20.7205 5.86988C18.6201 6.5548 18.693 7.50029 18.693 7.50029C18.693 7.50029 14.4824 7.14382 14.2485 11.44C14.0146 15.736 14.6852 17.0351 14.6852 17.0351C14.7072 17.3138 14.734 17.595 14.7652 17.8781H21.9614H29.1576C29.1645 17.8166 29.1707 17.7552 29.177 17.6938L29.3104 18.2038C29.3106 18.2035 30.0686 14.2947 29.6992 10.3857Z" fill="#333399"/>
                  <path d="M14.2487 12.6431C14.4826 8.34711 18.6932 8.70358 18.6932 8.70358C18.6932 8.70358 18.6203 7.75792 20.7207 7.07317C22.8208 6.38842 29.3108 7.47536 29.6994 11.589C29.7529 12.1547 29.7821 12.7198 29.7941 13.2734C29.8139 12.3523 29.7924 11.3692 29.6994 10.3859C29.3108 6.27223 22.821 5.1853 20.7207 5.87005C18.6205 6.5548 18.6932 7.50045 18.6932 7.50045C18.6932 7.50045 14.4826 7.14398 14.2487 11.44C14.2001 12.3324 14.1909 13.0938 14.2062 13.7428C14.2138 13.3999 14.2274 13.0341 14.2487 12.6431Z" fill="#5861C7"/>
                  <path d="M26.0048 25.0836H17.9951V28.4723H26.0048V25.0836Z" fill="#5FD4E3"/>
                  <path d="M23.3862 31.861H20.6136L19.9976 28.4723H24.0022L23.3862 31.861Z" fill="#6770E6"/>
                  <path d="M16.5817 16.6841C16.5817 16.6841 15.9963 15.6118 14.8255 15.6118C13.6547 15.6118 12.8254 20.7592 16.5817 19.9012V16.6841Z" fill="#FFE4D1"/>
                  <path d="M27.4185 16.6841C27.4185 16.6841 28.0039 15.6118 29.1747 15.6118C30.3455 15.6118 31.1748 20.7592 27.4185 19.9012V16.6841Z" fill="#FFE4D1"/>
                  <path d="M25.078 21.696H18.9221V25.8679L22.0001 28.4723L25.0806 25.8656L25.078 21.696Z" fill="#FFE4D1"/>
                  <path d="M21.9999 9.78639C13.0299 9.78639 14.7451 24.4977 21.9999 24.4977C29.2549 24.4979 30.9699 9.78639 21.9999 9.78639Z" fill="#FFEFE4"/>
                  <path d="M28.7774 27.2401L24.7725 31.553L22 28.4723L26.0049 25.0836L28.7774 27.2401Z" fill="#69EBFC"/>
                  <path d="M15.2227 27.2401L19.2275 31.553L22 28.4723L17.9952 25.0836L15.2227 27.2401Z" fill="#69EBFC"/>
                  <path d="M15.8388 16.0064C15.8388 16.0064 16.796 15.7565 17.379 14.4662C18.4116 12.1806 19.1796 11.8829 19.1796 11.8829C19.1796 11.8829 20.1357 14.5784 23.8195 15.5885C27.5033 16.5987 28.1607 16.0064 28.1607 16.0064L29.0138 12.4183L24.172 8.52225L18.1384 9.25942L14.9783 13.0054L15.8388 16.0064Z" fill="#333399"/>
                  <path d="M23.3864 31.861H20.6137L19.3918 43.8455C20.2473 43.9466 21.1173 44 21.9999 44C22.8825 44 23.7527 43.9466 24.6081 43.8455L23.3864 31.861Z" fill="#5861C7"/>
                  <path d="M24.4347 42.1456C23.635 42.2338 22.8231 42.2814 22 42.2814C21.1768 42.2814 20.3649 42.2338 19.5652 42.1456L19.3921 43.8439C19.4241 43.8477 19.4559 43.8518 19.4878 43.8555C19.6083 43.8692 19.7293 43.8812 19.8503 43.8931C19.9307 43.9008 20.0108 43.9096 20.0914 43.9165C20.2013 43.9259 20.312 43.9331 20.4223 43.9411C20.6313 43.9558 20.8408 43.9682 21.0514 43.9771C21.0976 43.9792 21.1437 43.9816 21.1901 43.9833C21.335 43.9887 21.4804 43.9919 21.6261 43.9943C21.6663 43.995 21.7064 43.9957 21.7466 43.996H22.2536C22.2841 43.9957 22.3145 43.9952 22.3451 43.9947C22.5976 43.9909 22.849 43.9825 23.0993 43.9701C23.1252 43.9687 23.1512 43.968 23.1769 43.9667C23.6585 43.9412 24.1352 43.8979 24.608 43.8421L24.4347 42.1456Z" fill="#5058B5"/>
                  <path d="M14.4015 33.7578H13.2766V35.9303H14.4015V33.7578Z" fill="#B665C2"/>
                  <path d="M10.6733 36.4927C10.6733 36.1821 10.9251 35.9303 11.2357 35.9303H16.4422C16.7527 35.9303 17.0045 36.1821 17.0045 36.4927C17.0045 36.8033 16.7527 37.055 16.4422 37.055H11.2357C10.9251 37.0552 10.6733 36.8034 10.6733 36.4927Z" fill="#D476E2"/>
                  <path d="M8.37622 27.3635C8.37622 27.0529 8.62802 26.8011 8.9386 26.8011H18.7396C19.0502 26.8011 19.302 27.0529 19.302 27.3635C19.302 27.6741 19.0502 27.9259 18.7396 27.9259H8.9386C8.62802 27.9261 8.37622 27.6743 8.37622 27.3635Z" fill="#B665C2"/>
                  <path d="M14.7185 32.0705H12.9597C11.8023 32.0705 10.864 31.1322 10.864 29.9748V24.7524C10.864 23.595 11.8023 22.6567 12.9597 22.6567H14.7185C15.8759 22.6567 16.8142 23.595 16.8142 24.7524V29.9748C16.8142 31.1322 15.8759 32.0705 14.7185 32.0705Z" fill="#6770E6"/>
                  <path d="M13.7009 24.8091C13.402 24.8091 13.1597 25.0515 13.1597 25.3504C13.1597 25.6493 13.402 25.8916 13.7009 25.8916H16.8141V25.0336C16.8141 24.9578 16.8098 24.8829 16.802 24.8091H13.7009Z" fill="#5861C7"/>
                  <path d="M13.7009 27.9048H16.8141V26.8225H13.7009C13.402 26.8225 13.1597 27.0648 13.1597 27.3637C13.1597 27.6624 13.402 27.9048 13.7009 27.9048Z" fill="#5861C7"/>
                  <path d="M13.1597 29.3767C13.1597 29.6756 13.402 29.9179 13.7009 29.9179H16.802C16.8099 29.8442 16.8141 29.7694 16.8141 29.6936V28.8356H13.7009C13.402 28.8356 13.1597 29.078 13.1597 29.3767Z" fill="#5861C7"/>
                  <path d="M17.3766 26.9148V29.9748C17.3766 31.4428 16.1865 32.633 14.7184 32.633H12.9597C11.4917 32.633 10.3015 31.443 10.3015 29.9748V26.9148C10.3015 26.6042 10.0497 26.3524 9.73913 26.3524C9.42855 26.3524 9.17676 26.6042 9.17676 26.9148V29.9748C9.17676 32.0641 10.8704 33.7578 12.9597 33.7578H14.7185C16.8078 33.7578 18.5015 32.0641 18.5015 29.9748V26.9148C18.5015 26.6042 18.2497 26.3524 17.9391 26.3524C17.6284 26.3524 17.3766 26.6042 17.3766 26.9148Z" fill="#D476E2"/>
                  <path d="M5.95996 37.0552C9.90913 41.261 15.4928 43.9125 21.6975 43.9962H22.3027C28.5074 43.9125 34.0911 41.261 38.0403 37.0552H5.95996Z" fill="#B665C2"/>
                  <path d="M36.2328 37.0552C32.3964 40.3141 27.4284 42.2814 22 42.2814C16.5717 42.2814 11.6036 40.3143 7.76723 37.0552H5.95996C5.96013 37.0554 5.96031 37.0556 5.96048 37.0557C9.90948 41.2612 15.4932 43.9125 21.6975 43.9962H22.3027C28.5067 43.9125 34.0901 41.2615 38.0391 37.0564C38.0394 37.0561 38.0399 37.0556 38.0403 37.0552H36.2328Z" fill="#A75DB3"/>
                  </svg>',
                  'title' => 'Podcast',
                  'content' => 'Podcast Marketing: Elevating Your Voice to Reach the Right Ears.'
               ],
               [
                  'svg' => '<svg width="46" height="41" viewBox="0 0 46 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M39.8667 39.5328H3.2C1.95333 39.5328 1 38.6164 1 37.418V2.87705C1 1.67869 1.95333 0.762299 3.2 0.762299H39.8667C41.1133 0.762299 42.0667 1.67869 42.0667 2.87705V37.418C42.0667 38.6164 41.1133 39.5328 39.8667 39.5328Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M42.8 39.5328H6.13335C4.88668 39.5328 3.93335 38.6164 3.93335 37.418V2.87705C3.93335 1.67869 4.88668 0.762299 6.13335 0.762299H42.8C44.0467 0.762299 45 1.67869 45 2.87705V37.418C45 38.6164 44.0467 39.5328 42.8 39.5328Z" fill="#546E7A" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M5.3999 37.418V2.87706" stroke="#78909C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43.5334 37.418V2.87706" stroke="#455A64" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M13.4665 37.418H8.33319C7.89319 37.418 7.59985 37.1361 7.59985 36.7131V35.3033C7.59985 34.8803 7.89319 34.5984 8.33319 34.5984H13.4665C13.9065 34.5984 14.1999 34.8803 14.1999 35.3033V36.7131C14.1999 37.1361 13.9065 37.418 13.4665 37.418Z" fill="#CFD8DC" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.1335 36.0082H41.3335" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M45 7.81148H3.93335V32.8361H45V7.81148Z" fill="#FF0F0F" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M5.3999 32.8361V7.81148" stroke="#F48FB1" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43.5334 32.8361V7.81148" stroke="#D81B60" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M20.4333 15.0016L31.4333 20.359L20.4333 25.5754V15.0016Z" fill="#CFD8DC" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M45 7.81148H3.93335V32.8361H45V7.81148Z" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M33.6334 37.418C34.4434 37.418 35.1001 36.7868 35.1001 36.0082C35.1001 35.2296 34.4434 34.5984 33.6334 34.5984C32.8234 34.5984 32.1667 35.2296 32.1667 36.0082C32.1667 36.7868 32.8234 37.418 33.6334 37.418Z" fill="#CFD8DC" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>',
                  'title' => 'Youtube Marketing',
                  'content' => 'Boost your brand with YouTube Marketing: targeted videos for audience growth.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.9712 37.3288C30.5143 37.3288 37.4399 30.4032 37.4399 21.8601C37.4399 13.3169 30.5143 6.39134 21.9712 6.39134C13.428 6.39134 6.50244 13.3169 6.50244 21.8601C6.50244 30.4032 13.428 37.3288 21.9712 37.3288Z" fill="#8479B9"/>
                  <path d="M8.22119 21.8601C8.22119 13.6055 14.6873 6.86142 22.8306 6.41558C22.5459 6.39994 22.2596 6.39134 21.9712 6.39134C13.428 6.39134 6.50244 13.3169 6.50244 21.8601C6.50244 30.4033 13.428 37.3288 21.9712 37.3288C22.2596 37.3288 22.5459 37.3202 22.8306 37.3046C14.6871 36.8586 8.22119 30.1147 8.22119 21.8601Z" fill="#E8E6F4"/>
                  <path d="M34.6899 21.8601C34.6899 26.2962 32.4178 30.2029 28.9751 32.4768C28.4303 32.8395 27.8562 33.1592 27.2563 33.4307C25.9192 34.0443 24.4599 34.431 22.9217 34.5427C22.9131 34.5445 22.9045 34.5445 22.8959 34.5445C22.5917 34.5685 22.2823 34.5788 21.9712 34.5788C21.6601 34.5788 21.3507 34.5685 21.0465 34.5445C21.0379 34.5445 21.0293 34.5445 21.0207 34.5427C19.4824 34.431 18.0232 34.0443 16.686 33.4307C16.0862 33.1592 15.5121 32.8395 14.9673 32.4768C11.5246 30.2029 9.25244 26.2962 9.25244 21.8601C9.25244 14.8356 14.9467 9.14134 21.9712 9.14134C28.9957 9.14134 34.6899 14.8354 34.6899 21.8601Z" fill="#94D3CC"/>
                  <path d="M22.7653 34.5445C22.7567 34.5445 22.7481 34.5445 22.7395 34.5427C21.2012 34.431 19.742 34.0443 18.4048 33.4307C17.8049 33.1592 17.2309 32.8395 16.686 32.4768C13.2434 30.2029 10.9712 26.2962 10.9712 21.8601C10.9712 15.1247 16.2072 9.61589 22.8306 9.17348C22.5463 9.1544 22.2603 9.14134 21.9712 9.14134C14.9467 9.14134 9.25244 14.8356 9.25244 21.8601C9.25244 26.2962 11.5246 30.2029 14.9673 32.4768C15.5121 32.8395 16.0862 33.1592 16.686 33.4307C18.0232 34.0443 19.4824 34.431 21.0207 34.5427C21.0293 34.5445 21.0379 34.5445 21.0465 34.5445C21.3507 34.5685 21.6601 34.5788 21.9712 34.5788C22.2601 34.5788 22.5473 34.5687 22.8306 34.5482C22.8089 34.5465 22.7869 34.5462 22.7653 34.5445Z" fill="#E8E6F4"/>
                  <path d="M21.9999 25.2067C25.1575 25.2067 27.7173 22.5962 27.7173 19.376C27.7173 16.1558 25.1575 13.5453 21.9999 13.5453C18.8422 13.5453 16.2825 16.1558 16.2825 19.376C16.2825 22.5962 18.8422 25.2067 21.9999 25.2067Z" fill="#FCC800"/>
                  <path d="M18.0012 19.3732C18.0012 16.4508 20.1094 14.031 22.8593 13.6082C22.5789 13.5651 22.2921 13.5425 21.9999 13.5425C18.8422 13.5425 16.2825 16.153 16.2825 19.3732C16.2825 22.5935 18.8422 25.2039 21.9999 25.2039C22.2921 25.2039 22.5789 25.1812 22.8593 25.1383C20.1094 24.7154 18.0012 22.2954 18.0012 19.3732Z" fill="#E8E6F4"/>
                  <path d="M21.9999 25.7223C18.5629 25.7223 15.7668 22.8754 15.7668 19.376C15.7668 15.8766 18.5629 13.0297 21.9999 13.0297C25.4369 13.0297 28.2329 15.8766 28.2329 19.376C28.2329 22.8754 25.4369 25.7223 21.9999 25.7223ZM21.9999 14.0609C19.1316 14.0609 16.7981 16.4453 16.7981 19.376C16.7981 22.3066 19.1316 24.691 21.9999 24.691C24.8681 24.691 27.2017 22.3066 27.2017 19.376C27.2017 16.4453 24.8681 14.0609 21.9999 14.0609Z" fill="#44294F"/>
                  <path d="M28.9751 32.2104V32.4768C28.4303 32.8395 27.8562 33.1592 27.2563 33.4307C25.9192 34.0443 24.4599 34.431 22.9217 34.5427C22.9131 34.5445 22.9045 34.5445 22.8959 34.5445H21.0465C21.0379 34.5445 21.0293 34.5445 21.0207 34.5427C19.4824 34.431 18.0232 34.0443 16.686 33.4307C16.0862 33.1592 15.5121 32.8395 14.9673 32.4768V32.2104C14.9673 31.1826 15.189 30.2063 15.586 29.3263C15.6324 29.2232 15.6823 29.1218 15.7338 29.0221C15.8112 28.8709 15.8937 28.7231 15.9813 28.577C16.069 28.4343 16.1618 28.2934 16.2598 28.1559C16.3578 28.0184 16.4609 27.8843 16.5657 27.7537C16.6379 27.6677 16.7118 27.5835 16.7857 27.501V27.4993C16.8545 27.4237 16.9267 27.3481 16.9988 27.2759C17.0573 27.2174 17.1157 27.1607 17.1759 27.1023C17.1845 27.0954 17.1931 27.0868 17.2017 27.0782C17.2463 27.037 17.291 26.9957 17.3374 26.9579C17.3718 26.9252 17.4062 26.896 17.4406 26.8668C17.5128 26.8049 17.5867 26.7448 17.6623 26.6881C17.676 26.676 17.6898 26.6657 17.7035 26.6554C17.8685 26.5282 18.0387 26.4096 18.214 26.2979C18.2862 26.2515 18.3618 26.2051 18.4374 26.1621C18.4495 26.1535 18.4632 26.1467 18.477 26.1381C18.5509 26.0951 18.6265 26.0538 18.7038 26.0143C18.7365 25.9971 18.7674 25.9799 18.8001 25.9645C18.8379 25.9438 18.8757 25.9249 18.9135 25.9077C18.9737 25.8785 19.0338 25.851 19.094 25.8235C19.1421 25.8012 19.1885 25.7806 19.2384 25.7599C19.3088 25.729 19.3793 25.7015 19.4515 25.6723C19.491 25.6585 19.5306 25.6431 19.5701 25.6293C19.6268 25.6087 19.6853 25.5881 19.742 25.5692C19.7918 25.552 19.8417 25.5365 19.8915 25.521C19.9482 25.5038 20.0032 25.4867 20.0599 25.4712C20.1562 25.4437 20.2542 25.4179 20.3521 25.3956C20.4003 25.3835 20.4501 25.3715 20.4999 25.3612C20.5034 25.3612 20.5051 25.3612 20.5085 25.3595C20.5601 25.3492 20.6117 25.3388 20.6649 25.3285C20.7165 25.3182 20.7698 25.3096 20.8231 25.301C20.9279 25.2838 21.0362 25.2684 21.1428 25.2563L21.4195 25.2288L21.471 25.2254C21.5088 25.222 21.5449 25.2202 21.5828 25.2185C21.5879 25.2168 21.5913 25.2168 21.5948 25.2168L21.6274 25.2151L21.8165 25.2082C21.8681 25.2065 21.9196 25.2065 21.9712 25.2065H22.0468C22.0795 25.2065 22.1121 25.2082 22.1448 25.2082C22.1585 25.2082 22.1706 25.2099 22.1826 25.2099C22.229 25.2117 22.2737 25.2134 22.3184 25.2151H22.3321C22.3923 25.2185 22.4507 25.222 22.5109 25.2271L22.6243 25.2374C22.6363 25.2392 22.6484 25.2409 22.6621 25.2409L22.8254 25.2581C22.8838 25.2649 22.9423 25.2735 23.0007 25.2838C23.0557 25.2924 23.1124 25.301 23.1674 25.3113C23.2242 25.3217 23.2792 25.332 23.3342 25.3423L23.3336 25.343C24.7219 25.614 25.9609 26.295 26.9246 27.2587C28.1913 28.5254 28.9751 30.2768 28.9751 32.2104Z" fill="#8D386D"/>
                  <path d="M22.8254 25.2581C22.8237 25.2598 22.8203 25.2598 22.8185 25.2598C22.1654 25.3406 21.5415 25.5107 20.9571 25.7582C18.4478 26.8238 16.686 29.3091 16.686 32.2087V33.4307C16.0862 33.1591 15.5121 32.8395 14.9673 32.4768V32.2104C14.9673 31.1826 15.189 30.2063 15.586 29.3263C15.6324 29.2232 15.6806 29.1218 15.7338 29.0221C15.8112 28.8709 15.8937 28.7231 15.9813 28.577C16.069 28.4326 16.1601 28.2916 16.2598 28.1559C16.3578 28.0184 16.4609 27.8843 16.5657 27.7537C16.6362 27.6677 16.7101 27.5835 16.7857 27.501C16.7857 27.501 16.7874 27.501 16.7857 27.4993C16.8613 27.4151 16.9387 27.3343 17.0178 27.2552C17.0805 27.1925 17.1453 27.132 17.2103 27.0719C17.2142 27.0682 17.2182 27.0643 17.2221 27.0605C17.2885 26.9993 17.3563 26.94 17.4249 26.8814C17.4363 26.8716 17.4474 26.8616 17.4588 26.852C17.5255 26.7958 17.5937 26.7413 17.6626 26.6875C17.6764 26.6769 17.6898 26.6659 17.7037 26.6552C17.7726 26.6021 17.8429 26.5507 17.9139 26.5002C17.928 26.4902 17.9419 26.4801 17.956 26.4701C18.0284 26.4194 18.1019 26.3701 18.1764 26.3221C18.1889 26.3141 18.2016 26.3058 18.2142 26.2977C18.2913 26.2486 18.3694 26.2011 18.4484 26.1551C18.4579 26.1496 18.4675 26.1441 18.477 26.1386C18.56 26.0906 18.644 26.0444 18.7293 25.9999C18.7336 25.9976 18.7381 25.9954 18.7423 25.9932C19.6511 25.5202 20.6759 25.241 21.7644 25.2096C21.7732 25.2092 21.7818 25.2086 21.7906 25.2082L21.81 25.208C21.8419 25.2074 21.8736 25.2051 21.9057 25.2048H22.0002C22.0157 25.2048 22.0312 25.2048 22.0466 25.2065C22.0827 25.2065 22.1171 25.2082 22.1515 25.2082C22.2082 25.2099 22.2632 25.2134 22.3182 25.2151H22.332C22.3921 25.2185 22.4506 25.222 22.5107 25.2271L22.6585 25.2409C22.6585 25.2409 22.6602 25.2409 22.662 25.2409L22.8254 25.2581Z" fill="#E8E6F4"/>
                  <path d="M22.8959 35.0601H21.0465C21.0319 35.0601 21.003 35.0601 20.9661 35.0558C19.4039 34.9403 17.8916 34.5512 16.471 33.8994C15.8557 33.6208 15.2529 33.2863 14.6816 32.9061C14.5379 32.8106 14.4517 32.6494 14.4517 32.4768V32.2104C14.4517 31.1329 14.6751 30.0912 15.116 29.1142C15.166 29.003 15.2199 28.893 15.276 28.7849C15.3549 28.6304 15.4441 28.4702 15.5393 28.3116C15.6378 28.1512 15.738 27.9998 15.8401 27.8566C15.9349 27.7234 16.0408 27.5842 16.1635 27.4311C16.2386 27.3415 16.3093 27.2607 16.3792 27.1822C16.3871 27.1719 16.3956 27.1619 16.4043 27.1523C16.4786 27.0707 16.5564 26.9892 16.6343 26.9113C16.6905 26.8549 16.7469 26.8001 16.8048 26.7439C16.812 26.7369 16.8232 26.7264 16.8342 26.7166C16.8388 26.7121 16.849 26.7021 16.8522 26.6991C16.8998 26.6552 16.9476 26.6114 16.9968 26.5705C17.0318 26.538 17.0666 26.5081 17.1015 26.4782C17.1816 26.4096 17.2603 26.3455 17.3405 26.2848C17.3584 26.2701 17.3763 26.2563 17.3942 26.2429C17.5611 26.1142 17.7455 25.9851 17.9369 25.8631C18.0103 25.816 18.0889 25.7677 18.1676 25.7225C18.1795 25.7149 18.1917 25.7077 18.2042 25.7005C18.2996 25.6448 18.3835 25.5991 18.4692 25.5552L18.488 25.5451C18.5138 25.5313 18.5392 25.5179 18.5653 25.5052C18.6105 25.4808 18.6557 25.4585 18.7011 25.438C18.7491 25.4145 18.8104 25.3863 18.8719 25.3583C18.9318 25.3306 18.9845 25.307 19.0411 25.2837C19.0907 25.2618 19.1499 25.2379 19.2098 25.2139L19.2581 25.1945C19.2661 25.1912 19.274 25.1883 19.282 25.1855L19.4006 25.1426C19.4549 25.1226 19.518 25.1004 19.5792 25.08C19.6289 25.0628 19.6839 25.0456 19.7391 25.0286L19.7733 25.0181C19.8238 25.0026 19.8735 24.9875 19.9245 24.9738C20.0233 24.9454 20.1304 24.9172 20.2375 24.893C20.2815 24.8818 20.3384 24.8681 20.3953 24.8564C20.3968 24.856 20.3985 24.8557 20.4001 24.8554C20.4027 24.8548 20.4052 24.8543 20.4078 24.8538L20.5666 24.8224C20.6191 24.8119 20.6765 24.8024 20.734 24.7931C20.8526 24.7737 20.9697 24.757 21.0848 24.7442L21.4365 24.7112C21.4645 24.7084 21.5001 24.7065 21.5379 24.7046C21.5477 24.7036 21.5573 24.7027 21.5668 24.7022L21.7974 24.6931C21.8567 24.6912 21.9138 24.691 21.971 24.691L22.1446 24.6928C22.1633 24.6928 22.1811 24.6936 22.1982 24.6948C22.1993 24.6948 22.2001 24.6948 22.2012 24.6948L22.3301 24.6996C22.3409 24.6996 22.3546 24.7 22.3615 24.7003C22.4265 24.7039 22.4896 24.7077 22.5545 24.7134L22.6711 24.724C22.6774 24.7246 22.6836 24.7252 22.6898 24.7261C22.6986 24.7266 22.7075 24.7273 22.7161 24.7282L22.8794 24.7454C22.954 24.7541 23.0222 24.7641 23.0904 24.7761L23.1038 24.778C23.1566 24.7863 23.2102 24.7947 23.2625 24.8045L23.4294 24.8356C23.44 24.8377 23.4509 24.8399 23.4613 24.8426C24.913 25.1319 26.2363 25.8409 27.2893 26.8943C28.709 28.314 29.4909 30.202 29.4909 32.2106V32.477C29.4909 32.6495 29.4046 32.8106 29.2609 32.9063C28.6898 33.2863 28.087 33.621 27.4691 33.9008C26.051 34.5515 24.5385 34.9405 22.9765 35.0561C22.9395 35.0601 22.9107 35.0601 22.8959 35.0601ZM22.8185 34.0374C22.8184 34.0374 22.818 34.0376 22.8177 34.0376C22.8178 34.0376 22.8182 34.0376 22.8185 34.0374ZM21.1228 34.0373C21.123 34.0373 21.1233 34.0373 21.1237 34.0374C21.1233 34.0374 21.123 34.0373 21.1228 34.0373ZM22.8196 34.0373C22.8194 34.0373 22.8191 34.0373 22.8189 34.0373C22.8191 34.0374 22.8194 34.0373 22.8196 34.0373ZM21.1218 34.0371C21.122 34.0371 21.1223 34.0371 21.1225 34.0373C21.1223 34.0371 21.1221 34.0371 21.1218 34.0371ZM21.0632 34.0288H22.8789C22.8806 34.0287 22.8825 34.0287 22.8842 34.0285C24.3291 33.9236 25.7277 33.5648 27.0413 32.9622C27.5283 32.7417 28.0038 32.4851 28.4595 32.1968C28.4559 30.4688 27.7818 28.8451 26.5601 27.6234C25.6455 26.7089 24.4957 26.0953 23.2348 25.8491C23.2273 25.8476 23.2197 25.846 23.2121 25.8441L23.0751 25.8187C23.0303 25.8103 22.9871 25.8036 22.9447 25.7971L22.9206 25.7934C22.8624 25.7831 22.8137 25.7761 22.7651 25.7704L22.6259 25.7558C22.6049 25.7546 22.5851 25.7525 22.5655 25.7501L22.464 25.7409C22.4158 25.7367 22.3663 25.7338 22.3156 25.7309C22.3089 25.7309 22.3021 25.7307 22.299 25.7307L22.1685 25.7257C22.1558 25.7256 22.1432 25.7249 22.1302 25.7238L21.971 25.7225C21.926 25.7228 21.8791 25.7225 21.833 25.7238L21.6438 25.7307C21.6314 25.7323 21.619 25.7333 21.6065 25.7338C21.5761 25.7352 21.5473 25.7364 21.5174 25.7391L21.1935 25.7697C21.1022 25.78 21.0027 25.7943 20.9063 25.8101C20.8542 25.8185 20.8093 25.8258 20.766 25.8344L20.6096 25.8653C20.6079 25.8656 20.606 25.866 20.6043 25.8663C20.5615 25.8753 20.5187 25.8856 20.4773 25.8959C20.3776 25.9187 20.2887 25.9423 20.2014 25.9672C20.1541 25.9801 20.1143 25.9923 20.0737 26.0047L20.0409 26.0148C19.9991 26.0277 19.9546 26.0415 19.9099 26.0569C19.8523 26.0762 19.7985 26.0953 19.7461 26.1142L19.5936 26.1711C19.5435 26.1912 19.4941 26.2108 19.4448 26.2324C19.3922 26.2542 19.3522 26.2721 19.3107 26.2914C19.2466 26.3206 19.1928 26.3452 19.139 26.3715C19.099 26.3899 19.0723 26.4033 19.0459 26.4177C19.0378 26.422 19.0296 26.4263 19.0211 26.4302C19.0045 26.4381 18.9886 26.4467 18.9725 26.4553L18.9429 26.471C18.8692 26.5088 18.8018 26.5456 18.736 26.5839L18.7214 26.5925C18.7118 26.5989 18.702 26.6049 18.692 26.6105C18.6244 26.6489 18.5569 26.6903 18.4926 26.7317C18.3252 26.8384 18.1662 26.9498 18.0181 27.0639L17.999 27.0784C17.9895 27.0866 17.9816 27.0928 17.9715 27.1006C17.9048 27.1506 17.8395 27.2039 17.7759 27.2583C17.7444 27.2851 17.7183 27.3073 17.6922 27.3321C17.6827 27.341 17.6731 27.3496 17.6631 27.3577C17.6272 27.3869 17.5927 27.419 17.558 27.451C17.547 27.4618 17.5358 27.4723 17.5248 27.4823C17.4638 27.5416 17.4138 27.5902 17.3637 27.6402C17.3044 27.6995 17.2455 27.7611 17.1886 27.8228C17.1826 27.8303 17.1762 27.8377 17.1699 27.8449C17.0996 27.9235 17.0293 28.0034 16.9605 28.0852C16.8574 28.214 16.7632 28.3377 16.6797 28.4549C16.5912 28.579 16.5042 28.7109 16.4207 28.8466C16.3388 28.9829 16.2634 29.1185 16.1929 29.2566C16.1445 29.3502 16.0987 29.4432 16.0561 29.5377C15.6775 30.3768 15.4846 31.2713 15.4829 32.1967C15.9387 32.4849 16.414 32.7413 16.8986 32.961C18.2143 33.5648 19.6129 33.9235 21.058 34.0283C21.0597 34.0285 21.0616 34.0287 21.0632 34.0288ZM16.8546 26.6987C16.8479 26.704 16.8411 26.7099 16.8344 26.7162C16.8419 26.7095 16.8491 26.7032 16.8546 26.6987ZM18.7387 26.5805C18.7351 26.583 18.7317 26.5854 18.7281 26.5879C18.7315 26.5856 18.7351 26.583 18.7387 26.5805Z" fill="#44294F"/>
                  <path d="M24.5727 17.9183H27.5372C26.9025 15.4034 24.664 13.5453 21.9999 13.5453C21.4054 13.5453 20.8322 13.6379 20.2932 13.8096C20.4273 16.1016 22.2916 17.9183 24.5727 17.9183Z" fill="#EB6B69"/>
                  <path d="M20.2934 13.8103C18.417 14.4081 16.9558 15.9646 16.4626 17.9183H16.8543C18.5528 17.9183 20.0194 16.9108 20.7135 15.4502C20.4754 14.9493 20.3278 14.3956 20.2934 13.8103Z" fill="#EB6B69"/>
                  <path d="M27.5373 18.4339H24.5728C22.0352 18.4339 19.9292 16.4159 19.7785 13.8397C19.7646 13.6044 19.9122 13.3897 20.1367 13.3182C20.7381 13.1266 21.3649 13.0295 22 13.0295C24.8469 13.0295 27.3295 14.988 28.0373 17.792C28.0763 17.9462 28.0417 18.1096 27.9441 18.2351C27.8465 18.3605 27.6963 18.4339 27.5373 18.4339ZM20.8537 14.1903C21.155 16.0217 22.7172 17.4027 24.5729 17.4027H26.8324C26.0535 15.4055 24.151 14.0609 22.0002 14.0609C21.6122 14.0609 21.2281 14.1044 20.8537 14.1903Z" fill="#44294F"/>
                  <path d="M16.8544 18.4338H16.4625C16.3035 18.4338 16.1535 18.3604 16.0557 18.2351C15.958 18.1096 15.9235 17.9462 15.9625 17.792C16.4946 15.6836 18.0941 13.9698 20.1367 13.3191C20.2882 13.271 20.4539 13.2951 20.5851 13.3855C20.7164 13.4755 20.7985 13.6213 20.8078 13.7803C20.8376 14.2859 20.9623 14.7733 21.1789 15.229C21.2454 15.3691 21.2454 15.5317 21.1789 15.6717C20.3816 17.3496 18.6841 18.4338 16.8544 18.4338ZM19.867 14.5281C18.6484 15.0906 17.6757 16.125 17.1742 17.3891C18.4241 17.2832 19.5263 16.5595 20.1425 15.4347C20.0213 15.1412 19.9294 14.8383 19.867 14.5281Z" fill="#44294F"/>
                  <path d="M22.0001 27.2475L23.334 25.343C22.8932 25.2543 22.4377 25.2067 21.9714 25.2067C21.5228 25.2067 21.0847 25.2514 20.6597 25.3337L22.0001 27.2475Z" fill="#8479B9"/>
                  <path d="M22.0001 27.2475L23.4294 29.8714L22.0001 34.2444L20.5708 29.8714L22.0001 27.2475Z" fill="#8479B9"/>
                  <path d="M22.0001 27.7631C21.8318 27.7631 21.6742 27.681 21.5778 27.5433L20.2373 25.6295C20.1371 25.4863 20.1162 25.3022 20.1816 25.1403C20.2471 24.9784 20.3903 24.8607 20.5618 24.8275C21.519 24.6424 22.4918 24.6477 23.4359 24.8377C23.6066 24.872 23.7482 24.9899 23.8128 25.1515C23.8775 25.3131 23.8563 25.4963 23.7565 25.6389L22.4226 27.5435C22.326 27.681 22.1683 27.7631 22.0001 27.7631ZM21.5704 25.7352L22.0001 26.3486L22.4272 25.7388C22.1417 25.7183 21.8573 25.717 21.5704 25.7352Z" fill="#44294F"/>
                  <path d="M22 34.76C21.7769 34.76 21.5792 34.6167 21.5098 34.4046L20.0805 30.0315C20.0363 29.8966 20.0499 29.7493 20.1178 29.6247L21.5471 27.0009C21.6373 26.835 21.8111 26.7319 21.9998 26.7319C22.1885 26.7319 22.3623 26.835 22.4525 27.0009L23.8818 29.6247C23.9499 29.7495 23.9633 29.8966 23.9191 30.0315L22.4898 34.4046C22.4207 34.6165 22.2231 34.76 22 34.76ZM21.1299 29.9226L22 32.5847L22.87 29.9226L22 28.3253L21.1299 29.9226Z" fill="#44294F"/>
                  <path d="M21.9712 35.0945C14.6737 35.0945 8.73682 29.1576 8.73682 21.8601C8.73682 14.5626 14.6737 8.62572 21.9712 8.62572C29.2687 8.62572 35.2056 14.5626 35.2056 21.8601C35.2056 29.1576 29.2687 35.0945 21.9712 35.0945ZM21.9712 9.65697C15.2425 9.65697 9.76807 15.1314 9.76807 21.8601C9.76807 28.5888 15.2425 34.0632 21.9712 34.0632C28.6999 34.0632 34.1743 28.5888 34.1743 21.8601C34.1743 15.1314 28.6999 9.65697 21.9712 9.65697Z" fill="#44294F"/>
                  <path d="M21.9712 35.0945C21.6391 35.0945 21.3201 35.0828 21.023 35.0599C21.0078 35.0596 20.9884 35.0584 20.9661 35.0558C19.4039 34.9403 17.8916 34.5512 16.471 33.8994C15.8557 33.6208 15.2529 33.2863 14.6816 32.9062C10.9597 30.4478 8.73682 26.3182 8.73682 21.8601C8.73682 14.5626 14.6737 8.62572 21.9712 8.62572C29.2687 8.62572 35.2056 14.5626 35.2056 21.8601C35.2056 26.318 32.9827 30.4477 29.2592 32.907C28.6896 33.2862 28.0868 33.6206 27.469 33.9005C26.0508 34.5512 24.5385 34.9401 22.9763 35.0558C22.954 35.0584 22.9344 35.0594 22.9193 35.0599C22.6221 35.0828 22.3033 35.0945 21.9712 35.0945ZM21.0697 34.0294C21.0757 34.0295 21.0816 34.0299 21.0869 34.0304C21.6374 34.0739 22.3046 34.0739 22.8553 34.0304C22.8613 34.0299 22.8675 34.0295 22.8735 34.0294C22.8771 34.029 22.8808 34.0287 22.8842 34.0285C24.3291 33.9237 25.7277 33.5648 27.0413 32.9622C27.6108 32.7044 28.1645 32.3969 28.6894 32.0476C32.1244 29.7787 34.1743 25.9708 34.1743 21.8603C34.1743 15.1315 28.6999 9.65714 21.9712 9.65714C15.2425 9.65714 9.76807 15.1315 9.76807 21.8603C9.76807 25.9708 11.8178 29.7789 15.2514 32.0468C15.7778 32.3972 16.3316 32.7045 16.8986 32.9613C18.2143 33.5651 19.6129 33.9238 21.058 34.0287C21.062 34.0287 21.0658 34.029 21.0697 34.0294ZM22.8185 34.0374C22.8182 34.0374 22.818 34.0374 22.8177 34.0376C22.818 34.0376 22.8182 34.0376 22.8185 34.0374ZM22.8197 34.0373C22.8194 34.0373 22.8192 34.0374 22.8189 34.0374C22.8191 34.0374 22.8194 34.0373 22.8197 34.0373ZM21.122 34.0371C21.1221 34.0371 21.1223 34.0371 21.1225 34.0371C21.1225 34.0373 21.1221 34.0371 21.122 34.0371ZM22.8206 34.0371C22.8204 34.0371 22.8199 34.0371 22.8197 34.0373C22.8199 34.0371 22.8203 34.0371 22.8206 34.0371ZM21.1208 34.0369C21.1209 34.0369 21.1213 34.0369 21.1214 34.0371C21.1213 34.0369 21.1211 34.0369 21.1208 34.0369ZM21.1197 34.0366C21.1199 34.0366 21.1202 34.0366 21.1204 34.0367C21.1202 34.0367 21.1199 34.0367 21.1197 34.0366ZM21.1187 34.0364C21.1189 34.0364 21.1192 34.0364 21.1194 34.0366C21.119 34.0366 21.1189 34.0364 21.1187 34.0364Z" fill="#44294F"/>
                  <path d="M32.1863 19.4923C31.5742 16.8506 29.9041 14.4918 27.6042 13.0209L28.1599 12.1521C30.6848 13.767 32.5185 16.3577 33.1909 19.2596L32.1863 19.4923Z" fill="#44294F"/>
                  <path d="M26.623 12.4652C26.1528 12.2315 25.6612 12.0318 25.1621 11.8719L25.4766 10.8898C26.0253 11.0655 26.5655 11.285 27.0823 11.5419L26.623 12.4652Z" fill="#44294F"/>
                  <path d="M21.9712 37.8445C13.1574 37.8445 5.98682 30.6738 5.98682 21.8601C5.98682 13.0463 13.1574 5.87572 21.9712 5.87572C30.7849 5.87572 37.9556 13.0463 37.9556 21.8601C37.9556 30.6738 30.7849 37.8445 21.9712 37.8445ZM21.9712 6.90697C13.726 6.90697 7.01807 13.6149 7.01807 21.8601C7.01807 30.1053 13.726 36.8132 21.9712 36.8132C30.2164 36.8132 36.9243 30.1053 36.9243 21.8601C36.9243 13.6149 30.2164 6.90697 21.9712 6.90697Z" fill="#44294F"/>
                  <path d="M22 11.4617C21.3355 11.4617 20.7969 10.923 20.7969 10.2585V4.75853C20.7969 4.09406 21.3355 3.5554 22 3.5554C22.6645 3.5554 23.2031 4.09406 23.2031 4.75853V10.2585C23.2031 10.923 22.6645 11.4617 22 11.4617Z" fill="#FF8354"/>
                  <path d="M22 40.4446C21.3355 40.4446 20.7969 39.9059 20.7969 39.2415V33.7415C20.7969 33.077 21.3355 32.5383 22 32.5383C22.6645 32.5383 23.2031 33.077 23.2031 33.7415V39.2415C23.2031 39.9061 22.6645 40.4446 22 40.4446Z" fill="#FF8354"/>
                  <path d="M39.2415 23.2031H33.7415C33.077 23.2031 32.5383 22.6645 32.5383 22C32.5383 21.3355 33.077 20.7969 33.7415 20.7969H39.2415C39.9059 20.7969 40.4446 21.3355 40.4446 22C40.4446 22.6645 39.9061 23.2031 39.2415 23.2031Z" fill="#FF8354"/>
                  <path d="M10.2585 23.2031H4.75854C4.09408 23.2031 3.55542 22.6645 3.55542 22C3.55542 21.3355 4.09408 20.7969 4.75854 20.7969H10.2585C10.923 20.7969 11.4617 21.3355 11.4617 22C11.4617 22.6645 10.923 23.2031 10.2585 23.2031Z" fill="#FF8354"/>
                  <path d="M22 11.9773C21.0523 11.9773 20.2812 11.2062 20.2812 10.2585V4.75853C20.2812 3.81081 21.0523 3.03978 22 3.03978C22.9477 3.03978 23.7188 3.81081 23.7188 4.75853V10.2585C23.7188 11.2062 22.9477 11.9773 22 11.9773ZM22 4.07103C21.6208 4.07103 21.3125 4.37937 21.3125 4.75853V10.2585C21.3125 10.6377 21.6208 10.946 22 10.946C22.3792 10.946 22.6875 10.6377 22.6875 10.2585V4.75853C22.6875 4.37937 22.3792 4.07103 22 4.07103Z" fill="#44294F"/>
                  <path d="M22 40.9602C21.0523 40.9602 20.2812 40.1892 20.2812 39.2415V33.7415C20.2812 32.7938 21.0523 32.0227 22 32.0227C22.9477 32.0227 23.7188 32.7938 23.7188 33.7415V39.2415C23.7188 40.1894 22.9477 40.9602 22 40.9602ZM22 33.054C21.6208 33.054 21.3125 33.3623 21.3125 33.7415V39.2415C21.3125 39.6206 21.6208 39.929 22 39.929C22.3792 39.929 22.6875 39.6206 22.6875 39.2415V33.7415C22.6875 33.3625 22.3792 33.054 22 33.054Z" fill="#44294F"/>
                  <path d="M39.2415 23.7188H33.7415C32.7937 23.7188 32.0227 22.9477 32.0227 22C32.0227 21.0523 32.7937 20.2812 33.7415 20.2812H39.2415C40.1892 20.2812 40.9602 21.0523 40.9602 22C40.9602 22.9477 40.1893 23.7188 39.2415 23.7188ZM33.7415 21.3125C33.3623 21.3125 33.054 21.6208 33.054 22C33.054 22.3792 33.3623 22.6875 33.7415 22.6875H39.2415C39.6206 22.6875 39.929 22.3792 39.929 22C39.929 21.6208 39.6206 21.3125 39.2415 21.3125H33.7415Z" fill="#44294F"/>
                  <path d="M10.2585 23.7188H4.75854C3.81083 23.7188 3.03979 22.9477 3.03979 22C3.03979 21.0523 3.81083 20.2812 4.75854 20.2812H10.2585C11.2063 20.2812 11.9773 21.0523 11.9773 22C11.9773 22.9477 11.2063 23.7188 10.2585 23.7188ZM4.75854 21.3125C4.37939 21.3125 4.07104 21.6208 4.07104 22C4.07104 22.3792 4.37939 22.6875 4.75854 22.6875H10.2585C10.6377 22.6875 10.946 22.3792 10.946 22C10.946 21.6208 10.6377 21.3125 10.2585 21.3125H4.75854Z" fill="#44294F"/>
                  <path d="M32.2192 37.8211C35.067 37.8211 37.3755 35.5126 37.3755 32.6648C37.3755 29.8171 35.067 27.5086 32.2192 27.5086C29.3715 27.5086 27.063 29.8171 27.063 32.6648C27.063 35.5126 29.3715 37.8211 32.2192 37.8211Z" fill="#FCC800"/>
                  <path d="M28.7817 32.6648C28.7817 30.1101 30.6402 27.9905 33.0786 27.5813C32.799 27.5344 32.5121 27.5086 32.2192 27.5086C29.3714 27.5086 27.063 29.817 27.063 32.6648C27.063 35.5125 29.3714 37.8211 32.2192 37.8211C32.5121 37.8211 32.799 37.7953 33.0786 37.7484C30.6402 37.3392 28.7817 35.2196 28.7817 32.6648Z" fill="#E8E6F4"/>
                  <path d="M32.2192 38.3367C29.0918 38.3367 26.5474 35.7923 26.5474 32.6648C26.5474 29.5374 29.0918 26.993 32.2192 26.993C35.3467 26.993 37.8911 29.5374 37.8911 32.6648C37.8911 35.7923 35.3467 38.3367 32.2192 38.3367ZM32.2192 28.0242C29.6604 28.0242 27.5786 30.106 27.5786 32.6648C27.5786 35.2237 29.6604 37.3055 32.2192 37.3055C34.7781 37.3055 36.8599 35.2237 36.8599 32.6648C36.8599 30.106 34.7781 28.0242 32.2192 28.0242Z" fill="#44294F"/>
                  <path d="M31.8515 35.0601C31.7193 35.0601 31.5875 35.0097 31.4868 34.909L29.1118 32.5341L29.8411 31.805L31.8601 33.824L37.6507 28.3046L38.3623 29.051L32.2073 34.9178C32.1076 35.0127 31.9794 35.0601 31.8515 35.0601Z" fill="#00FF69"/>
                  </svg>',
                  'title' => 'Literary Agent Circle',
                  'content' => 'Expert assistance in manuscript dev., negotiations, and growth.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_714_6717)">
                  <path d="M43.5599 27.3416H0.439941V43.56H43.5599V27.3416Z" fill="#7A7979"/>
                  <path d="M12.8567 29.7176H4.02154C3.77514 29.7176 3.58154 29.524 3.58154 29.2776C3.58154 29.0312 3.77514 28.8376 4.02154 28.8376H12.8567C13.1031 28.8376 13.2967 29.0312 13.2967 29.2776C13.2967 29.524 13.0943 29.7176 12.8567 29.7176Z" fill="#C9C9C9"/>
                  <path d="M27.896 27.3416H16.104V13.5608C16.104 12.9008 16.6408 12.364 17.3008 12.364H26.6992C27.3592 12.364 27.896 12.9008 27.896 13.5608V27.3416Z" fill="#C9C9C9"/>
                  <path d="M27.8961 27.7816H16.1041C15.8577 27.7816 15.6641 27.588 15.6641 27.3416V13.5608C15.6641 12.6632 16.3945 11.924 17.3009 11.924H26.6993C27.5969 11.924 28.3361 12.6544 28.3361 13.5608V27.3416C28.3361 27.5792 28.1337 27.7816 27.8961 27.7816ZM16.5441 26.9016H27.4561V13.5608C27.4561 13.1472 27.1217 12.804 26.6993 12.804H17.3009C16.8873 12.804 16.5441 13.1384 16.5441 13.5608V26.9016Z" fill="#231F20"/>
                  <path d="M25.0361 27.3416H18.9641V10.6392C18.9641 10.34 19.1401 10.0672 19.4041 9.9352L23.9185 7.788C24.4377 7.5416 25.0273 7.92 25.0273 8.492V27.3416H25.0361Z" fill="#C9C9C9"/>
                  <path d="M25.0359 27.7816H18.9639C18.7175 27.7816 18.5239 27.588 18.5239 27.3416V10.6392C18.5239 10.1728 18.7967 9.74161 19.2191 9.53921L23.7335 7.39201C24.1119 7.21601 24.5519 7.24241 24.9039 7.46241C25.2559 7.68241 25.4671 8.06961 25.4671 8.49201V27.3416C25.4759 27.5792 25.2823 27.7816 25.0359 27.7816ZM19.4039 26.9016H24.5959V8.49201C24.5959 8.32481 24.4903 8.23681 24.4375 8.21041C24.3847 8.18401 24.2615 8.12241 24.1119 8.19281L19.5975 10.34C19.4831 10.3928 19.4039 10.516 19.4039 10.648V26.9016Z" fill="#231F20"/>
                  <path d="M43.56 27.7816H0.44C0.1936 27.7816 0 27.588 0 27.3416C0 27.0952 0.1936 26.9016 0.44 26.9016H43.56C43.8064 26.9016 44 27.0952 44 27.3416C44 27.588 43.8064 27.7816 43.56 27.7816Z" fill="#231F20"/>
                  <path d="M43.56 44H0.44C0.1936 44 0 43.8064 0 43.56C0 43.3136 0.1936 43.12 0.44 43.12H43.56C43.8064 43.12 44 43.3136 44 43.56C44 43.8064 43.8064 44 43.56 44Z" fill="#231F20"/>
                  <path d="M43.56 44H0.44C0.1936 44 0 43.8064 0 43.56C0 43.3136 0.1936 43.12 0.44 43.12H43.56C43.8064 43.12 44 43.3136 44 43.56C44 43.8064 43.8064 44 43.56 44Z" fill="#231F20"/>
                  <path d="M3.89834 21.4368C3.94234 21.3136 3.95994 21.1816 3.95994 21.0408C3.95994 20.328 3.37914 19.7472 2.67514 19.7472C1.96234 19.7472 1.39034 20.328 1.39034 21.0408C1.39034 21.1816 1.40794 21.3136 1.45194 21.4368C0.871141 21.5688 0.439941 22.088 0.439941 22.6952C0.439941 23.408 1.02074 23.9888 1.72474 23.9888C2.09434 23.9888 2.43754 23.8304 2.66634 23.5752C2.90394 23.8304 3.23834 23.9888 3.60794 23.9888C4.32074 23.9888 4.89274 23.408 4.89274 22.6952C4.91034 22.088 4.47914 21.5688 3.89834 21.4368Z" fill="#08B26C"/>
                  <path d="M3.6168 24.4288C3.2824 24.4288 2.948 24.332 2.6752 24.1472C2.3936 24.332 2.068 24.4288 1.7336 24.4288C0.7744 24.4288 0 23.6544 0 22.704C0 22.044 0.3784 21.4544 0.9504 21.164C0.9504 21.1288 0.9504 21.0936 0.9504 21.0496C0.9504 20.0992 1.7248 19.316 2.6752 19.316C3.6256 19.316 4.4 20.0904 4.4 21.0408C4.4 21.076 4.4 21.1112 4.4 21.1552C4.972 21.4456 5.3504 22.044 5.3504 22.6952C5.3504 23.6544 4.5672 24.4288 3.6168 24.4288ZM2.6752 23.1352C2.7984 23.1352 2.9128 23.188 3.0008 23.276C3.1592 23.452 3.388 23.5488 3.6256 23.5488C4.092 23.5488 4.4704 23.1704 4.4704 22.6952C4.4704 22.2992 4.1888 21.956 3.8104 21.868C3.6872 21.8416 3.5816 21.7624 3.52 21.6568C3.4584 21.5512 3.4408 21.4192 3.4848 21.3048C3.5112 21.2168 3.5288 21.1288 3.5288 21.0408C3.5288 20.5744 3.1504 20.1872 2.684 20.1872C2.2176 20.1872 1.8392 20.5656 1.8392 21.0408C1.8392 21.1288 1.8568 21.2168 1.8832 21.3048C1.9184 21.4192 1.9096 21.5512 1.848 21.6568C1.7864 21.7624 1.6808 21.8416 1.5576 21.868C1.1704 21.956 0.8976 22.2992 0.8976 22.6952C0.8976 23.1616 1.276 23.5488 1.7424 23.5488C1.98 23.5488 2.2 23.452 2.3672 23.276C2.4376 23.188 2.552 23.1352 2.6752 23.1352Z" fill="#231F20"/>
                  <path d="M2.67511 27.7816C2.42871 27.7816 2.23511 27.588 2.23511 27.3416V23.5752C2.23511 23.3288 2.42871 23.1352 2.67511 23.1352C2.92151 23.1352 3.11511 23.3288 3.11511 23.5752V27.3416C3.11511 27.5792 2.91271 27.7816 2.67511 27.7816Z" fill="#231F20"/>
                  <path d="M8.36879 21.4368C8.41279 21.3136 8.43039 21.1816 8.43039 21.0408C8.43039 20.328 7.84959 19.7472 7.14559 19.7472C6.43279 19.7472 5.86079 20.328 5.86079 21.0408C5.86079 21.1816 5.87839 21.3136 5.92239 21.4368C5.35039 21.5688 4.91919 22.0792 4.91919 22.6952C4.91919 23.408 5.49999 23.9888 6.20399 23.9888C6.57359 23.9888 6.91679 23.8304 7.14559 23.5752C7.38319 23.8304 7.71759 23.9888 8.08719 23.9888C8.79999 23.9888 9.37199 23.408 9.37199 22.6952C9.37199 22.088 8.94079 21.5688 8.36879 21.4368Z" fill="#08B26C"/>
                  <path d="M8.08725 24.4288C7.75285 24.4288 7.41845 24.332 7.14565 24.1472C6.86405 24.332 6.53845 24.4288 6.20405 24.4288C5.25365 24.4288 4.47925 23.6544 4.47925 22.6952C4.47925 22.0352 4.85765 21.4456 5.42965 21.1552C5.42965 21.12 5.42965 21.0848 5.42965 21.0408C5.42965 20.0904 6.20405 19.3072 7.15445 19.3072C8.10485 19.3072 8.87925 20.0816 8.87925 21.0408C8.87925 21.076 8.87925 21.1112 8.87925 21.1552C9.45125 21.4456 9.82965 22.044 9.82965 22.6952C9.81205 23.6544 9.03765 24.4288 8.08725 24.4288ZM7.13685 23.1352C7.26005 23.1352 7.37445 23.188 7.46245 23.276C7.62085 23.452 7.84965 23.5488 8.08725 23.5488C8.55365 23.5488 8.93205 23.1704 8.93205 22.6952C8.93205 22.2992 8.65045 21.956 8.27205 21.868C8.14885 21.8416 8.04325 21.7624 7.98165 21.6568C7.92005 21.5512 7.90245 21.4192 7.94645 21.3048C7.97285 21.2168 7.99045 21.1288 7.99045 21.0408C7.99045 20.5744 7.61205 20.1872 7.14565 20.1872C6.67925 20.1872 6.30085 20.5656 6.30085 21.0408C6.30085 21.1288 6.31845 21.2168 6.34485 21.3048C6.38005 21.4192 6.37125 21.5512 6.30965 21.6568C6.24805 21.7624 6.14245 21.8416 6.01925 21.868C5.63205 21.956 5.35925 22.2992 5.35925 22.6952C5.35925 23.1616 5.73765 23.5488 6.20405 23.5488C6.44165 23.5488 6.66165 23.452 6.82885 23.276C6.89925 23.188 7.01365 23.1352 7.13685 23.1352Z" fill="#231F20"/>
                  <path d="M7.13678 27.7816C6.89038 27.7816 6.69678 27.588 6.69678 27.3416V23.5752C6.69678 23.3288 6.89038 23.1352 7.13678 23.1352C7.38318 23.1352 7.57678 23.3288 7.57678 23.5752V27.3416C7.57678 27.5792 7.38318 27.7816 7.13678 27.7816Z" fill="#231F20"/>
                  <path d="M38.0863 21.4368C38.1303 21.3136 38.1479 21.1816 38.1479 21.0408C38.1479 20.328 37.5671 19.7472 36.8631 19.7472C36.1503 19.7472 35.5783 20.328 35.5783 21.0408C35.5783 21.1816 35.5959 21.3136 35.6399 21.4368C35.0679 21.5688 34.6367 22.0792 34.6367 22.6952C34.6367 23.408 35.2175 23.9888 35.9215 23.9888C36.2911 23.9888 36.6343 23.8304 36.8631 23.5752C37.1007 23.8304 37.4351 23.9888 37.8047 23.9888C38.5175 23.9888 39.0895 23.408 39.0895 22.6952C39.0983 22.088 38.6671 21.5688 38.0863 21.4368Z" fill="#08B26C"/>
                  <path d="M37.8048 24.4288C37.4704 24.4288 37.136 24.332 36.8632 24.1472C36.5816 24.332 36.256 24.4288 35.9216 24.4288C34.9712 24.4288 34.1968 23.6544 34.1968 22.6952C34.1968 22.0352 34.5752 21.4456 35.1472 21.1552C35.1472 21.12 35.1472 21.0848 35.1472 21.0408C35.1472 20.0904 35.9216 19.3072 36.872 19.3072C37.8224 19.3072 38.5968 20.0816 38.5968 21.0408C38.5968 21.076 38.5968 21.1112 38.5968 21.1552C39.1688 21.4456 39.5472 22.044 39.5472 22.6952C39.5384 23.6544 38.7552 24.4288 37.8048 24.4288ZM36.8632 23.1352C36.9864 23.1352 37.1008 23.188 37.1888 23.276C37.3472 23.452 37.576 23.5488 37.8136 23.5488C38.28 23.5488 38.6584 23.1704 38.6584 22.6952C38.6584 22.2992 38.3768 21.956 37.9984 21.868C37.8752 21.8416 37.7696 21.7624 37.708 21.6568C37.6464 21.5512 37.6288 21.4192 37.6728 21.3048C37.6992 21.2168 37.7168 21.1288 37.7168 21.0408C37.7168 20.5744 37.3384 20.1872 36.872 20.1872C36.4056 20.1872 36.0272 20.5656 36.0272 21.0408C36.0272 21.1288 36.0448 21.2168 36.0712 21.3048C36.1064 21.4192 36.0976 21.5512 36.036 21.6568C35.9744 21.7624 35.8688 21.8416 35.7456 21.868C35.3584 21.956 35.0856 22.2992 35.0856 22.6952C35.0856 23.1616 35.464 23.5488 35.9304 23.5488C36.168 23.5488 36.388 23.452 36.5552 23.276C36.6256 23.188 36.74 23.1352 36.8632 23.1352Z" fill="#231F20"/>
                  <path d="M36.8631 27.7816C36.6167 27.7816 36.4231 27.588 36.4231 27.3416V23.5752C36.4231 23.3288 36.6167 23.1352 36.8631 23.1352C37.1095 23.1352 37.3031 23.3288 37.3031 23.5752V27.3416C37.3031 27.5792 37.1007 27.7816 36.8631 27.7816Z" fill="#231F20"/>
                  <path d="M42.5568 21.4368C42.6008 21.3136 42.6184 21.1816 42.6184 21.0408C42.6184 20.328 42.0376 19.7472 41.3336 19.7472C40.6296 19.7472 40.0488 20.328 40.0488 21.0408C40.0488 21.1816 40.0664 21.3136 40.1104 21.4368C39.5384 21.5688 39.1072 22.0792 39.1072 22.6952C39.1072 23.408 39.688 23.9888 40.392 23.9888C40.7616 23.9888 41.1048 23.8304 41.3336 23.5752C41.5712 23.8304 41.9056 23.9888 42.2752 23.9888C42.988 23.9888 43.56 23.408 43.56 22.6952C43.56 22.088 43.1288 21.5688 42.5568 21.4368Z" fill="#08B26C"/>
                  <path d="M42.2752 24.4288C41.9408 24.4288 41.6064 24.332 41.3336 24.1472C41.052 24.332 40.7264 24.4288 40.392 24.4288C39.4416 24.4288 38.6672 23.6544 38.6672 22.6952C38.6672 22.0352 39.0456 21.4456 39.6176 21.1552C39.6176 21.12 39.6176 21.0848 39.6176 21.0408C39.6176 20.0904 40.392 19.3072 41.3424 19.3072C42.2928 19.3072 43.0672 20.0816 43.0672 21.0408C43.0672 21.076 43.0672 21.1112 43.0672 21.1552C43.6392 21.4456 44.0176 22.044 44.0176 22.6952C44 23.6544 43.2256 24.4288 42.2752 24.4288ZM41.3248 23.1352C41.448 23.1352 41.5624 23.188 41.6504 23.276C41.8088 23.452 42.0376 23.5488 42.2752 23.5488C42.7416 23.5488 43.12 23.1704 43.12 22.6952C43.12 22.2992 42.8384 21.956 42.46 21.868C42.3368 21.8416 42.2312 21.7624 42.1696 21.6568C42.108 21.5512 42.0904 21.4192 42.1344 21.3048C42.1608 21.2168 42.1784 21.1288 42.1784 21.0408C42.1784 20.5744 41.8 20.1872 41.3336 20.1872C40.8672 20.1872 40.4888 20.5656 40.4888 21.0408C40.4888 21.1288 40.5064 21.2168 40.5328 21.3048C40.568 21.4192 40.5592 21.5512 40.4976 21.6568C40.436 21.7624 40.3304 21.8416 40.2072 21.868C39.82 21.956 39.5472 22.2992 39.5472 22.6952C39.5472 23.1616 39.9256 23.5488 40.392 23.5488C40.6296 23.5488 40.8496 23.452 41.0168 23.276C41.0872 23.188 41.2016 23.1352 41.3248 23.1352Z" fill="#231F20"/>
                  <path d="M41.3248 27.7816C41.0784 27.7816 40.8848 27.588 40.8848 27.3416V23.5752C40.8848 23.3288 41.0784 23.1352 41.3248 23.1352C41.5712 23.1352 41.7648 23.3288 41.7648 23.5752V27.3416C41.7648 27.5792 41.5712 27.7816 41.3248 27.7816Z" fill="#231F20"/>
                  <path d="M27.5353 40.876H16.4649C16.2185 40.876 16.0249 40.6824 16.0249 40.436C16.0249 40.1896 16.2185 39.996 16.4649 39.996H27.5353C27.7817 39.996 27.9753 40.1896 27.9753 40.436C27.9753 40.6824 27.7729 40.876 27.5353 40.876Z" fill="#231F20"/>
                  <path d="M14.2735 40.876H13.4639C13.2175 40.876 13.0239 40.6824 13.0239 40.436C13.0239 40.1896 13.2175 39.996 13.4639 39.996H14.2735C14.5199 39.996 14.7135 40.1896 14.7135 40.436C14.7135 40.6824 14.5111 40.876 14.2735 40.876Z" fill="#231F20"/>
                  <path d="M30.5448 40.876H29.7352C29.4888 40.876 29.2952 40.6824 29.2952 40.436C29.2952 40.1896 29.4888 39.996 29.7352 39.996H30.5448C30.7912 39.996 30.9848 40.1896 30.9848 40.436C30.9848 40.6824 30.7824 40.876 30.5448 40.876Z" fill="#231F20"/>
                  <path d="M1.5576 29.7176H0.44C0.1936 29.7176 0 29.524 0 29.2776C0 29.0312 0.1936 28.8376 0.44 28.8376H1.5576C1.804 28.8376 1.9976 29.0312 1.9976 29.2776C1.9976 29.524 1.7952 29.7176 1.5576 29.7176Z" fill="#C9C9C9"/>
                  <path d="M40.2777 29.7176H33.5897C33.3433 29.7176 33.1497 29.524 33.1497 29.2776C33.1497 29.0312 33.3433 28.8376 33.5897 28.8376H40.2777C40.5241 28.8376 40.7177 29.0312 40.7177 29.2776C40.7177 29.524 40.5153 29.7176 40.2777 29.7176Z" fill="#C9C9C9"/>
                  <path d="M20.8912 24.86C20.6448 24.86 20.4512 24.6664 20.4512 24.42V10.8944C20.4512 10.648 20.6448 10.4544 20.8912 10.4544C21.1376 10.4544 21.3312 10.648 21.3312 10.8944V24.42C21.3312 24.6576 21.1288 24.86 20.8912 24.86Z" fill="#F9F9F9"/>
                  <path d="M22.8535 12.364H21.1375C20.8999 12.364 20.7063 12.5576 20.7063 12.7952V14.5112C20.7063 14.7488 20.8999 14.9424 21.1375 14.9424H22.8535C23.0911 14.9424 23.2847 14.7488 23.2847 14.5112V12.7952C23.2847 12.5576 23.0911 12.364 22.8535 12.364Z" fill="#71CCFF"/>
                  <path d="M22.8536 15.3736H21.1376C20.6624 15.3736 20.2664 14.9864 20.2664 14.5024V12.7864C20.2664 12.3112 20.6536 11.9152 21.1376 11.9152H22.8536C23.3288 11.9152 23.7248 12.3024 23.7248 12.7864V14.5024C23.7248 14.9864 23.3376 15.3736 22.8536 15.3736ZM21.1552 14.4936H22.8448V12.804H21.1552V14.4936Z" fill="#231F20"/>
                  <path d="M22.8535 14.9336H21.1375C20.8999 14.9336 20.7063 15.1272 20.7063 15.3648V17.0808C20.7063 17.3184 20.8999 17.512 21.1375 17.512H22.8535C23.0911 17.512 23.2847 17.3184 23.2847 17.0808V15.3648C23.2847 15.1272 23.0911 14.9336 22.8535 14.9336Z" fill="#71CCFF"/>
                  <path d="M22.8536 17.952H21.1376C20.6624 17.952 20.2664 17.5648 20.2664 17.0808V15.3648C20.2664 14.8896 20.6536 14.4936 21.1376 14.4936H22.8536C23.3288 14.4936 23.7248 14.8808 23.7248 15.3648V17.0808C23.7248 17.556 23.3376 17.952 22.8536 17.952ZM21.1552 17.072H22.8448V15.3824H21.1552V17.072Z" fill="#231F20"/>
                  <path d="M22.8535 23.9888H21.1375C20.8999 23.9888 20.7063 24.1824 20.7063 24.42V26.9104C20.7063 27.148 20.8999 27.3416 21.1375 27.3416H22.8535C23.0911 27.3416 23.2847 27.148 23.2847 26.9104V24.42C23.2847 24.1824 23.0911 23.9888 22.8535 23.9888Z" fill="#7A7979"/>
                  <path d="M22.8536 27.7816H21.1376C20.6624 27.7816 20.2664 27.3944 20.2664 26.9104V24.42C20.2664 23.9448 20.6536 23.5488 21.1376 23.5488H22.8536C23.3288 23.5488 23.7248 23.936 23.7248 24.42V26.9104C23.7248 27.3856 23.3376 27.7816 22.8536 27.7816ZM21.1552 26.9016H22.8448V24.4288H21.1552V26.9016Z" fill="#231F20"/>
                  <path d="M22.8535 17.512H21.1375C20.8999 17.512 20.7063 17.7056 20.7063 17.9432V19.6592C20.7063 19.8968 20.8999 20.0904 21.1375 20.0904H22.8535C23.0911 20.0904 23.2847 19.8968 23.2847 19.6592V17.9432C23.2847 17.6968 23.0911 17.512 22.8535 17.512Z" fill="#71CCFF"/>
                  <path d="M22.8536 20.5216H21.1376C20.6624 20.5216 20.2664 20.1344 20.2664 19.6504V17.9344C20.2664 17.4592 20.6536 17.0632 21.1376 17.0632H22.8536C23.3288 17.0632 23.7248 17.4504 23.7248 17.9344V19.6504C23.7248 20.1344 23.3376 20.5216 22.8536 20.5216ZM21.1552 19.6416H22.8448V17.952H21.1552V19.6416Z" fill="#231F20"/>
                  <path d="M22.4488 0.448802C22.2992 0.440002 22.1496 0.440002 22 0.440002C21.8504 0.440002 21.7008 0.440002 21.5512 0.448802C18.2688 0.536802 15.3824 1.6104 13.0504 3.3264C6.76719 7.9552 4.51439 17.2656 9.54799 24.5168L19.8176 39.292C20.8736 40.8144 23.1352 40.8144 24.1912 39.292L34.4608 24.5168C41.36 14.564 34.5576 0.756802 22.4488 0.448802ZM22 26.708C15.8488 26.708 10.868 21.7272 10.868 15.576C10.868 9.4248 15.8488 4.444 22 4.444C28.1512 4.444 33.132 9.4248 33.132 15.576C33.132 21.7272 28.1512 26.708 22 26.708Z" fill="#F9B630"/>
                  <path d="M21.9999 40.876C20.9879 40.876 20.0287 40.3744 19.4479 39.5472L9.18708 24.7632C6.68788 21.1728 5.79908 16.8608 6.66148 12.6104C6.71428 12.3728 6.94308 12.2144 7.18068 12.2672C7.41828 12.32 7.57668 12.5488 7.52388 12.7864C6.70548 16.7992 7.55028 20.8736 9.90868 24.2616L20.1783 39.0368C20.6007 39.644 21.2607 39.9872 21.9999 39.9872C22.7391 39.9872 23.4079 39.6352 23.8215 39.0368L34.0911 24.2616C37.2767 19.6768 37.6639 13.948 35.1295 8.9496C32.6479 4.0392 27.8959 1.0296 22.4399 0.888797C22.1495 0.879997 21.8503 0.879997 21.5599 0.888797C18.3919 0.967997 15.4263 2.024 12.9799 3.9248C12.7863 4.0744 12.5135 4.0392 12.3639 3.8456C12.2143 3.652 12.2495 3.3792 12.4431 3.2296C15.0303 1.2056 18.1807 0.0967973 21.5423 0.00879727C21.8415 -2.73442e-06 22.1583 -2.73442e-06 22.4663 0.00879727C28.2567 0.158397 33.2903 3.3528 35.9215 8.5536C37.1799 11.044 37.7783 13.8072 37.6375 16.5616C37.4967 19.4832 36.5199 22.3168 34.8127 24.772L24.5519 39.5472C23.9711 40.3744 23.0119 40.876 21.9999 40.876Z" fill="#231F20"/>
                  <path d="M7.8495 10.5864C7.7967 10.5864 7.7439 10.5776 7.6911 10.56C7.4623 10.472 7.3567 10.2168 7.4447 9.988C8.0519 8.4392 8.8791 7.0048 9.9175 5.72C10.0671 5.5352 10.3487 5.5 10.5335 5.6584C10.7183 5.808 10.7535 6.0896 10.5951 6.2744C9.6095 7.4888 8.8263 8.844 8.2543 10.3136C8.1927 10.4808 8.0255 10.5864 7.8495 10.5864Z" fill="#231F20"/>
                  <path d="M11.3609 5.20961C11.2465 5.20961 11.1321 5.16561 11.0529 5.07761C10.8857 4.90161 10.8857 4.62881 11.0529 4.45281C11.0881 4.41761 11.1233 4.38241 11.1585 4.34721C11.3345 4.18001 11.6073 4.18001 11.7833 4.35601C11.9593 4.53201 11.9505 4.80481 11.7745 4.98081C11.7393 5.01601 11.7041 5.05121 11.6689 5.08641C11.5897 5.16561 11.4753 5.20961 11.3609 5.20961Z" fill="#231F20"/>
                  <path d="M19.4393 2.89519C19.2281 2.89519 19.0433 2.74559 19.0081 2.53439C18.9641 2.29679 19.1225 2.06799 19.3601 2.02399C19.4305 2.01519 19.5009 1.99759 19.5713 1.98879C19.8089 1.94479 20.0377 2.11199 20.0817 2.34959C20.1257 2.58719 19.9585 2.81599 19.7209 2.85999C19.6593 2.86879 19.5889 2.88639 19.5273 2.89519C19.4921 2.88639 19.4657 2.89519 19.4393 2.89519Z" fill="#FFEDCC"/>
                  <path d="M11.0089 23.936C10.8681 23.936 10.7361 23.8744 10.6481 23.7512C9.13448 21.5688 8.26328 19.052 8.14008 16.4736C8.01688 14.036 8.54488 11.572 9.67128 9.3632C11.3609 6.0368 14.1857 3.5816 17.6353 2.464C17.8641 2.3848 18.1105 2.5168 18.1897 2.7456C18.2689 2.9744 18.1369 3.2208 17.9081 3.3C14.6873 4.3472 12.0385 6.644 10.4633 9.7592C9.40728 11.836 8.91448 14.1416 9.02888 16.4296C9.15208 18.8496 9.96168 21.208 11.3785 23.2496C11.5193 23.452 11.4665 23.7248 11.2641 23.8656C11.1849 23.9096 11.0969 23.936 11.0089 23.936Z" fill="#FFEDCC"/>
                  <path d="M22 27.148C15.62 27.148 10.428 21.956 10.428 15.576C10.428 9.196 15.62 4.004 22 4.004C28.38 4.004 33.572 9.196 33.572 15.576C33.572 21.956 28.38 27.148 22 27.148ZM22 4.884C16.104 4.884 11.308 9.68 11.308 15.576C11.308 21.472 16.104 26.268 22 26.268C27.896 26.268 32.692 21.472 32.692 15.576C32.692 9.68 27.896 4.884 22 4.884Z" fill="#231F20"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_714_6717">
                  <rect width="44" height="44" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>',
                  'title' => 'Trad Pub Pitch',
                  'content' => 'Connecting your stories to leading publishers with expert precision and care.'
               ],
               [
                  'svg' => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_714_6542)">
                  <path d="M44 0H0V44H44V0ZM3.41447 3.88429C3.21819 3.88429 3.05903 3.76045 3.05903 3.60774V1.9684C3.05903 1.81569 3.21819 1.69185 3.41447 1.69185H4.41581C4.61209 1.69185 4.77116 1.81569 4.77116 1.9684V3.60783C4.77116 3.76054 4.61209 3.88438 4.41581 3.88438L3.41447 3.88429ZM10.62 3.88429C10.4237 3.88429 10.2645 3.76045 10.2645 3.60774V1.9684C10.2645 1.81569 10.4237 1.69185 10.62 1.69185H11.6213C11.8176 1.69185 11.9768 1.81569 11.9768 1.9684V3.60783C11.9768 3.76054 11.8176 3.88438 11.6213 3.88438L10.62 3.88429ZM17.8255 3.88429C17.6292 3.88429 17.4701 3.76045 17.4701 3.60774V1.9684C17.4701 1.81569 17.6292 1.69185 17.8255 1.69185H18.8268C19.0231 1.69185 19.1823 1.81569 19.1823 1.9684V3.60783C19.1823 3.76054 19.0231 3.88438 18.8268 3.88438L17.8255 3.88429ZM25.031 3.88429C24.8347 3.88429 24.6756 3.76045 24.6756 3.60774V1.9684C24.6756 1.81569 24.8347 1.69185 25.031 1.69185H26.0324C26.2287 1.69185 26.3878 1.81569 26.3878 1.9684V3.60783C26.3878 3.76054 26.2287 3.88438 26.0324 3.88438L25.031 3.88429ZM32.2365 3.88429C32.0402 3.88429 31.8812 3.76045 31.8812 3.60774V1.9684C31.8812 1.81569 32.0402 1.69185 32.2365 1.69185H33.238C33.4342 1.69185 33.5934 1.81569 33.5934 1.9684V3.60783C33.5934 3.76054 33.4342 3.88438 33.238 3.88438L32.2365 3.88429ZM39.442 3.88429C39.2458 3.88429 39.0866 3.76045 39.0866 3.60774V1.9684C39.0866 1.81569 39.2458 1.69185 39.442 1.69185H40.4434C40.6397 1.69185 40.7988 1.81569 40.7988 1.9684V3.60783C40.7988 3.76054 40.6397 3.88438 40.4434 3.88438L39.442 3.88429ZM3.41447 42.3753C3.21819 42.3753 3.05903 42.2515 3.05903 42.0988V40.4594C3.05903 40.3067 3.21819 40.1829 3.41447 40.1829H4.41581C4.61209 40.1829 4.77116 40.3067 4.77116 40.4594V42.0988C4.77116 42.2515 4.61209 42.3753 4.41581 42.3753H3.41447ZM10.62 42.3753C10.4237 42.3753 10.2645 42.2515 10.2645 42.0988V40.4594C10.2645 40.3067 10.4237 40.1829 10.62 40.1829H11.6213C11.8176 40.1829 11.9768 40.3067 11.9768 40.4594V42.0988C11.9768 42.2515 11.8176 42.3753 11.6213 42.3753H10.62ZM17.8255 42.3753C17.6292 42.3753 17.4701 42.2515 17.4701 42.0988V40.4594C17.4701 40.3067 17.6292 40.1829 17.8255 40.1829H18.8268C19.0231 40.1829 19.1823 40.3067 19.1823 40.4594V42.0988C19.1823 42.2515 19.0231 42.3753 18.8268 42.3753H17.8255ZM25.031 42.3753C24.8347 42.3753 24.6756 42.2515 24.6756 42.0988V40.4594C24.6756 40.3067 24.8347 40.1829 25.031 40.1829H26.0324C26.2287 40.1829 26.3878 40.3067 26.3878 40.4594V42.0988C26.3878 42.2515 26.2287 42.3753 26.0324 42.3753H25.031ZM32.2365 42.3753C32.0402 42.3753 31.8812 42.2515 31.8812 42.0988V40.4594C31.8812 40.3067 32.0402 40.1829 32.2365 40.1829H33.238C33.4342 40.1829 33.5934 40.3067 33.5934 40.4594V42.0988C33.5934 42.2515 33.4342 42.3753 33.238 42.3753H32.2365ZM39.442 42.3753C39.2458 42.3753 39.0866 42.2515 39.0866 42.0988V40.4594C39.0866 40.3067 39.2458 40.1829 39.442 40.1829H40.4434C40.6397 40.1829 40.7988 40.3067 40.7988 40.4594V42.0988C40.7988 42.2515 40.6397 42.3753 40.4434 42.3753H39.442Z" fill="#6770E6"/>
                  <path d="M44 5.56187H0V38.4382H44V5.56187Z" fill="#5861C7"/>
                  <path d="M3.41438 1.69185H4.41581C4.46987 1.69185 4.52048 1.70199 4.56629 1.71875H10.4694C10.5152 1.70199 10.5659 1.69185 10.6199 1.69185H11.6212C11.6753 1.69185 11.7259 1.70199 11.7717 1.71875H17.6749C17.7207 1.70199 17.7714 1.69185 17.8253 1.69185H18.8267C18.8807 1.69185 18.9313 1.70199 18.9771 1.71875H24.8803C24.9262 1.70199 24.9768 1.69185 25.0308 1.69185H26.0322C26.0862 1.69185 26.1369 1.70199 26.1827 1.71875H32.0857C32.1315 1.70199 32.1822 1.69185 32.2362 1.69185H33.2376C33.2917 1.69185 33.3423 1.70199 33.3881 1.71875H39.2912C39.3371 1.70199 39.3877 1.69185 39.4417 1.69185H40.4431C40.4971 1.69185 40.5478 1.70199 40.5936 1.71875H44V0H0V1.71875H3.26391C3.3098 1.70199 3.36041 1.69185 3.41438 1.69185Z" fill="#8F95E6"/>
                  <path d="M40.7086 42.2812C40.6435 42.3385 40.5494 42.3753 40.4435 42.3753H39.442C39.3361 42.3753 39.2421 42.3385 39.1769 42.2812H33.5031C33.4379 42.3385 33.3439 42.3753 33.238 42.3753H32.2365C32.1306 42.3753 32.0366 42.3385 31.9714 42.2812H26.2975C26.2323 42.3385 26.1383 42.3753 26.0324 42.3753H25.031C24.9251 42.3753 24.831 42.3385 24.7659 42.2812H19.092C19.0269 42.3385 18.9329 42.3753 18.8269 42.3753H17.8256C17.7196 42.3753 17.6256 42.3385 17.5605 42.2812H11.8865C11.8214 42.3385 11.7274 42.3753 11.6214 42.3753H10.6201C10.5141 42.3753 10.42 42.3385 10.355 42.2812H4.68093C4.61579 42.3385 4.52177 42.3753 4.41581 42.3753H3.41438C3.30842 42.3753 3.21441 42.3385 3.14927 42.2812H0V44H44V42.2812H40.7086Z" fill="#5861C7"/>
                  <path d="M40.0138 30.9398H4.11087C3.53002 30.9398 3.05908 30.4689 3.05908 29.888V8.85568C3.05908 8.27483 3.53002 7.80389 4.11087 7.80389H40.0138C40.5946 7.80389 41.0655 8.27483 41.0655 8.85568V29.888C41.0655 30.4689 40.5946 30.9398 40.0138 30.9398Z" fill="#FFEFE4"/>
                  <path d="M28.2438 18.1916L18.6959 12.6791C17.7874 12.1546 16.6516 12.8103 16.6516 13.8594V24.8844C16.6516 25.9335 17.7874 26.5892 18.6959 26.0647L28.2438 20.5522C29.1524 20.0276 29.1524 18.7162 28.2438 18.1916Z" fill="#FF8354"/>
                  <path d="M40.0527 35.7766H9.22819C8.66882 35.7766 8.21533 35.3231 8.21533 34.7638C8.21533 34.2044 8.66882 33.7509 9.22819 33.7509H40.0527C40.6121 33.7509 41.0655 34.2044 41.0655 34.7638C41.0655 35.3231 40.6121 35.7766 40.0527 35.7766Z" fill="#6770E6"/>
                  <path d="M16.6514 36.6737C17.7063 36.6737 18.5614 35.8186 18.5614 34.7638C18.5614 33.7089 17.7063 32.8538 16.6514 32.8538C15.5966 32.8538 14.7415 33.7089 14.7415 34.7638C14.7415 35.8186 15.5966 36.6737 16.6514 36.6737Z" fill="#FF8354"/>
                  <path d="M3.62859 36.725C3.31406 36.725 3.05908 36.47 3.05908 36.1554V33.3721C3.05908 33.0576 3.31406 32.8026 3.62859 32.8026C3.94312 32.8026 4.1981 33.0576 4.1981 33.3721V36.1554C4.19818 36.47 3.94312 36.725 3.62859 36.725Z" fill="#FFEFE4"/>
                  <path d="M5.56438 36.725C5.24985 36.725 4.99487 36.47 4.99487 36.1554V33.3721C4.99487 33.0576 5.24985 32.8026 5.56438 32.8026C5.87891 32.8026 6.13389 33.0576 6.13389 33.3721V36.1554C6.13397 36.47 5.879 36.725 5.56438 36.725Z" fill="#FFEFE4"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_714_6542">
                  <rect width="44" height="44" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>',
                  'title' => 'Animation Trailer',
                  'content' => 'Animate Your Story: Exceptional Trailer Services to Captivate Audiences!'
               ],
               [
                  'svg' => '<svg width="46" height="34" viewBox="0 0 46 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M38.4 32.7213H3.2C1.95333 32.7213 1 31.8049 1 30.6066V3.11475C1 1.91639 1.95333 1 3.2 1H38.4C39.6467 1 40.6 1.91639 40.6 3.11475V30.6066C40.6 31.8049 39.6467 32.7213 38.4 32.7213Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M38.4 1H3.2C1.95333 1 1 1.91639 1 3.11475V8.04918H40.6V3.11475C40.6 1.91639 39.6467 1 38.4 1Z" fill="#B0BEC5" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3.2 32.7213H38.4C39.6467 32.7213 40.6 31.8049 40.6 30.6066V25.6721H1V30.6066C1 31.8049 1.95333 32.7213 3.2 32.7213Z" fill="#B0BEC5" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2.4668 25.6721V8.04918" stroke="#546E7A" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2.4668 30.6066V25.6721" stroke="#CFD8DC" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3.2 32.7213H38.4C39.6467 32.7213 40.6 31.8049 40.6 30.6066V25.6721H1V30.6066C1 31.8049 1.95333 32.7213 3.2 32.7213Z" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2.4668 8.04919V3.11476" stroke="#CFD8DC" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M38.4 1H3.2C1.95333 1 1 1.91639 1 3.11475V8.04918H40.6V3.11475C40.6 1.91639 39.6467 1 38.4 1Z" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M42.7999 32.7213H7.5999C6.35324 32.7213 5.3999 31.8049 5.3999 30.6066V3.11475C5.3999 1.91639 6.35324 1 7.5999 1H42.7999C44.0466 1 44.9999 1.91639 44.9999 3.11475V30.6066C44.9999 31.8049 44.0466 32.7213 42.7999 32.7213Z" fill="#546E7A" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M41.3333 8.04918H9.06665V25.6721H41.3333V8.04918Z" fill="#26C6DA" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M25.2002 22.5C28.4402 22.5 31.0668 19.9752 31.0668 16.8607C31.0668 13.7461 28.4402 11.2213 25.2002 11.2213C21.9601 11.2213 19.3335 13.7461 19.3335 16.8607C19.3335 19.9752 21.9601 22.5 25.2002 22.5Z" stroke="#0097A7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M30.4066 21.8656C27.5466 24.6148 22.9266 24.6148 20.0666 21.8656C17.2066 19.1164 17.2066 14.6754 20.0666 11.9262C22.9266 9.17705 27.5466 9.17705 30.4066 11.9262C31.8733 13.3361 32.5333 15.0984 32.5333 16.9312" stroke="#0097A7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M25.2 8.04918V12.9836" stroke="#0097A7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M25.2 20.7377V25.6721" stroke="#0097A7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M41.3334 16.8607H29.2334" stroke="#0097A7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M21.1666 16.8607H9.06665" stroke="#0097A7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M23.5867 14.7459H27.2533L24.2467 19.3984" stroke="#0097A7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.8667 25.6721V8.04918" stroke="#78909C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43.5334 25.6721V8.04918" stroke="#455A64" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M42.7999 1H7.5999C6.35324 1 5.3999 1.91639 5.3999 3.11475V8.04918H44.9999V3.11475C44.9999 1.91639 44.0466 1 42.7999 1Z" fill="#CFD8DC" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.8667 8.04919V3.11476" stroke="#ECEFF1" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43.5334 8.04919V3.11476" stroke="#B0BEC5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.6333 6.28689H9.43328C8.99328 6.28689 8.69995 6.00492 8.69995 5.58197V3.46722C8.69995 3.04427 8.99328 2.7623 9.43328 2.7623H11.6333C12.0733 2.7623 12.3666 3.04427 12.3666 3.46722V5.58197C12.3666 6.00492 12.0733 6.28689 11.6333 6.28689Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18.9668 6.28689H16.7668C16.3268 6.28689 16.0334 6.00492 16.0334 5.58197V3.46722C16.0334 3.04427 16.3268 2.7623 16.7668 2.7623H18.9668C19.4068 2.7623 19.7001 3.04427 19.7001 3.46722V5.58197C19.7001 6.00492 19.4068 6.28689 18.9668 6.28689Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M26.3 6.28689H24.1C23.66 6.28689 23.3667 6.00492 23.3667 5.58197V3.46722C23.3667 3.04427 23.66 2.7623 24.1 2.7623H26.3C26.74 2.7623 27.0334 3.04427 27.0334 3.46722V5.58197C27.0334 6.00492 26.74 6.28689 26.3 6.28689Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M33.6333 6.28689H31.4333C30.9933 6.28689 30.7 6.00492 30.7 5.58197V3.46722C30.7 3.04427 30.9933 2.7623 31.4333 2.7623H33.6333C34.0733 2.7623 34.3666 3.04427 34.3666 3.46722V5.58197C34.3666 6.00492 34.0733 6.28689 33.6333 6.28689Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M40.9668 6.28689H38.7668C38.3268 6.28689 38.0334 6.00492 38.0334 5.58197V3.46722C38.0334 3.04427 38.3268 2.7623 38.7668 2.7623H40.9668C41.4068 2.7623 41.7001 3.04427 41.7001 3.46722V5.58197C41.7001 6.00492 41.4068 6.28689 40.9668 6.28689Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M7.5999 32.7213H42.7999C44.0466 32.7213 44.9999 31.8049 44.9999 30.6066V25.6721H5.3999V30.6066C5.3999 31.8049 6.35324 32.7213 7.5999 32.7213Z" fill="#CFD8DC" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M38.7668 27.4344H40.9668C41.4068 27.4344 41.7001 27.7164 41.7001 28.1393V30.2541C41.7001 30.677 41.4068 30.959 40.9668 30.959H38.7668C38.3268 30.959 38.0334 30.677 38.0334 30.2541V28.1393C38.0334 27.7164 38.3268 27.4344 38.7668 27.4344Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M31.4333 27.4344H33.6333C34.0733 27.4344 34.3666 27.7164 34.3666 28.1393V30.2541C34.3666 30.677 34.0733 30.959 33.6333 30.959H31.4333C30.9933 30.959 30.7 30.677 30.7 30.2541V28.1393C30.7 27.7164 30.9933 27.4344 31.4333 27.4344Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M24.1 27.4344H26.3C26.74 27.4344 27.0334 27.7164 27.0334 28.1393V30.2541C27.0334 30.677 26.74 30.959 26.3 30.959H24.1C23.66 30.959 23.3667 30.677 23.3667 30.2541V28.1393C23.3667 27.7164 23.66 27.4344 24.1 27.4344Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M16.7668 27.4344H18.9668C19.4068 27.4344 19.7001 27.7164 19.7001 28.1393V30.2541C19.7001 30.677 19.4068 30.959 18.9668 30.959H16.7668C16.3268 30.959 16.0334 30.677 16.0334 30.2541V28.1393C16.0334 27.7164 16.3268 27.4344 16.7668 27.4344Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.43328 27.4344H11.6333C12.0733 27.4344 12.3666 27.7164 12.3666 28.1393V30.2541C12.3666 30.677 12.0733 30.959 11.6333 30.959H9.43328C8.99328 30.959 8.69995 30.677 8.69995 30.2541V28.1393C8.69995 27.7164 8.99328 27.4344 9.43328 27.4344Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M41.3333 8.04918H9.06665V25.6721H41.3333V8.04918Z" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M42.7999 1H7.5999C6.35324 1 5.3999 1.91639 5.3999 3.11475V8.04918H44.9999V3.11475C44.9999 1.91639 44.0466 1 42.7999 1Z" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43.5334 30.6066V25.6721" stroke="#B0BEC5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.8667 30.6066V25.6721" stroke="#ECEFF1" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M7.5999 32.7213H42.7999C44.0466 32.7213 44.9999 31.8049 44.9999 30.6066V25.6721H5.3999V30.6066C5.3999 31.8049 6.35324 32.7213 7.5999 32.7213Z" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>',
                  'title' => 'Cinematic Trailer',
                  'content' => 'Bringing Your Vision to Life: Cinematic Trailers that Captivate and Inspire.'
               ],
               [
                  'svg' => '<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.8132 37.859H17.8787L15.4263 19.8262H28.4099L25.8132 37.859Z" fill="#F57F17" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M27.1837 23.577L21.9181 21.2689L16.6526 23.577C15.2099 24.2262 13.623 23.1443 13.623 21.5574V16.941C13.623 14.5607 15.5706 12.6131 17.9509 12.6131H25.8853C28.2657 12.6131 30.2132 14.5607 30.2132 16.941V21.5574C30.1411 23.1443 28.5542 24.1541 27.1837 23.577Z" fill="#F57F17" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M28.4099 40.0229H15.4263C15.4263 38.7967 16.364 37.859 17.5902 37.859H28.4099V40.0229Z" fill="#F57F17" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M29.8524 44.3508H13.9835C12.7573 44.3508 11.8196 43.4131 11.8196 42.1869C11.8196 40.9607 12.7573 40.0229 13.9835 40.0229H29.8524C31.0786 40.0229 32.0163 40.9607 32.0163 42.1869C32.0163 43.4131 31.0065 44.3508 29.8524 44.3508Z" fill="#455A64" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M28.6984 37.859H20.764L18.3115 19.8262H31.2951L28.6984 37.859Z" fill="#FFA726" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M22.0623 36.4164L19.9705 21.2689" stroke="#FFCC80" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M29.636 21.2689L27.5442 36.4164" stroke="#F57F17" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M23.3606 12.6131C26.5475 12.6131 29.1311 10.0296 29.1311 6.84262C29.1311 3.65567 26.5475 1.07213 23.3606 1.07213C20.1736 1.07213 17.5901 3.65567 17.5901 6.84262C17.5901 10.0296 20.1736 12.6131 23.3606 12.6131Z" fill="#FFA726" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M19.0327 6.84262C19.0327 4.4623 20.9803 2.51476 23.3606 2.51476" stroke="#FFCC80" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M30.069 23.577L24.8034 21.2689L19.5378 23.577C18.0952 24.2262 16.5083 23.1443 16.5083 21.5574V16.941C16.5083 14.5607 18.4558 12.6131 20.8362 12.6131H28.7706C31.1509 12.6131 33.0985 14.5607 33.0985 16.941V21.5574C33.0263 23.1443 31.4394 24.1541 30.069 23.577Z" fill="#FFA726" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.8787 21.5574V16.941C17.8787 15.3541 19.177 14.0557 20.7639 14.0557" stroke="#FFCC80" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M28.6982 14.0557C30.2851 14.0557 31.5835 15.3541 31.5835 16.941V21.5574" stroke="#F57F17" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M31.2951 40.0229H18.3115C18.3115 38.7967 19.2492 37.859 20.4755 37.859H29.1312C30.2853 37.859 31.2951 38.7967 31.2951 40.0229Z" fill="#FFA726" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M32.7376 44.3508H16.8688C15.6425 44.3508 14.7048 43.4131 14.7048 42.1869C14.7048 40.9607 15.6425 40.0229 16.8688 40.0229H32.7376C33.9639 40.0229 34.9016 40.9607 34.9016 42.1869C34.9016 43.4131 33.8917 44.3508 32.7376 44.3508Z" fill="#546E7A" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M40.8163 5.68852C40.0228 5.47213 39.4458 4.89508 39.2294 4.10164L38.436 1L37.6425 4.10164C37.4261 4.89508 36.8491 5.47213 36.0556 5.68852L33.0261 6.48197L36.1278 7.27541C36.9212 7.4918 37.4983 8.06885 37.7146 8.8623L38.5081 11.9639L39.3015 8.8623C39.5179 8.06885 40.095 7.4918 40.8884 7.27541L43.8458 6.48197L40.8163 5.68852Z" fill="#CFD8DC" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M8.71803 31.6557C7.92459 31.4393 7.34754 30.8623 7.13115 30.0688L6.3377 26.9672L5.54426 30.0688C5.32787 30.8623 4.75082 31.4393 3.95738 31.6557L1 32.4492L4.02951 33.2426C4.82295 33.459 5.4 34.0361 5.61639 34.8295L6.40984 37.9311L7.20328 34.8295C7.41967 34.0361 7.99672 33.459 8.79016 33.2426L11.8918 32.4492L8.71803 31.6557Z" fill="#CFD8DC" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M24.8032 21.2689V37.859" stroke="#424242" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>',
                  'title' => 'Film Pitch Pro',
                  'content' => 'Turning movie ideas into pitch-ready scripts, bridging creators with film industry experts.'
               ],
            ];
            $slides = array_map(function($index, $value) {
               return $index + 1;
            }, array_keys($slidesData), $slidesData);
         ?>
         <div x-data="{ slides: @json($slides) }">  
            <div class="relative flex justify-center ">
               <div class="relative w-full ">
                  <div
                     class="bgflex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] 
                     sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] "
                     x-ref="carousel"
                     id="carousel_control">
                     <!-- Carousel Items -->
                     @foreach($slidesData as $i => $row)
                        <div class="mx-auto h-full min-w-[300px] px-4 pb-8 xs:min-w-[360px] sm:min-w-[510px] 
                              md:min-w-[350px] lg:min-w-[465px] xl:min-w-[380px] 2xl:min-w-[440px] services-section" id="services{{ $i }}">
                           <div class="group relative shadow-xl rounded-xl border border-stroke dark:border-dark-3 
                              bg-white dark:bg-dark-2 p-10 md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]">
                              <div class="relative z-10 mx-auto mb-10">
                                 <div class="bg-dark p-2 w-[60px] rounded-lg">
                                    {!! $row['svg'] !!}
                                 </div>
                              </div>
                              <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-bold">
                                 {{ $row['title'] }}
                              </h4>
                              <p class="text-body-color dark:text-dark-6">
                                 {{ $row['content'] }}
                              </p>
                              <span class="bg-dark absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"></span>
                           </div>
                        </div>
                     @endforeach
                  </div>

                  <div class="absolute left-0 top-1/2 transform -translate-y-1/2 flex items-center">
                     <button
                           class="flex lg:h-full lg:w-full items-center justify-center rounded-full dark:bg-white
                           text-body-color dark:text-dark-6 {{-- hover:border-gray hover:bg-gray-300 --}} xs:bg-gray-100 xs:-ml-7 bg-white"
                           :class="{ '-mx-4': isMobile, 'mx-auto': !isMobile}"
                           @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length);"
                           onclick="previousSlide()"
                     >
                           <!-- Left Arrow SVG Placeholder -->
                           <svg xmlns="http://www.w3.org/2000/svg" :width="isMobile ? '50' : '76'" :height="isMobile ? '50' : '76'">
                              <rect width="100%" height="100%" fill="none"/>
                              <image xlink:href="data:image/png;base64,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" x="0" y="0" 
                              :width="isMobile ? '50' : '76'" :height="isMobile ? '50' : '76'"/>
                           </svg>
                     </button>
                  </div>

                  <div class="absolute right-0 top-1/2 transform -translate-y-1/2 flex items-center">
                     <button
                           class="flex lg:h-full lg:w-full items-center justify-center rounded-full dark:bg-white -mx-4
                           text-body-color dark:text-dark-6 {{-- hover:border-gray hover:bg-gray-300 --}} xs:bg-gray-100 xs:-mr-7 bg-white"
                           :class="{ '-mx-4': isMobile, 'mx-auto': !isMobile}"
                           @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length);"
                           onclick="nextSlide()"
                     >
                           <!-- Right Arrow SVG Placeholder -->
                           <svg xmlns="http://www.w3.org/2000/svg" :width="isMobile ? '50' : '76'" :height="isMobile ? '50' : '76'">
                              <rect width="100%" height="100%" fill="none"/>
                              <image xlink:href="data:imagze/png;base64,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"
                                  x="0" y="0" :width="isMobile ? '50' : '76'" :height="isMobile ? '50' : '76'"/>
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
                  Offering seamless adaptation of books to film/TV, strategic business affairs, 
                  dynamic digital media marketing, and advanced technology and development solutions.
               </p>
            </div>
         </div>
      </div>
      <div class="xl:container flex flex-wrap justify-center">
         <?php $serviceCategory = ['Book-To-Film/TV','Business Affairs','Digital Media & Mktg','Tech &  Dev'] ?>
         <?php
            $serviceCategoryData = [
               [
                  "image" => asset('images/business12.png'),
                  "tags" => "Hot",
                  "title" => "Book-To-Film/TV: Screenplay",
                  "services_reference" => "Book-To-Film/TV",
                  "content" => "Book-To-Film/TV: Transform written literature into visual narratives."
               ],
               [
                  "image" => asset('images/business13.png'),
                  "tags" => "New",
                  "title" => "Business Affairs: Consulting Services",
                  "services_reference" => "Business Affairs",
                  "content" => "Business Affairs: Expertise in legal, financial, and administrative support"
               ],       
               [
                  "image" => asset('images/business14.png'),
                  "tags" => "Hot",
                  "title" => "L.A. Times & Frankfurt Book Festival",
                  "services_reference" => "Digital Media and Marketing",
                  "content" => "Digital Media & Marketing: Promote brands and drive business growth."
               ],
               [
                  "image" => asset('images/business15.png'),
                  "tags" => "Hot",
                  "title" => "Strategic Landing Page Business",
                  "services_reference" => "Tech and Dev",
                  "content" => "Tech &  Development: Pioneering digital and technological solutions"
               ]
            ];
         ?> 
         @foreach($serviceCategoryData as $i => $row)
            <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <a href="{{ route('services').'?category='.$row['services_reference'] }}">
                  <div class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-6 px-6 text-center duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent marketing-section opacity-0" id="marketing{{ $i }}">
                     <div class="w-full mb-6 overflow-hidden rounded-md relative">
                        <img
                           src="{{ $row['image'] }}"
                           alt="card image"
                           class="object-cover object-center w-full h-full"
                           />
                        <div class="absolute top-2 left-2 flex h-7 w-11 z-50 max-w-[65px] items-center justify-center rounded-[5px] {{ $row['tags'] == 'Hot' ? 'bg-red' : 'bg-[#5DDAB4]' }} text-white text-[12px]">
                           {{ $row['tags'] }}
                        </div>
                     </div>
                     
                     <h4 class="text-dark mb-[14px] text-lg font-semibold uppercase mt-12 dark:text-white">
                        {{ $row['title'] }}
                     </h4>
                     <p class="text-body-color dark:text-dark-6 text-base">
                        {{ $row['content'] }}
                     </p>
                     <span class="bg-dark dark:bg-white absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"></span>
                  </div>
               </a>   
            </div>
         @endforeach
      </div>
   </div>
</section>
<!-- ====== Services Section End -->

<div class="wave-container-footer xs:-mb-1">
   <div class="waves">
      <div class="wave-footer dark:invert" id="wave1"></div>
      <div class="wave-footer dark:invert" id="wave2"></div>
      <div class="wave-footer dark:invert" id="wave3"></div>
      <div class="wave-footer dark:invert" id="wave4"></div>
   </div>
</div>

<section class="bg-[#011523] dark:bg-dark pt-2 pb-8 media-section" x-data="{ isMobile: window.innerWidth <= 600 }"
   x-init="() => {
      window.addEventListener('resize', () => {
         isMobile = window.innerWidth <= 600;
         console.log(window.innerWidth);
      });
   }">
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
               A Sanctuary of Expertise, where seasoned professionals with years of experience 
               collaborate to create unparalleled excellence.
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
                <div class="px-3 md:px-4  md:w-1/2 lg:w-1/4 opacity-0" id="rightBoxOne"
                     :class="{ 'w-1/2': isMobile, 'w-full': !isMobile}"
                     >
                     <div class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8">
                        <h4 class="flex justify-center mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                            :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }" 
                           >
                           10,892
                           &nbsp;
                           <svg fill="#13C296" :height="isMobile ? 17 : 20" :width="isMobile ? 17 : 20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
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
                        <p class="text-base text-body-color dark:text-dark-6 group-hover:text-white" 
                           :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }">
                           Clients
                        </p>
                     </div>
                </div>
                <div class="w-full px-3 md:px-4 md:w-1/2 lg:w-1/4 opacity-0" id="rightBoxTwo"
                    :class="{ 'w-1/2': isMobile, 'w-full': !isMobile}"
                     >
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4 class="flex justify-center b-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                      :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }" 
                        >
                           1,832
                           &nbsp;
                           <svg fill="#13C296" :height="isMobile ? 17 : 20" :width="isMobile ? 17 : 20"  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
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
                         :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }" 
                         >
                         Team Members
                      </p>
                   </div>
                </div>
                <div class="w-full px-3 md:px-4 md:w-1/2 lg:w-1/4 opacity-0" id="leftBoxOne"
                     :class="{ 'w-1/2': isMobile, 'w-full': !isMobile}"
                     >
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                    
                      >
                      <h4 class="flex justify-center mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                          :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }" 
                           >
                           5,318
                           &nbsp;
                           <svg fill="#13C296" :height="isMobile ? 17 : 20" :width="isMobile ? 17 : 20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
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
                         :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }" 
                         >
                         Partners
                      </p>
                   </div>
                </div>
                <div class="w-full px-3 md:px-4 md:w-1/2 lg:w-1/4 opacity-0" id="leftBoxTwo"
                     :class="{ 'w-1/2': isMobile, 'w-full': !isMobile}"
                     >
                   <div
                      class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-[#1d5b80] md:mb-8"
                      >
                      <h4 class="flex justify-center mb-1 text-2xl leading-tight font-bold text-dark dark:text-white group-hover:text-white sm:text-[28px]"
                      :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }" >
                           319,892
                           &nbsp;
                           <svg fill="#13C296" :height="isMobile ? 17 : 20" :width="isMobile ? 17 : 20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
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
                         :class="{ 'text-1xl': isMobile, 'text-2xl': !isMobile }" 
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
