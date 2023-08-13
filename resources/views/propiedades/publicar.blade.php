@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class="py-5">
        <h2 class="text-2xl font-extrabold uppercase text-center">Publica tu propiedad</h2>
        <div class="flex justify-center gap-4">

            <div class="w-[500px] flex items-center">
                <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
                    class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                </form>
            </div>

            <form action="{{ route('propiedad.store') }}" class="w-1/2 bg-white shadow-xl space-y-4 p-7 rounded-lg"
                method="POST" novalidate>
                @csrf
                <div>
                    <label for="titulo" class="font-semibold text-xl">Titulo de la propiedad</label>
                    @error('titulo')
                        <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
                    @enderror
                    <input name="titulo"
                        class="outline-none  block p-4 w-full  border border-slate-300 rounded-md placeholder:text-slate-500"
                        type="text" paceholder="Casa de marmol" value="{{ old('titulo') }}">
                </div>
                <div>
                    <label for="" class="font-semibold text-xl">Precio</label>
                    @error('precio')
                        <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
                    @enderror
                    <input
                        class="outline-none block p-4 w-full border border-slate-300 rounded-md placeholder:text-slate-500"
                        name="precio" type="text" placeholder="$/.0000">
                </div>
                <div>
                    <label for="descripcion">Descripcion del inmueble</label>
                    @error('descripcion')
                        <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
                    @enderror
                    <textarea name="descripcion" id="descripcion" class="block border border-slate-300 w-full outline-none p-4"
                        rows="8"></textarea>
                </div>
                <div>
                    @error('imagen')
                        <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
                    @enderror
                    <input name="imagen" type="hidden" value="{{ old('imagen') }}">
                </div>

                <button
                    class="w-full text-white text-center py-4 bg-teal-600 font-semibold rounded-md uppercase">Publicar</button>
            </form>
        </div>

    </div>
@endsection
