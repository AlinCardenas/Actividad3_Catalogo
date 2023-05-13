<x-layout>
    <form class="max-w-6xl mx-auto mt-9 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 " method="POST" action="{{route('destinations.store')}}" >
        @csrf
        <h1 class="font-bold text-4xl text-center " >Registro de destinos</h1>
      
        <div class="mb-4 mt-6">
            <label for="name" class="block mb-2 font-bold">Nombre:</label>
            <input type="text" name="name" class="w-full px-3 py-2 border rounded-md"  >
        </div>
    
        <div class="mb-4">
            <label for="price" class="block mb-2 font-bold">Dirección:</label>
            <input type="text"  name="address" class="w-full px-3 py-2 border rounded-md" >
        </div>
    
        <div class="mb-4">
            <label for="address" class="block mb-2 font-bold">Calificación:</label>
            <input type="number" name="ranking"  class="w-full px-3 py-2 border rounded-md" max="10" min="1">
        </div>
    
        <div class="mb-4">
            <label for="ranking" class="block mb-2 font-bold">Descripción</label>
            <textarea name="description" id="" class="w-full px-3 py-2 border rounded-md">

            </textarea>
        </div>

        <div class="mb-4">
                <label for="destino" class="block mb-2 font-bold">Idiomas</label>
            <input type="text" name="languages"  class="w-full px-3 py-2 border rounded-md" >
        </div>
    
        <div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Crear registro</button>
        </div>
    </form>
</x-layout>