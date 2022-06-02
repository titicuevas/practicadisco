<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Album') }}
        </h2>
    </x-slot>

<form action="{{route('albumes.store')}}" method="post">
@csrf
@method('post')

<label for="titulo">Titulo</label>
<input type="text" name="titulo" placeholder="Escriba un titulo"  id="titulo" value="{{old('titulo',$album->titulo)}}">
@error('titulo')
    <p class="text-red-500 text-sm mt-1">
        {{ $message }}
    </p>
  @enderror
  <br>
  <label for="anyo">Año</label>
<input type="numeric" name="anyo" id="anyo" placeholder="Escriba el año del titulo"  value="{{old('anyo',$album->nombre)}}">
@error('nombre')
    <p class="text-red-500 text-sm mt-1">
        {{ $message }}
    </p>
  @enderror


  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Crear
  </button>
</form>

</x-app-layout>
