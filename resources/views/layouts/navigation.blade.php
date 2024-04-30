<nav x-data="{ open: false }" class="bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class=" mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="font-semibold text-lg">
                        {{ config('app.name') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="space-x-4 flex items-center">
                <button id="toggleTheme" class="focus:outline-none">
                    <img id="themeIcon" src="" alt="Theme Icon" class="w-6 h-6">
                </button>
                <a href="/login" class="dark:text-white font-semibold text-slate-900 py-2 px-4">Login</a>
                <a href="/register" class="bg-green-500 font-semibold hover:bg-green-600 text-white py-2 px-4 rounded-lg shadow-lg">Register</a>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user() ? Auth::user()->name : '' }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user() ? Auth::user()->email : '' }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<script>
    function updateThemeIcon(theme) {
        var icon = document.getElementById('themeIcon');
        if (theme === 'dark') {
            icon.setAttribute('src', '/assets/icons/dark.svg');
        } else {
            icon.setAttribute('src', '/assets/icons/light.svg');
        }
    }

    function applyInitialTheme() {
        var currentTheme = localStorage.getItem('theme');
        document.body.classList.toggle('dark', currentTheme === 'dark');
        updateThemeIcon(currentTheme);
    }

    applyInitialTheme();

    document.getElementById('toggleTheme').addEventListener('click', function() {
        var currentTheme = localStorage.getItem('theme');
        var newTheme = currentTheme === 'light' ? 'dark' : 'light';
        localStorage.setItem('theme', newTheme);
        document.body.classList.toggle('dark');
        updateThemeIcon(newTheme);
    });
</script>
