@extends('layouts.app')

@section('contenido')
    <main class="pt-10 flex justify-center">
        <img class="sm:hidden lg:block" src="{{ asset('img/Devstagram.png') }}" alt="Devstagram">
        <article class="flex flex-col gap-2">
            <div class="bg-white pt-11 pl-9 pr-9 h-5/ shadow flex flex-col items-center">
                <h1 id="title" class="text-4xl text-center font-medium">Devstagram</h1>
                <p class="w-64 mt-4 text-center font-bold text-gray-500 leading-5">Regístrate para ver fotos y videos de tus
                    amigos.</p>
                {{-- Formulario --}}
                <form action="/register" method="POST">
                    @csrf
                    <div class="flex flex-col mt-10 gap-2">
                        <input
                            class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                            placeholder="Nombre completo" id="name" type="name" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
                        @enderror

                        <input
                            class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                            placeholder="Nombre de usuario" id="username" type="username" name="username">
                        @error('username')
                            <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
                        @enderror

                        <input
                            class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                            placeholder="Correo electrónico" id="email" type="email" name="email">
                        @error('email')
                            <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
                        @enderror

                        <input
                            class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                            placeholder="Contraseña" id="password" type="password" name="password">
                        @error('password')
                            <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
                        @enderror

                        <input
                            class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                            type="password" placeholder="Repetir contraseña" id="password_confirmation"
                            name="password_confirmation">
                        @error('password')
                            <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
                        @enderror

                        <button
                            class="bg-sky-500 hover:bg-sky-600 transition-all text-white mt-4 p-1 mb-6 rounded font-bold text-sm">Registrarte</button>
                    </div>
                </form>
                <div class="flex gap-4 justify-center items-center text-gray-400 mt-4">
                    <hr width="100%" class="h-1">
                    O
                    <hr width="100%" class="h-1">
                </div>
                <h4 class="text-center text-sky-800 text-sm cursor-pointer font-bold mt-3 flex justify-center gap-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174848.png" width="20px" alt="logo_fb">
                    Iniciar sesión con Facebook
                </h4>
                <p class="text-center mt-7 font-light mb-10 text-sky-800 text-sm cursor-pointer">¿Olvidaste tu
                    contraseña?</p>
            </div>
            <span class="flex justify-center mt-3 text-gray-700 text-sm">Descarga la app.</span>
            <div class="flex justify-center gap-1 mt-3">
                <img class="cursor-pointer"
                    src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_spanish_latinamerica_mexico.png/e2247c4f90de.png"
                    width="130px" alt="">
                <img class="cursor-pointer"
                    src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_spanish_latinamerica_mexico-es_LA.png/3cd8a27083c0.png"
                    width="130px" alt="">
            </div>
        </article>
    </main>
@endsection
