<x-layout title="Destinos">
    <div class="m-8">
        <h1 class="text-4xl mb-4">Registros</h1>
        <table class="border-collapse border-2 border-cyan-500 w-full">
          <thead>
            <tr>
              <th class="border-2 w-screen border-black	">Nombre</th>
              <th class="border-2 w-screen border-black	">Dirección</th>
              <th class="border-2 w-screen border-black	">Valoración</th>
              <th class="border-2 w-screen border-black	">Descripción</th>
              <th class="border-2 w-screen border-black	">Idiomas</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registers as $item)    
                <tr>
                  <td class="border-2 w-screen border-black">{{$item->name}}</td>
                  <td class="border-2 w-screen border-black">{{$item->address}}</td>
                  <td class="border-2 w-screen border-black">{{$item->ranking}}</td>
                  <td class="border-2 w-screen border-black">{{$item->description}}</td>
                  <td class="border-2 w-screen border-black">{{$item->languages}}</td>
                </tr>
            @endforeach
            
          </tbody>
        </table>
        {{ $registers->links() }}
    </div>
</x-layout>