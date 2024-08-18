<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
                    aria-controls="separator-sidebar" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="/" class="flex ms-2 md:me-24">
                    <img src="{{ asset('images/logo.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap capitalize">{{ $site->name }}</span>
                </a>
            </div>
            <div class=" flex items-center space-x-3">
                {{-- <div>
                    <h2 class="capitalize font-semibold tracking-wider text-xl text-slate-300">{{ $site->name }}</h2>
                </div> --}}
                <ul class="hidden lg:flex  font-medium border-gray-200  items-center space-x-3  lg:w-96 ">
                    <li class=" w-full">
                        <label for="file" class="text-xs text-slate-500 flex justify-between "><span><i class="bx bx-group"></i>Total Users</span>
                            <span>{{ $site->users()->count() }}/{{ $totalNumberOfUsers }}</span></label>
                        <div class="w-full bg-gray-200 rounded-full h-1.5  ">
                            <div class="bg-orange-500 h-1.5 rounded-full " style="width: {{ $UserPercentage }}%"></div>
                        </div>
            
                    </li>
                    <li class=" w-full">
                        <label for="file" class="text-xs text-slate-500 flex justify-between "><span><i class="bx bx-envelope"></i>Email</span> <span>{{ $totalEmail ?? 0 }}/{{ $totalNumberOfEmail }}</span>
                        </label>
                        <div class="w-full bg-gray-200 rounded-full h-1.5  ">
                            <div class="bg-orange-500 h-1.5 rounded-full " style="width: {{ $emailPercentage }}%"></div>
                        </div>
            
                    </li>
                    <li class=" w-full">
                        <label for="file" class="text-xs text-slate-500 flex justify-between "><span><i class="bx bx-conversation"></i>Response</span>
                            <span>{{ $totlalResponse }}/{{ $totalNumberOfResponse }}</span></label>
                        <div class="w-full bg-gray-200 rounded-full h-1.5  ">
                            <div class="bg-orange-500 h-1.5 rounded-full " style="width: {{ $responsePercentage }}%"></div>
                        </div>
            
                    </li>
                </ul>
            
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm items-center bg-slate-200 hover:bg-gray-100 rounded-xl focus:ring-4 focus:ring-gray-100 md:space-x-2 "
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                                    <div class="text-sm font-semibold hidden md:block text-start pr-2 pb-1">
                                       <p> {{ auth()->user()->name }}</p>
                                       <p class="text-xs"> {{ auth()->user()->email }}</p>
                                     </div>
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow "
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 capitalize" role="none">
                                    {{ auth()->user()->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate " role="none">
                                    {{ auth()->user()->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{ route('home') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  "
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                        {{-- <i class='bx bx-user text-xl mr-2 {{ request()->routeIs('review.share') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i> --}}
                                        <span class="text-sm ">Profile</span>
                                    </a>
                                </li>

                                <li class=" w-full px-4 py-2 block lg:hidden">
                                    <label for="file" class="text-xs text-slate-500 flex justify-between "><span><i class="bx bx-group"></i>Total Users</span>
                                        <span>{{ $site->users()->count() }}/{{ $totalNumberOfUsers }}</span></label>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5  ">
                                        <div class="bg-orange-500 h-1.5 rounded-full " style="width: {{ $UserPercentage }}%"></div>
                                    </div>
                        
                                </li>
                                <li class=" w-full px-4 py-2 block lg:hidden">
                                    <label for="file" class="text-xs text-slate-500 flex justify-between "><span><i class="bx bx-envelope"></i>Email</span> <span>{{ $totalEmail ?? 0 }}/{{ $totalNumberOfEmail }}</span>
                                    </label>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5  ">
                                        <div class="bg-orange-500 h-1.5 rounded-full " style="width: {{ $emailPercentage }}%"></div>
                                    </div>
                        
                                </li>
                                <li class=" w-full px-4 py-2 block lg:hidden">
                                    <label for="file" class="text-xs text-slate-500 flex justify-between "><span><i class="bx bx-conversation"></i>Response</span>
                                        <span>{{ $totlalResponse }}/{{ $totalNumberOfResponse }}</span></label>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5  ">
                                        <div class="bg-orange-500 h-1.5 rounded-full " style="width: {{ $responsePercentage }}%"></div>
                                    </div>
                        
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>



