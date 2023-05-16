<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <form action="{{route('airports.update', $airport)}}" method="POST" enctype="multipart/form-data">

            <h1 class="font-bold text-4xl text-center ">Editar aerolinia</h1>

            @csrf

            <div class="flex justify-end  mt-4">
                <a href="{{ route('airports.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>

            @method('put')

            <div class="grid grid-cols-4 gap-3 mt-6">
                <div class="col-span-3">
                    <label for="name" class="mb-2 font-bold">Nombre</label>
                    <input type="text" name="name" class="shadow-2xl rounded-lg p-2 w-full border-slate-300" value="{{$airport->name}}" required >
                </div>
                <div class="col-span-3">
                    <label for="price" class="mb-2 font-bold">Descripción</label>
                    <textarea name="description" class="shadow-2xl rounded-lg p-2 w-full border-slate-300" >{{$airport->description}}</textarea>
                <div class="">
                    <label for="ranking" class="mb-2 font-bold">Valoracion</label>
                    <input type="number" name="valoracion"  class="shadow-2xl rounded-lg  w-full border-slate-300" value="{{$airport->valoracion}}" required>
                </div>
                <div class="col-span-2">
                    <label for="logo" class="mb-2 font-bold">Logo</label>
                    <input type="file" name="logo"  class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  required>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">

                    <button type="submit" class="px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">
                        {{ __('Actualizar') }}
                    </button>
                </div>
            </div>
            
        </form>
    </div>
</x-guest-layout>