<x-guest-layout>
    
    <div class="container mx-auto mt-2">
        
        <div class="bg-white shadow-md rounded px-8 max-w-md mx-auto py-6 mb-4 ">
            
     
            <div class="col-span-3">
                <h1 class="text-3xl font-bold mb-4 ml-4 text-center">Direccion {{ $addresses->id }}</h1>
            </div>

            
            <div>
                <strong>Calle: </strong>{{$addresses->street}}
            </div>
            <div>
                <strong>Numero: </strong>{{$addresses->number}}
            </div>
            <div>
                <strong>Codigo postal: </strong>{{$addresses->cp}}
            </div>

            <div>
                <strong>Estado: </strong>{{$addresses->state}}
            </div>
            <div>
                <strong>Telefono: </strong>{{$addresses->phone}}
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('addresses.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>
            
        </div>
    </div>
</x-guest-layout>