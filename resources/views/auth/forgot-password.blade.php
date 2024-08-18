<x-guest-layout>
    <x-notification />
    <div class="flex justify-center items-center h-screen bg-gradient-to-b from-[#D0E8FF] to-[#FBCABA]">
        <div class="w-[40%] mx-auto">
            <form method="POST" action="{{ route('password.email') }}"
                class=" shadow-md rounded-2xl bg-slate-200 bg-opacity-50 px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                   <x-session-msg />
                    @if (session('status'))
                        <div class="bg-green-200 text-green-500 p-4">
                            {{ session('status') }}
                        </div>
                    @endif
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="url">
                        ADD EMAIL
                    </label>
                    <input class="form-control" id="email" type="email" name="email" required
                        placeholder="email">
                </div>

                <button type="submit"
                    class= "bg-orange-500 hover:bg-orange-600 hover:shadow px-4 py-1.5 font-semibold text-blue-50 rounded-md w-full">
                    <span id="hiddenText" class="hidden"> <i class='bx bx-loader-alt animate-spin'></i></span>
                    <span>SEND</span>
                </button>
                <div class=" text-gray-600 font-semibold  hover:text-orange-500  text-sm py-2 flex items-center justify-end">
                    <i class='bx bxs-chevron-left-circle mr-1 text-xl' ></i><a href="{{ route('home') }}" class="hover:underline">GO BACK</a>
                </div>


            </form>
        </div>
    </div>

   
</x-guest-layout>
