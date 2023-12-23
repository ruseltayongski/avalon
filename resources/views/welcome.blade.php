@section('css')
<style>
   .background-rgb {
      background: linear-gradient(to right, rgba(10, 31, 68, 0.85), rgba(79, 117, 155, 0.85), rgba(192, 214, 228, 0.85));
   }

   .what-we-do {
      background: linear-gradient(to left, rgba(10, 31, 68, 0.85), rgba(79, 117, 155, 0.85), rgba(229, 240, 247, 0.85));

   }

   .card-bg {
      background-color: rgba(79, 117, 155, 0.85);
   }

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
                  <ul class="block lg:flex justify-end" >
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
                        href="{{ route('service') }}"
                        class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex lg:text-white"
                        >
                        Services
                        </a>
                     </li>
                     <li class="lg:ml-6">
                        <a href="javascript:void(0)" class="lg:border-white lg:dark:border-white lg:border rounded-full inline-flex items-center 
                              justify-center py-3 lg:px-7 text-center text-base font-medium lg:text-white 
                               dark:text-white hover:bg-gray-4 dark:hover:bg-dark-3 disabled:bg-gray-3
                                disabled:border-gray-3 disabled:text-dark-5">
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
   class="relative z-10 bg-cover bg-center bg-no-repeat pt-[120px] pb-20 md:pt-[150px]"
   style="background-image: url('{{ asset('/images/hero.png') }}')"
   >
   <div class="absolute top-0 left-0 -z-10 h-full w-full {{-- bg-[#090E34]/[85%] --}} background-rgb"></div>
   <div class="container mx-auto">
      <div class="flex flex-wrap items-center -mx-4">
         <div class="w-full px-4 lg:w-1/2">
            <div class="mb-16 max-w-[500px] lg:mb-0">
               <span
                  class="block mb-5 text-base font-semibold text-white sm:text-lg md:text-xl"
                  >
               Digital Marketing
               </span>
               <h1
                  class="mb-4 text-3xl font-bold !leading-[1.208] text-white sm:text-4xl lg:text-[42px] xl:text-5xl"
                  >
                  Grow your website traffic with TailGrids.
               </h1>
               <p class="text-base text-white mb-9">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                  posuere arcu sit amet ligula feugiat eleifend.
               </p>
               <ul class="flex flex-wrap items-center gap-3">
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white rounded-md bg-primary px-7 hover:bg-blue-dark"
                        >
                     Know More
                     </a>
                  </li>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="inline-flex items-center px-6 py-3 text-base font-medium text-white rounded-md bg-white/5 hover:bg-gray-2 hover:text-body-color"
                        >
                        Explore Services
                        <span class="ml-2">
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
                                 fill=""
                                 />
                           </svg>
                        </span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="w-full px-4 lg:w-1/2">
            <div
               class="mx-auto max-w-[460px] rounded-[10px] bg-white dark:bg-dark-2 py-10 px-6 sm:px-10"
               >
               <h2
                  class="mb-2.5 text-2xl font-bold text-dark !leading-[1.43] dark:text-white sm:text-3xl lg:text-2xl xl:text-[28px]"
                  >
                  Sign up to TailGrids
               </h2>
               <p
                  class="mb-8 text-base font-medium text-body-color dark:text-dark-6"
                  >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
               </p>
               <div class="flex items-center mb-6 space-x-4">
                  <button
                     class="flex h-[50px] w-[50px] items-center justify-center shadow-btn-2 rounded-md bg-transparent border border-stroke dark:border-dark-3 text-sm font-medium text-body-color dark:text-dark-6 sm:w-auto sm:px-7"
                     >
                     <span class="sm:pr-3">
                        <svg
                           width="18"
                           height="18"
                           viewBox="0 0 18 18"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <g clip-path="url(#clip0_1416_409)">
                              <path
                                 d="M18 9.19932C18.0109 8.58059 17.9457 7.96284 17.806 7.35938H9.18372V10.6993H14.2449C14.149 11.2849 13.9333 11.8455 13.6106 12.3473C13.288 12.8491 12.8651 13.2818 12.3674 13.6193L12.3497 13.7311L15.0761 15.8009L15.2649 15.8194C16.9995 14.2493 17.9997 11.9393 17.9997 9.19932"
                                 fill="#4285F4"
                                 />
                              <path
                                 d="M9.18382 18.0003C11.6633 18.0003 13.745 17.2003 15.2655 15.8203L12.3675 13.6202C11.592 14.1503 10.5512 14.5203 9.18382 14.5203C8.02249 14.5137 6.89279 14.1488 5.955 13.4775C5.0172 12.8061 4.31894 11.8624 3.95927 10.7803L3.85164 10.7893L1.01679 12.9392L0.979736 13.0402C1.74323 14.5314 2.91494 15.7851 4.36385 16.661C5.81276 17.537 7.48174 18.0007 9.18417 18.0003"
                                 fill="#34A853"
                                 />
                              <path
                                 d="M3.95921 10.7798C3.75834 10.2069 3.65469 9.60558 3.65239 8.99982C3.65609 8.39505 3.75591 7.79453 3.94828 7.21988L3.94316 7.10057L1.07355 4.91602L0.979681 4.95976C0.335608 6.21294 0.00012207 7.59658 0.00012207 8.99973C0.00012207 10.4029 0.335608 11.7865 0.979681 13.0397L3.95921 10.7798Z"
                                 fill="#FBBC05"
                                 />
                              <path
                                 d="M9.1838 3.47965C10.4997 3.45963 11.7725 3.93991 12.7348 4.81971L15.3267 2.33965C13.6644 0.811346 11.463 -0.0272143 9.1838 -0.000350488C7.48139 -0.000747434 5.81242 0.462942 4.36352 1.33887C2.91461 2.2148 1.74289 3.46843 0.97937 4.95959L3.94902 7.21971C4.31223 6.13773 5.01281 5.19476 5.95199 4.52376C6.89117 3.85275 8.02156 3.48755 9.1838 3.47965Z"
                                 fill="#EB4335"
                                 />
                           </g>
                           <defs>
                              <clipPath id="clip0_1416_409">
                                 <rect width="18" height="18" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                     </span>
                     <span class="hidden sm:inline-flex">
                     Sign up with Google
                     </span>
                  </button>
                  <button
                     class="flex h-[50px] w-[50px] items-center justify-center rounded-md bg-[#03A9F4]"
                     >
                     <svg
                        width="23"
                        height="18"
                        viewBox="0 0 23 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <g clip-path="url(#clip0_1416_400)">
                           <path
                              d="M22.8462 2.13028C21.9868 2.49377 21.0779 2.73537 20.1474 2.84761C21.128 2.28345 21.8611 1.39009 22.2078 0.336823C21.2899 0.86471 20.2857 1.2365 19.2386 1.43611C18.5964 0.77076 17.7626 0.308154 16.8457 0.108441C15.9287 -0.0912717 14.971 -0.0188534 14.0971 0.31628C13.2232 0.651413 12.4734 1.23376 11.9454 1.9876C11.4173 2.74144 11.1353 3.63191 11.1361 4.54322C11.1325 4.89097 11.1689 5.23803 11.2447 5.57795C9.38141 5.48937 7.55838 5.02044 5.89479 4.20183C4.23121 3.38322 2.76452 2.23336 1.59061 0.82742C0.987918 1.82652 0.801149 3.011 1.06842 4.13909C1.3357 5.26719 2.03687 6.25384 3.02882 6.89768C2.28774 6.87826 1.56234 6.68639 0.913726 6.33825V6.38774C0.914945 7.43656 1.28875 8.45295 1.97222 9.26583C2.6557 10.0787 3.6071 10.6384 4.66629 10.8508C4.26559 10.9532 3.85262 11.0035 3.43824 11.0004C3.1407 11.0055 2.84345 10.9795 2.55166 10.9228C2.85437 11.8242 3.43776 12.6124 4.22154 13.179C5.00531 13.7456 5.95093 14.0627 6.92822 14.0866C5.27035 15.3438 3.22573 16.0259 1.12111 16.0238C0.74641 16.0262 0.371941 16.0053 0 15.9612C2.14164 17.2995 4.63724 18.0074 7.18501 17.9994C15.8036 17.9994 20.5158 11.0764 20.5158 5.07543C20.5158 4.87456 20.5086 4.68088 20.4986 4.48833C21.4225 3.84724 22.218 3.04815 22.8462 2.13028Z"
                              fill="white"
                              />
                        </g>
                        <defs>
                           <clipPath id="clip0_1416_400">
                              <rect width="22.8462" height="18" fill="white" />
                           </clipPath>
                        </defs>
                     </svg>
                  </button>
                  <button
                     class="flex h-[50px] w-[50px] items-center justify-center rounded-md bg-[#0080FF]"
                     >
                     <svg
                        width="10"
                        height="20"
                        viewBox="0 0 10 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <g clip-path="url(#clip0_1416_404)">
                           <path
                              d="M6.4908 19.9982V10.8773H9.43911L9.88051 7.3228H6.4908V5.05333C6.4908 4.02423 6.76604 3.32284 8.18733 3.32284L10 3.32197V0.14284C9.68636 0.0996795 8.61042 0.00292969 7.35864 0.00292969C4.74517 0.00292969 2.95593 1.65936 2.95593 4.70148V7.3229H0V10.8774H2.95584V19.9983L6.4908 19.9982Z"
                              fill="white"
                              />
                        </g>
                        <defs>
                           <clipPath id="clip0_1416_404">
                              <rect width="10" height="20" fill="white" />
                           </clipPath>
                        </defs>
                     </svg>
                  </button>
               </div>
               <div class="relative z-10 flex items-center justify-center mb-8">
                  <span
                     class="absolute left-0 hidden w-full h-px -translate-y-1/2 top-1/2 -z-10 bg-form-stroke sm:block"
                     ></span>
                  <p
                     class="text-base font-medium bg-white dark:bg-dark-2 text-body-color dark:text-dark-6 sm:px-4"
                     >
                     Or create account with email
                  </p>
               </div>
               <form>
                  <div class="flex flex-wrap -mx-2">
                     <div class="w-full px-2 sm:w-1/2">
                        <div class="mb-4">
                           <label
                              for="name"
                              class="block mb-2 text-base font-medium text-dark dark:text-white"
                              >
                           Full Name
                           </label>
                           <input
                              type="text"
                              name="name"
                              class="w-full px-5 py-2.5 text-base font-medium bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                              />
                        </div>
                     </div>
                     <div class="w-full px-2 sm:w-1/2">
                        <div class="mb-4">
                           <label
                              for="email"
                              class="block mb-2 text-base font-medium text-dark dark:text-white"
                              >
                           Email address
                           </label>
                           <input
                              type="email"
                              name="email"
                              class="w-full px-5 py-2.5 text-base font-medium bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                              />
                        </div>
                     </div>
                     <div class="w-full px-2">
                        <div class="mb-6">
                           <label
                              for="password"
                              class="block mb-2 text-base font-medium text-dark dark:text-white"
                              >
                           Password
                           </label>
                           <input
                              type="password"
                              name="password"
                              class="w-full px-5 py-2.5 text-base font-medium bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                              />
                        </div>
                     </div>
                     <div class="w-full px-2">
                        <button
                           class="flex items-center justify-center w-full px-3 py-3 text-sm font-medium text-white rounded-md bg-primary hover:bg-blue-dark"
                           >
                        Create Account
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

      {{-- <div class="flex mt-24 relative" style="justify-content: center; align-items: center;">
         <a href="javascript:void(0)" class="flex z-10 justify-between py-2 text-base font-medium text-white dark:text-dark-6 hover:text-primary lg:mx-4 lg:inline-flex lg:py-6 ">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g id="SVGRepo_bgCarrier" stroke-width="0"/>
               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
               <g id="SVGRepo_iconCarrier">
                     <path d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
               </g>
            </svg>
         </a>
         <p style="position: absolute;" id='svg-description'>hahaha</p>
      </div> --}}

      <!-- ====== Horizontal Menu Section Start -->
      <header x-data="{navbarOpen: false}" class="icon-margin-top -mb-10 ">
         <div class="mx-auto w-full">
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
                           class="absolute left-0 mt-2 w-[250px] rounded bg-primary shadow-card-2 duration-200"
                           >
                           <ul class="space-y-5 py-6 px-5">
                              @for ($i=0; $i<12; $i++)
                              <li>
                                 <a
                                    href="javascript:void(0)"
                                    class="relative block text-sm font-medium text-white opacity-70 duration-200 hover:opacity-100"
                                    >
                                    icon{{ $i }}
                                 </a>
                              </li>
                              @endfor
                           </ul>
                        </nav>
                     </div>
                     <div class="hidden md:block w-full ">
                        <nav >
                           <ul class="flex space-x-[30px] justify-center">
                              @for ($i=0; $i<12; $i++)
                              <li>
                                 <div class="relative">
                                    <a href="javascript:void(0)" class="flex justify-between py-2 text-base font-medium text-white dark:text-dark-6 hover:text-primary lg:mx-4 lg:inline-flex lg:py-6 ">
                                       <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                          <g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/> </g>
                                       </svg>
                                       <p style="position: absolute;" id='svg-description'>icon{{ $i }}</p>
                                    </a>
                                 </div>
                              </li>
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

<!-- ====== Services Section Start -->
<section class="{{-- bg-gray-2 dark:bg-dark --}} what-we-do pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
   <div class="container mx-auto">
     {{--  <div class="-mx-4 flex flex-wrap">
         <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-[70px]">
               <span class="text-primary mb-2 block text-lg font-semibold">
               Project Planing
               </span>
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
      </div> --}}
      <div class="mb-24">
        <div class="-mx-4 flex flex-wrap items-center justify-center">
           <div class="w-full px-4 lg:w-1/2 2xl:w-5/12">
              <div>
                <img
                  src="{{ asset('/images/astronaut.png') }}"
                  alt="Recent Product"
                  class="w-full h-auto rounded-md"
                />
              </div>
            </div>
          <div class="w-full px-4 lg:w-1/2 2xl:w-5/12">
           <div class="mx-auto mb-[60px] max-w-[510px] lg:mb-[70px]">
              <h2
                 class="text-white dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
                 >
                 What We Do?
              </h2>
              <p class="text-body-color text-base dark:text-white text-white">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere arcu sit amet ligula feugiat eleifend.
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere arcu sit amet ligula feugiat eleifend.
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere arcu sit amet ligula feugiat eleifend.
              </p>
           </div>
          </div>
          
        </div>
      </div>
      <div class="-mx-4 flex flex-wrap justify-center">
        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
           <div
              class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 card-bg py-11 px-6 duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent"
              >
             
              <div class="flex mb-3">
                 <div class="pr-3">
                    <svg class="text-gray-800 dark:text-white text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                       <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M1 10c1.5 1.5 5.25 3 9 3s7.5-1.5 9-3m-9-1h.01M2 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1ZM14 5V3a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v2h8Z"/>
                     </svg>
                 </div>
                 <div class="w-5/6">
                    <h3>
                       <a
                          href="javascript:void(0)"
                          class="mb-3 text-lg font-bold leading-tight text-white hover:text-primary text-dark dark:text-white sm:text-xl sm:leading-tight lg:text-lg lg:leading-tight xl:text-xl xl:leading-tight"
                          >
                          
                          
                          Lorem ipsum dolor sit amet
                       </a>
                    </h3>
                 </div>
              </div>
              <p
                 class="mb-5 text-base font-medium leading-relaxed text-body-color dark:text-dark-6 text-white"
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
              <span
                 class="bg-primary absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"
                 ></span>
           </div>
        </div>
        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
           <div
              class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white card-bg dark:bg-dark-2 py-11 px-6 duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent"
              >
             
              <div class="flex mb-3">
                 <div class="pr-3">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                       <path d="M17 16h-1V2a1 1 0 1 0 0-2H2a1 1 0 0 0 0 2v14H1a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM5 4a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4Zm0 5V8a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1Zm6 7H7v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm2-7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1Zm0-4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1Z"/>
                     </svg>
                 </div>
                 <div class="w-5/6">
                    <h3>
                       <a
                          href="javascript:void(0)"
                          class="mb-3 text-lg font-bold leading-tight hover:text-primary text-white text-dark dark:text-white sm:text-xl sm:leading-tight lg:text-lg lg:leading-tight xl:text-xl xl:leading-tight"
                          >
                          Lorem ipsum dolor sit amet
                       </a>
                    </h3>
                 </div>
              </div>
              <p
                 class="mb-5 text-base font-medium leading-relaxed text-body-color dark:text-dark-6 text-white"
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
              <span
                 class="bg-primary absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"
                 ></span>
           </div>
        </div>
        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
           <div
              class="group relative mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 card-bg py-11 px-6 duration-200 hover:-translate-y-2 hover:shadow-feature hover:border-transparent"
              >
             
              <div class="flex mb-3">
                 <div class="pr-3">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                       <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                     </svg>
                 </div>
                 <div class="w-5/6">
                    <h3>
                       <a
                          href="javascript:void(0)"
                          class="mb-3 text-lg text-white font-bold leading-tight hover:text-primary text-dark dark:text-white sm:text-xl sm:leading-tight lg:text-lg lg:leading-tight xl:text-xl xl:leading-tight"
                          >
                          Lorem ipsum dolor sit amet
                       </a>
                    </h3>
                 </div>
              </div>
              <p
                 class="mb-5 text-base font-medium leading-relaxed text-body-color dark:text-dark-6 text-white"
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
              <span
                 class="bg-primary absolute bottom-0 left-0 block h-2 w-0 duration-200 group-hover:w-full"
                 ></span>
           </div>
        </div>
      </div>
   </div>
</section>
<!-- ====== Services Section End -->

<!-- ====== CTA Section Start -->
<section
  class="relative z-0 bg-cover bg-no-repeat py-20 lg:py-[100px] xl:py-[80px]"
  style="background-image: url(https://cdn.tailgrids.com/2.0/image/marketing/images/cta/cta.jpg); height: 30rem;"
  >
  <span
     class="absolute left-0 top-0 -z-10 h-full w-full bg-black/80"
     ></span>
  <div class="container">
     <div class="mx-auto max-w-[900px] text-center mb-16">
       
        <h2
           class="mb-4 text-3xl font-bold text-white sm:text-4xl md:leading-[1.2] md:text-[48px]"
           style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
           >
           Digital Marketing Never Been Better
        </h2>
        <p
           class="text-base text-white opacity-75"
           style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
           >
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
           vel dolor pellentesque, varius elit quis, malesuada quam.
        </p>
     </div>  
  </div>
</section>

<section class="bg-[#090E34] dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
   <div class="container mx-auto">
      <div class="flex flex-wrap justify-center -mt-80">
         <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="group mb-8 bg-white dark:bg-dark-2">
               <div class="relative">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/team/team-06/image-01.jpg"
                     alt="team image"
                     class="w-full h-96"
                     />
               </div>
            </div>
         </div>
         <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="group mb-8 bg-white dark:bg-dark-2">
               <div class="relative">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/team/team-06/image-02.jpg"
                     alt="team image"
                     class="w-full h-96" 
                     />   
               </div>
            </div>
         </div>
         <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="group mb-8 bg-white dark:bg-dark-2">
               <div class="relative">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/team/team-06/image-03.jpg"
                     alt="team image"
                     class="w-full h-96"
                     />
               </div>
            </div>
         </div>
      </div>
     <div class="mx-auto max-w-[700px] text-center mb-10 mt-24">    
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
        
        <h2
           class="mt-24 mb-4 text-3xl font-bold text-white sm:text-4xl md:leading-[1.2] md:text-[48px]"
           style="text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2)"
           >
           Fun Facts
        </h2>
     </div>
      <div class="w-full px-4">
            <div class="-mx-3 flex flex-wrap md:-mx-4">
               <div class="w-full px-3 xs:w-1/2 md:px-4 lg:w-1/4">
                  <div
                     class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-primary md:mb-8"
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
                     class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-primary md:mb-8"
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
                     class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-primary md:mb-8"
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
                     class="group mb-6 rounded-[5px] bg-white dark:bg-dark-2 py-6 px-4 text-center shadow-three hover:bg-primary md:mb-8"
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
<!-- ====== Services Section End -->
@endsection