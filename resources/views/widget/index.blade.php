<x-app-layout>
    <div class=" space-y-8" x-data="{ link: null }">
        <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
            <div>
                <h3 class=" font-bold">Widgets</h3>
            </div>
            <span class="text-xs">Manage widgets and set goal tracking</span>
        </div>

        <section class="p-3 md:px-16 md:py-5 space-y-8">
            {{-- <div class="flex flex-col md:flex-row justify-between border rounded-lg">
                <div>
                    <x-main-button>
                        main
                    </x-main-button>
                </div>
                <div>
                    <x-main-button>
                        main
                    </x-main-button>
                </div>
                <div>
                    <x-main-button>
                        main
                    </x-main-button>
                </div>
                <div>
                    <x-main-button>
                        main
                    </x-main-button>
                </div>
                <div>
                    <x-main-button>
                        main
                    </x-main-button>
                </div>




            </div> --}}
            @if (session('success'))
                <div class="bg-green-200 text-green-500 p-4 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if (isset($campaignId))
                @if ($campaignId)
                    <h1 class="text-cyan-700 font-bold text-xl">Select Widget for Your campaign</h1>
                @endif
            @else
                <h1 class="text-cyan-700 font-bold text-xl">Preview widget</h1>
            @endif

            <ul class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($widgets as $widget)
                    <li class="pb-3 sm:pb-4">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full hover:" src="{{ $widget->image }}" alt="Neil image"
                                    style="width: 5rem; height:5rem">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{ $widget->name }}
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@flowbite.com
                                </p>
                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white ">
                                <form action="{{ route('widget.show', ['widget' => $widget->uuid]) }}" class="mr-3"
                                    method="get">
                                    <button
                                        class="bg-cyan-100 px-4 py-1.5 rounded-lg text-md font-semibold flex items-center text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                        <i class='bx bxs-show text-2xl '></i>
                                        Preview
                                    </button>
                                </form>
                                @if (isset($campaignId))
                                    @if ($campaignId)
                                        <form action="{{ route('campaign.update', ['campaign' => $campaignId]) }}"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="widget_id" value="{{ $widget->id }}">
                                            <button
                                                class="bg-cyan-100 px-4 py-1.5 rounded-lg text-md font-semibold flex items-center text-cyan-700 hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                                <i class='bx bx-check text-2xl '></i>
                                                Select
                                            </button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>








    </div>
</x-app-layout>
