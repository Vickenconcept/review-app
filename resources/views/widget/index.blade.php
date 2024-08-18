<x-app-layout>
    <div class=" space-y-8" x-data="{ link: null }">
        <section class="p-3 md:px-16 md:py-5 space-y-8">
            <x-session-msg />

            @if (isset($campaignId))
                @if ($campaignId)
                    <h1 class=" font-medium text-2xl">Select Widget for Your campaign</h1>
                @endif
            @else
                <h1 class="font-medium text-2xl">Preview widget</h1>
            @endif

            @php

                $campaign = App\Models\Campaign::where('uuid', $campaignId)->first();
            @endphp

            {{-- <ul class="w-full divide-y divide-gray-200 "> --}}
            <ul class="w-full  divide-gray-200  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                @foreach ($widgets as $widget)
                    <div
                        class="p-5 bg-gray-50  rounded-xl shadow-sm space-y-14 @if (isset($campaignId)) {{ $campaign->widget_id == $widget->id ? 'border-2 border-orange-500 ' : 'border border-gray-200' }} @endif">
                        <div class="flex justify-between">
                            <span
                                class=" capitalize flex items-center bg-gray-200 hover:bg-gray-300 delay-100 transition-all duration-500 ease-in-out p-4 rounded-lg">
                                <img src="{{ asset('images/logo.png') }}" alt="">
                                {{-- {{ $widget->image }} --}}
                            </span>

                            <div class="space-y-4">
                                <form action="{{ route('widget.show', ['widget' => $widget->uuid]) }}" class=""
                                    method="get">
                                    <button type="submit"
                                        class="bg-gray-200 hover:bg-orange-500 group  px-3 py-2 rounded-md text-sm flex items-center delay-100 transition-all duration-500 ease-in-out">
                                        <i
                                            class="bx bx-show font-medium group-hover:text-white mr-1 text-lg delay-100 transition-all duration-500 ease-in-out"></i>
                                        <span
                                            class="group-hover:text-white delay-100 transition-all duration-500 ease-in-out">Preview</span>
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
                                                class=" px-4 py-1.5 rounded-lg text-sm font-medium flex items-center {{ $campaign->widget_id == $widget->id ? 'bg-red-200 text-red-500' : 'bg-orange-100 text-orange-500' }}  hover:bg-orange-500 hover:text-orange-100 transition-all duration-300">
                                                @if ($campaign->widget_id == $widget->id)
                                                    <i class='bx bx-check-double text-2xl'></i>
                                                @else
                                                    <i class='bx bx-check text-2xl '></i>
                                                @endif
                                                Select
                                            </button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <p class="font-medium text-md capitalize">
                                    {{ $widget->name }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    {{ $widget->display }}
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <li class="pb-3 sm:pb-4 bg-white"> --}}
                    {{-- <li class="p-5 bg-gray-50 border border-gray-200 rounded-xl shadow-sm space-y-5">
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
                                    {{ $widget->display }}
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
                                                class=" px-4 py-1.5 rounded-lg text-md font-semibold flex items-center {{ $campaign->widget_id == $widget->id ? 'bg-red-200 text-red-700' : 'bg-cyan-100 text-cyan-700' }}  hover:bg-cyan-700 hover:text-cyan-100 transition-all duration-300">
                                                @if ($campaign->widget_id == $widget->id)
                                                    <i class='bx bx-check-double text-2xl'></i>
                                                @else
                                                    <i class='bx bx-check text-2xl '></i>
                                                @endif
                                                Select
                                            </button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </li> --}}
                @endforeach
            </ul>
        </section>








    </div>
</x-app-layout>
