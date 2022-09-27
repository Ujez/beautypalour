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
                <a href="{{ url("/") }}"
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