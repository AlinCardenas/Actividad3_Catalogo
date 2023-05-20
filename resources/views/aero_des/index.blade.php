<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Lista de Enlaces</h1>
        <div class="flex justify-end mt-2">
            <a href="{{ route('aero_des.create') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Agregar Enlace (Aerolinea, Destino y Aeropuerto)</a>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($registers as $item)
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[250px]">
                       
                        <div class="p-4">
                            <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('aero_des.show', $item->id)}}">Direccion {{$item->id}} </a>
                            <p class="text-gray-600 mb-2">Destino: {{ $item->destinations->name }}</p>
                            <p class="text-gray-600 mb-2">Aeropuerto: {{ $item->airports->name }}</p>
                            <p class="text-gray-600 mb-2">Aerolinea: {{ $item->airlines->name  }}</p>
                            <div class="mt-2">
                                <a href="{{ route('aero_des.edit', $item->id) }}" class="font-bold text-blue-600 hover:text-blue-700">Editar</a>
                            </div>
                            <form action="{{ route('aero_des.destroy', $item->id) }}" method="post" class="inline">
                                @csrf
                                @method('delete')
                                <div class="mt-2">
                                    <button type="submit" class="font-bold text-rose-600 hover:text-red-700">Eliminar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
        <span class="m-8">
            {{ $registers->links() }}
        </span>
    </div>
</x-guest-layout>