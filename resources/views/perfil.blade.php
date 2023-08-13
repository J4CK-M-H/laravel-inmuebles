@extends('layout.app')
@section('content')

<div class="h-[calc(100vh-80px)] flex justify-center items-center">
  <div class="w-96 text-center">
    <img class="block h-96" src="{{ url('images/default.png') }}" alt="default image">
    <div class="space-y-4">
      <p class="text-xl font-semibold">Usuario: {{ auth()->user()->name }} {{ auth()->user()->lastName }}</p>
      <p class="text-xl font-semibold">Email: {{ auth()->user()->email }} </p>
      <p class="text-xl font-semibold">Username: {{ auth()->user()->username }} </p>
      <form action="">
        <button class="bg-cyan-700 text-white py-2 px-4 rounded-md font-semibold uppercase">Actualizar perfil</button>
      </form>
    </div>
  </div>
</div>
@endsection