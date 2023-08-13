@extends('layout.app')
@section('content')
    <div class="p-4">
        <form action="{{ route('search') }}" class="mb-7" method="POST" novalidate>
            @csrf
            <label for="search" class="text-xl font-semibold">Busca una propiedad</label>
            <div class="flex gap-x-4 h-16 mt-2">
                <input type="text" name="search" id="search" class="block px-3 rounded-md  outline-none w-5/6 h-full"
                    placeholder="Encuentra y alquila un inmueble">
                <button class="w-1/6 bg-slate-700 block text-white rounded-md h-full">Buscar</button>
            </div>
        </form>
        @isset($mensaje)
            <p class="text-2xl font-bold text-center">{{ $mensaje }}</p>
        @endisset

        @isset($test)
          <p>{{ $test }}</p>
        @endisset

        @isset($propiedades)
            @if ($propiedades)
                <section class="grid grid-cols-columns-4 gap-6">
                    @foreach ($propiedades as $propiedad)
                        <div class="bg-white rounded-xl shadow-md p-4 space-y-4">
                            <img class="block rounded-xl w-full" src="{{ asset('uploads') . '/' . $propiedad->foto }}"
                                alt="">
                            <div class="space-y-2">
                                <p class="font-semibold">Titulo: {{ $propiedad->titulo }}</p>
                                <p class="font-semibold">Precio: {{ $propiedad->precio }}</p>
                                <a href=""
                                    class="block bg-slate-800 rounded-md text-center text-white font-semibold py-3 hover:bg-slate-950">Ver
                                    Inmueble</a>
                            </div>
                        </div>
                    @endforeach

                </section>

                {{-- <div class="flex flex-col items-center justify-center pb-4">
    <p class="bg-slate-200 text-red-500">
      {{ $propiedades->links('')}}
    </p>
  </div> --}}
            @endif
        @endisset

    </div>

@endsection
