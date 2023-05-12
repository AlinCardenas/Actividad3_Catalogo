<x-guest-layout>
    <form class="max-w-6xl mx-auto mt-8 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 " action="{{route('hotels.store')}}" method="POST"  >
        
        <h1 class="font-bold text-4xl text-center " >Registro de hotel</h1>
        <div class="mb-4 mt-6">
            <label for="name" class="block mb-2 font-bold">Nombre</label>
            <input type="text" name="name" class="w-full px-3 py-2 border rounded-md"  required >
        </div>
    
        <div class="mb-4">
            <label for="price" class="block mb-2 font-bold">Precio</label>
            <input type="double"  name="price" class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div class="mb-4">
            <label for="address" class="block mb-2 font-bold">Dirección</label>
            <input type="text" name="address"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div class="mb-4">
            <label for="ranking" class="block mb-2 font-bold">Puntuación</label>
            <input type="number" name="ranking"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div class="mb-4">
            <label for="description" class="block mb-2 font-bold">Descripcion</label>
            <textarea name="description" class="w-full px-3 py-2 border rounded-md" ></textarea>
        </div>

        <div class="mb-4">
            <label for="logo" class="block mb-2 font-bold">Logo</label>
            <input type="file" name="logo"  class="w-full px-3 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="image" class="block mb-2 font-bold">Imagen</label>
            <input type="file" name="image"  class="w-full px-3 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
                <label for="destino" class="block mb-2 font-bold">Destino</label>
            <input type="text" name="destino"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Registra</button>
        </div>
    </form>

</x-guest-layout>