<x-guest-layout>
    
    <div class="container mx-auto mt-2">
        
        <div class="bg-white shadow-md rounded px-8 max-w-md mx-auto py-6 mb-4 ">
            
            <div class="col-span-3">
                <h1 class="text-3xl font-bold mb-4 ml-4 text-center">Aerolineas {{ $airline->name }}</h1>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5">
                <img class="mx-auto mt-3" src="{{asset($airline->logo)}}" width="250" height="250">
            </div>
            <div>
                <strong>Descripcion: </strong>{{$airline->description}}
            </div>
            <div>
                <strong>Valoracion: </strong>{{$airline->ranking}}
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('airline.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('airline.skip', $airline->id) }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> > </a>
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('airline.back', $airline->id) }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Back</a>
            </div>
        </div>
    </div>
</x-guest-layout>