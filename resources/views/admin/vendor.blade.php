@extends('admin.index')
@section('vendor')
    <section class="overflow-hidden text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                @if (session('success'))
                <div class="px-40 my-10 ">
                    <div id="dismiss" class="bg-green-100 border  px-4 py-3 rounded relative" role="alert">
                        <p class="font-bold">{{ session('success') }}</p>
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

                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4  text-neutral-600">Add A Vendor</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Vendors are added by the admin only</p>
            </div>
            <form action="{{ url('upload_vendor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input required type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
                                <input required type="phone" id="phone" name="phone"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="vid" class="leading-7 text-sm text-gray-600">Vendor UID</label>
                                <input required type="vid" id="vid" name="vid"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="specialty" class="leading-7 text-sm text-gray-600">Choose Specialty</label>
                                {{-- <input type="select" id="email" name="email" "> --}}
                                <select
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2
                         focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    id="specialists" name="specialty">
                                    <option>--select--</option>
                                    <option value="Cosmetologist">Cosmetologist</option>
                                    <option value="Masseus">Masseus</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Hairstylist">Hairstylist</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="number" class="leading-7 text-sm text-gray-600">Vendor Image</label>
                                <input required type="file" id="file" name="file"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea required id="message" name="message"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit"
                                class="flex mx-auto text-white border-0 py-2 px-8 text-base font-medium text-center  transition duration-500 ease-in-out transform bg-gray-600 rounded hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Submit</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
