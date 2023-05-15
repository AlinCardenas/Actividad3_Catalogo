<x-layout>
    <form class="w-5/12 mx-auto mt-9" method="POST" action="{{route('destinations.update', $destination)}}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <h1 class="font-bold text-4xl text-center " >Actualizar registro de destino</h1>
        <x-input-txt nombre="name" tipo="text" etiqueta="Nombre: " value="{{$destination->name}}"/>
        <x-input-txt nombre="address" tipo="text" etiqueta="Dirección: " value="{{$destination->address}}"/>
        <x-input-txt nombre="ranking" tipo="number" etiqueta="Calificación: " value="{{$destination->ranking}}"/>
        <x-input-txt nombre="languages" tipo="text" etiqueta="Idiomas: " value="{{$destination->languages}}"/>
        <x-text-area nombre="description" etiqueta="Descrición">
            {{$destination->description}}
        </x-text-area>
        <x-input-txt nombre="images[]" tipo="file" etiqueta="Imagenes: " multiple  class="border-none px-0"/>
    
        <div class="grid justify-items-center">
            <button type="submit" class="w-3/12 py-2 text-white bg-purple-600 rounded-md mb-4">Acualizar registro</button>
        </div>
    </form>
</x-layout>
