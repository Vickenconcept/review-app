<x-app-layout>
    <div class="space-y-4" x-data="{ link: null }">

        <h1 class="text-xl  px-3 md:px-10 capitalize font-medium">User Settings</h1>
        <div class=" py-5 md:px-10 ">
            <div class="lg:flex ">
                <ul class=" flex flex-col md:flex-row gap-6 bg-white px-2 py-1 rounded-lg">
                    <a href="{{ route('settings.setting') }}">
                        <li @click="link = 'Send'"
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2  bg-gray-100 rounded-lg "><i
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
                            class="cursor-pointer text-gray-500 flex items-center font-semibold text-sm  px-3 py-2  ">
                            <i class='bx bx-cookie text-lg mr-1'></i>Theme
                        </li>
                    </a>
                </ul>
            </div>
        </div>

        <section>
            <div
                class="relative overflow-x-auto shadow sm:rounded-lg w-full md:w-[90%] mx-auto space-y-5 py-5 bg-white">
                <h1 class=" font-semibold text-md px-6 ">Organisation Info </h1>


                <form action="{{ route('settings.updateSetting', ['id' => $site->id]) }}" method="post"
                    class="px-6 space-y-8">
                    @csrf
                    @method('PUT')
                    <div class="lg:flex justify-between lg:gap-5 space-y-8 lg:space-y-0">
                        <div class="w-full">
                            <label for="" class="font-semibold">Name</label>
                            <input type="text" name="name" value="{{ $site->name }}" class="form-control mt-3">
                        </div>
                        <div class="w-full">
                            <label for="" class="font-semibold">Address</label>
                            <input type="text" name="address" value="{{ $site->address }}" class="form-control mt-3">
                        </div>
                    </div>

                    <div class="lg:flex justify-between lg:gap-5 space-y-8 lg:space-y-0">
                        <div class="w-full">
                            <label for="" class="font-semibold">Website</label>
                            <input type="text" name="url" value="{{ $site->url }}" class="form-control mt-3">
                        </div>
                        
                        <div class="w-full">
                            <label for="" class="font-semibold">Private Policy URL</label>
                            <input type="text" name="privacy_url" value="{{ $site->privacy_url }}"
                                class="form-control mt-3">
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="" class="font-semibold">Organisation Description</label>
                        <textarea type="text" name="description" value="{{ $site->description }}"
                            class="form-control mt-3 resize-none" rows="4"></textarea>
                    </div>

                    
                    <div class="flex justify-end">
                        <button type="submit" class="btn2"><i class="bx bx-save mr-1"></i>Save</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</x-app-layout>
