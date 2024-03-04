<x-app-layout>
    <div class="h-full space-y-8" x-data="{ link: null }">
        <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
            <div>
                <h3 class=" font-bold">Settings</h3>
            </div>
            <span class="text-xs">Invite users to your team</span>
        </div>
        <div class=" py-5 md:px-10 ">
            <ul class=" flex flex-col md:flex-row gap-6">
                <a href="{{ route('settings.setting') }}">
                    <li @click="link = 'Send'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 "><i
                            class='bx bxs-cog text-xl mr-2'></i> Setting</li>
                </a>
                <a href="{{ route('settings.users') }}">
                    <li @click="link = 'Url'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 border-b-2 border-cyan-700">
                        <i class='bx bxs-group text-xl mr-2'></i>Users
                    </li>
                </a>
                {{-- <a href="{{ route('settings.email') }}">
                    <li @click="link = 'signature'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"><i
                            class='bx bxs-envelope text-xl mr-2'></i> Email</li>
                </a> --}}
                <a href="{{ route('settings.theme') }}">
                    <li @click="link = 'QR'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"><i
                            class='bx bx-cookie text-xl mr-2'></i>Theme</li>
                </a>
            </ul>
        </div>

        <section>
            <div class="relative overflow-x-auto shadow sm:rounded-lg w-full md:w-[90%] mx-auto space-y-5 py-5">
                <h1 class=" font-semibold text-md px-6 ">Users ({{ $site->users()->count() }}/3)</h1>
                @if ($errors->any())
                    <div class="bg-red-200 text-red-500 p-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-200 text-green-500 p-4">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-cyan-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($site->users as $user)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-3 font-semibold">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-3 font-semibold">
                                    Active
                                </td>
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
                                        <form action="{{ route('settings.deleteUser', ['id' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="w-full text-left px-4 py-2 flex items-center text-red-500 hover:text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5 mr-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>

                                        </form>
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
                            class="flex items-center hover:bg-cyan-100 hover:text-cyan-700 bg-cyan-700 text-cyan-100 transition-all duration-300 font-semibold rounded-md whitespace-nowrap  px-4 py-2 ml-4">
                            <i class='bx bx-plus mr-1'></i> Add user
                        </button>
                    </form>
                </div>
                    
                @endif
            </div>
    </div>

    </section>
    </div>
</x-app-layout>
