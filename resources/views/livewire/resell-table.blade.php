<div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{ $user->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{ $user->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            {{-- <button wire:click="deletUser({{ $user->id }})">
                                <i class='bx bxs-trash text-xl text-red-500 hover:text-red-700'></i>
                            </button> --}}

                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"> <i
                                    class='bx bxs-trash text-xl text-red-500 hover:text-red-700'></i>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li class="hover:bg-red-200 text-red-500 hover:text-red-700 cursor-pointer"
                                        wire:click="deletUser({{ $user->id }})">
                                        Are you sure ?<i class='bx bxs-trash text-md ml-2 '></i>

                                    </li>

                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="bg-cyan-100 text-cyan-500 py-4 text-center rounded col-span-4" colspan="4">No Data
                            Yet.</td>
                    </tr>
                @endforelse

            </tbody>
            {{ $users->links() }}
        </table>
    </div>

</div>
