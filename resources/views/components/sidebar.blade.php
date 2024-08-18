    <aside id="separator-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 mt-14 text-gray-600"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white ">
            <ul class="pt-4 space-y-3 font-medium  border-gray-200 ">
                <li>
                    <a href="{{ route('home') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25  {{ request()->routeIs('home') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bx-home text-xl mr-2 {{ request()->routeIs('home') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings.users') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25  {{ request()->routeIs('settings.users') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bx-group text-xl mr-2 {{ request()->routeIs('settings.users') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Users</span>
                    </a>
                </li>
                <p class="text-xs px-2 py-1 text-gray-300 font-bold uppercase">Automate</p>
                <li>
                    <a href="{{ route('platform.index') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25 {{ request()->routeIs('platform.index') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bx-plug text-xl mr-2 {{ request()->routeIs('platform.index') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Platforms</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('campaign.index') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25 {{ request()->routeIs('campaign.index') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bx-star text-xl mr-2 {{ request()->routeIs('campaign.index') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Campaigns</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('review.index') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25 {{ request()->routeIs('review.index') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bx-conversation text-xl mr-2 {{ request()->routeIs('review.index') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Reviews</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('selectWidget') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25 {{ request()->routeIs('selectWidget') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bxs-widget text-xl mr-2 {{ request()->routeIs('selectWidget') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Widget</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('review.share') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25 {{ request()->routeIs('review.share') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bx-image text-xl mr-2 {{ request()->routeIs('review.share') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Social Media Share</span>
                    </a>
                </li>
                <p class="text-xs px-2 py-1 text-gray-300 font-bold uppercase">Admin</p>
                <li>
                    <a href="{{ route('reseller.index') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25 {{ request()->routeIs('reseller.index') ? 'bg-orange-500 bg-opacity-25 font-bold' : '' }}">
                        <i class='bx bx-sync text-xl mr-2 {{ request()->routeIs('reseller.index') ? 'text-white  bg-orange-500 px-1 rounded-lg' : '' }}'></i>
                        <span class="text-sm ">Resell</span>
                    </a>
                </li>
               
                <li>
                    <a href="{{ route('auth.logout') }}"
                        class="flex items-center px-2 py-1  transition duration-75 rounded-lg  group hover:bg-orange-500 hover:bg-opacity-25 ">
                        <i class='bx bx-log-out text-xl mr-2 '></i>
                        <span class="text-sm ">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

