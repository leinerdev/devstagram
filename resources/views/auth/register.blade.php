@extends('layouts.app')

@section('titulo')
    Regístrate para ver fotos y videos de tus amigos.
@endsection

@section('button-label')
    Registrarte
@endsection

@section('form')
    <form action="/register" method="POST">
        @csrf
        <div class="flex flex-col mt-10 gap-2">
            <input
                class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                placeholder="Nombre completo"
                id="name"
                type="name"
                name="name"
                value="{{ old('name') }}"
            >
            @error('name')
                <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
            @enderror

            <input
                class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                placeholder="Nombre de usuario"
                id="username"
                type="username"
                name="username"
            >
            @error('username')
                <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
            @enderror

            <input
                class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                placeholder="Correo electrónico"
                id="email"
                type="email"
                name="email"
            >
            @error('email')
                <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
            @enderror

            <input
                class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                placeholder="Contraseña"
                id="password"
                type="password"
                name="password"
            >
            @error('password')
                <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
            @enderror

            <input
                class="border outline-none bg-gray-100 w-72 h-9 pl-2 text-sm rounded @error('name') border-red-500 @enderror"
                type="password"
                placeholder="Repetir contraseña"
                id="password_confirmation"
                name="password_confirmation"
            >
            @error('password')
                <span class="text-red-500 mb-2 rounded-lg text-sm text-left">{{ $message }}</span>
            @enderror

            <button class="bg-sky-500 hover:bg-sky-600 transition-all text-white mt-4 p-1 mb-6 rounded font-bold text-sm">@yield('button-label')</button>
        </div>
    </form>
@endsection


@section('card-footer-label')
    <div class="flex justify-center gap-2 bg-white p-4 h-auto shadow">
        <span class="text-sm">Tienes una cuenta? <a class="font-bold text-sky-500" href="/">Inicia sesión</a></span>
    </div>
@endsection
