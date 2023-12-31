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

<section class="relative z-40 py-10 lg:py-[40px] dark:bg-[#011523]"  x-data="{ isMobile: window.innerWidth <= 600 }"
x-init="() => {
   window.addEventListener('resize', () => {
      isMobile = window.innerWidth <= 600;
      console.log(window.innerWidth);
   });
}">
   <div class="absolute top-0 left-0 z-[-1] h-1/2 w-full bg-[#011523] dark:bg-dark-3"></div>
   <div class="container mx-auto">
      <div class="flex flex-wrap {{-- -mx-4 --}}"
            :class="{ '-mx-4': isMobile, 'mx-auto': !isMobile }"   
            x-data="{ checkout: JSON.parse(decodeURIComponent(new URL(window.location.href).searchParams.get('carts'))) }"
      >
         <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
            <div class="mb-12 lg:mb-0">
               <h3
                  class="mb-8 text-lg font-semibold text-white dark:text-white sm:leading-[40px] sm:text-[28px]
                  animate-fade-down animate-duration-1000 animate-delay-500
                  "
                  >
                  Payment Information
               </h3>
               <div
                  class="mb-10 overflow-hidden rounded-[10px] {{-- border border-stroke dark:border-dark-3 --}}
                   bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark py-10 px-6 sm:px-10
                  
                   "
                  >
                  <h4
                     class="mb-8 text-lg font-semibold text-dark dark:text-white"
                     >
                     Personal Details
                  </h4>
                  <div x-data="{ 
                        cartNotification: false,
                        formData: {
                        fullName: '',
                        email1: '',
                        email2: '',
                        billingAddress: '',
                        country: '',
                        city: '',
                        postCode: '',
                        typeOfPayment: '',
                        totalAmount: ''
                        },
                        
                     }">
                     <form method="POST" action="{{ route('stripe.session') }}" class="pb-4 mb-10 border-b border-stroke dark:border-dark-3 animate-fade-right animate-duration-1000 animate-delay-500">
                        @csrf
                        <input type="hidden" name="checkout" :value="decodeURIComponent(new URL(window.location.href).searchParams.get('carts'))">
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
                                    placeholder="Full Name"
                                    name="fullName"
                                    class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                                    required
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
                                    name="email1"
                                    required
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
                                    name="email2"
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
                                    placeholder="Biiling Address"
                                    name="billingAddress"
                                    required
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
                                    name="country"
                                    required
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
                                    name="city"
                                    required
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
                                    name="postCode"
                                    required
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
                                       name="typeOfPayment"
                                       class="w-full appearance-none bg-transparent rounded-md border border-stroke dark:border-dark-3 py-3 px-5 font-medium text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                                       required
                                       >
                                       <option value="" disabled selected hidden> Select Payment Type
                                       <option value="gcash" class="dark:bg-dark-2">
                                          Thru Gcash
                                       </option>
                                       <option value="uk" class="dark:bg-dark-2">
                                          United Kingdom
                                       </option>
                                       <option value="canada" class="dark:bg-dark-2">
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
                                    type="text"
                                    :value="'$'+checkout.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0).toLocaleString()"
                                    class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                                    disabled
                                    />
                              </div>
                           </div>
                        </div>
                        <button {{-- @click="cartNotification = true" --}} 
                           class="flex items-center justify-center w-1/3 px-10 py-3 text-base font-medium text-center text-white rounded-md bg-[#011523] hover:bg-[#011523]/90"
                           :class="{ 'w-full': isMobile, 'w-1/3': !isMobile }"   
                           {{-- x-on:click="submit" --}}
                           type="submit"
                           >
                           Pay Now
                        </button>
                        <div x-show="cartNotification"
                           class="fixed z-[60] w-full lg:w-[30%] bottom-20 flex items-center rounded-lg border border-green-light-4 dark:border-green bg-white dark:bg-dark-2 p-5">
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
                              <button class="text-dark-5 dark:text-dark-6 hover:text-green" @click="cartNotification = false" type="button">
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
                     </form>
                  </div>
                  {{-- <script>
                     function submit() {
                        fetch("/stripe/session", {
                           method: "POST",
                           headers: {
                              "Content-Type": "application/json",
                              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                           },
                           //body: JSON.stringify(this.formData),
                        })
                        .then(response => response.json())
                        .then(data => {
                           /* this.cartNotification = true; */
                           console.log("Form submitted successfully:", data);
            
                        })
                        .catch(error => {
                           console.error("Error submitting form:", error);
                           // Handle the error and update your UI accordingly
                        });
                     }
                  </script> --}}
               </div>
            </div>
         </div>
         <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
            <div>
               <h3 class="mb-8 text-xl font-semibold text-white dark:text-white sm:leading-[40px] sm:text-[28px]
               animate-fade-down animate-duration-1000 animate-delay-500
                  ">
                  Services Summary
               </h3>
              
               <div class="mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark py-10 px-6 sm:px-10">
                  <template x-for="(cart, index) in checkout" :key="index">
                     <div class="flex items-center mb-9">
                        <div
                           class="mr-6 h-[90px] w-full max-w-[80px] overflow-hidden rounded-lg sm:h-[110px] sm:max-w-[100px] border border-stroke dark:border-dark-3">
                           <img
                              x-bind:src="'fileupload/services/'+cart.picture"
                              alt="product"
                              class="object-cover object-center w-full h-full"
                              />
                        </div>
                        <div class="w-full">
                           <p class="mb-[6px] text-base font-medium text-dark dark:text-white" x-text="cart.title"></p>
                           <p class="text-sm font-medium text-body-color dark:text-dark-6" x-text="'$' + (parseFloat(cart.price).toLocaleString())"></span>
                        </div>
                     </div>
                  </template>
                  <div class="pt-5 border-t border-stroke dark:border-dark-3">
                     <p class="flex items-center justify-between mb-6 text-base text-dark dark:text-white">
                        <span x-text="'Total Amount: $'+checkout.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0).toLocaleString()"></span>
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

         <h2 class="text-3xl text-white font-semibold opacity-0 join"
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
@endsection

@section('js')
<script>
   document.addEventListener("DOMContentLoaded", function() {
      var elementIds = [
               "join",
               "signUp",
               "subscribe",
               "footerSection"
            ];
      var animationClasses = {
         join: "animate-fade-up",
         signUp: "animate-fade-up",
         subscribe: "animate-fade-up",
         footerSection: "animate-fade-right",
      };
      var animationDelays = {
         join: 100,
         signUp: 500,
         subscribe: 700,
         feelFree: 900,
         footerLocation: 1200,
         footerHelp: 1500
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