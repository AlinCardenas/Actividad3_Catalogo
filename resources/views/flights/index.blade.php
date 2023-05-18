<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Vuelos</h1>
        <div class="flex justify-end mt-2">
            <a href="{{ route('flights.create') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Agregar
                Vuelo</a>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($registers as $item)
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[500px]">
                        <div class="p-4">
                            {{-- <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('hotels.show', $hotel->id)}}">Hotel {{$hotel->name}} </a> --}}
                            <p class="text-gray-600 mb-2">Fecha de salida: {{ $item->leave_date }}</p>
                            <p class="text-gray-600 mb-2">Fecha de llegada: {{ $item->arrive_date }}</p>
                            <p class="text-green-500 font-semibold">Duración: ${{ $item->duration }}</p>
                            <p class="text-green-500 font-semibold">Precio: ${{ $item->price }}</p>
                            <p class="text-green-500 font-semibold">Destino: ${{ $item->destinations }}</p>
                            <p class="text-green-500 font-semibold">Aeropuerto: ${{ $item->airports }}</p>
                            <div class="mt-2">
                                <a href="{{ route('flights.edit', $item->id) }}"
                                    class="font-bold text-blue-600 hover:text-blue-700">Editar</a>
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

        {{-- {{ $item->links() }} --}}

    </div>
</x-guest-layout>
