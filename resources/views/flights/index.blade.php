
<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Lista de vuelos</h1>
        <div class="flex justify-end mt-2">
            <a href="{{ route('flights.create') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Agregar vuelo</a>
        </div>
        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($registers as $item)
            <div class="col-span-1">
                <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[500px]">
                    @php
                    // 1.Rempazar nombre imagen
                    $ruta_logo = str_replace('public/img/', '', $item->images);
                    @endphp
                    <img class="mx-auto mt-3" src="{{asset('storage/img/'.$ruta_logo)}}" width="250" height="250">
                    <div class="p-4">
                        <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('flights.show', $item->id)}}">Destino: {{$item->airline__destinations->destinations->name}} </a>
                        <p class="text-gray-600 mb-2">Salida: {{ $item->arrive_date }}</p>
                        <p class="text-gray-600 mb-2">Llegada: {{ $item->leave_date}}</p> 
                        <p class="mb-2 text-black">Precio: ${{ $item->price}}</p> 
                        <div class="mt-2">
                            <a href="{{ route('flights.edit', $item->id) }}" class="font-bold text-blue-600 hover:text-blue-700">Editar</a>
                        </div>
                        <form action="{{ route('flights.destroy', $item->id) }}" method="post" class="inline">
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
