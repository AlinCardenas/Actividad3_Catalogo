<x-layout title="Dashboard">
<x-Navbar>
</x-Navbar>

 <x-menu-nav>

    <x-container1>

            <span><h1 class="text-4xl font-bold text-center text-[#ffffff]">Mostrar direcciones</h1></span>
            <br>

            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold mb-2 px-4 py-2">Direccion</h2>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border-t-0 px-4 py-2">Datos</th>
                            <th class="border-t-0 px-4 py-2">Informacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">Id</td>
                            <td class="px-4 py-2">{{$addresses->id}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Calle</td>
                            <td class="px-4 py-2">{{$addresses->street}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Numero</td>
                            <td class="px-4 py-2">{{$addresses->number}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Codigo postal</td>
                            <td class="px-4 py-2">{{$addresses->cp}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Estado</td>
                            <td class="px-4 py-2">{{$addresses->state}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Telefono</td>
                            <td class="px-4 py-2">{{$addresses->phone}}</td>
                        </tr>
                    </tbody>
                </table>
                        <br>
                        <a class="bg-[#77dd77] text-white px-4 py-2 rounded-md m-3" href="http://127.0.0.1:8000/addresses">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
            </div>

        

            
    </x-container1>

 </x-menu-nav>
 <x-footer></x-footer>
</x-layout>
