<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Albumes') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{route('albumes.update', $album)}}">

    @csrf
@method('PUT')

<label for="titulo">Titulo</label>
<input type="text" name="titulo" placeholder="Escriba su titulo"  id="titulo" value="{{old('titulo',$album->titulo)}}">
@error('titulo')
    <p class="text-red-500 text-sm mt-1">
        {{ $message }}
    </p>
  @enderror
  <br>
  <label for="anyo">Año</label>
<input type="numeric" name="anyo" id="anyo" placeholder="Escriba el año del album"  value="{{old('anyo',$album->anyo)}}">
@error('anyo')
    <p class="text-red-500 text-sm mt-1">
        {{ $message }}
    </p>
  @enderror
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Editar
  </button>
</form>

</x-app-layout>
