<x-guest-layout>
    
    <div class="container mx-auto mt-2">
        
        <div class="bg-white shadow-md rounded px-8 max-w-md mx-auto py-6 mb-4 ">
            <div class="col-span-3">
                <h1 class="text-3xl font-bold mb-4 ml-4 text-center">Aeropuertos: {{ $airport->name }}</h1>
            </div>
            <div>
                <strong>Direccion: </strong>{{$airport->address_id}}
            </div>
            <div>
                <strong>Cantidada de pasajeros: </strong>{{$airport->cant}}
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('airports.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('airports.skip', $airport->id) }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> > </a>
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('airports.back', $airport->id) }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Back</a>
            </div>
        </div>
    </div>
</x-guest-layout>