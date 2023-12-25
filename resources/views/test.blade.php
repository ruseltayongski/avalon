@section('css')

@endsection

@extends('layouts.app')

@section('content')

 <!-- ====== Modal Section Start -->
<section x-data="{modalOpen: false}">
   <button
      @click="modalOpen = true"
      type="button"
      class="flex h-11 min-w-[44px] items-center justify-center rounded-full bg-[#1d5b80] text-white"
      >
      <svg
         width="20"
         height="20"
         viewBox="0 0 20 20"
         class="fill-current"
         >
         <path
            d="M15.3437 19.156C12.7812 19.156 9.09373 17.3123 5.71873 14.0935C1.12498 9.7185 -0.843773 4.8435 1.15623 2.7185C1.24998 2.62475 1.34373 2.56225 1.46873 2.49975L4.09373 1.031C4.68748 0.718502 5.43748 0.874752 5.81248 1.406L7.71873 4.12475C7.90623 4.406 7.99998 4.74975 7.93748 5.06225C7.87498 5.406 7.68748 5.68725 7.40623 5.87475L6.24998 6.62475C6.18748 6.656 6.18748 6.68725 6.18748 6.7185C6.18748 6.74975 6.18748 6.781 6.21873 6.81225C7.06248 8.06225 9.46873 11.2498 13.2812 13.531C13.375 13.5935 13.5312 13.5623 13.5937 13.4998L14.4062 12.406C14.8125 11.8435 15.5937 11.7185 16.1875 12.0935L19.0312 13.906C19.625 14.281 19.8125 15.031 19.4375 15.6248L17.875 18.1248C17.8125 18.2498 17.7187 18.3435 17.625 18.406C17.0312 18.9373 16.25 19.156 15.3437 19.156ZM4.74998 1.93725C4.71873 1.93725 4.68748 1.93725 4.62498 1.9685L1.99998 3.43725C1.96873 3.4685 1.96873 3.4685 1.93748 3.4685C0.624977 4.87475 2.12498 9.156 6.49998 13.3123C10.875 17.4685 15.4062 18.906 16.9062 17.6248C16.9062 17.6248 16.9062 17.6248 16.9375 17.5935L18.5 15.0935C18.5312 15.031 18.5312 14.9373 18.4375 14.8748L15.5937 13.0623C15.5 12.9998 15.3437 13.031 15.2812 13.0935L14.4687 14.1873C14.0625 14.7185 13.3125 14.8748 12.7187 14.531C8.68748 12.1248 6.18748 8.781 5.31248 7.43725C5.12498 7.156 5.06248 6.8435 5.12498 6.49975C5.18748 6.18725 5.37498 5.87475 5.65623 5.7185L6.81248 4.93725C6.87498 4.906 6.87498 4.87475 6.87498 4.8435C6.87498 4.81225 6.87498 4.781 6.84373 4.7185L4.93748 1.99975C4.90623 1.9685 4.81248 1.93725 4.74998 1.93725Z"
            />
      </svg>
   </button>
   <div x-show="modalOpen" class="fixed top-0 left-0 flex items-center justify-center w-full h-screen py-10 overflow-y-scroll bg-gray-2 dark:bg-dark">
      <div @click.outside="modalOpen = false" class="mx-auto 
       rounded-[10px] bg-white 
      dark:bg-dark-2 p-8 shadow-1 dark:shadow-3">
          <!-- ====== Checkout Section Start -->
          <section class="bg-gray-2 dark:bg-dark pt-20 pb-10 lg:pt-[120px] lg:pb-20">
              <div class="container mx-auto">
              <div class="flex flex-wrap -mx-4">
                  <div class="w-full px-4 xl:w-8/12">
                      <div>
                          <h3
                          class="mb-8 text-xl font-semibold text-dark dark:text-white sm:leading-[40px] sm:text-[28px]"
                          >
                          Shopping Cart
                          </h3>
                          <div
                          class="mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark"
                          >
                          <div
                              class="max-w-full mb-8 overflow-x-auto border-b border-stroke dark:border-dark-3"
                              >
                              <table class="w-full table-auto">
                                  <thead>
                                      <tr class="text-left">
                                      <th
                                          class="min-w-[300px] py-4 px-4 text-sm font-medium text-dark dark:text-white xl:pl-9"
                                          >
                                          Product
                                      </th>
                                      <th
                                          class="min-w-[150px] py-4 px-4 text-sm font-medium text-dark dark:text-white"
                                          >
                                          Quantity
                                      </th>
                                      <th
                                          class="min-w-[120px] py-4 px-4 text-sm font-medium text-dark dark:text-white"
                                          >
                                          Total Price
                                      </th>
                                      <th
                                          class="min-w-[100px] py-4 px-4 text-center text-sm font-medium text-dark dark:text-white xl:pr-9"
                                          ></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3 xl:pl-11"
                                          >
                                          <div class="flex items-center">
                                              <img
                                                  src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-03/image-01.jpg"
                                                  alt="image"
                                                  class="mr-[22px] h-12 w-12 rounded"
                                                  />
                                              <div>
                                                  <h5
                                                  class="text-base font-medium text-dark dark:text-white"
                                                  >
                                                  <a
                                                      href="javascript:void(0)"
                                                      class="hover:text-primary"
                                                      >
                                                  Red colour ladies bag
                                                  </a>
                                                  </h5>
                                                  <p
                                                  class="text-sm text-body-color dark:text-dark-6"
                                                  >
                                                  Color: Red
                                                  </p>
                                              </div>
                                          </div>
                                      </td>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3"
                                          >
                                          <div
                                              x-data="
                                              {
                                              quantity: 1
                                              }
                                              "
                                              class="inline-flex h-9 items-center rounded border-[0.5px] border-stroke dark:border-dark-3 bg-gray-1 dark:bg-dark text-base font-medium text-dark dark:text-white"
                                              >
                                              <span
                                                  @click=" quantity > 1 && quantity-- "
                                                  class="cursor-pointer select-none border-r-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                                  >
                                              -
                                              </span>
                                              <span class="py-[6px] px-[18px]" x-text="quantity">
                                              </span>
                                              <span
                                                  @click=" quantity++ "
                                                  class="cursor-pointer select-none border-l-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                                  >
                                              +
                                              </span>
                                          </div>
                                      </td>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3"
                                          >
                                          <p
                                              class="text-base font-medium text-dark dark:text-white"
                                              >
                                              $110.99
                                          </p>
                                      </td>
                                      <td
                                          class="p-4 text-center border-t border-stroke dark:border-dark-3 pr-11"
                                          >
                                          <button
                                              class="text-dark dark:text-white hover:text-red"
                                              >
                                              <svg
                                                  width="14"
                                                  height="14"
                                                  viewBox="0 0 14 14"
                                                  fill="none"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  class="fill-current"
                                                  >
                                                  <g clip-path="url(#clip0_1006_33743)">
                                                  <path
                                                      d="M7.7001 6.99998L13.0376 1.66248C13.2345 1.4656 13.2345 1.15935 13.0376 0.962476C12.8407 0.765601 12.5345 0.765601 12.3376 0.962476L7.0001 6.29998L1.6626 0.962476C1.46572 0.765601 1.15947 0.765601 0.962598 0.962476C0.765723 1.15935 0.765723 1.4656 0.962598 1.66248L6.3001 6.99998L0.962598 12.3375C0.765723 12.5344 0.765723 12.8406 0.962598 13.0375C1.0501 13.125 1.18135 13.1906 1.3126 13.1906C1.44385 13.1906 1.5751 13.1469 1.6626 13.0375L7.0001 7.69998L12.3376 13.0375C12.4251 13.125 12.5563 13.1906 12.6876 13.1906C12.8188 13.1906 12.9501 13.1469 13.0376 13.0375C13.2345 12.8406 13.2345 12.5344 13.0376 12.3375L7.7001 6.99998Z"
                                                      fill=""
                                                      />
                                                  </g>
                                                  <defs>
                                                  <clipPath id="clip0_1006_33743">
                                                      <rect width="14" height="14" fill="white" />
                                                  </clipPath>
                                                  </defs>
                                              </svg>
                                          </button>
                                      </td>
                                      </tr>
                                      <tr>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3 xl:pl-11"
                                          >
                                          <div class="flex items-center">
                                              <img
                                                  src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-03/image-02.jpg"
                                                  alt="image"
                                                  class="mr-[22px] h-12 w-12 rounded"
                                                  />
                                              <div>
                                                  <h5
                                                  class="text-base font-medium text-dark dark:text-white"
                                                  >
                                                  <a
                                                      href="javascript:void(0)"
                                                      class="hover:text-primary"
                                                      >
                                                  Orange colour ladies bag
                                                  </a>
                                                  </h5>
                                                  <p
                                                  class="text-sm text-body-color dark:text-dark-6"
                                                  >
                                                  Color: Orange
                                                  </p>
                                              </div>
                                          </div>
                                      </td>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3"
                                          >
                                          <div
                                              x-data="
                                              {
                                              quantity: 1
                                              }
                                              "
                                              class="inline-flex h-9 items-center rounded border-[0.5px] border-stroke dark:border-dark-3 bg-gray-1 dark:bg-dark text-base font-medium text-dark dark:text-white"
                                              >
                                              <span
                                                  @click=" quantity > 1 && quantity-- "
                                                  class="cursor-pointer select-none border-r-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                                  >
                                              -
                                              </span>
                                              <span class="py-[6px] px-[18px]" x-text="quantity">
                                              </span>
                                              <span
                                                  @click=" quantity++ "
                                                  class="cursor-pointer select-none border-l-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                                  >
                                              +
                                              </span>
                                          </div>
                                      </td>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3"
                                          >
                                          <p
                                              class="text-base font-medium text-dark dark:text-white"
                                              >
                                              $110.99
                                          </p>
                                      </td>
                                      <td
                                          class="p-4 text-center border-t border-stroke dark:border-dark-3 pr-11"
                                          >
                                          <button
                                              class="text-dark dark:text-white hover:text-red"
                                              >
                                              <svg
                                                  width="14"
                                                  height="14"
                                                  viewBox="0 0 14 14"
                                                  fill="none"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  class="fill-current"
                                                  >
                                                  <g clip-path="url(#clip0_1006_33743)">
                                                  <path
                                                      d="M7.7001 6.99998L13.0376 1.66248C13.2345 1.4656 13.2345 1.15935 13.0376 0.962476C12.8407 0.765601 12.5345 0.765601 12.3376 0.962476L7.0001 6.29998L1.6626 0.962476C1.46572 0.765601 1.15947 0.765601 0.962598 0.962476C0.765723 1.15935 0.765723 1.4656 0.962598 1.66248L6.3001 6.99998L0.962598 12.3375C0.765723 12.5344 0.765723 12.8406 0.962598 13.0375C1.0501 13.125 1.18135 13.1906 1.3126 13.1906C1.44385 13.1906 1.5751 13.1469 1.6626 13.0375L7.0001 7.69998L12.3376 13.0375C12.4251 13.125 12.5563 13.1906 12.6876 13.1906C12.8188 13.1906 12.9501 13.1469 13.0376 13.0375C13.2345 12.8406 13.2345 12.5344 13.0376 12.3375L7.7001 6.99998Z"
                                                      fill=""
                                                      />
                                                  </g>
                                                  <defs>
                                                  <clipPath id="clip0_1006_33743">
                                                      <rect width="14" height="14" fill="white" />
                                                  </clipPath>
                                                  </defs>
                                              </svg>
                                          </button>
                                      </td>
                                      </tr>
                                      <tr>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3 xl:pl-11"
                                          >
                                          <div class="flex items-center">
                                              <img
                                                  src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-03/image-03.jpg"
                                                  alt="image"
                                                  class="mr-[22px] h-12 w-12 rounded"
                                                  />
                                              <div>
                                                  <h5
                                                  class="text-base font-medium text-dark dark:text-white"
                                                  >
                                                  <a
                                                      href="javascript:void(0)"
                                                      class="hover:text-primary"
                                                      >
                                                  Black bag for man
                                                  </a>
                                                  </h5>
                                                  <p
                                                  class="text-sm text-body-color dark:text-dark-6"
                                                  >
                                                  Color: Black
                                                  </p>
                                              </div>
                                          </div>
                                      </td>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3"
                                          >
                                          <div
                                              x-data="
                                              {
                                              quantity: 1
                                              }
                                              "
                                              class="inline-flex h-9 items-center rounded border-[0.5px] border-stroke dark:border-dark-3 bg-gray-1 dark:bg-dark text-base font-medium text-dark dark:text-white"
                                              >
                                              <span
                                                  @click=" quantity > 1 && quantity-- "
                                                  class="cursor-pointer select-none border-r-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                                  >
                                              -
                                              </span>
                                              <span class="py-[6px] px-[18px]" x-text="quantity">
                                              </span>
                                              <span
                                                  @click=" quantity++ "
                                                  class="cursor-pointer select-none border-l-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                                  >
                                              +
                                              </span>
                                          </div>
                                      </td>
                                      <td
                                          class="p-4 border-t border-stroke dark:border-dark-3"
                                          >
                                          <p
                                              class="text-base font-medium text-dark dark:text-white"
                                              >
                                              $110.99
                                          </p>
                                      </td>
                                      <td
                                          class="p-4 text-center border-t border-stroke dark:border-dark-3 pr-11"
                                          >
                                          <button
                                              class="text-dark dark:text-white hover:text-red"
                                              >
                                              <svg
                                                  width="14"
                                                  height="14"
                                                  viewBox="0 0 14 14"
                                                  fill="none"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  class="fill-current"
                                                  >
                                                  <g clip-path="url(#clip0_1006_33743)">
                                                  <path
                                                      d="M7.7001 6.99998L13.0376 1.66248C13.2345 1.4656 13.2345 1.15935 13.0376 0.962476C12.8407 0.765601 12.5345 0.765601 12.3376 0.962476L7.0001 6.29998L1.6626 0.962476C1.46572 0.765601 1.15947 0.765601 0.962598 0.962476C0.765723 1.15935 0.765723 1.4656 0.962598 1.66248L6.3001 6.99998L0.962598 12.3375C0.765723 12.5344 0.765723 12.8406 0.962598 13.0375C1.0501 13.125 1.18135 13.1906 1.3126 13.1906C1.44385 13.1906 1.5751 13.1469 1.6626 13.0375L7.0001 7.69998L12.3376 13.0375C12.4251 13.125 12.5563 13.1906 12.6876 13.1906C12.8188 13.1906 12.9501 13.1469 13.0376 13.0375C13.2345 12.8406 13.2345 12.5344 13.0376 12.3375L7.7001 6.99998Z"
                                                      fill=""
                                                      />
                                                  </g>
                                                  <defs>
                                                  <clipPath id="clip0_1006_33743">
                                                      <rect width="14" height="14" fill="white" />
                                                  </clipPath>
                                                  </defs>
                                              </svg>
                                          </button>
                                      </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="px-8 pb-10">
                              <div class="flex flex-wrap justify-between -mx-4">
                                  <div class="w-full px-4 mb-10 md:mb-0 md:w-1/2">
                                      <div class="lg:max-w-[300px]">
                                      <div
                                          class="pb-4 mb-8 border-b border-stroke dark:border-dark-3"
                                          >
                                          <h4
                                              class="mb-[6px] text-lg font-semibold text-dark dark:text-white"
                                              >
                                              Coupon Code
                                          </h4>
                                          <p class="text-sm text-body-color dark:text-dark-6">
                                              Enter code to get discount instantly
                                          </p>
                                      </div>
                                      <form class="relative">
                                          <input
                                              type="text"
                                              placeholder="Coupon code"
                                              class="w-full rounded-[5px] bg-transparent border border-stroke dark:border-dark-3 py-3 pl-5 pr-20 text-body-color dark:text-dark-6 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                              />
                                          <button
                                              class="absolute right-2 top-1/2 mb-3 h-[34px] -translate-y-1/2 rounded bg-dark px-5 text-sm font-medium text-white transition hover:bg-opacity-90"
                                              >
                                          Apply
                                          </button>
                                      </form>
                                      </div>
                                  </div>
                                  <div class="w-full px-4 md:w-1/2">
                                      <div class="lg:max-w-[250px]">
                                      <div class="space-y-4">
                                          <p
                                              class="flex justify-between text-base text-dark dark:text-white"
                                              >
                                              <span> Subtotal </span>
                                              <span class="font-medium"> $108 </span>
                                          </p>
                                          <p
                                              class="flex justify-between text-base text-dark dark:text-white"
                                              >
                                              <span> Shipping Cost </span>
                                              <span class="font-medium"> $10.85 </span>
                                          </p>
                                          <p
                                              class="flex justify-between text-base text-dark dark:text-white"
                                              >
                                              <span> Discount </span>
                                              <span class="font-medium"> $9.00 </span>
                                          </p>
                                      </div>
                                      <div
                                          class="mt-[18px] border-t border-stroke dark:border-dark-3 pt-[18px]"
                                          >
                                          <p
                                              class="flex justify-between text-base text-dark dark:text-white"
                                              >
                                              <span> Total Payable </span>
                                              <span class="font-medium"> $88.15 </span>
                                          </p>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
                  <div class="w-full px-4 xl:w-4/12">
                      <div>
                          <h3
                          class="mb-8 text-xl font-semibold text-dark dark:text-white sm:leading-[40px] sm:text-[28px]"
                          >
                          Payment Info
                          </h3>
                          <div
                          class="overflow-hidden bg-white border rounded-lg border-stroke dark:border-dark-3 dark:bg-dark-2 p-9 shadow-testimonial-6 dark:shadow-box-dark"
                          >
                          <h3
                              class="mb-6 text-xl font-semibold text-dark dark:text-white"
                              >
                              Payment Method
                          </h3>
                          <div x-data="{paymentMethod: 'creditCard'}">
                              <div class="mb-4">
                                  <label
                                      for="paymentCheckbox"
                                      class="flex items-center cursor-pointer select-none"
                                      >
                                      <div class="relative">
                                      <input
                                          type="radio"
                                          id="paymentCheckbox"
                                          name="payment"
                                          class="sr-only"
                                          @change="paymentMethod = 'creditCard'"
                                          />
                                      <div
                                          class="mr-[10px] flex h-5 w-5 items-center justify-center rounded-full border"
                                          :class="paymentMethod === 'creditCard' ? 'border-primary bg-[#F1F4FF] dark:bg-transparent' : 'border-stroke dark:border-dark-3'"
                                          >
                                          <span
                                              class="h-[10px] w-[10px] rounded-full"
                                              :class="paymentMethod === 'creditCard' ? 'bg-primary' : 'bg-transparent'"
                                              >
                                          </span>
                                      </div>
                                      </div>
                                      <span class="text-dark dark:text-white">Credit Card</span>
                                  </label>
                              </div>
                              <div class="mb-4">
                                  <label
                                      for="paymentCheckbox2"
                                      class="flex items-center cursor-pointer select-none"
                                      >
                                      <div class="relative">
                                      <input
                                          type="radio"
                                          id="paymentCheckbox2"
                                          name="payment"
                                          class="sr-only"
                                          @change="paymentMethod = 'paypal'"
                                          />
                                      <div
                                          class="mr-[10px] flex h-5 w-5 items-center justify-center rounded-full border"
                                          :class="paymentMethod === 'paypal' ? 'border-primary bg-[#F1F4FF] dark:bg-transparent' : 'border-stroke dark:border-dark-3'"
                                          >
                                          <span
                                              class="h-[10px] w-[10px] rounded-full"
                                              :class="paymentMethod === 'paypal' ? 'bg-primary' : 'bg-transparent'"
                                              >
                                          </span>
                                      </div>
                                      </div>
                                      <span class="text-dark dark:text-white">Paypal</span>
                                  </label>
                              </div>
                              <div class="mb-4">
                                  <label
                                      for="paymentCheckbox3"
                                      class="flex items-center cursor-pointer select-none"
                                      >
                                      <div class="relative">
                                      <input
                                          type="radio"
                                          id="paymentCheckbox3"
                                          name="payment"
                                          class="sr-only"
                                          @change="paymentMethod = 'cash'"
                                          />
                                      <div
                                          class="mr-[10px] flex h-5 w-5 items-center justify-center rounded-full border"
                                          :class="paymentMethod === 'cash' ? 'border-primary bg-[#F1F4FF] dark:bg-transparent' : 'border-stroke dark:border-dark-3'"
                                          >
                                          <span
                                              class="h-[10px] w-[10px] rounded-full"
                                              :class="paymentMethod === 'cash' ? 'bg-primary' : 'bg-transparent'"
                                              >
                                          </span>
                                      </div>
                                      </div>
                                      <span class="text-dark dark:text-white"
                                      >Cash on delivery</span
                                      >
                                  </label>
                              </div>
                          </div>
                          <div
                              class="pt-8 mt-8 border-t border-stroke dark:border-dark-3"
                              >
                              <form>
                                  <div class="flex flex-wrap -mx-2">
                                      <div class="w-full px-2">
                                      <div class="mb-5">
                                          <label
                                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                                              >
                                          Name on Card:
                                          </label>
                                          <input
                                              type="text"
                                              placeholder="Jhon deo"
                                              class="w-full px-5 py-3 bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                              />
                                      </div>
                                      </div>
                                      <div class="w-full px-2">
                                      <div class="mb-5">
                                          <label
                                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                                              >
                                          Card Number:
                                          </label>
                                          <input
                                              type="text"
                                              placeholder="0000 0000 0000 1248"
                                              class="w-full px-5 py-3 bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                              />
                                      </div>
                                      </div>
                                      <div class="w-full px-2">
                                      <div class="mb-6">
                                          <label
                                              class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                                              >
                                          Expiration Date:
                                          </label>
                                          <div class="flex -mx-2">
                                              <div class="w-4/12 px-2">
                                                  <div class="relative">
                                                  <select
                                                      class="w-full px-5 py-3 font-medium transition bg-transparent border rounded-md outline-none appearance-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                                      >
                                                      <option value="" class="dark:bg-dark-2">
                                                          05
                                                      </option>
                                                      <option value="" class="dark:bg-dark-2">
                                                          04
                                                      </option>
                                                      <option value="" class="dark:bg-dark-2">
                                                          03
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
                                              <div class="w-5/12 px-2">
                                                  <div class="relative">
                                                  <select
                                                      class="w-full px-5 py-3 font-medium transition bg-transparent border rounded-md outline-none appearance-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                                      >
                                                      <option value="" class="dark:bg-dark-2">
                                                          2000
                                                      </option>
                                                      <option value="" class="dark:bg-dark-2">
                                                          2001
                                                      </option>
                                                      <option value="" class="dark:bg-dark-2">
                                                          2002
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
                                              <div class="w-3/12 px-2">
                                                  <input
                                                  type="text"
                                                  placeholder="05"
                                                  class="w-full px-5 py-3 text-center bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                                  />
                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="w-full px-2">
                                          <button
                                              @click="modalOpen = false"
                                              type="button"
                                              class="flex items-center justify-center w-full py-3 text-base font-medium text-center text-white rounded-md bg-primary px-7 hover:bg-blue-dark"
                                              >
                                          Place Order
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
          </section>
          <!-- ====== Checkout Section End -->
      </div>
   </div>   
</section>
<!-- ====== Modal Section End -->

@endsection