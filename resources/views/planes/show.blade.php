<x-guest-layout>
    
    <div class="container mx-auto mt-2">
        
        <div class="bg-white shadow-md rounded px-8 max-w-md mx-auto py-6 mb-4 ">
            
     
            <div class="col-span-3">
                <h1 class="text-3xl font-bold mb-4 ml-4 text-center">Avion {{ $planes->id }}</h1>
            </div>

            
            <div>
                <strong>Capacidad: </strong>{{$planes->cant}}
            </div>
            <div>
                <strong>Modelo: </strong>{{$planes->model}}
            </div>
            <div>
                <strong>Tipo de avion: </strong>{{$planes->type}}
            </div>

            <div>
                <strong>Clase: </strong>{{$planes->class}}
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('planes.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>
            
        </div>
    </div>
</x-guest-layout>