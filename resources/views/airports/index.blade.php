<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Aeropuertos</h1>
        <div class="flex justify-end mt-2">
            <a href="{{ route('airports.create') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Agregar Aeropuerto</a>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($airports as $airport)
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow-2xl p-[10px] ">
                        
                        <div class="p-4">
                            <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('airports.show', $airport->id)}}">{{$airport->name}} </a>
                            <p class="text-gray-600 mb-2">Direccion: {{ $airport->address->street }} {{ $airport->address->number }} {{ $airport->address->cp }} {{ $airport->address->state }} </p>
                            <p class="text-gray-600 mb-2">Cantidad de pasajeros: {{ $airport->cant }}</p>
                            <div class="mt-2">
                                <a href="{{ route('airports.edit', $airport->id) }}" class="font-bold text-blue-600 hover:text-blue-700">Editar</a>
                            </div>
                            <form action="{{ route('airports.destroy', $airport->id) }}" method="post" class="inline">
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
        
        {{$airports->links()}}

    </div>
</x-guest-layout>