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
      background: url("{{ asset('/images/v2.png') }}") no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 100% 100%;;
      height: 100vh;
   }

   .newsletter-bg {
    background: url("{{ asset('/images/newsletter.png') }}") no-repeat center; 
    background-size: 100% auto;
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
    :style="isMobile ? 'background-image: url({{ asset('/images/banner.jpg') }})' : ''">
    <div class="container mx-auto h-full lg:flex justify-center pt-[80px]">
        <div class="flex flex-wrap -mx-4 w-full justify-center">
            <div class="p-4">
             
                {{-- <div class="animate-fade-up">   
                    <h1 class="mb-16 text-3xl font-bold !leading-[1.208] text-white sm:text-4xl lg:text-[42px] xl:text-4xl">
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
                </div> --}}
            </div>
        </div>

        <!-- ====== Horizontal Menu Section Start -->
        {{-- <header x-data="{navbarOpen: false}" class="icon-margin-top -mb-10 "> --}}
        
        <!-- ====== Horizontal Menu Section End -->
    </div>
</div>
<!-- ====== Contact Section Start -->
<section class="absolute top-44 z-40 mb-20 lg:py-[120px] dark:bg-dark bg-white w-full">
    <div
       class="absolute top-0 left-0 z-[-1] h-1/2 w-full bg-[#011523] dark:bg-dark-3"
       ></div>
    <div class="container mx-auto">
       <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4 lg:w-6/12 xl:w-7/12">
             <div class="mb-[60px] lg:mb-[100px] xl:mb-[150px]">
                <span
                   class="block mb-6 text-base font-medium text-white dark:text-white"
                   >
                CONTACT US
                </span>
                <h2
                   class="text-[35px] font-semibold leading-tight text-white dark:text-white"
                   >
                   Let’s talk about <br />
                   your plans.
                </h2>
             </div>
             <div class="flex flex-wrap -mx-4">
                <div class="w-full max-w-[330px] px-4">
                   <div class="w-full mb-12">
                      <div class="flex">
                         <div class="mr-6 text-primary h-9 w-9">
                            <svg
                               width="32"
                               height="32"
                               viewBox="0 0 32 32"
                               fill="none"
                               xmlns="http://www.w3.org/2000/svg"
                               >
                               <path
                                  d="M16 0.899902C9.1 0.899902 3.5 6.2999 3.5 12.9499C3.5 17.9999 10.2 25.9999 14.15 30.2999C14.65 30.8499 15.3 31.0999 16 31.0999C16.7 31.0999 17.35 30.7999 17.85 30.2999C21.8 25.9999 28.5 17.9999 28.5 12.9499C28.5 6.2999 22.9 0.899902 16 0.899902ZM16.2 28.7999C16.1 28.8999 15.95 28.8999 15.8 28.7999C10.95 23.4999 5.75 16.5999 5.75 12.9499C5.75 7.5499 10.35 3.1499 16 3.1499C21.65 3.1499 26.25 7.5499 26.25 12.9499C26.25 16.5999 21.05 23.4999 16.2 28.7999Z"
                                  fill="#011523"
                                  />
                               <path
                                  d="M16 7.84985C13 7.84985 10.55 10.2999 10.55 13.2999C10.55 16.2999 13 18.7999 16 18.7999C19 18.7999 21.45 16.3499 21.45 13.3499C21.45 10.3499 19 7.84985 16 7.84985ZM16 16.5499C14.2 16.5499 12.8 15.0999 12.8 13.3499C12.8 11.5999 14.25 10.1499 16 10.1499C17.75 10.1499 19.2 11.5999 19.2 13.3499C19.2 15.0999 17.8 16.5499 16 16.5499Z"
                                  fill="#011523"
                                  />
                            </svg>
                         </div>
                         <div>
                            <h5
                               class="mb-4 text-lg font-medium text-dark dark:text-white"
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
                <div class="w-full max-w-[330px] px-4">
                   <div class="w-full mb-12">
                      <div class="flex">
                         <div class="mr-6 text-primary h-9 w-9">
                            <svg
                               width="32"
                               height="32"
                               viewBox="0 0 32 32"
                               fill="none"
                               xmlns="http://www.w3.org/2000/svg"
                               >
                               <path
                                  d="M28 4.80005H4.00001C2.30001 4.80005 0.850006 6.20005 0.850006 7.95005V24.15C0.850006 25.85 2.25001 27.3 4.00001 27.3H28C29.7 27.3 31.15 25.9 31.15 24.15V7.90005C31.15 6.20005 29.7 4.80005 28 4.80005ZM28 7.05005C28.05 7.05005 28.1 7.05005 28.15 7.05005L16 14.85L3.85001 7.05005C3.90001 7.05005 3.95001 7.05005 4.00001 7.05005H28ZM28 24.9501H4.00001C3.50001 24.9501 3.10001 24.55 3.10001 24.05V9.25005L14.8 16.75C15.15 17 15.55 17.1 15.95 17.1C16.35 17.1 16.75 17 17.1 16.75L28.8 9.25005V24.1C28.9 24.6 28.5 24.9501 28 24.9501Z"
                                  fill="#011523"
                                  />
                            </svg>
                         </div>
                         <div>
                            <h5
                               class="mb-4 text-lg font-medium text-dark dark:text-white"
                               >
                               How Can We Help?
                            </h5>
                            <p
                               class="mb-2 text-base text-body-color dark:text-dark-6"
                               >
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
          <div class="w-full px-4 lg:w-6/12 xl:w-5/12">
             <div
                class="xl:p-[60px] rounded-lg bg-white py-12 px-8 shadow-3 dark:bg-dark-2 sm:p-[60px] lg:px-12"
                >
                <h3
                   class="mb-8 text-2xl font-semibold text-dark dark:text-white sm:text-[28px]"
                   >
                   Send us a Message
                </h3>
                <form>
                   <div class="mb-6">
                      <label class="block text-xs text-body-color dark:text-dark-6">
                      Full Name*
                      </label>
                      <input
                         type="text"
                         placeholder="Adam Gelius"
                         class="text-body-color focus:border-[#011523] w-full border-b border-[#f1f1f1] placeholder:opacity-30 dark:border-dark-3 dark:text-dark-6 bg-transparent py-4 text-base outline-none focus-visible:shadow-none"
                         />
                   </div>
                   <div class="mb-6">
                      <label class="block text-xs text-body-color dark:text-dark-6">
                      Email*
                      </label>
                      <input
                         type="email"
                         placeholder="example@yourmail.com"
                         class="text-body-color focus:border-[#011523] w-full border-b border-[#f1f1f1] placeholder:opacity-30 dark:border-dark-3 dark:text-dark-6 bg-transparent py-4 text-base outline-none focus-visible:shadow-none"
                         />
                   </div>
                   <div class="mb-6">
                      <label class="block text-xs text-body-color dark:text-dark-6">
                      Phone*
                      </label>
                      <input
                         type="text"
                         placeholder="+885 1254 5211 552"
                         class="text-body-color focus:border-[#011523] w-full border-b border-[#f1f1f1] placeholder:opacity-30 dark:border-dark-3 dark:text-dark-6 bg-transparent py-4 text-base outline-none focus-visible:shadow-none"
                         />
                   </div>
                   <div class="mb-6">
                      <label class="block text-xs text-body-color dark:text-dark-6">
                      Message*
                      </label>
                      <textarea
                         rows="1"
                         placeholder="Type your message here"
                         class="text-body-color focus:border-[#011523] w-full resize-none border-b border-[#f1f1f1] placeholder:opacity-30 dark:border-dark-3 dark:text-dark-6 bg-transparent py-4 text-base outline-none focus-visible:shadow-none"
                         ></textarea>
                   </div>
                   <div>
                      <button
                         type="submit"
                         class="px-10 py-3 text-base font-medium text-white transition rounded bg-[#011523] hover:bg-[#011523]/90"
                         >
                      Send Message
                      </button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
</section>

<section class="{{-- pb-10 lg:pt-[100px] lg:pb-20 --}} newsletter-bg w-full" style="margin-top: 20rem;">
    <div class="container mx-auto px-4">
        <div class="text-center pb-10 lg:pt-[50px] {{-- lg:pb-20 --}}">

            <h2 class="text-3xl text-white font-semibold">Join Our Newsletter Now</h2>
      
            <form action="#" method="post" class="mt-4 space-x-2">
                <input
                type="text"
                placeholder="Enter your Email"
                class="w-1/4 px-5 py-3 text-base bg-white border outline-none border-stroke text-body-color dark:text-white dark:border-dark-3"
                />
                <button type="submit" class="bg-white text-dark px-5 py-3">SIGN UP</button>
            </form>
            <p class="text-white opacity-90">You can unsubscribe anytime</p>
        </div>
    </div>
    
</section>
<section class="relative text-center">
    <!-- Avalon Logo on the left -->
    <img class="absolute left-0 top-0" src="{{ asset('/images/avalonlogo.png') }}" alt="Avalon Logo">
    <img class="absolute left-0 bottom-0" src="{{ asset('/images/eclipse.png') }}" alt="Avalon Logo">
    <img class="absolute right-0 top-0 pt-10 pr-10" src="{{ asset('/images/vector.png') }}" alt="Avalon Logo">
    <img class="absolute right-0 top-0" src="{{ asset('/images/eclipse.png') }}" alt="Avalon Logo">

    <!-- Container with contact information -->
    <div class="container pt-[120px] pb-[100px]">
        <div class="flex justify-between items-center">
            <!-- Contact Us -->
            <div class="w-full max-w-[330px] px-4">
                <div class="w-full mb-12">
                   <h2 class="text-bold text-3xl">Please Feel free to</h2>
                   <h2 class="text-bold text-3xl">get in touch with us</h2>
                </div>
             </div>

            <div class="w-full max-w-[330px] px-4">
                <div class="w-full mb-12">
                   <div class="flex">
                      <div class="mr-6 text-primary h-9 w-9">
                         <svg
                            width="32"
                            height="32"
                            viewBox="0 0 32 32"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                               d="M16 0.899902C9.1 0.899902 3.5 6.2999 3.5 12.9499C3.5 17.9999 10.2 25.9999 14.15 30.2999C14.65 30.8499 15.3 31.0999 16 31.0999C16.7 31.0999 17.35 30.7999 17.85 30.2999C21.8 25.9999 28.5 17.9999 28.5 12.9499C28.5 6.2999 22.9 0.899902 16 0.899902ZM16.2 28.7999C16.1 28.8999 15.95 28.8999 15.8 28.7999C10.95 23.4999 5.75 16.5999 5.75 12.9499C5.75 7.5499 10.35 3.1499 16 3.1499C21.65 3.1499 26.25 7.5499 26.25 12.9499C26.25 16.5999 21.05 23.4999 16.2 28.7999Z"
                               fill="#011523"
                               />
                            <path
                               d="M16 7.84985C13 7.84985 10.55 10.2999 10.55 13.2999C10.55 16.2999 13 18.7999 16 18.7999C19 18.7999 21.45 16.3499 21.45 13.3499C21.45 10.3499 19 7.84985 16 7.84985ZM16 16.5499C14.2 16.5499 12.8 15.0999 12.8 13.3499C12.8 11.5999 14.25 10.1499 16 10.1499C17.75 10.1499 19.2 11.5999 19.2 13.3499C19.2 15.0999 17.8 16.5499 16 16.5499Z"
                               fill="#011523"
                               />
                         </svg>
                      </div>
                      <div>
                         <h5
                            class="mb-4 text-lg font-medium text-dark dark:text-white"
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
             <div class="w-full max-w-[330px] px-4">
                <div class="w-full mb-12">
                   <div class="flex">
                      <div class="mr-6 text-primary h-9 w-9">
                         <svg
                            width="32"
                            height="32"
                            viewBox="0 0 32 32"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                               d="M28 4.80005H4.00001C2.30001 4.80005 0.850006 6.20005 0.850006 7.95005V24.15C0.850006 25.85 2.25001 27.3 4.00001 27.3H28C29.7 27.3 31.15 25.9 31.15 24.15V7.90005C31.15 6.20005 29.7 4.80005 28 4.80005ZM28 7.05005C28.05 7.05005 28.1 7.05005 28.15 7.05005L16 14.85L3.85001 7.05005C3.90001 7.05005 3.95001 7.05005 4.00001 7.05005H28ZM28 24.9501H4.00001C3.50001 24.9501 3.10001 24.55 3.10001 24.05V9.25005L14.8 16.75C15.15 17 15.55 17.1 15.95 17.1C16.35 17.1 16.75 17 17.1 16.75L28.8 9.25005V24.1C28.9 24.6 28.5 24.9501 28 24.9501Z"
                               fill="#011523"
                               />
                         </svg>
                      </div>
                      <div>
                         <h5
                            class="mb-4 text-lg font-medium text-dark dark:text-white"
                            >
                            How Can We Help?
                         </h5>
                         <p
                            class="mb-2 text-base text-body-color dark:text-dark-6"
                            >
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
    <div class="bg-[#011523] pt-5 pb-5">
        <div class="container mx-auto">
           <div class="flex flex-wrap -mx-4">
              <div class="w-full px-4 md:w-1/3 lg:w-1/3">
                 <div class="flex justify-center my-1">
                    <p class="text-base text-gray-7">&copy; 2025 Avalon House. All Rights Reserved.</p>
                 </div>
              </div>
              <div class="w-full px-4 md:w-1/3 lg:w-1/3">
                <div class="flex justify-center my-1 space-x-3">
                    <img src="{{ asset('/images/paypal.png') }}" alt="">
                    <img src="{{ asset('/images/visa.png') }}" alt="">
                    <img src="{{ asset('/images/mastercard.png') }}" alt="">
                    <img src="{{ asset('/images/american.png') }}" alt="">
                    <img src="{{ asset('/images/discover.png') }}" alt="">
                </div>
             </div>
             <div class="w-full px-4 md:w-1/3 lg:w-1/3">
                <div class="flex justify-center space-x-3">
                    <h2 class="text-white">Follow us: </h2>
                    <img src="{{ asset('/images/facebook.png') }}" alt="">
                    <img src="{{ asset('/images/twitter.png') }}" alt="">
                    <img src="{{ asset('/images/instagram.png') }}" alt="">
                    <img src="{{ asset('/images/linkedin.png') }}" alt="">
                </div>
             </div>
              
           </div>
        </div>
     </div>
</section>



@endsection