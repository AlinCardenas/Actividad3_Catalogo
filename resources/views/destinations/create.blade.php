<x-layout>
    <form class="w-5/12 mx-auto mt-9" method="POST" action="{{route('destinations.store')}}" enctype="multipart/form-data">
        @csrf
        <h1 class="font-bold text-4xl text-center " >Registro de destinos</h1>
        <x-input-txt nombre="name" tipo="text" etiqueta="Nombre: " />
        <x-input-txt nombre="address" tipo="text" etiqueta="Dirección: " />
        <x-input-txt nombre="ranking" tipo="number" etiqueta="Calificación: " />
        <x-input-txt nombre="languages" tipo="text" etiqueta="Idiomas: " />
        <x-text-area nombre="description" etiqueta="Descrición" />
        <x-input-txt nombre="images[]" tipo="file" etiqueta="Imagenes: " multiple  class="border-none px-0"/>
    
        <div class="grid justify-items-center">
            <button type="submit" class="w-3/12 py-2 text-white bg-purple-600 rounded-md mb-4">Crear registro</button>
        </div>
    </form>
</x-layout>