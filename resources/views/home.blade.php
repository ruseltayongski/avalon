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
      width: 40%;
      height: 40%;
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
                  <h1 class="mb-12 text-3xl font-bold !leading-[1.208] text-white sm:text-4xl lg:text-[42px] 2xl:text-6xl">
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
                  'svg' => '<svg width="39" height="43" viewBox="0 0 39 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="12" y="15" width="8" height="13" fill="#1A8245"/>
                  <path d="M38.2375 36.2812L32.1281 5.13281C31.9125 4.00781 31.2656 2.95312 30.2594 2.32031C29.2531 1.6875 28.1031 1.40625 26.8813 1.61719L21.9219 2.53125C21.2031 1.05469 19.6219 0 17.8969 0H11.2125H4.52813C2.0125 0.0703125 0 2.03906 0 4.42969V38.1797C0 40.5703 2.0125 42.6094 4.52813 42.6094H11.2125H17.8969C20.3406 42.6094 22.425 40.6406 22.425 38.1797V18L26.3781 38.5312C26.5938 39.6562 27.2406 40.7109 28.2469 41.3437C28.9656 41.8359 29.9 42.1172 30.7625 42.1172C31.05 42.1172 31.3375 42.1172 31.625 42.0469L34.7156 41.4844C37.1594 40.9922 38.7406 38.6719 38.2375 36.2812ZM19.1187 4.42969V12.7266H12.7937V3.23438H17.825C18.5437 3.23438 19.1187 3.72656 19.1187 4.42969ZM9.55937 30.7266H3.23438V13.8516H9.55937V30.7266ZM12.7937 15.8906H19.1187V26.0859H12.7937V15.8906ZM4.52813 3.23438H9.55937V10.7578H3.23438V4.42969C3.23438 3.72656 3.80938 3.23438 4.52813 3.23438ZM3.23438 38.1797V33.8906H9.55937V39.375H4.52813C3.80938 39.4453 3.23438 38.8828 3.23438 38.1797ZM17.8969 39.4453H12.8656V29.25H19.1906V38.1797C19.1187 38.8828 18.5438 39.4453 17.8969 39.4453ZM34.0688 38.3203L31.05 38.8828C30.6906 38.9531 30.4031 38.8828 30.1156 38.6719C29.8281 38.4609 29.6844 38.1797 29.6125 37.8984L23.2156 5.55469L27.5281 4.78125C27.8875 4.71094 28.175 4.78125 28.4625 4.99219C28.75 5.20312 28.8937 5.48437 28.9656 5.76562L35.075 36.9141C35.2188 37.5469 34.7875 38.1797 34.0688 38.3203Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Bookstore Foundation',
                  'content' => 'Supporting and growing independent bookstores.'
               ],
               [
                  'svg' => '<svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_241_6780)">
                  <path d="M28.3547 19.1309C28.0672 18.8672 27.5281 18.8379 27.2047 19.1016C26.8812 19.3359 26.8453 19.7754 27.1687 20.0391C27.5281 20.3613 27.5281 20.918 27.1687 21.2695C26.8812 21.5332 26.8812 21.9434 27.2047 22.207C27.3484 22.3242 27.564 22.3828 27.7437 22.3828C27.9593 22.3828 28.175 22.3242 28.3547 22.1777C29.289 21.2988 29.289 19.9512 28.3547 19.1309Z" fill="#CAD2DB"/>
                  <path d="M30.3671 17.9004C30.0796 17.6367 29.5405 17.6074 29.2171 17.8711C28.8937 18.1055 28.8577 18.5449 29.1812 18.8086C30.3312 19.8047 30.3312 21.4453 29.1812 22.4414C28.8937 22.7051 28.8937 23.1152 29.2171 23.3789C29.3609 23.4961 29.5765 23.5547 29.7562 23.5547C29.9718 23.5547 30.1874 23.4961 30.3671 23.3496C32.0562 21.8555 32.0562 19.3945 30.3671 17.9004Z" fill="#CAD2DB"/>
                  <path d="M32.3796 16.6992C32.0921 16.4355 31.553 16.4062 31.2296 16.6699C30.9061 16.9043 30.8702 17.3437 31.1936 17.6074C33.0983 19.2773 33.0983 22.002 31.1936 23.6719C30.9061 23.9355 30.9061 24.3457 31.2296 24.6094C31.3733 24.7266 31.5889 24.7852 31.7686 24.7852C31.9842 24.7852 32.1999 24.7266 32.3796 24.5801C34.8233 22.3828 34.8233 18.8672 32.3796 16.6992Z" fill="#CAD2DB"/>
                  <path d="M23.8624 14.8535C23.2874 14.5898 22.6046 14.6191 22.0655 14.8828L18.1843 16.8457C18.1483 16.8457 18.1483 16.875 18.1124 16.875H13.5124C12.5421 16.875 11.7515 17.5195 11.7515 18.3105V22.9395C11.7515 23.7305 12.5421 24.375 13.5124 24.375H18.1124C18.1483 24.375 18.1483 24.375 18.1843 24.4043L22.0655 26.3672C22.353 26.5137 22.6765 26.5723 22.9999 26.5723C23.2874 26.5723 23.5749 26.5137 23.8624 26.3965C24.4374 26.1328 24.7608 25.6641 24.7608 25.1367V16.084C24.7608 15.5859 24.4015 15.0879 23.8624 14.8535ZM23.1437 25.166C23.1437 25.2246 23.1077 25.2539 23.0718 25.2539C23.0358 25.2832 22.964 25.2832 22.928 25.2539L19.0468 23.2617C18.7593 23.1152 18.4358 23.0566 18.1124 23.0566H13.5124C13.4405 23.0566 13.3687 22.998 13.3687 22.9395V18.3105C13.3687 18.252 13.4405 18.1934 13.5124 18.1934H18.1124C18.4358 18.1934 18.7593 18.1055 19.0468 17.9883L22.928 16.0254C22.964 15.9961 23.0358 15.9961 23.0718 16.0254C23.1077 16.0547 23.1437 16.084 23.1437 16.1133V25.166Z" fill="#CAD2DB"/>
                  </g>
                  <path d="M36.297 43.8047H14.3751C11.0688 43.8047 8.26572 41.3438 7.90635 38.1797C7.90635 38.0391 7.83447 37.9688 7.83447 37.8281V5.55469C7.83447 3.16406 9.7751 1.26562 12.2188 1.26562H33.6376C36.0813 1.26562 38.022 3.16406 38.022 5.55469V30.0234C38.022 32.4141 36.0813 34.3125 33.6376 34.3125H14.3751C13.5126 34.3125 12.6501 34.6641 12.0751 35.2266C11.4282 35.7891 11.1407 36.6328 11.1407 37.4766C11.1407 39.2344 12.5782 40.6406 14.3751 40.6406H36.297C37.1595 40.6406 37.9501 41.3438 37.9501 42.2578C37.9501 43.1719 37.2313 43.8047 36.297 43.8047ZM12.2907 4.42969C11.6438 4.42969 11.1407 4.92188 11.1407 5.55469V31.9922C12.147 31.4297 13.2251 31.1484 14.3751 31.1484H33.7095C34.3563 31.1484 34.8595 30.6563 34.8595 30.0234V5.55469C34.8595 4.92188 34.3563 4.42969 33.7095 4.42969H12.2907Z" fill="#CAD2DB"/>
                  <path d="M28.175 12.375H17.9688C17.1063 12.375 16.3157 11.6719 16.3157 10.7578C16.3157 9.84375 17.0344 9.14062 17.9688 9.14062H28.175C29.0375 9.14062 29.8282 9.84375 29.8282 10.7578C29.8282 11.6719 29.1094 12.375 28.175 12.375Z" fill="#CAD2DB"/>
                  <defs>
                  <clipPath id="clip0_241_6780">
                  <rect width="23" height="18.75" fill="white" transform="translate(11.5 11.25)"/>
                  </clipPath>
                  </defs>
                  </svg>',
                  'title' => 'Audiobook',
                  'content' => 'Your written book into high-quality and engaging audio.'
               ],
               [
                  'svg' => '<svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M43.1249 5.13281C42.2624 5.13281 41.5437 5.83594 41.5437 6.67969V35.2969C41.5437 37.9687 39.3155 40.1484 36.5843 40.1484H8.6249C6.3249 40.1484 4.45615 38.3203 4.45615 36.0703V6.53906C4.45615 5.625 5.1749 4.92187 6.10928 4.92187H32.703C33.6374 4.92187 34.3562 5.625 34.3562 6.53906V33.9609C34.3562 34.8047 35.0749 35.5078 35.9374 35.5078C36.7999 35.5078 37.5187 34.8047 37.5187 33.9609V6.53906C37.5187 3.86719 35.2905 1.75781 32.6312 1.75781H6.0374C3.30615 1.75781 1.1499 3.9375 1.1499 6.53906V36.0703C1.22178 40.0781 4.52803 43.3125 8.6249 43.3125H36.5843C41.1124 43.3125 44.778 39.7266 44.778 35.2969V6.67969C44.778 5.83594 43.9874 5.13281 43.1249 5.13281Z" fill="#CAD2DB"/>
                  <path d="M30.5468 8.08594H9.1999C8.3374 8.08594 7.61865 8.78906 7.61865 9.63281C7.61865 10.4766 8.3374 11.1797 9.1999 11.1797H30.6187C31.4812 11.1797 32.1999 10.4766 32.1999 9.63281C32.1999 8.78906 31.4812 8.08594 30.5468 8.08594Z" fill="#CAD2DB"/>
                  <path d="M9.1999 34.875H30.6187C31.4812 34.875 32.1999 34.1719 32.1999 33.3281C32.1999 32.4844 31.4812 31.7812 30.6187 31.7812H9.1999C8.3374 31.7812 7.61865 32.4844 7.61865 33.3281C7.61865 34.1719 8.26553 34.875 9.1999 34.875Z" fill="#CAD2DB"/>
                  <path d="M10.2062 27.0703H17.4656C19.1187 27.0703 20.4844 25.7344 20.4844 24.1172V17.0859C20.4844 15.4687 19.1187 14.1328 17.4656 14.1328H10.2062C8.55312 14.1328 7.1875 15.4687 7.1875 17.0859V24.1172C7.25937 25.7344 8.55312 27.0703 10.2062 27.0703ZM10.4938 17.2969H17.25V23.9062H10.4938V17.2969Z" fill="#CAD2DB"/>
                  <path d="M25.228 18.4219H30.1155C30.978 18.4219 31.6967 17.7188 31.6967 16.875C31.6967 16.0313 30.978 15.3281 30.1155 15.3281H25.228C24.3655 15.3281 23.6467 16.0313 23.6467 16.875C23.6467 17.7188 24.3655 18.4219 25.228 18.4219Z" fill="#CAD2DB"/>
                  <path d="M25.228 25.5234H30.1155C30.978 25.5234 31.6967 24.8203 31.6967 23.9766C31.6967 23.1328 30.978 22.4297 30.1155 22.4297H25.228C24.3655 22.4297 23.6467 23.1328 23.6467 23.9766C23.6467 24.8203 24.3655 25.5234 25.228 25.5234Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Print Ads',
                  'content' => 'Tailored to engage and captivate your audience.'
               ],
               [
                  'svg' => '<svg width="45" height="51" viewBox="0 0 45 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="31" cy="25.5" rx="10" ry="17.5" fill="#03A9F4"/>
                  <path d="M22.8312 6.21867L36.6093 9.64327L23.0452 20.4143L22.8312 6.21867Z" fill="#03A9F4"/>
                  <path d="M22.8312 32.2187L36.6093 35.6433L23.0452 46.4143L22.8312 32.2187Z" fill="#03A9F4"/>
                  <path d="M43.8047 25.5C43.8047 21.9141 42.8906 18.3281 41.0625 15.0234C38.1797 9.96094 33.3281 6.30469 27.6328 4.82812C25.8047 4.40625 24.1172 4.19531 22.4297 4.19531C21.5859 4.19531 20.8828 4.89844 20.8125 5.74219V25.9219V45.1172C20.8125 45.9609 21.5156 46.6641 22.4297 46.6641C23.2734 46.6641 24.1875 46.5938 25.0312 46.5234C31.3594 45.75 36.9844 42.2344 40.4297 36.8203C42.5391 33.5859 43.6641 29.7891 43.8047 25.8516V25.5ZM36.0703 24.375C35.8594 22.1953 35.3672 20.0859 34.5938 18.1172H39.0937C39.9375 20.1562 40.5 22.2656 40.6406 24.375H36.0703ZM24.0469 42.5156V37.8047H29.1797C27.7031 39.7734 25.9453 41.3203 24.0469 42.5156ZM29.25 14.9531H23.9766V8.69531C25.7344 10.0313 27.4922 12.1406 29.25 14.9531ZM23.9766 34.6406V27.5391H32.9766C32.8359 30 32.2031 32.4609 31.0781 34.6406H23.9766ZM23.9766 24.375V18.1172H31.0781C32.0625 20.0859 32.625 22.1953 32.8359 24.375H23.9766ZM37.2656 14.9531H32.9766C31.3594 12.2109 29.7422 10.0312 28.1953 8.27344C31.8516 9.53906 35.0156 11.8594 37.2656 14.9531ZM29.5312 42.2344C30.7969 40.9688 31.9922 39.4922 32.9766 37.875H35.7891C33.9609 39.7031 31.8516 41.25 29.5312 42.2344ZM38.1094 34.6406H34.5938C35.5078 32.3906 36.0703 30 36.2109 27.5391H40.5703C40.2188 30.0703 39.375 32.5312 38.1094 34.6406Z" fill="#CAD2DB"/>
                  <path d="M9.77344 26.5547C12.7266 26.5547 15.1875 24.1641 15.1875 21.1406C15.1875 18.1172 12.7969 15.7266 9.77344 15.7266C6.75 15.7266 4.35938 18.1172 4.35938 21.1406C4.35938 24.1641 6.75 26.5547 9.77344 26.5547ZM9.77344 18.9609C11.0391 18.9609 12.0234 19.9453 12.0234 21.2109C12.0234 22.4766 10.9688 23.3906 9.77344 23.3906C8.57812 23.3906 7.52344 22.4062 7.52344 21.1406C7.52344 19.875 8.50781 18.9609 9.77344 18.9609Z" fill="#CAD2DB"/>
                  <path d="M9.77334 29.0156C6.67959 29.0156 3.72646 30.2813 1.6874 32.5313C1.1249 33.1641 1.1249 34.1484 1.75771 34.7813C2.39052 35.3438 3.3749 35.3438 4.00771 34.7109C5.48427 33.0938 7.59365 32.1797 9.77334 32.1797C11.953 32.1797 14.0624 33.0938 15.539 34.7109C15.8202 35.0625 16.2421 35.2031 16.7343 35.2031C17.0858 35.2031 17.5077 35.0625 17.789 34.7813C18.4218 34.2188 18.4921 33.1641 17.8593 32.5313C15.8202 30.3516 12.8671 29.0156 9.77334 29.0156Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Internet Services',
                  'content' => 'Access to a global network for information and entertainment.'
               ],
               [
                  'svg' => '<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="4" y="5" width="37" height="7" fill="#03A9F4"/>
                  <path d="M39.375 2.60156H5.625C3.23438 2.60156 1.19531 4.57031 1.19531 7.03125V38.0391C1.19531 40.4297 3.16406 42.4688 5.625 42.4688H39.375C41.7656 42.4688 43.8047 40.5 43.8047 38.0391V6.96094C43.8047 4.57031 41.7656 2.60156 39.375 2.60156ZM5.625 5.76562H39.375C40.0781 5.76562 40.6406 6.32813 40.6406 7.03125V11.3906H4.42969V6.96094C4.42969 6.32812 4.92187 5.76562 5.625 5.76562ZM39.375 39.2344H5.625C4.92187 39.2344 4.35937 38.6719 4.35937 37.9688V14.4844H40.5703V37.9688C40.6406 38.6719 40.0781 39.2344 39.375 39.2344Z" fill="#CAD2DB"/>
                  <path d="M14.7656 32.2734H14.6953V28.7578C14.6953 28.3359 14.5547 27.9844 14.2734 27.7031L13.2187 26.5781L14.2734 25.4531C14.5547 25.1719 14.6953 24.75 14.6953 24.3984V21.3047H14.7656C15.6094 21.3047 16.3828 20.6016 16.3828 19.6875C16.3828 18.7734 15.6797 18.0703 14.7656 18.0703H13.0781C12.2344 18.0703 11.4609 18.7734 11.4609 19.6875V23.7656L9.91406 25.5234C9.35156 26.1562 9.35156 27.0703 9.91406 27.6328L11.4609 29.3906V33.8906C11.4609 34.7344 12.1641 35.5078 13.0781 35.5078H14.7656C15.6094 35.5078 16.3828 34.8047 16.3828 33.8906C16.3828 32.9766 15.6094 32.2734 14.7656 32.2734Z" fill="#CAD2DB"/>
                  <path d="M33.4687 23.7656V19.6875C33.4687 18.8437 32.7656 18.0703 31.8516 18.0703H30.2344C29.3906 18.0703 28.6172 18.7734 28.6172 19.6875C28.6172 20.6016 29.3203 21.3047 30.2344 21.3047H30.3047V24.3984C30.3047 24.8203 30.4453 25.1719 30.7266 25.4531L31.7812 26.5781L30.7266 27.7031C30.4453 27.9844 30.3047 28.4063 30.3047 28.7578V32.2734H30.2344C29.3906 32.2734 28.6172 32.9766 28.6172 33.8906C28.6172 34.8047 29.3203 35.5078 30.2344 35.5078H31.9219C32.7656 35.5078 33.5391 34.8047 33.5391 33.8906V29.3906L35.0859 27.6328C35.6484 27 35.6484 26.0859 35.0859 25.5234L33.4687 23.7656Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Web Services',
                  'content' => 'Create, edit, and manage digital designs and software projects.'
               ],
               [
                  'svg' => '<svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="7" y="29.5453" width="4.94036" height="13.5135" transform="rotate(-18.2271 7 29.5453)" fill="#FCD34D"/>
                  <rect x="24.2485" y="3.7764" width="17.7528" height="28.8721" rx="4" transform="rotate(0.721686 24.2485 3.7764)" fill="#FCD34D"/>
                  <rect x="4" y="9" width="8" height="18" fill="#1A8245"/>
                  <rect x="13" y="8" width="12" height="21" fill="#1A8245"/>
                  <path d="M42.5501 2.8125C41.472 1.75781 40.0345 1.19531 38.5251 1.19531H38.4532C38.022 1.19531 37.5188 1.26562 37.0876 1.33594L12.6501 7.24219H7.83447C4.45635 7.24219 1.7251 9.91406 1.7251 13.2187V23.5547C1.7251 26.2266 3.52197 28.4766 5.96572 29.25L8.98447 41.1328C9.34385 42.6797 10.7813 43.8047 12.4345 43.8047H13.7282H13.8001C14.0876 43.8047 14.3751 43.8047 14.6626 43.7344C16.6032 43.3125 17.7532 41.4141 17.322 39.5156L15.0938 30.1641L37.1595 35.5078C37.5907 35.6484 38.0938 35.6484 38.5251 35.6484C39.6032 35.6484 40.6095 35.3672 41.5438 34.8047C42.8376 34.0312 43.772 32.7656 44.1313 31.2891C44.2032 30.8672 44.2751 30.5156 44.2751 30.0234V6.82031C44.2751 5.27344 43.6282 3.86719 42.5501 2.8125ZM14.447 10.125L23.0001 8.08594V28.8281L14.447 26.7187V10.125ZM4.95947 13.2187C4.95947 11.6719 6.25322 10.4062 7.83447 10.4062H11.2845V26.2969H7.83447C6.25322 26.2969 4.95947 25.0312 4.95947 23.4844V13.2187ZM13.872 40.5703C13.872 40.5703 13.8001 40.5703 13.7282 40.5703H12.3626C12.2188 40.5703 12.0751 40.4297 12.0032 40.2891L9.34385 29.5312H11.572L14.1595 40.2187C14.1595 40.3594 14.0876 40.5703 13.872 40.5703ZM40.9688 30.5156C40.8251 31.1484 40.3938 31.7109 39.8188 32.0625C39.2438 32.4141 38.5251 32.4844 37.8782 32.3437L26.2345 29.5312V7.24219L37.8782 4.42969C38.0938 4.35938 38.2376 4.35937 38.4532 4.35937C39.1001 4.35937 39.747 4.64062 40.1782 5.0625C40.6813 5.48437 40.897 6.11719 40.9688 6.75V29.8828C41.0407 30.1641 40.9688 30.3047 40.9688 30.5156Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Social Media',
                  'content' => 'Boosting brand engagement with targeted content and strategy.'
               ],
               [
                  'svg' => '<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="23.5" cy="25" rx="5.5" ry="8" fill="#1A8245"/>
                  <path d="M38.525 12.9375C34.2843 8.76875 28.6781 6.54062 22.6406 6.68437C10.8531 6.82812 1.2937 16.3875 1.2937 27.9594V36.225C1.2937 37.8781 2.65933 39.3156 4.38433 39.3156H8.84058C10.4937 39.3156 11.9312 37.95 11.9312 36.225V29.9C11.9312 28.2469 10.5656 26.8094 8.84058 26.8094H4.52808C5.10308 17.4656 13.0093 9.91875 22.6406 9.775C27.7437 9.63125 32.6312 11.5719 36.225 15.0937C39.4593 18.2562 41.3281 22.3531 41.4718 26.7375H37.2312C35.5781 26.7375 34.1406 28.1031 34.1406 29.8281V36.1531C34.1406 37.8062 35.5062 39.2437 37.2312 39.2437H41.6875C43.3406 39.2437 44.7781 37.8781 44.7781 36.1531V27.5281C44.7781 22.1375 42.5499 16.8906 38.525 12.9375ZM8.55308 36.0812H4.52808V30.1156H8.62495V36.0812H8.55308ZM41.5437 36.0812H37.4468V30.1156H41.5437V36.0812Z" fill="#CAD2DB"/>
                  <path d="M22.9999 33.4937C26.342 33.4937 29.0913 31.05 29.0913 28.0792V21.6104C29.0913 18.6396 26.342 16.1958 22.9999 16.1958C19.6577 16.1958 16.9084 18.6396 16.9084 21.6104V28.0792C16.9084 31.05 19.6577 33.4937 22.9999 33.4937ZM22.9999 18.3521C24.8866 18.3521 26.3959 19.5979 26.6655 21.2271H26.5038C25.8569 21.2271 25.2639 21.7062 25.2639 22.3292C25.2639 22.9521 25.803 23.4312 26.5038 23.4312H26.7194V24.1979H26.5038C25.8569 24.1979 25.2639 24.6771 25.2639 25.3C25.2639 25.9229 25.803 26.4021 26.5038 26.4021H26.7194V27.1208H26.5038C25.8569 27.1208 25.2639 27.6 25.2639 28.2229C25.2639 28.7979 25.803 29.2771 26.4499 29.2771C25.9647 30.5229 24.5631 31.4333 22.9999 31.4333C21.3827 31.4333 20.035 30.5229 19.5499 29.2771C20.1967 29.2771 20.7358 28.7979 20.7358 28.2229C20.7358 27.6479 20.1967 27.1208 19.4959 27.1208H19.2803V26.4021H19.4959C20.1428 26.4021 20.7358 25.9229 20.7358 25.3C20.7358 24.6771 20.1967 24.1979 19.4959 24.1979H19.2803V23.4312H19.4959C20.1428 23.4312 20.7358 22.9521 20.7358 22.3292C20.7358 21.7062 20.1967 21.2271 19.4959 21.2271H19.3342C19.6038 19.5979 21.1131 18.3521 22.9999 18.3521Z" fill="#CAD2DB"/>
                  <path d="M33.2421 28.3188C33.2421 27.7438 32.7031 27.2167 32.0023 27.2167C31.3015 27.2167 30.7625 27.6958 30.7625 28.3188C30.8164 32.1042 27.3125 35.1708 23 35.1708C18.6875 35.1708 15.1835 32.1042 15.1835 28.2708C15.1835 27.6958 14.6445 27.1688 13.9437 27.1688C13.2429 27.1688 12.7039 27.6479 12.7039 28.2708C12.7039 32.8708 16.639 36.7042 21.7062 37.2313V44.0833C21.7062 44.6583 22.2453 45.1854 22.946 45.1854C23.5929 45.1854 24.1859 44.7063 24.1859 44.0833V37.2792C29.307 36.7521 33.2421 32.9188 33.2421 28.3188Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Podcast',
                  'content' => 'Podcast Marketing: Elevating Your Voice to Reach the Right Ears.'
               ],
               [
                  'svg' => '<svg width="44" height="31" viewBox="0 0 44 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="9.29688" y="4.75793" width="24" height="20" fill="#CAD2DB"/>
                  <path d="M42.6797 4.78125C42.1875 2.88281 40.7109 1.40625 38.8125 0.914063C35.4375 1.67638e-07 21.7969 0 21.7969 0C21.7969 0 8.15625 1.67638e-07 4.78125 0.914063C2.88281 1.40625 1.40625 2.88281 0.914062 4.78125C0 8.22656 0 15.2578 0 15.2578C0 15.2578 0 22.3594 0.914062 25.7344C1.40625 27.6328 2.88281 29.1094 4.78125 29.6016C8.15625 30.5156 21.7969 30.5156 21.7969 30.5156C21.7969 30.5156 35.4375 30.5156 38.8125 29.6016C40.7109 29.1094 42.1875 27.6328 42.6797 25.7344C43.5938 22.3594 43.5938 15.2578 43.5938 15.2578C43.5938 15.2578 43.5938 8.22656 42.6797 4.78125ZM17.4375 21.7969V8.71875L28.7578 15.2578L17.4375 21.7969Z" fill="#FF0F0F"/>
                  </svg>',
                  'title' => 'Youtube Marketing',
                  'content' => 'Boost your brand with YouTube Marketing: targeted videos for audience growth.'
               ],
               [
                  'svg' => '<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24.1875 1.26562C15.539 1.26562 8.43747 8.29688 8.43747 16.9453V19.7578L5.20309 26.1563C4.99216 26.6484 4.99216 27.2109 5.27341 27.7031C5.55466 28.1953 6.04684 28.4766 6.60934 28.4766H8.43747V36.5625C8.43747 37.0547 8.64841 37.4766 8.99997 37.7578C9.35153 38.0391 9.84372 38.1797 10.2656 38.1094L16.9453 36.9844V42.1875C16.9453 42.6797 17.1562 43.1016 17.5078 43.3828C17.789 43.5938 18.1406 43.7344 18.5625 43.7344C18.6328 43.7344 18.7031 43.7344 18.8437 43.7344L32.9765 41.3438C33.75 41.2031 34.3125 40.5703 34.3125 39.7969V32.2734C34.3125 30.4453 35.0156 28.5469 36.3515 26.9297C38.6718 24.1172 39.9375 20.6016 39.9375 16.9453C39.9375 8.29688 32.8359 1.26562 24.1875 1.26562ZM33.8906 24.9609C32.0625 27.1406 31.0781 29.7422 31.0781 32.2734V38.4609L20.1093 40.2891V36.7734C20.1093 35.8594 19.6875 35.0859 19.0547 34.5234C18.4922 34.0313 17.8593 33.8203 17.0859 33.8203C16.9453 33.8203 16.7343 33.8203 16.5937 33.8906L11.6015 34.7344V28.3359C11.6015 26.8594 10.5468 25.6641 9.21091 25.3828L11.3203 21.1641C11.5312 20.7422 11.6718 20.3203 11.6718 19.8281V17.0156C11.6718 10.0547 17.2968 4.42969 24.2578 4.42969C31.2187 4.42969 36.8437 10.0547 36.8437 17.0156C36.7734 19.8984 35.7187 22.7109 33.8906 24.9609Z" fill="#CAD2DB"/>
                  <path d="M21.375 18.7031H26.3672C27.2109 18.7031 27.9141 18 27.9141 17.1562C27.9141 16.3125 27.2109 15.6094 26.3672 15.6094H24.8203V14.9063C24.8203 14.0625 24.1172 13.3594 23.2734 13.3594C22.4297 13.3594 21.7266 14.0625 21.7266 14.9063V15.6094H21.375C18.9844 15.6094 17.0859 17.5078 17.0859 19.8984C17.0859 22.2891 18.9844 24.1875 21.375 24.1875H23.6953C24.3281 24.1875 24.8203 24.6797 24.8203 25.3125C24.8203 25.9453 24.3281 26.4375 23.6953 26.4375H18.7031C17.8594 26.4375 17.1563 27.1406 17.1563 27.9844C17.1563 28.8281 17.8594 29.5313 18.7031 29.5313H21.7266V30.2344C21.7266 31.0781 22.4297 31.7813 23.2734 31.7813C24.1172 31.7813 24.8203 31.0781 24.8203 30.2344V29.3203C26.5781 28.8281 27.9141 27.1406 27.9141 25.2422C27.9141 22.9219 26.0156 20.9531 23.625 20.9531H21.3047C20.6719 20.9531 20.1797 20.4609 20.1797 19.8281C20.1797 19.1953 20.7422 18.7031 21.375 18.7031Z" fill="#1A8245"/>
                  </svg>',
                  'title' => 'Literary Agent Circle',
                  'content' => 'Expert assistance in manuscript dev., negotiations, and growth.'
               ],
               [
                  'svg' => '<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.5 0.328125C34.1953 0.328125 31.5234 2.88281 31.5234 6C31.5234 8.36719 34.7109 12.0938 36.6094 14.1094C36.8438 14.3672 37.1719 14.5078 37.5 14.5078C37.8516 14.5078 38.1562 14.3672 38.3906 14.1094C40.2891 12.0938 43.4766 8.36719 43.4766 6C43.4766 2.88281 40.8047 0.328125 37.5 0.328125ZM37.6172 13.3828C37.5703 13.4297 37.5234 13.4531 37.5 13.4531C37.4766 13.4531 37.4062 13.4531 37.3828 13.3828C35.0625 10.9219 32.5781 7.6875 32.5781 6C32.5781 3.46875 34.7812 1.40625 37.5 1.40625C40.2188 1.40625 42.4219 3.46875 42.4219 6C42.4219 7.6875 39.9375 10.9219 37.6172 13.3828Z" fill="#1A8245"/>
                  <path d="M38.1094 5.85938H36.9141C36.7266 5.85938 36.5625 5.69531 36.5625 5.50781C36.5625 5.32031 36.7266 5.15625 36.9141 5.15625H38.8359C39.1172 5.15625 39.3516 4.92187 39.3516 4.64062C39.3516 4.35937 39.1172 4.125 38.8359 4.125H38.0625V3.98437C38.0625 3.70312 37.8281 3.46875 37.5469 3.46875C37.2656 3.46875 37.0312 3.70312 37.0312 3.98437V4.10156H36.9609C36.1875 4.10156 35.5547 4.73438 35.5547 5.50781C35.5547 6.28125 36.1875 6.91406 36.9609 6.91406H38.1562C38.3438 6.91406 38.5078 7.07813 38.5078 7.26563C38.5078 7.45313 38.3438 7.61719 38.1562 7.61719H36.2344C35.9531 7.61719 35.7187 7.85156 35.7187 8.13281C35.7187 8.41406 35.9531 8.64844 36.2344 8.64844H37.0078V8.76563C37.0078 9.04688 37.2422 9.28125 37.5234 9.28125C37.8047 9.28125 38.0391 9.04688 38.0391 8.76563V8.64844H38.1094C38.8828 8.64844 39.5156 8.01562 39.5156 7.24219C39.5156 6.46875 38.8828 5.85938 38.1094 5.85938Z" fill="#1A8245"/>
                  <path d="M36.9141 18.8438H31.9922V11.3906C31.9922 10.2656 31.5 9.14062 30.5859 8.36719C29.7422 7.59375 28.5469 7.24219 27.4219 7.38281L24.8906 7.73438V5.27344C24.8906 3.02344 23.0625 1.26562 20.8828 1.26562H13.4297C11.1797 1.26562 9.42187 3.09375 9.42187 5.27344V9.84375L7.59375 10.0547C5.625 10.3359 4.07812 12.0234 4.07812 14.0625V39.7969C4.07812 42.0469 5.90625 43.8047 8.08594 43.8047H36.8438C39.0938 43.8047 40.8516 41.9766 40.8516 39.7969V22.9219C40.9219 20.6719 39.0937 18.8438 36.9141 18.8438ZM12.5156 5.27344C12.5156 4.78125 12.8672 4.42969 13.3594 4.42969H20.8125C21.3047 4.42969 21.6562 4.78125 21.6562 5.27344V8.15625L12.4453 9.35156V5.27344H12.5156ZM8.08594 40.6406C7.59375 40.6406 7.24219 40.2891 7.24219 39.7969V14.0625C7.24219 13.6406 7.59375 13.2891 8.01562 13.2188L27.8437 10.5469C27.9141 10.5469 27.9141 10.5469 27.9844 10.5469C28.2656 10.5469 28.4766 10.6875 28.5469 10.7578C28.6875 10.8281 28.8281 11.0391 28.8281 11.3906V39.7266C28.8281 40.2188 28.4766 40.5703 27.9844 40.5703H8.08594V40.6406ZM37.7578 39.7266C37.7578 40.2188 37.4062 40.5703 36.9141 40.5703H31.8516C31.9219 40.2891 31.9219 40.0078 31.9219 39.7266V22.0078H36.8438C37.3359 22.0078 37.6875 22.3594 37.6875 22.8516V39.7266H37.7578Z" fill="#CAD2DB"/>
                  <path d="M14.8359 16.2422H13.0078C12.5859 16.2422 12.3047 16.5234 12.3047 16.9453V18.7734C12.3047 19.1953 12.5859 19.4766 13.0078 19.4766H14.8359C15.2578 19.4766 15.5391 19.1953 15.5391 18.7734V16.9453C15.5391 16.5234 15.2578 16.2422 14.8359 16.2422Z" fill="#CAD2DB"/>
                  <path d="M22.9922 16.2422H21.1641C20.7422 16.2422 20.4609 16.5234 20.4609 16.9453V18.7734C20.4609 19.1953 20.7422 19.4766 21.1641 19.4766H22.9922C23.4141 19.4766 23.6953 19.1953 23.6953 18.7734V16.9453C23.6953 16.5234 23.4141 16.2422 22.9922 16.2422Z" fill="#CAD2DB"/>
                  <path d="M14.8359 24.3984H13.0078C12.5859 24.3984 12.3047 24.6797 12.3047 25.1016V26.9297C12.3047 27.3516 12.5859 27.6328 13.0078 27.6328H14.8359C15.2578 27.6328 15.5391 27.3516 15.5391 26.9297V25.1016C15.5391 24.6797 15.2578 24.3984 14.8359 24.3984Z" fill="#CAD2DB"/>
                  <path d="M22.9922 24.3984H21.1641C20.7422 24.3984 20.4609 24.6797 20.4609 25.1016V26.9297C20.4609 27.3516 20.7422 27.6328 21.1641 27.6328H22.9922C23.4141 27.6328 23.6953 27.3516 23.6953 26.9297V25.1016C23.6953 24.6797 23.4141 24.3984 22.9922 24.3984Z" fill="#CAD2DB"/>
                  <path d="M14.8359 32.5547H13.0078C12.5859 32.5547 12.3047 32.8359 12.3047 33.2578V35.0859C12.3047 35.5078 12.5859 35.7891 13.0078 35.7891H14.8359C15.2578 35.7891 15.5391 35.5078 15.5391 35.0859V33.2578C15.5391 32.8359 15.2578 32.5547 14.8359 32.5547Z" fill="#CAD2DB"/>
                  <path d="M22.9922 32.5547H21.1641C20.7422 32.5547 20.4609 32.8359 20.4609 33.2578V35.0859C20.4609 35.5078 20.7422 35.7891 21.1641 35.7891H22.9922C23.4141 35.7891 23.6953 35.5078 23.6953 35.0859V33.2578C23.6953 32.8359 23.4141 32.5547 22.9922 32.5547Z" fill="#CAD2DB"/>
                  <path d="M35.7891 23.9766H33.9609C33.5391 23.9766 33.2578 24.2578 33.2578 24.6797V26.5078C33.2578 26.9297 33.5391 27.2109 33.9609 27.2109H35.7891C36.2109 27.2109 36.4922 26.9297 36.4922 26.5078V24.6797C36.4922 24.2578 36.1406 23.9766 35.7891 23.9766Z" fill="#CAD2DB"/>
                  <path d="M35.7891 32.0625H33.9609C33.5391 32.0625 33.2578 32.3437 33.2578 32.7656V34.5938C33.2578 35.0156 33.5391 35.2969 33.9609 35.2969H35.7891C36.2109 35.2969 36.4922 35.0156 36.4922 34.5938V32.7656C36.4922 32.4141 36.1406 32.0625 35.7891 32.0625Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Trad Pub Pitch',
                  'content' => 'Connecting your stories to leading publishers with expert precision and care.'
               ],
               [
                  'svg' => '<svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="4" y="4" width="8" height="37" fill="#FF0F0F"/>
                  <rect x="34" y="4" width="8" height="37" fill="#FF0F0F"/>
                  <path d="M38.8125 1.26562H7.18755C3.95317 1.26562 1.22192 3.86719 1.22192 7.10156V38.0391C1.22192 41.2031 3.8813 43.875 7.18755 43.875H38.8125C42.0469 43.875 44.7782 41.2734 44.7782 38.0391V7.03125C44.7782 3.86719 42.0469 1.26562 38.8125 1.26562ZM11.1407 20.9531H4.52817V14.0625H11.2125V20.9531H11.1407ZM4.52817 24.1172H11.2125V30.9375H4.52817V24.1172ZM14.375 4.42969H31.625V40.6406H14.375V4.42969ZM41.5438 20.9531H34.8594V14.0625H41.5438V20.9531ZM34.8594 24.1172H41.5438V30.9375H34.8594V24.1172ZM41.5438 7.03125V10.8984H34.8594V4.42969H38.8125C40.3219 4.42969 41.5438 5.55469 41.5438 7.03125ZM7.18755 4.42969H11.1407V10.9688H4.52817V7.03125C4.52817 5.55469 5.67817 4.42969 7.18755 4.42969ZM4.52817 37.9688V34.1016H11.2125V40.6406H7.18755C5.67817 40.6406 4.52817 39.4453 4.52817 37.9688ZM38.8125 40.6406H34.8594V34.1016H41.5438V37.9688C41.5438 39.4453 40.3219 40.6406 38.8125 40.6406Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Animation Trailer',
                  'content' => 'Animate Your Story: Exceptional Trailer Services to Captivate Audiences!'
               ],
               [
                  'svg' => '<svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.0766 22.4993L21.1448 26.4996L21.0101 18.7065L27.0766 22.4993Z" fill="#FF0F0F"/>
                  <path d="M38.8125 1.26562H7.18755C3.95317 1.26562 1.22192 3.86719 1.22192 7.10156V38.0391C1.22192 41.2031 3.8813 43.875 7.18755 43.875H38.8125C42.0469 43.875 44.7782 41.2734 44.7782 38.0391V7.03125C44.7782 3.86719 42.0469 1.26562 38.8125 1.26562ZM11.1407 20.9531H4.52817V14.0625H11.2125V20.9531H11.1407ZM4.52817 24.1172H11.2125V30.9375H4.52817V24.1172ZM14.375 4.42969H31.625V40.6406H14.375V4.42969ZM41.5438 20.9531H34.8594V14.0625H41.5438V20.9531ZM34.8594 24.1172H41.5438V30.9375H34.8594V24.1172ZM41.5438 7.03125V10.8984H34.8594V4.42969H38.8125C40.3219 4.42969 41.5438 5.55469 41.5438 7.03125ZM7.18755 4.42969H11.1407V10.9688H4.52817V7.03125C4.52817 5.55469 5.67817 4.42969 7.18755 4.42969ZM4.52817 37.9688V34.1016H11.2125V40.6406H7.18755C5.67817 40.6406 4.52817 39.4453 4.52817 37.9688ZM38.8125 40.6406H34.8594V34.1016H41.5438V37.9688C41.5438 39.4453 40.3219 40.6406 38.8125 40.6406Z" fill="#CAD2DB"/>
                  <path d="M28.6063 20.3203L21.9938 16.3828C21.2032 15.8906 20.1969 15.8906 19.4063 16.3125C18.6157 16.7344 18.1125 17.5781 18.1125 18.4922V26.2969C18.1125 27.2109 18.6157 28.0547 19.4063 28.4766C19.7657 28.6875 20.2688 28.8281 20.7 28.8281C21.2032 28.8281 21.6344 28.6875 22.0657 28.4766L28.6782 24.5391C29.4688 24.0469 29.9 23.2734 29.9 22.3594C29.9 21.4453 29.3969 20.8125 28.6063 20.3203ZM21.3469 25.3125V19.6875L26.0907 22.5L21.3469 25.3125Z" fill="#CAD2DB"/>
                  </svg>',
                  'title' => 'Cinematic Trailer',
                  'content' => 'Bringing Your Vision to Life: Cinematic Trailers that Captivate and Inspire.'
               ],
               [
                  'svg' => '<svg width="43" height="44" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2.73438" y="2.77814" width="27" height="17" fill="#CAD2DB"/>
                  <rect x="29" y="6" width="13" height="10" fill="#CAD2DB"/>
                  <path d="M41.4141 3.7375C40.7109 3.23437 39.8672 3.1625 39.0938 3.45L32.625 5.82188V4.52813C32.625 2.08438 30.6563 0 28.1953 0H4.35938C1.96875 0.071875 0 2.08438 0 4.52813V17.4656C0 19.9094 1.96875 21.9937 4.42969 21.9937H13.5L2.67188 41.1125C2.25 41.9031 2.53125 42.8375 3.23438 43.3406C3.51563 43.4844 3.72656 43.5562 4.00781 43.5562C4.57031 43.5562 5.0625 43.2687 5.41406 42.7656L15.75 24.3656L26.0859 42.7656C26.3672 43.2687 26.9297 43.5562 27.4922 43.5562C27.7734 43.5562 28.0547 43.4844 28.2656 43.3406C29.0391 42.9094 29.25 41.9031 28.8281 41.1125L18.0703 21.9219H28.2656C30.6562 21.9219 32.6953 19.9094 32.6953 17.3937V16.1L39.1641 18.4719C39.4453 18.5437 39.7266 18.6156 40.0078 18.6156C40.5 18.6156 41.0625 18.4719 41.4844 18.1125C42.1875 17.6094 42.5391 16.8188 42.5391 16.0281V5.89375C42.5391 5.03125 42.1172 4.24062 41.4141 3.7375ZM28.2656 18.6875H4.35938C3.65625 18.6875 3.09375 18.1125 3.09375 17.3937V4.52813C3.16406 3.80938 3.65625 3.30625 4.35938 3.30625H28.2656C28.9688 3.30625 29.5312 3.88125 29.5312 4.6V17.5375C29.5312 18.1844 28.9688 18.6875 28.2656 18.6875ZM39.375 15.1656L32.6953 12.7219V9.27188L39.375 6.82812V15.1656Z" fill="#FF0F0F"/>
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
                  "image" => asset('images/business1.jpg'),
                  "tags" => "Hot",
                  "title" => "Book-To-Film/TV",
                  "content" => "Transform written literature into visual narratives."
               ],
               [
                  "image" => asset('images/business2.jpg'),
                  "tags" => "New",
                  "title" => "Business Affairs",
                  "content" => "Expertise in legal, financial, and administrative support"
               ],       
               [
                  "image" => asset('images/business3.webp'),
                  "tags" => "Hot",
                  "title" => "Digital Media & Mktg",
                  "content" => "Tech to promote brands and drive business growth."
               ],
               [
                  "image" => asset('images/business4.webp'),
                  "tags" => "New",
                  "title" => "Tech &  Dev",
                  "content" => "Pioneering digital and technological solutions"
               ]
            ];
         ?> 
         @foreach($serviceCategoryData as $i => $row)
            <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <a href="{{ route('services').'?category='.$row['title'] }}">
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
