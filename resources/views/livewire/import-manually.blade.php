<div class="h-full">
    <section class="h-full w-full bg-gray-100 flex flex-col-reverse sm:flex-row min-h-0 min-w-0 overflow-hidden">
        <main class="sm:h-full flex-1 flex flex-col min-h-0 min-w-0 overflow-auto">
            {{-- <nav class="border-b bg-white px-6 py-2 flex items-center min-w-0 h-14">
                <h1 class="font-semibold text-lg"></h1>
                <span class="flex-1"></span>
                <span class="mr-2">
                    <input type="text" placeholder="Search"
                        class="w-full border-2 px-2 py-1  border-gray-300 rounded-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent bg-gray-300 focus:bg-gray-100" />
                </span>
                <button title="import" wire:click="saveDataToDatabase"
                    @if ($platforms->count() == $platformCount) disabled
                @elseif(count($result) == 0)
                disabled @endif
                    class=" bg-cyan-950 hover:bg-cyan-800 hover:shadow font-semibold text-blue-50 ml-auto border rounded-full  w-10 h-10 text-center leading-none  focus:outline-none focus:ring-2 focus:border-transparent flex items-center justify-center">
                    <span wire:loading><i class='bx bx-loader-alt animate-spin'></i></span>
                    <i class='bx bx-import ' wire:loading.remove></i>
                </button>
            </nav> --}}
            <section class="flex-1 pt-3 md:p-6 lg:mb-0 lg:min-h-0 lg:min-w-0">
                <div class="flex flex-col lg:flex-row h-full w-full">

                    <div class=" h-full w- lg:flex-1 px-3 min-h-0 min-w-0 space-y-10">
                        <!-- overflow content right -->
                        <div>
                            <h2 class="text-xl font-bold capitalize"> Import Manually</h2>
                            <p class="text-cyan-700 text-sm font-semibold">Import csv file, with the actual table row
                                names and data</p>
                        </div>
                        <div class="flex  items-center space-x-4">
                            <input type="file" class="rounded-lg border border-cyan-600 ">
                            <button title="import" wire:click="saveDataToDatabase" {{-- @if ($platforms->count() == $platformCount) disabled
                            @elseif(count($result) == 0)
                            disabled @endif --}}
                                class=" bg-cyan-950 hover:bg-cyan-800 hover:shadow font-semibold text-blue-50 border rounded-full  w-10 h-10 text-center leading-none  focus:outline-none focus:ring-2 focus:border-transparent flex items-center justify-center">
                                <span wire:loading><i class='bx bx-loader-alt animate-spin'></i></span>
                                <i class='bx bx-import ' wire:loading.remove></i>
                            </button>
                        </div>
                        <div class=" w-full h-full min-h-0 min-w-0 overflow-auto">
                            <p class="text-cyan-700 text-md font-semibold my-3">Follow sample</p>
                            <div class="w-screen h-64">

                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-4 py-3">
                                                    Image Url
                                                </th>
                                                <th scope="col" class="px-4 py-3">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-4 py-3">
                                                    Phone Number
                                                </th>
                                                <th scope="col" class="px-4 py-3">
                                                    Rating
                                                </th>
                                                <th scope="col" class="px-4 py-3">
                                                    NPS
                                                </th>
                                                <th scope="col" class="px-4 py-3">
                                                    Location
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white border-b dark:bg-gray-800 ">
                                                <th scope="row"
                                                    class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    https://myimageurl
                                                </th>
                                                <th scope="row"
                                                    class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    Smith Joe
                                                </th>
                                                <td class="px-4 py-4 whitespace-nowrap">
                                                    +222000000
                                                </td>
                                                <td class="px-4 py-4 ">
                                                    4.5
                                                </td>
                                                <td class="px-4 py-4 ">
                                                    8
                                                </td>
                                                <td class="px-4 py-4 whitespace-nowrap">
                                                    110 Bishopsgate London
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>
        </main>
    </section>
</div>
