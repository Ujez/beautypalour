@extends('admin.index')
@section('vendor')
    <section class="overflow-hidden text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                @if (session('success'))
                  <div class="alert bg-yellow-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full alert-dismissible fade show"
                        role="alert">
                        <p class="text-center">{{ session('success') }}</p>
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
