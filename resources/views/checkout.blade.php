@section('css')
<style>
   .background-rgb {
      background: linear-gradient(
      to right, 
      rgba(29,91,128,0.3),
      rgba(50,118,155,0.3),
      rgba(159,202,218,0.3)
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

   .icon-padding-bottom {
      /* padding-top: 2rem; */
      /* background-color: yellow; */
      /* position:absolute; */
      bottom: 0;
      padding-bottom: 2rem;
   }
   /* @media screen and (min-width: 960px) {
      .icon-margin-top {
         padding-top: 6rem;
      }
   } */

   .blob-image {
      width: 275px;
      position: absolute;
      z-index: 10;
      right: -73px;
      top: -184px;
      overflow: hidden;
   }

   .bacground-image-hero { 
      background: url("{{ asset('/images/v2crop.png') }}") no-repeat center center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 100% 100%;;
      height: 20vh;
   }

   .newsletter-bg {
    background: url("{{ asset('/images/newsletter.png') }}") no-repeat center; 
    background-size: 100% 100%;
 /*    background-size: cover; */
   /*  height: 100vh; */
   /*    background-size: 100% 100%;; */
   }
   .avalon-logo-footer {
    background: url("{{ asset('/images/avalonlogo.png') }}") no-repeat center; 
    width: 100%;
    height: auto;
/*     background-size: 100% auto; */
   }
   /* .box {
      content: "";
    width: 275px;
    height: 275px;
    position: absolute;
    right: -137.5px;
    bottom: -137.5px;
    background-color: #faf8fd;
    z-index: -1;
    border-radius: 100%;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
    */

   .media-section {
      border-radius: 276px 0 250px 0;
    }

   .text-shadow {
      text-shadow: 3px -3px 3px rgba(0, 0, 0, 0.6); /* You may adjust these values as needed */
   }


   #cart-badge {
      font-size:5pt;
      padding:3px 5px;
      top:0;
      right:0;
   }

   .avalon-logo {
      width: 50%;
      height: 50%;
   }
</style>

@extends('layouts.app')

@section('content')
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
                  class="avalon-logo mt-6 ml-8" 
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
<div 
    x-data="{ isMobile: window.innerWidth <= 1024 }"
    x-init="() => {
        window.addEventListener('resize', () => {
            isMobile = window.innerWidth <= 1024;
            console.log(window.innerWidth);
        });
    }"
    :class="{ 'relative z-10 bg-cover bg-center bg-no-repeat pt-[120px] pb-20 md:pt-[150px]': isMobile, 'z-10 relative bacground-image-hero': !isMobile }"
    :style="isMobile ? 'background-image: url({{ asset('/images/v2crop.png') }})' : ''">
    
</div>

<section class="relative z-40 py-10 lg:py-[40px] dark:bg-[#011523]">
   <div class="absolute top-0 left-0 z-[-1] h-1/2 w-full bg-[#011523] dark:bg-dark-3">
   </div>
   <div class="container mx-auto">
    <div class="flex flex-wrap -mx-4">
       <div class="w-full px-4 lg:w-7/12 xl:w-8/12 opacity-0" id="paymentInfo">
          <div class="mb-12 lg:mb-0">
             <h3
                class="mb-8 text-lg font-semibold text-white dark:text-white sm:leading-[40px] sm:text-[28px]"
                >
                Payment Information
             </h3>
             <div
                class="mb-10 overflow-hidden rounded-[10px] {{-- border border-stroke dark:border-dark-3 --}} bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark py-10 px-6 sm:px-10"
                >
                <h4
                   class="mb-8 text-lg font-semibold text-dark dark:text-white"
                   >
                   Personal Details
                </h4>
                <form
                   class="pb-4 mb-10 border-b border-stroke dark:border-dark-3"
                   >
                   <div class="flex flex-wrap -mx-4">
                      <div class="w-full px-4 md:w-1/2">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Full Name<span class="text-red">*</span>
                            </label>
                            <input
                               type="text"
                               placeholder="Mark Litho"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/2">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Email1<span class="text-red">*</span>
                            </label>
                            <input
                               type="text"
                               placeholder="Email"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/2">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Email2
                            </label>
                            <input
                               type="email"
                               placeholder="Email"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/2">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Billing Address<span class="text-red">*</span>
                            </label>
                            <input
                               type="text"
                               placeholder="2707 Davis Anenue"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/3">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Country<span class="text-red">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Country"
                                class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                            />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/3">
                        <div class="mb-5">
                           <label
                              for=""
                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                              >
                           City<span class="text-red">*</span>
                           </label>
                           <input
                               type="text"
                               placeholder="City"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                           />
                        </div>
                     </div>
                     <div class="w-full px-4 md:w-1/3">
                        <div class="mb-5">
                           <label
                              for=""
                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                              >
                           Post Code<span class="text-red">*</span>
                           </label>
                           <input
                               type="number"
                               placeholder="Post Code"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                           />
                        </div>
                     </div>
                     
                      <div class="w-full px-4 md:w-1/3">
                        <div class="mb-5">
                           <label
                              for=""
                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                              >
                           Type of Payment<span class="text-red">*</span>
                           </label>
                           <div class="relative">
                              <select
                                 class="w-full appearance-none bg-transparent rounded-md border border-stroke dark:border-dark-3 py-3 px-5 font-medium text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                                 >
                                 <option value="" class="dark:bg-dark-2">
                                    Thru Gcash
                                 </option>
                                 <option value="" class="dark:bg-dark-2">
                                    United Kingdom
                                 </option>
                                 <option value="" class="dark:bg-dark-2">
                                    Canada
                                 </option>
                              </select>
                              <span
                                 class="absolute -translate-y-1/2 right-5 top-1/2 text-body-color dark:text-dark-6"
                                 >
                                 <svg
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="fill-current stroke-current"
                                    >
                                    <path
                                       d="M2.4142 5.03575L2.41418 5.03577L2.417 5.03852L7.767 10.2635L8.00101 10.4921L8.23393 10.2624L13.5839 4.98741L13.5839 4.98741L13.5856 4.98575C13.6804 4.89093 13.8194 4.89093 13.9142 4.98575C14.0087 5.0803 14.009 5.2187 13.915 5.31351C13.9148 5.31379 13.9145 5.31407 13.9142 5.31435L8.16628 10.9623L8.16627 10.9623L8.1642 10.9643C8.06789 11.0607 8.02303 11.0667 7.9999 11.0667C7.94098 11.0667 7.88993 11.0523 7.82015 10.9991L2.08477 5.36351C1.99078 5.26871 1.99106 5.1303 2.0856 5.03575C2.18043 4.94093 2.31937 4.94093 2.4142 5.03575Z"
                                       fill=""
                                       stroke=""
                                       stroke-width="0.666667"
                                       />
                                 </svg>
                              </span>
                           </div>
                        </div>
                     </div>
                      <div class="w-full px-4 md:w-1/2">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Total Amount to be Processed<span class="text-red">*</span>
                            </label>
                            <input
                               type="number"
                               placeholder="Total Amount"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                   </div>
                   <button
                   class="flex items-center justify-center w-1/3 px-10 py-3 text-base font-medium text-center text-white rounded-md bg-[#011523] hover:bg-[#011523]/90"
                   >
                   Pay Now
                </button>
                </form>  
             </div>
          </div>
       </div>
       <div class="w-full px-4 lg:w-5/12 xl:w-4/12 opacity-0" id="servicesSummary">
          <div>
             <h3
                class="mb-8 text-xl font-semibold text-white dark:text-white sm:leading-[40px] sm:text-[28px]"
                >
                Services Summary
             </h3>
             <div
                class="mb-10 bg-white overflow-hidden rounded-[10px] {{-- border border-stroke dark:border-dark-3 --}} bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark py-10 px-6 sm:px-10"
                >
                <?php 
                  $summary_count = 3;
                  $items_per_page = 3;
                  $total_pages = ceil($summary_count / $items_per_page);

                  $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                  $current_page = max(1, min($current_page, $total_pages));

                  $start = ($current_page - 1) * $items_per_page;
                  $end = min(($start + $items_per_page), $summary_count);
                ?>

                @for($i = 0; $i < $summary_count; $i++)
                <div class="flex items-center mb-9">
                  <div
                     class="mr-6 h-[90px] w-full max-w-[80px] overflow-hidden rounded-lg sm:h-[110px] sm:max-w-[100px] border border-stroke dark:border-dark-3"
                     >
                     <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-04/product-01.jpg"
                        alt="product"
                        class="object-cover object-center w-full h-full"
                        />
                  </div>
                  <div class="w-full">
                     <p
                        class="mb-[6px] text-base font-medium text-dark dark:text-white"
                        >
                        Trendy Ladies Pants
                     </p>
                     <p
                        class="text-sm font-medium text-body-color dark:text-dark-6"
                        >
                        $59.99
                     </p>
                    {{--  <p
                        class="text-sm font-medium text-body-color dark:text-dark-6"
                        >
                        <span class="pr-0.5"> Quantity: </span> <span>1</span>
                     </p> --}}
                  </div>
               </div>
                @endfor
              

                {{-- <div class="text-center">
                  <div class="mb-12 inline-flex rounded-full dark:bg-dark-2 bg-white py-2 px-3 shadow-[0px_1px_3px_0px_rgba(0,0,0,0.13)]">
                      <ul class="-mx-[6px] flex items-center">
                          <!-- Previous Page Link -->
                          @if($current_page > 1)
                              <li class="px-[6px]">
                                  <a href="?page={{ $current_page - 1 }}" class="flex items-center justify-center text-base border rounded-full text-dark hover:border-primary hover:bg-primary h-9 w-9 border-stroke dark:text-white dark:border-dark-3 hover:text-white">
                                    <span>
                                       <svg
                                          width="16"
                                          height="7"
                                          viewBox="0 0 16 7"
                                          class="fill-current"
                                          >
                                          <path
                                             d="M0.32819 4.51723L2.12148 6.83231C2.27742 7.02994 2.56331 7.05817 2.77122 6.88877C2.95315 6.71938 2.97914 6.40882 2.8232 6.18296L1.13387 4.00904L15.5322 4.00904C15.7921 4.00904 16 3.78318 16 3.50085C16 3.21852 15.7921 2.99266 15.5322 2.99266L1.13387 2.99266L2.8232 0.818749C2.97914 0.62112 2.95315 0.310561 2.77122 0.112932C2.69326 0.0282342 2.5893 6.95564e-07 2.48534 7.04652e-07C2.35539 7.16013e-07 2.22544 0.0564659 2.14747 0.169397L0.354179 2.48448C-0.113636 3.10559 -0.113636 3.95258 0.32819 4.51723Z"
                                             />
                                       </svg>
                                    </span>
                                  </a>
                              </li>
                          @endif
              
                          <!-- Page Number Links -->
                          @for($page = 1; $page <= $total_pages; $page++)
                           <li class="px-[6px]">
                                 <a href="?page={{ $page }}"
                                    class="flex items-center justify-center text-base border rounded-full h-9 w-9 border-stroke {{ $current_page == $page ? 'bg-primary text-white border-primary' : 'text-body-color dark:border-dark-3 hover:text-white hover:bg-primary hover:border-primary' }}">
                                    {{ $page }}
                                 </a>
                           </li>
                          @endfor
              
                          <!-- Next Page Link -->
                          @if($current_page < $total_pages)
                              <li class="px-[6px]">
                                  <a href="?page={{ $current_page + 1 }}" class="flex items-center justify-center text-base border rounded-full text-dark hover:border-primary hover:bg-primary h-9 w-9 border-stroke dark:text-white dark:border-dark-3 hover:text-white">
                                    <span>
                                       <svg
                                          width="16"
                                          height="7"
                                          viewBox="0 0 16 7"
                                          class="fill-current"
                                          >
                                          <path
                                             d="M15.6718 2.48277L13.8785 0.167694C13.7226 -0.0299349 13.4367 -0.0581673 13.2288 0.111229C13.0468 0.280625 13.0209 0.591184 13.1768 0.817045L14.8661 2.99096H0.467815C0.207918 2.99096 0 3.21682 0 3.49915C0 3.78148 0.207918 4.00734 0.467815 4.00734H14.8661L13.1768 6.18125C13.0209 6.37888 13.0468 6.68944 13.2288 6.88707C13.3067 6.97177 13.4107 7 13.5147 7C13.6446 7 13.7746 6.94354 13.8525 6.8306L15.6458 4.51553C16.1136 3.89441 16.1136 3.04743 15.6718 2.48277Z"
                                             />
                                       </svg>
                                    </span>
                                  </a>
                              </li>
                          @endif
                      </ul>
                  </div>
               </div> --}}
                <div class="pt-5 border-t border-stroke dark:border-dark-3">
                   <p
                      class="flex items-center justify-between mb-6 text-base text-dark dark:text-white"
                      >
                      <span>Total Amount: $123</span>
                   </p>
                </div>
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
   
         <form action="#" method="post" class="mt-4 space-x-2 opacity-0" id="signUp">
             <input
             type="text"
             placeholder="Enter your Email"
             class="w-1/4 px-5 py-3 text-base bg-white border outline-none border-stroke text-body-color dark:text-white dark:border-dark-3"
             :style="isMobile ? 'width: 200px' : ''"/>
             <button type="submit" class="bg-white text-dark px-5 py-3 font-semibold">SIGN UP</button>
         </form>
         <p class="text-white opacity-90 pb-10" id="subscribe">You can unsubscribe anytime</p>
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
   document.addEventListener("DOMContentLoaded", function() {
      var elementIds = [
               "join", 
               "signUp", 
               "subscribe", 
               "footerSection",
               "paymentInfo",
               "servicesSummary"
            ];
      var animationClasses = {
         join: "animate-fade-up",
         signUp: "animate-fade-up",
         subscribe: "animate-fade-up",
         footerSection: "animate-fade-right",
         paymentInfo: "animate-fade-right",
         servicesSummary: "animate-fade-left",
      };
      var animationDelays = {
         join: 100,
         signUp: 500,
         subscribe: 700,
      };

      var observer = new IntersectionObserver(function(entries) {
         entries.forEach(function(entry) {
               if (entry.isIntersecting) {
                  var animationClass = animationClasses[entry.target.id];
                  var delay = animationDelays[entry.target.id];

                  setTimeout(() => {
                     entry.target.classList.add(animationClass);
                  }, delay);
               } else {
                  entry.target.style.opacity = 0;
               }
         });
      }, { threshold: 0 });

      elementIds.forEach(function(elementId) {
         var element = document.getElementById(elementId);
         if (element) {
               observer.observe(element);
         }
      });
   });

</script>

@endsection