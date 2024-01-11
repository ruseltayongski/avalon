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
        <div class="absolute top-0 left-0 z-[-1] h-auto w-full bg-[#011523] {{-- dark:bg-dark-3 --}} pt-10 pb-20">
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

    <section x-data="{ showCards: new URLSearchParams(window.location.search).get('category') ? 
        new URLSearchParams(window.location.search).get('category')  : 'all', 
        activeClasses: 'bg-[#011523] text-white dark:bg-white dark:text-dark', 
        inactiveClasses: 'text-body-color hover:bg-[#011523]/80 hover:text-white',
        }" 
        class="pt-[200px] pb-12 lg:pt-[140px] lg:pb-[90px] dark:bg-[#011523]">
        <div class="container mx-auto" x-data='{ services: @json($services) }'>
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
                x-data='{  modalShow: false, capitalizeFirstChar: function(str) { return str.charAt(0).toUpperCase() + str.slice(1); },
                    modalOpen: false, serviceId: 0, serviceCategory: "", servicePicture: "", serviceAlone: {},
                    cartNotification: false
                }'
                x-init="() => {
                    setTimeout(() => cartNotification = false, 15000)
                }   
                " >
                <template x-for="service in services" :key="service.id">
                    <div x-show="showCards === 'all' || showCards === service.category" class="w-full lg:px-4 md:w-1/2 xl:w-1/3 services-section" id="services{{ $services }}">
                        <div class="relative mb-12">
                            <div class="overflow-hidden rounded-lg">
                                <img
                                    x-bind:src="'fileupload/services/'+service.picture"
                                    alt="portfolio"
                                    class="w-full"
                                />
                            </div>
                            <div class="relative mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg dark:bg-dark-2">
                                <span class="mb-2 block text-sm font-semibold text-[#011523] dark:text-white" x-text="capitalizeFirstChar(service.category)"></span>
                                <h3 class="mb-4 text-xl font-bold text-dark dark:text-white" x-text="service.title"></h3>
                                <button type="button" @click="modalOpen = true, serviceCategory = service.category, servicePicture = service.picture, serviceId = service.id, serviceAlone = service" 
                                    class="
                                    inline-block rounded-md border py-3 px-7 text-sm font-normal text-body-color transition hover:border-[#011523] 
                                    hover:bg-[#011523] hover:text-white dark:text-white dark:hover:border-white dark:hover:bg-white dark:hover:text-dark
                                    ">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
                <div x-show="modalOpen" class="bg-[#000000] dark:bg-dark-2 bg-opacity-20 fixed z-50 top-0 left-0 flex items-center 
                    justify-center w-full h-screen overflow-y-scroll">
                    <div @click.outside="modalOpen = false" class="relative mx-auto max-w-[660px]
                    bg-white dark:bg-dark-2 shadow-1 dark:shadow-3 h-[95vh]">
                        <div class="p-8 bg-white dark:bg-dark-2 rounded-[10px] ">
                            <button @click="modalOpen = false" class="bg-red p-1 absolute right-5 top-5 rounded-[5px] text-white dark:text-dark-6">
                                <svg 
                                    width="20" 
                                    height="20" 
                                    viewBox="0 0 20 20" 
                                    fill="none" 
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="fill-current dark:fill-white"
                                    >
                                    <path 
                                    d="M11 10L18.625 2.375C18.9062 2.09375 18.9062 1.65625 18.625 1.375C18.3438 1.09375 17.9063 1.09375 17.625 1.375L10 9L2.375 1.375C2.09375 1.09375 1.65625 1.09375 1.375 1.375C1.09375 1.65625 1.09375 2.09375 1.375 2.375L9 10L1.375 17.625C1.09375 17.9063 1.09375 18.3438 1.375 18.625C1.5 18.75 1.6875 18.8438 1.875 18.8438C2.0625 18.8438 2.25 18.7812 2.375 18.625L10 11L17.625 18.625C17.75 18.75 17.9375 18.8438 18.125 18.8438C18.3125 18.8438 18.5 18.7812 18.625 18.625C18.9062 18.3438 18.9062 17.9063 18.625 17.625L11 10Z" 
                                    />
                                </svg>
                            </button>
                            <div class="w-full mb-6 overflow-hidden rounded-md bg-white">
                                <img
                                    x-bind:src="servicePicture ? 'fileupload/services/'+servicePicture : ''"
                                    alt="card image"
                                    class="object-cover object-center w-full"
                                    style="height: 50vh;"
                                   />
                            </div>
                            <h3 class="flex mb-5 text-lg font-semibold text-dark dark:text-white sm:text-xl xl:text-[24px]" x-text="capitalizeFirstChar(serviceCategory)"></h3>
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
                </div>
                <div x-show="cartNotification" class="fixed z-[60] w-full lg:w-[30%] 2xl:w-[25%] top-5 left-0 right-0 flex items-center rounded-lg border border-green-light-4 dark:border-green bg-white dark:bg-dark-2 p-5">
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

            <div class=" overflow-x-auto" x-data='{ totalPages: {{ $totalPages }}, currentPage: {{ $page }} }'>
                <div class="inline-flex p-3 mb-6 bg-white rounded dark:bg-dark-2 shadow-1 dark:shadow-3">
                    <ul class="-mx-[6px] flex items-center">
                        <li class="px-[6px]">
                            <a href="javascript:void(0)"
                                x-bind:href="currentPage > 1 ? `{{ route('services', ['page' => '']) }}${currentPage - 1}` : 'javascript:void(0)'"
                               class="text-dark dark:text-white dark:hover:bg-white/5 flex h-6 items-center justify-center rounded px-3 text-xs hover:bg-[#EDEFF1]">
                                <span class="mr-1">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 6.0875H2.49375L5.68125 2.84375C5.85 2.675 5.85 2.4125 5.68125 2.24375C5.5125 2.075 5.25 2.075 5.08125 2.24375L1.2 6.18125C1.03125 6.35 1.03125 6.6125 1.2 6.78125L5.08125 10.7188C5.15625 10.7937 5.26875 10.85 5.38125 10.85C5.49375 10.85 5.5875 10.8125 5.68125 10.7375C5.85 10.5687 5.85 10.3063 5.68125 10.1375L2.5125 6.93125H10.5C10.725 6.93125 10.9125 6.74375 10.9125 6.51875C10.9125 6.275 10.725 6.0875 10.5 6.0875Z" fill="currentColor" />
                                    </svg>
                                </span>
                                Previous
                            </a>
                        </li>
            
                        <!-- Display page numbers with ellipses -->
                        <template x-for="pageNumber in Array.from({ length: totalPages }, (_, i) => i + 1)">
                            <template x-if="pageNumber === 1 || pageNumber === totalPages || (pageNumber >= currentPage - 2 && pageNumber <= currentPage + 2)">
                                <li class="px-[6px]">
                                    <a href="javascript:void(0)"
                                       x-bind:href="currentPage !== pageNumber ? `{{ route('services', ['page' => '']) }}${pageNumber}` : 'javascript:void(0)'"
                                       x-bind:class="{ 'bg-[#EDEFF1] dark:text-dark': currentPage === pageNumber }"
                                       class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white">
                                        <span x-text="pageNumber"></span>
                                    </a>
                                </li>
                            </template>
                        </template>
            
                        <li class="px-[6px]">
                            <a href="javascript:void(0)"
                                x-bind:href="currentPage < totalPages ? `{{ route('services', ['page' => '']) }}${currentPage + 1}` : 'javascript:void(0)'"
                                class="text-dark dark:text-white dark:hover:bg-white/5 flex h-6 items-center justify-center rounded px-3 text-xs hover:bg-[#EDEFF1]">
                                Next
                                <span class="ml-1">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8 6.2L6.91875 2.2625C6.75 2.09375 6.4875 2.09375 6.31875 2.2625C6.15 2.43125 6.15 2.69375 6.31875 2.8625L9.46875 6.06875H1.5C1.275 6.06875 1.0875 6.25625 1.0875 6.48125C1.0875 6.70625 1.275 6.9125 1.5 6.9125H9.50625L6.31875 10.1563C6.15 10.325 6.15 10.5875 6.31875 10.7563C6.39375 10.8313 6.50625 10.8688 6.61875 10.8688C6.73125 10.8688 6.84375 10.8313 6.91875 10.7375L10.8 6.8C10.9688 6.63125 10.9688 6.36875 10.8 6.2Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            {{-- <div class="text-center" x-data='{ totalPages: {{ $totalPages }}, currentPage: {{ $page }} }'>
                <div class="inline-flex p-3 mb-12 bg-white rounded dark:bg-dark-2 shadow-1 dark:shadow-3">
                    <ul class="-mx-[6px] flex items-center">
                        <li class="px-[6px]">
                            <a href="javascript:void(0)"
                               class="text-dark dark:text-white dark:hover:bg-white/5 flex h-6 items-center justify-center rounded px-3 text-xs hover:bg-[#EDEFF1]">
                                <span class="mr-1">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 6.0875H2.49375L5.68125 2.84375C5.85 2.675 5.85 2.4125 5.68125 2.24375C5.5125 2.075 5.25 2.075 5.08125 2.24375L1.2 6.18125C1.03125 6.35 1.03125 6.6125 1.2 6.78125L5.08125 10.7188C5.15625 10.7937 5.26875 10.85 5.38125 10.85C5.49375 10.85 5.5875 10.8125 5.68125 10.7375C5.85 10.5687 5.85 10.3063 5.68125 10.1375L2.5125 6.93125H10.5C10.725 6.93125 10.9125 6.74375 10.9125 6.51875C10.9125 6.275 10.725 6.0875 10.5 6.0875Z" fill="currentColor" />
                                    </svg>
                                </span>
                                Previous
                            </a>
                        </li>
            
                        <!-- Display page numbers in a range -->
                        <template x-if="totalPages <= 10">
                            <template x-for="pageNumber in Array.from({ length: totalPages }, (_, i) => i + 1)">
                                <li class="px-[6px]">
                                    <a href="javascript:void(0)"
                                        x-bind:href="currentPage !== pageNumber ? `{{ route('services', ['page' => '']) }}${pageNumber}` : 'javascript:void(0)'"
                                        x-bind:class="{ 'bg-[#EDEFF1] dark:text-white': currentPage === pageNumber }"
                                        class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white">
                                        <span x-text="pageNumber"></span>
                                    </a>
                                </li>
                            </template>
                        </template>
            
                        <!-- Display a range and ellipsis for more than 10 pages -->
                        <template x-if="totalPages > 10">
                            <template x-for="pageNumber in Array.from({ length: 10 }, (_, i) => i + 1)">
                                <li class="px-[6px]">
                                    <a href="javascript:void(0)"
                                        x-bind:href="currentPage !== pageNumber ? `{{ route('services', ['page' => '']) }}${pageNumber}` : 'javascript:void(0)'"
                                        x-bind:class="{ 'bg-[#EDEFF1] dark:text-white': currentPage === pageNumber }"
                                        class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white">
                                        <span x-text="pageNumber"></span>
                                    </a>
                                </li>
                            </template>
                            <li class="px-[6px]">...</li>
                            <li class="px-[6px]">
                                <a href="javascript:void(0)"
                                   x-bind:href="{{ route('services', ['page' => '']) }}<span v-text=' totalPages '>"
                                   x-bind:class="{ 'bg-[#EDEFF1] dark:text-white': currentPage === totalPages }"
                                   class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white">
                                    <span x-text="totalPages"></span>
                                </a>
                            </li>
                        </template>
            
                        <li class="px-[6px]">
                            <a href="javascript:void(0)"
                               class="text-dark dark:text-white dark:hover:bg-white/5 flex h-6 items-center justify-center rounded px-3 text-xs hover:bg-[#EDEFF1]">
                                Next
                                <span class="ml-1">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8 6.2L6.91875 2.2625C6.75 2.09375 6.4875 2.09375 6.31875 2.2625C6.15 2.43125 6.15 2.69375 6.31875 2.8625L9.46875 6.06875H1.5C1.275 6.06875 1.0875 6.25625 1.0875 6.48125C1.0875 6.70625 1.275 6.9125 1.5 6.9125H9.50625L6.31875 10.1563C6.15 10.325 6.15 10.5875 6.31875 10.7563C6.39375 10.8313 6.50625 10.8688 6.61875 10.8688C6.73125 10.8688 6.84375 10.8313 6.91875 10.7375L10.8 6.8C10.9688 6.63125 10.9688 6.36875 10.8 6.2Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}
              
            {{-- <div class="text-center" x-data='{ totalPages: {{ $totalPages }}, currentPage: {{ $page }} }'>
                <div class="inline-flex p-3 mb-12 bg-white rounded dark:bg-dark-2 shadow-1 dark:shadow-3">
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
                        <template x-for="pageNumber in Array.from({ length: totalPages }, (_, i) => i + 1)">
                            <li class="px-[6px]">
                                <a href="javascript:void(0)"
                                    x-bind:href="currentPage !== pageNumber ? `{{ route('services', ['page' => '']) }}${pageNumber}` : 'javascript:void(0)'"
                                    x-bind:class="{ 'bg-[#EDEFF1] dark:text-white': currentPage === pageNumber }"
                                    class="min-w-[24px] flex h-6 px-1 items-center justify-center rounded text-base text-body-color dark:hover:bg-white/5 hover:bg-[#EDEFF1] dark:hover:text-white"
                                >
                                    <span x-text="pageNumber"></span>
                                </a>
                            </li>
                        </template>
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
            </div>    --}}
            {{-- <div class="text-center">
                <div class="inline-flex p-3 mb-12 bg-white rounded dark:bg-dark-2 shadow-1 dark:shadow-3">
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
            </div> --}}
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
@endsection

@section('js')
<script>
 
   document.addEventListener("DOMContentLoaded", function() {
      var servicesData = @json($services);
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

      var servicesElement = [];
      var delayIncrement = 100;
      var marketingDelayIncrement = 101;
     
      for(var i = 0; i < servicesData; i++) {
        servicesElement.push('services', servicesData);
      }

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var animationClass = animationClasses[entry.target.id];
                    var delay = animationDelays[entry.target.id];
                    var delayClass = 'animate-delay-' + (servicesElement.indexOf(entry.target.id) * delayIncrement);
                    setTimeout(() => {
                        entry.target.classList.add(animationClass);
                    }, delay);

                    if(entry.target.classList.contains('services-section')) {
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

        elementIds.concat(servicesElement).forEach(function(elementId) {
            var element = document.getElementById(elementId);
            if (element) {
                observer.observe(element);
            }
        });
    });
</script>

@endsection
