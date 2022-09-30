@extends('layouts.app')

@section('titulo')
    Regístrate para ver fotos y videos de tus amigos.
@endsection

@section('button-label')
    Registrarte
@endsection

@section('form')
    <div class="flex flex-col mt-10 gap-2">
        <input class="bg-gray-100 w-72 h-9 pl-2 text-sm rounded" type="text" placeholder="Número de celular o correo electrónico">
        <input class="bg-gray-100 w-72 h-9 pl-2 text-sm rounded" type="text" placeholder="Nombre completo">
        <input class="bg-gray-100 w-72 h-9 pl-2 text-sm rounded" type="text" placeholder="Nombre de usuario">
        <input class="bg-gray-100 w-72 h-9 pl-2 text-sm rounded" type="password" placeholder="Contraseña">
        <button class="bg-sky-500 text-white mt-4 p-1 mb-6 rounded font-bold text-sm">@yield('button-label')</button>
    </div>
@endsection


@section('card-footer-label')
    <div class="flex justify-center gap-2 bg-white p-4 h-auto shadow">
        <span class="text-sm">Tienes una cuenta? <a class="font-bold text-sky-500" href="/">Inicia sesión</a></span>
    </div>
@endsection
