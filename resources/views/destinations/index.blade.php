<x-layout title="Destinos">
    <div class="m-[40px]">
      <div class="grid grid-cols-2 ">
        <div>
          <h1 class="text-5xl mb-7">Registros</h1>
        </div>
        <div class="flex flex-row-reverse h-[45px] my-auto">
          <a href="{{route('destinations.create')}}" class="border-2 p-2 bg-black text-white font-bold w-[170px] text-center">Crear registro</a>
        </div>
      </div>
        <table class="border-collapse border-4 border-cyan-500 w-full mt-5">
          <thead>
            <tr>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Nombre</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Dirección</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Valoración</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Descripción</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Idiomas</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Imagenes</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Ver</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Editar</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $item)
            {{-- @php
                $imgs = json_decode($item->images);
            @endphp --}}
                <tr>
                  <td class="border-4 w-screen px-4 py-2 text-center border-blue-400 font-semibold">
                    {{$item->name}}
                  </td>

                  <td class="border-4 w-screen px-4 py-2 text-center border-blue-400 font-semibold">
                    {{$item->address}}
                  </td>

                  <td class="border-4 w-screen px-4 py-2 text-center border-blue-400 font-semibold">
                    {{$item->ranking}}
                  </td>

                  <td class="border-4 w-screen px-4 py-2 text-center border-blue-400 font-semibold">
                    {{-- @foreach ($imgs as $path)  
                      @php
                        $ruta = str_replace('public/images/', '', $path)  ;
                      @endphp
                      <img src="{{asset('storage/images/' . $ruta)}}" alt="" width="50" height="50">
                    @endforeach --}}
                      {{Str::limit($item->description, 20)}}
                  </td>
                  <td class="border-4 w-screen px-4 py-2 text-center border-blue-400 font-semibold">
                    {{$item->languages}}
                  </td>

                  <td class="border-4 w-screen px-4 py-2 text-center border-blue-400 font-semibold">{{$item->languages}}
                  </td>
                  
                  <td class="border-4 w-screen border-blue-400	px-4 py-2 text-center">
                    <a href="{{route('destinations.show', $item->id)}}" class="border-2 p-2 rounded-3xl bg-blue-700	 text-white font-bold">Mostrar</a>
                  </td>
                  <td class="border-4 w-screen border-blue-400	px-4 py-2 text-center">
                    <a href="{{route('destinations.edit', $item->id)}}" class="border-2 p-2 rounded-3xl bg-green-600 text-white font-bold">Editar</a>
                  </td>
                  <td class="border-4 w-screen border-blue-400	px-4 py-2 text-center">
                    <form action="{{route('destinations.destroy', $item->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="border-2 p-2 rounded-3xl bg-red-700 text-white font-bold">Eliminar</button>
                    </form>
                  </td>
                </tr>
            @endforeach
            
          </tbody>
        </table>
        <span class="m-8">
          {{ $registers->links() }}
        </span>
    </div>
</x-layout>