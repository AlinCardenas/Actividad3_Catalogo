<x-layout>
    <div class="grid justify-items-center items-center h-screen">
        <div class="grid grid-cols-3 gap-[150px] justify-items-center">
            <div class="grid justify-items-center items-center hover:opacity-25">
                <a href="{{route('destinations.back', $destination->id)}}">
                    <img src="{{asset('images/flecha.png')}}" alt="" class="w-64 h-64 rotate-180">
                </a>
            </div>
            <div>
                <div class="bg-white rounded-lg shadow-2xl p-6 w-full border-4">
                    <div class="grid justify-items-center items-center">
                        <img class=" rounded-lg mb-4" src="{{asset('storage/images/' . $ruta)}}" alt="Card Image" width="100" height="100">
                        <h1 class="text-xl font-bold my-2">Nombre: {{$destination->name}}</h1>
                        <h2 class="font-semibold my-2">Dirección: {{$destination->address}}</h3>
                        <p class="text-gray-700 text-base">
                            {{$destination->description}}
                        </p>
                        <p class="mt-3">Idiomas:</p>
                        <ul class="list-disc ml-5">
                            <li>{{$destination->languages}}</li>
                        </ul>
                    </div>   
                </div>
            </div>
            <div class="grid justify-items-center items-center hover:opacity-25">
                <a href="{{route('destinations.skip', $destination->id)}}">
                    <img src="{{asset('images/flecha.png')}}" alt="" class="w-64 h-64 ">
                </a>
            </div>

        </div>
    </div>
</x-layout>