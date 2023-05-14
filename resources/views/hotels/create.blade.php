<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <form class="" action="{{route('hotels.store')}}" method="POST" enctype="multipart/form-data" >

            <h1 class="text-3xl text-center font-bold  text-gray-700" >Registro de hotel</h1>
            @csrf

            <div class="flex justify-end  mt-4">
                <a href="{{ route('hotels.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>


            <div class="">
                <label for="name" class="mb-2 font-bold">Nombre</label>
                <input type="text" name="name" class="shadow-2xl rounded-lg p-2 w-full border-slate-300" required >
            </div>

            <div class="grid grid-cols-4 gap-3 mt-6">
                <div class="col-span-3">
                    <label for="price" class="mb-2 font-bold">Precio</label>
                    <input type="number"  name="price" class="shadow-2xl rounded-lg p-2 w-full border-slate-300"  required>
                </div>
                <div class="">
                    <label for="ranking" class="mb-2 font-bold">Puntuación</label>
                    <input type="number" name="ranking"  class="shadow-2xl rounded-lg p-2 w-full border-slate-300"  required>
                </div>

            </div>
        
            <div class="">
                <label for="address" class="mb-2 font-bold">Dirección</label>
                <input type="text" name="address"  class="shadow-2xl rounded-lg p-2 w-full border-slate-300" required>
            </div>
        
            <div class="">
                <label for="description" class="mb-2 font-bold">Descripcion</label>
                <textarea name="description" class="shadow-2xl rounded-lg p-2 w-full border-slate-300" ></textarea>
            </div>

            <div class="grid grid-cols-4 gap-3">
                <div class="col-span-2">
                    <label for="logo" class="mb-2 font-bold">Logo</label>
                    <input type="file" name="logo"  class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  required>
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
                <button type="submit" class="px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Registrar</button>
            </div>
        </form>

    </div>

</x-guest-layout>