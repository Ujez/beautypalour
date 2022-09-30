
@extends('layouts.heading')
<section>
    <div class="overflow-hidden bg-gray-50 font-sans">
        <div class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24 ">
            <div class="w-full max-w-xl mx-auto p-12 border border-gray-200 ">
                <x-jet-validation-errors class="mb-4" />
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <div>
                    <a href="{{ route('home') }}">
                        <div aria-label="logo" role="img">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg1.svg"
                                alt="logo" />
                        </div>
                    </a>
                </div>
                <h2 class=" mt-6 text-3xl text-neutral-600  ">Sign Up.</h2>
                <div class="mt-8">
                    <div class="mt-6">
                        <form action="{{ route('register') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="phone" value="{{ __('phone') }}"
                                    class="block text-sm font-medium text-neutral-600 uppercase ">PHONE
                                </label>
                                <div class="mt-1">
                                    <input id="phone" name="phone" type="text" :value="old('phone')" required
                                        autofocus placeholder="phone"
                                        class=" block w-full px-5 py-3 text-base placeholder-gray-300 
                                         transition duration-500 ease-in-out transform border border-transparent
                                          rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent
                                           focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <label for="address" value="{{ __('address') }}"
                                    class="block text-sm font-medium text-neutral-600 uppercase ">ADDRESS
                                </label>
                                <div class="mt-1">
                                    <input id="address" name="address" type="text" :value="old('address')" required
                                        autofocus placeholder="address"
                                        class=" block w-full px-5 py-3 text-base placeholder-gray-300 
                                         transition duration-500 ease-in-out transform border border-transparent
                                          rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent
                                           focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <label for="name" value="{{ __('name') }}"
                                    class="block text-sm font-medium text-neutral-600 uppercase ">NAME
                                </label>
                                <div class="mt-1">
                                    <input id="name" name="name" type="text" :value="old('name')" required
                                        autofocus placeholder="name"
                                        class=" block w-full px-5 py-3 text-base placeholder-gray-300 
                                         transition duration-500 ease-in-out transform border border-transparent
                                          rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent
                                           focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <label for="email" value="{{ __('email') }}"
                                    class="block text-sm font-medium text-neutral-600 uppercase ">EMAIL
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" :value="old('email')"
                                        required autofocus placeholder="email"
                                        class=" block w-full px-5 py-3 text-base placeholder-gray-300 
                                         transition duration-500 ease-in-out transform border border-transparent
                                          rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent
                                           focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <label for="password" value="{{ __('password') }}"
                                    class="block text-sm font-medium text-neutral-600 uppercase ">PASSWORD
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" :value="old('password')"
                                        required autofocus placeholder="phone"
                                        class=" block w-full px-5 py-3 text-base placeholder-gray-300 
                                         transition duration-500 ease-in-out transform border border-transparent
                                          rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent
                                           focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation" value="{{ __('Confirm password') }}"
                                    class="block text-sm font-medium text-neutral-600 uppercase ">CONFIRM PASSWORD
                                </label>
                                <div class="mt-1">
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        :value="old('password')" required autofocus placeholder="new-password"
                                        class=" block w-full px-5 py-3 text-base placeholder-gray-300 
                                         transition duration-500 ease-in-out transform border border-transparent
                                          rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent
                                           focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center
                                     text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl
                                      hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign
                                    up</button>
                            </div>
                        </form>
                        <div class="relative my-4">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-neutral-600"> Or continue with </span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline pr-10 text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                <button type="submit" href="{{ route('login') }}"
                                    class="items-center block px-10 py-3.5 text-base font-medium text-center text-blue-600 transition
                                duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                    <div class="flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6 ml-4"
                                            viewBox="0 0 48 48">
                                            <defs>
                                                <path id="a"
                                                    d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z">
                                                </path>
                                            </defs>
                                            <clipPath id="b">
                                                <use xlink:href="#a" overflow="visible"></use>
                                            </clipPath>
                                            <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"></path>
                                            <path clip-path="url(#b)" fill="#EA4335"
                                                d="M0 11l17 13 7-6.1L48 14V0H0z">
                                            </path>
                                            <path clip-path="url(#b)" fill="#34A853"
                                                d="M0 37l30-23 7.9 1L48 0v48H0z">
                                            </path>
                                            <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z">
                                            </path>
                                        </svg>
                                        <span class="ml-4"> Signup with Google</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

</html>
