<x-app-layout>
    <div class="h-full space-y-4" x-data="{ link: null }">
        
        <h1 class="text-xl px-3 md:px-10 capitalize font-medium">User Settings</h1>
        <div class=" py-5 md:px-10 ">
            <div class="lg:flex items-center">
                <ul class=" flex flex-col md:flex-row gap-6 bg-white px-2 py-1 rounded-lg">
                    <a href="{{ route('settings.setting') }}">
                        <li @click="link = 'Send'"
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2   "><i
                                class='bx bxs-cog text-lg mr-1'></i> Setting</li>
                    </a>
                    <a href="{{ route('settings.users') }}">
                        <li @click="link = 'Url'"
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2   bg-gray-100 rounded-lg">
                            <i class='bx bx-group text-lg mr-1'></i>Users
                        </li>
                    </a>
                    <a href="{{ route('settings.theme') }}">
                        <li @click="link = 'QR'"
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2  "><i
                                class='bx bx-cookie text-lg mr-1'></i>Theme</li>
                    </a>
                </ul>
                <h1 class=" font-semibold text-md px-6 py-2 text-gray-500 ">Users ({{ $site->users()->count() }}/3)</h1>
            </div>
        </div>

        <section>
            <div class="relative overflow-x-auto shadow sm:rounded-lg w-full md:w-[90%] mx-auto space-y-5 pb-5 bg-white">
                <x-session-msg />
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs  uppercase bg-gray-50  ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Status
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($site->users as $user)
                            <tr
                                class="bg-white border- hover:bg-gray-50 ">
                                <td class="px-6 py-3 font-semibold">
                                    {{ $user->email }}
                                </td>
                                {{-- <td class="px-6 py-3 font-semibold">
                                    Active
                                </td> --}}
                                <td class="px-6 py-3 font-semibold">
                                    @if ($user->is_admin)
                                        Owner
                                    @else
                                        Member
                                    @endif
                                </td>
                                <td class="px-6 py-3 font-semibold">
                                    @if ($user->is_admin)
                                    @else
                                       @if (auth()->user()->is_admin)
                                       <button type="button"
                                       data-item-id="{{ $user->id }}"
                                           class="delete-btn w-full text-left px-4 py-2 flex items-center text-red-500 hover:text-red-700">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                               viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                               class="w-5 h-5 mr-1">
                                               <path stroke-linecap="round" stroke-linejoin="round"
                                                   d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                           </svg>
                                       </button>
                                       @endif
                                    @endif
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
                @if ($site->users()->count() < 3)
                    <div class="grid grid-cols-1 md:grid-cols-3  px-6">
                        <form action="{{ route('settings.createUser') }}" method="post"
                            class="flex items-center col-span-2">
                            @csrf
                            <input type="email" name="email" value=""
                                class="text-gray-400 form-control text-md w-56" placeholder="Add user with email">
                            <button type="submit"
                                class="flex items-center hover:bg-orange-200 hover:text-orange-500 bg-orange-500 text-orange-100 transition-all duration-300 font-semibold rounded-md whitespace-nowrap  px-4 py-2 ml-4">
                                <i class='bx bx-plus mr-1'></i> Add user
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let deleteButtons = document.querySelectorAll('.delete-btn');

                deleteButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        let itemId = button.getAttribute('data-item-id');

                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                var deleteRoute =
                                    "{{ route('settings.deleteUser', ['id' => ':itemId']) }}";
                                deleteRoute = deleteRoute.replace(':itemId', itemId);

                                fetch(deleteRoute, {
                                        method: 'DELETE',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token in the headers using Blade syntax
                                        }
                                    })
                                    .then(response => {
                                        Swal.fire({
                                            title: "Deleted!",
                                            text: "Your item has been deleted.",
                                            icon: "success"
                                        }).then(() => {
                                            location
                                                .reload();
                                        });
                                    })
                                    .catch(error => {
                                        Swal.fire("Error", "Failed to delete the item",
                                            "error");
                                    });
                            }
                        });
                    });
                });
            });
        </script>
    </div>
</x-app-layout>
