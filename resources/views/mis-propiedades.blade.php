@extends('layout.app')
@section('content')

    @if ($propiedades->count() > 0)
        <section class="p-4 grid grid-cols-columns-4 gap-4">
            @foreach ($propiedades as $propiedad)
                <div class="bg-white rounded-xl shadow-md p-4 space-y-4">
                    <img class="block rounded-xl w-full" src="{{ asset('uploads') . '/' . $propiedad->foto }}" alt="">
                    <div class="space-y-2">
                        <p class="font-semibold">Titulo: {{ $propiedad->titulo }}</p>
                        <p class="font-semibold">Precio: {{ $propiedad->precio }}</p>
                        <a href="{{ route('propiedad.show', ['user' => $propiedad->user, 'propiedad' => $propiedad ]) }}"
                            class="block bg-slate-800 rounded-md text-center text-white font-semibold py-3 hover:bg-slate-950">Ver
                            Inmueble</a>
                    </div>
                </div>
            @endforeach

        </section>

        <div class="flex flex-col items-center justify-center pb-4">
          <p class="bg-slate-200 text-red-500">
            {{ $propiedades->links('')}}
          </p>
        </div>
    @else
      <div class="text-center  font-bold h-[calc(100vh-80px)]">
        <a class="block mt-5 text-2xl" href="">No hay propiedades publicadas</a>

      </div>
    @endif


@endsection
