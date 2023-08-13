<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('styles')
    <title>Home</title>
    @vite('./resources/js/app.js')
    @vite('./resources/css/app.css')
</head>

<body class="bg-slate-200">
    <header>
        <nav class="bg-white flex justify-between items-center px-8 h-20 shadow-md">
            <a class="text-slate-900 text-2xl font-bold block" href="{{ route('home') }}">
                <img class="block w-10 h-10" src="{{ url('/images/home.png') }}" alt="">
            </a>
            <ul class="flex gap-x-6 items-center">
                {{-- <li><a class="text-slate-700 py-2 px-4 font-semibold" href="{{ route('home') }}">Home</a></li> --}}
                <li><a class="text-slate-700 py-2 px-4 font-semibold" href="{{ route('propiedad.create') }}">Publicar
                        propiedad</a></li>
                <li><a class="text-slate-700 py-2 px-4 font-semibold" href="{{ route('mis-propiedades') }}">Mis
                        propiedades</a></li>
                <li><a class="text-slate-700 py-2 px-4 font-semibold" href="{{ route('perfil') }}">Perfil</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input class="text-slate-700 py-2 px-4 font-semibold cursor-pointer" type="submit"
                            value="logout">
                    </form>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>
