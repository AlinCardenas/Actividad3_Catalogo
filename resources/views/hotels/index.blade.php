<x-guest-layout>
    <h1 class="text-xl text-center font-bold">Lista de hoteles</h1>
    <div class="mt-4 ml-4">
        <a href="{{ route('hotels.create') }}" class="text-purple-600 hover:text-purple-600  px-4"> Agregar hotel</a>
    </div>
    <div class="mx-auto w-max-content">
        <table class="min-w-full divide-y divide-gray-200 mt-4">
            <thead>
                <tr>
                    <th class="py-3 px-6 text-center">Nombre </th>
                    <th class="py-3 px-6 text-center ">Precio</th>
                    <th class="py-3 px-6 text-center">Dirección</th>
                    <th class="py-3 px-6 text-center">Puntuación</th>
                    <th class="py-3 px-8 text-center">Descripción</th>
                    <th class="py-3 px-6 text-center">Acciones</th>
              </tr>
            </thead>
            
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td class="py-4 px-6 text-center">{{ $hotel->name }}</td>
                        <td class="py-4 px-6 text-center">{{ $hotel->price }}</td>
                        <td class="py-4 px-6 text-center">{{ $hotel->address }}</td>
                        <td class="py-4 px-6 text-center">{{ $hotel->ranking }}</td>
                        <td class="py-4 px-6 text-justify">{{ $hotel->description }}</td>
                        <td class="py-4 px-6 text-center">
                            <div class="mt-4">
                                <a href="{{ route('hotels.edit', $hotel->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                            </div>
                            
                            <form action="{{ route('hotels.destroy', $hotel->id) }}" method="post" class="inline">
                                @csrf
                                @method('delete')
                                <div class="mt-4">
                                    <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    
    
      
    {{$hotels->links()}}

</x-guest-layout>