@extends('layouts.app')

@section('contenido')
    <h1 class="text-3xl mt-10 font-black text-center">Tu cuenta</h1>
    <div class="flex mt-10 justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 lg:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection
