<x-layout>
    <div class="grid justify-items-center items-center h-screen">
        <div class="bg-white rounded-lg shadow-2xl p-6 w-3/6 border-4">
            <div class="grid justify-items-center items-center">
                <img class=" rounded-lg mb-4" src="{{asset('storage/images/' . $ruta)}}" alt="Card Image" width="100" height="100">
            </div>
            
            <h2 class="text-xl font-bold my-2">Nombre: {{$destination->name}}</h2>
            <h3 class="font-semibold my-2">Dirección: {{$destination->address}}</h3>
            <p class="text-gray-700 text-base">
                {{$destination->description}}
            </p>
            <p class="mt-3">Idiomas:</p>
            <ul class="list-disc ml-5">
                <li>{{$destination->languages}}</li>
            </ul>
          </div>      
    </div>
</x-layout>