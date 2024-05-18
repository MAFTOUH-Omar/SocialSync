<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <style>
        .poppins{
            font-family: 'Poppins', sans-serif;
        }

        .syne{
            font-family: 'Syne', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-200">
    <div class="flex">
        <div class="flex justify-center items-center md:w-1/2 h-screen">
            <img src="./assets/icons/SocialSync.svg" class="md:w-[65%]" alt="">
        </div>
        <div class="flex justify-center items-start md:w-1/2 flex-col">
            <h1 class="text-[64px] mb-2 font-extrabold text-blue-600">Ça se passe maintenant</h1>
            <p class="text-[31px] mb-4 font-extrabold text-blue-400">Inscrivez‑vous.</p>
            <!-- Button OAuth -->
            <a href="{{ route('google-auth') }}"  class="w-1/2 bg-white shadow-lg mb-1 hover:bg-slate-100 border-2 border-blue-500 rounded-3xl flex items-center justify-center py-2 px-14 ">
                <img src="./assets/icons/google.svg" class="w-[20px] h-[20px] mx-2" alt="">
                <span class="text-slate-400 font-bold">S'inscrire avec google</span>
            </a>
            <a href="{{ route('github-auth') }}" class="w-1/2 bg-white shadow-lg mb-1 hover:bg-slate-100 border-2 border-blue-500 rounded-3xl flex items-center justify-center py-2 px-14 " >
                <img src="./assets/icons/github.svg" class="w-[20px] h-[20px] mx-2" alt="">
                <span class="text-slate-400 font-bold">S'inscrire avec github</span>
            </a>
            <!-- Register simple -->
            <span class="text-center text-sm w-1/2 my-1">Ou</span>
            <button class="w-1/2 bg-blue-500 hover:bg-blue-400 shadow-lg mb-1 rounded-3xl flex items-center justify-center py-2 px-14 ">
                <span class="text-white font-bold">Créer un compte</span>   
            </button>
            <span class="text-center w-1/2 font-semibold my-1">Vous avez déjà un compte ?</span>
            <a href="{{ route('login') }}" class="w-1/2 border-blue-500 bg-white hover:bg-slate-100 border-2 shadow-lg mb-1 rounded-3xl flex items-center justify-center py-2 px-14 ">
                <span class="text-blue-500 font-bold">Se connecter</span>   
            </a>
        </div>
    </div>
</body>
</html>