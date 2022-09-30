@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('button-label')
    Iniciar sesión
@endsection

@section('form')
    <div class="flex flex-col mt-10 gap-2">
        <input class="bg-gray-100 w-72 h-9 pl-2 text-sm rounded" type="text"
            placeholder="Teléfono, usuario o correo electrónico">
        <input class="bg-gray-100 w-72 h-9 pl-2 text-sm rounded" type="password" placeholder="Contraseña">
        <button class="bg-sky-500 text-white mt-4 p-1 rounded font-bold text-sm">@yield('button-label')</button>
    </div>
@endsection

@section('login')
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
@endsection


@section('card-footer-label')
    <div class="flex justify-center gap-2 bg-white p-4 h-auto shadow">
        <span class="text-sm">¿No tienes una cuenta? <a class="font-bold text-sky-500"
                href="/register">Regístrate</a></span>
    </div>
@endsection

@section('contenido')
    Contenido de esta página
@endsection
