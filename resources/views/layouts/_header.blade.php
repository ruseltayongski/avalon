<!-- ====== Navbar Section Start -->
<header
   x-data="
        {
        navbarOpen: false,
        }
   "
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