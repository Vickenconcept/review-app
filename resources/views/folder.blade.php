<x-app-layout>
    <div class="h-full  space-y-8" >

        <div class="py-5 border-b px-3 md:px-10 flex justify-between items-center">
            <div class="flex items-center space-x-5">
                <h3 class=" font-bold">Folder</h3> <span class="text-xs">Manage and group campaigns in folders </span>
            </div>
          <div class="flex items-center space-x-4">
            <form action="{{ route('campaign.store') }}" method="post">
                @csrf
                <x-main-button type="submit"><i class="bx bx-plus mr-2"></i>Create Campaign</x-main-button>
            </form>
            <form action="{{ route('folder.destroy',['folder' => $folder]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-700 hover:bg-red-800 hover:shadow px-4 py-1.5 font-semibold text-blue-50 rounded-md ">
                    <i class='bx bxs-trash  mr-2' ></i>
                    Delete Folder</button>
            </form>
          </div>
        </div>

        <div class="px-3 md:px-10">
            <h1 class="font-bold text-3xl capitalize tracking-wider text-cyan-700">{{ $folder->name }} </h1>
            <span class="text-xs  font-semibold">Total Campaign {{ $folder->campaigns->count() }} </span>
        </div>

        <section class="px-3 md:px-10 ">
            <!-- List Group -->
            <ul class="mt-3 flex flex-col space-y-0.5">
                @forelse ($folder->campaigns as $campaign)
                    <li
                        class="inline-flex items-center hover:shadow  gap-x-2  px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                        <div
                            class="flex flex-col md:flex-row text-center md:text-start items-center justify-between w-full ">
                            <a href="{{ route('campaign.show', ['campaign' => $campaign->slug]) }}"
                                class=" w-full md:w-3/4 py-3">
                                <p class="font-semibold capitalize">{{ $campaign->name }}</p>
                                <div class="flex justify-center md:justify-start space-x-3 ">
                                    <p class="text-xs ">Contacts
                                        {{ $campaign->reviews->pluck('private_feed_back_ans')->count() }}</p>
                                    <p class="text-xs ">Response {{ $campaign->reviews->count() }}</p>
                                </div>
                            </a>
                            <div
                                class="w-full md:w-1/4 flex justify-center items-center md:justify-end space-x-3 py-3 ">
                                
                                <a href="{{ route('campaign.show', ['campaign' => $campaign->slug]) }}">
                                    <button
                                        class="bg-cyan-100 px-4 py-1.5 rounded-lg text-md font-semibold flex items-center text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                        <i class='bx bx-stats text-2xl '></i>
                                    </button>
                                </a>
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button
                                            class="hover:bg-cyan-100 hover:text-cyan-700 rounded-full px-2 py-1 transition-all duration-300">
                                            <i class='bx bx-dots-vertical-rounded text-xl'></i>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                       
                                        <x-dropdown-link class="cursor-pointer">
                                            <a class="w-full text-left px-4 py-2"
                                                href="{{ route('selectWidget', ['uuid' => $campaign->uuid]) }}">
                                                <button>
                                                    <i class='bx bxs-widget text-xl mr-1'></i>Manage widget</button>
                                            </a>
                                        </x-dropdown-link>
                                        <x-dropdown-link>
                                            <form class="w-full"
                                                action="{{ route('campaign.destroy', ['campaign' => $campaign]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="w-full text-left px-4 py-2 flex items-center text-red-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5 mr-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>


                                                    {{ __('Delete') }}
                                                </button>


                                            </form>
                                        </x-dropdown-link>

                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    </li>
                @empty
                    <p class="bg-cyan-100 text-cyan-500 py-4 text-center rounded">No Campaign Yet.</p>
                @endforelse
                {{-- {{ $folder->campaigns->links() }} --}}



            </ul>
            <!-- End List Group -->
        </section>
    </div>
</x-app-layout>
