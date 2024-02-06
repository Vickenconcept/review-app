<x-app-layout>
    <div class="h-full space-y-8" x-data="{ link: null }">
        <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
            <div>
                <h3 class=" font-bold">Settings</h3>
            </div>
            <span class="text-xs">Invite users to your team</span>
        </div>
        <div class=" py-5 md:px-10 ">
            <ul class=" flex flex-col md:flex-row gap-6">
               <a href="{{ route('settings.setting') }}">
                <li @click="link = 'Send'"
                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 "><i
                    class='bx bxs-cog text-xl mr-2'></i> Setting</li>
               </a>
                <a href="{{ route('settings.users') }}">
                    <li @click="link = 'Url'"
                    class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 ">
                    <i class='bx bxs-group text-xl mr-2'></i>Users</li>
                </a>
                <a href="{{ route('settings.email') }}">
                    <li @click="link = 'signature'"
                    class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 border-b-2 border-cyan-700"><i
                        class='bx bxs-envelope text-xl mr-2'></i> Email</li>
                </a>
               <a href="{{ route('settings.theme') }}">
                <li @click="link = 'QR'"
                class="cursor-pointer text-cyan-700 flex items-center font-semibold text-sm pb-1 "><i
                    class='bx bx-cookie text-xl mr-2'></i>Theme</li>
               </a>
            </ul>
        </div>

        <section>
            
        </section>
    </div>
</x-app-layout>
