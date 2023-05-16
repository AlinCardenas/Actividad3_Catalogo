<div>
    <form class="" action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-end  mt-4">
            <a href="{{ route('services.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a
                inicio</a>
        </div>

        <x-input-hotels nombre="Nombre" name="name" type="text"  />
        <x-input-hotels nombre="Precio" name="price" type="number"  />
        <x-input-hotels nombre="Descripcion" name="description" type="text"  />
        
        <button type="submit"
            class="px-4 py-2 mt-4 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Registrar</button>
    </form>
</div>
