@section('css')
    <style>
        .bacground-image-hero {
            background: url("{{ asset('/images/v2crop.png') }}") no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 100% 100%;
            ;
            height: 20vh;
        }

        .newsletter-bg {
            background: url("{{ asset('/images/newsletter.png') }}") no-repeat center;
            background-size: 100% 100%;
        }

        #cart-badge {
            font-size: 5pt;
            padding: 3px 5px;
            top: 0;
            right: 0;
        }

        .avalon-logo {
            width: 50%;
            height: 50%;
        }
    </style>
@endsection

@extends('layouts.app')

@section('content')
    <div x-data="{ isMobile: window.innerWidth <= 1024 }" x-init="() => {
        window.addEventListener('resize', () => {
            isMobile = window.innerWidth <= 1024;
            console.log(window.innerWidth);
        });
        }"
        :class="{ 'relative z-10 bg-cover bg-center bg-no-repeat pt-[120px] pb-20 md:pt-[150px]': isMobile, 'z-10 relative bacground-image-hero':
                !isMobile }"
        :style="isMobile ? 'background-image: url({{ asset('/images/v2crop.png') }})' : ''">

    </div>

    <section class="relative z-40 py-20 lg:py-[120px] dark:bg-[#011523]">
        <div class="absolute top-0 left-0 z-[-1] h-auto w-full bg-[#011523] dark:bg-dark-3 pt-10 pb-20">
            <div class="container mx-auto">
                <div class="relative overflow-hidden">
                    <div class="-mx-4 flex flex-wrap items-stretch animate-fade-up animate-duration-1000 animate-delay-500">
                        <div class="w-full px-4">
                            <div class="mx-auto max-w-[570px] text-center">
                                <p class="text-2xl text-white pb-5 pt-3 opacity-90">Our Services</p>
                                <h2 class="mb-2.5 text-xl font-bold text-white md:text-[32px] md:leading-[1.44]">
                                    <span class="block text-3xl md:text-[38px] pb-3">What We Offer</span>
                                </h2>
                                <p class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white opacity-90">
                                    There are many variations of passages of Lorem Ipsum but the majority have suffered in
                                    some form.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section x-data="{ showCards: 'all', activeClasses: 'bg-[#011523] text-white', inactiveClasses: 'text-body-color hover:bg-[#011523]/80 hover:text-white'}" 
        class="pt-[200px] pb-12 lg:pt-[140px] lg:pb-[90px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <ul class="mb-12 flex flex-wrap justify-center space-y-1 space-x-1 lg:space-x-3">
                        <li>
                            <button @click="showCards = 'all' "
                                :class="showCards == 'all' ? activeClasses : inactiveClasses"
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                                All Projects
                            </button>
                        </li>
                        <li>
                            <button @click="showCards = 'branding' "
                                :class="showCards == 'branding' ? activeClasses : inactiveClasses"
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                                Branding
                            </button>
                        </li>
                        <li>
                            <button @click="showCards = 'design' "
                                :class="showCards == 'design' ? activeClasses : inactiveClasses"
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                                Design
                            </button>
                        </li>
                        <li>
                            <button @click="showCards = 'marketing' "
                                :class="showCards == 'marketing' ? activeClasses : inactiveClasses"
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                                Marketing
                            </button>
                        </li>
                        <li>
                            <button @click="showCards = 'development' "
                                :class="showCards == 'development' ? activeClasses : inactiveClasses"
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                                Development
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lg:px-12 flex flex-wrap " 
                x-data='{ modalShow: false, services: @json($services), capitalizeFirstChar: function(str) { return str.charAt(0).toUpperCase() + str.slice(1); },
                    modalOpen: false, serviceId: 0, serviceCategory: "", servicePicture: "", serviceAlone: {},
                    cartNotification: false,
                }'
                x-init="() => {
                    setTimeout(() => cartNotification = false, 15000)
                }   
                " >
                <template x-for="service in services" :key="service.id">
                    <div x-show="showCards === 'all' || showCards === service.category" class="w-full lg:px-4 md:w-1/2 xl:w-1/3">
                        <div class="relative mb-12">
                            <div class="overflow-hidden rounded-lg">
                                <img
                                    x-bind:src="'fileupload/services/'+service.picture"
                                    alt="portfolio"
                                    class="w-full"
                                />
                            </div>
                            <div class="relative mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
                                <span class="mb-2 block text-sm font-semibold text-[#011523]" x-text="capitalizeFirstChar(service.category)"></span>
                                <h3 class="mb-4 text-xl font-bold text-dark" x-text="service.title"></h3>
                                <button type="button" @click="modalOpen = true, serviceCategory = service.category, servicePicture = service.picture, serviceId = service.id, serviceAlone = service" 
                                    class="inline-block rounded-md border py-3 px-7 text-sm font-normal text-body-color transition hover:border-[#011523] hover:bg-[#011523] hover:text-white">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
                <div x-show="modalOpen" class="bg-[#000000] bg-opacity-20 fixed z-50 top-0 left-0 flex items-center justify-center w-full h-screen py-10 overflow-y-scroll dark:bg-dark" >
                    <div @click.outside="modalOpen = false" class="relative xl:mt-[400px] 2xl:mt-80 mx-auto max-w-[660px] rounded-[10px] bg-white dark:bg-dark-2 p-8 shadow-1 dark:shadow-3">
                        <button @click=" modalOpen = false" class="bg-red p-1 absolute right-5 top-5 rounded-[5px] text-white dark:text-dark-6">
                            <svg 
                                width="20" 
                                height="20" 
                                viewBox="0 0 20 20" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg"
                                class="fill-current"
                                >
                                <path 
                                d="M11 10L18.625 2.375C18.9062 2.09375 18.9062 1.65625 18.625 1.375C18.3438 1.09375 17.9063 1.09375 17.625 1.375L10 9L2.375 1.375C2.09375 1.09375 1.65625 1.09375 1.375 1.375C1.09375 1.65625 1.09375 2.09375 1.375 2.375L9 10L1.375 17.625C1.09375 17.9063 1.09375 18.3438 1.375 18.625C1.5 18.75 1.6875 18.8438 1.875 18.8438C2.0625 18.8438 2.25 18.7812 2.375 18.625L10 11L17.625 18.625C17.75 18.75 17.9375 18.8438 18.125 18.8438C18.3125 18.8438 18.5 18.7812 18.625 18.625C18.9062 18.3438 18.9062 17.9063 18.625 17.625L11 10Z" 
                                />
                            </svg>
                        </button>
                        <div class="w-full mb-6 overflow-hidden rounded-md">
                            <img
                                x-bind:src="servicePicture ? 'fileupload/services/'+servicePicture : ''"
                                alt="card image"
                                class="object-cover object-center w-full"
                                style="height: 50vh;"
                               />
                        </div>
                        <h3 class="flex mb-5 text-lg font-semibold text-dark dark:text-white sm:text-xl xl:text-[24px]" x-text="capitalizeFirstChar(serviceCategory)">
                        </h3>
                        <p class="text-sm mb-7 dark:text-dark-6 text-body-color" >
                            This is involves the systematic recording, summarizing, and reporting of financial
                            transaction. It includes tasks like bookkeeping , preparation of financial statements
                            (balance sheets, income statements), and ensuring compliance with financial regulations.
                        </p>
                        <p class="text-sm mb-7 dark:text-dark-6 text-body-color" >
                            Financial Accounting is a critical aspect of any business, providing the necessary
                            information to stakeholders about the company's financial health and performance. In
                            addition to the systematic recording, summarizing, and reporting of financial transaction/
                        </p>
                        <h3 class="flex mb-5 text-lg font-semibold text-dark dark:text-white sm:text-xl xl:text-[18px]">
                            Service Features
                        </h3>
                        <p class="text-sm mb-7 dark:text-dark-6 text-body-color leading-8">
                            Book Keeping<br>
                            Preparation of Financial Statement<br>
                            Ensuring Compliance with Financial Regulations<br>
                            Accounts Receivable and Payable Management<br>
                            Financial Analysis and Interpretation<br>
                            Budgeting and Forecasting<br>
                            Inventory Management
                        </p>
                        <input x-model="serviceId" type="hidden" placeholder="Enter task">
                        <div class="flex items-center justify-start space-x-1">
                            <button
                                @click="modalOpen = false, cartNotification = true"
                                class="px-5 py-2 text-sm font-medium text-white rounded-md bg-[#090E34] hover:bg-opacity-90"
                                x-on:click="addCart"
                                >
                                Add to Cart
                            </button>
                            <a
                                :href="'checkout?carts='+encodeURIComponent(JSON.stringify([serviceAlone]));"
                                class="px-5 py-2 text-sm font-medium bg-white rounded-md text-dark shadow-1 dark:shadow-3 hover:text-white hover:bg-red-dark dark:text-white dark:bg-white/5"
                                >
                                Get it Now
                            </a>
                            <script>
                                function addCart() {
                                    fetch("/add/cart", {
                                        method: "POST",
                                        headers: {
                                            "Content-Type": "application/json",
                                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                                        },
                                        body: JSON.stringify({ 
                                            serviceId: this.serviceId
                                        }),
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        console.log(data)
                                        this.carts.push(data)
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div x-show="cartNotification"
                    class="fixed z-[60] w-full lg:w-[30%] 2xl:w-[25%] top-20 right-20 flex items-center rounded-lg border border-green-light-4 dark:border-green bg-white dark:bg-dark-2 p-5">
                    <div
                        class="mr-5 flex h-[60px] w-full max-w-[60px] items-center justify-center rounded-[5px] bg-green"
                        >
                        <svg 
                            width="34" 
                            height="34" 
                            viewBox="0 0 34 34" 
                            fill="none" 
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <g clip-path="url(#clip0_1088_26002)">
                            <path 
                                d="M24.5969 18.7531H9.40312C9.03125 18.7531 8.65937 18.9125 8.44687 19.2313C8.23437 19.55 8.12812 19.9219 8.23437 20.2938C9.35 24.225 12.9625 26.9875 17 26.9875C21.1437 26.9875 24.65 24.3313 25.7656 20.2938C25.8719 19.9219 25.8187 19.55 25.5531 19.2313C25.3406 18.9125 24.9687 18.7531 24.5969 18.7531ZM17 24.5438C14.5562 24.5438 12.3781 23.2156 11.1562 21.1438H22.8437C21.675 23.2156 19.4969 24.5438 17 24.5438Z" 
                                fill="white"
                                />
                            <path 
                                d="M17 0.425003C7.8625 0.425003 0.425003 7.8625 0.425003 17C0.425003 26.1375 7.8625 33.6281 17.0531 33.6281C26.2438 33.6281 33.6813 26.1906 33.6813 17C33.6813 7.80938 26.1375 0.425003 17 0.425003ZM17 31.2375C9.1375 31.2375 2.7625 24.8625 2.7625 17C2.7625 9.1375 9.19063 2.81563 17 2.81563C24.8094 2.81563 31.2375 9.19063 31.2375 17.0531C31.2375 24.9156 24.8625 31.2375 17 31.2375Z" 
                                fill="white"
                                />
                            <path 
                                d="M10.625 14.2375C11.7986 14.2375 12.75 13.2861 12.75 12.1125C12.75 10.9389 11.7986 9.9875 10.625 9.9875C9.45139 9.9875 8.5 10.9389 8.5 12.1125C8.5 13.2861 9.45139 14.2375 10.625 14.2375Z" 
                                fill="white"
                                />
                            <path 
                                d="M23.375 14.2375C24.5486 14.2375 25.5 13.2861 25.5 12.1125C25.5 10.9389 24.5486 9.9875 23.375 9.9875C22.2014 9.9875 21.25 10.9389 21.25 12.1125C21.25 13.2861 22.2014 14.2375 23.375 14.2375Z" 
                                fill="white"
                                />
                            </g>
                            <defs>
                            <clipPath id="clip0_1088_26002">
                                <rect 
                                    width="34" 
                                    height="34" 
                                    fill="white"
                                    />
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <div>
                            <h6 class="text-base font-semibold text-dark dark:text-white sm:text-lg mb-0.5">
                            Success
                            </h6>
                            <p class="text-body-color text-sm dark:text-dark-6">
                            Item added to your cart
                            </p>
                        </div>
                        <button class="text-dark-5 dark:text-dark-6 hover:text-green" @click="cartNotification = false">
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
            <div class="text-center">
               <div
                  class="inline-flex p-3 mb-12 bg-white rounded dark:bg-dark-2 shadow-1 dark:shadow-3"
                  >
                  <ul class="-mx-[6px] flex items-center">
                     <li class="px-[6px]">
                        <a
                           href="javascript:void(0)"
                           class="text-dark dark:text-white dark:hover:bg-white/5 flex h-6 items-center justify-center rounded px-3 text-xs hover:bg-[#EDEFF1]"
                           >
                           <span class="mr-1">
                              <svg
                                 width="12"
                                 height="13"
                                 viewBox="0 0 12 13"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    d="M10.5 6.0875H2.49375L5.68125 2.84375C5.85 2.675 5.85 2.4125 5.68125 2.24375C5.5125 2.075 5.25 2.075 5.08125 2.24375L1.2 6.18125C1.03125 6.35 1.03125 6.6125 1.2 6.78125L5.08125 10.7188C5.15625 10.7937 5.26875 10.85 5.38125 10.85C5.49375 10.85 5.5875 10.8125 5.68125 10.7375C5.85 10.5687 5.85 10.3063 5.68125 10.1375L2.5125 6.93125H10.5C10.725 6.93125 10.9125 6.74375 10.9125 6.51875C10.9125 6.275 10.725 6.0875 10.5 6.0875Z"
                                    fill="currentColor"
                                    />
                              </svg>
                           </span>
                           Previous
                        </a>
                     </li>
                     <li class="px-[6px]">
                        <a
                           href="javascript:void(0)"
                           class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white"
                           >
                        1
                        </a>
                     </li>
                     <li class="px-[6px]">
                        <a
                           href="javascript:void(0)"
                           class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white"
                           >
                        2
                        </a>
                     </li>
                     <li class="px-[6px]">
                        <a
                           href="javascript:void(0)"
                           class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white"
                           >
                        3
                        </a>
                     </li>
                     <li class="px-[6px]">
                        <a
                           href="javascript:void(0)"
                           class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white"
                           >
                        4
                        </a>
                     </li>
                     <li class="px-[6px]">
                        <a
                           href="javascript:void(0)"
                           class="text-dark dark:text-white dark:hover:bg-white/5 flex h-6 items-center justify-center rounded px-3 text-xs hover:bg-[#EDEFF1]"
                           >
                           Next
                           <span class="ml-1">
                              <svg
                                 width="12"
                                 height="13"
                                 viewBox="0 0 12 13"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    d="M10.8 6.2L6.91875 2.2625C6.75 2.09375 6.4875 2.09375 6.31875 2.2625C6.15 2.43125 6.15 2.69375 6.31875 2.8625L9.46875 6.06875H1.5C1.275 6.06875 1.0875 6.25625 1.0875 6.48125C1.0875 6.70625 1.275 6.9125 1.5 6.9125H9.50625L6.31875 10.1563C6.15 10.325 6.15 10.5875 6.31875 10.7563C6.39375 10.8313 6.50625 10.8688 6.61875 10.8688C6.73125 10.8688 6.84375 10.8313 6.91875 10.7375L10.8 6.8C10.9688 6.63125 10.9688 6.36875 10.8 6.2Z"
                                    fill="currentColor"
                                    />
                              </svg>
                           </span>
                        </a>
                     </li>
                  </ul>
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

            <form action="#" method="post" class="mt-4 space-x-2 opacity-0 pb-3" id="signUp">
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
                   id="feelFree"
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
    <div class="py-1 border-t border-stroke dark:border-dark-3 bg-[#011523]">
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
