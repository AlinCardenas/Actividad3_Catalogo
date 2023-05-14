<x-guest-layout>
    <form class="max-w-6xl mx-auto mt-8 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 " action="{{route('hotels.update', $hotel)}}" method="POST"  >
        
        @csrf
        <h1 class="font-bold text-4xl text-center " >Editar hotel</h1>
        @method('put')
        <div class="mb-4 mt-6">
            <label for="name" class="block mb-2 font-bold">Nombre</label>
            <input type="text" name="name" class="w-full px-3 py-2 border rounded-md"  value="{{$hotel->name}}" required >
        </div>
    
        <div class="mb-4">
            <label for="price" class="block mb-2 font-bold">Precio</label>
            <input type="double"  name="price" class="w-full px-3 py-2 border rounded-md" value="{{$hotel->price}}" required>
        </div>
    
        <div class="mb-4">
            <label for="address" class="block mb-2 font-bold">Dirección</label>
            <input type="text" name="address"  class="w-full px-3 py-2 border rounded-md" value="{{$hotel->address}}" required>
        </div>
    
        <div class="mb-4">
            <label for="ranking" class="block mb-2 font-bold">Puntuación</label>
            <input type="number" name="ranking"  class="w-full px-3 py-2 border rounded-md" value="{{$hotel->address}}" required>
        </div>
    
        <div class="mb-4">
            <label for="description" class="block mb-2 font-bold">Descripcion</label>
            <textarea name="description" class="w-full px-3 py-2 border rounded-md" >value="{{$hotel->description}}"</textarea>
        </div>

            <div class="grid grid-cols-4 gap-3">
                <div class="col-span-2">
                    <label for="logo" class="mb-2 font-bold">Logo</label>
                    <input type="file" name="logo"  class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
        
                <div class="col-span-2">
                    <label for="image" class="mb-2 font-bold">Imagen</label>
                    <input type="file" name="image[]"  class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required multiple>
                </div>
            </div>

            <div class="mt-4 mb-5">
                <label for="img" class="form-label">Selecciona un destino </label>
                <select name="destino_id" id="destino_id">
                    @foreach ($list as $id => $name)
                        <option value="{{ $id }}" {{ $id == $object->destino_id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            
        
            <div class="">
                <button type="submit" class="px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Actualizar</button>
            </div>
            
        </form>

    </div>

</x-guest-layout>