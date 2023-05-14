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
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Ver</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Editar</th>
              <th class="border-4  border-blue-400 bg-blue-400 text-black font-mono text-xl ">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $item)
                <tr>
                  <x-table-row :item="$item->name" />
                  <x-table-row :item="$item->address" />
                  <x-table-row :item="$item->ranking" />
                  <x-table-row :item="Str::limit($item->description, 30)" />
                  <x-table-row :item="$item->languages" />
                  
                  <x-table-row-link>
                      <x-link-id href="{{route('destinations.show', $item->id)}}" mensaje="Mostrar"/>
                  </x-table-row-link>
                  <x-table-row-link>
                      <x-link-id href="{{route('destinations.edit', $item->id)}}" mensaje="Editar" class="bg-green-600"/>
                  </x-table-row-link>
                  <x-table-row-link>
                    <x-table-row-delete action="{{route('destinations.destroy', $item->id)}}" />
                  </x-table-row-link>
                </tr>
            @endforeach
            
          </tbody>
        </table>
        <span class="m-8">
          {{ $registers->links() }}
        </span>
    </div>
</x-layout>