<x-app-layout>
    <div class="  space-y-8" x-data="{ link: null }">
        <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
            <div>
                <h3 class=" font-bold">Settings</h3>
            </div>
            <span class="text-xs">Setup your organization
            </span>
        </div>
        <div class=" py-5 md:px-10 ">
            <ul class=" flex flex-col md:flex-row gap-6">
                <a href="{{ route('settings.setting') }}">
                    <li @click="link = 'Send'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 border-b-2 border-cyan-700">
                        <i class='bx bxs-cog text-xl mr-2'></i> Setting
                    </li>
                </a>
                <a href="{{ route('settings.users') }}">
                    <li @click="link = 'Url'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 ">
                        <i class='bx bxs-group text-xl mr-2'></i>Users
                    </li>
                </a>
                {{-- <a href="{{ route('settings.email') }}">
                    <li @click="link = 'signature'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1"><i
                            class='bx bxs-envelope text-xl mr-2'></i> Email</li>
                </a> --}}
                <a href="{{ route('settings.theme') }}">
                    <li @click="link = 'QR'"
                        class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 "><i
                            class='bx bx-cookie text-xl mr-2'></i>Theme</li>
                </a>
            </ul>
        </div>

        <section >
            <div class="relative overflow-x-auto shadow sm:rounded-lg w-full md:w-[90%] mx-auto space-y-5 py-5">
                <h1 class=" font-semibold text-md px-6 ">Organisation Info </h1>
                @if ($errors->any())
                    <div class="bg-red-200 text-red-500 p-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-200 text-green-500 p-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('settings.updateSetting', ['id' => $site->id ]) }}" method="post" class="px-6 space-y-8">
                    @csrf
                    @method('PUT')
                    <div> 
                        <label for="" class="font-semibold">Name</label>
                        <input type="text" name="name" value="{{ $site->name }}" class="form-control mt-3" >
                    </div>
                    <div> 
                        <label for="" class="font-semibold">Address</label>
                        <input type="text" name="address" value="{{ $site->address }}" class="form-control mt-3">
                    </div>
                    <div> 
                        <label for="" class="font-semibold">Website</label>
                        <input type="text" name="url" value="{{ $site->url }}" class="form-control mt-3">
                    </div>
                    <div> 
                        <label for="" class="font-semibold">Organisation Description</label>
                        <input type="text" name="description" value="{{ $site->description }}"  class="form-control mt-3">
                    </div>
                    <div> 
                        <label for="" class="font-semibold">Private Policy URL</label>
                        <input type="text" name="privacy_url" value="{{ $site->privacy_url }}" class="form-control mt-3">
                    </div>

                    <div>
                        <button type="submit" class="btn2"><i class="bx bx-save mr-1"></i>Save</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</x-app-layout>
