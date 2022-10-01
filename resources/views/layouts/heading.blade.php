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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo&family=Josefin+Sans:wght@700&display=swap"
        rel="stylesheet">
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
                        josefin: ['Josefin Sans', 'ubuntu'],

                    },
                    fontWeight: {
                        'extra-light': 200,
                        bold: 700,
                        light: 300,
                    }
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

        #fweight {
            /* font-weight: normal; */
            font-family: 'Cardo', serif;
        }

        .fweight {
            /* font-weight: normal; */
            font-family: 'Cardo', serif;
        }
    </style>
    <!-- <script src="./helper/swiper.js"></script> -->
</head>
