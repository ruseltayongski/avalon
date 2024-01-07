<div x-show="modalOpen" 
    id="checkoutmodal"
    class="opacity-0 fixed top-0 left-0 flex 
    items-center justify-center w-full h-screen py-10 overflow-y-scroll
    bg-[#000000] bg-opacity-20 dark:bg-dark"> 
    <div @click.outside="modalOpen = false" id="cd-modal" class="mx-auto rounded-[10px] bg-white
    dark:bg-dark-2 p-8 shadow-1 dark:shadow-3">
        <!-- ====== Checkout Section Start -->
        <section class=" dark:bg-dark">
            <div :class=" modalOpen ? 'translate-x-0' : 'translate-x-full' " 
            class=" min-w-[500px] overflow-y-auto dark:bg-dark-2
            transition-all duration-200 pl-4 pr-8">
                <button @click=" modalOpen = false " class="bg-red p-1 absolute right-0 rounded-[5px] text-white dark:text-dark-6">
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
                <h3 class="mb-11 text-2xl font-semibold text-dark dark:text-white md:leading-[40px] md:text-[28px]">
                    Shopping cart
                </h3>
                <div class="space-y-10">
                    <template x-for="(cart, index) in carts" :key="index">
                        <div class="border-b border-stroke dark:border-dark-3 pb-7">
                            <div class="flex items-center">
                            <div
                                class="mr-[22px] h-[90px] w-full max-w-[80px] overflow-hidden rounded-[5px] xs:h-[100px] xs:max-w-[100px]"
                                >
                                <img
                                    x-bind:src="'fileupload/services/'+cart.picture"
                                    alt="product"
                                    class="h-full w-full object-cover object-center"
                                    />
                            </div>
                            <div class="w-full">
                                <div class="flex flex-wrap justify-between">
                                    <a
                                        href="javascript:void(0)"
                                        class="block text-base font-medium text-dark dark:text-white hover:text-primary mb-0.5"
                                        x-text="cart.title"
                                        >
                                    </a>
                                    <div class="text-right">
                                        <span class="text-base font-medium text-dark dark:text-white" x-text="'$'+(parseFloat(cart.price).toLocaleString())"></span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[10px] mt-3">
                                    <button
                                        class="rounded-[3px] border-[0.5px] border-dark-7 dark:border-dark-3 px-3 py-0.5 text-sm font-medium text-dark dark:text-white transition hover:border-dark hover:bg-dark"
                                        >
                                        Remove
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </template>

                    <div class="flex items-center justify-end">
                        <p class="mr-6 flex items-center text-base text-body-color dark:text-dark-6">
                            <span> Subtotal: </span>
                            <span class="pl-2 font-medium text-dark dark:text-white" x-text="'$'+carts.reduce((acc, cart) => parseFloat(acc) + parseFloat(cart.price), 0).toLocaleString()"></span>
                        </p>
                        <a
                            :href="'checkout?carts='+encodeURIComponent(JSON.stringify(carts));"
                            class="inline-flex items-center justify-center rounded-md bg-dark py-[10px] px-7 text-center text-base font-semibold text-white hover:dark"
                        >
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Checkout Section End -->
    </div>
</div>