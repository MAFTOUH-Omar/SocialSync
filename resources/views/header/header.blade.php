<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="dark:bg-slate-900 bg-white">
    <nav class="bg-white dark:bg-gray-800 text-white py-4 flex justify-between items-center px-4">
        <h1 class="text-xl dark:text-white text-slate-900">{{ config('app.name') }}</h1>

        <div class="space-x-4 flex items-center">
            <button id="toggleTheme" class="focus:outline-none">
                <img id="themeIcon" src="" alt="Theme Icon" class="w-6 h-6">
            </button>
            <button class="dark:text-white font-semibold text-slate-900 py-2 px-4">SignIn</button>
            <button class="bg-green-500 font-semibold hover:bg-green-600 text-white py-2 px-4 rounded-lg shadow-lg">SignUp</button>
        </div>
    </nav>
    <!-- Contenent  -->
    <div class="container mx-auto px-4 mt-8">
        @yield('content')
    </div>
</body>
</html>
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