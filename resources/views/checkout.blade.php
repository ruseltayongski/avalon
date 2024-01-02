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

</style>

@extends('layouts.app')

@section('content')
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
       <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
          <div class="mb-12 lg:mb-0">
             <h3
                class="mb-8 text-xl font-semibold text-white dark:text-white sm:leading-[40px] sm:text-[28px]"
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
                            Full Name
                            </label>
                            <input
                               type="text"
                               placeholder="Mark Litho"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/2">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Email1
                            </label>
                            <input
                               type="text"
                               placeholder="Email"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
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
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/2">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Billing Address
                            </label>
                            <input
                               type="text"
                               placeholder="2707 Davis Anenue"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                               />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/3">
                         <div class="mb-5">
                            <label
                               for=""
                               class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                               >
                            Country
                            </label>
                            <input
                                type="text"
                                placeholder="Country"
                                class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                            />
                         </div>
                      </div>
                      <div class="w-full px-4 md:w-1/3">
                        <div class="mb-5">
                           <label
                              for=""
                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                              >
                           City
                           </label>
                           <input
                               type="text"
                               placeholder="City"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                           />
                        </div>
                     </div>
                     <div class="w-full px-4 md:w-1/3">
                        <div class="mb-5">
                           <label
                              for=""
                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                              >
                           Post Code
                           </label>
                           <input
                               type="number"
                               placeholder="Post Code"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                           />
                        </div>
                     </div>
                     
                      <div class="w-full px-4 md:w-1/3">
                        <div class="mb-5">
                           <label
                              for=""
                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                              >
                           Type of Payment
                           </label>
                           <div class="relative">
                              <select
                                 class="w-full appearance-none bg-transparent rounded-md border border-stroke dark:border-dark-3 py-3 px-5 font-medium text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
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
                            Total Amount to be Processed
                            </label>
                            <input
                               type="number"
                               placeholder="Total Amount"
                               class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
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
       <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
          <div>
             <h3
                class="mb-8 text-xl font-semibold text-white dark:text-white sm:leading-[40px] sm:text-[28px]"
                >
                Services Summary
             </h3>
             <div
                class="mb-10 bg-white overflow-hidden rounded-[10px] {{-- border border-stroke dark:border-dark-3 --}} bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark py-10 px-6 sm:px-10"
                >
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
                      <p
                         class="text-sm font-medium text-body-color dark:text-dark-6"
                         >
                         <span class="pr-0.5"> Quantity: </span> <span>1</span>
                      </p>
                   </div>
                </div>
                <div class="flex items-center mb-9">
                   <div
                      class="mr-6 h-[90px] w-full max-w-[80px] overflow-hidden rounded-lg sm:h-[110px] sm:max-w-[100px] border border-stroke dark:border-dark-3"
                      >
                      <img
                         src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-04/product-02.jpg"
                         alt="product"
                         class="object-cover object-center w-full h-full"
                         />
                   </div>
                   <div class="w-full">
                      <p
                         class="mb-[6px] text-base font-medium text-dark dark:text-white"
                         >
                         Men's Sendo T-shirt
                      </p>
                      <p
                         class="text-sm font-medium text-body-color dark:text-dark-6"
                         >
                         $80.99
                      </p>
                      <p
                         class="text-sm font-medium text-body-color dark:text-dark-6"
                         >
                         <span class="pr-0.5"> Quantity: </span> <span>2</span>
                      </p>
                   </div>
                </div>
                <div class="pt-6 border-t border-stroke dark:border-dark-3">
                   <p
                      class="mb-[10px] flex items-center justify-between text-base text-dark dark:text-white"
                      >
                      <span>Subtotal</span>
                      <span class="font-medium"> $140.98 </span>
                   </p>
                   <p
                      class="mb-[10px] flex items-center justify-between text-base text-dark dark:text-white"
                      >
                      <span>Shipping Cost</span>
                      <span class="font-medium"> $10.99 </span>
                   </p>
                   <p
                      class="flex items-center justify-between mb-5 text-base text-dark dark:text-white"
                      >
                      <span>Discount</span>
                      <span class="font-medium"> $5.00 </span>
                   </p>
                </div>
                <div class="pt-5 border-t border-stroke dark:border-dark-3">
                   <p
                      class="flex items-center justify-between mb-6 text-base text-dark dark:text-white"
                      >
                      <span>Total Amount</span>
                      <span class="font-medium"> $124.99 </span>
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

         <h2 class="text-3xl text-white font-semibold"
             :style="isMobile ? 'font-size: 22px' : ''"
            >Join Our Newsletter Now
         </h2>
   
         <form action="#" method="post" class="mt-4 space-x-2">
             <input
             type="text"
             placeholder="Enter your Email"
             class="w-1/4 px-5 py-3 text-base bg-white border outline-none border-stroke text-body-color dark:text-white dark:border-dark-3"
             :style="isMobile ? 'width: 200px' : ''"/>
             <button type="submit" class="bg-white text-dark px-5 py-3 font-semibold">SIGN UP</button>
         </form>
         <p class="text-white opacity-90 pb-10">You can unsubscribe anytime</p>
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
       <div class="flex flex-wrap -mx-4 lg:mb-14">
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