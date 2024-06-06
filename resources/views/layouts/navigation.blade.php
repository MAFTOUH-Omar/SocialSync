<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/icons/SocialSync.svg') }}" class="w-[50px]" alt="">
                    </a>
                </div>
            </div>
            <!-- Avatar -->
            <button class="space-x-4 flex items-center" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                <img src="{{ $user->profile ? asset('profile_images/'.$user->profile) : asset('assets/icons/user.svg') }}" alt="Avatar" class="border-blue-500 border-2 rounded-full w-[50px] h-[50px]">
            </button>
            <!-- Drop down profile menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-black" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li class="flex justify-center items-center mx-auto my-2">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <a class="bg-red-500 font-bold hover:bg-red-400 rounded-lg text-white py-1.5 px-[50px]" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>