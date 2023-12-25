@section('css')
<style>
   .background-rgb {
      background: linear-gradient(
      to right, 
      rgba(29,91,128,0.85),
      rgba(50,118,155,0.85),
      rgba(159,202,218,0.85)
      );
   }

   .what-we-do {
      background: linear-gradient(
         to left, 
         rgba(39, 104, 142, 0.3), 
         rgba(38, 58, 150, 0.3), /* medium blue */
         rgba(90, 120, 190, 0.3), /* lighter blue */
         rgba(143, 161, 180, 0.3), /* soft blue transitioning to warm */
         rgba(244, 241, 239, 0.3)  /* sunset orange */
      );
   }
   
   /* .card-bg {
      background-color: rgba(79, 117, 155, 0.85);
   } */

   .flex a svg {
      transition: transform 0.3s ease;
   }

   .flex a:hover svg {
      transform: translateY(-55px);
   }

   .flex a:hover {
      cursor: pointer;
      filter: brightness(1.2);
   }

   .flex:hover #svg-description {
      opacity: 1;
      color: white;
   }

   #svg-description {
      opacity: 0;
      /* transition: opacity 0.5s ease-in-out; */
      margin-top:10px;
   }
   
   .flex a:not(:hover) #svg-description {
      opacity: 0;
   }

   .icon-margin-top {
      padding-top: 2rem;
   }
   @media screen and (min-width: 960px) {
      .icon-margin-top {
         padding-top: 6rem;
      }
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
   class="relative z-10 bg-cover bg-center bg-no-repeat pt-[120px] pb-20 md:pt-[150px]"
   style="background-image: url('{{ asset('/images/hero.png') }}')"
   >
   <div class="absolute top-0 left-0 -z-10 h-full w-full {{-- bg-[#090E34]/[85%] --}} background-rgb"></div>
   <div class="container mx-auto">
      <div class="flex flex-wrap items-center -mx-4">
         <div class="w-full px-4 lg:w-1/2">
            <div class="mb-16 max-w-[500px] lg:mb-0">
               <h1 class="animate-fade-up mb-4 text-3xl font-bold !leading-[1.208] text-white sm:text-4xl lg:text-[42px] xl:text-5xl">
                  Let's Us Build Brands<br>
                  Together, Shall We?
               </h1>
               <ul class="flex flex-wrap items-center gap-3">
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="bg-[#103448] dark:bg-dark-2 border-[#1d5b80] dark:border-dark-2 border rounded-full inline-flex items-center justify-center py-3 px-9 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
                        >
                        Get Started
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>

      <!-- ====== Horizontal Menu Section Start -->
      <header x-data="{navbarOpen: false}" class="icon-margin-top -mb-10 ">
         <div class="mx-auto w-full ">
            <div class="flex justify-between ">
               <div class="flex w-full items-center justify-between ">
                  <div class="flex w-full">
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
                     <div class="hidden md:block w-full ">
                        <nav >
                           <ul class="flex space-x-[25px] justify-center">
                              <?php $delay = 0; ?>
                              @for ($i=0; $i<12; $i++)
                              <li class="fade-right animate-fade-right animate-delay-{{ $delay }}">
                                 <div class="relative">
                                    <a href="javascript:void(0)" class="flex justify-between py-2 text-base font-medium text-white dark:text-dark-6 hover:text-primary lg:mx-4 lg:inline-flex lg:py-6 ">
                                       <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                          <g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/> </g>
                                       </svg>
                                       <p class="absolute" id='svg-description'>icon{{ $i }}</p>
                                    </a>
                                 </div>
                              </li>
                              <?php $delay += 25; ?>
                              @endfor
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

<!-- ====== About Section Start -->
<section class="overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] opacity-0" id="section2">
   <div class="container mx-auto">
      <div class="flex flex-wrap items-center -mx-4">
         <div class="w-full px-4 lg:w-6/12" id="whatWeDoImage">
            <div class="relative mx-auto flex h-[500px] max-w-[440px]">
               <div class="absolute left-0 z-1 mr-14 max-w-[270px] rounded-lg">
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
                  class="absolute right-0 top-20 z-2 ml-14 max-w-[300px] rounded-lg"
                  >
                  <img
                     src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-05/image-02.jpg"
                     alt="about image"
                     class="w-full rounded-lg"
                     />
               </div>
            </div>
         </div>
         <div class="w-full px-4 lg:w-1/2 2xl:w-5/12" id="whatWeDoText">
            <div class="sm:mt-10 lg:mt-0">
               <h2 class="mb-11 text-3xl font-bold leading-tight text-[#1d5b80] dark:text-white sm:text-4xl sm:leading-tight md:text-[40px]/[48px]t">
                  What We Do?
               </h2>
               <p class="text-base text-body-color dark:text-dark-6 mb-9">
                  Proin gravida nibh vel velit auctor aliquet. aks Aenean
                  sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                  ipsum, nec sagittis sem, tidiomic consequat ipsum.
               </p>
               <p class="text-base text-body-color dark:text-dark-6">
                  Proin gravida nibh vel velit auctor aliquet. aks Aenean
               </p>
            </div>
         </div>
      </div>

      <div
         x-data="
         {
            slides: ['1','2','3', '4', '5'],
            activeSlide: 0
         }
         "
         >
         <div class="relative flex justify-center mt-20">
            <div class="relative w-full">
               <div
                  class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px]"
                  x-ref="carousel"
                  x-on:mouseenter="clearInterval" x-on:mouseleave="startInterval"
                  >
                  @for($i = 0; $i < 5; $i++)
                  <div 
                  class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[340px] lg:min-w-[312px] xl:min-w-[282px] 2xl:min-w-[325px] fade-right"
                  id="cards{{ $i }}">
                     <div>
                        <div class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 card-bg py-11 px-6 duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent">
                           <div class="flex mb-3">
                              <div class="pr-3">
                                 <svg class="text-[#1d5b80] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M1 10c1.5 1.5 5.25 3 9 3s7.5-1.5 9-3m-9-1h.01M2 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1ZM14 5V3a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v2h8Z"/>
                                  </svg>
                              </div>
                              <div class="w-5/6">
                                 <h3>
                                    <a href="javascript:void(0)" class="mb-3 text-lg font-bold leading-tight text-[#1d5b80] dark:text-white hover:text-primardark:text-white sm:text-xl sm:leading-tight lg:text-lg lg:leading-tight xl:text-xl xl:leading-tight">
                                       Lorem ipsum
                                    </a>
                                 </h3>
                              </div>
                           </div>
                           <p
                              class="mb-5 text-base font-medium leading-relaxex dark:text-white text-dark"
                              >
                              Lorem ipsum dolor sit amet, vehiculaum ero felis loreum fitiona
                              fringilla goes scelerisque Interdum et.
                           </p>
                           <a
                              href="javascript:void(0)"
                              class="inline-flex items-center px-4 py-2 font-semibold text-white rounded bg-[#1d5b80] hover:bg-opacity-90"
                              >
                              Learn More
                           </a>
                           <span class="bg-[#1d5b80] absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"></span>
                        </div>
                     </div>
                  </div>
                  @endfor
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

      <div class="w-full px-4">
         <input type="text" class="w-full bg-transparent rounded-md border border-[#1d5b80] dark:border-dark-3 pt-[10px] px-5 text-dark-6 outline-none transition focus:border-[#1d5b80] active:border-[#1d5b80] disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
      </div>
   </div>
</section>
<!-- ====== About Section End -->

<!-- ====== CTA Section Start -->
<section class="relative z-0 bg-cover bg-no-repeat py-20 lg:py-[100px] xl:py-[80px] digital-marketer"
   id="digitalMarketer"
   style="background-image: url(https://cdn.tailgrids.com/2.0/image/marketing/images/cta/cta.jpg); height: 25rem;">
   <span class="absolute left-0 top-0 -z-10 h-full w-full background-rgb"></span>
   
   <div class="container">
      <div class="mx-auto max-w-[900px] text-center">
         <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:leading-[1.2] md:text-[48px]">
            Digital Marketing Never Been Better
         </h2>
         <p
            class="text-base text-white opacity-75"
            style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
            >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
            vel dolor pellentesque, varius elit quis, malesuada quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
            vel dolor pellentesque, varius elit quis, the quick brown fox jumps over the lazy dog.
         </p>
      </div>  

      <div class="hidden md:block">
         <div class="-mx-4 mt-10 flex flex-wrap justify-center ">
            @for($i = 0; $i < 3; $i++)
            <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <div class="mx-auto mb-10 w-full max-w-[370px] relative overflow-hidden rounded-l">
                  <div class="relative">
                     <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/team/team-01/image-01.jpg"
                        alt="image"
                        class="w-full"
                     />
                     <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-black to-transparent opacity-70"></div>
                  </div>
                  <div class="absolute top-5 left-0 w-full text-center">
                     <div class="relative mx-5 overflow-hidden rounded-lg  py-5 px-3">
                        <h3 class="text-white dark:text-white text-base font-semibold">
                           Coriss Ambady
                        </h3>
                        <p class="text-dark-6 dark:text-dark-6 text-xs">Web Developer</p>
                        <div>
                           <span class="absolute left-0 bottom-0">
                              <svg
                                 width="61"
                                 height="30"
                                 viewBox="0 0 61 30"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="16"
                                    cy="45"
                                    r="45"
                                    fill="#13C296"
                                    fill-opacity="0.11"
                                    />
                              </svg>
                           </span>
                           <span class="absolute top-0 right-0">
                              <svg
                                 width="20"
                                 height="25"
                                 viewBox="0 0 20 25"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <!-- SVG circles here -->
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endfor
         </div>
      </div>
   
   </div>
</section>

<!-- ====== Team Section End -->
<section class="bg-[#090E34] dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
   <div class="container mx-auto">
      
      <div class="md:hidden sm:block -my-24">
         <div class="-mx-4 mt-16 flex flex-wrap justify-center ">
            @for($i = 0; $i < 3; $i++)
            <div class="w-full px-4 md:w-1/2 xl:w-1/4">
               <div class="mx-auto mb-10 w-full max-w-[370px] relative overflow-hidden rounded-l">
                  <div class="relative">
                     <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/team/team-01/image-01.jpg"
                        alt="image"
                        class="w-full"
                     />
                     <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-black to-transparent opacity-70"></div>
                  </div>
                  <div class="absolute top-5 left-0 w-full text-center">
                     <div class="relative mx-5 overflow-hidden rounded-lg  py-5 px-3">
                        <h3 class="text-white dark:text-white text-base font-semibold">
                           Coriss Ambady
                        </h3>
                        <p class="text-dark-6 dark:text-dark-6 text-xs">Web Developer</p>
                        <div>
                           <span class="absolute left-0 bottom-0">
                              <svg
                                 width="61"
                                 height="30"
                                 viewBox="0 0 61 30"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="16"
                                    cy="45"
                                    r="45"
                                    fill="#13C296"
                                    fill-opacity="0.11"
                                    />
                              </svg>
                           </span>
                           <span class="absolute top-0 right-0">
                              <svg
                                 width="20"
                                 height="25"
                                 viewBox="0 0 20 25"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <!-- SVG circles here -->
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endfor
         </div>
      </div>

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
                        56,825+
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
                        35,574+
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
                        570+
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
                        50%+
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

@endsection

@section('js')
<script>
   document.addEventListener("DOMContentLoaded", function() {
      var elementIds = ["whatWeDoImage", "whatWeDoText", "digitalMarketer", "digitalAxis", "funFacts"];
      var elementCards = [];
      var delayIncrement = 100; // Delay increment in milliseconds

      for (var i = 0; i < 5; i++) {
         elementCards.push("cards" + i); 
      }

      var observer = new IntersectionObserver(function(entries, observer) {
         entries.forEach(function(entry) {
            if (entry.isIntersecting) {
               var delayClass = 'animate-delay-' + (elementCards.indexOf(entry.target.id) * delayIncrement);
               var myElement = document.getElementById('section2');
               myElement.classList.remove('opacity-0');
               if (entry.target.classList.contains('fade-right') || entry.target.classList.contains('fun-facts')) {
                  entry.target.classList.add("animate-fade-right");
               } else if(entry.target.classList.contains('digital-marketer')) {
                  entry.target.classList.add("animate-fade");
               } else if(entry.target.classList.contains('digital-axis')) {
                  entry.target.classList.add("animate-fade");
               }
               else {
                  entry.target.classList.add("animate-fade-up");
               }

               entry.target.classList.add(delayClass);
               observer.unobserve(entry.target);
            } else {
               entry.target.style.opacity = 0;
            }
         });
      }, { threshold: 0.5 });

      elementIds.concat(elementCards).forEach(function(elementId) {
         var element = document.getElementById(elementId);
         if (element) {
            observer.observe(element);
         }
      });

      var carousel = document.querySelector('[x-ref="carousel"]');
var slides = ['1', '2', '3', '4', '5'];
var activeSlide = 0;
var intervalId;

function nextSlide() {
  activeSlide = (activeSlide + 1) % slides.length;
  carousel.scrollLeft = activeSlide * carousel.clientWidth;
}


function startInterval() {
   if (!intervalId) {
      intervalId = setInterval(nextSlide, 5000);
   }
}

function clearInterval() {
   clearInterval(intervalId);
   intervalId = null;
}

  });
</script>
@endsection