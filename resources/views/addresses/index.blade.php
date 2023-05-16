<x-layout title="Dashboard">
<x-Navbar>

</x-Navbar>

 <x-menu-nav>

    <x-container1>

    <div class="flex justify-between">
            <span><h1 class="text-4xl font-bold text-center text-[#ffffff]">Tabla direcciones</h1></span>
            <span><x-button-redirect route="http://127.0.0.1:8000/addresses/create" message="Agregar" /></span>
          </div>
          <!-- <H1>YUEFGHBWIEFNWIDNVPORVOFNDSKNVIDSNCLNSIEJKCNDLCSDKCNDSKLJNEDLNJSCNDCNLDKNCLDKSNCLSDNCLDNCKLSDNDKSAMDLKEFNLDKNCVALDKSVNPDKLDNKDSLDCLDAS</H1> -->

    <table class=" border-[#b0c2f2] border-2">
      <br>
  <thead>
    <tr>
      <th class="border px-4 py-2">Id</th>
      <th class="border px-4 py-2">Estado</th>
      <th class="border px-4 py-2">Codigo postal</th>
      <th class="border px-4 py-2">Calle</th>
      <th class="border px-4 py-2">Acciones</th>
    </tr>
  </thead>
  <tbody bg-[#b0c2f2] >
    @foreach ($addresses as $addres)
      <tr>
        <td class="border px-4 py-2">{{ $addres->id }}</td>
        <td class="border px-4 py-2">{{ $addres->state }}</td>
        <td class="border px-4 py-2">{{ $addres->cp }}</td>
        <td class="border px-4 py-2">{{ $addres->street }}</td>
        <td class="border px-4 py-2">
            <div class="flex flex-row">
                 <div class="w-1/3 flex items-center">
                    <a class="bg-[#77dd77] text-white px-4 py-2 rounded-md m-3" href="addresses/{{$addres->id}}">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                </div>
                <div class="w-1/3 flex items-center">
                    <a class="bg-[#ffe180] text-white px-4 py-2 rounded-md m-3" href="addresses/{{$addres->id}}/edit">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </div>
                 <div class="w-1/3">
                    <form action="addresses/{{$addres->id}}" method="POST">
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
            
    </x-container1>

 </x-menu-nav>
 <x-footer></x-footer>
</x-layout>
