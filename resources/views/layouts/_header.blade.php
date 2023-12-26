<!-- ====== Navbar Section Start -->
<header
   x-data=" { navbarOpen: false }"
   class="absolute top-0 left-0 z-50 w-full animate-fade-down"
   >
   <div class="container mx-auto">
      <div class="relative flex items-center justify-between -mx-4">
         <div class="max-w-full px-4 w-60">
            <a href="{{ route('welcome') }}" class="block w-full py-5">
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
                  <ul class="block lg:flex justify-end ">
                        {{-- <li>
                            <div class="theme-switcher">
                                <button class="theme-switcher-button theme-switcher-light bg-gray-200 border-gray-200 border-2 dark:bg-black dark:border-black p-2 focus:outline-none" title="Light"><i class="fas fa-sun pointer-events-none"></i> Light</button><button class="theme-switcher-button theme-switcher-dark bg-gray-200 border-gray-200 border-2 dark:bg-black dark:border-black p-2 focus:outline-none" title="Dark"><i class="fas fa-moon pointer-events-none"></i> Dark</button><button class="theme-switcher-button theme-switcher-auto bg-gray-200 border-gray-200 dark:bg-black border-2 dark:border-black p-2 focus:outline-none" title="Auto"><i class="fas fa-adjust pointer-events-none"></i> Auto</button>
                            </div>
                        </li> --}}
                        <li>
                           <a
                           href="{{ route('welcome') }}"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-[#1d5b80] lg:ml-10 lg:inline-flex lg:text-white"
                           >
                           Home
                           </a>
                        </li>
                        <li>
                           <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-[#1d5b80] lg:ml-10 lg:inline-flex lg:text-white"
                           >
                           About
                           </a>
                        </li>
                        <li>
                           <a
                           href="{{ route('service') }}"
                           class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-[#1d5b80] lg:ml-10 lg:inline-flex lg:text-white"
                           >
                           Services
                           </a>
                        </li>
                        <li class="ml-6 hidden md:block">
                           <!-- ====== Modal Section Start -->
                           <section x-data="{modalOpen: false}">
                              <button
                                 @click="modalOpen = true"
                                 onclick="triggerModal()"
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
                              @include('layouts._checkout')     
                           </section>
                           <!-- ====== Modal Section End -->
                        </li>
                        <li class="md:hidden sm:block">
                           <!-- ====== Modal Section Start -->
                           <section x-data="{modalOpen: false}">
                              <button
                                 @click="modalOpen = true"
                                 onclick="triggerModal()"
                                 type="button"
                                 class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-[#1d5b80] lg:ml-10 lg:inline-flex lg:text-white"
                                 >
                                 Add To Cart
                              </button>
                              @include('layouts._checkout')     
                           </section>
                           <!-- ====== Modal Section End -->
                        </li>
                        <li class="lg:ml-6">
                           <a href="javascript:void(0)" class="lg:border-white lg:border rounded-full inline-flex items-center justify-center py-3 lg:px-7 text-center text-base font-medium lg:text-white dark:text-white hover:bg-gray-4 dark:hover:bg-dark-3 disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5">
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