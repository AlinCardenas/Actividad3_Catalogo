<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Lista de servicios</h1>
        <x-enlace route="{{ route('services.create') }}">Crear servicio</x-enlace>
        
        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($services as $service)
                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[350px]">
                        <div class="p-4">
                            <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('services.show', $service->id)}}">Servicios {{$service->name}}</a>
                            <p class="text-gray-600 mb-2">Precio: ${{ $service->price }}</p>
                            <div class="mb-10">
                                <p class="text-gray-600 mb-2 text-justify">Descripcion: {{ Str::limit($service->description, 100) }}</p>
                            </div>
                            <div class="">
                                <div class="mt-2">
                                    <a href="{{ route('services.edit', $service->id) }}" class="font-bold text-blue-600 hover:text-blue-700">Editar</a>
                                </div>
                                <form action="{{ route('services.destroy', $service->id) }}" method="post" class="inline">
                                    @csrf
                                    @method('delete')
                                    <div class="mt-2">
                                        <button type="submit" class="font-bold text-rose-600 hover:text-red-700">Eliminar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
        
        {{$services->links()}}
    </div>
</x-guest-layout>
