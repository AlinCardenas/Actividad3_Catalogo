<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Listado de Aerolineas
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 rounded">
            
            <x-table title="Listado de crías">
                <x-slot name="columns">
                    <x-th text="Nombre"> </x-th>
                    <x-th text="Descripcion"> </x-th>
                    <x-th text="Valoracion"> </x-th>
                    <x-th text="Acciones"> </x-th>
                </x-slot>

                <x-slot name="actions">
                    <a href="{{ route('airlines.create') }}" class="pointer-events-auto rounded-md bg-blue-600 py-2 px-3 font-semibold leading-5 text-white hover:bg-blue-500">Registrar</a>
                </x-slot>

                @forelse ($airlines as $airline)
                    <tr class="hover:bg-gray-100">
                        <x-td>
                            <p class="text-sm font-medium text-gray-900 truncate overflow-ellipsis w-36">
                                {{$airline->name}}
                            </p>
                        </x-td>
                        <x-td>
                            <p class="text-sm font-medium text-gray-900">
                                {{$airline->description}}
                            </p>
                        </x-td>
                        <x-td>
                            <p class="text-sm font-medium text-gray-900">
                                {{$airline->ranking}}
                            </p>
                        </x-td>
                        <x-td>
                            <label class="text-sm font-medium text-gray-900 cursor-pointer" title="ver">
                                👁️‍🗨️
                            </label>
                            <a href="{{route('airlines.edit', $airline->id)}}"  class="text-sm font-medium text-gray-900 cursor-pointer" title="editar" wire:click="editar" >
                                ✍️
                            </a>
                            <label class="text-sm font-medium text-gray-900 cursor-pointer" title="borrar" wire:click="borrar({{$airline->id}})">
                                ✖️
                            </label>
                        </x-td>
                    </tr>
                @empty
                    <tr class="hover:bg-gray-100">
                        <x-td colspan="7" position="text-center font-bold">
                            No se encontrarón resultados...
                        </x-td>
                    </tr>
                @endforelse

                <x-slot name="links">
                    {{ $airlines->links() }}
                </x-slot>
            </x-table>
        </div>
    </div>
</div>

