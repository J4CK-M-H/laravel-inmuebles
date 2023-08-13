@extends('layout.auth')

@section('content')
    <div class="font-Rokkit">
      <h2 class="text-2xl font-bold text-center bg-neutral-900 text-white py-4 rounded-t-lg">Formulario Login</h2>
      <form action="{{ route('login') }}" class="w-[500px] bg-white p-5 space-y-6 rounded-b-lg" method="POST">

        @if (session('incorrect'))
          <h5 class="bg-red-600 text-white text-xl text-center py-2 rounded-md font-bold">{{ session('incorrect') }}</h5>
        @endif

        @csrf
        <div>
          @error('email')
          <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
          @enderror
          <input 
            type="text" 
            name="email"
            class="block w-full py-3 px-4 outline-none rounded-md border-2
             border-slate-200 placeholder:text-slate-500 focus:placeholder:text-transparent" 
            placeholder="Email">
        </div>

        <div>
          @error('password')
          <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
          @enderror
          <input 
            type="password" 
            name="password"
            class="block w-full py-3 px-4 outline-none rounded-md border-2 border-slate-200 placeholder:text-slate-500 focus:placeholder:text-transparent"
            placeholder="Password">
        </div>

        <div>
          <input type="checkbox" name="remember" id="remember"> 
          <label for="remember">Mantener sesion activa</label>
        </div>        

        <button class="bg-neutral-900 w-full py-3 text-md font-bold rounded-md text-white text-center mt-5 mb-2">Login</button>

        <span class="text-center">¿Aun no tienes cuenta?, <a href="{{ route('register') }}" class="font-bold">Registrare</a></span>
      </form>
    </div>
@endsection