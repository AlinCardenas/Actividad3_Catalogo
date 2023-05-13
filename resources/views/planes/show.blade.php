<x-layout title="Vuelos">
<x-Navbar></x-Navbar>
    <x-Container1>
        <h1>Mostrar vuelos</h1>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold mb-2 px-4 py-2">Vuelo</h2>
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
                            <td class="px-4 py-2">{{$planes->id}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Cpacidad</td>
                            <td class="px-4 py-2">{{$planes->cant}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Modelo</td>
                            <td class="px-4 py-2">{{$planes->model}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Tipo de vuelo</td>
                            <td class="px-4 py-2">{{$planes->type}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Clase</td>
                            <td class="px-4 py-2">{{$planes->class}}</td>
                        </tr>
                    </tbody>
                </table>
                        <br>
                        <a class="bg-[#77dd77] text-white px-4 py-2 rounded-md m-3" href="http://127.0.0.1:8000/planes">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
            </div>

   


    </x-Container1>
    
</x-layout>