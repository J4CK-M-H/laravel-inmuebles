@extends('layout.auth')

@section('content')
    <div class="font-Rokkit">
      <h2 class="text-2xl font-bold text-center bg-neutral-900 text-white py-4">Formulario Registro</h2>
      <form action="{{ route('register') }}" class="w-[500px] bg-white p-5 space-y-6" method="POST">
        @csrf
        
        @if (session('success'))
        <h5 class="bg-emerald-600 text-white text-xl text-center py-2 rounded-md font-bold">Usuario registrado</h5>
        @endif

        <div>
          @error('name')
          <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
          @enderror
          <input 
            type="text" 
            name="name"
            class="block w-full py-3 px-4 outline-none rounded-md border-2
             border-slate-200 placeholder:text-slate-500 focus:placeholder:text-transparent" 
            placeholder="Nombre"
            value="{{ old('name') }}"
            >
        </div>

        <div>
          @error('lastName')
          <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
          @enderror
          <input 
            type="text" 
            name="lastName"
            class="block w-full py-3 px-4 outline-none rounded-md border-2
             border-slate-200 placeholder:text-slate-500 focus:placeholder:text-transparent" 
            placeholder="Apellido"
            value="{{ old('lastName') }}"
            >
        </div>

        <div>
          @error('username')
          <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
          @enderror
          <input 
            type="text" 
            name="username"
            class="block w-full py-3 px-4 outline-none rounded-md border-2
             border-slate-200 placeholder:text-slate-500 focus:placeholder:text-transparent" 
            placeholder="Nombre de usuario"
            value="{{ old('username') }}"
            >
        </div>

        <div>
          @error('email')
          <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
          @enderror
          <input 
            type="text" 
            name="email"
            class="block w-full py-3 px-4 outline-none rounded-md border-2
             border-slate-200 placeholder:text-slate-500 focus:placeholder:text-transparent" 
            placeholder="Email"
            value="{{ old('email') }}"
            >
        </div>

        <div>
          @error('password')
          <p class="text-center text-white mb-2 bg-red-500 py-2 rounded-md font-bold">{{ $message }}</p>
          @enderror
          <input 
            type="password" 
            name="password"
            class="block w-full py-3 px-4 outline-none rounded-md border-2 border-slate-200 placeholder:text-slate-500
             focus:placeholder:text-transparent"
            placeholder="Password"
            value="{{ old('password') }}"
            >
        </div>

        <button class="bg-neutral-900 w-full py-3 text-md font-bold rounded-md text-white text-center mt-5">Registrar</button>

        <span>¿Ya tienes cuenta?, <a href="/" class="font-bold">Login</a></span>
      </form>
    </div>
@endsection