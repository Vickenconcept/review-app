<div class="flex justify-center items-center h-screen bg-gradient-to-b from-[#D0E8FF] to-[#FBCABA]">
    <div class="w-[40%] mx-auto">
        <form class=" shadow-md rounded-2xl bg-slate-200 bg-opacity-50 px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                @if ($errors->any())
                    <div class="bg-red-200 text-red-500 p-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <label class="block text-gray-700 text-sm font-bold mb-2" for="url">
                    Site Url
                </label>
                <input class="form-control" id="url" type="url" placeholder="https://www.mywebsite.com" wire:model="siteUrl">
            </div>

            <div class="flex items-center justify-between">
                <button wire:click="collectWebData" 
                    class="bg-orange-500 hover:bg-orange-600 hover:shadow px-4 py-1.5 font-semibold text-blue-50 rounded-md  w-full"
                    type="button">
                    <span wire:loading.remove>Create</span>
                    <span wire:loading> <i class='bx bx-loader-alt animate-spin'></i> Processing...</span>
                </button>
            </div>
        </form>

       @if ($siteName)
       <div class=" shadow-md rounded-2xl bg-slate-200 bg-opacity-50 px-8 pt-6 pb-8 mb-4">
        <h1 class="text-xl font-bold">App Detail</h1>
        <ul>
            <li class="font-semibold ">Name: <span class="italic font-normal underline ml-1"> {{ $siteName }}</span></li>
            <li class="font-semibold ">Url: <span class="italic font-normal underline ml-1"> {{ $siteUrl }}</span></li>
            <li class="font-semibold ">Description: <span class="italic font-normal underline ml-1"> {{ $description }}</span></li>
            <li class="font-semibold ">Color: <span class="italic font-normal underline ml-1"> {{ $color }}</span></li>
            <div class="p-5  rounded-lg shadow-sm" style="background-color: {{ $color }}"></div>
        </ul>

    </div>
       @endif
    </div>

    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('site-created', (event) => {
                console.log(event);
                setTimeout(function() {
                    window.location.href = '/home';
                }, 3000);

            });
        });
    </script>
</div>
