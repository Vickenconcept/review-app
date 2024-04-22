<div class="h-full">
    <section class="h-full w-full bg-gray-100 flex flex-col-reverse sm:flex-row min-h-0 min-w-0 overflow-hidden">
        <main class="sm:h-full flex-1 flex flex-col min-h-0 min-w-0 overflow-y-hidden">
            <section class="flex-1 pt-3 md:p-6 lg:mb-0 lg:min-h-0 lg:min-w-0">
                <div class="flex flex-col lg:flex-row h-full w-full">

                    <div class=" h-full w- lg:flex-1 px-3 min-h-0 min-w-0 space-y-10">
                        <span class="flex-1">
                            @if ($errors->any())
                                <div class="bg-red-200 text-red-500 p-2 rounded-md text-sm">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </span>
                        <div>
                            <h2 class="text-xl font-bold capitalize"> Import Manually</h2>
                            <p class="text-cyan-700 text-sm font-semibold">Import csv file, with the actual table row
                                names and data</p>
                        </div>
                        <div class="flex  items-center space-x-4">
                            <input type="file" class="rounded-lg border border-cyan-600 " wire:model="reviewFile">
                            <button title="import" wire:click="saveDataToDatabase"
                                @if ($reviewFile == '') disabled @endif
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
                                                    Email
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
                                                <th scope="col" class="px-4 py-3">
                                                    Review message
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
                                                    smith@example.com
                                                </td>
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
                                                <td class="px-4 py-4 whitespace-nowrap">
                                                    Nice app. Thanks for building it
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
