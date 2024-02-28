<div>
    <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar"
    type="button"
    class="inline-flex items-center px-2 py-1 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200   ">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="separator-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-900 ">
        <div>
            <h2 class="capitalize font-semibold tracking-wider text-xl text-slate-300">{{ $site->name }}</h2>
        </div>
        <ul class="space-y-2 font-medium pt-4 mt-4 border-t border-gray-200 ">
            <li>
                <label for="file" class="text-xs text-slate-400">Total Users {{ $site->users()->count() }}/{{ $totalNumberOfUsers }}</label>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-cyan-500 h-1.5 rounded-full " style="width: {{ $UserPercentage }}%"></div>
                </div>

            </li>
            <li>
                <label for="file" class="text-xs text-slate-400">Email</label>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-cyan-500 h-1.5 rounded-full " style="width: 45%"></div>
                </div>

            </li>
            <li>
                <label for="file" class="text-xs text-slate-400">Response</label>
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-cyan-500 h-1.5 rounded-full " style="width: 45%"></div>
                </div>

            </li>
        </ul>
        <ul class="pt-4 mt-4 space-y-3 font-medium border-t border-gray-200 ">

            <li>
                <a href="{{ route('home') }}"
                    class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('home') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bxs-home text-xl mr-5'></i>
                    <span class="text-sm font-semibold">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.users') }}"
                    class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('settings.users') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bxs-group text-xl mr-5'></i>
                    <span class="text-sm font-semibold">Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('platform.index') }}" class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('platform.index') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bxs-plug text-xl mr-5' ></i>
                    <span class="text-sm font-semibold">Platforms</span>
                </a>
            </li>
            <li>
                <a href="{{ route('campaign.index') }}"
                    class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('campaign.index') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bxs-star text-xl mr-5'></i>
                    <span class="text-sm font-semibold">Campaigns</span>
                </a>
            </li>
            <li>
                <a href="{{ route('review.index') }}"
                    class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('review.index') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bxs-conversation text-xl mr-5'></i>
                    <span class="text-sm font-semibold">Reviews</span>
                </a>
            </li>
            <li>
                <a href="{{ route('selectWidget') }}"
                    class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('selectWidget') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bxs-widget text-xl mr-5'></i>
                    <span class="text-sm font-semibold">Widget</span>
                </a>
            </li>
            <li>
                <a href="{{ route('review.share') }}"
                    class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('review.share') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bxs-image text-xl mr-5'></i>
                    <span class="text-sm font-semibold">Social Media Share</span>
                </a>
            </li>
            <li>
                <a href="{{ route('reseller.index') }}"
                    class="flex items-center px-2 py-1 text-cyan-500 transition duration-75 rounded-lg  group {{ request()->routeIs('review.share') ?'bg-cyan-500 bg-opacity-25': ''}}">
                    <i class='bx bx-recycle text-xl mr-5' ></i>
                    <span class="text-sm font-semibold">Resell</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

</div>
