<div x-show="modalOpen" 
    id="checkoutmodal"
    class="opacity-0 fixed top-0 left-0 flex 
    items-center justify-center w-full h-screen py-10 overflow-y-scroll
     bg-gray-2 dark:bg-dark">
    <div @click.outside="modalOpen = false" class="mx-auto 
     rounded-[10px] bg-white 
    dark:bg-dark-2 p-8 shadow-1 dark:shadow-3">
        <!-- ====== Checkout Section Start -->
        <section class="bg-gray-2 dark:bg-dark pt-20 pb-10 lg:pt-[120px] lg:pb-20">
            <div class="container mx-auto">
                <h3 class="mb-11 text-2xl font-semibold text-dark dark:text-white md:leading-[40px] md:text-[28px]">
                    Shopping cart
                </h3>
                <div class="space-y-10">
                    <div class="border-b border-stroke dark:border-dark-3 pb-7">
                        <div class="flex items-center">
                            <div
                                class="mr-[22px] h-[90px] w-full max-w-[80px] overflow-hidden rounded-[5px] xs:h-[100px] xs:max-w-[100px]"
                                >
                                <img
                                src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/shopping-carts/shopping-cart-01/image-01.jpg"
                                alt="product"
                                class="h-full w-full object-cover object-center"
                                />
                            </div>
                            <div class="w-full">
                                <div class="flex flex-wrap justify-between">
                                <a
                                    href="javascript:void(0)"
                                    class="block text-base font-medium text-dark dark:text-white hover:text-primary mb-0.5"
                                    >
                                Modern Lounge Chair
                                </a>
                                <div class="text-right">
                                    <span class="text-base font-medium text-dark dark:text-white"> $385 </span>
                                </div>
                                </div>
                                <p
                                class="mb-3 text-sm text-body-color dark:text-dark-6"
                                >
                                Quantity: 1
                                </p>
                                <div class="flex items-center gap-[10px]">
                                <button
                                    class="rounded-[3px] border-[0.5px] border-dark-7 dark:border-dark-3 px-3 py-0.5 text-sm font-medium text-dark dark:text-white transition hover:border-dark hover:bg-dark"
                                    >
                                Edit
                                </button>
                                <button
                                    class="rounded-[3px] border-[0.5px] border-dark-7 dark:border-dark-3 px-3 py-0.5 text-sm font-medium text-dark dark:text-white transition hover:border-dark hover:bg-dark"
                                    >
                                Remove
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-stroke dark:border-dark-3 pb-7">
                        <div class="flex items-center">
                            <div
                                class="mr-[22px] h-[90px] w-full max-w-[80px] overflow-hidden rounded-[5px] xs:h-[100px] xs:max-w-[100px]"
                                >
                                <img
                                src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/shopping-carts/shopping-cart-01/image-02.jpg"
                                alt="product"
                                class="h-full w-full object-cover object-center"
                                />
                            </div>
                            <div class="w-full">
                                <div class="flex flex-wrap justify-between">
                                <a
                                    href="javascript:void(0)"
                                    class="block text-base font-medium text-dark dark:text-white hover:text-primary mb-0.5"
                                    >
                                Mini Basic Table Lamp
                                </a>
                                <div class="text-right">
                                    <span class="text-base font-medium text-dark dark:text-white"> $129 </span>
                                </div>
                                </div>
                                <p
                                class="mb-3 text-sm text-body-color dark:text-dark-6"
                                >
                                Quantity: 2
                                </p>
                                <div class="flex items-center gap-[10px]">
                                <button
                                    class="rounded-[3px] border-[0.5px] border-dark-7 dark:border-dark-3 px-3 py-0.5 text-sm font-medium text-dark dark:text-white transition hover:border-dark hover:bg-dark"
                                    >
                                Edit
                                </button>
                                <button
                                    class="rounded-[3px] border-[0.5px] border-dark-7 dark:border-dark-3 px-3 py-0.5 text-sm font-medium text-dark dark:text-white transition hover:border-dark hover:bg-dark"
                                    >
                                Remove
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-stroke dark:border-dark-3 pb-7">
                        <div class="flex items-center">
                            <div
                                class="mr-[22px] h-[90px] w-full max-w-[80px] overflow-hidden rounded-[5px] xs:h-[100px] xs:max-w-[100px]"
                                >
                                <img
                                src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/shopping-carts/shopping-cart-01/image-03.jpg"
                                alt="product"
                                class="h-full w-full object-cover object-center"
                                />
                            </div>
                            <div class="w-full">
                                <div class="flex flex-wrap justify-between">
                                <a
                                    href="javascript:void(0)"
                                    class="block text-base font-medium text-dark dark:text-white hover:text-primary mb-0.5"
                                    >
                                Wooden Side Table
                                </a>
                                <div class="text-right">
                                    <span class="text-base font-medium text-dark dark:text-white"> $459 </span>
                                </div>
                                </div>
                                <p
                                class="mb-3 text-sm text-body-color dark:text-dark-6"
                                >
                                Quantity: 1
                                </p>
                                <div class="flex items-center gap-[10px]">
                                <button
                                    class="rounded-[3px] border-[0.5px] border-dark-7 dark:border-dark-3 px-3 py-0.5 text-sm font-medium text-dark dark:text-white transition hover:border-dark hover:bg-dark"
                                    >
                                Edit
                                </button>
                                <button
                                    class="rounded-[3px] border-[0.5px] border-dark-7 dark:border-dark-3 px-3 py-0.5 text-sm font-medium text-dark dark:text-white transition hover:border-dark hover:bg-dark"
                                    >
                                Remove
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end">
                        <p
                            class="mr-6 flex items-center text-base text-body-color dark:text-dark-6"
                            >
                            <span> Subtotal: </span>
                            <span class="pl-2 font-medium text-dark dark:text-white">$973</span>
                        </p>
                        <button @click="modalOpen = false" class="inline-flex items-center justify-center rounded-md bg-primary py-[10px] px-7 text-center text-base font-semibold text-white hover:bg-blue-dark">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Checkout Section End -->
    </div>
</div>