<x-app-layout>
    <x-slot name="header">
        <h2 style="text-align: center" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informacion del album') }}
        </h2>
    </x-slot>

    <div style="text-align: center">
        <br>
    <label for="dni"> Titulo: {{$album->titulo}}</label>
    <br>
    <label for="nombre"> Año: {{$album->anyo}}</label>
    <br>
    <button class="px-4 py-1 text-sm text-white bg-blue-400 rounded"><a href="/albumes">Volver</a></button>
</div>



</x-app-layout>
