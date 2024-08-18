<x-app-layout>
    <div class=" space-y-4" x-data="{ link: null }">
        <h1 class="text-xl  px-3 md:px-10 capitalize font-medium">User Settings</h1>
        <div class=" py-5 md:px-10 ">
            <div class="lg:flex ">
                <ul class=" flex flex-col md:flex-row gap-6 bg-white px-2 py-1 rounded-lg">
                    <a href="{{ route('settings.setting') }}">
                        <li @click="link = 'Send'"
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2   "><i
                                class='bx bxs-cog text-lg mr-1'></i> Setting</li>
                    </a>
                    <a href="{{ route('settings.users') }}">
                        <li @click="link = 'Url'"
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2   ">
                            <i class='bx bx-group text-lg mr-1'></i>Users
                        </li>
                    </a>
                    <a href="{{ route('settings.theme') }}">
                        <li @click="link = 'QR'"
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2  bg-gray-100 rounded-lg">
                            <i class='bx bx-cookie text-lg mr-1'></i>Theme</li>
                    </a>
                </ul>
            </div>
        </div>

        <section>
            <div
                class="relative overflow-x-auto shadow sm:rounded-lg w-full md:w-[90%] mx-auto space-y-5 pb-5 bg-white">
                <x-session-msg />

                <form action="{{ route('settings.updateTheme', ['id' => $site->id]) }}" method="post"
                    enctype="multipart/form-data" class="px-6 space-y-5 divide-y w-full  ">
                    @csrf
                    @method('PUT')
                    <div class="lg:flex justify-between lg:gap-5 space-y-8 lg:space-y-0">
                        <div class="py-4 w-full space-y-4">
                            <div class=" w-full">
                                <h3 class="font-bold text-xl">Company Logo</h3>
                                <input
                                    class="block w-full text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 mt-3"
                                    aria-describedby="user_avatar_help" id="user_avatar" accept="image/*" type="file"
                                    name="logo">
                            </div>

                            <div class=" w-full">
                                <h3 class="font-bold text-xl">Font</h3>
                                {{ $site->font }}
                                <select name="font" id="font" class="form-control mt-3">
                                    <option value="Arial, sans-serif" @if ($site->font == 'Arial, sans-serif') selected @endif>
                                        Arial
                                    </option>
                                    <option value="Helvetica, sans-serif"
                                        @if ($site->font == 'Helvetica, sans-serif') selected @endif>
                                        Helvetica</option>
                                    <option value="Times New Roman, serif"
                                        @if ($site->font == 'Times New Roman, serif') selected @endif>
                                        Times New Roman</option>
                                    <option value="Georgia, serif" @if ($site->font == 'Georgia, serif') selected @endif>
                                        Georgia
                                    </option>
                                    <option value="Courier New, monospace"
                                        @if ($site->font == 'Courier New, monospace') selected @endif>
                                        Courier New</option>
                                    <option value="Verdana, sans-serif"
                                        @if ($site->font == 'Verdana, sans-serif') selected @endif>
                                        Verdana</option>
                                    <option value="Impact, sans-serif"
                                        @if ($site->font == 'Impact, sans-serif') selected @endif>Impact
                                    </option>
                                    <option value="Trebuchet MS, sans-serif"
                                        @if ($site->font == 'Trebuchet MS, sans-serif') selected @endif>
                                        Trebuchet MS</option>
                                    <option value="Palatino Linotype, Book Antiqua, Palatino, serif"
                                        @if ($site->font == 'Palatino Linotype, Book Antiqua, Palatino, serif') selected @endif>Palatino Linotype</option>
                                    <option value="Comic Sans MS, cursive"
                                        @if ($site->font == 'Comic Sans MS, cursive') selected @endif>
                                        Comic Sans MS</option>
                                    <option value="Arial Black, Gadget, sans-serif"
                                        @if ($site->font == 'Arial Black, Gadget, sans-serif') selected @endif>Arial Black</option>
                                    <option value="Lucida Console, Monaco, monospace"
                                        @if ($site->font == 'Lucida Console, Monaco, monospace') selected @endif>Lucida Console</option>
                                </select>

                            </div>
                            <div class="py-4 w-full">
                                <h3 class="font-bold text-xl">Review Style</h3>
                                <label for="" class="font-semibold">style</label>
                                <input type="text" name="review_type" value="{{ $site->name }}" class="form-control mt-3">
                            </div>
                        </div>

                        <div class="py-4 w-full space-y-4">
                            <h3 class="font-bold text-xl">Theme Color</h3>
                            <label for="" class="font-semibold text-sm text-cyan-700">Primary color</label>

                            <div
                                class="border-2 rounded-lg  pb-2 m-0 bg-gray-50 flex space-x-2 w-full items-center mt-3">
                                <input type="color" name="theme_color" id="color"
                                    value="{{ $site->theme_color ?? $site->color }}" class=" mt-3"
                                    style="  appearance: none;
                                    -moz-appearance: none;
                                    -webkit-appearance: none;
                                    background: none;
                                    border: 0;
                                    cursor: pointer;
                                    height: 3em;
                                    padding: 0;
                                    width: 3em;">
                                <span class="font-semibold ">{{ $site->color ?? '#0000' }}</span>
                            </div>

                            <label for="" class="font-semibold text-sm text-cyan-700">Page background
                                color</label>
                            <div
                                class="border-2 rounded-lg  pb-2 m-0 bg-gray-50 flex space-x-2 w-full items-center mt-3">
                                <input type="color" name="theme_color_two" id="color"
                                    value="{{ $site->theme_color_two ?? '#FAFAFA' }}" class=" mt-3"
                                    style="  appearance: none;
                                    -moz-appearance: none;
                                    -webkit-appearance: none;
                                    background: none;
                                    border: 0;
                                    cursor: pointer;
                                    height: 3em;
                                    padding: 0;
                                    width: 3em;">
                                <span class="font-semibold ">{{ $site->theme_color_two ?? '#FAFAFA' }}</span>
                            </div>

                        </div>

                    </div>

                    <div class="py-4 w-full">
                        <button type="submit" class="btn2"><i class="bx bx-save mr-1"></i>Save</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</x-app-layout>
