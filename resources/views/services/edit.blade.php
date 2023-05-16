<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <form class="" action="{{route('services.update', $service)}}" method="POST" enctype="multipart/form-data" >

            <h1 class="text-3xl text-center font-bold  text-gray-700" >Actualizar servicio</h1>
            @csrf
            @method('put')
            <div class="flex justify-end  mt-4">
                <a href="{{ route('services.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>

            <div class="">
                <label for="name" class="mb-2 font-bold">Nombre</label>
                <input type="text" name="name" class="shadow-2xl rounded-lg p-2 w-full border-slate-300" required >
            </div>
        
            <div class="">
                <label for="address" class="mb-2 font-bold">precio</label>
                <input type="number" name="price"  class="shadow-2xl rounded-lg p-2 w-full border-slate-300" required>
            </div>
        
            <div class="">
                <label for="description" class="mb-2 font-bold">Descripcion</label>
                <textarea name="description" class="shadow-2xl rounded-lg p-2 w-full border-slate-300" ></textarea>
            </div>
        
            <div class="">
                <button type="submit" class="px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Registrar</button>
            </div>
        </form>

    </div>

</x-guest-layout>