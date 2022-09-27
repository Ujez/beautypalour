@include('layouts.header')

<!-- component -->
<div class="mt-10">
    <div class="min-w-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6 overflow-auto">
                <table class="min-w-max w-full table-auto ">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Vendor</th>
                            <th class="py-3 px-6 text-left">Date</th>
                            {{-- <th class="py-3 px-6 text-center">Users</th> --}}
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-left">Message</th>
                            <th class="py-3 px-6 text-left">Cancel</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($booking as $bookings)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left ">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $bookings->specialist }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $bookings->date }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span
                                        class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $bookings->status }}</span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $bookings->message }}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">

                                    <a href="{{ url('cancel_bookings/'. $bookings->id) }}" onclick="return confirm('Are you sure about this.')">
                                        <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
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

    .table tr {
        border-radius: 20px;
    }

    tr td:nth-child(n+5),
    tr th:nth-child(n+5) {
        border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }
</style>
</body>

</html>
@include('layouts.footer')
