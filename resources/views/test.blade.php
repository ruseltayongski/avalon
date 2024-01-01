@section('css')
    
@endsection

@extends('layouts.app')

@section('content')

<!-- ====== Products Carousel Section Start -->
{{-- <section class="bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
       <div
          x-data="
          {
          slides: ['1','2','3','4'],
          activeSlide: 0
          }
          "
          >
          <div class="relative flex justify-center">
             <div class="relative w-full pb-16">
                <div
                   class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] pb-5"
                   x-ref="carousel"
                   >
                   @for($i = 0; $i < 4; $i++)
                   <div class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[350px] lg:min-w-[465px] xl:min-w-[370px] 2xl:min-w-[430px]">
                      <div
                         class="overflow-hidden rounded-lg bg-white dark:bg-dark-2 shadow-1 dark:shadow-box-dark"
                         >
                         <div>
                            <img
                               src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/products/product-carousel-05/image-01.jpg"
                               alt="product"
                               class="w-full"
                               />
                         </div>
                         <div class="p-6">
                            <a
                               href="javascript:void(0)"
                               class="mb-3 block text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl lg:text-lg xl:text-xl"
                               >
                            Apple Watch Series 7
                            </a>
                            <p class="text-base text-body-color dark:text-dark-6">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit
                               enim luctus et lorem.
                            </p>
                         </div>
                         <div class="flex justify-between border-t border-stroke dark:border-dark-3">
                            <div
                               class="flex gap-1 items-center py-4 px-3 xs:px-4 lg:px-3 xl:px-6"
                               >
                               <span>
                                  <svg 
                                     width="16" 
                                     height="16" 
                                     viewBox="0 0 16 16" 
                                     fill="none" 
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <g clip-path="url(#clip0_1818_1215)">
                                        <path 
                                           d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                           />
                                     </g>
                                     <defs>
                                        <clipPath id="clip0_1818_1215">
                                           <rect 
                                              width="16" 
                                              height="16" 
                                              fill="white"
                                              />
                                        </clipPath>
                                     </defs>
                                  </svg>
                               </span>
                               <span>
                                  <svg 
                                     width="16" 
                                     height="16" 
                                     viewBox="0 0 16 16" 
                                     fill="none" 
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <g clip-path="url(#clip0_1818_1215)">
                                        <path 
                                           d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                           />
                                     </g>
                                     <defs>
                                        <clipPath id="clip0_1818_1215">
                                           <rect 
                                              width="16" 
                                              height="16" 
                                              fill="white"
                                              />
                                        </clipPath>
                                     </defs>
                                  </svg>
                               </span>
                               <span>
                                  <svg 
                                     width="16" 
                                     height="16" 
                                     viewBox="0 0 16 16" 
                                     fill="none" 
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <g clip-path="url(#clip0_1818_1215)">
                                        <path 
                                           d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                           />
                                     </g>
                                     <defs>
                                        <clipPath id="clip0_1818_1215">
                                           <rect 
                                              width="16" 
                                              height="16" 
                                              fill="white"
                                              />
                                        </clipPath>
                                     </defs>
                                  </svg>
                               </span>
                               <span>
                                  <svg 
                                     width="16" 
                                     height="16" 
                                     viewBox="0 0 16 16" 
                                     fill="none" 
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <g clip-path="url(#clip0_1818_1221)">
                                        <path d="M4.0249 15.55C3.7999 15.55 3.5749 15.475 3.3999 15.35C3.0499 15.1 2.8499 14.65 2.9249 14.225L3.5749 10.2L0.774898 7.32495C0.474898 7.02495 0.374898 6.57495 0.499898 6.14995C0.624898 5.74995 0.974898 5.44995 1.3749 5.39995L5.2499 4.77495L6.9999 1.09995C7.1999 0.699951 7.5749 0.449951 7.9999 0.449951C8.4249 0.449951 8.8249 0.699951 8.9999 1.09995L10.7499 4.74995L14.5999 5.34995C14.9999 5.42495 15.3499 5.69995 15.4749 6.09995C15.6249 6.52495 15.4999 6.97495 15.1999 7.27495L12.4249 10.175L13.0749 14.225C13.1499 14.675 12.9749 15.1 12.5999 15.35C12.2499 15.6 11.8249 15.625 11.4499 15.425L7.9999 13.55L4.5499 15.425C4.3999 15.525 4.1999 15.55 4.0249 15.55ZM1.5749 6.49995C1.5749 6.49995 1.5749 6.52495 1.5749 6.54995L4.4999 9.54995C4.6749 9.72495 4.7499 9.99995 4.7249 10.25L4.0499 14.425C4.0499 14.425 4.0499 14.425 4.0499 14.45L7.6499 12.5C7.8749 12.375 8.1499 12.375 8.3999 12.5L11.9999 14.45C11.9999 14.45 11.9999 14.45 11.9999 14.425L11.3249 10.225C11.2749 9.97495 11.3749 9.72495 11.5499 9.52495L14.4749 6.52495C14.4999 6.49995 14.4749 6.47495 14.4749 6.47495L10.4499 5.84995C10.1999 5.79995 9.9749 5.64995 9.8749 5.39995L7.9999 1.59995L6.1999 5.42495C6.0999 5.64995 5.8749 5.82495 5.6249 5.87495L1.5749 6.49995Z" fill="#FFA645"/>
                                     </g>
                                     <defs>
                                        <clipPath id="clip0_1818_1221">
                                           <rect 
                                              width="16" 
                                              height="16" 
                                              fill="white"
                                              />
                                        </clipPath>
                                     </defs>
                                  </svg>
                               </span>
                               <span>
                                  <svg 
                                     width="16" 
                                     height="16" 
                                     viewBox="0 0 16 16" 
                                     fill="none" 
                                     xmlns="http://www.w3.org/2000/svg"
                                     >
                                     <g clip-path="url(#clip0_1818_1221)">
                                        <path d="M4.0249 15.55C3.7999 15.55 3.5749 15.475 3.3999 15.35C3.0499 15.1 2.8499 14.65 2.9249 14.225L3.5749 10.2L0.774898 7.32495C0.474898 7.02495 0.374898 6.57495 0.499898 6.14995C0.624898 5.74995 0.974898 5.44995 1.3749 5.39995L5.2499 4.77495L6.9999 1.09995C7.1999 0.699951 7.5749 0.449951 7.9999 0.449951C8.4249 0.449951 8.8249 0.699951 8.9999 1.09995L10.7499 4.74995L14.5999 5.34995C14.9999 5.42495 15.3499 5.69995 15.4749 6.09995C15.6249 6.52495 15.4999 6.97495 15.1999 7.27495L12.4249 10.175L13.0749 14.225C13.1499 14.675 12.9749 15.1 12.5999 15.35C12.2499 15.6 11.8249 15.625 11.4499 15.425L7.9999 13.55L4.5499 15.425C4.3999 15.525 4.1999 15.55 4.0249 15.55ZM1.5749 6.49995C1.5749 6.49995 1.5749 6.52495 1.5749 6.54995L4.4999 9.54995C4.6749 9.72495 4.7499 9.99995 4.7249 10.25L4.0499 14.425C4.0499 14.425 4.0499 14.425 4.0499 14.45L7.6499 12.5C7.8749 12.375 8.1499 12.375 8.3999 12.5L11.9999 14.45C11.9999 14.45 11.9999 14.45 11.9999 14.425L11.3249 10.225C11.2749 9.97495 11.3749 9.72495 11.5499 9.52495L14.4749 6.52495C14.4999 6.49995 14.4749 6.47495 14.4749 6.47495L10.4499 5.84995C10.1999 5.79995 9.9749 5.64995 9.8749 5.39995L7.9999 1.59995L6.1999 5.42495C6.0999 5.64995 5.8749 5.82495 5.6249 5.87495L1.5749 6.49995Z" fill="#FFA645"/>
                                     </g>
                                     <defs>
                                        <clipPath id="clip0_1818_1221">
                                           <rect 
                                              width="16" 
                                              height="16" 
                                              fill="white"
                                              />
                                        </clipPath>
                                     </defs>
                                  </svg>
                               </span>
                               <span
                                  class="pl-1 text-sm font-medium text-body-color dark:text-dark-6"
                                  >
                               (55) Reviews
                               </span>
                            </div>
                            <div
                               class="border-l border-stroke dark:border-dark-3 py-4 px-3 xs:px-4 lg:px-3 xl:px-6"
                               >
                               <span class="text-base font-semibold text-dark dark:text-white">
                               $299
                               </span>
                            </div>
                         </div>
                      </div>
                   </div>
                   @endfor
                </div>
                <div
                   class="absolute left-0 right-0 bottom-0 flex items-center justify-center"
                   >
                   <div
                      class="inline-flex space-x-3 rounded-full border border-stroke dark:border-dark-3 p-[6px] dark:bg-dark-2"
                      >
                      <button
                         class="flex h-[30px] w-[30px] items-center justify-center rounded-full border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary hover:text-white"
                         @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
                         >
                         <svg 
                            width="14" 
                            height="14" 
                            viewBox="0 0 14 14" 
                            fill="none" 
                            xmlns="http://www.w3.org/2000/svg"
                            class="fill-current"
                            >
                            <path 
                               d="M12.25 6.51875H2.90935L6.6281 2.73438C6.82498 2.5375 6.82498 2.23125 6.6281 2.03437C6.43123 1.8375 6.12498 1.8375 5.9281 2.03437L1.39998 6.62813C1.2031 6.825 1.2031 7.13125 1.39998 7.32813L5.9281 11.9219C6.0156 12.0094 6.14685 12.075 6.2781 12.075C6.40935 12.075 6.51873 12.0313 6.6281 11.9438C6.82498 11.7469 6.82498 11.4406 6.6281 11.2438L2.93123 7.50313H12.25C12.5125 7.50313 12.7312 7.28438 12.7312 7.02188C12.7312 6.7375 12.5125 6.51875 12.25 6.51875Z" 
                               />
                         </svg>
                      </button>
                      <button
                         class="flex h-[30px] w-[30px] items-center justify-center rounded-full border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary hover:text-white"
                         @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
                         >
                         <svg 
                            width="14" 
                            height="14" 
                            viewBox="0 0 14 14" 
                            fill="none" 
                            xmlns="http://www.w3.org/2000/svg"
                            class="fill-current"
                            >
                            <path 
                               d="M12.6008 6.6501L8.07266 2.05635C7.87578 1.85947 7.56953 1.85947 7.37266 2.05635C7.17578 2.25322 7.17578 2.55947 7.37266 2.75635L11.0477 6.49697H1.75078C1.48828 6.49697 1.26953 6.71572 1.26953 6.97822C1.26953 7.24072 1.48828 7.48135 1.75078 7.48135H11.0914L7.37266 11.2657C7.17578 11.4626 7.17578 11.7688 7.37266 11.9657C7.46016 12.0532 7.59141 12.097 7.72266 12.097C7.85391 12.097 7.98516 12.0532 8.07266 11.9438L12.6008 7.3501C12.7977 7.15322 12.7977 6.84697 12.6008 6.6501Z" 
                               />
                         </svg>
                      </button>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section> --}}
<!-- ====== Products Carousel Section End -->

<section class="bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
        <?php $slides = [1,2,3,4,5,6,7,8,9,10]; ?>
        <div x-data="{ slides: {{ '['.implode(', ', $slides).']' }} }">  
            <div class="relative flex justify-center">
                <div class="relative w-full pb-16">
                    <div
                        class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[400px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] pb-5"
                        x-ref="carousel"
                        id="carousel_control">
                        <!-- Carousel Items -->
                        @for($i = 1; $i <= count($slides); $i++)
                            <div class="mx-auto h-full min-w-[300px] px-4 xs:min-w-[368px] sm:min-w-[510px] md:min-w-[350px] lg:min-w-[465px] xl:min-w-[370px] 2xl:min-w-[430px]">
                                <div
                                class="overflow-hidden rounded-lg bg-white dark:bg-dark-2 shadow-1 dark:shadow-box-dark"
                                >
                                <div>
                                    <img
                                        src="{{ 'https://source.unsplash.com/random/800x800/?img='.$i }}"
                                        alt="product"
                                        class="w-full"
                                        />
                                </div>
                                <div class="p-6">
                                    <a
                                        href="javascript:void(0)"
                                        class="mb-3 block text-lg font-semibold text-dark dark:text-white hover:text-primary xs:text-xl lg:text-lg xl:text-xl"
                                        >
                                    {{ "IMAGE-".$i }}
                                    </a>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        enim luctus et lorem.
                                    </p>
                                </div>
                                <div class="flex justify-between border-t border-stroke dark:border-dark-3">
                                    <div
                                        class="flex gap-1 items-center py-4 px-3 xs:px-4 lg:px-3 xl:px-6"
                                        >
                                        <span>
                                            <svg 
                                            width="16" 
                                            height="16" 
                                            viewBox="0 0 16 16" 
                                            fill="none" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1818_1215)">
                                                <path 
                                                    d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                                    />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1818_1215">
                                                    <rect 
                                                        width="16" 
                                                        height="16" 
                                                        fill="white"
                                                        />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg 
                                            width="16" 
                                            height="16" 
                                            viewBox="0 0 16 16" 
                                            fill="none" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1818_1215)">
                                                <path 
                                                    d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                                    />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1818_1215">
                                                    <rect 
                                                        width="16" 
                                                        height="16" 
                                                        fill="white"
                                                        />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg 
                                            width="16" 
                                            height="16" 
                                            viewBox="0 0 16 16" 
                                            fill="none" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1818_1215)">
                                                <path 
                                                    d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z" fill="#FFA645"
                                                    />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1818_1215">
                                                    <rect 
                                                        width="16" 
                                                        height="16" 
                                                        fill="white"
                                                        />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg 
                                            width="16" 
                                            height="16" 
                                            viewBox="0 0 16 16" 
                                            fill="none" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1818_1221)">
                                                <path d="M4.0249 15.55C3.7999 15.55 3.5749 15.475 3.3999 15.35C3.0499 15.1 2.8499 14.65 2.9249 14.225L3.5749 10.2L0.774898 7.32495C0.474898 7.02495 0.374898 6.57495 0.499898 6.14995C0.624898 5.74995 0.974898 5.44995 1.3749 5.39995L5.2499 4.77495L6.9999 1.09995C7.1999 0.699951 7.5749 0.449951 7.9999 0.449951C8.4249 0.449951 8.8249 0.699951 8.9999 1.09995L10.7499 4.74995L14.5999 5.34995C14.9999 5.42495 15.3499 5.69995 15.4749 6.09995C15.6249 6.52495 15.4999 6.97495 15.1999 7.27495L12.4249 10.175L13.0749 14.225C13.1499 14.675 12.9749 15.1 12.5999 15.35C12.2499 15.6 11.8249 15.625 11.4499 15.425L7.9999 13.55L4.5499 15.425C4.3999 15.525 4.1999 15.55 4.0249 15.55ZM1.5749 6.49995C1.5749 6.49995 1.5749 6.52495 1.5749 6.54995L4.4999 9.54995C4.6749 9.72495 4.7499 9.99995 4.7249 10.25L4.0499 14.425C4.0499 14.425 4.0499 14.425 4.0499 14.45L7.6499 12.5C7.8749 12.375 8.1499 12.375 8.3999 12.5L11.9999 14.45C11.9999 14.45 11.9999 14.45 11.9999 14.425L11.3249 10.225C11.2749 9.97495 11.3749 9.72495 11.5499 9.52495L14.4749 6.52495C14.4999 6.49995 14.4749 6.47495 14.4749 6.47495L10.4499 5.84995C10.1999 5.79995 9.9749 5.64995 9.8749 5.39995L7.9999 1.59995L6.1999 5.42495C6.0999 5.64995 5.8749 5.82495 5.6249 5.87495L1.5749 6.49995Z" fill="#FFA645"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1818_1221">
                                                    <rect 
                                                        width="16" 
                                                        height="16" 
                                                        fill="white"
                                                        />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <span>
                                            <svg 
                                            width="16" 
                                            height="16" 
                                            viewBox="0 0 16 16" 
                                            fill="none" 
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <g clip-path="url(#clip0_1818_1221)">
                                                <path d="M4.0249 15.55C3.7999 15.55 3.5749 15.475 3.3999 15.35C3.0499 15.1 2.8499 14.65 2.9249 14.225L3.5749 10.2L0.774898 7.32495C0.474898 7.02495 0.374898 6.57495 0.499898 6.14995C0.624898 5.74995 0.974898 5.44995 1.3749 5.39995L5.2499 4.77495L6.9999 1.09995C7.1999 0.699951 7.5749 0.449951 7.9999 0.449951C8.4249 0.449951 8.8249 0.699951 8.9999 1.09995L10.7499 4.74995L14.5999 5.34995C14.9999 5.42495 15.3499 5.69995 15.4749 6.09995C15.6249 6.52495 15.4999 6.97495 15.1999 7.27495L12.4249 10.175L13.0749 14.225C13.1499 14.675 12.9749 15.1 12.5999 15.35C12.2499 15.6 11.8249 15.625 11.4499 15.425L7.9999 13.55L4.5499 15.425C4.3999 15.525 4.1999 15.55 4.0249 15.55ZM1.5749 6.49995C1.5749 6.49995 1.5749 6.52495 1.5749 6.54995L4.4999 9.54995C4.6749 9.72495 4.7499 9.99995 4.7249 10.25L4.0499 14.425C4.0499 14.425 4.0499 14.425 4.0499 14.45L7.6499 12.5C7.8749 12.375 8.1499 12.375 8.3999 12.5L11.9999 14.45C11.9999 14.45 11.9999 14.45 11.9999 14.425L11.3249 10.225C11.2749 9.97495 11.3749 9.72495 11.5499 9.52495L14.4749 6.52495C14.4999 6.49995 14.4749 6.47495 14.4749 6.47495L10.4499 5.84995C10.1999 5.79995 9.9749 5.64995 9.8749 5.39995L7.9999 1.59995L6.1999 5.42495C6.0999 5.64995 5.8749 5.82495 5.6249 5.87495L1.5749 6.49995Z" fill="#FFA645"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1818_1221">
                                                    <rect 
                                                        width="16" 
                                                        height="16" 
                                                        fill="white"
                                                        />
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                        <span
                                            class="pl-1 text-sm font-medium text-body-color dark:text-dark-6"
                                            >
                                        (55) Reviews
                                        </span>
                                    </div>
                                    <div
                                        class="border-l border-stroke dark:border-dark-3 py-4 px-3 xs:px-4 lg:px-3 xl:px-6"
                                        >
                                        <span class="text-base font-semibold text-dark dark:text-white">
                                        $299
                                        </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <!-- Carousel Controls -->
                    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 flex items-center">
                        <button
                            class="flex h-[30px] w-[30px] items-center justify-center rounded-full border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary hover:text-white"
                            @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length);"
                            onclick="previousSlide()"
                        >
                            <!-- Left Arrow SVG Placeholder -->
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="fill-current"
                            >
                                <path
                                    d="M12.25 6.51875H2.90935L6.6281 2.73438C6.82498 2.5375 6.82498 2.23125 6.6281 2.03437C6.43123 1.8375 6.12498 1.8375 5.9281 2.03437L1.39998 6.62813C1.2031 6.825 1.2031 7.13125 1.39998 7.32813L5.9281 11.9219C6.0156 12.0094 6.14685 12.075 6.2781 12.075C6.40935 12.075 6.51873 12.0313 6.6281 11.9438C6.82498 11.7469 6.82498 11.4406 6.6281 11.2438L2.93123 7.50313H12.25C12.5125 7.50313 12.7312 7.28438 12.7312 7.02188C12.7312 6.7375 12.5125 6.51875 12.25 6.51875Z"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 flex items-center">
                        <button
                            class="flex h-[30px] w-[30px] items-center justify-center rounded-full border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary hover:text-white"
                            @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length);"
                            onclick="nextSlide()"
                        >
                            <!-- Right Arrow SVG Placeholder -->
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="fill-current"
                            >
                                <path
                                    d="M12.6008 6.6501L8.07266 2.05635C7.87578 1.85947 7.56953 1.85947 7.37266 2.05635C7.17578 2.25322 7.17578 2.55947 7.37266 2.75635L11.0477 6.49697H1.75078C1.48828 6.49697 1.26953 6.71572 1.26953 6.97822C1.26953 7.24072 1.48828 7.48135 1.75078 7.48135H11.0914L7.37266 11.2657C7.17578 11.4626 7.17578 11.7688 7.37266 11.9657C7.46016 12.0532 7.59141 12.097 7.72266 12.097C7.85391 12.097 7.98516 12.0532 8.07266 11.9438L12.6008 7.3501C12.7977 7.15322 12.7977 6.84697 12.6008 6.6501Z"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
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
    });
    
</script>
@endsection
