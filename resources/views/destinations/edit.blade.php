<x-layout>
    <form class="w-5/12 mx-auto mt-9" method="POST" action="{{route('destinations.update', $destination)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h1 class="font-bold text-4xl text-center " >Actualizar registro de destino</h1>
      
        <div class="mb-4 mt-6">
            <label for="name" class="block mb-2 font-bold">Nombre:</label>
            <input type="text" name="name" class="w-full px-3 py-2 border rounded-md"  value="{{$destination->name}}">
        </div>
    
        <div class="mb-4">
            <label for="price" class="block mb-2 font-bold">Dirección:</label>
            <input type="text"  name="address" class="w-full px-3 py-2 border rounded-md" value="{{$destination->description}}">
        </div>
    
        <div class="mb-4">
            <label for="address" class="block mb-2 font-bold">Calificación:</label>
            <input type="number" name="ranking"  class="w-full px-3 py-2 border rounded-md" max="10" min="1"value="{{$destination->ranking}}">
        </div>
    
        <div class="mb-4">
            <label for="ranking" class="block mb-2 font-bold">Descripción:</label>
            <textarea name="description" id="" class="w-full px-3 py-2 border rounded-md">
                {{$destination->description}}
            </textarea>
        </div>

        <div class="mb-4">
            <label for="destino" class="block mb-2 font-bold">Idiomas:</label>
            <input type="text" name="languages"  class="w-full px-3 py-2 border rounded-md" value="{{$destination->languages}}">
        </div>

        <div class="mb-4">
            <label for="destino" class="block mb-2 font-bold">Imagenes: </label>
            <input type="file" name="images[]"  class="w-full px-3 py-2 border rounded-md" multiple>
        </div>
    
        <div class="grid justify-items-center">
            <button type="submit" class="w-3/12 py-2  text-white bg-purple-600 rounded-md">Crear registro</button>
        </div>
    </form>
</x-layout>