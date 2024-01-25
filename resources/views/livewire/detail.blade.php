<div class="flex justify-center items-center h-screen">
    <div class="w-[40%] mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="url">
                    web link
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="url" type="url" placeholder="url" wire:model="siteUrl">
            </div>

            <div class="flex items-center justify-between">
                <button wire:click="collectWebData"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Sign In
                </button>
                <div wire:loading>loading...</div>
            </div>
        </form>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1>App Detail</h1>
            <ul>
                <li>Name: {{ $siteName }}</li>
                <li>url: {{ $siteUrl }}</li>
                <li>description: {{ $description }}</li>
                <li>color: {{ $color }}</li>
                <div class="p-10 " style="background-color: {{ $color }}"></div>
            </ul>

        </div>
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
