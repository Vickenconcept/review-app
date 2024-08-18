<x-app-layout>
    <div x-data="{ openModal: false }" class="  space-y-10 pb-50  h-full">
        <div class=" px-3 md:px-10 ">
            <div>
                <h3 class=" font-medium text-2xl">Resell</h3>
            </div>
            <span class="text-gray-500">Manage Users</span>
        </div>
        <div class=" px-3 md:px-10 ">
            <x-session-msg />
        </div>

        <div class=" px-3 md:px-10">
            <button
                class="bg-orange-500 hover:bg-orange-600 hover:shadow px-4 py-1.5 font-semibold text-blue-50 rounded-md "
                @click="openModal = true"><i class="bx bx-plus mr-2"></i> Register user</button>
        </div>

        {{-- modal --}}
        <div class="fixed items-center justify-center   flex -top-10 left-0 mx-auto w-full h-full bg-gray-600 bg-opacity-20 z-50 transition duration-1000 ease-in-out"
            x-show="openModal" style="display: none;">
            <div @click.away="openModal = false"
                class="bg-white w-[80%] md:w-[70%] lg:w-[40%] shadow-inner  rounded-xl overflow-auto  pb-6 px-5 transition-all relative duration-700">
                <div class="space-y-5 py-5 ">
                    <form class="space-y-3" action="{{ route('reseller.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="input-label text-slate-600 text-xs font-semibold">Name</label>
                            <div class="mt-2">
                                <input id="name" name="name" value="{{ old('name') }}" type="text"
                                    autocomplete="name" class="form-control" placeholder="Smith Joe">
                                @error('name')
                                    <span class="text-xs text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div>
                            <label for="email" class="input-label text-slate-600 text-xs font-semibold">Email
                                Address</label>
                            <div class="mt-2">
                                <input id="email" name="email" value="{{ old('email') }}" type="email"
                                    autocomplete="email" class="form-control" placeholder="example@gmail.com">
                                @error('email')
                                    <span class="text-xs text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="url" class="input-label text-slate-600 text-xs font-semibold">Url</label>
                            <div class="mt-2">
                                <input id="url" name="url" value="{{ old('url') }}" type="text"
                                    autocomplete="url" class="form-control" placeholder="https://example.com">
                                @error('url')
                                    <span class="text-xs text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password"
                                    class="input-label text-slate-600 text-xs font-semibold">Password</label>
                            </div>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    class="form-control" placeholder="********">
                                @error('password')
                                    <span class="text-xs text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password_confirmation"
                                    class="input-label text-slate-600 text-xs font-semibold">Password
                                    Confirmation</label>
                            </div>
                            <div class="mt-2">
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                    autocomplete="current-password" class="form-control" placeholder="********">
                            </div>
                        </div>

                        <div class="pt-3">
                            <x-main-button type="submit" class="btn-primary2  ">Create User</x-main-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <h1 class="px-3 md:px-10 font-bold tracking-wider">Users</h1>

        <div class="my-10 px-3 md:px-10">

            <livewire:resell-table />

        </div>
    </div>


</x-app-layout>
