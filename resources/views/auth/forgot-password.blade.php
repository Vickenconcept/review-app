<x-guest-layout>
    <x-notification />
    <div class="flex justify-center items-center h-screen bg-cyan-950 ">
        <div class="w-[40%] mx-auto">
            <form method="POST" action="{{ route('password.email') }}"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
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
                    class= "bg-cyan-950 hover:bg-cyan-800 hover:shadow px-4 py-1.5 font-semibold text-blue-50 rounded-md w-full">
                    <span id="hiddenText" class="hidden"> <i class='bx bx-loader-alt animate-spin'></i></span>
                    <span>SEND</span>
                </button>
                <div class=" text-cyan-500 font-semibold  text-sm py-2 flex items-center justify-end">
                    <i class='bx bxs-chevron-left-circle mr-1 text-xl' ></i><a href="{{ route('home') }}" class="hover:underline">GO BACK</a>
                </div>


            </form>
        </div>
    </div>

   
</x-guest-layout>
