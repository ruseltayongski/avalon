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
      background-size: 100% 100%;
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

   .error-promo {
      border-color:#e7a49b;
      color:red;
   }

   .error-promo:active {
      border-color: red;
   }

   .error-promo:focus {
      border-color: red;
   }

   .success-promo {
      border-color:rgb(43, 187, 43);
      color:green;
   }

   .success-promo:active {
      border-color: green;
   }

   .success-promo:focus {
      border-color: green;
   }
</style>

@endsection

@extends('layouts.app')

@section('content')

<div
    x-data="{ isMobile: window.innerWidth <= 1024 }"
    x-init="() => {
        window.addEventListener('resize', () => {
            isMobile = window.innerWidth <= 1024;
        });
    }"
    :class="{ 'relative z-10 bg-cover bg-center bg-no-repeat pt-[120px] pb-20 md:pt-[150px]': isMobile, 'z-10 relative bacground-image-hero': !isMobile }"
    :style="isMobile ? 'background-image: url({{ asset('/images/v2crop.png') }})' : ''">

</div>

<section class="relative z-40 py-10 lg:py-[40px] dark:bg-[#011523]"  x-data="{ isMobile: window.innerWidth <= 600 }"
   x-init="() => {
   window.addEventListener('resize', () => {
      isMobile = window.innerWidth <= 600;
   });

   function updateValue(input) {
      let sanitizedValue = input.value.replace(/[^0-9.,]/g, '');
      sanitizedValue = sanitizedValue.replace(/([.,])+/g, '$1');
      input.value = sanitizedValue;
   }

   window.updateValue = updateValue;
}">
   <div class="absolute top-0 left-0 z-[-1] h-1/2 w-full bg-[#011523] dark:bg-dark-3"></div>
   <div class="container mx-auto">
      <div class="flex flex-wrap {{-- -mx-4 --}}"
            :class="{ '-mx-4': isMobile, 'mx-auto': !isMobile }"   
            x-data="{ 
               checkout: JSON.parse(decodeURIComponent(new URL(window.location.href).searchParams.get('carts'))),
               checkPromoCodeExist: []
            }"
      >
         <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
            <div class="mb-12 lg:mb-0">
               <h3
                  class="mb-8 text-lg font-semibold text-white dark:text-white sm:leading-[40px] sm:text-[28px]
                  {{-- animate-fade-down animate-duration-1000 animate-delay-500 --}}
                  animate-trigger-checkout
                  "
                  >
                  Payment Information
               </h3>
               <div
                  class="mb-10 overflow-hidden rounded-[10px] {{-- border border-stroke dark:border-dark-3 --}}
                   bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark py-10 px-6 sm:px-10
                    animate-trigger-checkout
                   "
                  >
                  <h4
                     class="mb-8 text-lg font-semibold text-dark dark:text-white"
                     >
                     Personal Details
                  </h4>
                  <div x-data="{ 
                        cartNotification: false,
                        totalAmount: '',
                        addPromoCode() { this.promoCodes.push(''); },
                        promoCodes: ['', ''],
                        async checkPromo(apiUrl) {
                           try {
                              const response = await fetch(apiUrl);
                              return response.json()
                           } catch (error) { 
                              console.log(error)
                           }
                        },
                        keyupTimeout: 0,
                        async clearIfDuplicatePromo(index) {
                           clearTimeout(this.keyupTimeout);
                           this.keyupTimeout = setTimeout(async () => {
                              const value = this.promoCodes[index];
                              if(value) {
                                 const checkPromo = await this.checkPromo('/check/promo/'+value);
                                 if (this.promoCodes.filter(code => code === value).length > 1) {
                                    this.promoCodes[index] = '';
                                 }
                                 else if(checkPromo.result) {
                                    this.checkPromoCodeExist[index] = checkPromo.discount / 100;
                                 }
                                 else {
                                    this.checkPromoCodeExist[index] = 0;
                                 }
                              }
                              else {
                                 this.checkPromoCodeExist[index] = 0;
                              }
                              console.log(this.checkPromoCodeExist)
                           }, 500);
                        }
                     }">
                     <form method="POST" action="{{ route('stripe.session') }}" class="pb-4 mb-10 border-b border-stroke dark:border-dark-3 animate-fade-right animate-duration-1000 animate-delay-500">
                        @csrf
                        <input type="hidden" name="checkout" :value="decodeURIComponent(new URL(window.location.href).searchParams.get('carts'))">
                        <input
                           type="hidden"
                           x-model="checkout.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0)"
                           class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                           name="subtotal"
                        />
                        <input
                           type="hidden"
                           x-model="checkPromoCodeExist.reduce((accumulator, currentValue) => { return accumulator + currentValue; }, 0)"
                           class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                           name="discount"
                        />
                        <input
                           type="hidden"
                           x-model="(() => checkout.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0) - checkPromoCodeExist.reduce((accumulator, currentValue) => { return accumulator + currentValue; }, 0))()"
                           class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                           name="total_amount"
                        />
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
                                    type="email"
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

                           <div class="w-full px-4">
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
                                          Full
                                       </option>
                                       <option value="uk" class="dark:bg-dark-2">
                                          Plan
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
                           {{-- <div class="w-full px-4 md:w-1/2">
                              <div class="mb-5">
                                 <label
                                    for=""
                                    class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                                    >
                                 Total Amount to be Processed<span class="text-red">*</span>
                                 </label>
                                 <input
                                    type="text"
                                    oninput="updateValue(this)"
                                    x-model="checkout.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0).toLocaleString()"
                                    pattern="[0-9,]*"
                                    class="w-full rounded-md bg-transparent border border-stroke dark:border-dark-3 py-3 px-5 text-body-color dark:text-dark-5 placeholder:text-dark-5 outline-none transition focus:border-[#011523] active:border-[#011523] disabled:cursor-default disabled:bg-[#F5F7FD]"
                                    name="totalAmount"
                                    />
                              </div>
                           </div> --}}
                           <div class="w-full px-4">
                              <div class="mb-5">
                                 <label for="" class="mb-2.5 block text-base font-medium text-dark dark:text-white">
                                 Promo Code
                                 </label>
                              </div>
                           </div>
                           <template x-for="(promoCode, index) in promoCodes" :key="index">
                              <div class="w-full px-4 md:w-1/2">
                                 <div class="mb-5">
                                    <div class="relative flex items-center"> <!-- Relative container -->
                                       <input
                                           type="text"
                                           class="border w-full rounded-md bg-transparent py-3 pl-5 pr-8 dark:text-dark-5 placeholder:text-dark-5 outline-none transition disabled:cursor-default" 
                                           :class="{ 
                                               'focus:border-[#011523] active:border-[#011523]': !promoCodes[index],
                                               'error-promo': !checkPromoCodeExist[index] && promoCodes[index], 
                                               'success-promo': checkPromoCodeExist[index] 
                                           }"
                                           {{-- x-model="(() => promoCodes.length - 1 + '-' + index)()" --}}
                                           x-model="promoCodes[index]"
                                           :id="'promoInput-' + index"
                                           name="promoCode[]"
                                           @input="clearIfDuplicatePromo(index)"
                                       />
                                       <svg 
                                          width="30"
                                          height="30"
                                          viewBox="0 0 30 20"
                                          version="1.1" 
                                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                                          class="absolute right-0 cursor-pointer"
                                          @click="addPromoCode"
                                          x-show="promoCodes.length - 1 === index"
                                          >
                                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Add more promo code</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-179.000000, -600.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M137.7,450 C137.7,450.552 137.2296,451 136.65,451 L134.55,451 L134.55,453 C134.55,453.552 134.0796,454 133.5,454 C132.9204,454 132.45,453.552 132.45,453 L132.45,451 L130.35,451 C129.7704,451 129.3,450.552 129.3,450 C129.3,449.448 129.7704,449 130.35,449 L132.45,449 L132.45,447 C132.45,446.448 132.9204,446 133.5,446 C134.0796,446 134.55,446.448 134.55,447 L134.55,449 L136.65,449 C137.2296,449 137.7,449.448 137.7,450 M133.5,458 C128.86845,458 125.1,454.411 125.1,450 C125.1,445.589 128.86845,442 133.5,442 C138.13155,442 141.9,445.589 141.9,450 C141.9,454.411 138.13155,458 133.5,458 M133.5,440 C127.70085,440 123,444.477 123,450 C123,455.523 127.70085,460 133.5,460 C139.29915,460 144,455.523 144,450 C144,444.477 139.29915,440 133.5,440" id="plus_circle-[#1427]"> 
                                          </path> </g> </g> </g> </g>
                                       </svg>
                                 </div>
                                 <small class="text-red" x-show="!checkPromoCodeExist[index] && promoCodes[index]">Promo code does not exist</small>   
                              </div>
                           </template>
                           {{-- <div class="relative mr-9 hidden w-full max-w-[250px] lg:block">
                              <input
                                 type="text"
                                 placeholder="Search..."
                                 class="w-full rounded-full border border-stroke dark:border-dark-3 bg-gray-2 dark:bg-dark py-[6px] pl-[18px] pr-8 text-sm text-body-color dark:text-dark-6 outline-none focus:border-primary"
                                 />
                              <button
                                 class="absolute -translate-y-1/2 right-3 top-1/2 text-body-color dark:text-dark-6"
                                 >
                                 <svg
                                    width="14"
                                    height="14"
                                    viewBox="0 0 14 14"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="fill-current"
                                    >
                                    <g clip-path="url(#clip0_1050_7313)">
                                       <path
                                          d="M13.4313 12.1844L9.82188 9.25311C11.3094 7.21874 11.1563 4.30936 9.29688 2.47186C8.31251 1.48749 7.00001 0.940613 5.60001 0.940613C4.20001 0.940613 2.88751 1.48749 1.90313 2.47186C-0.131244 4.50624 -0.131244 7.83124 1.90313 9.86561C2.88751 10.85 4.20001 11.3969 5.60001 11.3969C6.93438 11.3969 8.18126 10.8937 9.16563 9.99686L12.8188 12.95C12.9063 13.0156 13.0156 13.0594 13.125 13.0594C13.2781 13.0594 13.4094 12.9937 13.4969 12.8844C13.6719 12.6656 13.65 12.3594 13.4313 12.1844ZM5.60001 10.4125C4.46251 10.4125 3.41251 9.97499 2.60313 9.16561C0.940631 7.50311 0.940631 4.81249 2.60313 3.17186C3.41251 2.36249 4.46251 1.92499 5.60001 1.92499C6.73751 1.92499 7.78751 2.36249 8.59688 3.17186C10.2594 4.83436 10.2594 7.52499 8.59688 9.16561C7.80938 9.97499 6.73751 10.4125 5.60001 10.4125Z"
                                          />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_1050_7313">
                                          <rect width="14" height="14" fill="white" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </button>
                           </div> --}}
                        </div>
                        <button
                           class="flex items-center justify-center w-1/2 px-10 py-3 text-base font-medium text-center text-white rounded-md bg-[#011523] hover:bg-[#011523]/90"
                           :class="{ 'w-full': isMobile, 'w-1/2': !isMobile }"   
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
              {{--  animate-fade-down animate-duration-1000 animate-delay-500 --}} animate-trigger-checkout 
                  "
                  :class="{ 'text-dark': isMobile, 'text-white': !isMobile}">
                  Services Summary
               </h3>
              
               <div class="mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark py-10 px-6 sm:px-10 animate-trigger-checkout">
                  <template x-if="checkout && checkout.length > 0">
                     <template x-for="(cart, index) in checkout" :key="index">
                        <div class="flex items-center mb-9">
                           <div class="mr-6 h-[90px] w-full max-w-[80px] overflow-hidden rounded-lg sm:h-[110px] sm:max-w-[100px] border border-stroke dark:border-dark-3">
                              <img x-bind:src="'fileupload/services/'+cart.picture" alt="product" class="object-cover object-center w-full h-full" />
                           </div>
                           <div class="w-full">
                              <p class="mb-[6px] text-base font-medium text-dark dark:text-white" x-text="cart.title"></p>
                              <p class="text-sm font-medium text-body-color dark:text-dark-6" x-text="'$' + (parseFloat(cart.price).toLocaleString())"></p>
                           </div>
                        </div>
                        
                     </template>
                  </template>
                  <div class="pt-5 border-t border-stroke dark:border-dark-3">
                     <p class="flex items-center justify-between mb-6 text-base text-dark dark:text-white">
                        Sub Total:
                        <span x-text="!checkout || checkout.length === 0 ? '' : '$' + checkout.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0).toLocaleString()">
                        </span> 
                     </p>
                  </div>
                  <div class="pt-5 border-t border-stroke dark:border-dark-3">
                     <p class="flex items-center justify-between mb-6 text-base text-dark dark:text-white">
                        Discount:
                        <span x-text="'$'+checkPromoCodeExist.reduce((accumulator, currentValue) => { return accumulator + currentValue; }, 0).toLocaleString()"></span>
                     </p>
                  </div>
                  <div class="pt-5 border-t border-stroke dark:border-dark-3">
                     <p class="flex items-center justify-between mb-6 text-base text-dark dark:text-white">
                        Total Amount:
                        <span x-text="!checkout || checkout.length === 0 ? '' : '$'+(checkout.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0) - checkPromoCodeExist.reduce((accumulator, currentValue) => { return accumulator + currentValue; }, 0)).toLocaleString()">
                        </span>
                     </p>
                  </div>
                  <template x-if="!checkout || checkout.length === 0">
                     <p class="text-dark">No items have been added to the cart.</p>
                  </template>
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