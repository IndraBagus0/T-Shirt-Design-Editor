<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')

</head>

<body class="">
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative">
                    <button type="button"
                        class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                        aria-expanded="false">
                        Product
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!--
                'Product' flyout menu, show/hide based on flyout menu state.

                Entering: "transition ease-out duration-200"
                  From: "opacity-0 translate-y-1"
                  To: "opacity-100 translate-y-0"
                Leaving: "transition ease-in duration-150"
                  From: "opacity-100 translate-y-0"
                  To: "opacity-0 translate-y-1"
              -->
                    <div
                        class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                        <div class="p-4">
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Analytics
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                                </div>
                            </div>
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Engagement
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                                </div>
                            </div>
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Security
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                                </div>
                            </div>
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Integrations
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                                </div>
                            </div>
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Automations
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                            <a href="#"
                                class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                                        clip-rule="evenodd" />
                                </svg>
                                Watch demo
                            </a>
                            <a href="#"
                                class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                        clip-rule="evenodd" />
                                </svg>
                                Contact sales
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <div class="-mx-3">
                                <button type="button"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                    Product
                                    <!--
                        Expand/collapse icon, toggle classes based on menu open state.

                        Open: "rotate-180", Closed: ""
                      -->
                                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                <div class="mt-2 space-y-2" id="disclosure-1">
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch
                                        demo</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                                        sales</a>
                                </div>
                            </div>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="bg-white">
        <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

            <div class="fixed inset-0 z-40 flex">
                <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
                <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                    <div class="flex px-4 pb-2 pt-5">
                        <button type="button"
                            class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="mt-2">
                        <div class="border-b border-gray-200">
                            <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                                <button id="tabs-1-tab-1"
                                    class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900"
                                    aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                                <button id="tabs-1-tab-2"
                                    class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900"
                                    aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                            </div>
                        </div>

                        <!-- 'Women' tab panel, show/hide based on tab state. -->
                        <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1"
                            role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                            alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                            alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Basic Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                            </div>
                            <div>
                                <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                                <ul role="list" aria-labelledby="women-clothing-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories
                                </p>
                                <ul role="list" aria-labelledby="women-accessories-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="women-brands-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 'Men' tab panel, show/hide based on tab state. -->
                        <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2"
                            role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                            alt="Drawstring top with elastic loop closure and textured interior padding."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                                <div class="group relative text-sm">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                            alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Artwork Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                            </div>
                            <div>
                                <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                                <ul role="list" aria-labelledby="men-clothing-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories
                                </p>
                                <ul role="list" aria-labelledby="men-accessories-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="men-brands-heading-mobile"
                                    class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                        </div>
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                        </div>
                    </div>

                    <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                        </div>
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <a href="#" class="-m-2 flex items-center p-2">
                            <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                                class="block h-auto w-5 flex-shrink-0">
                            <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                            <span class="sr-only">, change currency</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <header class="relative bg-white">
            <p
                class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">
                Get free delivery on orders over $100</p>

            <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="border-b border-gray-200">
                    <div class="flex h-16 items-center">
                        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                        <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>

                        <!-- Logo -->
                        <div class="ml-4 flex lg:ml-0">
                            <a href="#">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="">
                            </a>
                        </div>

                        <!-- Flyout menus -->
                        <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                            <div class="flex h-full space-x-8">
                                <div class="flex">
                                    <div class="relative flex">
                                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                        <button type="button"
                                            class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out hover:text-gray-800"
                                            aria-expanded="false">Women</button>
                                    </div>

                                    <!--
                    'Women' flyout menu, show/hide based on flyout menu state.

                    Entering: "transition ease-out duration-200"
                      From: "opacity-0"
                      To: "opacity-100"
                    Leaving: "transition ease-in duration-150"
                      From: "opacity-100"
                      To: "opacity-0"
                  -->
                                    <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true">
                                        </div>

                                        <div class="relative bg-white">
                                            <div class="mx-auto max-w-7xl px-8">
                                                <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                                    <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                New Arrivals
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                                                    alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                Basic Tees
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                    </div>
                                                    <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                                                        <div>
                                                            <p id="Clothing-heading"
                                                                class="font-medium text-gray-900">Clothing</p>
                                                            <ul role="list" aria-labelledby="Clothing-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Tops</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Dresses</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Pants</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Denim</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sweaters</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">T-Shirts</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Jackets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Activewear</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Browse All</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Accessories-heading"
                                                                class="font-medium text-gray-900">Accessories</p>
                                                            <ul role="list" aria-labelledby="Accessories-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Watches</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Wallets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Bags</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sunglasses</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Hats</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Brands-heading" class="font-medium text-gray-900">
                                                                Brands</p>
                                                            <ul role="list" aria-labelledby="Brands-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">Full
                                                                        Nelson</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">My
                                                                        Way</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Re-Arranged</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Counterfeit</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Significant
                                                                        Other</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="relative flex">
                                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                        <button type="button"
                                            class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out hover:text-gray-800"
                                            aria-expanded="false">Men</button>
                                    </div>

                                    <!--
                    'Men' flyout menu, show/hide based on flyout menu state.

                    Entering: "transition ease-out duration-200"
                      From: "opacity-0"
                      To: "opacity-100"
                    Leaving: "transition ease-in duration-150"
                      From: "opacity-100"
                      To: "opacity-0"
                  -->
                                    <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true">
                                        </div>

                                        <div class="relative bg-white">
                                            <div class="mx-auto max-w-7xl px-8">
                                                <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                                    <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                                                    alt="Drawstring top with elastic loop closure and textured interior padding."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                New Arrivals
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                        <div class="group relative text-base sm:text-sm">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                                                    alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                                                    class="object-cover object-center">
                                                            </div>
                                                            <a href="#"
                                                                class="mt-6 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10"
                                                                    aria-hidden="true"></span>
                                                                Artwork Tees
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                    </div>
                                                    <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                                                        <div>
                                                            <p id="Clothing-heading"
                                                                class="font-medium text-gray-900">Clothing</p>
                                                            <ul role="list" aria-labelledby="Clothing-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Tops</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Pants</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sweaters</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">T-Shirts</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Jackets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Activewear</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Browse All</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Accessories-heading"
                                                                class="font-medium text-gray-900">Accessories</p>
                                                            <ul role="list" aria-labelledby="Accessories-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Watches</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Wallets</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Bags</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Sunglasses</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Hats</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <p id="Brands-heading" class="font-medium text-gray-900">
                                                                Brands</p>
                                                            <ul role="list" aria-labelledby="Brands-heading"
                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Re-Arranged</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#"
                                                                        class="hover:text-gray-800">Counterfeit</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">Full
                                                                        Nelson</a>
                                                                </li>
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800">My
                                                                        Way</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                                <a href="#"
                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                            </div>
                        </div>

                        <div class="ml-auto flex items-center">
                            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign
                                    in</a>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create
                                    account</a>
                            </div>

                            <div class="hidden lg:ml-8 lg:flex">
                                <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                                    <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                                        class="block h-auto w-5 flex-shrink-0">
                                    <span class="ml-3 block text-sm font-medium">CAD</span>
                                    <span class="sr-only">, change currency</span>
                                </a>
                            </div>

                            <!-- Search -->
                            <div class="flex lg:ml-6">
                                <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Cart -->
                            <div class="ml-4 flow-root lg:ml-6">
                                <a href="#" class="group -m-2 flex items-center p-2">
                                    <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    <span
                                        class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                    <span class="sr-only">items in cart, view bag</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>

</body>

</html>
