@extends('layout.app')
@section('content')
<div>
  <h2 class="text-2xl">Todas las propiedades</h2>
  <h3 class="text-xl uppercase">{{ auth()->user()->username }}</h3>
</div>

@endsection