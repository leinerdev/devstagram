<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <title>Devstagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<style>
    #title {
        font-family: 'Lobster Two', cursive;
    }
</style>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">Devstagram</h1>
            <nav class="flex gap-4">
                <a class="font-bold uppercase text-gray-600" href="/">Login</a>
                <a class="font-bold uppercase text-gray-600" href="/register">Crear cuenta</a>
            </nav>
        </div>
    </header>
    <main class="pt-10 flex justify-center">
        <img src="https://www.instagram.com/static/images/homepage/phones/home-phones.png/1dc085cdb87d.png"
            alt="">
        <article class="flex flex-col gap-2">
            <div class="bg-white pt-11 pl-9 pr-9 h-5/ shadow flex flex-col items-center">
                <h1 id="title" class="text-4xl text-center font-medium">Devstagram</h1>
                <p class="w-64 mt-4 text-center font-bold text-gray-500 leading-5">@yield('titulo')</p>
                <div>@yield('form')</div>
                <div>@yield('login')</div>
            </div>
            <div>@yield('card-footer-label')</div>
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
    <footer class="flex justify-center items-center pl-9 pr-9 pt-9 pb-14 flex-col text-xs text-gray-500 font-normal">
        <nav class="flex gap-4">
            <a href="">Meta</a>
            <a href="">Información</a>
            <a href="">Blog</a>
            <a href="">Empleo</a>
            <a href="">Ayuda</a>
            <a href="">API</a>
            <a href="">Privacidad</a>
            <a href="">Condiciones</a>
            <a href="">Cuentas destacadas</a>
            <a href="">Hashtags</a>
            <a href="">Ubicaciones</a>
            <a href="">Instagram Lite</a>
            <a href="">Subir contactos y no usuarios</a>
        </nav>
        <br>
        <nav class="flex gap-4">
            <a href="">Danza</a>
            <a href="">Comida y bebida</a>
            <a href="">Casa y jardín</a>
            <a href="">Música</a>
            <a href="">Artes visuales</a>
        </nav>
        <br>
        <nav class="flex gap-4">
            <a href="">Español</a>
            <a href="">© {{ now()->year }} Instagram from Meta</a>
        </nav>
    </footer>
</body>

</html>
