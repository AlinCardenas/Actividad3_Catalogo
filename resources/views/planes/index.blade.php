<x-layout title="Vuelos">
<x-Navbar></x-Navbar>
    <x-Container1>

          <div class="flex justify-between">
            <span><h1 class="text-4xl font-bold text-center text-[#ffffff]">Tabla vuelos</h1></span>
            <span><x-button-redirect route="http://127.0.0.1:8000/planes/create" message="Agregar" /></span>
          </div>
        

    <table class=" border-[#b0c2f2] border-2">
      <br>
  <thead>
    <tr>
      <th class="border px-4 py-2">Id</th>
      <th class="border px-4 py-2">Modelo</th>
      <th class="border px-4 py-2">Acciones</th>
    </tr>
  </thead>
  <tbody bg-[#b0c2f2] >
    @foreach ($planes as $plane)
      <tr>
        <td class="border px-4 py-2">{{ $plane->id }}</td>
        <td class="border px-4 py-2">{{ $plane->model }}</td>
        <td class="border px-4 py-2">
            <div class="flex flex-row">
                 <div class="w-1/3">
                    <a class="bg-[#77dd77] text-white px-4 py-2 rounded-md m-3" href="planes/{{$plane->id}}">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                </div>
                <div class="w-1/3">
                    <a class="bg-[#ffe180] text-white px-4 py-2 rounded-md m-3" href="planes/{{$plane->id}}/edit">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </div>
                 <div class="w-1/3">
                    <form action="planes/{{$plane->id}}" method="POST">
                        {!! csrf_field() !!}
                        @method("delete")
                        <button class="bg-[#ff6961] text-white px-4 py-2 rounded-md m-3" type="submit">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </x-Container1>
    
</x-layout>