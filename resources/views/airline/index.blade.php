<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Aerolineas</h1>
        <div class="flex justify-end mt-2">
            <a href="{{ route('airline.create') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Agregar Aerolineas</a>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($airline as $airlin)
            @php
                $ruta = str_replace('public/img/', '', $airlin->logo);
            @endphp
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[500px]">

                        <img class="mx-auto mt-3" src="{{asset('storage/img/' . $ruta)}}" width="250" height="250">

                        <div class="p-4">
                            <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('airline.show', $airlin->id)}}"> Nombre: {{$airlin->name}} </a>
                            <p class="text-gray-600 mb-2">Descripcion: {{ Str::limit($airlin->description, 50) }}</p>
                            <p class="text-gray-600 mb-2">Valoracion: {{ $airlin->ranking }}</p>
                            <div class="mt-2">
                                <a href="{{ route('airline.edit', $airlin->id) }}" class="font-bold text-blue-600 hover:text-blue-700">Editar</a>
                            </div>
                            <form action="{{ route('airline.destroy', $airlin->id) }}" method="post" class="inline">
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
        
        {{$airline->links()}}

    </div>
</x-guest-layout>