
<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Lista de destinos</h1>
        <div class="flex justify-end mt-2">
            <a href="{{ route('destinations.create') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Agregar destino</a>
        </div>
        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($registers as $item)
            <div class="col-span-1">
                <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[500px]">
                    @php
                        $contenedor = [];
                        $contenedorf = [];
                        array_push($contenedor, json_decode($item->images)) ;
                        foreach ($contenedor as $value) {
                            array_push($contenedorf, $value[0]) ;
                        }
                        $ruta = str_replace('public/images/', '', $contenedorf[0]);
                    @endphp
                    <img class="mx-auto mt-3" src="{{asset('storage/images/' . $ruta)}}" width="250" height="250">
                    <div class="p-4">
                        <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('destinations.show', $item->id)}}">Destino {{$item->name}} </a>
                        <p class="text-gray-600 mb-2">Puntuación: {{ $item->ranking }}</p>
                        <p class="text-gray-600 mb-2">Descripción: {{ Str::limit($item->description, 60) }}</p>
                        <div class="mt-2">
                            <a href="{{ route('destinations.edit', $item->id) }}" class="font-bold text-blue-600 hover:text-blue-700">Editar</a>
                        </div>
                        <form action="{{ route('destinations.destroy', $item->id) }}" method="post" class="inline">
                            @csrf
                            @method('delete')
                            <div class="mt-2">
                                <button type="submit"
                                    class="font-bold text-rose-600 hover:text-red-700">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$registers->links()}}
    </div>
</x-guest-layout>