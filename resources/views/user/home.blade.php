<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('frontend/dist/output.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/helper/swiper.css') }}" rel="stylesheet" />
    <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet" />
    <script>
        const defaultTheme = require('tailwindcss/defaultTheme');

        /** @type {import('tailwindcss').Config} */
        module.exports = {
            content: [
                './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
                './vendor/laravel/jetstream/**/*.blade.php',
                './storage/framework/views/*.php',
                './resources/views/**/*.blade.php',
            ],

            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                        'josefin': ['Josefin Sans', 'ubuntu'],

                    },
                },
            },

            plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
        };
    </script>
    <style type="text/tailwindcss">
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Josefin Sans", sans-serif;
        }
    </style>
    <!-- <script src="./helper/swiper.js"></script> -->
</head>

<body>



    <div class="w-full max-w-12xl font-josefin">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between lg:justify-start">
                <a href="{{ url('/') }}"
                    class="text-lg font-bold tracking-tighter text-black-600 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8">
                    BeautyPalour
                </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" style="display: none"></path>
                    </svg>
                </button>
            </div>

            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col items-center flex-grow pb-4 border-gray-600 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2 hidden">
                <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-black-600 focus:outline-none focus:shadow-outline"
                    href="#vendors">Vendors</a>
                <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-black-600 focus:outline-none focus:shadow-outline"
                    href="#products">Products</a>

                <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
                    @if (Route::has('login'))
                        @auth
                            <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 text-center text-black-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                                href="{{ url('mybookings') }}">My Bookings</a>
                            <x-app-layout></x-app-layout>
                      
                        @else
                            <a href="{{ route('login') }}"> <button
                                    class="items-center block px-10 py-2.5 text-base font-medium text-center text-black-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                    Sign in
                                </button></a>

                            <a href="{{ route('register') }}"> <button
                                    class="items-center block px-10 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-gray-600 rounded-xl hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                    Sign up
                                </button> </a>
                        @endauth
                    @endif


                </div>
            </nav>
        </div>
        <!-- Slider main container -->

        <section>
            <div class="px-4 py-5 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
                <div class="flex flex-col w-full mb-12 text-center">
                    <h1
                        class="max-w-5xl text-2xl font-black font-jost  leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
                        THE LEADING BEAUTY LOUNGE
                    </h1>
                    <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-center text-gray-500">
                        Style is something each of us already has, all we need to do is find it.
                        Style is a way to say who you are without having to speak. —Rachel Zoe
                    </p>
                </div>
                <div class="p-2 w-full">
                    <a href="#booknow"><button
                            class="flex mx-auto text-white border-0 py-2 px-8 text-base font-medium text-center  transition duration-500 ease-in-out transform bg-gray-600 rounded hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Book
                            Now</button></a>
                </div>
            </div>
        </section>

        <section id="intro">
            <div class="relative flex flex-col items-center justify-center mx-auto rounded-lg lg:px-10 max-w-7xl">
                <div class="swiper mySwiper max-w-screen-xl p-5 mx-auto object-cover
          object-center w-full "">
                    <div class="swiper-wrapper">
                        <img class="rounded-xl swiper-slide" src="{{ asset('frontend/images/9.jpg') }}"
                            alt="" />
                        <img class="rounded-xl swiper-slide" src="{{ asset('frontend/images/7.jpg') }}"
                            alt="" />
                        <img class="rounded-xl swiper-slide" src="{{ asset('frontend/images/b1.jpg') }}"
                            alt="" />
                        <img class="rounded-xl swiper-slide" src="{{ asset('frontend/images/5.jpg') }}"
                            alt="" />
                        <img class="rounded-xl swiper-slide" src="{{ asset('frontend/images/b3.jpg') }}"
                            alt="" />
                    </div>

                    <div class="w-1/6">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
        </section>

        <!------------------------------------- PRODUCTS CARDS --------------------------------->

        <div class="container mt-24 max-w-7xl m-auto flex flex-wrap flex-col md:flex-row items-center justify-start">
            <div class="flex flex-col w-full mb-12 text-center">
                <h1 id="products"
                    class="max-w-5xl text-2xl font-black leading-none tracking-tighter text-neutral-600 md:text-2xl lg:text-4xl lg:max-w-7xl">
                    Products
                </h1>
            </div>

            <div class="w-full lg:w-1/2 p-3 rounded-xl">
                <div class="flex flex-col lg:flex-row-reverse rounded overflow-hidden h-auto lg:h-32 border shadow-lg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="text-black font-normal text-xl mb-2 leading-tight">
                            Can coffee make you a biMter masseuse?
                        </div>
                        <p class="text-grey-darker text-base">Read more</p>
                    </div>
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover"
                        src="{{ asset('frontend/images/b1.jpg') }}" />
                </div>
            </div>
            <div class="w-full lg:w-1/2 p-3 rounded-xl">
                <div class="flex flex-col lg:flex-row-reverse rounded overflow-hidden h-auto lg:h-32 border shadow-lg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="text-black font-bold text-xl mb-2 leading-tight">
                            Can coffee make you a biMter masseuse?
                        </div>
                        <p class="text-grey-darker text-base">Read more</p>
                    </div>
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover"
                        src="{{ asset('frontend/images/13.jpeg') }}" />
                </div>
            </div>

            <div class="w-full lg:w-1/2 p-3 rounded-xl">
                <div class="flex flex-col lg:flex-row-reverse rounded overflow-hidden h-auto lg:h-32 border shadow-lg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="text-black font-bold text-xl mb-2 leading-tight">
                            Can coffee make you a biMter masseuse?
                        </div>
                        <p class="text-grey-darker text-base">Read more</p>
                    </div>
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover"
                        src="{{ asset('frontend/images/b2.jpeg') }}" />
                </div>
            </div>

            <div class="w-full lg:w-1/2 p-3 rounded-xl">
                <div class="flex flex-col lg:flex-row-reverse rounded overflow-hidden h-auto lg:h-32 border shadow-lg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="text-black font-bold text-xl mb-2 leading-tight">
                            Can coffee make you a biMter masseuse?
                        </div>
                        <p class="text-grey-darker text-base">Read more</p>
                    </div>
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover"
                        src="{{ asset('frontend/images/b3.jpg') }}" />
                </div>
            </div>

            <!------------------------------- CARDS end -------------------------->

            <!------------------------------ TEAM START ------------------------->
            @include('user.team')
            <!------------------------------ TEAM END ------------------------->


        </div>
        @if (session('success'))
            <div class="px-40 mt-24 ">
                <div id="dismiss" class="bg-green-100 border  px-4 py-3 rounded relative" role="alert">
                    <p>{{ session('success') }}</p>
                    <span id="toggle" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-gray-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>

            </div>
        @endif

        @include('user.appointment')
    </div>


    <!-- FOOTER -->

    <div class="pt-12 xl:pt-14 px-6">
        <div tabindex="0" aria-label="footer"
            class="focus:outline-none w-full border-gray-300 dark:border-gray-700 border-t lg:w-11/12 md:w-11/12 lg:mx-auto md:mx-auto">
            <div class="container mx-auto py-12">
                <div class="xl:flex lg:flex md:flex pt-6">
                    <div class="w-11/12 xl:w-3/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0">
                        <div class="flex items-center mb-6 xl:mb-0 lg:mb-0">
                            <div aria-label="logo" role="img">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg1.svg"
                                    alt="logo" />
                            </div>
                            <p tabindex="0" class="focus:outline-none ml-3 font-bold text-xl">
                                BeautyPalour
                            </p>
                        </div>
                    </div>
                </div>
                <div class="xl:flex flex-wrap justify-between xl:mt-24 mt-16 pb-6 pl-3 sm:pl-0">
                    <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 xl:mb-0">
                        <p tabindex="0" class="focus:outline-none text-gray-800 text-base">
                        <div id="copyright"></div>BeautyPalour. All Rights Reserved
                        </p>
                    </div>
                    <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0">
                        <ul class="xl:flex lg:flex md:flex sm:flex justify-between">
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Terms of
                                    service</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Privacy
                                    Policy</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Security</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Sitemap</a>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="w-11/12 xl:w-1/6 lg:w-1/6 sm:w-11/12 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0 mt-8 lg:mt-8 xl:mt-0">
                        <div
                            class="flex justify-start sm:justify-start xl:justify-end space-x-6 pr-2 xl:pr-0 lg:pr-0 md:pr-0 sm:pr-0">
                            <div>
                                <a aria-label="Twitter" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg2.svg"
                                        alt="Twitter" />
                                </a>
                            </div>
                            <div>
                                <a aria-label="Instagram" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg3.svg"
                                        alt="Instagram" />
                                </a>
                            </div>
                            <div>
                                <a aria-label="Dribble" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg4.svg"
                                        alt="Dribble" />
                                </a>
                            </div>
                            <div>
                                <a aria-label="Github" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg5.svg"
                                        alt="Github" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- FOOTER END -->



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const paragraph = `
      <p>
        Copyright &copy; ${new Date().getFullYear()} 
      </p>
    `;

        document.getElementById("copyright").innerHTML = paragraph;

        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        const targetDiv = document.getElementById("dismiss");
        const btn = document.getElementById("toggle");
        btn.onclick = function() {
            if (targetDiv.style.display !== "none") {
                targetDiv.style.display = "none";
            } else {
                targetDiv.style.display = "block";
            }
        };
    </script>

</body>

</html>
