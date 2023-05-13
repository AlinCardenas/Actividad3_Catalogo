<x-layout title="Destinos">
    <div class="m-[40px]">
        <h1 class="text-5xl mb-4">Registros</h1>
        <table class="border-collapse border-4 border-cyan-500 w-full">
          <thead>
            <tr>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Nombre</th>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Dirección</th>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Valoración</th>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Descripción</th>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Idiomas</th>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Ver</th>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Editar</th>
              <th class="border-4 w-screen border-sky-400	font-mono text-xl">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $item)    
                <tr>
                  <td class="border-4 w-screen border-sky-400	font-semibold">{{$item->name}}</td>
                  <td class="border-4 w-screen border-sky-400	font-semibold">{{$item->address}}</td>
                  <td class="border-4 w-screen border-sky-400	font-semibold">{{$item->ranking}}</td>
                  <td class="border-4 w-screen border-sky-400	font-semibold">{{Str::limit($item->description, 20)}}</td>
                  <td class="border-4 w-screen border-sky-400	font-semibold">{{$item->languages}}</td>
                  
                  <td class="border-4 w-screen border-sky-400		">
                    <a href="{{route('destinations.show', $item->id)}}" class="rounded-full bg-cyan">Mostrar</a>
                  </td>
                  <td class="border-2 w-screen border-black	">
                    <a href="{{route('destinations.edit', $item->id)}}">Editar</a>
                  </td>
                  <td class="border-2 w-screen border-black	">
                    <form action="{{route('destinations.destroy', $item->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <a href="">Eliminar</a>
                    </form>
                  </td>
                </tr>
            @endforeach
            
          </tbody>
        </table>
        {{ $registers->links() }}
    </div>
</x-layout>