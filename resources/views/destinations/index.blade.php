<x-layout>
    <x-table title="Registros de destinos">
        <x-slot name="btn">
            <x-link-id href="{{route('destinations.create')}}" mensaje="Crear destino"
                class="bg-slate-950 rounded-sm w-[165px] text-center" />
        </x-slot>

        <table class="border-collapse border-4 border-cyan-500 w-full mt-5">
            <thead>
                <tr>
                    <x-table-head mensaje="Nombre" />
                    <x-table-head mensaje="Valoración" />
                    <x-table-head mensaje="Descripción" />
                    <x-table-head mensaje="Idiomas" />
                    <x-table-head mensaje="Mostrar" />
                    <x-table-head mensaje="Editar" />
                    <x-table-head mensaje="Eliminar" />
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $item)
                <tr>
                    <x-table-row :item="$item->name" />
                    <x-table-row :item="$item->ranking" />
                    <x-table-row :item="Str::limit($item->description, 30)" />
                    <x-table-row :item="$item->languages" />

                    <x-table-row-link>
                        <x-link-id href="{{route('destinations.show', $item->id)}}" mensaje="Mostrar" />
                    </x-table-row-link>
                    <x-table-row-link>
                        <x-link-id href="{{route('destinations.edit', $item->id)}}" mensaje="Editar"
                            class="bg-green-600" />
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
    </x-table>
</x-layout>