<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-200">
    <div class="flex flex-col md:flex-row">
        <div class="flex justify-center items-center w-full md:w-1/2 md:h-screen mt-10">
            <img src="./assets/icons/SocialSync.svg" class="md:w-[65%] w-[100px]" alt="">
        </div>
        <div class="flex justify-center items-start w-full md:w-1/2 flex-col md:px-0 px-2">
            <h1 class="md:text-[64px] md:mx-0 mx-auto text-[30px] mb-2 font-extrabold text-blue-600">Connectez‑vous à <span class="text-black ">Social Sync</span></h1>
            <!-- Button OAuth -->
            <a href="{{ route('google-auth') }}" class="w-full md:w-1/2 bg-white shadow-lg mb-1 hover:bg-slate-100 border-2 border-blue-500 rounded-3xl flex items-center justify-center py-2 px-10">
                <img src="./assets/icons/google.svg" class="w-[20px] h-[20px] mx-2" alt="">
                <span class="text-slate-400 font-bold">Se connecter avec google</span>
            </a>
            <a href="{{ route('github-auth') }}" class="w-full md:w-1/2 bg-white shadow-lg mb-1 hover:bg-slate-100 border-2 border-blue-500 rounded-3xl flex items-center justify-center py-2 px-10">
                <img src="./assets/icons/github.svg" class="w-[20px] h-[20px] mx-2" alt="">
                <span class="text-slate-400 font-bold">Se connecter avec github</span>
            </a>
            <!-- Login simple -->
            <span class="text-center text-sm w-full md:w-1/2 my-1">Ou</span>
            <button id="open-modal-button" class="w-full md:w-1/2 bg-blue-500 hover:bg-blue-400 shadow-lg mb-1 rounded-3xl flex items-center justify-center py-2 px-14" data-modal-toggle="login-modal">
                <span class="text-white font-bold">Se connecter</span>   
            </button>
            <span class="text-center w-full md:w-1/2 font-semibold my-1">Vous n'avez pas de compte ?</span>
            <a href="{{ route('register') }}" class="w-full md:w-1/2 border-blue-500 bg-white hover:bg-slate-100 border-2 shadow-lg mb-1 rounded-3xl flex items-center justify-center py-2 px-14">
                <span class="text-blue-500 font-bold">Inscrivez‑vous</span>   
            </a>
        </div>
        <!-- Modal -->
        <div id="login-modal" class="modal fixed top-0 left-0 w-full h-full flex items-center justify-center hidden">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white border-2 shadow-lg rounded-3xl">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-black">
                            Connectez‑vous à SocialSync
                        </h3>
                        <button id="close-modal-button" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal content -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="flex justify-center items-center mt-4 mx-5 flex-col">
                            <!-- Email Address -->
                            <div class="w-full mx-1">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Adresse email" required class="rounded-xl border-2 border-blue-500 w-full">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- password -->
                            <div class="w-full mx-1">
                                <label>Mot de passe</label>
                                <input type="password" name="password" placeholder="Mot de passe" required class="rounded-xl py-2 px-2 border-2 border-blue-500 w-full">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b mt-3">
                        <button type="submit" class="text-white bg-blue-500 hover:bg-blue-400 rounded-3xl w-full py-2.5 font-extrabold ">Suivant</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openModalButton = document.getElementById('open-modal-button');
        const closeModalButton = document.getElementById('close-modal-button');
        const modal = document.getElementById('login-modal');

        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });
</script>
</html>