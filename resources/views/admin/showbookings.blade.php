@extends('admin.index')
@section('showbookings')
<div class="mt-10">
    <div class="min-w-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6 overflow-auto">
                <table class="min-w-max w-full table-auto ">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Customer Name</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-center">Users</th>
                            <th class="py-3 px-6 text-center">Phone</th>
                            <th class="py-3 px-6 text-center">Specialist</th>
                            <th class="py-3 px-6 text-left">Message</th>
                            <th class="py-3 px-6 text-left">Status</th>
                            <th class="py-3 px-6 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($data as $booking)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left ">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $booking->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $booking->email }}</span>
                                    </div>
                                </td>
                                
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $booking->user_id }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $booking->phone }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $booking->specialist }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $booking->message }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $booking->status }}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center flex items-center">

                                    <a href="" onclick="return confirm('Are you sure about this.')">
                                        <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a
                                        onclick="return confirm('Are you sure about this.')">
                                        <div class="w-5 mr-2 transform hover:text-green-500 hover:scale-110">
                                            <i class="fas fa-check mr-3"></i>
                                        </div>
                                    </a>
                                </td>
                             
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<style>

    .table {
        border-spacing: 0 15px;
    }

    i {
        font-size: 1rem !important;
    }

</style>
</body>

</html>
@endsection